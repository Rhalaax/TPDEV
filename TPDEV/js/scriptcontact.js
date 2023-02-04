/* Fonction pour le tremblement */
const h1 = document.querySelectorAll("h1");

h1.forEach(function(element) {
    element.addEventListener("mouseover", function(){
        element.classList.add("shake");
    });
    element.addEventListener("mouseout", function(){
        element.classList.remove("shake");
    });
});

