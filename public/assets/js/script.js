$(document).ready(function(){

    // Affichage du menu de navigation en format smartphone :
    $('.fa-bars').click(function(event){
        event.preventDefault();
        $('#nav_hide').slideToggle();
    });

    // Defilement de la page WEB pour remonter vers le haut de page :
    $('footer').append('<a href="#main_nav" id="backTop">Retour en haut</a>');
    $('#backTop').click(function(event){
        event.preventDefault();
        $('body, html').animate({scrollTop:$('#main_nav').offset().top});
    });

    // Chargement de la photo de profil en preview :
    $("#uploadFile").on("change", function() {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () { // set image data as background of div
                $("#sectionPhotoProfil").css("background-image", "url(" + this.result + ")");
            }
        }
    });

    // Calendrier pour le formulaire d'inscriptoin :
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        language: "fr"
    });

    // Detection de scroll :
    if ($(window).scrollTop()>200){ //TODO: A revoir
        alert('detection scroll');
    }

})
