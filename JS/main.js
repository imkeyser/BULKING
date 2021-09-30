$('document').ready(function(){
    $('.calculsForm').hide();
    $('#home-start-button').click(function(){
        $('.left-block').fadeOut(100);
        $('.calculsForm').fadeIn(900);
    });
});

function rtn() {
    window.location.replace("../");
}

function submitForm() {
    $('#calculs-form-2').submit();
}