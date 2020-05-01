$(document).ready(function() {

    console.log('jquery se esta conectando');

    $('#buscar').keyup(function(e) {
        if($('#buscar').val()) {
            let search = $('#buscar').val();
            console.log(search);
            $.ajax ({
                url: "../PHP/tabla-js/buscar-cosas.php",
                type: "POST",
                data: {search: search},
                success: function(response) {
                    console.log(response);
                    let datas = JSON.parse(response);
                    let template = '';

                    datas.forEach(data => {
                        // console.log(data.recurso);
                        template +=`<tr>
                                        <td> ${data.id} </td>
                                        <td> ${data.recurso} </td>
                                        <td> ${data.unidad} </td>
                                        <td>$ ${data.precio} </td>
                                        <td> ${data.rubro} </td>
                                        <td> ${data.grupo} </td>
                                    </tr>`

                    });

                    $('#aca').html(template);

                    $('#descargar').click(function(){
                        console.log("trabando dentro del ajax");
                        var datos = datas;
                        console.log(datos);
                        var otra = 12345;
                        var obj = {datos:datos, var:otra};
                        $.ajax({
                            url: "../PHP/tabla-js/descarga_excel.php",
                            type: "POST",
                            data: obj,
                            success: function(data) {
                                console.log(data);;
                            }
                        });
                    });
                }
            });
        }
    });

    // $('#descargar').click(function() {
    //     let elements = document.querySelectorAll('#aca > tr > td');
    //     mattriz = [];
    //     for(let element of elements) {
    //         console.log(element);
    //         mattriz.push(element.innerText);
    //     }
    //     console.log(mattriz);
    //
    //     $.ajax( {
    //         url: "../PHP/tabla-js/descarga_excel.php",
    //         type: "POST",
    //         data: {mattriz: mattriz},
    //         success: function(e){
    //             console.log('Descarga en proceso');
    //         }
    //     });
    // });
});
// $('select#tipo').on('change', function(e) {
//     let buscar = $('select#tipo').val();
//
//     console.log(buscar);
// });
// });
