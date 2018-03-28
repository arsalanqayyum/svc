<?php

namespace App\Http\Controllers;

use App\brand;
use App\category;
use App\posts;
use App\prodcat;
use App\sliders;
use App\widget;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class admin extends Controller
{
    public $allproducts,$catfilter,$prodfilter;
    function __construct()
    {
        $this->allproducts = DB::table('posts')
            ->join('category','posts.cats_id','=','category.id')
            ->join('prodcat','posts.prod_id','=','prodcat.id')
            ->select('posts.id','posts.post_title','posts.sub_title','posts.new_price','posts.image','posts.created_at','prodcat.prod_cat','category.cats')
            ->paginate(6);
        $this->catfilter = category::all();
        $this->prodfilter = prodcat::all();
    }

    public function allslider(){
        $getslider = sliders::all();
        return view('layouts.admin.slider',compact('getslider'));
    }

    public function insertslider(Request $request){
       $post = new sliders;
       $file = $request->file('image');
       $filename = $file->getClientOriginalName();
       storage::put('uploads/slider/'.$filename, file_get_contents($request->file('image')->getRealPath()));
       $post->images = $filename;
       $post->save();
       return redirect()->back();

    }

    public function updateslider($id ,Request $request){
        $post = sliders::query()->findOrFail($id);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            storage::put('uploads/slider/'.$filename, file_get_contents($request->file('image')->getRealPath()));
            $post->images = $filename;
        }
        $post->save();
        return redirect()->back();
    }

    public function deleteslider($id){
        DB::table('sliders')->delete($id);
        return redirect()->back();
    }

    public function allposts(Request $request){
        $allposts = $this->allproducts;
        $catfilter = $this->catfilter;
        $prodfilter = $this->prodfilter;

        return view('layouts.admin.all-posts',compact('allposts','catfilter','prodfilter'));
    }

    public function addpost(Request $request){
        $post = new posts;
        $post->post_title = Input::get('post_title');
        $post->sub_title = Input::get('sub_title');
        $post->post_content = Input::get('description');
        $post->new_price = Input::get('new_price');
        $post->old_price = Input::get('old_price');
	    $post->discount = Input::get('discount');
	    $post->cats_id = Input::get('category');
        $post->prod_id = Input::get('prod_cat');
        $post->size = json_encode(Input::get('size'));
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        storage::put('uploads/images'.$filename, file_get_contents($request->file('image')->getRealPath()));
        $post->image = $filename;
        $post->save();
        return redirect()->route('editpost',$post->getQueueableId());
    }

    public function getcatsonpost(){
        $category = $this->catfilter;
        $prodcat= $this->prodfilter;
        return view('layouts.admin.add-post',compact('category','prodcat'));
    }

    public function editpost($id){
        $post = posts::query()->findOrFail($id);
        $catfilter = $this->catfilter;
        $prodcat= $this->prodfilter;
        return view('layouts.admin.edit',compact('post','catfilter','prodcat'));

    }

    public function updatepost($id, Request $request){
        $post = posts::query()->findOrFail($id);
        $post->post_title = Input::get('post_title');
        $post->sub_title = Input::get('sub_title');
        $post->post_content = Input::get('description');
        $post->new_price = Input::get('new_price');
        $post->old_price = Input::get('old_price');
        $post->discount = Input::get('discount');
        $post->cats_id = Input::get('category');
        $post->prod_id = Input::get('prod_cat');
        $post->size = json_encode(Input::get('size'));
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            storage::put('uploads/images' . $filename, file_get_contents($request->file('image')->getRealPath()));
            $post->image = $filename;
        }
        $post->save();
        return redirect()->back();
    }

    public function deletepost($id){
        DB::table('posts')->delete($id);
        return redirect()->back();
    }


    public function viewcategory(){
        $viewcat = $this->catfilter;
        return view ('layouts.admin.category',compact('viewcat'));
    }

    public function addcategory(Request $request){
        $post = new category;
        $post->cats = Input::get('newcat');
        if($request->hasFile('image')) {
	        $file     = $request->file( 'image' );
	        $filename = $file->getClientOriginalName();
	        storage::put( 'uploads/images' . $filename, file_get_contents( $request->file( 'image' )->getRealPath() ) );
	        $post->images = $filename;
        }
        $post->save();
        return redirect()->back();
    }

    public function editcategory($id, Request $request){
        $post = category::query()->findOrFail($id);
        $post->cats = Input::get('cat');
	    if($request->hasFile('image')) {
		    $file     = $request->file( 'image' );
		    $filename = $file->getClientOriginalName();
		    storage::put( 'uploads/images' . $filename, file_get_contents( $request->file( 'image' )->getRealPath() ) );
		    $post->images = $filename;
	    }
        $post->save();
        return redirect()->back();
    }

    public function deletecategory($id){
        category::query()->findOrFail($id)->delete();
        return redirect()->back();
    }

    public function prodcat(){
        $allprodcat = $this->prodfilter;
        return view('layouts.admin.prodcat',compact('allprodcat'));
    }

    public function addprodcat(){
        $post = new prodcat;
        $post->prod_cat = Input::get('newprodcat');
        $post->save();
        return redirect()->back();
    }

    public function editallprodcat($id){
        $post = prodcat::query()->findOrFail($id);
        $post->prod_cat = Input::get('prodcat');
        $post->save();
        return redirect()->back();
    }

    public function deleteprodcat($id){
        prodcat::query()->findOrFail($id)->delete();
        return redirect()->back();
    }

    public function allbrands(){
        $allbrands = brand::all();
        return view('layouts.admin.brands',compact('allbrands'));
    }

    public function addbrand(Request $request){
        $post = new brand;
        $file = $request->file('newimage');
        $filename = $file->getClientOriginalName();
        storage::put('/uploads/brands'.$filename,file_get_contents($request->file('newimage')));
        $post->images = $filename;
        $post->save();
        return redirect()->back();
    }

    public function editbrand(Request $request, $id){
        $post = brand::query()->findOrFail($id);
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        storage::put('/uploads/brands'.$filename, file_get_contents($request->file('image')->getRealPath()));
        $post->images = $filename;
        $post->save();
        return redirect()->back();
    }

    public function deletebrands($id){
        brand::query()->findOrFail($id)->delete();
        return redirect()->back();
    }

    public function allwidget(){
        $allwidget = widget::all();
        return view('layouts.admin.widget',compact('allwidget'));
    }

    public function updatewidget1($id){
        $post = widget::query()->findOrFail($id);
        $post->title = Input::get('widget1');
        $post->save();
        return redirect()->back();

    }

    public function updatewidget2($id){
        $post = widget::query()->findOrFail($id);
        $post->title = Input::get('widget2');
        $post->save();
        return redirect()->back();

    }

    public function updatewidget3($id){
        $post = widget::query()->findOrFail($id);
        $post->title = Input::get('widget3');
        $post->save();
        return redirect()->back();

    }

    public function updatewidget4(){
         DB::table('widgets')->where('id',3)->update([
             'title' => Input::get('widget4')
        ]);
         DB::table('widgets')->where('id',4)->update([
             'head' =>  Input::get('head1'),
             'content'  => Input::get('content1')
         ]);
        DB::table('widgets')->where('id',5)->update([
            'head' =>  Input::get('head2'),
            'content'  => Input::get('content2')
        ]);
        DB::table('widgets')->where('id',6)->update([
            'head' =>  Input::get('head3'),
            'content'  => Input::get('content3')
        ]);
        return redirect()->back();
    }

    public function updatewidget5(){
        DB::table('widgets')->where('id',10)->update([
            'title' => Input::get('widget5')
        ]);
        return redirect()->back();
    }

    public function updatewidget6(){
        DB::table('widgets')->where('id',8)->update([
            'title' => Input::get('widget6'),
            'links' => json_encode(Input::get('email'))
        ]);
        return redirect()->back();
    }

    public function updatewidget7(){
        DB::table('widgets')->where('id',9)->update([
            'title' => Input::get('widget7'),
           'links'  => json_encode(Input::get('cell'))
        ]);
        return redirect()->back();
    }

    public function updatewidget8(){
        DB::table('widgets')->where('id',12)->update([
            'title' => Input::get('widget8'),
            'content'   => Input::get('address')
        ]);
        return redirect()->back();
    }

    public function filter(Request $request){
        $filter = $request->get('catfilter');
        $newfilter = $request->get('prodfilter');
        $allposts = DB::table('posts')
            ->join('category','posts.cats_id','=','category.id')
            ->join('prodcat','posts.prod_id','=','prodcat.id')
            ->select('posts.id','posts.post_title','posts.sub_title','posts.new_price','posts.image','posts.created_at','prodcat.prod_cat','category.cats')
            ->where('cats_id','=',$filter)
            ->orwhere('prod_id','=',$newfilter)
            ->paginate(6);
        $catfilter = $this->catfilter;
        $prodfilter = $this->prodfilter;
        return view('layouts.admin.all-posts',compact('allposts','catfilter','prodfilter'));
    }


    public function adminaboutpage(){
        $getcontent = widget::all();
        return view('layouts.admin.about-page',compact('getcontent'));
    }

    public function updateaboutpage(){
        DB::table('widgets')->where('id',13)->update(
            [
                'title' => Input::get('title')
            ]);
            DB::table('widgets')->where('id',14)->update(
                [
                    'head' => Input::get('head1'),
                    'content'   => Input::get('cntnt1')
                ]);
            DB::table('widgets')->where('id',15)->update([
               'head'   => Input::get('head2'),
               'content'=> Input::get('content2')
            ]);
            DB::table('widgets')->where('id',16)->update([
                'head'   => Input::get('head3'),
                'content'=> Input::get('content3')
            ]);
        DB::table('widgets')->where('id',17)->update([
            'head'   => Input::get('head4'),
            'content'=> Input::get('content4')
        ]);
        DB::table('widgets')->where('id',18)->update([
            'head'   => Input::get('head5'),
            'content'=> Input::get('content5')
        ]);
        DB::table('widgets')->where('id',19)->update([
            'head'   => Input::get('head6'),
        ]);

        return redirect()->back();
    }
}
