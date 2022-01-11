$(document).ready(function() {  
    $('#tipo_solicitud').change(function(){
        var tipo = $(this).find("option:selected").attr('value');

        switch (tipo) { 
            case 'Diseño': 
                $("#diseño").removeClass("d-none");
                break;
            default:
                alert('Nobody Wins!');
        }
    });
});