
<html>
    <head>

<link rel="stylesheet" href="Style.css">

</head>

<body>
<?php include 'Header.html'?>

<?php require_once '../Logic/HP.php';
require_once '../Classes/Hero.php';
require_once '../Classes/Villian.php';
$healthpoint = new HP();
$hero = new Hero();
$Villain = new Villain();?>

	<?php $hero->setName($_POST['Hero']);
			echo $hero->getName();?><br>
	<?php echo $healthpoint->HeroHP($_POST['Hero']);
	echo $healthpoint->HealHP($healthpoint->HeroHP(),_POST(['HeroHeal']);
	echo $healthpoint->TakeDamage($healthpoint->HeroHP(),$_POST(['HeroDamage']);?><br>
	<?php $Villain->setName($_POST['Villain']);
		echo $Villain->getName;?><br>
	<?php echo $healthpoint->VillainHPCalc($_POST['Villain'],$_POST['one'],$_POST['Standard'])?>
    <form action="" method="POST">

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