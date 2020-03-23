/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
     $(".pricing_table--btn").click(function(){
            var price = $(this).closest(".display_pricing--table").find(".pricing_table--price").text();
            document.getElementById("price").value = price;  
    });
});

