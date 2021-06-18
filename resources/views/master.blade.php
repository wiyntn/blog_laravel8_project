<!doctype html>
<html lang="en">

<head>
    @include('partial.head_tag')

    <title>@yield('title') | P O Z O</title>
    @stack('style')
</head>
    <body>

    @section('header')
        @include('partial.nav_var' , ["nav"=> $menu])

    @show

    @section('main')

    <h1>Master Main area</h1>

    @show


    @section('footer')

        @include('partial.footer')

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