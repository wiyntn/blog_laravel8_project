@extends('master', ['menu'=> $menu]))

@section('title', $title)

@section('main')

    
    <!-- *************video-gallery************ -->

    <section class="section-videoGallery">
        <div class="container videogallery-container">
            <div class="section-header-videogallery">
                <h1>Video Gallery</h1>
            </div>
            <div class="row videoGallery-row">
                <div class="col-lg-6 videoGallery-col">
                    <div class="card videogallery-card">
                        <a data-fancybox href="https://youtu.be/ybso7mzV2hY">
                            <img src="img/Vgallery/1.jpg" alt="">
                            <span class="fa fa-play"></span>
                        </a>
                        <div class="card-body">
                            <p>Knight's Day - Cinematic Photoshoot with Godox!</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6  videoGallery-col">
                    <div class="card videogallery-card">
                        <a data-fancybox href="https://vimeo.com/74295728">
                            <img src="img/Vgallery/4.jpg" alt="">
                            <span class="fa fa-play"></span>
                        </a>
                        <div class="card-body">
                            <p>Prangsta “ALIVE” fashion film</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 videoGallery-col">
                    <div class="card videogallery-card">
                        <a data-fancybox href="img/Vgallery/video.mp4">
                            <img src="img/Vgallery/3.jpg" alt="">
                            <span class="fa fa-play"></span>
                        </a>
                        <div class="card-body">
                            <p>Dramatic Glamour Dress Photoshoot</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 videoGallery-col">
                    <div class="card videogallery-card">
                        <a data-fancybox href="https://youtu.be/cnM7NpF0tdQ">
                            <img src="img/Vgallery/2.jpg" alt="">
                            <span class="fa fa-play"></span>
                        </a>
                        <div class="card-body">
                            <p>Dramatic Glamour Dress Photoshoot</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>


    <!-- *********** footer *********** -->

@endsection 