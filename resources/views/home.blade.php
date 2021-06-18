@extends('master',['menu'=> $menu])

@section('title', $title)

@section('main')
     
      <!-- ******** SLider ******** -->
    <section class="section-header-slider">
        <div class="container slider-container">
            <div class="row slider-container-row">
                <div class=" col-lg-8 col-md-12 slider-container-col ">
                    <img src="img/2.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-12 slider-container-col2">
                    <h2>Anna Lussen</h2>
                    <h3>Model, Moscow</h3>
                    <p>Quisque pellentesque odio ut libero iaculis, nec fringilla sapien tincidunt. Sed laoreet pulvinar
                        ex sed egestas. Vestibulum pharetra enim the dui tempus in blandit nulla egestas.</p>
                    <h4>Discover</h4>
                </div>
            </div>
        </div>

    </section>


    <!-- ************ Images *********** -->

    <section class="section-header-img">
        <div class="container header-img-container">
            <div class="header-img-head">
                <h1>Recent Shots</h1>
            </div>
            <div class="row header-img-row">
                <div class="col-lg-3 col-md-6 col-sm-12 header-img-col">
                    <a class="example-image-link" href="img/home/1.jpg" data-lightbox="example-set"
                        data-title="Quisque in felis">
                        <img class="example-image" src="img/home/1.jpg" alt="#" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 header-img-col">
                    <a class="example-image-link" href="img/home/2.jpg" data-lightbox="example-set"
                        data-title="Pellentesque habitant">
                        <img class="example-image" src="img/home/2.jpg" alt="#" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 header-img-col">
                    <a class="example-image-link" href="img/home/3.jpg" data-lightbox="example-set"
                        data-title="Curabitur convallis">
                        <img class="example-image" src="img/home/3.jpg" alt="#" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 header-img-col">
                    <a class="example-image-link" href="img/home/4.jpg" data-lightbox="example-set"
                        data-title="Quisque in dolor">
                        <img class="example-image" src="img/home/4.jpg" alt="#" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 header-img-col">
                    <a class="example-image-link" href="img/home/5.jpg" data-lightbox="example-set"
                        data-title="Aliquam non luctus">
                        <img class="example-image" src="img/home/5.jpg" alt="#" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 header-img-col">
                    <a class="example-image-link" href="img/home/6.jpg" data-lightbox="example-set"
                        data-title="Quality in felis">
                        <img class="example-image" src="img/home/6.jpg" alt="#" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 header-img-col">
                    <a class="example-image-link" href="img/home/7.jpg" data-lightbox="example-set"
                        data-title="Vivamus a nisi">
                        <img class="example-image" src="img/home/7.jpg" alt="#" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 header-img-col">
                    <a class="example-image-link" href="img/home/8.jpg" data-lightbox="example-set"
                        data-title="Mauris pretium">
                        <img class="example-image" src="img/home/8.jpg" alt="#" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 header-img-col">
                    <a class="example-image-link" href="img/home/9.jpg" data-lightbox="example-set"
                        data-title="Nunc blandit purus">
                        <img class="example-image" src="img/home/9.jpg" alt="#" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 header-img-col">
                    <a class="example-image-link" href="img/home/10.jpg" data-lightbox="example-set"
                        data-title="Nunc ultrices tellus">
                        <img class="example-image" src="img/home/10.jpg" alt="#" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 header-img-col">
                    <a class="example-image-link" href="img/home/11.jpg" data-lightbox="example-set"
                        data-title="Orci varius natoque">
                        <img class="example-image" src="img/home/11.jpg" alt="#" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 header-img-col">
                    <a class="example-image-link" href="img/home/12.jpg" data-lightbox="example-set"
                        data-title="Mauris pretium">
                        <img class="example-image" src="img/home/12.jpg" alt="#" />
                    </a>
                </div>
            </div>
        </div>
        <div class="more">
            <span><a href="#">+</a></span>
        </div>
    </section>

@endsection
