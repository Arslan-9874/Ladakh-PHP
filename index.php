<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Adventure Hub - Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index/style.css">
</head>

<body class="bg-light">
    <?php
    require "partials/_header.php";
    ?>
    <div class="container-fluid mx-auto py-3 px-0 rounded-4" id="mainContainerImg">
        <div class="shadow mx-auto hover hover-2 text-white rounded-4" id="imgContainer">
            <!-- <img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-2.jpg" class="rounded-4"> -->
            <div class="hover-overlay"></div>
            <div class="hover-2-content px-5 py-4">
                <h3 class="hover-2-title text-uppercase font-weight-bold mb-0">
                    <span class="fw-semibold">The Adventure Hub</span>
                </h3>
                <p class="hover-2-description text-uppercase mb-0 fw-semibold">Your gateway to unforgettable journeys.
                    <br> <span class="fw-light">
                        Ladakh is the only destination available at the moment, more will be added soon.
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid shadow pt-5 bg-white rounded-4" id="serviceContainer">
        <h2 class="fw-bold mb-3 mx-3 py-3 rounded-5 text-light bg-dark text-center text-uppercase">Services</h2>
        <div class="container-fluid pt-5">

            <div class="row">
                <div class="col-sm-4 py-3">
                    <div class="box" id="card-1">
                        <div class="imgbox">
                        </div>
                        <div class="content">
                            <h3 class="fs-1">Rental Bikes</h3>
                            <p class="fs-5 fw-semibold">You can pick your favorite bike from our wide variety of adventure and cruiser bikes</p>
                            <a href="bikes.php" target="_blank" class="btn btn-default btnD">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 py-3">
                    <div class="box" id="card-2">
                        <div class="imgbox">
                        </div>
                        <div class="content">
                            <h3 class="fs-1">Medical Professionals</h3>
                            <p class="fs-5 fw-semibold">A Medical team will always travel with you, ensuring safety and assistance whenever
                                needed.</p>
                            <a href="medical.php" target="_blank" class="btn btn-default btnD">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 py-3">
                    <div class="box" id="card-3">
                        <div class="imgbox">
                        </div>
                        <div class="content">
                            <h3 class="fs-1">Trip Guide</h3>
                            <p class="fs-5 fw-semibold">Discover the ultimate experiences with trip guide, Trained to fuel your passion for
                                adventure.</p>
                            <a href="guide.php" target="_blank" class="btn btn-default btnD">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid shadow my-3 pt-5 bg-white rounded-4" id="galleryContainer">
        <h2 class="fw-bold mb-3 mx-3 py-3 rounded-5 text-light bg-dark text-center text-uppercase">Gallery</h2>
        <div class="container-fluid py-4" id="cara">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner rounded-4">
                    <div class="carousel-item active">
                        <img src="img/gallery-1.jpeg" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Hanle</h5>
                            <p>Hanle is a remote village in Ladakh, known for its observatory, stunning landscapes, and Tibetan Buddhist culture.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery-2.jpeg" class="d-block w-100 galleryImg">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Leh</h5>
                            <p>Leh is the capital of Ladakh, famed for its monasteries, rugged mountains, and vibrant Tibetan markets.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery-3.jpeg" class="d-block w-100 galleryImg" >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Khardung La</h5>
                            <p>Khardung La is one of the world's highest motorable passes, offering breathtaking views of the Himalayas and Ladakh region.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery-4.jpeg" class="d-block w-100 galleryImg">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Moray Plains</h5>
                            <p>The Moray Plains in Ladakh are vast, high-altitude desert plains, surrounded by dramatic mountains and stunning landscapes.</p>
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
    </div>

    <?php
    require "partials/_footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>