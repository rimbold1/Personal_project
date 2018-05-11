$(document).ready(function() {
    
    $("#form").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function() {
            alert("Повідомлення надіслано.");
        });
        return false;
    });

});
