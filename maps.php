<?php

    $title = "Twitter Map";
    $ref_a = "index.php";
    $ref_b = "tweets.php";
    $ref_c = "#";
    include "base_page.php";
?>
<head>
    <style>
        #map {
            height: 600px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Twitter Map</h1>
    <div id="container"></div>
    <script type="text/javascript" src="init_map.js">
    </script>
    <script type="text/javascript" src="load_tweets.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZMG9JHwNwMslTshUMa1BgzXeVXN55Hyo&callback=initMap"></script>
</body>