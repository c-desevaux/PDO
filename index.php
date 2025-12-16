
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Fabricants de Biere</title>
</head>
<body>
    
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
    //print_r($fabricant);
        $nb = count($fabricant);
        ?>
    <div class='d-flex flex-column justify-content-center align-items-center mt-5'>
        <?php

        for($i=0 ; $i<$nb ; $i++){

            echo "<button class='btn btn-primary m-2'>$fabricant[$i]</button>";
        }
        ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>


