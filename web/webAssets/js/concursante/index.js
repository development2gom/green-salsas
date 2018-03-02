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

                    var template = '<li><div class="card card-shadow">'+
                    '<figure class="card-img-top overlay-hover overlay">'+
                    '<img class="overlay-figure overlay-scale" src="'+data.result.url+'"'+
                    'alt="...">'+
                    '<figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">'+
                        '<a class="icon fa-search" href="'+data.result.url+'">></a>'+
                    '</figcaption>'+
                    '</figure>'+
                    '<div class="card-block">'+
                    '<h4 class="card-title">'+data.result.date+'</h4>'+
                    '</div>'+
                    '</div>'+
                    '</li>';
                    $( template ).insertAfter( ".li-agregar" );
                    
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