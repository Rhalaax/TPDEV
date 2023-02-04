function createScrollingMessage() {
    var messageBar = document.createElement("div");
    messageBar.classList.add("message-bar");
    messageBar.innerHTML = 'Préparez-vous à économiser gros avec notre dernière offre, utilisez le code "USENSEIGNES" et bénéficiez de 20% de réduction sur tous nos produits! Profitez-en ! :) ';
    messageBar.style.animation = "scroll-right 35s linear infinite";
    document.body.appendChild(messageBar);
  }
  
  createScrollingMessage();
  
// Fonction bouton remonter en haut de page
  function goToTop() {
    window.scrollTo(0, 0);
  }

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
/* Fonction bouton sondage  */
function survey() {
  var question = "Passez vous un bon moment ici  ?",
      answer = prompt(question);
      alert("Merci pour votre réponse ! Nous faisons de notre mieux pour apporter des améliorations.");
    };


/* Fonction modale cookie  */
    var cookieModal = document.getElementById("cookieModal");
var acceptBtn = document.getElementById("acceptBtn");
var declineBtn = document.getElementById("declineBtn");
var close = document.getElementsByClassName("close")[0];

acceptBtn.onclick = function() {
  // Code pour enregistrer le choix d'acceptation des cookies
  cookieModal.style.display = "none";
}

declineBtn.onclick = function() {
  // Code pour enregistrer le choix de refus des cookies
  cookieModal.style.display = "none";
}

close.onclick = function() {
  cookieModal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == cookieModal) {
    cookieModal.style.display = "none";
  }
}

// Afficher la modale au chargement de la page
window.onload = function() {
  cookieModal.style.display = "block";
}
