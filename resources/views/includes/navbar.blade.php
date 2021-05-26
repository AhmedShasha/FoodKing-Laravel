<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('Css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/Egy.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.4/jquery.rateyo.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="overlay">
            <div class="container" style="padding: 10px 0 0 0;">
                <a class="navbar-brand upper" href="{{ url('/') }}">
                    <span class="LogoFont">food<span class="mainColor">king</span></span>
                </a>
                <div class="dropdown">
                    <button onclick="myFunction()" class="bttn txtColor upper dropbtn">Menu
                        <i class="fa fa-bars fa-lg ml-2"></i></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="{{ route('home') }}">Home</a>
                        <hr>
                        @foreach ($kitchens as $kitchen)
                            <a href="{{ '/recipes/' . $kitchen->id }}">{{ $kitchen->name }}</a>
                        @endforeach

                    </div>
                </div>
                <script>
                    /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
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
            </div>
        </div>
    </nav>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Egy.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</body>

</html>
