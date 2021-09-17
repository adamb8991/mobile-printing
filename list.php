<!DOCTYPE html>
<html lang="en"> <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
	<link href="hover.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>	
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">	  
  </head>
		
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container" style="padding-bottom: 0px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mr-auto">
		<li class="nav-item">
          <a class="nav-link hvr-underline-from-center text-light" href="index.html">Home
          <span class="sr-only">(current)</span>
          </a>
		  </li>
        <li class="nav-item">
          <a class="nav-link hvr-underline-from-center text-light" href="#">Digital Library
          <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light hvr-underline-from-center font-weight-bold" href="#"> Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light hvr-underline-from-center font-weight-bolder" href="#">Youth</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link text-light hvr-underline-from-center font-weight-bolder" href="#">Teens</a>
        </li>
		<li class="nav-item">
          <a class="nav-link text-light hvr-underline-from-center font-weight-bolder" href="#">About Us</a>
        </li>
		      </ul>
    </div>
	  <div class="navbar-brand">
		<form id="lookingforbook" class="form-inline ml-auto" action="https://wflpl.tlcdelivers.com">
      <div class="md-form my-0">
        <input class="form-control border-light" type="text" name="term" id="searchfor" value="" rel-"Search Term" placeholder="Search Catalog..." aria-label="Search">
		 <input type="hidden" name="section" value="search">
		 <input type="hidden" name="config" value="pac"> 
      </div>
      <button action="https://wflpl.tlcdelivers.com" class="btn btn-light btn-md my-0 ml-sm-2 hvr-grow-shadow" type="submit">Search</button>
    </form>
							  </div>
  </div>
</nav>

<body class="d-flex flex-column min-vh-100 bg-light">
<div class="container-fluid">
<!--<a href="delete_entire.php" class='btn btn-success float-right mb-4 mt-3'>
        Delete All
          </a>-->

<?php
// Connect to the database
$dbLink = new mysqli('127.0.0.1', 'remoteuser', '4ndr0m3d@', 'Remote-Printing');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = 'SELECT `id`, `name`, `mime`, `size`, `created`, `patron`, `email`, `phone`, `copies`, `pages`, `libnumber`, `location` FROM `file`';
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<div class="table-responsive mt-3 text-dark">
				  <table class="table">
					<thead>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Library Card</b></td>
                    <td><b>Location</b></td>
                    <td><b>Email</b></td>
					 <td><b>Phone</b></td>
					  <td><b>Copies</b></td>
					  <td><b>Pages</b></td>
					   <td><b>Filename</b></td>
					    <td><b>Date</b></td>
                   
                </tr></thead></tbody></table></div><p>There are no print jobs at this time</p>';
    }
    else {
        // Print the top of a table
        echo '<div class="table-responsive mt-3 text-dark">
				  <table class="table">
					<thead>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Library Card</b></td>
                    <td><b>Location</b></td>
                    <td><b>Email</b></td>
					 <td><b>Phone</b></td>
					  <td><b>Copies</b></td>
					  <td><b>Pages</b></td>
					   <td><b>Filename</b></td>
					    <td><b>Date</b></td>
                    <td><b>&nbsp;</b></td>
					<td><b>&nbsp;</b></td>
                </tr></thead><tbody>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>{$row['patron']}</td>
                    <td>{$row['libnumber']}</td>
                    <td>{$row['location']}</td>
					<td>{$row['email']}</td>
					<td>{$row['phone']}</td>
					<td>{$row['copies']}</td>
					<td>{$row['pages']}</td>
					<td>{$row['name']}</td>
					<td>{$row['created']}</td>
                    <td><a href='download.php?id={$row['id']}'>Print</a></td>
					<td><a href='delete.php?id={$row['id']}'>Delete</a></td>
                </tr>";
        }
 
        // Close table
        echo '</tbody></table></div>';
    }
 
    // Free the result
    $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 
// Close the mysql connection
$dbLink->close();
?>
	
</div>
	</body>
<footer class="footer mt-auto bg-dark text-light" role="contentinfo">
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center">&copy; Copyright 2020 - Adam Branscum All rights reserved.</p>
		</div>
	</div>


  </div>
  </div>
</footer>
</html>