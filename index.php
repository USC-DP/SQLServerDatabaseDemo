<!DOCTYPE html>
	<html lang="en-us"/>
		<head>
			<meta charset="utf-8"/>
		<style>
			.background {
				border-style: solid;
				background-image: linear-gradient(#9EA3FF, white);
				text-align: center;
				margin: 1% 3%;
				padding: 1%;
			}

			table {
				border-collapse: collapse;
			}

			table, td, th {
				border: 1px solid black;
			}
			
			th {
				padding: 3px 20px;
			}

		</style>

		</head>

		<body>
		<?php
		$hostname = "localhost";
		$username = "admin";
		$password = "root";
		$db = "Store";

		$dbconnect=mysqli_connect($hostname,$username,$password,$db);
	
		if ($dbconnect->connect_error) {
			die("Database connection failed: " . $dbconnect->connect_error);
		}
		?>

			<div class="background">
				<h1>Product Search</h1></br>
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label for="submit">Submit: </label>
					 <input type="text" name="input"></input>
					<input type="submit" name="submit value="Submit></input>
				</form>
			</div>
			
			<div class="background">
				<h1>Products</h1>
				<table align="center">
					<tr>
						<th>Product Name</th>
						<th>Price</th>
						<th>Quantity in stock</th>
					<tr>

					<?php
					$item = "";
					if($_SERVER["REQUEST_METHOD"] == "POST") {
						$item =  htmlspecialchars($_POST["input"]);
					}
	
					$query = mysqli_query($dbconnect, "SELECT * FROM Inventory WHERE ProductName LIKE '%".$item."%'" )
						or die (mysqli_error($dbconnect));
					$itemCount = mysqli_num_rows($query);
					echo "<p>" .  $itemCount .  " items found";
					while ($row = mysqli_fetch_array($query)) {
						echo
						"<tr>
						<td>{$row['ProductName']}</td>
						<td>{$row['Price']}</td>
						<td>{$row['Quantity']}</td>
						</tr>\n";
					}
					?>					

				</table>
		</body>

	</html>	
