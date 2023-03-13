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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container my-5">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
           <h2>Hotel Disponibili</h2>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                 <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Parking</th>
                  <th scope="col">Vote</th>
                  <th scope="col">Distance to center</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($hotels as $key => $hotel) :?>
                <tr>
                  <th scope="row"><?= $key + 1 ?></th>
                  <td><?= $hotel["name"] ?></td>
                  <td><?= $hotel["description"] ?></td>
                  <td><?= $hotel["parking"] ? "Yes" : "No" ?></td>
                  <td><?= $hotel["vote"] ?></td>
                  <td><?= $hotel["distance_to_center"] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>


      </div>
    </div>
  </div>
</body>
</html>