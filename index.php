<?php

    require_once('class/DbSDBM.class.php');
    require_once('class/FabricantMGR.class.php');
    require_once('class/Fabricant.class.php');


//$test = FabricantMGR::getFabricantById(5);
//print_r($test);

//$test2 = FabricantMGR::getFabricantsByName("Duvel");
//print_r($test2);


//$testid = FabricantMGR::addFabricant("Bavaria");
//print_r($testid);

//FabricantMGR::deleteFabricantsByName("Bavaria");
    
//FabricantMGR::updateFabricantById(31, "Leffe");

    $fabricant = FabricantMGR::getListFabricants();
    print_r($fabricant);
    $nb = count($fabricant);

    for($i=0 ; $i<$nb ; $i++){

        echo "<button>$fabricant[$i]</button><br>";
    }
    
?>