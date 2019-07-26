<?php
include('db.php');

$query="SELECT * FROM posts ORDER BY id DESC LIMIT 5";
$post = mysqli_query($connection,$query);

?>

<!Doctype html>
<html lang="en">
<head>
	<title> Welcome to Jquery </title>
	<meta charset="utf-8"/>
	
	<!--bootsraps cdn css-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--stylesheet-->
<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>Star Wars Chat</h1>
		</header>
		<!--this is where the post will go-->
		<div id="board">
		<ul class="list-group">
		<?php
		while($rows = mysqli_fetch_assoc($post)):
         echo"<li class='list-group-item'>".$rows['date']."--".$rows['name']."wrote<br>".$rows['post'].'</li>';

     endwhile;
		
		?>
	</ul>
</div>
	<div class="col-md-6 col-md-offset-3">
		<form  action="" class="form-group">
			<input type="text" class="form-control" id="name" placeholder="Your Name">
			<textarea class="form-control" name="" id="post" cols="30" rows="10"></textarea>
			<button class="btn btn-success pull-right" id="sendit" data-key='sent'>POST</button>
		</form>

		
	</div>	
	</div>

	<footer> </footer>




	<!--JQuery cdn-->
	<script
		src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	  crossorigin="anonymous"></script>
	  <!--bootsraps cdn css-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--ckeditor-->
<script src="js/ckeditor/ckeditor.js" type="text/javascript"></script>
<!--<script> CKEDITOR.replace('post');
</script>-->

<!--Javascript custom-->
<script rel="stylesheet" type="text/javascript" src="js/js1.js"></script>
