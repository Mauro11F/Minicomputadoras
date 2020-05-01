<?php

    require('Classes/PHPExcel.php');

    $objPHPExcel = new PHPExcel();

    $objPHPExcel->getProperties()->setCreator('Codigos de Programacion')->setTitle('Excel en PHP')->setDescription('Documento de prueba')->setKeywords('excel phpexcel php')->setCategory('Ejemplos');

    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setTitle('hoja1');

    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'PHPExcel');
    $objPHPExcel->getActiveSheet()->setCellValue('A2', 123212.455);
    $objPHPExcel->getActiveSheet()->setCellValue('A3', '=CONCATENATE(A1," ",A2)');

    header("Content-Type: application/vnd.openxmlformats-offficedocument.spreadsheetml.sheet");
    header('Content-Disposition: attachment;filename="Excel.xlsx"');
    header('cache-Control: max-age=0');

    $objPHPExcel = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objPHPExcel->save('php://output');

?>
