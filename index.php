<?php 
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
        'image' => 'https://source.unsplash.com/random/?hotel,beautilf,view',
        
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
        'image' => 'https://source.unsplash.com/random/?hotel,future',
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
        'image' => 'https://source.unsplash.com/random/?hotel,sidesee',
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
        'image' => 'https://source.unsplash.com/random/?hotel,beautiful,sight',
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
        'image' => 'https://source.unsplash.com/random/?hotel,milan',
    ],

];

$filteredHotels = [];
$filteredHotels = $hotels;
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/master.css">
  </head>
  <body class="container">
    <h1 class="text-center">Hotels</h1>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                <?php foreach ($filteredHotels as $value) { ?>
            <div class="col mb-3">
                    <div class="card">
                        <img src=<?php echo $value['image']; ?> class="card-img-top img-fluid" alt=src=<?php echo $value['name']; ?>>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['name']; ?></h5>
                            <p class="card-text"><?php echo $value['description']; ?></p>
                            <?php for($i=0;$i<5;$i++){?>
                                <?php if($i <= $value['vote']): ?>
                                    <i class="bi bi-star-fill text-warning"></i>
                                <?php else:?>
                                    <i class="bi bi-star"></i>
                                <?php endif?>
                            <?php };?>
                            <?php if($value['parking']):?>
                                <div>
                                    <i class="bi bi-p-circle-fill text-success fs-3"></i>
                                </div>
                           
                            <?php else:?>
                                <div>
                                <i class="bi bi-sign-no-parking-fill text-danger fs-3"></i>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
            </div>
                <?php }?>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>