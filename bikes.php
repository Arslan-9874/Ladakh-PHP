<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Adventure Hub - Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bikes/style.css">
</head>

<body class="bg-light">
    <?php
    require "partials/_header.php";
    ?>
    <div class="container shadow my-4 rounded-4 p-3 text-center" id="bikesMainContainer">

        <h2 class="fw-bold mt-3 mb-4 mx-3 py-3 rounded-5 text-light bg-dark text-center text-uppercase fs-3">Rental Bikes</h2>

        <div class="bikeCards shadow rounded-4 mx-3 my-4 py-3 d-flex align-items-center">
            <div class="bikeImg" id="bikeImg1"></div>
            <div class="bikeDetail text-start" id="bikeDetail1">
                <ul class="mb-0 fs-6">
                    <li class="my-0"><b>Name:</b> Royal Enfield Himalayan</li>
                    <li class="my-0"><b>Displacement:</b> 411cc</li>
                    <li class="my-0"><b>Curb weight:</b> 194 to 199 kg</li>
                    <li class="my-0"><b>Seat height:</b> 800 mm</li>
                    <li class="my-0"><b>Fuel tank capacity:</b> 15 L</li>
                </ul>
            </div>
        </div>
        <div class="bikeCards shadow rounded-4 mx-3 my-4 py-3 d-flex align-items-center">
            <div class="bikeImg" id="bikeImg2"></div>
            <div class="bikeDetail text-start" id="bikeDetail1">
                <ul class="mb-0 fs-6">
                    <li class="my-0"><b>Name:</b> Royal Enfield Classic 350</li>
                    <li class="my-0"><b>Displacement:</b> 346cc</li>
                    <li class="my-0"><b>Curb weight:</b> 192 to 196 kg</li>
                    <li class="my-0"><b>Seat height:</b> 800 mm</li>
                    <li class="my-0"><b>Fuel tank capacity:</b> 13.5 L</li>
                </ul>
            </div>
        </div>
        <div class="bikeCards shadow rounded-4 mx-3 my-4 py-3 d-flex align-items-center">
            <div class="bikeImg" id="bikeImg3"></div>
            <div class="bikeDetail text-start" id="bikeDetail1">
                <ul class="mb-0 fs-6">
                    <li class="my-0"><b>Name:</b> Hero XPulse 200 4V</li>
                    <li class="my-0"><b>Displacement:</b> 199.6cc</li>
                    <li class="my-0"><b>Curb weight:</b> 159 kg</li>
                    <li class="my-0"><b>Seat height:</b> 825 mm</li>
                    <li class="my-0"><b>Fuel tank capacity:</b> 13 L</li>
                </ul>
            </div>
        </div>
        <div class="bikeCards shadow rounded-4 mx-3 my-4 py-3 d-flex align-items-center">
            <div class="bikeImg" id="bikeImg4"></div>
            <div class="bikeDetail text-start" id="bikeDetail1">
                <ul class="mb-0 fs-6">
                    <li class="my-0"><b>Name:</b> KTM Adventure 390</li>
                    <li class="my-0"><b>Displacement:</b> 373cc</li>
                    <li class="my-0"><b>Curb weight:</b> 177 kg</li>
                    <li class="my-0"><b>Seat height:</b> 855 mm</li>
                    <li class="my-0"><b>Fuel tank capacity:</b> 14.5 L</li>
                </ul>
            </div>
        </div>
        <div class="bikeCards shadow rounded-4 mx-3 my-4 py-3 d-flex align-items-center">
            <div class="bikeImg" id="bikeImg5"></div>
            <div class="bikeDetail text-start" id="bikeDetail1">
                <ul class="mb-0 fs-6">
                    <li class="my-0"><b>Name:</b> BMW G310 GS</li>
                    <li class="my-0"><b>Displacement:</b> 313cc</li>
                    <li class="my-0"><b>Curb weight:</b> 170 kg</li>
                    <li class="my-0"><b>Seat height:</b> 835 mm</li>
                    <li class="my-0"><b>Fuel tank capacity:</b> 11 L</li>
                </ul>
            </div>
        </div>
        <div class="bikeCards shadow rounded-4 mx-3 my-4 py-3 d-flex align-items-center">
            <div class="bikeImg" id="bikeImg6"></div>
            <div class="bikeDetail text-start" id="bikeDetail1">
                <ul class="mb-0 fs-6">
                    <li class="my-0"><b>Name:</b> TVS NTORQ 125</li>
                    <li class="my-0"><b>Displacement:</b> 124.8cc</li>
                    <li class="my-0"><b>Curb weight:</b> 118 kg</li>
                    <li class="my-0"><b>Seat height:</b> 770 mm</li>
                    <li class="my-0"><b>Fuel tank capacity:</b> 5.8 L</li>
                </ul>
            </div>
        </div>
        <div class="bikeCards shadow rounded-4 mx-3 my-4 py-3 d-flex align-items-center">
            <p class="my-2 fs-5 fw-semibold text-center" style="width: 100%">More will be added soon.</p>
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