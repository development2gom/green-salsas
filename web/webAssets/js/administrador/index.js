$(document).on({
    "click": function (e) {
        e.preventDefault();
        var elemento = $(this);
        var token = elemento.data("token");
        swal({
            title: "Confirmación",
            text: "¿Estas seguro de hacer ganadora esta fotografía?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-warning",
            confirmButtonText: "Sí, ganadora",
            cancelButtonText: "No, seguire revisando",
            closeOnConfirm: true,
            //closeOnCancel: false
        },
            function () {

                $.ajax({
                    url: baseUrl + "administrador/ganadora?token=" + token,
                    success: function (r) {
                        if (r.status == "success") {
                            elemento.replaceWith(r.result);
                            $("#contenedor-imagen-"+token).prepend('<div class="winner">Ganadora</div>');
                        }
                    },
                    error: function (r) {

                    }
                });
                return false;
            });
    }
}, ".mark-winner");

$(document).on({
    "click":function(e){
        e.preventDefault();
        var elemento = $(this);
        var token = elemento.data("token");
        swal({
            title: "Confirmación",
            text: "¿Estas seguro de quitar la marca ganadora?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-warning",
            confirmButtonText: "Sí, no lo merece",
            cancelButtonText: "No, es una foto ganadora",
            closeOnConfirm: true,
            //closeOnCancel: false
        },
            function () {
                $.ajax({
                    url: baseUrl + "administrador/des-ganadora?token=" + token,
                    success: function (r) {
                        if (r.status == "success") {
                            elemento.replaceWith(r.result);
                            $("#contenedor-imagen-"+token+" .winner").remove();
                        }
                    },
                    error: function (r) {

                    }
                });
                return false;
            });
    }

}, ".unmark-winner");