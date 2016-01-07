<!DOCTYPE html>
<html>
<head>
  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="css/tuto.css" rel="stylesheet">
  <title>Character Recognition</title>
</head>
<body>
	<div class= "container">
    <header class="row" id="first">
        <div class="col-lg-12">
			<h1>NASA PROGRAMMING</h1>
			<h3>CHARACTER RECOGNITION</h3>
        </div>
    </header>
    <section class ="row" id="section-3">
    	<div class="row">
	    <div class=" col-lg-6" style="padding-top:150px;">
	  		<div class="btn-group">
	    		<button type="button" class="btn btn-info" id="upload">Upload</button>
	  		</div>   
	    </div>
	    <div class="col-lg-6" style="padding-top:150px;">
	    	<div class="btn-group">
	        	<button type="button" class="btn btn-info" id="draw">Draw</button>
	    	</div>
	    </div>
		</div>
    	<div class="row">
	  		<div class="col-lg-12">
	  			<div id="part1" style="visibility:hidden;">
          	<form method="POST" action="upload.php" enctype="multipart/form-data">
     			<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
	     		<input type="file" name="avatar" class="col-md-offset-5">
	    		<button type="submit" class="btn btn-primary" name="envoyer">Envoyer le fichier</button>
			</form>
		</div>
	  	</div>
	  </div>
	  <br/>
	  <div id="part2" style="visibility:hidden;">
        <canvas id="canvas" width="400" height="175"></canvas>
		
		<form id="largeurs_pinceau">
		<br>
			<button type="reset" class="btn btn-primary" id="reset">Reinitialiser</button>
			<button type="button" class="btn btn-primary" id="save">Sauvegarder mon image</button>
		
		</form>
	  </div>
	
	
	</section>
 	 <footer class="row" id="section-4">
    <div class="col-lg-12"> 
    </div>  		
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="js/draw.js"></script>
  		</footer>
	</div>
</body>
</html>
