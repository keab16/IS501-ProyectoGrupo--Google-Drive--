$("#drop_zone").click(function(){
	var el = document.getElementById("fileElem");
	if (el) {
	el.click();
	}
});

var srcImagen = ""; 

$(document).on('change','#fileElem',function(){
	if(this.files && this.files[0]){
    // Creamos la 
		var img = $('<img style="width: 232px;">');
	// Asignamos el atributo source , haciendo uso del método createObjectURL
		srcImagen = URL.createObjectURL(this.files[0]);
		img.attr('src', URL.createObjectURL(this.files[0]));
    // Añadimos al Div
	  $('#preview').html(img);
	}
});

function handleFileSelect(evt) {
    evt.stopPropagation();
    evt.preventDefault();

    var files = evt.dataTransfer.files; // FileList object.

    console.log(files);

    // files is a FileList of File objects. List some properties.
    for (var i = 0, f; f = files[i]; i++) {

        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        reader.onload = (function(theFile) {
            return function(e) {

            $("#preview").html(['<img style="width: 234px;" src="', e.target.result,
                                    '" title="', escape(theFile.name), '"/>'].join(''));
            };
        })(f);

       reader.readAsDataURL(f);
     }
    }

  function handleDragOver(evt) {
    evt.stopPropagation();
    evt.preventDefault();
    evt.dataTransfer.dropEffect = 'copy'; 
  }

  var dropZone = document.getElementById('drop_zone');
  dropZone.addEventListener('dragover', handleDragOver, false);
  dropZone.addEventListener('drop', handleFileSelect, false);
