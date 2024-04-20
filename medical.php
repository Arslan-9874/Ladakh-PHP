<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Adventure Hub - Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index/style.css">
    <link rel="stylesheet" href="css/medical/style.css">
</head>

<body class="bg-light">
    <?php
    require "partials/_header.php";
    ?>
    <div class="container shadow my-4 rounded-4 p-3 text-center" id="medicalMainContainer">
        <h2 class="fw-bold mt-3 mb-4 mx-3 py-3 rounded-5 text-light bg-dark text-center text-uppercase fs-3">Medical Professionals</h2>

        <div id="imageContainer" class="rounded-4 mb-4 shadow">
        </div>
        <div class="px-4 fs-5">
            <p>Embarking on a journey with us ensures not only adventure but also a commitment to your well-being. Our
                travel experience is accompanied by a dedicated medical team, equipped to address any health concerns
                that
                may arise during your trip. Comprising skilled healthcare professionals, our team ensures that you are
                in
                safe hands from the moment you set foot on the journey.</p>
            <p>Our medical services extend beyond routine check-ups; we prioritize your safety with a comprehensive
                approach. The team is prepared to handle emergencies, injuries, or sudden illnesses that may occur while
                exploring new destinations. Equipped with first aid supplies, essential medications, and advanced
                medical
                equipment, our medical professionals provide immediate assistance in critical situations.</p>
            <p>In addition to emergency response, our medical team offers guidance on health precautions, ensuring
                travelers
                are well-informed about local health risks and preventive measures. This commitment to health and safety
                creates a secure environment, allowing you to focus on enjoying your travel experience with peace of
                mind.
                Your well-being is our priority, and our dedicated medical team is there to support you throughout your
                journey, making your adventure not only thrilling but also safe and secure.</p>
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