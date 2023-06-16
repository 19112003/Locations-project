
document.querySelector("#modifier-btn").addEventistener("click", function(){
   document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventistener("click", function(){
   document.querySelector(".popup").classList.remove("active");
});