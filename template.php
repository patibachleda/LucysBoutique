<html>
	<head>
		<title>{title}</title>
		<link rel ="stylesheet" href = "style.css">
	</head>

	<body>
		<header>
			<p>Welcome<p>
		</header>

		<div class = "title">
			<h1>{title}</h1>
		</div>

		<script type="text/javascript">
			function change(picture){
				var main_pic = document.getElementById('main_pic');
				main_pic.src = picture.src;
			}
		</script>

		<div class = "picss">
			<div class = "mainpic" style = "position: relative">
				<img src = "Lucy 2.1.png" id="main_pic" alt="No Picture" style="width:50%; float: right;">
				<p style = "float: right;">{desc}</p>
			</div>

			<table>
				<tr>
					<td><img src = "images/{image0}" onerror = "this.src = 'Lucy 2.1.png';" id = "pic0" alt="2" style="width:10%" onclick= "change(pic0)"></td>
					<td><img onerror = "this.src = 'Lucy 2.1.png';" src = "images/{image1}" id = "pic1" alt="2" style="width:10%" onclick= "change(pic1)"></td>
					<td><img onerror = "this.src = 'Lucy 2.1.png';" src = "images/{image2}" id = "pic2" alt="3" style="width:10%" onclick= "change(pic2)"></td>
					<td><img onerror = "this.src = 'Lucy 2.1.png';" src = "images/{image3}" id = "pic3" alt="4" style="width:10%" onclick= "change(pic3)"></td>
					<td><img onerror = "this.src = 'Lucy 2.1.png';" src = "images/{image4}" id = "pic4" alt="5" style="width:10%" onclick= "change(pic4)"></td>
					<td><img onerror = "this.src = 'Lucy 2.1.png';" src = "images/{image5}" id = "pic5" alt="6" style="width:10%" onclick= "change(pic5)"></td>
				</tr>
			</table>
		</div>


		<footer>
			<div class = "sign-in">
	  			<p>Lucy's Treasure Boutique</p>
	  		</div>
	  		<hr class ="line">
		</footer>
	</body>
</html>