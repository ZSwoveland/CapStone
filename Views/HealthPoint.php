<!DOCTYPE html>
<html>
    <head>

<link rel="stylesheet" href="Style.css">

</head>

<body>
<?php include 'Header.html'?>
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

	<?php $heron = $_POST['Hero'};
		  $heroHp = 10;
		  
		  $villainn = $_POST['Villain'];
		  $villainHp = 14;
		 
		  function heroHPCalc($OHP,$Dmg,$Heal){
		      if($OHP == $heroHp){
		          echo $OHP;
		      }elseif($DMG < 0){
		          echo $OHP -= $DMG;
		      }elseif($Heal < 0){
		          echo $OHP += $Heal;
		      }
		  }
		  
		  function villainHPCalc($OHP,$Dmg,$Heal){
		      if($OHP == $villainHp){
		          echo $OHP;
		      }elseif($DMG < 0){
		          echo $OHP -= $DMG;
		      }elseif($Heal < 0){
		          echo $OHP += $Heal;
		      }
		  }
		  
		  echo $heron;
		  echo heroHPCalc($heroHp,$_POST[HeroDamage],$_POST[HeroHeal]);
		  echo $villainn;
		  echo  villainHPCalc($villainHp,$_POST[VillainDamage],$_POST[VillainHeal]);
	?>
    
<?php include 'Footer.html'?>
</body>




</html>