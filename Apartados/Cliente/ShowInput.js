$(function(){
    $(".checkme").click(function(event) {
        var x = $(this).is(':checked')
        if (x == true){
            $(this).parents(".checkbox-card").find('.recursos-box').show()
        }
        else{
            $(this).parents(".checkbox-card").find('.recursos-box').hide()
        }
    })
})
$(function(){
    $(".checkme2").click(function(event) {
        var x = $(this).is(':checked')
        if (x == true){
            $(this).parents(".checkbox-card").find('.recursos-box2').show()
        }
        else{
            $(this).parents(".checkbox-card").find('.recursos-box2').hide()
        }
    })
})
$(function(){
    $(".checkme3").click(function(event) {
        var x = $(this).is(':checked')
        if (x == true){
            $(this).parents(".checkbox-card").find('.recursos-box3').show()
        }
        else{
            $(this).parents(".checkbox-card").find('.recursos-box3').hide()
        }
    })
})
$(function(){
    $(".checkme4").click(function(event) {
        var x = $(this).is(':checked')
        if (x == true){
            $(this).parents(".checkbox-card").find('.recursos-box4').show()
        }
        else{
            $(this).parents(".checkbox-card").find('.recursos-box4').hide()
        }
    })
})
$(function(){
    $(".checkme5").click(function(event) {
        var x = $(this).is(':checked')
        if (x == true){
            $(this).parents(".checkbox-card").find('.recursos-box5').show()
        }
        else{
            $(this).parents(".checkbox-card").find('.recursos-box5').hide()
        }
    })
})
$(function(){
    $(".checkme6").click(function(event) {
        var x = $(this).is(':checked')
        if (x == true){
            $(this).parents(".checkbox-card").find('.recursos-box6').show()
        }
        else{
            $(this).parents(".checkbox-card").find('.recursos-box6').hide()
        }
    })
})
$(function(){
    $(".checkme7").click(function(event) {
        var x = $(this).is(':checked')
        if (x == true){
            $(this).parents(".checkbox-card").find('.recursos-box7').show()
        }
        else{
            $(this).parents(".checkbox-card").find('.recursos-box7').hide()
        }
    })
})
$(function(){
    $(".checkme8").click(function(event) {
        var x = $(this).is(':checked')
        if (x == true){
            $(this).parents(".checkbox-card").find('.recursos-box8').show()
        }
        else{
            $(this).parents(".checkbox-card").find('.recursos-box8').hide()
        }
    })
})
$(function(){
    $(".checkme9").click(function(event) {
        var x = $(this).is(':checked')
        if (x == true){
            $(this).parents(".checkbox-card").find('.recursos-box9').show()
        }
        else{
            $(this).parents(".checkbox-card").find('.recursos-box9').hide()
        }
    })
})
$(function(){
    $(".checkme10").click(function(event) {
        var x = $(this).is(':checked')
        if (x == true){
            $(this).parents(".checkbox-card").find('.recursos-box10').show()
        }
        else{
            $(this).parents(".checkbox-card").find('.recursos-box10').hide()
        }
    })
})
$(function(){
    $(".checkme11").click(function(event) {
        var x = $(this).is(':checked')
        if (x == true){
            $(this).parents(".checkbox-card").find('.recursos-box11').show()
        }
        else{
            $(this).parents(".checkbox-card").find('.recursos-box11').hide()
        }
    })
})

$(document).ready(function(){

    var serv = $('#listaservicioV')

    $('#listaservicio').change(function(){
        var listaservicio = $(this).val()

        $.ajax({
            data: {listaservicio:listaservicio},
            dataType: 'html',
            type: 'POST',
            url: 'get_listaservicioV.php',

            }).done(function(data){
                serv.html(data)
            })
    })

})