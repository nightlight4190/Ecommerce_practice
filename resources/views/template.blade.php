<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Project</title>
    <link rel="stylesheet" href="{{ asset('CSS/style.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>

</head>
<body>
    <section id="topheader">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
               <i class="fa-solid fa-phone-volume"></i><span style="margin-left: 15px; font-weight: bold; ">Call Us: +977 61 402070 / 402071</span>

              
               </div>
               <div class="col-md-6 topmenu" >
               <span style="margin-left: 15px;"><a href="#" >Downloads</a></span>  
               <span style="margin-left: 15px;"><a href="#" >Carrer</a></span> 
               <span style="margin-left: 15px;"><a href="#" >Contact Us</a></span> 
                    <!-- <a href="#"></a>
                    <a href="#"></a> -->
                </div>
            </div>
            
        </div>
    </section>
    <section id="header">
    <div class="container">
    <div class="row">
                <div class="col-md-3 logo">
                    <img src="{{asset('image/logo.png')}}" alt="">
                </div>
                <div class="col-md-3">
                    <p >Pokhara 17, Sitapaila</p>
                    <p style="color:#eb5310">Head Office: 061-402070, 061-402071
                    Female Rehabilitation :
                    061- 402069, 9745289578 </p>
                </div>
                <div class="col-md-3">
                    <p>Prithive Chowk</p>
                    <p style="color:#eb5310"> Linkages Project for HIV/STI Testing,
                    Counselling & Treatment : 061-538547</p>
                </div>
                <div class="col-md-3">
                   <p> Pokhara 18, Dharapani</p>
                    <p style="color:#eb5310">Male Rehabilitation :
                    061-402068, 9840647572</p>

                </div>
            </div>
    </div>
    </section>
    <section id="home">
        <div class="menu">
            <a href="{{route('getHome')}}">Home</a>
            <a href="{{route('getAbout')}}">About</a>
            <a href="{{route('getContact')}}">Contact</a>
            <a href="#">Gallery</a>
            <a href="#">Services</a>
                </div>
            </div>
            
        </div>
    </section>

    <section>
        @yield('abc')
    </section>

    <section>
        <footer>
            <div class="container ">
                <p class="footer-text">This is footer.</p>
            </div>
        </footer>
        
    </section>
</body>
</html>