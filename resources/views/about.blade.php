@extends('master')

<!-- @section('title', $title) -->

@section('main')

   
    <!-- ****** ABOUT******** -->

    <section class="section-about">
        <div class="container section-about-container">
            <div class="row about-row">
                <div class="col-lg-4 col-md-6 about-col">
                    <img src="img/about/about.jpg" alt="">

                </div>
                <div class="col-lg-8 col-md-6 about-col2">
                    <h2>Welcome to Pozo</h2>
                    <p>Curabitur mollis tortor ac congue porta. Donec vel eros rhoncus nulla posuere interdum vitae nec
                        lectus. Aenean rutrum the tortor, at tincidunt arcu malesuada ultricies. Praesent eu aliquam
                        ipsum. Sed at turpis vitae ex commodo fermentum vitae dapibus libero. Fusce orci orci, blandit
                        ut fermentum sed, eleifend vitae eros. Phasellus id justo sagittis, sagittis quam the in
                        porttitor enim. Sed at sapien nec libero pharetra tincidunt vitae a ipsum.</p>
                    <p id="pera-2">Donec arcu lectus, bibendum sed turpis ut, porta dictum leo. Quisque tincidunt ante
                        et est
                        malesuada volutpat. Praesent ultrices mi ut nunc volutpat tempus. Cras vitae nibh in neque
                        cursus finibus ac et metus. Nulla at euismod sem. Morbi vitae eros orci. Quisque tincidunt ante
                        et est malesuada volutpat.</p>

                    <img src="img/sign.png" alt="">

                    <h6><span>Phone:</span>+1 650-333-1138</h6>

                    <h6><span>E-mail:</span> photography@pozo.com</h6>

                    <h6><span>Skype:</span>@pozoartphoto</h6>

                    <h6><span>500px:</span>/pozoartphoto</h6>


                </div>
            </div>
        </div>
    </section>

    <section class="section-about-part2">
        <div class="container section-about-part2-container">
            <div class="section-about-part2-text">
                <h1>Professional Team</h1>
            </div>
            <div class="row section-about-part2-row">
                <div class=" col-md-4  section-about-part2-col">

                </div>

                <div class=" col-md-4  section-about-part2-col">

                    <div class="singleProfile">
                        <div class="singleProfile__image">
                            <p><span>Petter Snow </span>\ Wedding Photographer</p>
                            <img src="img/about/01.jpg" alt="">
                        </div>
                        <ul class="singleProfile__social">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-4  section-about-part2-col">
                    <div class="singleProfile">
                        <div class="singleProfile__image">
                            <p><span>Petter Snow </span>\ Wedding Photographer</p>
                            <img src="img/about/02.jpg" alt="">
                        </div>
                        <ul class="singleProfile__social">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </section>


@endsection