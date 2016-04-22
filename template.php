<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="<?php echo $description;?>" />
<meta name="keywords" content="<?php echo $keywords;?>" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<script type="text/javascript" src="js/functions.js"></script>

<?php include_once("analitics/analiticscripts.php") ?>

<title><?php echo $title;?></title>
</head>
<body>


<div class="main">
	<!-- ------ Header begin  ------- -->
	<div class="header">
            <h2>Life is too short - just take a deep breath..<br/></h2>
            <a href="index.php"><span>L</span>ight <span>A</span>pp <span>S</span>oftware</a>
	</div>
	
	<!-- ------ Navigation menu begin  ------- -->
	<div class="menu-main">
            <div class="menu">
		<ul>
			<li><a href="index.php?view=index">Main page</a></li>
			<li><a href="index.php?view=just_quizz">Just Quizz</a></li>
			<li><a href='index.php?view=contacts'>Contacts</a></li>
		</ul>
            </div>
	</div>
	
	<!-- ------ Content begin  ------- -->
	<div class="content-main">
		
        <?php include_once($_SERVER['DOCUMENT_ROOT'].'/view/'.$view.'.php'); ?>
            
            
	</div>


</div>


<!-- ------ Footer begin  ------- -->
<div class="footer">
	<div class="footer-center">
		&copy Light App Software 2012 - <?php echo date(Y);?>
	</div>
	<div class="footer-center">
		Beautiful planes fly faster...
	</div>
</div>


</body>
</html>