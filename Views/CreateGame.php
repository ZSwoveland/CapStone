
<html>
<head>

<link rel="stylesheet" href="Style.css">

</head>

<body>
	<?php include 'Header.html'?>
    <label>How many are playing?</label>
    <form action="HealthPoint.php" method="POST">

        <input type="radio" id="one" name="one" value="1">
        <label for="one">1</label><br>
            <label>Select Hero: </label>
    	<input type="radio" id="Hero" name="Hero" value="Spider-Man">
    	<label for="Hero">Spider-Man</label><br>
 		    <label>Select Villain: </label>
 		 <input type="radio" id="Villain" name="Villain" value="Rhino">
    	<label for="Villain">Rhino</label><br>
    	<label>Select Difficulty: </label>
 		<input type="radio" id="standard" name="Standard" value="1">
    	<label for="standard">Standard</label><br>
        <button type="submit">Submit</button>

     </form>
     
  
 <?php include 'Footer.html'?>
</body>




</html>