/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    $('.btn-save').click(function () {
        var full_name= $('#name').val();
        var nameReg= /^[a-zA-Z]+$/;
        if(!nameReg.test(full_name)){
            alert("Please enter correct name");
        }
        
        var address= $('#address').val();
        var addReg= /^[0-9a-zA-Z]+$/;
        if(!addReg.test(address)){
            alert("Please enter correct address");
        }
        
        var email= $('#email').val();
        var emailReg= /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
        if(!emailReg.test(email)){
            alert("Please enter correct email address");
        }
    });
});


