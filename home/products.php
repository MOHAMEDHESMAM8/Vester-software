<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vester Software</title>
        <script src="https://kit.fontawesome.com/5108fa3256.js" crossorigin="anonymous"></script>
        <link href="../assests/bootstrap.min.css" rel="stylesheet">
        <link href="css/products-style.css" rel="stylesheet" />
        <link href="stand-css/header-footer-style.css" rel="stylesheet"/> 
    </head>
</head>

<body>

 
<!--header-->
        <?php
        include "../includes/header.inc.php";
        ?>
  
   
    <!--Landing section-->

    <section class="software-room">
        <h3>
            SOFTWARE<span>&#9679;</span>ROOM
        </h3>
    </section>
    <section class="parent">
        <div class="side">
            <div class="shop">
                SHOP BY
            </div>
            <div class="category">
                <p> CATEGORY </p><span data-bs-toggle="collapse" href="#cat" aria-expanded="true" aria-controls="cat"
                    onclick="appear()"><i class="fas fa-ellipsis-v"></i></span>
            </div>
            <div class="list" id="cat">

                <ul>
                    <li class="all-lists" data-bs-toggle="collapse" href="#os" aria-expanded="true" aria-controls="os" onclick="change1()" >
                        <i class="fas fa-chevron-down a rotate"></i> Operating System
                    </li>
                    <ul id="os">
                        <li><input type="checkbox" id="mac" /><label for="mac">&nbsp;MAC</label></li>
                        <li><input type="checkbox" id="linux" /><label for="linux">&nbsp;Linux</label></li>
                        <li><input type="checkbox" id="window" /><label for="window">&nbsp;Windows</label></li>
                    </ul>
                </ul>


                <ul>
                    <li class="all-lists" data-bs-toggle="collapse" href="#prog" aria-expanded="true"
                        aria-controls="prog" onclick="change2()" ><i class="fas fa-chevron-down b rotate"></i>
                        Programming Langauge
                    </li>
                    <ul id="prog">
                        <li><input type="checkbox" id="c" /><label for="c">&nbsp; 100$ - 200$ </label></li>
                        <li><input type="checkbox" id="java" /><label for="java">&nbsp;500$ - 1000$</label></li>
                        <li><input type="checkbox" id="c#" /><label for="c#">&nbsp;1000$-5000$</label></li>
                        <li><input type="checkbox" id="py" /><label for="py">&nbsp;5000$-10000$</label></li>
                        <li><input type="checkbox" id="php" /><label for="php">&nbsp;10000$-20000$</label></li>
                    </ul>
                </ul>


                <ul>
                    <li class="all-lists " data-bs-toggle="collapse" href="#lang" aria-expanded="false"
                        aria-controls="lang"onclick="change3()" ><i class="fas fa-chevron-down c rotate"></i>
                        Translations</li>
                    <ul id="lang">
                        <li><input type="checkbox" id="a" /><label for="a">&nbsp;Arabic</label></li>
                        <li><input type="checkbox" id="e" /><label for="e">&nbsp;English</label></li>
                        <li><input type="checkbox" id="g" /><label for="g">&nbsp;German</label></li>
                        <li><input type="checkbox" id="f" /><label for="f">&nbsp;French</label></li>
                        <li><input type="checkbox" id="h" /><label for="h">&nbsp;Hindi</label></li>
                    </ul>
                </ul>

            </div>

        </div>
        <div class="main">
            <div class="d-flex p-0 search">
                <input class="form-control" type="text" placeholder="Search For Software"
                    style="padding: 21px;border-radius: 0;">
                <span class="search-span"><i class="fas fa-search"></i></span>
            </div>
            <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';" class="bread">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
            <div class="parent-product">
  
        <!-- the php code  -->
                <?php
                // includes
                    include "../Controllers/db.class.php";
                    include "../Controllers/ProductsContr.class.php";
                    include "../Views/ProductsView.class.php";
                // make an object fron the view
                    $proView = new productView();

                // call the method to show products
                
                    $proView->showProducts();
                ?>



            </div>


        </div>
    </section>

















    <!--Footer -->
<?php
    include "../includes/footer.inc.php";
    ?>


    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/products.js"></script>
</body>

</html>
