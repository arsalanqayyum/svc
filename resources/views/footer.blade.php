<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="main-heading">{{$getfooter->pluck('title')[9]}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="text-center">
                <i class="fa fa-3x fa-map-marker"></i>
                <h4>{{$getfooter->pluck('title')[11]}}</h4>
                <p class="span">{{$getfooter->pluck('content')[11]}}</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="text-center">
                <i class="fa fa-3x fa-whatsapp"></i>
                <h4>{{$getfooter->pluck('title')[8]}}</h4>
                @foreach(json_decode($getfooter->pluck('links')[8],true) as  $value)
                <?php
                    $value = str_replace("\r\n","<p class='span'> ", $value);
                    echo "<p class='span'>" . $value. "</p>";
                ?>
                    @endforeach
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="text-center">
                <i class="fa fa-3x fa-send"></i>
                <h4>{{$getfooter->pluck('title')[7]}}</h4>
                <p class="span">{{$getfooter->pluck('content')[7]}}</p>
                @foreach(json_decode($getfooter->pluck('links')[7],true) as $value)
                    <?php
                        $value = str_replace("\r\n","<p class='span'>",$value);
                        echo "<p class='span'>".$value."</p>";
                    ?>
                    @endforeach
            </div>
        </div>

    </div>
</div>




<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <span class="copyrights">&copy; {{$getfooter->pluck('content')[10]}}</span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>