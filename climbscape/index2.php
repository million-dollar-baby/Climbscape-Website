<?php

/*** mysql hostname ***/
$hostname = "climbscapein.ipagemysql.com";

/*** mysql username ***/
$username = "anil";

/*** mysql password ***/
$password = "eknokajhuta";

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=climbscape", $username, $password);
    /*** echo a message saying we have connected ***/
    $msg = 'Connected to database successfully';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
	
	$sql = 'SELECT * FROM webpage_setting';
 
    $stmt = $pdo->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$row = $stmt->fetch();
	if($row['status'] == '1'){
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>ClimbScape</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">  

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<style>
	p{font-family: "montserrat-regular", sans-serif!important;}
	.lead {font-family: "montserrat-regular", sans-serif!important;}
	ul li {font-family: "montserrat-regular", sans-serif!important;}
	.author-info {font-family: "montserrat-regular", sans-serif!important;}
	.service-content ul li {font-size: 18px; line-height: 29px;}
	
	.list-links a {color:#868585;}
	.address_font {font-family: "montserrat-bold", sans-serif; font-style: normal;
    text-rendering: optimizeLegibility; letter-spacing: .2rem; font-size: 1.2rem; font-variant-ligatures: common-ligatures;}
	</style>
</head>

<body id="top">
	
	<?php 
	echo $row['content'];
	?>
	
	
	

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
<?php
	}
	else {
		echo '<html><head><title>climbscape.in </title></head><body><center> <h1> '.$row['comment'].'</h1></center></body></html>';
	}
	?>
	