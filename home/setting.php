<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vester Software</title>
        <script src="https://kit.fontawesome.com/5108fa3256.js" crossorigin="anonymous"></script>
        <link href="../assests/bootstrap.min.css" rel="stylesheet">
        <link href="css/setting-style.css" rel="stylesheet" />
    </head>
</head>

<body>
    <header>
        <div>
            <h2 class="v"><a href="home.html">Vester&nbsp;Software</a></h2>
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
            <li><a href="home.html">Home</a></li>
            <li><a href="../products/products.html">Products</a></li>
            <li><a href="#">Request Software</a></li>
            <li><a href="../sign-up/sign-up.html">Sign up</a></li>
            <li><a href="../sign-in/sign-in.html">Sign In</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>


    <div class="whole">
        <!--Picture Side-->
        <div>
            <div class="pt-0">
                <img src="../img/6.png" class="p-0" alt="profile picture" />
            </div>
            <div class="change-profile">
                <a href="#">Change profile picture</a>
            </div>
            <div class="user-social">
                <ul>
                    <li>
                        <p><i class="fas fa-globe"></i> Website</p>
                        <input type="text" placeholder="https://bootdey.com" required />
                    </li>
                    <li>
                        <p><i class="fab fa-github"></i> Github</p>
                        <input type="text" placeholder="bootdey" required />
                    </li>
                    <li>
                        <p><i class="fab fa-twitter"></i> Twitter</p>
                        <input type="text" placeholder="@bootdey" required />
                    </li>
                    <li>
                        <p><i class="fab fa-instagram"></i> Instagram</p>
                        <input type="text" placeholder="bootdey" required />
                    </li>
                    <li id="face">
                        <p><i class="fab fa-facebook-f"></i> Facebook</p>
                        <input type="text" placeholder="bootdey" required />
                    </li>
                </ul>
            </div>
        </div>
        <!--Content Side-->
        <div class="setting">
            <form>
            <div class="about head-table">
                <h4>Edit Profile</h4>
                <div class="line"></div>
            </div>
            <div class="top">
                <div class="name">
                    <div class="names">
                        <p>First Name</p>
                        <input type="text" placeholder="John" required />
                    </div>
                    <div class="names">
                        <p>Last Name</p>
                        <input type="text" placeholder="Jerry" required />
                    </div>

                </div>

                <div class="standard">
                    <p>Description</p>
                    <input type="text" placeholder="Software Engineer" required />
                </div>
                <div class="standard">
                    <p>About You</p>
                    <input type="text" placeholder="Lorem ipsum dolor sit amet" required />
                </div>

            </div>
            <br>
            <div class="about head-table">
                <h4>Account Setting</h4>
                <div class="line"></div>
            </div>
            <br>
            <div class="about head-table">
                <h5>Email Setting</h5>
                <div class="line"></div>
            </div>
            <div class="top">
                <div class="standard">
                    <p>New Email</p>
                    <input type="email" placeholder="user_mail@gmail.com" required />
                </div>
            </div>
            <br>
            <div class="about head-table">
                <h5>Password Setting</h5>
                <div class="line"></div>
            </div>
            <div class="top">
                <div class="standard">
                    <p>Old Password</p>
                    <input type="password" placeholder="**********" class="pass1" required />
                </div>
                <div class="standard">
                    <p>New Password</p>
                    <input type="password" placeholder="**********" class="pass2" required />
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" onclick="myFunction()">
                        Show Password
                    </label>
                </div>
            </div>
            <br>
            <div class="about head-table">
                <h5>Phone Number Setting</h5>
                <div class="line"></div>
            </div>
            <div class="top">
                <div class="standard">
                    <p>Phone Number</p>
                    <input type="number" placeholder="0123456789" required />
                </div>
                
            </div>
            <br>
            <br>
            <div class="save">
                <button>
                    Save Changes
                </button>
            </div>
</form>
        </div>
            










    </div>
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
    <script src="js/setting.js"></script>
</body>

</html>