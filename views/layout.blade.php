<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="/theme/admin/css/vendor.css">
    <link rel="stylesheet" href="/theme/admin/css/app.css">

    @yield('css')
</head>

<body>
<div class="main-wrapper">
    <div class="app" id="app">
        <header class="header">
            <div class="header-block header-block-collapse hidden-lg-up">
                <button class="collapse-btn" id="sidebar-collapse-btn">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="header-block header-block-search hidden-sm-down">
                <form role="search">
                    <div class="input-container"><i class="fa fa-search"></i> <input type="search" placeholder="Search">
                        <div class="underline"></div>
                    </div>
                </form>
            </div>
            <div class="header-block header-block-buttons">
                @yild('headerHead')
            </div>
            <div class="header-block header-block-nav">
                <ul class="nav-profile">
                    <li class="notifications new">
                        <a href="" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <sup>
                                <span class="counter">8</span>
                            </sup> </a>
                        <div class="dropdown-menu notifications-dropdown-menu">
                            <ul class="notifications-container">
                                <li>
                                    <a href="" class="notification-item">
                                        <div class="img-col">
                                            <div class="img"
                                                 style="background-image: url('/theme/admin/faces/3.jpg')"></div>
                                        </div>
                                        <div class="body-col">
                                            <p><span class="accent">Zack Alien</span> pushed new commit: <span
                                                        class="accent">Fix page load performance issue</span>. </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="notification-item">
                                        <div class="img-col">
                                            <div class="img"
                                                 style="background-image: url('/theme/admin/faces/5.jpg')"></div>
                                        </div>
                                        <div class="body-col">
                                            <p><span class="accent">Amaya Hatsumi</span> started new task: <span
                                                        class="accent">Dashboard UI design.</span>. </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="notification-item">
                                        <div class="img-col">
                                            <div class="img"
                                                 style="background-image: url('/theme/admin/faces/8.jpg')"></div>
                                        </div>
                                        <div class="body-col">
                                            <p><span class="accent">Andy Nouman</span> deployed new version of <span
                                                        class="accent">NodeJS REST Api V3</span></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <footer>
                                <ul>
                                    <li><a href="">
                                            View All
                                        </a></li>
                                </ul>
                            </footer>
                        </div>
                    </li>
                    <li class="profile dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            <div class="img"
                                 style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')"></div>
                            <span class="name">
    			      John Doe
    			    </span> </a>
                        <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#"> <i class="fa fa-user icon"></i> Profile </a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-bell icon"></i> Notifications </a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-gear icon"></i> Settings </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login.html"> <i class="fa fa-power-off icon"></i> Logout </a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <aside class="sidebar">
            <div class="sidebar-container">
                <div class="sidebar-header">
                    <div class="brand">
                        <div class="logo"><span class="l l1"></span> <span class="l l2"></span> <span
                                    class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span></div>
                        @yild('name')
                    </div>
                </div>

            </div>
            <footer class="sidebar-footer">
            </footer>
        </aside>
        <div class="sidebar-overlay" id="sidebar-overlay"></div>
        @yild('content')
        <footer class="footer">
            <div class="footer-block buttons">
            </div>

        </footer>
    </div>
</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
<script src="/theme/admin/js/vendor.js"></script>
<script src="/theme/admin/js/app.js"></script>
@yield('js')
</body>

</html>