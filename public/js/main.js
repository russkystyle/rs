$(document).ready(function(){
    var letterText = $("#letter_text"),
        letterButton = $("#letter_button");

    $(letterButton).on('click', function(e){
        $.post({
            url: 'test',
            data: {'email': letterText.val()},
            success: function(result){
                console.log(result.email);
            }
        });
    });
});