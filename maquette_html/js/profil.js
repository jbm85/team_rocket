$(document).ready(function(){

	$('.list-add-events').click(function(e){
		e.preventDefault();
		$('.add-events').slideToggle();
	});

	$('.list-past-events').click(function(e){
		e.preventDefault();
		$('.past-events').slideToggle();
	});

	$('table').fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});

	$(".well-sm").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                $("#previewImage").css({"background-image":"url("+this.result+")"});
                $("#previewImage img").css({"display":"none"});
            }
        }
    });
});