$(document).ready(function(){
    //Submit form send mail
    $("#form-send-mail").on('submit', function(e){
        e.preventDefault();
        if ($('#cbx_accept_privacy').is(':checked')) {
            swal({
                'title': 'Enviando',
                'text': 'Por favor espere un momento',
                'showConfirmButton': false
            });
            $.ajax({
                type: "POST",
                url: $("#form-send-mail").prop('action'),
                data: $("#form-send-mail").serialize(),
                success: function(data){
                    $("#form-send-mail")[0].reset();
                    swal('Bien',data,'success');
                },
                error: function(error) { 
                    console.log(error); 
                    swal('Error','Ocurrió un error durante el proceso por favor intente más tarde.','error');
                }
            });
        }else{
            swal('Aviso',"Para continuar debe aceptar los términos y condiciones",'warning');
        }
        
    });
    //Start Carrusel
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3,
                nav:true
            }
        }
    });
    //End Carrucel
});