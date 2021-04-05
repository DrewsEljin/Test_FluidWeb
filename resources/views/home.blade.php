<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLOUDBUDGET</title>
    <link rel="stylesheet" href="{{ asset("styles/hamburgers.css") }}">
    <link rel="stylesheet" href="{{ asset("styles/home.css") }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="popup-container">
        <div class="popup">
            <ul class="popup_menu">
                <li>
                    <a href="">
                        OVERVIEW
                    </a>
                </li>
                <li>
                    <a href="">
                        FEATURES
                    </a>
                </li>
                <li>
                    <a href="">
                        TECHNOLOGY
                    </a>
                </li>
                <li>
                    <a href="">
                        CONTACT
                    </a>
                </li>
                <li>
                    @guest
                    <a href="{{ URL::route('register')}}">
                        SIGN UP
                    </a>
                    @else
                    <a href="{{ url('/edit_page') }}">
                        EDIT PAGE
                    </a>
                    @endauth
                </li>
            </ul>
            <img src="{{asset("img/us-flag.png")}}" alt="">
            <select class="minimal">
                <option>EN</option>
                <option>GER</option>
                <option>RU</option>
            </select>
            @guest
                    <a href="{{ URL::route('login') }}">
                        <button class="login_btn">
                            LOGIN
                        </button>
                    </a>
                    @else

                    <a href="{{ URL::route('logout') }}">
                        <button class="login_btn">
                            LOGOUT
                        </button>
                    </a>
                    @endauth
        </div>
    </div>
    <header class="header" id="header">
        <div class="fp_image">
            <img src="{{asset("img/bg.png")}}" alt="">
        </div>
        <div class="container height_cont">
            <div class="row nav">
                <div class="col-lg-3 col-md-9 col-sm-9 col-9 dashicons-cloud">
                    <img src="{{asset("img/cloud.png")}}" alt="">
                    CLOUDBUDGET
                </div>
                <button class="col-md-3 col-sm-3 col-3 hamburger hamburger--3dx-r" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <ul class="col-lg-6 menu">
                    <li>
                        <a href="">
                            OVERVIEW
                        </a>
                    </li>
                    <li>
                        <a href="">
                            FEATURES
                        </a>
                    </li>
                    <li>
                        <a href="">
                            TECHNOLOGY
                        </a>
                    </li>
                    <li>
                        <a href="">
                            CONTACT
                        </a>
                    </li>
                    <li>
                        @guest
                        <a href="{{ URL::route('register')}}">
                            SIGN UP
                        </a>
                        @else
                        <a href="{{ url('/edit_page') }}">
                            EDIT PAGE
                        </a>
                        @endauth
                    </li>
                </ul>
                <div class="col-lg-3 col-md-8 language-login">
                    <img src="{{asset("img/us-flag.png")}}" alt="">
                    <select class="minimal">
                        <option>EN</option>
                        <option>GER</option>
                        <option>RU</option>
                    </select>
                    @guest
                    <a href="{{ URL::route('login') }}">
                        <button class="login_btn">
                            LOGIN
                        </button>
                    </a>
                    @else

                    <a href="{{ URL::route('logout') }}">
                        <button class="login_btn">
                            LOGOUT
                        </button>
                    </a>
                    @endauth
                </div>
            </div>
            <div class="row central-header">
                <div class="col-lg-12">


                    <h1>{{$firstSec->header}}</h1>

                    <div class="text-header">
                        {{$firstSec->text}}
                    </div>
                    @guest
                    <a href="{{ URL::route('register')}}">
                        <button class="sign_btn">
                            SIGN UP
                        </button>
                    </a>
                    @else
                    <a href="{{ url('/edit_page') }}">
                        <button class="sign_btn">
                            EDIT PAGE
                        </button>
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </header>
    <section class="budget_management">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="budget_label">
                        {{$secondSec->header}}
                    </div>
                    <div class="budget_text">
                        Our software is made so you can access and manage your budget and expenses online at any time from any device. It provides detailed income and expense reports with graphs so you can easilly see your spending patterns and budget at a glance. Read below to find out more.
                    </div>
                    <div class="learn_btn">Learn more</div>
                </div>
                <div class="col-lg-6 offset-lg-1 video_cont">
                    <img class="play-img" src="{{asset("img/play.png")}}" alt="">
                    <img class="conf-img" src="{{asset("img/conf.png")}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="features_sect">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>{{$thirdSec->header}}</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6  box_cont">
                        <img class="img_full" src="../img/money.png" alt="">
                        <div class="box">
                            <div class="box_label">
                                Supports All Currencies and Cards
                            </div>
                            <div class="box_text">
                                We support all popular currencies and is fully customizable to add
                            </div>
                            <div class="btn_read">Read more</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6  box_cont">
                        <img class="img_full" src="{{asset("img/phone.png")}}" alt="">
                        <div class="box">
                            <div class="box_label">
                                Manage your expenses on the go
                            </div>
                            <div class="box_text">
                                You can access your account from anywhere in the world on any device
                            </div>
                            <div class="btn_read">Read more</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 box_cont">
                        <img class="img_full" src="{{asset("img/hall.png")}}" alt="">
                        <div class="box">
                            <div class="box_label">
                                Cloud Budget Management Software
                            </div>
                            <div class="box_text">
                                Our software is made so you can access and manage your budget
                            </div>
                            <div class="btn_read">Read more</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tech">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>{{$fourthSec->header}}</h3>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 frame">
                    <div class="number-block">
                        <div class="number">
                            01
                        </div>
                        <img src="{{asset("img/cloud_storage.png")}}" alt="">

                    </div>
                    <div class="tech_label">
                        Cloud Storage
                    </div>
                    <div class="tech_text">
                        Access your account from anywhere <br> in the world on any device
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 frame">
                    <div class="number-block">
                        <div class="number">
                            02
                        </div>
                        <img src="{{asset("img/secure.png")}}" alt="">
                    </div>

                    <div class="tech_label">
                        Secure
                    </div>
                    <div class="tech_text">
                        All your information is stored on <br> secure cloud servers
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 frame">
                    <div class="number-block">
                        <div class="number">
                            03
                        </div>
                        <img src="{{asset("img/pdf.png")}}" alt="">
                    </div>

                    <div class="tech_label">
                        PDF Download
                    </div>
                    <div class="tech_text">
                        Download any of your reports in <br> PDF format
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 frame">
                    <div class="number-block">
                        <div class="number">
                            04
                        </div>
                        <img src="{{asset("img/csv.png")}}" alt="">
                    </div>

                    <div class="tech_label">
                        CSV Download
                    </div>
                    <div class="tech_text">
                        All your information is stored on <br> secure cloud servers
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="focused">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="focused_label">
                        {{$fifthSec->header}}
                    </div>
                    <div class="focused_text">
                        {{$fifthSec->text}}
                    </div>
                    <div class="icons">
                        <img src="{{asset("img/g_play.png")}}" alt="">
                        <img src="{{asset("img/apple_apps.png")}}" alt="">
                        <img src="{{asset("img/windows_icon.png")}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">               
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"> <img src="{{asset("img/slider.png")}}" alt=""></div>
                            <div class="swiper-slide"> <img src="{{asset("img/slider.png")}}" alt=""></div>

                        </div>
                    </div>
                </div>
    </section>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section class="contact_sect">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_container">
                        <div class="contact">
                            <h4>Contact</h4>
                            <div class="contact_info">
                                Questions or concerns? Just fill out the form below and our support <br>
                                team will get back to you within 24 hours
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="data">
                        <div class="row">
                            <div class="col-lg-6">
                                <input class="fn_input" type="text" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <input class="ln_input" type="text" placeholder="Last Name">
                            </div>
                            <div class="col-lg-12">
                                <input class="phone_input" type="text" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-12">
                                <select class="sel_serv" name="" id="">
                                    <option value="">Select Service</option>
                                </select>
                            </div>
                            <div class="col-lg-4 btn_submit">
                                <button class="submit">
                                    SUBMIT NOW
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer" id="footer">
        <div class="container">
            <div class="row footer_info">
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="address">
                        <h5>Address</h5>
                        <div class="address_text">
                            Pipang Ltd, Griva Digeni,<br>
                            81-83 Jacovides Tower, 1st Floor <br>
                            1090 Picosia USA
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="services">
                        <h5>Services</h5>
                        <ul class="footer_menu">
                            <li>
                                <a href="">
                                    Overview
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Features
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Technology
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Terms & Conditions
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Privacy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="get_in_touch">
                        <h5>Get in Touch</h5>
                        <div class="email">
                            info@cloudbudget.com
                        </div>
                        <a class="tel" href="tel:+18447217120"> +1 844-721-7120 </a>
                        <div class="medias">
                            <img class="cur_p" src="{{asset("img/fb.png")}}" alt="">
                            <img class="cur_p" src="{{asset("img/in.png")}}" alt="">
                            <img class="cur_p" src="{{asset("img/twitter.png")}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="we_support">
                        <h5>We Support</h5>
                        <img class="payments" src="{{asset("img/payments.png")}}" alt="">
                    </div>
                </div>
                <div class="col-12 copyright">
                    Copyright 2018 CloudBudget
                </div>
            </div>

        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<script>
    var swiper = new Swiper('.swiper-container');
</script>
<script>
    var hamburger = document.querySelector(".hamburger");

    hamburger.addEventListener("click", function() {

        hamburger.classList.toggle("is-active");
        $(".popup").toggleClass("active");
        $("body").toggleClass("active");
    });
</script>

</html>