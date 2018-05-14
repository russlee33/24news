 <html>
  <head>
   <title>News24</title>
  </head>
  <body>
   <h1>News24</h1>
   <?php

	$dbc = mysqli_connect('localhost', 'Russell', 'password1', '24news')
		or die ('Error connecting to MySQL server');
		
		

	$query = "SELECT Heading, Category, News, FROM 24news WHERE id='".$_GET["id"]."'";
	//echo("<h2>SQL command: ".$query."</h2>");

	$result = mysqli_query($dbc, $query)
		or die('Error querying the database');

	if (mysqli_num_rows($result) == 0) {
		echo("No results found");
	} else {

		while($row = mysqli_fetch_assoc($result)) {
			echo($row["Heading"]." costs ".$row["Category"]."<br>");
		}
	}


		mysqli_close($dbc);