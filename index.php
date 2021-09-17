<!DOCTYPE html>
<html lang="en"> <head><!-- Global site tag (gtag.js) - Google Analytics -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webprint</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <!-- Bootstrap -->
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
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container" style="padding-bottom: 0px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mr-auto">
		 <li class="nav-item">
          <a class="nav-link hvr-underline-from-center text-light" href="#">Home
          <span class="sr-only">(current)</span>
          </a>
		  </li>
        <li class="nav-item active">
          <a class="nav-link hvr-underline-from-center text-light" href="#">Link
          <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light hvr-underline-from-center font-weight-bold" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light hvr-underline-from-center font-weight-bolder" href="#">Link</a>
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
<body class="d-flex flex-column min-vh-100">
<div class="container-fluid bg-light pt-4 pb-5">
	
	
	
	<div class="container">
        <div class="row">
           
                <div class="bg-dark p-4 my-5 dropshadow mr-auto ml-auto">
                    <div class=" mr-auto ml-auto text-white">
                        <h3 class="card-title text-center">Remote Printing</h3>
                        <form class="form-group" method="post" action="upload.php" enctype="multipart/form-data" id="emailForm">
                            <div class="form-group ">
                                <input type="text" name="patron" id="patron" class="form-control" placeholder="Name" >
                                <div id="nameError" style="color: red;font-size: 14px;display: none">nameError</div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email address" >
                                <div id="nameError" style="color: red;font-size: 14px;display: none">emailError</div>
                            </div>
							<div class="form-group">
                                <input type="phone" name="phone" id="phone" class="form-control" placeholder="Phone Number" >
                                <div id="emailError" style="color: red;font-size: 14px;display: none">emailError</div>
                            </div>
							<div class="form-group">
                                <input type="text" name="copies" id="copies" class="form-control" placeholder="How many copies?" >
                                <div id="coppiesError" style="color: red;font-size: 14px;display: none">emailError</div>
                            </div>
                            <div class="form-group">
								<label>Pickup Location:</label>
                                <select class="form-control" name="location">
							   <option value="Main">Main Branch</option>
							   <option value="Argenta">Argenta Branch</option>
							</select>
                            </div>
													 
							    <div class="form-group">
                                <input name="libnumber" id="libnumber" class="form-control" placeholder="Library Card Number (optional)">
                                <div id="messageError" style="color: red;font-size: 14px;display: none">messageError</div>
                            </div>
                            <div class="form-group text-white">
                                <input class="bg-dark form-control no-border text-white" type="file" id="files" name="uploaded_file"><br>
        						<input class="btn btn-success mt-4 float-right dropshadow" type="submit" value="Upload file">
                                <div id="attachmentError" style="color: red;font-size: 14px;display: none">attachmentError</div>
                            </div>
                        </form>
                    </div>
                </div>
            
        </div>
    </div>
	
	</div>
	
	</body>

<footer class="text-white mt-auto bg-dark" role="contentinfo">
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center">&copy; Copyright 2020 - Adam Branscum All rights reserved.</p>
		</div>
	</div>
</footer>
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
</head>
<body>
<div id="myModal" class="modal fade" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Remote Assisted Printing Agreement</h4>
            </div>
            <div class="modal-body">
                <p>By clicking "I agree," you agree to terms and conditions.</p>
				<ul>
				<li>No more than 20 pages per request per day.</li>
				<li>Accepted file types: pdf, doc*, txt, jpg and png.</li>
				<li>No pornographic or obscene images.</li>
				<li>We will contact you when your print job is complete to schedule a pickup time.</li>
				<li>We cannot guarantee same day delivery of printed materials.</li>
				<li>Your information and submitted print job will be deleted from our systems immediately after printing.</li>
				</ul>
                <form>
                    <button type="button" class="bg-dark btn text-light" data-dismiss="modal" aria-hidden="true">I agree</button>
                </form>
            </div>
        </div>
    </div>
	
	</html>