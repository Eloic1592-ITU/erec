// Chargement pour faire patienter l'utilisateur
document.addEventListener("DOMContentLoaded", function () {
  let loaderWrapper = document.getElementById("loader-wrapper");
  let tableBody = document.querySelector("#data-list tbody");

  // Cacher le loader lorsque la page est chargée
  window.addEventListener("load", function () {
    loaderWrapper.style.display = "none";
  });
});
