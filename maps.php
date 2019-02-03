<?php

    $title = "Twitter Map";
    $ref_a = "index.php";
    $ref_b = "tweets.php";
    $ref_c = "#";
    include "base_page.php";
?>
<head>
<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style>
        .container-fluid {
            height: 100%;
        }
        #map {
            height: 600px;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 px-1 bg-dark">
                <div class="py-2 sticky-top flex-grow-1">
                    <div class="nav flex-sm-column">
                        <div class="wrapper">
                            <nav id="sidebar">
                                <div class="sidebar-header">
                                    <h3>Trending Tweets</h3>
                                </div>
                                <li>
                                    <p id="tweet_one"></p>
                                </li>
                                <li>
                                    <p id="tweet_two"></p>
                                </li>
                            </nav>
                        </div>
<!--
                        <a href="" class="nav-link d-none d-sm-inline">Sidebar</a>
                        <a href="" class="nav-link">Link</a>
                        <a href="" class="nav-link">Link</a>
                        <a href="" class="nav-link">Link</a>
                        <a href="" class="nav-link">Link</a>
                        <a href="" class="nav-link">Link</a>
-->
                    </div>
                </div>
            </div>
        <div class="col" id="main">
            <h1>Twitter Map</h1>
            <div id="container"></div>
            <script type="text/javascript" src="init_map.js">
            </script>
            <script type="text/javascript" src="load_tweets.js"></script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZMG9JHwNwMslTshUMa1BgzXeVXN55Hyo&callback=initMap"></script>
            <div id="map"></div>
        </div>
        </div>
    </div>
</body>