 <!-- *********** Nav-Menu ******* -->
 <header>
    <div class="container pozo-nav-container">
        <div class="row pozo-nav-row">
            <div class="col-12 pozo-nav-col">
                <nav class="nav-part">
                    <a href=""><img src="img/logo.png" alt=""></a>
                    <div class="nav-menu float-end ">
                        <ul id="menu">
                            <li class="nav-item"><a class="{{($nav=='home') ? 'active' : ''}}" href="{{url('/')}}">Home</a></li>
                            <li class="nav-item"><a class="{{($nav=='about') ? 'active' : ''}}" href="{{url('about')}}">About</a></li>
                            <li class="nav-item"><a class="{{($nav=='services') ? 'active' : ''}}" href="{{url('services')}}">Services</a></li>
                            <li class="nav-item"><a class="{{($nav=='photo_gallery') ? 'active' : ''}}" href="{{url('photo_gallery')}}">Gallery <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-part">
                                    <li><a class="{{($nav=='photo_gallery') ? 'active' : ''}}" href="{{url('photo_gallery')}}">Photo Gallery</a></li>
                                    <li><a class="{{($nav=='video_gallery') ? 'active' : ''}}" href="{{url('video_gallery')}}">Video Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="{{($nav=='projects') ? 'active' : ''}}" href="{{route('projects')}}">Projects</a></li>
                            <li class="nav-item"><a class="{{($nav=='blogs') ? 'active' : ''}}" href="{{route('blogs')}}">Blogs</a></li>
                            <li class="nav-item"><a class="{{($nav=='contact') ? 'active' : ''}}" href="{{route('contact.index')}}">Contact</a></li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>
