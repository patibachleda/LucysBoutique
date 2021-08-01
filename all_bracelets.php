<!-- displays all the bracelets available on the site -->

<?php
// connects to the database and gets the infor needed
	$db = mysqli_connect('127.0.0.1','root','', 'lucysboutique');
	$sql = "SELECT Name, Pic1 FROM items_db WHERE Category LIKE '%Bracelets%' and Sold != 1";

	$data = mysqli_query($db, $sql);
?>

<html>
	<head>
		<title>Lucy's Boutique | Bracelets</title>

		<style type="text/css">
		/* for the rows and columns of pictures */
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
		   /*top of the page like on home page*/
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

			/* navigation bar like on home page*/
			.navbar {
			  overflow: hidden;
			  background-color: black;
			  font-family: Arial, Helvetica, sans-serif;
			  float: right;
			}

			.navbar a {
			  float: left;
			  font-size: 16px;
			  color: white;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			}

			.dropdown {
			  float: left;
			  overflow: hidden;
			}

			.dropdown .dropbtn {
			  cursor: pointer;
			  font-size: 16px;  
			  border: none;
			  outline: none;
			  color: white;
			  padding: 14px 16px;
			  background-color: inherit;
			  font-family: inherit;
			  margin: 0;
			}

			.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
			  background-color: blue;
			}

			.dropdown-content {
			  display: none;
			  position: absolute;
			  background-color: #f9f9f9;
			  min-width: 160px;
			  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			  z-index: 1;
			}

			.dropdown-content a {
			  float: none;
			  color: black;
			  padding: 12px 16px;
			  text-decoration: none;
			  display: block;
			  text-align: left;
			}

			.dropdown-content a:hover {
			  background-color: #ddd;
			}

			.show {
			  display: block;
			}

		</style>
	</head>

	<body>

		<header>
			<p>WELCOME<p>
		</header>

		<!-- holds the logo and nag bar -->
		<div class= 'container'>
	 		<!-- nav bar -->
			<div id='nav'>
				<img src = "Lucy 2.1.png" style = "position: relative">
				<div class="navbar">
					<!-- not dropdowns -->
					<a href="home.html">Home</a>
					<a href="all_purses.php">Purses</a>
					<a href="all_clothing.php">Clothes</a>
				 	
				 	<!-- dropdowns -->
					<div class="dropdown">
						<button class="dropbtn" onclick="myFunction()">Jewerly
					    	<i class="fa fa-caret-down"></i>
						</button>

						<div class="dropdown-content" id="myDropdown">
					    	<a href="all_necklaces.php">Necklaces</a>
					    	<a href="all_bracelets.php">Bracelets</a>
					    	<a href="all_earrings.php">Earrings</a>
					  	</div>
					</div> 

					<!-- not dropdown -->
					<a href="all_sets.php">Sets</a>
				</div>
			</div>

			<br>

			<!-- picture that makes the nav bar not funky (not important: looks like line) -->
			<div id='main'>
				<img src = "luc.png" style = "position: absolute; height: 1%; width: 100%;">
			</div>
		</div>

		<br><br>

		<!-- title graphic -->
		<p style = "text-align: center;"><img src = "bracelets.png"></p>


	  <?php
	  	try{
	  		// gets the data row by row, if no image available put default white one
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
	  ?>

	  <!-- script from w3schools.com for the dropdown respsonsiveness -->
	  <script>
			/* When the user clicks on the button, 
			toggle between hiding and showing the dropdown content */
			function myFunction() {
			  document.getElementById("myDropdown").classList.toggle("show");
			}

			// Close the dropdown if the user clicks outside of it
			window.onclick = function(e) {
			  if (!e.target.matches('.dropbtn')) {
			  var myDropdown = document.getElementById("myDropdown");
			    if (myDropdown.classList.contains('show')) {
			      myDropdown.classList.remove('show');
			    }
			  }
			}
		</script>
	</body>
</html>