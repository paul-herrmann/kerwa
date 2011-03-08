<?php  
	ob_start();
//get unique id 
$up_id = uniqid();  
?> 

<?php
	include_once('config.inc.php');
	
	
	session_start();
	include_once('classes/Users.class.php');
	
	
	$usr = new user;
	$usr->check_login();
		
	$usr->check_if_logged();
	
	
	if(isset($_GET['l'])) {
	unset($_GET['l']);
	$usr->logout();
	
	}
		
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="styles/style_admin.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> -->
<title>kerwa.pl</title>

</head>


<body>

	<!-- ################### HEADER ####-->
	<div class="top">

		<a href="<?php echo $cfg['page']; ?>"><div class="logo"></div></a>

	</div>
	
	<!-- ################### BODYROX ####-->
	<div class="centerbox"> 
	<div class="box" align="center">
	<BR /><a href="admin.php?l=out">Wyloguj się</a><br /><br />
	
		<form action="admin.php" name="form1" id="form1" enctype="multipart/form-data" method="post">
		<table border=0><tr>
			<td align="right"></td>
			</tr><tr><td>
			<input name="name" type="text" id="name" size="40" value="opis" onfocus="this.value=''"/></td>
			<td>
			<input class="noborder" type="file" name="file" id="file" /></td>
			<td align="right">
			<input type="submit" name="Submit" value="Dojeb!" /></td></table>
			<!--APC hidden field--> 
    <input type="hidden" name="APC_UPLOAD_PROGRESS" id="progress_key" value="<?php echo $up_id; ?>"/> 
<!----> 
    <iframe id="upload_frame" name="upload_frame" frameborder="0" border="0" src="" scrolling="no" scrollbar="no" > </iframe> 
		</form>
		
		
	
		<?php
		
			include_once('classes/Posts.class.php');
			$posty = new posts;
			
			if (isset($_POST['name'])) {
				$filename = $_FILES['file']['name'];
				$type = $_FILES['file']['type'];
				$tmp_name = $_FILES['file']['tmp_name'];
				$error = $_FILES['file']['error'];
				$posty->upload_img($filename, $type, $error, $tmp_name);
			}
			
			if (isset($_GET['succes'])) {
				echo "<font color='red'>DOJEBANO!</font> <BR /><BR />";
			}
			
			if (isset($_POST['link'])) {
				$usr->upload_movie($_POST['link'], $_SESSION['user_id'],$_POST['name']);
				unset($_POST['link']);
				echo "<font color='red'>DOJEBANO!</font> <BR /><BR />";
			}			
	
			if (isset($_GET['d'])) {
				if($_GET['co'] == 'film') {
				$posty->post_delete($_GET['d']);
				unset($_GET['co']);
				} else {
				$posty->img_delete($_GET['d']);
				unset($_GET['co']);
				}
				unset($_GET['d']);
				echo "<font color='red'>WYJEBANO!</font> <BR /><BR />";
			}			
			
			if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
			}
			
			$all = $posty->get_all_imgs();
			
			foreach ($all as $instance) {
				echo $instance['date'] . " // " . $instance['name'] . " // <a href='" . $instance['link'] . "'>" . $instance['link'] . "</a> // <a href='admin.php?d=" . $instance['id'] . "&co=img'>usuń</a> <BR />";
			}
	
		ob_end_flush();
		
		?>
		
		<BR />
	</div>
	</div>



</body>

</html>


