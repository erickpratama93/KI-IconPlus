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
                            <h1 class="display-4">{{ $count }}</h1>
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
                @foreach ($ig as $data)
                    <div class="carousel-item">
                        <div class="card">
                            {!! $data->embed_text !!}
                        </div>
                    </div>
                @endforeach



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
                                <p>
                                    <!-- {{ $data->news_description }} -->
                                    {{ substr(strip_tags($data->news_description), 0, 50) }}
                                    {{ strlen(strip_tags($data->news_description)) > 50 ? '...Baca Selengkapnya' : '' }}
                                </p>
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
            </p> Distributed By <a>PLN Icon Plus JBTG</a>
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
                                                `https://wa.me/6289665667111?text=---Ki-APP%20Message---%0ANama%20sekolah%20%3A%20${sekolah}%0AEmail%20%3A%20${email}%0ANama%20PIC%20%3A%20${pic}%0ANo%20WA%20%3A%20${hp}%0AIsi%20Pesan%20%3A%0A${pesan}`,
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
        var map = L.map('map').setView([-6.995016, 110.418427], 8);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
        }).addTo(map);

        var locations = <?php echo json_encode($locations); ?>;
        locations.forEach(function(location) {
            L.marker([location.latitude, location.longitude]).addTo(map);
        });

        // map.setView(locations, 10);
    </script>

</body>

</html>
