<?php
 require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<div class="news">
		<h1>Новости</h1>
		<form>
		   <?php
			   $find_news="SELECT * FROM news";
			   $res=mysqli_query($connect, $find_news);
               if(!$res)die(mysqli_error($connect));
               if (!empty($_GET['del']) && !empty((int)$_GET['id'])) {
                    $id = (int)$_GET['id'];
                    $delete_news = "DELETE FROM news WHERE id=$id";
                    $res = mysqli_query($connect, $delete_news);
                
                    if (!$res) die (mysqli_error($connect));
                
                }
                $delete_news = "SELECT * FROM news";
                $res = mysqli_query($connect, $delete_news);
                if (!$res) die (mysqli_error($connect));
			    while($news=mysqli_fetch_assoc($res)){
				   ?>
				   <p>
				   <img src="<?=$news['avatar'];?>" style="width:80px; height:80px">
				   <h2><?= $news['title']; ?> <a href="?del=ok&id=<?= $news['id']; ?>"><img src="images/remove.jpg"></a></h2>
				   <?=$news['body']?>
				   </p>
				   <?php
                }
		    ?>
        </form>
	</div>
</body>
</html>