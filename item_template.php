<?php
	$db = mysqli_connect('127.0.0.1','root','', 'lucysboutique');
	$sql = "SELECT Name, Pic1 FROM items WHERE Category LIKE '%Clothing%'";

	$data = mysqli_query($db, $sql);
?>

<html>
<head>
	<title>Image Upload</title>
	<style type="text/css">
	   #content{
	   	display: table;
	   	width: 90%;
	   	height: 20%;
	   	margin: 20px auto;
	   	border: 1px solid #cbcbcb;
	   }
	   #img_div{
	   	display: table-cell;
	   	width: 25%;
	   	padding: 5px;
	   	margin: 15px auto;
	   	border: 1px solid #cbcbcb;
	   }
	   #img_div img{
	   	margin: 5px;
	   	width: 80%;
	   }

	   	header{
 	 		background-color: #242582;
  			color: white;
  			padding: 1px;
  			font-family: arial;
  			font-size: 20px;
  			letter-spacing: 6px;
  			text-align: center;
		}

		#nav{
		  background-color: white;
		  opacity: .9;
		  height: 15%;
		  font-size: 24px;

		}

		#nav img{
			height: 100%;
			max-width: 100%
		}
	</style>
</head>

<body>

<header>
	<p>WELCOME<p>
</header>

<div class= 'container'>
	 <div class = "top">
		<div id='nav'><img src = "Lucy 2.1.png" style = "position: relative">
		</div>
	</div>
</div>


<hr>

<p style = "text-align: center;"><img src = "clothing.png"></p>


  <?php
  	try{
  		while ($row = mysqli_fetch_array($data)){
  			echo "<div id='content'>";
    			if($row != NULL){
    			echo "<div id='img_div'>";
      				echo "<a href = '".$row['Name'].".php'><img src='images/".$row['Pic1']."' ></a>";
      				echo "<br>";
      				echo $row['Name'];
    			echo "</div>";
    			}else{
    			echo "<div id='img_div'>";
					echo "<img src='filler.jpg' >";
    			echo "</div>";
    			}
  
    			$row = mysqli_fetch_array($data);
    			if($row != NULL){
    			echo "<div id='img_div'>";
      				echo "<a href = '".$row['Name'].".php'><img src='images/".$row['Pic1']."' ></a>";
      				echo "<br>";
      				echo $row['Name'];
    			echo "</div>";
    			}else{
    			echo "<div id='img_div'>";
					echo "<img src='filler.jpg' >";
    			echo "</div>";
    			}

    			$row = mysqli_fetch_array($data);
    			if($row != NULL){
    			echo "<div id='img_div'>";
      				echo "<a href = '".$row['Name'].".php'><img src='images/".$row['Pic1']."' ></a>";
      				echo $row['Name'];
      				echo "<br>";
    			echo "</div>";
    			}else{
    			echo "<div id='img_div'>";
    				echo "<img src='filler.jpg' >";
    			echo "</div>";
    			}
    		echo "</div>";
		}
  	}catch(Exception $e){
  	}

    // while ($row = mysqli_fetch_array($data)) {
    // 	echo "<div id='img_div'>";
    //   		echo "<a href = '".$row['Name'].".php'><img src='images/".$row['Pic1']."' ></a>";
    //   		echo $row['Name'];
    // 	echo "</div>";
    // }
  ?>
</body>
</html>