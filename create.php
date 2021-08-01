<html>
	<head>
		<title>Lucy's Boutique | New Listing</title>
		<link rel = "stylesheet" href = "style.css">
	</head>

	<body>
		<form target = "_blank" method="POST" action="insert_mine.php" enctype="multipart/form-data">
			<br><br>
			Title:
			<input type = "text" name = "title">
			<br><br>
			Price:
			<input type = "number" step="0.01" name = "price">
			Shipping:
			<input type = "number" step="0.01" name = "shipping">
			<br><br>
			Description:
			<textarea name="comment" rows="5" cols="40"></textarea>
			<br><br>
			Pictures:
			<input name="photo0" type="file" accept="image/*">	
			<input name="photo1" type="file" accept="image/*">
			<input name="photo2" type="file" accept="image/*">
			<input name="photo3" type="file" accept="image/*">
			<input name="photo4" type="file" accept="image/*">
			<input name="photo5" type="file" accept="image/*">
			<br><br>
			Category:
			<br><br>
			Clothing:
			<input type="radio" name="style" value="Dresses">Dresses
			<input type="radio" name="style" value="Purses">Purses
			<input type="radio" name="style" value="Pants">Pants/Shorts/Skirts
			<input type="radio" name="style" value="Accessories">Accessories
			<br>
			Jewerly:
			<input type="radio" name="style" value="Gold">Gold
			<input type="radio" name="style" value="Silver">Silver
			<input type="radio" name="style" value="Custom">Custom
			<br>
			Fashion Sets:
			<input type="radio" name="style" value="Sets">Sets

			<br><br>

			<input type="submit" name="submit" value="Submit" onclick = "refresh()">
	</body>
</html>