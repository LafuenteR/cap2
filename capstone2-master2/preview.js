    function filePreview(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#uploadform + img').remove();
                $('#uploadform').after('<img src="'+e.target.result+'" width="100%" height="auto"/>');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#fileToUpload').change(function(){
        filePreview(this);
    });
