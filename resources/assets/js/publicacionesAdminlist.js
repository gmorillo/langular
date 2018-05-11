$(document).ready(function() {
    document.getElementById('pro-image').addEventListener('change', readImage, false);
    
    $( ".preview-images-zone" ).sortable();
    
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });
});
var num = 1;
function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image') && i==8) continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '"><i class="fa fa-trash" title="eliminar imágen"></i></div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '" class="guillermomorillo"></div>' +
                            '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
    } else {
        console.log('Browser not support');
    }
}

