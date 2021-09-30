$('document').ready(function(){
    $('.calculsForm').hide();
    $('#home-start-button').click(function(){
        $('.left-block').fadeOut(100);
        $('.calculsForm').fadeIn(900);
    });
    $('#calculs-form-2').submit(function() {
        return false;
    });
});

function rtn() {
    window.location.replace("../");
}