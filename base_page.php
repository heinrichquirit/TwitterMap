<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title><?php echo $title?></title>
  </head>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="d-md-flex d-block flex-row mx-md-auto mx-0">
    	<ul class="navbar-nav">
    		<li class="nav-item active">
    			<a class="nav-link" href=<?php echo "$ref_a"?>>Home</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href=<?php echo "$ref_b"?>>Tweets</a> 
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href=<?php echo "$ref_c"?>>Maps</a>
    		</li>
    	</ul>
    </div>
  	<form class="form-inline" action="/action_page.php">
    	<input class="form-control mr-sm-2" type="text" placeholder="Search">
    	<button class="btn btn-success" type="submit">Search</button>
  	</form>
  </nav>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>