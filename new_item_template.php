<html>
  <head>
  	<title> Lucy's Boutique | {title}</title>

  	<style>
  	  	/* for the pictures of item*/
  		.bottom{
		  display: grid;
		  height: 20%;
		  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
		  grid-template-rows: 90%;
		  grid-template-areas:
		    "content1 content2 content3 content4 content5 content6";
		  grid-gap-: 1.5rem;
		}

		#content1{
		  grid-area: content1;
		  overflow: hidden;
		  text-align: center;
		}

		#content2{
		  grid-area: content2;
		  overflow: hidden;
		  text-align: center;
		}

		#content3{
		  grid-area: content3;
		  overflow: hidden;
		  text-align: center;
		}

		#content4{
		  grid-area: content4;
		  overflow: hidden;
		  text-align: center;
		}

		#content5{
		  grid-area: content5;
		  overflow: hidden;
		  text-align: center;
		}

		#content6{
		  grid-area: content6;
		  overflow: hidden;
		  text-align: center;
		}

		/* header and logo/navigation bar */
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

		.foot{
			background-image: url("main_picture.webp");
			height: 20%;
			background-color: green;
			overflow: hidden;
			background-attachment: fixed;
  			background-position: center top;
  			background-repeat: no-repeat;
  			background-size: cover;
		}


		img{
			height: 100%;
			max-width: 100%
		}

		/* the logo for the bottom footer */
		footer{
  			padding: 30px;
  			background-color: #242582;
  			height: 15%;
  			font-family: arial;
  			font-size: 18px;
  			text-align: right;
  			color: white;
		}

		footer img{
			float: left;
		}

		/* the navigation bar (taken from w3schools.org)*/
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

  	<script type="text/javascript">
		function change(picture){
			var main_pic = document.getElementById('main_pic');
			main_pic.src = picture.src;
		}
	</script>

  		<header>
			<p>WELCOME<p>
		</header>

		<div class= 'container'>
			<div id='nav'>
				<img src = "Lucy 2.1.png" style = "position: relative">
				<div class="navbar">
				  <a href="home.html">Home</a>
				  <a href="all_purses.php">Purses</a>
				  <a href="all_clothing.php">Clothes</a>
				  
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
				  <a href="all_sets.php">Sets</a>
				</div>
			</div>

		   <br>	

			<div id='main'>
				<img src = "luc.png" style = "position: absolute; height: 1%; width: 100%;">
			</div>
		</div>
	<br>
	<hr>

		<br><br>

	<div class = "boxes" style = "position: grid;">
		<p style = "text-align: center; display: inline-block; vertical-align: top; width: 50%;">
		<img src = "images/{image0}" onerror = "this.src = 'not_found.jpg';" id="main_pic" style = "height: 45%; display: inline-block;"></p>
		<div id = "description-box" style = "border: 5px solid black; height: 45%; display: inline-block; vertical-align: top; width: 45%;">
			<h1>{title}</h1>
			<br>
			<p>{desc}</p>
			<br>
			<p> {price} </p>
			<br>
			<p style = "font-size: 12px;">*Shipping included in price</p>
			<p>For all items, please put shipping address into description. Then, put asking price into the price form. Item will be sent 
			once full payment is received. Any questions please email lucja7@hotmail.com</p>

			<hr>

			<!-- add payment button here -->
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style = "position: absolute; margin-top: 2%;">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>

		</div>
		
	</div>

		<br><br>
		<div class = "bottom">
		   <div id='content1'><img src = "images/{image0}" onerror = "this.src = 'not_found.jpg';" id = "pic0" onclick= "change(pic0)"></td></div>
		   <div id='content2'><img onerror = "this.src = 'not_found.jpg';" src = "images/{image1}" id = "pic1" onclick= "change(pic1)"></div>
		   <div id='content3'><img onerror = "this.src = 'not_found.jpg';" src = "images/{image2}" id = "pic2" onclick= "change(pic2)"></div>
		   <div id='content4'><img onerror = "this.src = 'not_found.jpg';" src = "images/{image3}" id = "pic3" onclick= "change(pic3)"></div>
		   <div id='content5'><img onerror = "this.src = 'not_found.jpg';" src = "images/{image4}" id = "pic4" onclick= "change(pic4)"></div>
		   <div id='content6'><img onerror = "this.src = 'not_found.jpg';" src = "images/{image5}" id = "pic5" onclick= "change(pic5)"></div>
		</div>

		<hr>

		<div class = "foot">
			<!-- <img src = "back.png" style = "position: absolute; height: 20%; width: 100%;"> -->
		</div>

		<footer>
			<img src = "Lucy 2.1.png">
			<p><a href ="#" style = "text-decoration: none; color: white; margin-left: 47%;">Lucy's Treasure Boutique</a></p>
			<hr class ="line">
		</footer>

  </div>
</body>
</html>