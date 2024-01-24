var el1 = document.querySelector(".hero-unit");
el1.addEventListener("mousedown", function(event) {
   console.log(event.target);
});

var el2 = document.querySelector(".hero-unit-button");
el2.addEventListener("mousedown", function(event) {
   console.log(event.target);
   if (event.which == 1) {
   	event.stopPropagation();
   }
});