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
    [
        'name' => 'Hotel Splendido',
        'description' => 'Hotel Splendido Descrizione',
        'parking' => true,
        'vote' => 3,
        'distance_to_center' => 6.2,
        'image' => 'https://source.unsplash.com/random/?hotel,splendid,view',
    ],
    [
        'name' => 'Hotel Mediterraneo',
        'description' => 'Hotel Mediterraneo Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 2.5,
        'image' => 'https://source.unsplash.com/random/?hotel,mediterranean',
    ],
    [
        'name' => 'Hotel Esplanade',
        'description' => 'Hotel Esplanade Descrizione',
        'parking' => false,
        'vote' => 2,
        'distance_to_center' => 3.8,
        'image' => 'https://source.unsplash.com/random/?hotel,esplanade',
    ],
    [
        'name' => 'Hotel Royal',
        'description' => 'Hotel Royal Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 1.7,
        'image' => 'https://source.unsplash.com/random/?hotel,royal',
    ],
    [
        'name' => 'Hotel Oceano',
        'description' => 'Hotel Oceano Descrizione',
        'parking' => false,
        'vote' => 3,
        'distance_to_center' => 12.1,
        'image' => 'https://source.unsplash.com/random/?hotel,ocean',
    ],
    [
        'name' => 'Hotel Paradise',
        'description' => 'Hotel Paradise Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 8.3,
        'image' => 'https://source.unsplash.com/random/?hotel,paradise',
    ],
    [
        'name' => 'Hotel Vista Mare',
        'description' => 'Hotel Vista Mare Descrizione',
        'parking' => true,
        'vote' => 5,
        'distance_to_center' => 3.5,
        'image' => 'https://source.unsplash.com/random/?hotel,sea,view',
    ],
    [
        'name' => 'Hotel Moderno',
        'description' => 'Hotel Moderno Descrizione',
        'parking' => true,
        'vote' => 3,
        'distance_to_center' => 4.9,
        'image' => 'https://source.unsplash.com/random/?hotel,modern',
    ],
    [
        'name' => 'Hotel Miramare',
        'description' => 'Hotel Miramare Descrizione',
        'parking' => false,
        'vote' => 2,
        'distance_to_center' => 1.8,
        'image' => 'https://source.unsplash.com/random/?hotel,beach',
    ],
    [
        'name' => 'Hotel Roma',
        'description' => 'Hotel Roma Descrizione',
        'parking' => false,
        'vote' => 3,
        'distance_to_center' => 0.5,
        'image' => 'https://source.unsplash.com/random/?hotel,roma',
    ],
    [
        'name' => 'Hotel Tropicale',
        'description' => 'Hotel Tropicale Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 15.2,
        'image' => 'https://source.unsplash.com/random/?hotel,tropical',
    ],
    [
        'name' => 'Hotel Montagna',
        'description' => 'Hotel Montagna Descrizione',
        'parking' => true,
        'vote' => 5,
        'distance_to_center' => 20,
        'image' => 'https://source.unsplash.com/random/?hotel,mountain',
    ],
    [
        'name' => 'Hotel Lago',
        'description' => 'Hotel Lago Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 7.9,
        'image' => 'https://source.unsplash.com/random/?hotel,lake',
    ],
    [
        'name' => 'Hotel Fiore',
        'description' => 'Hotel Fiore Descrizione',
        'parking' => false,
        'vote' => 4,
        'distance_to_center' => 3.1,
        'image' => 'https://source.unsplash.com/random/?hotel,flower',
    ],

];

$filteredHotels = [];
$noResults = false;
if ((empty($_GET['vote']) || $_GET['vote'] == 'all') && empty($_GET['park'])){
    $filteredHotels = $hotels;
} else {
    $requiredVote = $_GET['vote'];
    if ($requiredVote == 'all' && !empty($_GET['park'])){
        foreach ($hotels as $value) {
            if ($value['parking'] == true){
                $filteredHotels[] = $value;
            };
        }
    } elseif ($requiredVote != 'all' && !empty($_GET['park'])) {
        foreach ($hotels as $value) {
            if ($value['parking'] == true && $value['vote'] == $requiredVote){
                $filteredHotels[] = $value;
            };
        }
    } elseif ($requiredVote != 'all'){
        foreach ($hotels as $value) {
            if ($value['vote'] == $requiredVote){
                $filteredHotels[] = $value;
            };
        }
    }

    if (count($filteredHotels) === 0){
        $noResults = true;
    };
};



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
    <h1 class="text-center py-4">Hotels</h1>
    <div class="container my-2">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET" class="bg-body-tertiary py-4 px-3 rounded">
        <div class="row row-cols-1 row-cols-md-3 align-items-center">
                <div class="col mb-3 mb-md-0 d-md-flex align-items-center">
                        <p class="m-md-0 pe-md-2">Valutazione </p>
                        <select name="vote" id="vote" class="form-select w-100">
                            <option value="all">Tutti</option>
                            <option value="1">1 stella</option>
                            <option value="2">2 stelle</option>
                            <option value="3">3 stelle</option>
                            <option value="4">4 stelle</option>
                            <option value="5">5 stelle</option>
                        </select>
                </div>
                <div class='col mb-3 mb-md-0'>
                    <span>Parcheggio: </span>
                    <input type="checkbox" class="ms-3 form-check-input" name="park">
                </div>       
                <div class='col mb-3 mb-md-0'>
                    <button type="submit" class="btn btn-primary w-100">Cerca</button>
                </div>
                   
        </div>
              
        </form>
    </div>
       
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                <?php if($noResults): ?>
                    <p class="text-center w-100">Nessun risultato trovato per la tua ricerca.</p>
                <?php else:?>
                <?php foreach ($filteredHotels as $value) { ?>
            <div class="col mb-3">
                    <div class="card">
                        <img src=<?php echo $value['image']; ?> class="card-img-top img-fluid" alt=src=<?php echo $value['name']; ?>>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['name']; ?></h5>
                            <p class="card-text"><?php echo $value['description']; ?></p>
                            <?php for($i=1;$i<=5;$i++){?>
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
                <?php endif?>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>