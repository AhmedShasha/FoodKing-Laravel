<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodKing</title>
    <!--  CSS files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('Css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/normalize.css') }}">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap">
</head>

<body>

    <!-- Start header  -->
    <header class="header txtColor cover">
        <div class="overlay">
            <div class="container">
                <nav class="navbar upper">
                    <span class="LogoFont">food<span class="mainColor">king</span>
                    </span>
                    <div class="dropdown">
                        <button onclick="myFunction()" class="btn txtColor
                                upper dropbtn">
                            Menu <i class="fa fa-bars fa-lg ml-2"></i>
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="{{ route('home') }}">Home</a>
                            @foreach ($kitchens as $kitchen)
                                <a href="{{ 'recipes/' . $kitchen->id }}">{{ $kitchen->name }}</a>
                            @endforeach
                        </div>

                    </div>
                    <script>
                        /* When the user clicks on the button,toggle between hiding and showing the dropdown content */
                        function myFunction() {
                            document.getElementById("myDropdown").classList.toggle("show");
                        }

                        // Close the dropdown if the user clicks outside of it
                        window.onclick = function(event) {
                            if (!event.target.matches('.dropbtn')) {
                                var dropdowns = document.getElementsByClassName("dropdown-content");
                                var i;
                                for (i = 0; i < dropdowns.length; i++) {
                                    var openDropdown = dropdowns[i];
                                    if (openDropdown.classList.contains('show')) {
                                        openDropdown.classList.remove('show');
                                    }
                                }
                            }
                        }

                    </script>
                    <!-- <button class="btn upper txtColor">login</button> -->
                </nav>
                <div class="intro txtCenter txtColor">

                    <h1 class="capital">prepare <span class="mainColor">your</span> meal..
                    </h1>

                    <!-- Search form -->
                    <div class="wrap">
                        <div class="search">
                            <input type="text" class="searchTerm" placeholder="What are you looking for?">
                            <button type="submit" class="searchButton">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <span class="arrow">
                    <i class="fa fa-angle-down fa-2x"></i>
                </span>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <section class="section">


        <!-- Start Categories  -->
        <div class="features txtCenter">
            <div class="container">
                <h1 class="capital special-heading">categories</h1>
                <div class="row">
                    @foreach ($kitchens as $kitchen)
                        <div class="col-sm-6 col-lg-6 col-xs-12">
                            <div class="item">
                                <img src="{{ asset('img/kitchens/' . $kitchen->img) }}" class="img">
                                <div class="over">
                                    <h3 class="capital">{{ $kitchen->name }} kitchen</h3>
                                    <a href="{{ 'recipes/' . $kitchen->id }}">
                                        <button class="btn btn-primary capital">
                                            show More
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
            <hr class="separator">

            <!-- Start Popular meals -->

            <div class="popular txtCenter">
                <div class="container">
                    <h1 class="capital special-heading">popular meals</h1>

                    <div class="row">

                        <div class="col-sm-6 col-lg-3">
                            <div class="item">
                                <img src="Images/???Mlo5ya.jpg" class="img">
                                <div class="over">
                                    <h3 class="capital">Mlokheya</h3>
                                    <button onclick href="../Egyfood.html" class=" btn btn-primary capital ">show
                                        More</button>
                                </div>
                            </div>
                        </div>
                        <div class=" col-sm-6 col-lg-3 ">
                            <div class=" item ">
                                <img src=" Images/Chicken-Tikka-Masala.jpg " class=" img ">
                                <div class=" over ">
                                    <h3 class=" capital ">Chicken tikka masala</h3>
                                    <button class=" btn btn-primary capital ">show
                                        More</button>
                                </div>
                            </div>
                        </div>
                        <div class=" col-sm-6 col-lg-3 ">
                            <div class=" item ">
                                <img src=" Images/SingaporeFriedNoodles.jpg " class=" img ">
                                <div class=" over ">
                                    <h3 class=" capital ">???Singapore Fried Noodles</h3>
                                    <button class=" btn btn-primary capital ">show
                                        More</button>
                                </div>
                            </div>
                        </div>
                        <div class=" col-sm-6 col-lg-3 ">
                            <div class=" item ">
                                <img src=" Images/lasagna-con-sfoglia-verde.jpg " class=" img ">
                                <div class=" over ">
                                    <h3 class=" capital ">LASAGNE AL RAGU</h3>
                                    <button class=" btn btn-primary capital ">show
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Popular -->

            <hr class=" separator ">

            <!-- Start popular restaurant -->
            <div class=" rest ">
                <div class=" container ">
                    <h1 class=" capital special-heading ">popular restaurant</h1>
                    <div class=" row restaurant ">
                        <div class=" col-sm-6 col-lg-2 ">
                            <img src=" images/70269124_2373430409574342_7900488961129185280_n.jpg "
                                class=" img rounded-circle ">
                        </div>

                        <div class=" col-sm-6 col-lg-2 ">
                            <img src=" images/images (3).jpg " class=" img rounded-circle ">
                        </div>
                        <div class=" col-sm-6 col-lg-2 ">
                            <img src=" images/126224467_2964303707135538_8091068590564515309_o.jpg "
                                class=" img rounded-circle ">

                        </div>
                        <div class=" col-sm-6 col-lg-2 ">
                            <img src=" images/download (5).png " class=" img rounded-circle ">
                        </div>


                        <div class=" col-sm-6 col-lg-2 ">
                            <img src=" images/14344341_1106000596163023_6868589102164511035_n.jpg "
                                class=" img rounded-circle ">

                        </div>
                        <div class=" col-sm-6 col-lg-2 ">
                            <img src=" images/unnamed.jpg " class=" img rounded-circle ">

                        </div>
                    </div>
                </div>
            </div>
            <!-- End popular restaurant -->
    </section>
    <!-- End Section -->

    <!-- StartFooter -->
    <footer class=" footer ">
        <div class=" container ">
            <div class=" content "><span class=" copyright ">
                    ?? 2020 COPYRIGHT
                    <span class=" LogoFont capital ">food<span class=" mainColor ">king</span></span>
                </span>
                <br>
                <br>
                <span class=" design logoFont ">DESIGNED BY Shasha</span>
            </div>
            <div class=" icons txtCenter ">
                <i class=" fa fa-facebook fa-lg "></i>
                <i class=" fa fa-twitter fa-lg "></i>
                <i class=" fa fa-google-plus fa-lg "></i>
            </div>
        </div>
    </footer>
    <!-- End footer -->


    <!-- JS files -->

    <script src=" {{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }} "></script>
    <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js "
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js "
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj " crossorigin="anonymous ">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js ">
    </script>
    <script src="{{ asset('js/home.js') }}"></script>

</body>

</html>
