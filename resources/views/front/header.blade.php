
    <header id="topnav" class="defaultscroll fixed-top navbar-sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.html" class="logo">
                    Zeeko
                </a>
            </div>
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="#pages">منوی کاربری</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
<!--     روش اول برای اینکه کاربر لاگین شدع فقط بتونه دکمه خروج رو بیینه و کاربر لاگین شنده فقط بتونه قبت نام و ورود رو ببینه -->
                            {{-- @if (!auth::guest())
                            <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">خروج</button>
                            </form>
                            @else
                            <li>
                            <a href="{{route('login')}}">ورود</a>
                            </li>
                            <li>

                            </li>
                            <li>
                            <a href="{{route('register')}}">ثبت نام</a>
                            </li>
                            @endif --}}

                                 @auth
                                 <li> <a href="{{route('profile',Auth::user()->id)}}" target="_blank">پروفایل </a></li>
                                 @if (Auth::user()->role==1)
                                <li> <a href="{{route('admin.index')}}" target="_blank">پنل مدیربت</a></li>
                                 @endif

                                <li>
                                 <form action="{{route('logout')}}" method="POST">
                                  @csrf
                                     <button type="submit" class="btn btn-success">خروج</button>
                                    </form>

                                </li>

                                @else
                            <li>
                             <a href="{{route('login')}}">ورود</a>
                             </li>
                             <li>

                             </li>
                             <li>
                             <a href="{{route('register')}}">ثبت نام</a>
                             </li>
                                @endauth
                        </ul>
                    </li>
                    <li class="has-submenu active">
                        <a href="#home">Home</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#how-it-works">How It Works</a>
                    </li>
                  
                    <li class="has-submenu">
                        <a href="#features">Features</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#testimonial">Testimonial</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#pricing">Pricing</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#faq">FAQ</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#pages">Pages</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="blog-standard.html">Blog Standard</a>
                            </li>
                            <li>
                                <a href="blog-masonry.html">Blog-Masonry</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog-Post</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="list-inline login-button pl-4">
                            <li class="list-inline-item mb-0 ">
                                <a href="" class="btn btn-sm btn-login">ورود</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="list-inline login-button pl-4">
                            <li class="list-inline-item mb-0 ">
                                <a href="" class="btn btn-sm btn-login">خروج</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="list-inline login-button pl-4">
                            <li class="list-inline-item mb-0 ">
                                <a href="" class="btn btn-sm btn-login">پروفایل</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- End navigation menu-->
            </div>
        </div>
    </header>