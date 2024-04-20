<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Adventure Hub - Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/guide/style.css">
</head>

<body class="bg-light">
    <?php
    require "partials/_header.php";
    ?>
    <div class="container shadow my-4 rounded-4 p-3 text-center" id="guideMainContainer">
        <h2 class="fw-bold mt-3 mb-4 mx-3 py-3 rounded-5 text-light bg-dark text-center text-uppercase fs-3">Trip Guide</h2>

        <div id="imageContainer" class="rounded-4 mb-4 shadow">
        </div>
        <div class="px-4 fs-5">
            <p>Meet our exceptional trip guide, a true connoisseur of Ladakh's beauty and culture. A local of this
                enchanting region, our guide is more than just a companion; he is a gateway to the hidden gems that make
                Ladakh truly magical. With an intimate knowledge of the landscape, he will lead you off the beaten path
                to unveil stunning vistas and secret spots that only a local could reveal.</p>
            <p>Beyond breathtaking landscapes, our guide is a culinary enthusiast, eager to introduce you to Ladakh's
                rich gastronomic tapestry. From aromatic momos to traditional thukpa, he navigates you through the
                labyrinth of local eateries, ensuring you savor the most delicious and authentic Ladakhi cuisines. Your
                taste buds will embark on a journey as rich as the landscapes you explore.</p>
            <p>More than a guide, he is a storyteller, sharing the tales and traditions that weave the cultural fabric
                of Ladakh. His insights and familiarity with the region's customs add a layer of depth to your travel
                experience, making every moment memorable. With our local guide, your journey transcends the ordinary,
                immersing you in Ladakh's hidden treasures and culinary delights, creating a truly authentic and
                unforgettable adventure.</p>
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