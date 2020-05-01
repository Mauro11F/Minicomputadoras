<?php

    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'subidapractica'
    );

    $search = $_POST['search'];

    if (!empty($search)) {
        $query = "SELECT * FROM info_global WHERE recurso LIKE '$search%' ";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die('Query Error'. mysqli_error($conn));
        }

        $json = array();
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'id' => $row['id'],
                'recurso' => $row['recurso'],
                'unidad' => $row['unidad'],
                'precio' => $row['precio'],
                'rubro' => $row['rubro'],
                'grupo' => $row['grupo']
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
    else {
        echo "No entra en la consulta";
    }

?>
