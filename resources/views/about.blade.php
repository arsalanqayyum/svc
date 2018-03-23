@extends('main')
@section('content')
    <div class="abt-bg slider">
        <div class="abt-screen"></div>
        <div>
            <h1 class="abt-screen-head">{{$getcontent->pluck('title')[12]}}</h1>
        </div>

    </div>
    <div class="container">
       <div class="row">
            <div class="col-sm-12">
                <h1 class="abt-head">{{$getcontent->pluck('head')[13]}}</h1>
            </div>
       </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="abt-p">{{$getcontent->pluck('content')[13]}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h1 class="abt-head">{{$getcontent->pluck('head')[14]}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="abt-p">{{$getcontent->pluck('content')[14]}}</p>
            </div>
        </div>
    </div>


           <div class="abt-fa-panel-bg">
               <div class="container">
                   <div class="col-sm-12">
                       <h1 class="abt-head" style="color: #ffffff !important;">what we offer</h1>
                   </div>
                    <div class="col-sm-4">
                        <div>
                            <i class="fa fa-3x fa-thumbs-o-up abt-fa"></i>
                        </div>
                        <h3 class="abt-fa-head">{{$getcontent->pluck('head')[15]}}</h3>
                        <p class="abt-fa-p">{{$getcontent->pluck('content')[15]}}</p>
                    </div>
                   <div class="col-sm-4">
                       <div>
                           <i class="fa fa-3x fa-credit-card abt-fa"></i>
                       </div>
                       <h3 class="abt-fa-head">{{$getcontent->pluck('head')[16]}}</h3>
                       <p class="abt-fa-p">{{$getcontent->pluck('content')[16]}}</p>
                   </div>
                   <div class="col-sm-4">
                       <div>
                           <i class="fa fa-3x fa-truck abt-fa"></i>
                       </div>
                       <h3 class="abt-fa-head">{{$getcontent->pluck('head')[17]}}</h3>
                       <p class="abt-fa-p">{{$getcontent->pluck('content')[17]}}</p>
                   </div>
               </div>
           </div>




    @endsection