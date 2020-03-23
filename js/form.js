/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function() {
    $(".btn-primary").click(function(e){
        e.preventDefault();
        var city= $("#city").val();
        var cityReg=/^[A-Za-z]+$/;
        if(!cityReg.test(city)){
            console.log(city);
            $('.error-msg').css('display','block');
        }
    });
});