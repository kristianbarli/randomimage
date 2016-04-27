

$(document).ready(function(){
            $.ajax({
                url: "randomimage.php",
                type: "post",
                dataType: "html"
                }).done(function(data){
                        $("body").attr("style", data);
                    });
            $(document).keypress(function(e){
                    if (e.which == 13) {
                        newImage();    
                    };
                });
});

var newImage = function() {
    $.ajax({
            url: "randomimage.php",
            type: "post",
             dataType: "html"
            }).done(function(data){
                 $("body").attr("style", data);
                    });
}