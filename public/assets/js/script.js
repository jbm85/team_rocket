$(document).ready(function(){

    // Affichage du menu de navigation en format smartphone :
    $('.fa-bars').click(function(event){
        event.preventDefault();
        $('#nav_hide').toggle();
    });
    $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                $("#sectionPhotoProfil").css("background-image", "url("+this.result+")");
            }
        }
    });
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        language: "fr"
    });

    // Affichage d'un bouton pour retourner en haut de la page si la hauteur de la page est superieure à 1024px et la largeur est superieure à 720px:
    if ($(window).height()>1024 && $(window).width()>720){
        $('footer').append('<a href="#main_nav" id="backTop">Retour en haut</a>');
    }

    // Defilement de la page WEB pour remonter vers le haut :
    $('#backTop').click(function(event){
        event.preventDefault();
        $('body').animate({ scrollTop: $('#main_nav').offset().top });
    });

})
