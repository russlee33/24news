
 <html>
  <head>
   <title>News24 headlines</title>
  </head>
  <body>
   <h1>News24 Headlines</h1>
   <a href="login.html">LOGIN</a> 
   
   <?php

	$dbc = mysqli_connect('localhost', 'Russell', 'password1', '24news')
		or die ('Error connecting to MySQL server');

	$query = "SELECT Headline, id  FROM 24news";
	

	$result = mysqli_query($dbc, $query)
		or die('Error querying the database');

	if (mysqli_num_rows($result) == 0) {
		echo("No results found");
	} else {
  
	
		
		echo("<ul>\n");
		while($row = mysqli_fetch_assoc($result)) {
			
		$id = $row['id'];
		$Headline = $row['Headline'];

				
		echo ('<h1><br><a href="single.php?id=' . $id . '">' . $Headline . '</h1></a>');
			
		}
	
	}

	
mysqli_close($dbc);

  ?>
 </body>
</html>

