<?php 

	$db = mysqli_connect('127.0.0.1','root','', 'lucysboutique');  

	$name = $_POST["title"];
	$desc = $_POST["comment"];

  	$pic0 = $_FILES['photo0']['name'];
	$pic1 = $_FILES['photo1']['name'];
	$pic2 = $_FILES['photo2']['name'];
	$pic3 = $_FILES['photo3']['name'];
	$pic4 = $_FILES['photo4']['name'];
	$pic5 = $_FILES['photo5']['name'];

	$Price = $_POST["price"];
	$Category = $_POST['style'];

	  
	$sql = "INSERT INTO items_db (Name, Price, Sold, Category, Pic1, Pic2, Pic3, Pic4, Pic5, Pic6) VALUES ('$name', '$Price', '0', '$Category', '$pic0', '$pic1', '$pic2', '$pic3', '$pic4', '$pic5')";  

	// execute query
  	mysqli_query($db, $sql);

  	$target0 = "images/".basename($pic0);
  	move_uploaded_file($_FILES['photo0']['tmp_name'], $target0);

  	$target1 = "images/".basename($pic1);
  	move_uploaded_file($_FILES['photo1']['tmp_name'], $target1);

  	$target2 = "images/".basename($pic2);
  	move_uploaded_file($_FILES['photo2']['tmp_name'], $target2);

  	$target3 = "images/".basename($pic3);
  	move_uploaded_file($_FILES['photo3']['tmp_name'], $target3);

  	$target4 = "images/".basename($pic4);
  	move_uploaded_file($_FILES['photo4']['tmp_name'], $target4);

  	$target5 = "images/".basename($pic5);
  	move_uploaded_file($_FILES['photo5']['tmp_name'], $target5);



  	$myfile = fopen($name.".php", "w");
	$template = file_get_contents('C:\xampp\htdocs\Website\new_item_template.php');
	$template = str_replace('{title}', $name, $template); 
	file_put_contents($name . '.php', $template);
	$template = str_replace('{desc}', $desc, $template); 
	file_put_contents($name . '.php', $template);

	$template = str_replace('{image0}', $pic0, $template); 
	file_put_contents($name . '.php', $template);
	$template = str_replace('{image1}', $pic1, $template); 
	file_put_contents($name . '.php', $template);
	$template = str_replace('{image2}', $pic2, $template); 
	file_put_contents($name . '.php', $template);
	$template = str_replace('{image3}', $pic3, $template); 
	file_put_contents($name . '.php', $template);
	$template = str_replace('{image4}', $pic4, $template); 
	file_put_contents($name . '.php', $template);
	$template = str_replace('{image5}', $pic5, $template); 
	file_put_contents($name . '.php', $template);
	  


	if ($name){
		header("Location: http://localhost/Website/".$name.".php");
	}
	fclose($myfile);
?>