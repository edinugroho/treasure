<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>TREASURE 5.0</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/Logo Treasure.jpg" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->

    <style>
        body {
            background: #fff;
            color: #2f3138;
            font-family: "Open Sans", sans-serif;
        }
        
        a {
            color: #f82249;
            transition: 0.5s;
        }
        
        a:hover,
        a:active,
        a:focus {
            color: #f8234a;
            outline: none;
            text-decoration: none;
        }
        
        p {
            padding: 0;
            margin: 0 0 30px 0;
        }
        
        h1,
        h2,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif;
            font-weight: 400;
            margin: 0 0 20px 0;
            padding: 0;
            color: #0e1b4d;
        }
        
        .main-page {
            margin-top: 70px;
        }
        
        .wow {
            visibility: hidden;
        }
        /* Prelaoder */
        
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            z-index: 999;
            width: 100%;
            height: 100%;
            overflow: visible;
            background: #fff url("../img/preloader.svg") no-repeat center center;
        }
        /* Back to top button */
        
        .back-to-top {
            position: fixed;
            display: none;
            background: #f82249;
            color: #fff;
            width: 40px;
            height: 40px;
            text-align: center;
            border-radius: 50px;
            right: 15px;
            bottom: 15px;
            transition: background 0.5s ease-in-out;
        }
        
        .back-to-top i {
            font-size: 24px;
            padding-top: 6px;
        }
        
        .back-to-top:focus {
            background: #e0072f;
            color: #fff;
            outline: none;
        }
        
        .back-to-top:hover {
            background: #e0072f;
            color: #fff;
        }
        /* Sections Header
--------------------------------*/
        
        .section-header {
            margin-bottom: 60px;
            position: relative;
            padding-bottom: 20px;
        }
        
        .section-header::before {
            content: '';
            position: absolute;
            display: block;
            width: 60px;
            height: 5px;
            background: #f82249;
            bottom: 0;
            left: calc(50% - 25px);
        }
        
        .section-header h2 {
            font-size: 36px;
            text-transform: uppercase;
            text-align: center;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .section-header p {
            text-align: center;
            padding: 0;
            margin: 0;
            font-size: 18px;
            font-weight: 500;
            color: #9195a2;
        }
        
        .section-with-bg {
            background-color: #f6f7fd;
        }
        /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
        
        #header {
            height: 90px;
            padding: 25px 0;
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            transition: all 0.5s;
            z-index: 997;
            background: #000;
        }
        
        #header .scrollto {
            display: flex;
            color: #fff;
            font-weight: 100;
        }
        
        #header .scrollto a h3 {
            color: #fff;
            font-weight: 500;
        }
        
        #header.header-scrolled,
        #header.header-fixed {
            background: #000;
            height: 70px;
            padding: 15px 0;
            transition: all 0.5s;
        }
        
        #header #logo h1 {
            font-size: 36px;
            margin: 0;
            padding: 6px 0;
            line-height: 1;
            font-family: "Raleway", sans-serif;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
        }
        
        #header #logo h1 span {
            color: #5c0414;
        }
        
        #header #logo h1 a,
        #header #logo h1 a:hover {
            color: #fff;
        }
        
        #header #logo img {
            padding: 0;
            margin-top: -10px;
            max-height: 60px;
        }
        /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
        /* Nav Menu Essentials */
        
        .nav-menu,
        .nav-menu * {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        
        .nav-menu ul {
            position: absolute;
            display: none;
            top: 100%;
            left: 0;
            z-index: 99;
        }
        
        .nav-menu li {
            position: relative;
            white-space: nowrap;
        }
        
        .nav-menu>li {
            float: left;
        }
        
        .nav-menu li:hover>ul,
        .nav-menu li.sfHover>ul {
            display: block;
        }
        
        .nav-menu ul ul {
            top: 0;
            left: 100%;
        }
        
        .nav-menu ul li {
            min-width: 180px;
        }
        /* Nav Menu Arrows */
        
        .sf-arrows .sf-with-ul {
            padding-right: 30px;
        }
        
        .sf-arrows .sf-with-ul:after {
            content: "\f107";
            position: absolute;
            right: 15px;
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
        }
        
        .sf-arrows ul .sf-with-ul:after {
            content: "\f105";
        }
        /* Nav Meu Container */
        
        #nav-menu-container {
            float: right;
            margin: 0;
        }
        /* Nav Meu Styling */
        
        .nav-menu a {
            padding: 8px;
            text-decoration: none;
            display: inline-block;
            color: rgba(202, 206, 221, 0.8);
            font-family: "Raleway", sans-serif;
            font-weight: 600;
            font-size: 14px;
            outline: none;
        }
        
        .nav-menu .menu-active a,
        .nav-menu a:hover {
            color: #fff;
        }
        
        .nav-menu>li {
            margin-left: 8px;
        }
        
        .nav-menu>li>a:before {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #f82249;
            visibility: hidden;
            transition: all 0.3s ease-in-out 0s;
        }
        
        .nav-menu a:hover:before,
        .nav-menu li:hover>a:before,
        .nav-menu .menu-active>a:before {
            visibility: visible;
            width: 100%;
        }
        
        .nav-menu li.buy-tickets a {
            color: #fff;
            background: #f82249;
            padding: 7px 22px;
            border-radius: 50px;
            border: 2px solid #f82249;
            transition: all ease-in-out 0.3s;
            font-weight: 500;
            margin-left: 8px;
            margin-top: 2px;
            line-height: 1;
            font-size: 13px;
        }
        
        .nav-menu li.buy-tickets a:hover {
            background: none;
        }
        
        .nav-menu li.buy-tickets:hover a:before,
        .nav-menu li.buy-tickets.menu-active a:before {
            visibility: hidden;
        }
        
        .nav-menu ul {
            margin: 4px 0 0 0;
            padding: 10px;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
            background: #fff;
            border-radius: 3px;
        }
        
        .nav-menu ul li {
            transition: 0.3s;
        }
        
        .nav-menu ul li a {
            padding: 10px;
            color: #060c22;
            transition: 0.3s;
            display: block;
            font-size: 13px;
            text-transform: none;
            border-radius: 3px;
        }
        
        .nav-menu ul li:hover>a {
            background: #f82249;
            color: #fff;
        }
        
        .nav-menu ul ul {
            margin: 0;
        }
        /* Mobile Nav Toggle */
        
        #mobile-nav-toggle {
            position: fixed;
            right: 0;
            top: 0;
            z-index: 999;
            margin: 15px 15px 0 0;
            border: 0;
            background: none;
            font-size: 24px;
            display: none;
            transition: all 0.4s;
            outline: none;
            cursor: pointer;
        }
        
        #mobile-nav-toggle i {
            color: #fff;
        }
        /* Mobile Nav Styling */
        
        #mobile-nav {
            position: fixed;
            top: 0;
            padding-top: 18px;
            bottom: 0;
            z-index: 998;
            background: rgba(6, 12, 34, 0.9);
            left: -260px;
            width: 260px;
            overflow-y: auto;
            transition: 0.4s;
        }
        
        #mobile-nav ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }
        
        #mobile-nav ul li {
            position: relative;
        }
        
        #mobile-nav ul li a {
            color: #fff;
            font-size: 17px;
            overflow: hidden;
            padding: 10px 22px 10px 15px;
            position: relative;
            text-decoration: none;
            width: 100%;
            display: block;
            outline: none;
        }
        
        #mobile-nav ul li a:hover {
            color: #f82249;
        }
        
        #mobile-nav ul li li {
            padding-left: 30px;
        }
        
        #mobile-nav ul .menu-has-children i {
            position: absolute;
            right: 0;
            z-index: 99;
            padding: 15px;
            cursor: pointer;
            color: #fff;
        }
        
        #mobile-nav ul .menu-has-children i.fa-chevron-up {
            color: #f82249;
        }
        
        #mobile-nav ul .menu-item-active {
            color: #f82249;
        }
        
        #mobile-body-overly {
            width: 100%;
            height: 100%;
            z-index: 997;
            top: 0;
            left: 0;
            position: fixed;
            background: rgba(6, 12, 34, 0.8);
            display: none;
        }
        /* Mobile Nav body classes */
        
        body.mobile-nav-active {
            overflow: hidden;
        }
        
        body.mobile-nav-active #mobile-nav {
            left: 0;
        }
        
        body.mobile-nav-active #mobile-nav-toggle {
            color: #fff;
        }
        /*--------------------------------------------------------------
# Intro Section
--------------------------------------------------------------*/
        
        #intro {
            width: 100%;
            height: 100vh;
            background: url(img/6.jpg) top center;
            background-size: cover;
            overflow: hidden;
            position: relative;
        }
        
        #intro:before {
            content: "";
            background: rgba(6, 12, 34, 0.8);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }
        
        #intro .intro-container {
            position: absolute;
            bottom: 0;
            left: 0;
            top: 90px;
            right: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            text-align: center;
            padding: 0 15px;
        }
        
        #intro h1 {
            color: #fff;
            font-family: "Raleway", sans-serif;
            font-size: 56px;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        #intro h1 span {
            color: #f82249;
        }
        
        #intro p {
            color: #ebebeb;
            font-weight: 700;
            font-size: 20px;
        }
        
        #intro .play-btn {
            width: 94px;
            height: 94px;
            background: radial-gradient(#f82249 50%, rgba(101, 111, 150, 0.15) 52%);
            border-radius: 50%;
            display: block;
            position: relative;
            overflow: hidden;
        }
        
        #intro .play-btn::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-40%) translateY(-50%);
            transform: translateX(-40%) translateY(-50%);
            width: 0;
            height: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-left: 15px solid #fff;
            z-index: 100;
            transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }
        
        #intro .play-btn:before {
            content: '';
            position: absolute;
            width: 120px;
            height: 120px;
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-animation: pulsate-btn 2s;
            animation: pulsate-btn 2s;
            -webkit-animation-direction: forwards;
            animation-direction: forwards;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: steps;
            animation-timing-function: steps;
            opacity: 1;
            border-radius: 50%;
            border: 2px solid rgba(163, 163, 163, 0.4);
            top: -15%;
            left: -15%;
            background: rgba(198, 16, 0, 0);
        }
        
        #intro .play-btn:hover::after {
            border-left: 15px solid #f82249;
            -webkit-transform: scale(20);
            transform: scale(20);
        }
        
        #intro .play-btn:hover::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-40%) translateY(-50%);
            transform: translateX(-40%) translateY(-50%);
            width: 0;
            height: 0;
            border: none;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-left: 15px solid #fff;
            z-index: 200;
            -webkit-animation: none;
            animation: none;
            border-radius: 0;
        }
        
        #intro .about-btn {
            font-family: "Raleway", sans-serif;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 32px;
            border-radius: 50px;
            transition: 0.5s;
            line-height: 1;
            margin: 10px;
            color: #fff;
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
            border: 2px solid #f82249;
        }
        
        #intro .about-btn:hover {
            background: #f82249;
            color: #fff;
        }
        
        @-webkit-keyframes pulsate-btn {
            0% {
                -webkit-transform: scale(0.6, 0.6);
                transform: scale(0.6, 0.6);
                opacity: 1;
            }
            100% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
                opacity: 0;
            }
        }
        
        @keyframes pulsate-btn {
            0% {
                -webkit-transform: scale(0.6, 0.6);
                transform: scale(0.6, 0.6);
                opacity: 1;
            }
            100% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
                opacity: 0;
            }
        }
        /*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
        
        #about {
            background: url(img/about-bg.jpg);
            background-size: cover;
            overflow: hidden;
            position: relative;
            color: #fff;
            padding: 60px 0 40px 0;
        }
        
        #about:before {
            content: "";
            background: rgba(13, 20, 41, 0.8);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }
        
        #about h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #fff;
        }
        
        #about h3 {
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: #fff;
        }
        
        #about p {
            font-size: 14px;
            margin-bottom: 20px;
            color: #fff;
        }
        /*--------------------------------------------------------------
# Speakers Section
--------------------------------------------------------------*/
        
        #speakers {
            padding: 60px 0 30px 0;
        }
        
        #speakers .speaker {
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        #speakers .speaker .details {
            background: rgba(6, 12, 34, 0.76);
            position: absolute;
            left: 0;
            bottom: -30px;
            right: 0;
            text-align: center;
            padding-top: 10px;
            transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
        }
        
        #speakers .speaker .details h3 {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        #speakers .speaker .details p {
            color: #fff;
            font-size: 15px;
            margin-bottom: 10px;
            font-style: italic;
        }
        
        #speakers .speaker .details .social {
            height: 30px;
        }
        
        #speakers .speaker .details a {
            color: #fff;
        }
        
        #speakers .speaker .details a:hover {
            color: #f82249;
        }
        
        #speakers .speaker:hover .details {
            bottom: 0;
        }
        
        #speakers-details {
            padding: 60px 0;
        }
        
        #speakers-details .details h2 {
            color: #112363;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        #speakers-details .details .social {
            margin-bottom: 15px;
        }
        
        #speakers-details .details .social a {
            background: #e9edfb;
            color: #112363;
            line-height: 1;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            padding-top: 9px;
        }
        
        #speakers-details .details .social a:hover {
            background: #f82249;
            color: #fff;
        }
        
        #speakers-details .details .social a i {
            font-size: 18px;
        }
        
        #speakers-details .details p {
            color: #112363;
            font-size: 15px;
            margin-bottom: 10px;
        }
        /*--------------------------------------------------------------
# Schedule Section
--------------------------------------------------------------*/
        
        #schedule {
            padding: 60px 0 60px 0;
        }
        
        #schedule .nav-tabs {
            text-align: center;
            margin: auto;
            display: block;
            border-bottom: 0;
            margin-bottom: 30px;
        }
        
        #schedule .nav-tabs li {
            display: inline-block;
            margin-bottom: 0;
        }
        
        #schedule .nav-tabs a {
            border: none;
            border-radius: 50px;
            font-weight: 600;
            background-color: #0e1b4d;
            color: #fff;
            padding: 10px 100px;
        }
        
        #schedule .nav-tabs a.active {
            background-color: #f82249;
            color: #fff;
        }
        
        #schedule .sub-heading {
            text-align: center;
            font-size: 18px;
            font-style: italic;
            margin: 0 auto 30px auto;
        }
        
        #schedule .tab-pane {
            transition: ease-in-out .2s;
        }
        
        #schedule .schedule-item {
            border-bottom: 1px solid #cad4f6;
            padding-top: 15px;
            padding-bottom: 15px;
            transition: background-color ease-in-out 0.3s;
        }
        
        #schedule .schedule-item:hover {
            background-color: #fff;
        }
        
        #schedule .schedule-item time {
            padding-bottom: 5px;
            display: inline-block;
        }
        
        #schedule .schedule-item .speaker {
            width: 60px;
            height: 60px;
            overflow: hidden;
            border-radius: 50%;
            float: left;
            margin: 0 10px 10px 0;
        }
        
        #schedule .schedule-item .speaker img {
            height: 100%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            margin-left: 50%;
            transition: all ease-in-out 0.3s;
        }
        
        #schedule .schedule-item h4 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        #schedule .schedule-item h4 span {
            font-style: italic;
            color: #19328e;
            font-weight: normal;
            font-size: 16px;
        }
        
        #schedule .schedule-item p {
            font-style: italic;
            color: #152b79;
            margin-bottom: 0;
        }
        /*--------------------------------------------------------------
# Venue Section
--------------------------------------------------------------*/
        
        #venue {
            padding: 60px 0;
        }
        
        #venue .container-fluid {
            margin-bottom: 3px;
        }
        
        #venue .venue-map iframe {
            width: 100%;
            height: 100%;
            min-height: 300px;
        }
        
        #venue .venue-info {
            background: url("../img/venue-info-bg.jpg") top center no-repeat;
            background-size: cover;
            position: relative;
            padding-top: 60px;
            padding-bottom: 60px;
        }
        
        #venue .venue-info:before {
            content: "";
            background: rgba(13, 20, 41, 0.8);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }
        
        #venue .venue-info h3 {
            font-size: 36px;
            font-weight: 700;
            color: #fff;
        }
        
        #venue .venue-info p {
            color: #fff;
            margin-bottom: 0;
        }
        
        #venue .venue-gallery-container {
            padding-right: 12px;
        }
        
        #venue .venue-gallery {
            overflow: hidden;
            border-right: 3px solid #fff;
            border-bottom: 3px solid #fff;
        }
        
        #venue .venue-gallery img {
            transition: all ease-in-out 0.4s;
        }
        
        #venue .venue-gallery:hover img {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }
        /*--------------------------------------------------------------
# Hotels Section
--------------------------------------------------------------*/
        
        #hotels {
            padding: 60px 0;
        }
        
        #hotels .hotel {
            border: 1px solid #e0e5fa;
            background: #fff;
            margin-bottom: 30px;
        }
        
        #hotels .hotel:hover .hotel-img img {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }
        
        #hotels .hotel-img {
            overflow: hidden;
            margin-bottom: 15px;
        }
        
        #hotels .hotel-img img {
            transition: 0.3s ease-in-out;
        }
        
        #hotels h3 {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 5px;
            padding: 0 20px;
        }
        
        #hotels a {
            color: #152b79;
        }
        
        #hotels a:hover {
            color: #f82249;
        }
        
        #hotels .stars {
            padding: 0 20px;
            margin-bottom: 5px;
        }
        
        #hotels .stars i {
            color: #ffc31d;
        }
        
        #hotels p {
            padding: 0 20px;
            margin-bottom: 20px;
            color: #060c22;
            font-style: italic;
            font-size: 15px;
        }
        /*--------------------------------------------------------------
# Gallery Section
--------------------------------------------------------------*/
        
        #gallery {
            padding: 60px;
            overflow: hidden;
        }
        
        #gallery .owl-nav,
        #gallery .owl-dots {
            margin-top: 25px;
            text-align: center;
        }
        
        #gallery .owl-item {
            border-left: 2px solid #fff;
            border-right: 2px solid #fff;
        }
        
        #gallery .owl-dot {
            display: inline-block;
            margin: 0 5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #ddd;
        }
        
        #gallery .owl-dot.active {
            background-color: #f82249;
        }
        
        #gallery .gallery-carousel .owl-stage-outer {
            overflow: visible;
        }
        
        #gallery .gallery-carousel .center {
            border: 6px solid #f82249;
            margin: -10px;
            box-sizing: content-box;
            padding: 4px;
            background: #fff;
            z-index: 1;
        }
        /*--------------------------------------------------------------
# supporters Section
--------------------------------------------------------------*/
        
        #supporters {
            padding: 60px 0;
        }
        
        #supporters .supporters-wrap {
            border-top: 1px solid #e0e5fa;
            border-left: 1px solid #e0e5fa;
            margin-bottom: 30px;
        }
        
        #supporters .supporter-logo {
            padding: 30px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-right: 1px solid #e0e5fa;
            border-bottom: 1px solid #e0e5fa;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.5);
            height: 160px;
        }
        
        #supporters .supporter-logo:hover img {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        
        #supporters img {
            transition: all 0.4s ease-in-out;
        }
        /*--------------------------------------------------------------
# F.A.Q Section
--------------------------------------------------------------*/
        
        #faq {
            padding: 60px 0;
        }
        
        #faq #faq-list {
            padding: 0;
            list-style: none;
        }
        
        #faq #faq-list li {
            border-bottom: 1px solid #ddd;
        }
        
        #faq #faq-list a {
            padding: 18px 0;
            display: block;
            position: relative;
            font-family: "Raleway", sans-serif;
            font-size: 16px;
            line-height: 24px;
            font-weight: 600;
            padding-right: 20px;
        }
        
        #faq #faq-list i {
            font-size: 24px;
            position: absolute;
            right: 0;
            top: 16px;
        }
        
        #faq #faq-list p {
            margin-bottom: 20px;
        }
        
        #faq #faq-list a.collapse {
            color: #f82249;
        }
        
        #faq #faq-list a.collapsed {
            color: #000;
        }
        
        #faq #faq-list a.collapsed i::before {
            content: "\f055" !important;
        }
        /*--------------------------------------------------------------
# Subscribe Section
--------------------------------------------------------------*/
        
        #subscribe {
            padding: 60px;
            background: url(../img/subscribe-bg.jpg) center center no-repeat;
            background-size: cover;
            overflow: hidden;
            position: relative;
        }
        
        #subscribe:before {
            content: "";
            background: rgba(6, 12, 34, 0.6);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }
        
        #subscribe .section-header h2,
        #subscribe p {
            color: #fff;
        }
        
        #subscribe input {
            background: #fff;
            color: #060c22;
            border: 0;
            outline: none;
            margin: 0;
            padding: 9px 20px;
            border-radius: 50px;
            font-size: 14px;
        }
        
        #subscribe button {
            border: 0;
            padding: 9px 25px;
            cursor: pointer;
            background: #f82249;
            color: #fff;
            transition: all 0.3s ease;
            outline: none;
            font-size: 14px;
            border-radius: 50px;
        }
        
        #subscribe button:hover {
            background: #e0072f;
        }
        /*--------------------------------------------------------------
# Buy Tickets Section
--------------------------------------------------------------*/
        
        #buy-tickets {
            padding: 60px 0;
        }
        
        #buy-tickets .card {
            border: none;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 10px 25px 0 rgba(6, 12, 34, 0.1);
        }
        
        #buy-tickets .card:hover {
            box-shadow: 0 10px 35px 0 rgba(6, 12, 34, 0.2);
        }
        
        #buy-tickets .card hr {
            margin: 25px 0;
        }
        
        #buy-tickets .card .card-title {
            margin: 10px 0;
            font-size: 14px;
            letter-spacing: 1px;
            font-weight: bold;
        }
        
        #buy-tickets .card .card-price {
            font-size: 48px;
            margin: 0;
        }
        
        #buy-tickets .card ul li {
            margin-bottom: 20px;
        }
        
        #buy-tickets .card .text-muted {
            opacity: 0.7;
        }
        
        #buy-tickets .card .btn {
            font-size: 15px;
            border-radius: 50px;
            padding: 10px 40px;
            transition: all 0.2s;
            background-color: #f82249;
            border: 0;
            color: #fff;
        }
        
        #buy-tickets .card .btn:hover {
            background-color: #e0072f;
        }
        
        #buy-tickets #buy-ticket-modal input,
        #buy-tickets #buy-ticket-modal select {
            border-radius: 0;
        }
        
        #buy-tickets #buy-ticket-modal .btn {
            font-size: 15px;
            border-radius: 50px;
            padding: 10px 40px;
            transition: all 0.2s;
            background-color: #f82249;
            border: 0;
            color: #fff;
        }
        
        #buy-tickets #buy-ticket-modal .btn:hover {
            background-color: #e0072f;
        }
        /*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
        
        #contact {
            padding: 60px 0;
        }
        
        #contact .contact-info {
            margin-bottom: 20px;
            text-align: center;
        }
        
        #contact .contact-info i {
            font-size: 48px;
            display: inline-block;
            margin-bottom: 10px;
            color: #f82249;
        }
        
        #contact .contact-info address,
        #contact .contact-info p {
            margin-bottom: 0;
            color: #112363;
        }
        
        #contact .contact-info h3 {
            font-size: 18px;
            margin-bottom: 15px;
            font-weight: bold;
            text-transform: uppercase;
            color: #112363;
        }
        
        #contact .contact-info a {
            color: #4869df;
        }
        
        #contact .contact-info a:hover {
            color: #f82249;
        }
        
        #contact .contact-address,
        #contact .contact-phone,
        #contact .contact-email {
            margin-bottom: 20px;
        }
        
        #contact .form #sendmessage {
            color: #f82249;
            border: 1px solid #f82249;
            display: none;
            text-align: center;
            padding: 15px;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        #contact .form #errormessage {
            color: red;
            display: none;
            border: 1px solid red;
            text-align: center;
            padding: 15px;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        #contact .form #sendmessage.show,
        #contact .form #errormessage.show,
        #contact .form .show {
            display: block;
        }
        
        #contact .form .validation {
            color: red;
            display: none;
            margin: 0 0 20px;
            font-weight: 400;
            font-size: 13px;
        }
        
        #contact .form input,
        #contact .form textarea {
            padding: 10px 14px;
            border-radius: 0;
            box-shadow: none;
            font-size: 15px;
        }
        
        #contact .form button[type="submit"] {
            background: #f82249;
            border: 0;
            padding: 10px 40px;
            color: #fff;
            transition: 0.4s;
            border-radius: 50px;
            cursor: pointer;
        }
        
        #contact .form button[type="submit"]:hover {
            background: #e0072f;
        }
        /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
        
        #footer {
            background: #101522;
            padding: 0 0 25px 0;
            color: #eee;
            font-size: 14px;
        }
        
        #footer .footer-top {
            background: #040919;
            padding: 60px 0 30px 0;
        }
        
        #footer .footer-top .footer-info {
            margin-bottom: 30px;
        }
        
        #footer .footer-top .footer-info h3 {
            font-size: 26px;
            margin: 0 0 20px 0;
            padding: 2px 0 2px 0;
            line-height: 1;
            font-family: "Raleway", sans-serif;
            font-weight: 700;
            color: #fff;
        }
        
        #footer .scrollto {
            display: flex;
        }
        
        #footer .footer-top .footer-info img {
            height: 40px;
            margin-bottom: 10px;
        }
        
        #footer .footer-top .footer-info p {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
            font-family: "Raleway", sans-serif;
            color: #fff;
        }
        
        #footer .footer-top .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #222636;
            color: #eee;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
        }
        
        #footer .footer-top .social-links a:hover {
            background: #f82249;
            color: #fff;
        }
        
        #footer .footer-top h4 {
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 12px;
            border-bottom: 2px solid #f82249;
        }
        
        #footer .footer-top .footer-links {
            margin-bottom: 30px;
        }
        
        #footer .footer-top .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        #footer .footer-top .footer-links ul i {
            padding-right: 5px;
            color: #f82249;
            font-size: 18px;
        }
        
        #footer .footer-top .footer-links ul li {
            border-bottom: 1px solid #262c44;
            padding: 10px 0;
        }
        
        #footer .footer-top .footer-links ul li:first-child {
            padding-top: 0;
        }
        
        #footer .footer-top .footer-links ul a {
            color: #eee;
        }
        
        #footer .footer-top .footer-links ul a:hover {
            color: #f82249;
        }
        
        #footer .footer-top .footer-contact {
            margin-bottom: 30px;
        }
        
        #footer .footer-top .footer-contact p {
            line-height: 26px;
        }
        
        #footer .footer-top .footer-newsletter {
            margin-bottom: 30px;
        }
        
        #footer .footer-top .footer-newsletter input[type="email"] {
            border: 0;
            padding: 6px 8px;
            width: 65%;
        }
        
        #footer .footer-top .footer-newsletter input[type="submit"] {
            background: #f82249;
            border: 0;
            width: 35%;
            padding: 6px 0;
            text-align: center;
            color: #fff;
            transition: 0.3s;
            cursor: pointer;
        }
        
        #footer .footer-top .footer-newsletter input[type="submit"]:hover {
            background: #e0072f;
        }
        
        #footer .copyright {
            text-align: center;
            padding-top: 30px;
        }
        
        #footer .credits {
            text-align: center;
            font-size: 13px;
            color: #ddd;
        }
        /*--------------------------------------------------------------
# Responsive Media Queries
--------------------------------------------------------------*/
        
        @media (min-width: 767px) {
            #subscribe input {
                min-width: 400px;
            }
        }
        
        @media (min-width: 768px) {
            #contact .contact-address,
            #contact .contact-phone,
            #contact .contact-email {
                padding: 20px 0;
            }
            #contact .contact-phone {
                border-left: 1px solid #ddd;
                border-right: 1px solid #ddd;
            }
        }
        
        @media (min-width: 991px) {
            #schedule .sub-heading {
                width: 75%;
            }
        }
        
        @media (min-width: 1024px) {
            #intro {
                background-attachment: fixed;
            }
            #about {
                background-attachment: fixed;
            }
            #subscribe {
                background-attachment: fixed;
            }
        }
        
        @media (max-width: 1199px) {
            #header .container {
                max-width: 100%;
            }
            .nav-menu a {
                padding: 8px 4px;
            }
        }
        
        @media (max-width: 991px) {
            #header {
                background: rgba(6, 12, 34, 0.98);
                height: 70px;
                padding: 15px 0;
                transition: all 0.5s;
            }
            #nav-menu-container {
                display: none;
            }
            #mobile-nav-toggle {
                display: inline;
            }
            #intro .intro-container {
                top: 70px;
            }
            #intro h1 {
                font-size: 34px;
            }
            #intro p {
                font-size: 16px;
            }
            #schedule .nav-tabs a {
                padding: 8px 60px;
            }
        }
        
        @media (max-width: 768px) {
            .back-to-top {
                bottom: 15px;
            }
            #faq #faq-list a {
                font-size: 18px;
            }
            #faq #faq-list i {
                top: 13px;
            }
        }
        
        @media (max-width: 767px) {
            #schedule .nav-tabs a {
                padding: 8px 50px;
            }
        }
        
        @media (max-width: 574px) {
            #venue .venue-info h3 {
                font-size: 24px;
            }
        }
        
        @media (max-width: 480px) {
            #schedule .nav-tabs a {
                padding: 8px 30px;
            }
        }
        
        @media (max-width: 460px) {
            #subscribe button {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                <a href="#intro" class="scrollto">
                    <img src="img/Logo Treasure.jpg" alt="" title="">
                    <h3>TREASURE 5.0</h3>
                </a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#speakers">Guest Stars</a></li>
                    <li><a href="#schedule">Schedule</a></li>

                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#supporters">Sponsors</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">TREASURE 5.0<br></h1>
            <p class="mb-4 pb-0">04 Januari 2020, Gedung Bagas Raya, Cirebon</p>
            <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            <a href="#about" class="about-btn scrollto">About TREASURE 5.0</a>
        </div>
    </section>

    <main id="main">

        <!--==========================
      About Section
    ============================-->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Tentang TREASURE</h2>
                        <p>Adalah sebuah event tryout dan talkshow untuk SMA/SMK/MA yang diadakan di Cirebon oleh komunitas mahasiswa Cirebon di Telkom University. Selain itu juga ada Expo dari Fakultas Telkom University, food tenants, dan penampilan spesial
                            dari bintang tamu.
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <h3>Tempat</h3>
                        <p>Gedung BAGAS RAYA CIREBON
                            <br>Jl. Kapuk Raya, Kedawung,
                            <br>Cirebon, Jawa Barat 45153
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <h3>Waktu</h3>
                        <p>Sabtu, 4 Januari 2020</p>
                    </div>
                </div>
            </div>
        </section>

        <!--==========================
      Speakers Section
    ============================-->
        <section id="speakers" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Guest Stars</h2>
                    <p>Here are some of our speakers</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="speaker">
                            <img src="img/speakers/a.jpg" alt="Speaker 1" class="img-fluid">
                            <div class="details">
                                <h3><a href="speaker-details.html">Ardhito Pramono</a></h3>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="speaker">
                            <img src="img/speakers/b.jpg" alt="Speaker 2" class="img-fluid">
                            <div class="details">
                                <h3><a href="speaker-details.html">Hanggini</a></h3>

                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <!--==========================
      Schedule Section
    ============================-->
        <section id="schedule" class="section-with-bg">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h2>Susunan Acara</h2>
                </div>
                <div class="tab-content row justify-content-center">

                    <!-- Schdule Day 1 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>07:30 AM</time></div>
                            <div class="col-md-10">
                                <h4>Registrasi</h4>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>08:00 AM</time></div>
                            <div class="col-md-10">
                                <h4>Pembukaan Acara</h4>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>08:10 AM</time></div>
                            <div class="col-md-10">
                                <h4>Sambutan</h4>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>08:30 AM - 11.30 AM</time></div>
                            <div class="col-md-10">
                                <h4>Pengerjaan TryOut</h4>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:30 AM</time></div>
                            <div class="col-md-10">
                                <h4>Istirahat</h4>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>00:15 PM</time></div>
                            <div class="col-md-10">
                                <h4>Talkshow</h4>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>01:00 PM</time></div>
                            <div class="col-md-10">
                                <h4>Penampilan Spesial <span>Hanggini</span></h4>
                            </div>
                        </div>
                        <div class="row schedule-item">
                            <div class="col-md-2"><time>01:30 PM</time></div>
                            <div class="col-md-10">
                                <h4>Penampilan Spesial <span>Ardhito Pramono</span></h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Schdule Day 1 -->
                </div>

            </div>

        </section>

        <!--==========================
      Venue Section
    ============================-->




        <!--==========================
      Gallery Section
    ============================-->
        <section id="gallery" class="wow fadeInUp">

            <div class="container">
                <div class="section-header">
                    <h2>Gallery</h2>
                    <p>Check our gallery from the recent events</p>
                </div>
            </div>

            <div class="owl-carousel gallery-carousel">
                <a href="img/gallery/11.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/11.JPG" alt=""></a>
                <a href="img/gallery/12.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/12.JPG" alt=""></a>
                <a href="img/gallery/13.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/13.JPG" alt=""></a>
                <a href="img/gallery/14.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/14.JPG" alt=""></a>
                <a href="img/gallery/15.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/15.JPG" alt=""></a>
                <a href="img/gallery/16.PNG" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/16.PNG" alt=""></a>
                <a href="img/gallery/17.PNG" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/17.PNG" alt=""></a>
                <a href="img/gallery/18.PNG" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/18.PNG" alt=""></a>
            </div>

        </section>

        <!--==========================
      Sponsors Section
    ============================-->
        <section id="supporters" class="section-with-bg wow fadeInUp">

            <div class="container">
                <div class="section-header">
                    <h2>Sponsors</h2>
                </div>

                <div class="row no-gutters supporters-wrap clearfix">

                    <div class="col-lg-4 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/1.svg" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/support2.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/bjb.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!--==========================
      F.A.Q Section
    ============================-->


        <!--==========================
      Subscribe Section
    ============================-->


        <!--==========================
      Buy Ticket Section
    ============================-->
        <section id="buy-tickets" class="section-with-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h2>Buy Tickets</h2>
                    <p>Dapatkan Tiket Treasure 5.0 sekarang</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Presale 1</h5>
                                <h6 class="card-price text-center">Rp 45.000</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Tryout</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Talkshow</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Penampilan Spesial</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Doorprize</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pro Tier -->
                    <div class="col-lg-4">

                    </div>
                </div>

            </div>

            <!-- Modal Order Form -->
            <div id="buy-ticket-modal" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Buy Tickets</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="beliTiket.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Nama" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="NomorHP" placeholder="Nomor HP">
                                </div>
                                <div class="form-group">
                                    <select id="ticket-type" name="ticketType" class="form-control">
                                      <option value="">-- Pilihan Tryout --</option>
                                      <option value="saintek">Saintek</option>
                                      <option value="soshum">Soshum</option>
                                    </select>
                                </div>
                
                                <div class="text-center">
                                    <button type="submit" name="submit" onclick="archiveFunction() class="btn">Buy Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

        </section>

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="section-bg wow fadeInUp">

            <div class="container">
                <div class="section-header">
                    <h2>Contact Us</h2>

                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 venue-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63395.39649345826!2d108.5209764!3d-6.7439424!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee21c5cefb331%3A0xdadfa84ac820fe05!2sBPU%20BAGAS%20RAYA%20CIREBON!5e0!3m2!1sen!2sid!4v1574620991004!5m2!1sen!2sid"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="row contact-info col-lg-6">

                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="ion-ios-location-outline"></i>
                                <h3>Address</h3>
                                <address>Jl. Fatahilah, Cirebon</address>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="ion-ios-telephone-outline"></i>
                                <h3>Phone Number</h3>
                                <p><a href="tel:+155895548855">+62 8589 55488 55</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="ion-ios-email-outline"></i>
                                <h3>Email</h3>
                                <p><a href="mailto:info@example.com">treasureaccess@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="row form">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>

                    </div>




                </div>
        </section>
        <!-- #contact -->

    </main>


    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <a href="#intro" class="scrollto">
                            <img src="img/Logo Treasure.jpg" alt="" title="">
                            <h3>TREASURE 5.0</h3>
                        </a>
                        <p>Adalah sebuah event tryout dan talkshow untuk SMA/SMK/MA yang diadakan di Cirebon oleh komunitas mahasiswa Cirebon di Telkom University. Selain itu juga ada Expo dari Fakultas Telkom University, food tenants, dan penampilan spesial
                            dari bintang tamu.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Jl. Fatahilah No. 71<br> Cirebon<br>
                            <strong>Phone:</strong> +62 8589 55488 55<br>
                            <strong>Email:</strong> treasureaccess@gmail.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>TREASURE ACCESS</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
                Designed by Pt. Pete Abadi
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
    <script>
        function archiveFunction() {
            event.preventDefault(); // prevent form submit
            var form = event.target.form; // storing the form
                    swal({
              title: "Are you sure?",
              text: "But you will still be able to retrieve this file.",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, archive it!",
              cancelButtonText: "No, cancel please!",
              closeOnConfirm: false,
              closeOnCancel: false
            },
            function(isConfirm){
              if (isConfirm) {
                form.submit();          // submitting the form when user press yes
              } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
              }
            });
            }
    </script>
</body>

</html>