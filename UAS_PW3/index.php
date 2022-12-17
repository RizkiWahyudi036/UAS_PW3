<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MARVELNews</title>
    <link rel="icon" href="asset/M.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/webstyle.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!--  -->
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- End -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color:white ;">
        <div class="container">
            <a class="navbar-brand" href="#">MARVELNews</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#news">Latest News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#movies">Movies And Series</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#comics">Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#videos">Videos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Member
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="login.php">Join Member</a></li>
                            <li><a class="dropdown-item" href="login.php">Data Member</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div>
                <a href="login.php"><button class="btn btn-danger">Login</button></a>

            </div>

        </div>

        </div>
    </nav>
    <!-- End -->

    <!-- caraousel -->
    <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/cropped-1366-768-1280283 - Copy.jpg" class="d-block w-100 hover-zoom" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Marvel Studios' Black Panther: Wakanda Forever | Official Trailer</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/amwqm_card.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Ant-Man and The Wasp: Quantumania': First Trailer Debuts</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/stretched-1366-768-1280275 - Copy.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Black Panther: Wakanda Forever: Introducing the leader of the Talokan — Namor</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- End -->

    <!-- News -->
    <section id="news" name="news">
        <div class="blog-area">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center mt-5 mb-2">
                                <h2>Latest News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a
                                        href="https://www.marvel.com/articles/movies/black-panther-wakanda-forever-introducing-the-leader-of-the-talokan-namor">
                                        <img src="asset/stretched-1366-768-1280275.jpg" alt="" width="360" height="210">
                                    </a>
                                </div>
                                <div class="space mb-3">
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Black Panther: Wakanda Forever: Introducing the leader of the Talokan — Namor
                                    </p>
                                </div>
                                <span>
                                    <a href="#" class="ready-btn">Read more</a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="#">
                                        <img src="asset/rihanna-black-panther-wakanda-forever-3.jpg" alt="" width="360"
                                            height="210">
                                    </a>
                                </div>
                                <div class="space mb-3">
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Rihanna Releases New Music Video for 'Black Panther' Single"Lift Me Up"
                                    </p>
                                </div>
                                <span>
                                    <a href="https://www.marvel.com/articles/movies/rihanna-leads-the-black-panther-wakanda-forever-soundtrack-with-new-original-song-lift-me-up"
                                        class="ready-btn">Read more</a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="#">
                                        <img src="asset/pcl3060_mp01_v001_wr_g_r709._1050_089626.jpg" alt="" weight="50"
                                            height="210">
                                    </a>
                                </div>
                                <div class="space mb-3">
                                </div>
                                <div class="blog-text">
                                    <p>
                                        'Ant-Man and The Wasp: Quantumania': First Trailer Debuts
                                    </p>
                                </div>
                                <span>
                                    <a href="https://www.marvel.com/articles/movies/ant-man-and-the-wasp-quantumania-first-trailer-poster"
                                        class="ready-btn">Read more</a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 mt-4">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="#">
                                        <img src="asset/spd.jpeg" alt="" width="360" height="210">
                                    </a>
                                </div>
                                <div class="space mb-3">
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Spider-Man: No Way Home Extended Edition Swings onto Digital
                                    </p>
                                </div>
                                <span>
                                    <a href="https://www.marvel.com/articles/movies/spider-man-no-way-home-extended-edition-digital"
                                        class="ready-btn">Read more</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->

    <!-- Movies And Series -->
    <section id="movies">
        </div>
        <div>
            <img src="asset/676882-m.jpg" alt="" class="image mt-4">
        </div>
        <div class="content">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline2 text-center mb-4">
                    <h2>Movies And Series</h2>
                    <p class="text">Watching on Disney+Hotstar</p>
                </div>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/captain-america-the-first-avenger/1660000034"><img
                                    src="asset/movies/1.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/captain-marvel/1260014878"><img
                                    src="asset/movies/2.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/iron-man/1660000038"><img
                                    src="asset/movies/3.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/iron-man-2/1660000039"><img
                                    src="asset/movies/4.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/thor/1660000044"><img src="asset/movies/5.webp"
                                    class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/marvels-the-avengers/1660000015"><img
                                    src="asset/movies/6.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/thor-the-dark-world/1260018142"><img
                                    src="asset/movies/7.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/iron-man-3/1660000042"><img
                                    src="asset/movies/8.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/captain-america-the-winter-soldier/1260016410"><img
                                    src="asset/movies/9.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/guardians-of-the-galaxy/1260018294"><img
                                    src="asset/movies/10.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/i-am-groot-groots-first-steps/1260106112"><img
                                    src="asset/movies/11.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/guardians-of-the-galaxy-vol-2/1260018295"><img
                                    src="asset/movies/12.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/i-am-groot-the-little-guy/1260106113"><img
                                    src="asset/movies/13.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/i-am-groot-groots-pursuit/1260106114"><img
                                    src="asset/movies/14.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/i-am-groot-groot-takes-a-bath/1260106115"><img
                                    src="asset/movies/15.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/i-am-groot-magnum-opus/1260106116"><img
                                    src="asset/movies/16.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/avengers-age-of-ultron/1260018315"><img
                                    src="asset/movies/17.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/antman/1260018141"><img
                                    src="asset/movies/18.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/captain-america-civil-war/1260016768"><img
                                    src="asset/movies/19.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/black-widow/1260067485"><img
                                    src="asset/movies/20.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/black-panther/1660010672"><img
                                    src="asset/movies/21.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/doctor-strange/1260018179"><img
                                    src="asset/movies/22.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/spiderman-homecoming/1260104626"><img
                                    src="asset/movies/23.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/thor-ragnarok/1660010577"><img
                                    src="asset/movies/24.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/antman-and-the-wasp/1660010696"><img
                                    src="asset/movies/25.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/avengers-infinity-war/1660010677"><img
                                    src="asset/movies/26.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/avengers-endgame/1260013556"><img
                                    src="asset/movies/27.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/tv/loki/1260063451"><img src="asset/movies/28.webp"
                                    class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/tv/what-if/1260066057"><img src="asset/movies/29.webp"
                                    class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/tv/wandavision/1260051344"><img
                                    src="asset/movies/30.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/tv/the-falcon-and-the-winter-soldier/1260055670"><img
                                    src="asset/movies/31.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a
                                href="https://www.hotstar.com/id/movies/shangchi-and-the-legend-of-the-ten-rings/1260072682"><img
                                    src="asset/movies/32.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/eternals/1260077949"><img
                                    src="asset/movies/33.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a
                                href="https://www.hotstar.com/id/movies/doctor-strange-in-the-multiverse-of-madness/1260103761"><img
                                    src="asset/movies/34.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/tv/hawkeye/1260073683"><img src="asset/movies/35.webp"
                                    class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/tv/moon-knight/1260089681"><img
                                    src="asset/movies/36.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/tv/shehulk-attorney-at-law/1260103788"><img
                                    src="asset/movies/37.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/tv/ms-marvel/1260098459"><img src="asset/movies/38.webp"
                                    class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/thor-love-and-thunder/1260110008"><img
                                    src="asset/movies/39.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6 mb-5">
                        <div class="supporter-logo">
                            <a href="https://www.hotstar.com/id/movies/werewolf-by-night/1260111093"><img
                                    src="asset/movies/40.webp" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Comic -->
    <section id="comics">
        <div class="col-md-12 col-sm-12 col-xs-12 px-5">
            <div class="section-headline text-center mt-5">
                <h2>Comics</h2>
            </div>
            <div class="row">
                <div class="col1-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="single-team-member shadow-sm">
                        <div>
                            <a href="https://www.marvel.com/comics/issue/101526/avengers_2018_62">
                                <img src="asset/comic/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="team-content text-center mt-4 mb-4">
                            <a href="https://www.marvel.com/comics/issue/101526/avengers_2018_62">Avengers #62</a>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="single-team-member">
                        <div>
                            <a href="https://www.marvel.com/comics/issue/104869/axe_judgment_day_omega_2022_1">
                                <img src="asset/comic/2.jpg" alt="" class="img">
                            </a>
                        </div>
                        <div class="team-content text-center mt-4 mb-4">
                            <a href="https://www.marvel.com/comics/issue/104869/axe_judgment_day_omega_2022_1">A.X.E.:
                                Judgment Day Omega #1</a>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="single-team-member">
                        <div>
                            <a href="https://www.marvel.com/comics/issue/103642/venom_2021_13">
                                <img src="asset/comic/3.jpg" alt="">
                            </a>
                        </div>
                        <div class="team-content text-center mt-4 mb-4">
                            <a href="https://www.marvel.com/comics/issue/103642/venom_2021_13">Venom #13</a>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="single-team-member">
                        <div>
                            <a href="https://www.marvel.com/comics/issue/103483/sabretooth_the_exiles_2022_1">
                                <img src="asset/comic/4.jpg" alt="">
                            </a>
                        </div>
                        <div class="team-content text-center mt-4 mb-4">
                            <a href="https://www.marvel.com/comics/issue/103483/sabretooth_the_exiles_2022_1">Sabretooth
                                & the Exiles #1</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="single-team-member">
                        <div>
                            <a href="https://www.marvel.com/comics/issue/103237/black_panther_unconquered_2022_1">
                                <img src="asset/comic/5.jpg" alt="">
                            </a>
                        </div>
                        <div class="team-content text-center mt-4 mb-4">
                            <a href="https://www.marvel.com/comics/issue/103237/black_panther_unconquered_2022_1">Black
                                Panther: Unconquered #1</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="single-team-member">
                        <div>
                            <a href="https://www.marvel.com/comics/issue/103032/spider-man_the_lost_hunt_2022_1">
                                <img src="asset/comic/6.jpg" alt="">
                            </a>
                        </div>
                        <div class="team-content text-center mt-4 mb-4">
                            <a href="https://www.marvel.com/comics/issue/103032/spider-man_the_lost_hunt_2022_1">Spider-Man:
                                The Lost Hunt #1</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="single-team-member">
                        <div>
                            <a href="https://www.marvel.com/comics/issue/102999/ghost_rider_2022_8">
                                <img src="asset/comic/7.jpg" alt="">
                            </a>
                        </div>
                        <div class="team-content text-center mt-4 mb-4">
                            <a href="https://www.marvel.com/comics/issue/102999/ghost_rider_2022_8">Ghost Rider #8</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="single-team-member">
                        <div>
                            <a href="https://www.marvel.com/comics/issue/102524/legion_of_x_2022_7">
                                <img src="asset/comic/8.jpg" alt="">
                            </a>
                        </div>
                        <div class="team-content text-center mt-4 mb-4">
                            <a href="https://www.marvel.com/comics/issue/102524/legion_of_x_2022_7">Legion of X #7</a>
                        </div>
                    </div>
                </div>
                <!-- End column -->
            </div>
        </div>

    </section>
    <!-- End -->


    <!-- Videos -->
    <section id="videos">
        <div class="blog-area mb-5">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center mt-5 mb-2">
                                <h2>Videos</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <iframe width="360" height="210" src="https://www.youtube.com/embed/ZlNFpri-Y40"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="space mb-2">
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Marvel Studios' Ant-Man and The Wasp: Quantumania | Official Trailer
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <iframe width="360" height="210" src="https://www.youtube.com/embed/OYhFFQl4fLs"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="space mb-2">
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Marvel Studios' Special Presentation: The Guardians of the Galaxy Holiday
                                        Special | Official Trailer
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <iframe width="360" height="210" src="https://www.youtube.com/embed/RlOB3UALvrQ"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="space mb-2">
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Marvel Studios' Black Panther: Wakanda Forever | Official Teaser
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 mt-4">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <iframe width="360" height="210" src="https://www.youtube.com/embed/_Z3QKkl1WyM"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="space mb-2">
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Marvel Studios' Black Panther: Wakanda Forever | Official Trailer
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 mt-4">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <iframe width="360" height="210" src="https://www.youtube.com/embed/X897nj9uZq0"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="space mb-2">
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Now Streaming | Marvel Studios' Special Presentation: Werewolf by Night |
                                        Disney+
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- footer -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="icon"></i>
                    <div>
                        <h3>MARVELNews</h3>
                        <p>
                            Get More Information and News
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                </div>
                <div class="col-lg-3 col-md-6">
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MarvelNews</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">Rizki & Pieter</a>
            </div>
        </div>

    </footer>
    <!-- End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>