<?php
 require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vcacncies</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<?php require('templates/header.php');?>
	
	<div class="vacancy">
		<h1>Вакансии</h1>
		<form>
		   <?php
			   $find_vacancy="SELECT * FROM vacancy";
			   $res=mysqli_query($connect, $find_vacancy);
               if(!$res)die(mysqli_error($connect));
               if (!empty($_GET['del']) && !empty((int)$_GET['id'])) {
                    $id = (int)$_GET['id'];
                    $delete_vacancy = "DELETE FROM vacancy WHERE id=$id";
                    $res = mysqli_query($connect, $delete_vacancy);
                
                    if (!$res) die (mysqli_error($connect));
                
                }
                $delete_vacancy = "SELECT * FROM vacancy";
                $res = mysqli_query($connect, $delete_vacancy);
                if (!$res) die (mysqli_error($connect));
			    while($vacancy=mysqli_fetch_assoc($res)){
				   ?>
				   <p>
				   <h2><?= $vacancy['title']; ?> <a href="?del=ok&id=<?= $vacancy['id']; ?>"><img src="images/remove.jpg"></a></h2>
				   <?=$vacancy['body']?>
				   </p>
				   <?php
                }
		    ?>
        </form>
		<div class="nextLink">
			<a  href="create_vacancy.php"><b>Создать вакансию</b></a>	
		</div>
	</div>
	<br><br>
	<?php require('templates/footer.php');?>
</body>
</html>