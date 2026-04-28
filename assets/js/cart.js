$(function(){

$(".qty-plus").click(function(){
let i=$(this).siblings(".qty");
i.val(parseInt(i.val())+1);
});

$(".qty-minus").click(function(){
let i=$(this).siblings(".qty");
if(i.val()>1)i.val(i.val()-1);
});

$(".add").click(function(){

let b=$(this);
let id=b.data("id");
let qty=b.closest(".card-body").find(".qty").val();

b.find(".text").hide();
b.find(".spinner-border").removeClass("d-none");

$.post("../actions/add_to_cart.php",{id:id,qty:qty},function(res){

$("#cart-count").text(res);

new bootstrap.Toast(document.getElementById('toast')).show();

b.find(".text").show();
b.find(".spinner-border").addClass("d-none");

});

});

});