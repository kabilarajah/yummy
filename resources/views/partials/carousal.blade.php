<!--New-Zoom-Crousal-by Sangrai-->

<script src="{{asset('carousal/jquery.min.js')}}" type="text/javascript"></script>

<script type="{{asset('carousal/carousal.js')}}"></script>




<link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('carousal/animate.css')}}" rel="stylesheet" media="all">


<div class="container-fluid">
    <div class="row">
        <div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1" class=""></li>
                <li data-target="#carousel" data-slide-to="2" class=""></li>
                <li data-target="#carousel" data-slide-to="3" class=""></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner carousel-zoom">
                <div class="item active"><img class="img-responsive" src="images/carousal_one.jpg" alt="">
                  <div class="carousel-caption">
                    <h1  data-animation="animated zoomInLeft" class="cap-txt ">Robot Restaurant At Your Service</h1>
                    <p data-animation="animated bounceInDown">Get start your next awesome project</p>
                    <button data-animation="animated bounceInUp" class="btn btn-danger" data-text="Send"><span>Send</span></button>
                  </div>
                </div>
               <div class="item"><img class="img-responsive" src="images/carousal_two.jpg" alt="">
                  <div class="carousel-caption">
                    <h1 data-animation="animated zoomInLeft" class="cap-txt">We are smart developers</h1>
                    <p data-animation="animated bounceInDown">Get start your next awesome project</p>
                    <button data-animation="animated bounceInUp" class="btn btn-danger" data-text="Send"><span>Send</span></button>
                  </div>
                </div>
                <div class="item"><img class="img-responsive" src="images/carousal_three.jpg" alt="">
                  <div class="carousel-caption animated slideInLeft">
                    <h1 data-animation="animated zoomInLeft" class="cap-txt">We are innovative</h1>
                    <p data-animation="animated bounceInDown">Get start your next awesome project</p>
                    <button data-animation="animated bounceInUp" class="btn btn-danger" data-text="Send"><span>Send</span></button>
                  </div>
                </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#sg-carousel" data-slide="prev">‹</a>
            <a class="carousel-control right" href="#sg-carousel" data-slide="next">›</a>
        </div> 
    </div>
</div>





