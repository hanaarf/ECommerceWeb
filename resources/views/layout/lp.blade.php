<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>kitkat</title>
    <link rel="shortcut icon" href="img/logo.png" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---------------  Chart JS  --------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <!---------------  Chart JS Plugin  --------------------->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
@if ($message = Session::get('success'))
      <div class="alert">
        <p>{{ $message }}</p>
      </div>
@endif
    <nav>
        <span class="brand"><img src="img/logo.png" alt="" width="110px"></span>
        <ul>
          <li><a href="/kitkat">Home</a></li>
          <li><a href="/product">Product</a></li>
          <li>
            <a class="naha" href="#">Pages
            <i class="fas fa-caret-down"></i>
            </a>
            <ul>
               <li><a class="yuhu" href="/buy">Buynow </a></li>
               <li><a class="yuhu" href="/contact">Contact</a></li>
            </ul>
         </li>
         @auth
         <li><a href="/logoutlp">Sign out</a> </li>
         
         @else
         <li><a href="/">Sign in</a> </li>
         @endauth
          {{-- <li><a href="/logoutlp">Logout</a> </li> --}}
        </ul>

        <div class="containerya">
            <div class="search-box">
                <div class="search-icon">
                    <i class="fas fa-search"></i>
                </div>
                <div class="search-input">
                    <input type="text " class="input" placeholder="Search Menu">
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="bawah">
        <div class="">
            <div class="contain">
                <div class="row g-5" style="display: flex;column-gap: 120px;margin-left: 35px;">
                    <div style="display: flex;column-gap: 25px;flex-direction: column;font-size: 16px;">
                        <h4 style="margin-bottom: 30px;font-size: 20px;">Company</h4>
                        <ul style="display: flex;column-gap: 25px;flex-direction: column;font-size: 16px;">
                            <li style="display: flex;column-gap: 25px;flex-direction: column;font-size: 16px;">
                                <a style="margin-bottom: 5px;" href=""> <span style="font-size: 13px;"
                                        class="material-symbols-outlined"> arrow_forward_ios </span> About Us</a>
                                <a style="margin-bottom: 5px;" href=""> <span style="font-size: 13px;"
                                        class="material-symbols-outlined"> arrow_forward_ios </span> Contact Us</a>
                                <a style="margin-bottom: 5px;" href=""> <span style="font-size: 13px;"
                                        class="material-symbols-outlined"> arrow_forward_ios </span> Reservation</a>
                                <a style="margin-bottom: 5px;" href=""> <span style="font-size: 13px;"
                                        class="material-symbols-outlined"> arrow_forward_ios </span> Privacy Police</a>
                                <a style="margin-bottom: 5px;" href=""> <span style="font-size: 13px;"
                                        class="material-symbols-outlined"> arrow_forward_ios </span> Terms &
                                    Condition</a>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <h4 style="margin-bottom: 30px;font-size: 20px;">Contact</h4>
                        <p style="margin-bottom: 15px;"><i class="fa fa-map-marker-alt me-3"
                                style="margin-right: 10px;"></i> 123 Street, New York, USA</p>
                        <p style="margin-bottom: 15px;"><i class="fa fa-phone-alt me-3" style="margin-right: 10px;"></i>
                            +012 345 67890</p>
                        <p style="margin-bottom: 15px;"><i class="fa fa-envelope me-3" style="margin-right: 10px;"></i>
                            info@example.com</p>
                        <div style="display: flex;column-gap: 20px;">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 style="margin-bottom: 30px;font-size: 20px;">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal" style="margin-top: 10px;">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6" style="width: 300px;">
                        <h4 style="margin-bottom: 30px;font-size: 20px;">Newsletter</h4>
                        <p style="margin-bottom: 20px">Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email" style="padding: 13px 23px;">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                                style="position: absolute;background-color: #990909;color: #ffffff;border: none;padding: 10px 15px;margin-left: -80px;margin-top: 5px;">SignUp</button>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <hr style=" color: #ffffff;"><br>
            <div class="container">
                <div class="copyright">
                    <div class="row" style="display: flex;column-gap: 467px;margin-left: 35px;">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">kitkat ind</a>, All Right Reserved.
                            Designed By <a class="border-bottom" href="">Hana</a><br><br>
                            Distributed By <a class="border-bottom" href="" target="_blank">Hana</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a> |
                                <a href="">Cookies</a> |
                                <a href="">Help</a> |
                                <a href="">FQAs</a> |
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="footer">
    <img src="img/ftr.png" alt="" width="1354px" class="ftr">
    <div class="leftyh">
      <h1><a href="">sitemaps and legal link +</a></h1>
    </div>
    <div class="right">
      <ul>
        <li><i class="fab fa-facebook-f"></i></li>
        <li><i class="fab fa-twitter"></i></li>
        <li><i class="fab fa-instagram"></i></li>
        <li><i class="far fa-envelope"></i></li>
      </ul>
      <p>&copy; Copyright. hana's Community 2022. </p>
    </div>
  </div> -->

  
  <script src="{{ asset('swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('script.js') }}"></script>  
</body>

</html>
