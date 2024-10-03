<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!-- BOOTSTRAP CDN 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">

            <!-- TITLE -->
            <h1 class="text-center pt-5 pb-5 fw-bold">PHP Hotels</h1>

            <!-- FORM -->
            <form class="pb-4">
                <div class="row justify-content-center">

                    <!-- Parking form -->
                    <div class="col-3">
                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option value="all" selected>Hotels parking lots</option>
                            <option value="with-parking-lots">Parking lots only</option>
                        </select>
                    </div>

                    <!-- Hotels rating form -->
                    <div class="col-3">
                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option value="all" selected>Hotels rating</option>
                            <option value="1-star">1 Star</option>
                            <option value="2-stars">2 Stars</option>
                            <option value="4-stars">4 Stars</option>
                            <option value="5-stars">5 Stars</option>
                        </select>
                    </div>
                </div>
            </form>

            <!-- TABLE -->
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <?php foreach ($hotels as $hotel) { ?>
                        <th scope="col"> <?php echo $hotel["name"]; ?></th>
                        <?php } ?>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>Description</th>
                        <?php foreach ($hotels as $hotel) { ?>
                        <td scope="col"> <?php echo $hotel["description"]; ?></td>
                        <?php } ?>
                    </tr>

                    <tr>
                        <th>Parking</th>
                        <?php foreach ($hotels as $hotel) { ?>
                        <td scope="col"> <?php echo $hotel["parking"]; ?></td>
                        <?php } ?>
                    </tr>

                    <tr>
                        <th>Vote</th>
                        <?php foreach ($hotels as $hotel) { ?>
                        <td scope="col"> <?php echo $hotel["vote"]; ?></td>
                        <?php } ?>
                    </tr>

                    <tr>
                        <th>Distance to center</th>
                        <?php foreach ($hotels as $hotel) { ?>
                        <td scope="col"> <?php echo $hotel["distance_to_center"]; ?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>

        </div>
    </main>
</body>

</html>