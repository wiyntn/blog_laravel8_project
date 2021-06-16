<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/favicon.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;600;700&family=Playfair+Display:wght@400;500;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="vandors/slicknav/dist/slicknav.min.css">

    <link rel="stylesheet" href="vandors/fancybox-master/dist/jquery.fancybox.css">
    <link rel="stylesheet" href="vandors/fancybox-master/dist/jquery.fancybox.min.css">


    <link rel="stylesheet" href="css/main.css">

    <title>@yield('title') | P O Z O</title>
</head>
    <body>

    @section('header')

        <!-- *********** Nav-Menu ******* -->
    <header>
        <div class="container pozo-nav-container">
            <div class="row pozo-nav-row">
                <div class="col-12 pozo-nav-col">
                    <nav class="nav-part">
                        <a href=""><img src="img/logo.png" alt=""></a>
                        <div class="nav-menu float-end ">
                            <ul id="menu">
                                <li class="nav-item"><a class="active" href="/">Home</a></li>
                                <li class="nav-item"><a href="about">About</a></li>
                                <li class="nav-item"><a href="services">Services</a></li>
                                <li class="nav-item"><a href="photo_gallery">Gallery <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-part">
                                        <li><a href="photo_gallery">Photo Gallery</a></li>
                                        <li><a href="video_gallery">Video Gallery</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="projects">Projects</a></li>
                                <li class="nav-item"><a href="blogs">Blogs</a></li>
                                <li class="nav-item"><a href="contact">Contact</a></li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>

    @show



    @section('main')

    <h1>Master Main area</h1>

    @show


    @section('footer')

    <footer>
        <div class="container footer-container">
            <div class="row footer-row">
                <div class="col-md-8 footer-col">
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>

                <div class="col-md-4 footer-col2">
                    <p>© 2020 <span>POZO</span> All right reserved.</p>
                </div>
            </div>
        </div>

    </footer>

    @show

     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js"></script>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="vandors/slicknav/dist/jquery.slicknav.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script src="/vandors/fancybox-master/dist/jquery.fancybox.js"></script>
    <script src="/vandors/fancybox-master/dist/jquery.fancybox.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <script>
        $(document).ready(function () {

            $('#menu').slicknav({

                // Label for menu button. 
                // Use an empty string for no label.
                'label': 'Menu',

                // If true, the mobile menu is a copy of the original.
                'duplicate': true,

                // The duration of the sliding animation.
                'duration': true,

                // Easing used for open animations.
                'easingOpen': 'swing',

                // Easing used for close animations.
                'easingClose': 'swing',

                // open / close symbols
                closedSymbol: '&#9658;',
                openedSymbol: '&#9660;',

                // Element, jQuery object, or jQuery selector string to prepend the mobile menu to.
                'prependTo': 'nav',

                // Element, jQuery object, or jQuery selector string to append the mobile menu to.
                appendTo: '',

                // Element type for parent menu items.
                'parentTag': 'a',

                // Close menu when a link is clicked.
                'closeOnClick': false,

                // Allow clickable links as parent elements.
                allowParentLinks: false,

                // If false, parent links will be separated from the sub-menu toggle.
                nestedParentLinks: true,

                // Show children of parent links by default.
                showChildren: false,

                // Remove IDs from all menu elements.
                removeIds: true,

                // Remove classes from all menu elements.
                removeClasses: false,

                // Remove styles from all menu elements.
                removeStyles: false,

                // Add branding to menu bar.
                brand: '',

                // <a href="https://www.jqueryscript.net/animation/">Animation</a> library. Currently supports "jquery" and "velocity".
                animations: 'jquery',

                // Called after SlickNav creation
                init: function () { },

                // Called before menu or sub-menu opened
                beforeOpen: function () { },

                // Called before menu or sub-menu closed
                beforeClose: function () { },

                // Called after menu or sub-menu opened.
                afterOpen: function () { },

                // Called after menu or sub-menu closed.
                afterClose: function () { }

            });

        });
    </script>

</body>

</html>