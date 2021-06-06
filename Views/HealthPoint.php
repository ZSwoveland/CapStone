
<html>
    <head>

<link rel="stylesheet" href="Style.css">

</head>

<body>
<?php include 'Header.html'?>

<?php require_once '../Logic/HP.php';
$healthpoint = new HP();?>

	<?php echo $_POST['Hero'];?><br>
	<?php echo $healthpoint->HeroHP($_POST['Hero'])?><br>
	<?php echo $_POST['Villain']?><br>
	<?php echo $healthpoint->VillainHPCalc($_POST['Villain'],$_POST['one'],$_POST['Standard'])?>
    <form action="Game.php" method="POST">

        <Label>Hero Damage Taken:</Label><br>
        <input type="number" value="0" name="HeroDamage"><br>
        <Label>Hero Damage Healed:</Label><br>
        <input type="number" value="0" name="HeroHeal"><br>
        <Label>Villain Damage Taken:</Label><br>
        <input type="number" value="0" name="VillainDamage"><br> 
        <Label>Villain Damage Healed</Label><br>
        <input type="number" value="0" name="VillainHeal"><br>
        <button type="submit">Submit</button>

     </form>
<?php include 'Footer.html'?>
</body>




</html>