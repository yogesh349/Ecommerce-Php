
$("#ham_img").click(function(e){
    console.log("clicked");
    e.preventDefault();
    $("#ham-items").toggle(10,function(){
        $("#ham-items").css('display','block');
        console.log("Yep clicked");
    });
})