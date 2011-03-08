<?php
	include_once('config.inc.php');
	include_once('classes/Posts.class.php');
	
	$id = $_GET['id'];
	
	$posty = new posts;
	$result = $posty->get_img($id);  //pobranie postow z bazy danych
	
	$link = $result[0]['link'];
	
	$description = "woot";
	$img = "imgz/" . $link;
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="<?php echo $description;?>" />
<meta name="description" content="Kerwa.pl" />
<link rel="image_src" href="<?php echo $img;?>" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> -->
<title>Wezogarnij.pl</title>

</head>


<body>

	<!-- ################### HEADER ####-->
	<div class="top">

		<a href="<?php echo $cfg['page']; ?>"><div class="logo"></div></a>

	</div>
	
	<!-- ################### BODYROX ####-->
	<div class="centerbox"> 
	
	<?php


	echo "<div class='box'><div class='movie'><div class='title'><center>" . $result[0]['name'] . "</center></div><center><img src='imgz/" . $link . "' /></center><BR />
					
				<div style='margin-left:auto;margin-right:auto;padding:5px 5px 5px 0;'><BR />
				<center>
				<a expr:share_url='href='' href='http://www.facebook.com/sharer.php' name='fb_share' share_url='" . $cfg['page_url'] . $id . "' href='http://www.facebook.com/sharer.php' type='button_count' align='center'>Share</a><script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>
				</center>
				</div>
				
				<BR />

					
					</div></div>";
	
	?>
	
	</div>
	
	<!-- #################### FOOTER #####-->
	<div class="bot">
	
		<div class="centerbox"><div class="box"><div class="paginacja"> 
	
		
		
		<BR /><div class="legal">
		Wszelkie tresci i obrazy w serwisie sa dodawane przez uzytkowników serwisu.
Wezogarnij.pl nie jest dostawca tresci ani obrazów i nie odpowiada za umieszczane przez uzytkowników tresci i obrazy a zapewnia jedynie miejsce do dodawania tresci i obrazów przez uzytkowników. Jesli uwazasz, ze tresc lub obraz zostal wykorzystany bez twojej zgody - przeslij link do tresci lub obrazu i wskaz powód, a tresc lub obraz zostana zmienione lub usuniete.</div><BR />
	
		</div></div></div>
		
	</div>



</body>

</html>
	
