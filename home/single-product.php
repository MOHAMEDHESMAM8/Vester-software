<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vester Software</title>
        <script src="https://kit.fontawesome.com/5108fa3256.js" crossorigin="anonymous"></script>
        <link href="../assests/bootstrap.min.css" rel="stylesheet">
        <link href="css/single-product-style.css" rel="stylesheet" />
    </head>
</head>

<body>
    <header>
        <div>
            <h2 class="v"><a href="../home/home.html">Vester&nbsp;Software</a></h2>
        </div>
        <div class="d-flex justify-content-center menu ">


            <i class="fab fa-opencart fa-2x"></i>
            <div class="d-flex justify-content-center" style="height: 43.6px;">
                <span class="cart">Cart</span>
                <span class="cart-number">0</span>
            </div>
            <!--User Icon-->
            <div class="dropdown">
                <i class="fas fa-user-circle fa-2x dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                    <li class="dropdown-item user-name">Jack Jerry</li>
                    <li>
                        <hr class="dropdown-divider p-0">
                    </li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
            <i class="fas fa-bars fa-2x" style=" width: 28px;" onclick="menu()"></i>
        </div>

    </header>
    <!--Menu part-->
    <div class="menu-section" id="menu">
        <ul class="menu-list ">
            <li><a href="../home/home.html">Home</a></li>
            <li><a href="../products/products.html">Products</a></li>
            <li><a href="#">Request Software</a></li>
            <li><a href="../sign-up/sign-up.html">Sign up</a></li>
            <li><a href="../sign-in/sign-in.html">Sign In</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
    <section class="product-section">
        <!--Images section on right-->
        <div class="car">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"><img src="img/1.png"
                            class="d-block w-100 small-img" alt="app img"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"><img src="img/2.png" class="d-block w-100 small-img"
                            alt="app img"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"><img src="img/3.png" class="d-block w-100 small-img"
                            alt="app img"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"><img src="img/4.png" class="d-block w-100 small-img"
                            alt="app img"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 5"><img src="img/5.png" class="d-block w-100 small-img"
                            alt="app img"></button>
                </div>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="img/1.png" class="d-block w-100 img" alt="app img">
                    </div>
                    <div class="carousel-item">
                        <img src="img/2.png" class="d-block w-100 img" alt="app img">
                    </div>
                    <div class="carousel-item">
                        <img src="img/3.png" class="d-block w-100 img" alt="app img">
                    </div>
                    <div class="carousel-item">
                        <img src="img/4.png" class="d-block w-100 img" alt="app img">
                    </div>
                    <div class="carousel-item">
                        <img src="img/5.png" class="d-block w-100 img" alt="app img">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <i class="fas fa-chevron-left control"></i>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <i class="fas fa-chevron-right control"></i>
                </button>
            </div>


        </div>
        <!--Information Section on Left-->
        <div class="info">
            <div class="inforamtion">
                <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>'" class="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../home/home.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="../products/products.html">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Net product</li>
                    </ol>
                </nav>
                <h1>Net Software: Free Internet Connection</h1>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="product-price">50.9$</p>

                <div class="info-content">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active" data-bs-toggle="tab">Description</a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile" class="nav-link" data-bs-toggle="tab">Features</a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages" class="nav-link" data-bs-toggle="tab">Traliers</a>
                        </li>
                        <li class="nav-item">
                            <a href="#reviews" class="nav-link" data-bs-toggle="tab">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home">
                            <h4 class="mt-2">Description</h4>
                            <p class="font-grey ov">Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan
                                american apparel, butcher voluptate
                                nisi qui. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                stumptown
                                aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan
                                helvetica.
                                Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                            <h4 class="mt-2">Programming Langauge: <span class="font-grey">C++</span></h4>
                            <div class="btns">
                                <button>Buy Now</button>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <h4 class="mt-2">Features</h4>
                            <ul class="features font-grey">
                                <li>Pdf and universal document reader</li>
                                <li> Write anywhere on documents and notebooks</li>
                                <li>Connect note ideas to another notes</li>
                                <li>View maps of connection</li>
                                <li>Time group collibration (Coming soon)</li>
                                <li>Write anywhere on documents and notebooks</li>
                                <li>Anywhere on documents and notebooks</li>
                                <li>Connect note ideas to another notes</li>

                            </ul>
                            <div class="btns">
                                <button>Buy Now</button>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="tab-pane fade train" id="messages">
                            <h4 class="mt-2">Traliers</h4>
                            <p>Get an online training for using this Software.</p>
                            <p>Please fill the following form:</p>
                            <a href="#">wwww.vester-training.com/netsoftware</a>
                            <h5 class="mt-2">Price: <span class="font-grey">10.9$</span></h5>
                            <h5 class="mt-2">Duration: <span class="font-grey">3 hours</span></h5>
                            <div class="btns">
                                <button>Buy Now</button>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="tab-pane fade train" id="reviews">
                            <h4 class="mt-2">Reviews</h4>
                            <div class="features">
                                <div class="p-0 m-0">
                                    <p style="font-weight: 600;"><i class="far fa-user" style="color: #21bfca;"></i>
                                        Mona
                                        Zakii</p>
                                    <q>Nice Desktop appliction to use during work.</q>
                                    <hr class="p-0">
                                </div>
                                <div class="p-0 m-0">
                                    <p style="font-weight: 600;"><i class="far fa-user" style="color: #21bfca;"></i>
                                        Ahmed
                                        Helmy</p>
                                    <q>Nice Desktop appliction to use during work.</q>
                                    <hr class="p-0">
                                </div>
                                <div class="p-0 m-0">
                                    <p style="font-weight: 600;"><i class="far fa-user" style="color: #21bfca;"></i>
                                        Kareem Abd El Aziz</p>
                                    <q>Nice Desktop appliction to use during work.</q>
                                    <hr class="p-0">
                                </div>
                            </div>
                            <div class="submit-btn">
                                <input type="text" placeholder="Write Your Review" required />
                                <button>Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>

    </section>

    <section class="similar">
        <p class="intro">Get to know to more products</p>
        <h3>People Also Like</h3>
        <div class="caruasel-div">
            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="pageone">
                            <div class="single-product ">
                                <img src="../img/5.jpg" alt="product">
                                <h5><a href="#"><a href="#">Net Software</a></a></h5>
                                <div class="rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt p-0"></i>
                                </div>
                                <div class="d-flex justify-content-between price">
                                    <div class="price-text">
                                        <p>500$</p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                    <div class="cart-icon">
                                        <a href="#"><i class="fab fa-opencart"></i> </a>
                                    </div>


                                </div>
                            </div>
                            <div class="single-product">
                                <img src="../img/5.jpg" alt="product">
                                <h5><a href="#">Net Software</a></h5>
                                <div class="rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt p-0"></i>
                                </div>
                                <div class="d-flex justify-content-between price">
                                    <div class="price-text">
                                        <p>500$</p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                    <div class="cart-icon">
                                        <a href="#"><i class="fab fa-opencart"></i> </a>
                                    </div>


                                </div>
                            </div>
                           
                            <div class="single-product">
                                <img src="../img/5.jpg" alt="product">
                                <h5><a href="#">Net Software</a></h5>
                                <div class="rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt p-0"></i>
                                </div>
                                <div class="d-flex justify-content-between price">
                                    <div class="price-text">
                                        <p>500$</p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                    <div class="cart-icon">
                                        <a href="#"><i class="fab fa-opencart"></i> </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="pageone">
                            <div class="single-product">
                                <img src="../img/5.jpg" alt="product">
                                <h5><a href="#">kit Software</a></h5>
                                <div class="rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt p-0"></i>
                                </div>
                                <div class="d-flex justify-content-between price">
                                    <div class="price-text">
                                        <p>500$</p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                    <div class="cart-icon">
                                        <a href="#"><i class="fab fa-opencart"></i> </a>
                                    </div>


                                </div>
                            </div>
                            <div class="single-product">
                                <img src="../img/5.jpg" alt="product">
                                <h5><a href="#">kit Software</a></h5>
                                <div class="rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt p-0"></i>
                                </div>
                                <div class="d-flex justify-content-between price">
                                    <div class="price-text">
                                        <p>500$</p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                    <div class="cart-icon">
                                        <a href="#"><i class="fab fa-opencart"></i> </a>
                                    </div>


                                </div>
                            </div>
                            <div class="single-product">
                                <img src="../img/5.jpg" alt="product">
                                <h5><a href="#">kit Software</a></h5>
                                <div class="rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt p-0"></i>
                                </div>
                                <div class="d-flex justify-content-between price">
                                    <div class="price-text">
                                        <p>500$</p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                    <div class="cart-icon">
                                        <a href="#"><i class="fab fa-opencart"></i> </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <i class="fas fa-chevron-left control"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <i class="fas fa-chevron-right control"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>









    <footer>
        <div class="footer">
            <h6 style="letter-spacing: 4px;">CONTACT US</h6>

            <div class="icons">
                <i class="fas fa-envelope"></i>
                <i class="fab fa-facebook-f "></i>
                <i class="fab fa-twitter "></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
        <span>&copy;All Rights Reserved 2021-2022</span>
    </footer>



    <!-- JavaScript -->
    <script src="../assests/bootstrap.bundle.min.js"></script>
    <script src="js/single-product.js"></script>
</body>

</html>