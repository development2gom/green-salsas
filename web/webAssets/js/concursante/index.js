var btnSubmit = document.getElementById("btn-upload-image");
var btnLadda = '';


function validarImagen(input){
    if(!input.val()){
        swal("Espera", "Debes agregar un archivo", "warning");
        return false;
    }else{
        return true;
    }
}

$(document).ready(function(){

    $("#modal-carga").modal("show");

    btnLadda = Ladda.create(btnSubmit);

    $(btnSubmit).on("click", function(e){
        e.preventDefault();
        btnLadda.start();

        if(validarImagen($("#input-image-upload"))){
            $('#form-upload-image').submit();
        }else{
            btnLadda.stop();
        }
        
    });

    $('#form-upload-image').on('submit',(function(e) {
        e.preventDefault();
        
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                if(data.status=="success"){
                    swal("Perfecto", data.message, "success");

                    var template = '<div class="col-sm-12 col-md-6 col-lg-4">'+
                                        '<div class="card outline-dashed">'+
                                        '<div class="card-bg" style="background-image: url('+data.result.url+');"></div>'+
                                        '</div>'+
                                    '</div>';
                    $( template ).insertAfter( ".li-agregar" );
                    $(".dropify-clear").trigger("click");
                    
                }else{
                    swal("Espera", data.message, "error");
                }
                btnLadda.stop();
            },
            error: function(jqXHR, textStatus, errorThrown){
                swal("Espera", "Ocurrio un problema: "+textStatus, "error");
                btnLadda.stop();
            }
        });
    }));

});