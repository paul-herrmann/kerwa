<?php
	include_once('config.inc.php');
	
	?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="Wezogarnij.pl" />
<meta name="description" content="kerwa.pl" />
<link rel="image_src" href="img/meta.png" />
<link rel="target_url" href="kerwa.pl"/>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> -->
<title>kerwa.pl</title>


</head>


<body>
	<img class="hover" src="img/logo2_hover.png" />

	<!-- ################### HEADER ####-->
	<div class="top">

		<a href="<?php echo $cfg['page']; ?>"><div class="logo"></div></a>

	</div>
	
	<!-- ################### BODYROX ####-->
	<div class="centerbox"> 
	
	<?php
	

	include_once('classes/Posts.class.php');
	
	if (isset($_GET['page'])) {
	$page = $_GET['page'];
	} else {
	$page = 1;
	}
	$base = $cfg['pages_base'];
	
	$posty = new posts;
	$result = $posty->get_imgs($base,$page);  //pobranie postow z bazy danych
	$allposts = $posty->img_number();
	$sum = $allposts[0]['COUNT(*)'];
	
	foreach ($result as $instance) {   //generuje posty
		$link = $instance['link'];
		$id = $instance['id'];
		echo "<div class='box'><div class='movie'><BR /><center><a href='page.php?id=" . $id . "' ><img src='imgz/" . $link . "' /></a></center><BR />
					
				<div style='margin-left:auto;margin-right:auto;padding:5px 5px 5px 0;'><BR />
				<center>
				<a expr:share_url='href='' href='http://www.facebook.com/sharer.php' name='fb_share' share_url='" . $cfg['page_url'] . $id . "' href='http://www.facebook.com/sharer.php' type='button_count' align='center'>Share</a><script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>
				</center>
				</div>
				
				<BR />

					
					</div></div>";
	}
	
	?>
	
	</div>
	
	<!-- #################### FOOTER #####-->
	<div class="bot">
	
		<div class="centerbox"><div class="box"><div class="paginacja"> <BR />
	
		<?php
			$pages_count = floor(($sum + $base - 1) / $base);
			
			if  (($page > $pages_count) || ($page < 1)) {
			header("Location : index.php");
			}
	
			for ($i=1; $i<=$pages_count; $i++) {
				echo "<a href='index.php?page=" . $i . "'>["; 
				if ($i == $page) {
					echo "-" . $i . "-";
				} else {
					echo " " . $i . " ";
				}			
				echo "]</a>  ";
			}			
		?>
		
		<BR /><BR />
		
		<form action="index.php" name="form1" id="form1" method="GET">
		Strona nr: <input name="page" type="text" id="page" size="13" />
		<input type="submit" value="Przejdź" />
		</form>
		
		<BR /><div class="legal">
		Wszelkie tresci i obrazy w serwisie są dodawane przez użytkowników serwisu.
kerwa.pl nie jest dostawcą treści ani obrazów i nie odpowiada za umieszczane przez użytkowników treści i obrazy a zapewnia jedynie miejsce do dodawania treści i obrazów przez użytkowników. Jeśli uważasz, ze treść lub obraz został wykorzystany bez twojej zgody - prześlij link do treści lub obrazu i wskaż powód, a treść lub obraz zostaną zmienione lub usunięte.</div><BR />
	
		</div></div></div>
		
	</div>



</body>

</html>
	
