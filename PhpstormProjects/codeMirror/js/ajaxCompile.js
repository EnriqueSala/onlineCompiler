$(document).ready(function(){
    $("#form").submit(function(e){
        e.preventDefault();
        var data = $("#form").serialize();
        $.ajax({
            url:"compile.php",
            type: "POST",
            data: data,
            success: function (datos) {
                $("#output").html(datos);
            }

        });
    });
});
