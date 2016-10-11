/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// seta token de autenticação via ajax

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});




function delete_(route)
{


    if (confirm('Really delete?')) {
        $.ajax({
            type: "DELETE",
            url: route,
            success: function (result) {
            },
        });
        location.reload(1);

    }
}

