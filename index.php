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

$filteredHotels;

if (isset($_GET))

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
            <form class="pb-4 d-flex" method="get">
                <!-- Hotels rating form -->
                <div class="col-2 me-5">
                    <select class="form-select form-select-sm" aria-label="Small select example">
                        <option value="all" selected>Hotels rating</option>
                        <option value="1-star">1 Star</option>
                        <option value="2-stars">2 Stars</option>
                        <option value="4-stars">4 Stars</option>
                        <option value="5-stars">5 Stars</option>
                    </select>
                </div>

                <!-- Parking form -->
                <div class="form-check col-3">
                    <label class="form-check-label" for="parking">Parking lots</label>
                    <input class="form-check-input" type="checkbox" id="parking" name="parking">
                </div>

                <!-- Buttons -->
                <div class="text-end w-100">
                    <button type="submit" class="btn btn-primary me-3">Send</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>

            <!-- TABLE -->
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Parking</th>
                        <th>Vote</th>
                        <th>Distance to center</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($hotels as $hotel) { ?>
                        <tr>
                            <td scope="col"> <?php echo $hotel["name"]; ?></td>
                            <td scope="col"> <?php echo $hotel["description"]; ?></td>
                            <td scope="col"> <?php echo $hotel["parking"]; ?></td>
                            <td scope="col"> <?php echo $hotel["vote"]; ?></td>
                            <td scope="col"> <?php echo $hotel["distance_to_center"]; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </main>
</body>

</html>