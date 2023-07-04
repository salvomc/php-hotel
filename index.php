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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>PHP Hotel</title>
    </head>

<body>
    <h1 class="text-center m-4">PHP Hotel</h1>
    <table class="table table-striped-columns w-75 m-auto text-center ">
        <thead class="table-info border border-info">
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Parcheggio</th>
                <th>Voto</th>
                <th>Distanza dal centro (KM)</th>
            </tr>
        </thead>
        <tbody class="border border-info">
            <?php
                foreach ($hotels as $hotel) {
            ?>
            <tr>
                <td>
                    <?php
                         echo $hotel['name'];
                    ?>
                </td>
                <td>
                    <?php
                        echo $hotel['description'];
                    ?>
                    </td>
                    <td>
                    <?php
                        if ($hotel['parking'] === true) 
                        {
                            echo 'Sì';
                        } else {
                                echo 'No';
                               }
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $hotel['vote'];
                            ?>
                    </td>
                    <td>
                        <?php
                            echo $hotel['distance_to_center'];
                        ?>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>