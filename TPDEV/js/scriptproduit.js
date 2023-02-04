

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
/* Fonction compte a rebours promotions */
function startCountdown() {
    var endDate = new Date();
    endDate.setDate(endDate.getDate() + 30);
  
    var countdown = setInterval(function() {
      var currentDate = new Date();
      var days = Math.floor((endDate - currentDate) / (1000 * 60 * 60 * 24));
      var hours = Math.floor((endDate - currentDate) / (1000 * 60 * 60) % 24);
      var minutes = Math.floor((endDate - currentDate) / (1000 * 60) % 60);
      var seconds = Math.floor((endDate - currentDate) / 1000 % 60);
  
      if (days < 0 || hours < 0 || minutes < 0 || seconds < 0) {
        clearInterval(countdown);
        document.getElementById("countdown").innerHTML = "La promotion est terminée.";
      } else {
        document.getElementById("countdown").innerHTML = "La promotion 'USENSEIGNES' se termine dans " + days + " jours, " + hours + " heures, " + minutes + " minutes et " + seconds + " secondes.";
      }
    }, 1000);
  }

  window.onload = function() {
    startCountdown();
  };