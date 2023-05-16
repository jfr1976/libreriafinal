<!DOCTYPE html>
<html lang="en">

<head>
    <title>CEO Bookstore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>

<body>
    


<?php

//Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
include("header.php");

?>

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>




    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Biblioteca</h1> 
                    <p>
                        Este es nuestro listado de libros.
                    </p>
                </div>
            </div>

            
            
            <div class="row">
            <?php foreach ($libros as $libro): ?>    
                <div class="col-12 col-md-4 mb-4">
                     
                    <div class="card h-100">
                        
                            <a href="index.php?controller=libros&action=ver&id=<?php echo $libro['id'];?>">
                                <img src=<?=$ruta.$libro['portada']; ?> class="card-img-top" alt="...">
                             </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                    <li class="text-muted text-right"><?php echo number_format($libro['precio'],2)." €" ?></li>
                                </ul>
                                <a href="shop-single.html" class="h2 text-decoration-none text-dark"><?php echo $libro['titulo'] ?></a>
                                <p class="card-text"><?php echo $libro['descripcion'] ?></p>
                                <!--<p class="text-muted">Reviews (24)</p>-->
                            
                            </div>
                        
                                 
                    </div>
                      
                </div>
            <?php endforeach; ?>   
            </div>
               
        </div>
          
    </section>
    
    <!-- End Featured Product -->
   

    <?php

//Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
include("footer.php");

?>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>