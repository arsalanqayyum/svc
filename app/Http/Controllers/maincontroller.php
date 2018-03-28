<?php

namespace App\Http\Controllers;

use App\brand;
use App\prodcat;
use App\sliders;
use App\topnav;
use App\posts;
use App\widget;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class maincontroller extends Controller
{
    public $widget;
    function __construct()
    {
        $this->widget = widget::all();
    }

    public function topnav(){
        $gettopnav = null;
        return $gettopnav;
    }

    public function footer(){
        $getfooter = null;
        return (compact('getfooter'));
    }

    public function indexpost(){
        $widget = $this->widget;
        $sliders = sliders::all();
        $newitems = DB::table('posts')
            ->join('category','posts.cats_id','=','category.id')
            ->select('posts.image','posts.sub_title','posts.cats_id','posts.id','category.cats')
            ->where('cats_id','=',1)->take(4)->get();
        $scndsec = DB::table('posts')->join('category','posts.cats_id','=','category.id')->where('cats_id','=',2)->get();
	    $third_sec = DB::table('posts')
	                  ->join('category','posts.cats_id','=','category.id')
		              ->join('prodcat','posts.prod_id','=','prodcat.id')
	                  ->select('posts.image','posts.post_title','posts.cats_id','posts.id','category.cats','prod_cat')
	                  ->where('cats_id','=',3)->groupby('prod_id')->get();
        $brands = brand::all();
        return view('index',compact('newitems','scndsec','widget','brands','sliders','third_sec'));
    }

    public function singlepost($id){
        $getpost = posts::query()->findOrFail($id);
        $cat_detail = DB::table('posts')
	        ->join('category','posts.cats_id','=','category.id')->where('posts.id','=',$id)
	        ->select('category.cats','category.images')->first();
        $related_products =
            DB::table('posts')
                ->where('prod_id','=',DB::table('posts')
                    ->select('prod_id')
                    ->where('id','=',$id)
                    ->get()[0]->prod_id)
                ->whereNotIn('id', [$id])->take(4)
                ->get();
        return view('single',compact('getpost','related_products','cat_detail'));
    }

    public function getcat($cat){
        $getcat = DB::table('posts')
            ->join('category','posts.cats_id','=','category.id')
            ->join('prodcat','posts.prod_id','=','prodcat.id')
            ->where('cats','=',$cat)
            ->orwhere('prod_cat','=',$cat)
	        ->select('posts.id','post_title','discount','new_price','posts.image')
            ->get();
	    $cat_detail = DB::table('posts')
	                    ->join('category','posts.cats_id','=','category.id')
		                ->join('prodcat', 'posts.prod_id','=','prodcat.id')
		                ->where('category.cats','=',$cat)
		                ->orwhere('prod_cat','=',$cat)
	                    ->select('category.cats','category.images','prod_cat')->first();
        $sidecats = DB::table('category')
            ->join('posts','category.id','=','posts.cats_id')
            ->select(DB::raw('count(*) as counter, cats_id'),'category.cats','posts.prod_id')
            ->groupby('category.cats')
            ->get();
        $prodcat = DB::table('prodcat')
            ->join('posts','prodcat.id','=','posts.prod_id')
            ->select(DB::raw('count(*) as counter, posts.prod_id'),'prodcat.prod_cat','posts.prod_id')
            ->groupby('prodcat.prod_cat')
            ->get();
        $topsale = DB::table('posts')
                     ->join('category','posts.cats_id','=','category.id')
                     ->where('category.id','=',4)
                     ->select('posts.id','posts.image','post_title','new_price','discount')
                     ->get();
        return view('products',compact('getcat','sidecats','prodcat','cat','cat_detail','topsale'));
    }

    public function aboutpage(){
        $getcontent = $this->widget;
        return view('about',compact('getcontent'));
    }

}
