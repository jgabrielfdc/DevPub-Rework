$(document).ready(function(){
    $('#login').ready(function(){
        $("#login span#switch").on("click",function(){
            $("#login").addClass("d-lg-none");
            $("#cadastro").removeClass("d-lg-none");
        })
    })
    
    $('#cadastro').ready(function(){
        $("#cadastro span#switch").on("click",function(){
            $("#cadastro").addClass("d-lg-none");
            $("#login").removeClass("d-lg-none");
        })
    })
})