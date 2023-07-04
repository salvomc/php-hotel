<?php

    include __DIR__.'/partials/variables.php';

    if (isset($_GET['filterParking'])) 
    {
        $filterParking = $_GET['filterParking'];
    } else {
        $filterParking = false;
           }

    if (isset($_GET['filterVote'])) 
    {
        $filterVote = $_GET['filterVote'];
    } else {
        $filterVote = 0;
           }

    
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
    <form action="./index.php" method="get" class="d-flex justify-content-center m-2">
        <label for="filterVote">Mosta solo hotel con voto superiore a:</label>
        <select name="filterVote" id="filterVote" class="ms-2 me-3">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <label for="filterParking">Mosta solo hotel con parcheggio</label><br>
        <input type="checkbox" id="filterParking" name="filterParking" value="true" class="ms-2 me-3">
        <button type="submit" class="me-2">Filtra</button>
    </form>

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
                foreach ($hotels as $hotel) 
                {
                    if (!$filterParking || $hotel['parking']) 
                    {
                        if ($filterVote === 0 || $hotel['vote'] >= $filterVote) 
                        {
            ?>
                            <tr>
                            <td><?php echo $hotel['name']; ?></td>
                            <td><?php echo $hotel['description']; ?></td>
                            <td>
                                <?php
                                    if ($hotel['parking']) 
                                    {
                                        echo 'true';
                                    } else {
                                            echo 'false';
                                           }
                                ?>
                            </td>
                            <td><?php echo $hotel['vote']; ?></td>
                            <td><?php echo $hotel['distance_to_center']; ?></td>
                            </tr>
            <?php
                        }
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>