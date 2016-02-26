@extends('layouts.master')

@section('top-script')

@stop

@section('content')
<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">Drew Tattoo</h1>
                    <p class="intro-text">Schedule an appointment today!<br>Get some ink in your life.</p>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Drew Delafuente</h2>
            <p>Walking into 34-year-old Drew De La Fuente’s private studio at 1231 Austin Highway, clients instantly recognize that this local artist isn’t here to fool around. De La Fuente is known for his color and Japanese-style tattoos and has a reputation as one of the most precise tattooers in the area.</p>
            <p>He has been invited to prestigious tattoo conventions throughout the country and frequently sits as a guest artist in studios in Los Angeles and Chicago. A poster features De La Fuente’s work at a convention, sponsored by big-brand Eternal tattoo ink.</p>
            <p>De La Fuente’s artwork is big, bold and speaks volumes about the artist’s talent, yet this entrepreneur remains humble, always respecting his mentorship process and the artists who  brought him up in the industry in which he has worked for 16 years.</p>
            <h1 class="banner">Featured in the    <img src="img/express-news.png" class="express-news"></h1>
        </div>
    </div>
</section>





<section id="download" class="content-section text-center">
    <div class="download-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Portfolio</h2>
                <p>Check out some of my work and let's get you in for an appointment.</p>
                <a href="{{ action('HomeController@showPortfolio') }}" class="btn btn-default btn-lg">Visit Portfolio Page</a>
            </div>
        </div>
    </div>
</section>



<!-- Contact Section -->
<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Contact Drew</h2>
            <p>Call or email to schedule an appointment for an amazing tattoo today!</p>
            <p>(210) 763-0444</p>
            <p><a href="mailto:andrewdelaf@icloud.com">andrewdelaf@icloud.com</a>
            </p>
            <ul class="list-inline banner-social-buttons">
                <li>
                    <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/drewtattoo13/" class="btn btn-default btn-lg"><i class="fa fa-instagram fa-fw"></i> <span class="network-name">Instagram</span></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/drew.delafuente1" class="btn btn-default btn-lg"><i class="fa fa-facebook-square fa-fw"></i> <span class="network-name">Facebook</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Map Section -->
<div id="map"></div>
@stop

@section('bottom-script')

@stop