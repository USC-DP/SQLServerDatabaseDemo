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
					$mysqli = new mysqli($hostname, $username, $password, $db);
					$stmt = $mysqli->prepare("SELECT ProductName, Price, Quantity FROM Inventory WHERE ProductName LIKE ?");
					$constItem = "%".$item."%";
					$stmt->bind_param('s', $constItem);
					$stmt->execute();
					$stmt->bind_result($ProductName, $Price, $Quantity);
					#$sql = "SELECT * FROM Inventory WHERE ProductName LIKE '%".$item."%'";
					#$query = mysqli_query($dbconnect, $sql) or die (mysqli_error($dbconnect));
					#$itemCount = mysqli_num_rows($query);
					#echo "<p>" .  $itemCount .  " items found</p>";
					while($stmt->fetch()) {
						echo
						"<tr>
						<td>{$ProductName}</td>
						<td>{$Price}</td>
						<td>{$Quantity}</td>
						</tr>\n";
					}
					
					/*while ($row = mysqli_fetch_array($query)) {
						echo
						"<tr>
						<td>{$row['ProductName']}</td>
						<td>{$row['Price']}</td>
						<td>{$row['Quantity']}</td>
						</tr>\n";
					}*/
					$stmt->close();
					$mysqli->close();
					?>					

				</table>
		</body>

	</html>	
