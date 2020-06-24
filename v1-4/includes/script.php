
    <script src='js/vendor/modernizr.custom.32229-2.8-respondjs-1-4-2.js'></script>
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src='js/vendor/jquery.jpanelmenu.min.js'></script>
    <script type='application/javascript' src='js/vendor/fastclick.min.js'></script>
    
    <script src='js/main.js'></script>

    <script>
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        if(fileName == '')
        {
            alert("Please Select Image");
            return false;
        }
        else{
            var extension = $(this).val().split('.').pop().toLowerCase();
            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
            {
                alert("Invalid File Image");
                $(this).val('');
                return false;
            }
        }
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        function filePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.custom-file + img').remove();
                    $(".custom-file").after('<img src="'+e.target.result+'" class="" style="display:block; margin-left: auto;  margin-right: auto; margin-top:2rem;margin-bottom:2rem; height : 70%; width : 35%;" />');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        filePreview(this);
        });
        </script>