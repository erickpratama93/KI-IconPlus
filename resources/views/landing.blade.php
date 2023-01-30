<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    {{-- maps --}}
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="carousel/carousel.css">

    <title>Icon+ KI</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    {{-- <p> <i class='bx bxs-phone-call'></i>+62 </p> --}}
                </div>
                <div class="col-auto social-icons">
                    <a href="https://wa.me/6289665667111"><i class='bx bxl-whatsapp'></i></a>
                    <a href="https://www.instagram.com/pln.iconplus_jatengdiy/"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <img class="navbar-brand img-fluid w-25 h-25" src="/img/logo-ki.svg"></img>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#customer">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">News</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-brand ms-lg-3">Contact</a>
                <a href={{ route('news') }} class="btn btn-secondary
                     ms-lg-3">Login</a>
            </div>
        </div>
    </nav>

    <!-- SLIDER -->


    <div class="owl-carousel owl-theme hero-slider">

        @foreach ($slider as $data)
            <div class="slide slide1" style="background-image: url({{ 'storage/' . $data->slider_image }})"
                id="variable_background">

                <div class="container">
                    <div class="row">
                        <div class="col-12 text-left text-white">

                            <h6 class="text-white text-uppercase">{{ $data->title }}</h6>
                            <h1 class="display-3 my-4">{{ $data->subtitle }}</h1>

                        </div>
                    </div>
                </div>

            </div>
        @endforeach


    </div>


    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 py-5">
                    <div class="row">
                        @foreach ($about as $data)
                            <div class="col-12">
                                <div class="info-box">
                                    <img src="img/icon6.png" alt="">
                                    <div class="ms-4">
                                        <h5>{{ $data->title }}</h5>
                                        <p>{{ $data->subtitle }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="img/icon4.png" alt="">
                                <div class="ms-4">
                                    <h5>Visi & Misi</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="img/icon5.png" alt="">
                                <div class="ms-4">
                                    <h5>Target & Sasaran</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page </p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <img src="img/Logo-Pln.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- MILESTONE -->
    <section id="milestone">
        <div class="container">
            <div class="d-flex text-center justify-content-center flex-row">
                <div class="p-2 bd-highlight">
                    <div class="row text-center justify-content-around align-items-center">
                        <div class="col-lg-3 col-sm-6 ">
                            <h1 class="display-4">12</h1>
                            <p class="mb-0">Jumlah Sekolah MOU</p>
                        </div>
                        <div class="col-lg-6 col-lg-6">
                            <div id="map" style="width: 600px; height: 300px"></div> {{-- <img src="img/maps.jpeg"></img> --}}
                        </div>
                    </div>
    </section>

    <section id="product" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Our Product</h6>
                        <h1>Produk Kelas Industri</h1>
                    </div>
                </div>
            </div>

            @foreach ($product as $data)
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src={{ url('storage/' . $data->product_image) }} alt="">
                        <div class="content">
                            <h5>{{ $data->title }}</h5>
                            <p>{{ $data->product_description }}</p>
                        </div>
                    </article>
                </div>
            @endforeach

        </div>
        </div>
    </section>

    <section class="bg-light" id="customer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Gallery</h6>
                        <h1>PLN ICON PLUS JATENG DIY</h1>
                        <p class="mx-auto">Berikut beberapa postingan instagram kami :</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card">

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <blockquote class="instagram-media"
                            data-instgrm-permalink="https://www.instagram.com/p/Cm5g1QPLG-K/?utm_source=ig_embed&amp;utm_campaign=loading"
                            data-instgrm-version="14"
                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            <div style="padding:16px;"> <a
                                    href="https://www.instagram.com/p/Cm5g1QPLG-K/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                    target="_blank">
                                    <div style=" display: flex; flex-direction: row; align-items: center;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0;"></div>
                                    <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                            width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                            xmlns="https://www.w3.org/2000/svg"
                                            xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></div>
                                    <div style="padding-top: 8px;">
                                        <div
                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                            View this post on Instagram</div>
                                    </div>
                                    <div style="padding: 12.5% 0;"></div>
                                    <div
                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                        <div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                            </div>
                                        </div>
                                        <div style="margin-left: 8px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                            </div>
                                        </div>
                                        <div style="margin-left: auto;">
                                            <div
                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                        </div>
                                    </div>
                                </a>
                                <p
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                    <a href="https://www.instagram.com/p/Cm5g1QPLG-K/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                        target="_blank">A post shared by PLN ICON PLUS JAWA TENGAH &amp; D.I YOGYAKARTA
                                        (@pln.iconplus_jatengdiy)</a>
                                </p>
                            </div>
                        </blockquote>
                        <script async src="//www.instagram.com/embed.js"></script>
                    </div>
                </div>



            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <section class="bg-light" id="reviews">

        <div class="owl-theme owl-carousel reviews-slider container">
            @foreach ($review as $data)
                <div class="review">
                    <div class="person">
                        <img src={{ url('storage/' . $data->reviews_image) }} alt="">
                        <h5>{{ $data->reviews_name }}</h5>
                        {{-- <small>SMKN 1 Bondowoso</small> --}}
                    </div>
                    <h3>{{ $data->reviews_message }}</h3>

                    <i class='bx bxs-quote-alt-left'></i>
                </div>
            @endforeach
        </div>
    </section>

    <section id="news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>NEWS</h6>
                        <h1>News</h1>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($news as $data)
                    <div class="col-md-4">
                        <article class="blog-post">
                            <img src={{ url('storage/' . $data->news_image) }} alt="">
                            <div class="content">
                                <small>{{ $data->created_at }}</small>
                                <h5>{{ $data->news_title }}</h5>
                                <p>{{ $data->news_description }}</p>
                            </div>
                        </article>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">Kelas Industri<span class="dot">.</span></h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                        <div class="col-auto social-icons">
                            <a href="https://wa.me/6289665667111"><i class='bx bxl-whatsapp'></i></a>
                            <a href="https://www.instagram.com/pln.iconplus_jatengdiy/"><i
                                    class='bx bxl-instagram'></i></a>
                        </div>
                        <div class="col-auto conditions-section">
                            <a href="#">privacy</a>
                            <a href="#">terms</a>
                            <a href="#">disclaimer</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright PLN Icon Plus Kelas Industri
                <script>
                    document.write(new Date().getFullYear())
                </script>. All rights Reserved
            </p> Distributed By <a hrefs="https://themewagon.com">PLN Icon Plus JBTG</a>
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url(img/bg-peminatan.jpg); min-height:300px;">
                                <div>

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Peminatan</h1>
                                        <p>Ingin bergabung dengan kami ? silahkan hubungi kami melalui form dibawah ini.
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">School name</label>
                                        <input type="text" class="form-control"
                                            placeholder="Ex : SMP Negeri 1 Bondowoso" id="schoolname" name='email'
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="col-12">
                                        <label for="userName" class="form-label">School Email</label>
                                        <input type="email" class="form-control" placeholder="Ex : smpn@email.com"
                                            id="schoolemail" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">PIC Name</label>
                                        <input type="text" class="form-control" placeholder="PIC" id="picname"
                                            aria-describedby="">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" placeholder="086xxxxxxx"
                                            id="nohp" aria-describedby="">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea name="" placeholder="This is looking great and nice." class="form-control" id="pesan"
                                            rows="4"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button onclick="send_handle()" class="btn btn-brand">Send
                                                Message</button>
                                        </div>
                                        <div class="col-6">
                                            <span id="demo"></span>
                                        </div>
                                    </div>
                                    <script>
                                        function send_handle() {

                                            let sekolah = document.getElementById("schoolname").value;

                                            let email = document.getElementById("schoolemail").value;

                                            let pic = document.getElementById("picname").value;
                                            let hp = document.getElementById("nohp").value;
                                            let pesan = document.getElementById("pesan").value;

                                            var win = window.open(
                                                `https://wa.me/6285606683326?text=---Ki-APP%20Message---%0ANama%20sekolah%20%3A%20${sekolah}%0AEmail%20%3A%20${email}%0ANama%20PIC%20%3A%20${pic}%0ANo%20WA%20%3A%20${hp}%0AIsi%20Pesan%20%3A%0A${pesan}`,
                                                '_blank');
                                            // win.focus();
                                        }
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
    {{-- <script src="carousel/carousel.js"></script> --}}
    <script>
        var multipleCardCarousel = document.querySelector("#carouselExampleControls");
        if (window.matchMedia("(min-width: 768px)").matches) {
            var carousel = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
            });
            var carouselWidth = $(".carousel-inner")[0].scrollWidth;
            var cardWidth = $(".carousel-item").width();
            var scrollPosition = 0;
            $("#carouselExampleControls .carousel-control-next").on(
                "click",
                function() {
                    if (scrollPosition < carouselWidth - cardWidth * 4) {
                        scrollPosition += cardWidth;
                        $("#carouselExampleControls .carousel-inner").animate({
                                scrollLeft: scrollPosition
                            },
                            600
                        );
                    }
                }
            );
            $("#carouselExampleControls .carousel-control-prev").on(
                "click",
                function() {
                    if (scrollPosition > 0) {
                        scrollPosition -= cardWidth;
                        $("#carouselExampleControls .carousel-inner").animate({
                                scrollLeft: scrollPosition
                            },
                            600
                        );
                    }
                }
            );
        } else {
            $(multipleCardCarousel).addClass("slide");
        }
    </script>
    {{-- //maps --}}
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script>
        //  // Creating map options
        //  var mapOptions = {
        //     center: [-6.9994, 110.4277],
        //     zoom: 10
        //  }

        //  var target = L.latLng('-6.9994, 110.4277');

        //  // Creating a map object
        //  var map = new L.map('map', mapOptions);

        //  // Creating a Layer object
        //  var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

        // //  L.marker(target).addTo(map);

        //  // Adding layer to the map
        //  map.addLayer(layer);

        //
        // Where you want to render the map.
        var element = document.getElementById('map');

        // Height has to be set. You can do this in CSS too.
        // element.style = 'height:300px;';

        // Create Leaflet map on map element.
        var map = L.map(element);

        // Add OSM tile layer to the Leaflet map.
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Target's GPS coordinates.
        var target = L.latLng('-6.9994', '110.4277');
        var a = L.latLng('-6.9537', '110.1517');
        var b = L.latLng('-7.1377', '110.4469');
        var c = L.latLng('-6.9728', '110.5019');

        // Set map's center to target with zoom 14.
        map.setView(target, 10);

        // Place a marker on the same location.
        L.marker(target).addTo(map);
        L.marker(a).addTo(map);
        L.marker(b).addTo(map);
        L.marker(c).addTo(map);
    </script>

</body>

</html>
