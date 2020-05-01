<?php
    include("header.php");

    include("db.php");
    require 'Classes/PHPExcel/IOFactory.php';
    require 'Classes/PHPExcel.php';

    $nombreArchivo = 'prueba.xlsx';

    $objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);

    $objPHPExcel->setActiveSheetIndex(0);

    $numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

    echo '<table border=1><tr><td>Recurso</td><td>Unidad</td><td>Precio</td><td>Rubro</td><td>Grupo</td></tr>';

    for ($i=1; $i <= $numRows; $i++) {
        $recurso = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $unidad = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $precio = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $rubro = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $grupo = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();

        $sql = "INSERT INTO info_global(recurso,unidad, precio,rubro,grupo) VALUES ('$recurso','$unidad','$precio','$rubro','$grupo')";

        $result = $conn->query($sql);

        // if (isset($result)) {
        //     echo "SEcargo ??";
        // }else {
        //     echo "No cargo ni mierda";
        // }


        echo '<tr>';
        echo '<td>' .$recurso.'</td>';
        echo '<td>' .$unidad.'</td>';
        echo '<td>' .$precio.'</td>';
        echo '<td>' .$rubro.'</td>';
        echo '<td>' .$grupo.'</td>';
        echo '</tr>';


    }
    echo "</table>";

?>

<?php
    include("footer.php");

?>
