<?php
require_once 'HeroSelect.php';
require_once 'VillainSelect.php';


Class HP{
    
    public function VHPCacl($n,$s,$p){
        $villain = new VillainSelect();
        return $villain->VillainHPCalc(n, $s, $p);
    }
    
    public function HeroHP($n){
        $hero = new HeroSelect();
        return $hero->HeroHP($n);
    }
    
    public function HealHP($HP, $DMG){
        
        $HP += $DMG;
        return $HP;
    }
    
    public function TakeDMG($HP, $DMG){
        
        $HP -= $DMG;
        return $HP;
    }
    
}

?>