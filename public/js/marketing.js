document.getElementById("close-alert").addEventListener("click", () => {
  document.getElementById("alert").parentElement.parentElement.style.display = "none";
});

document.getElementById("seen").addEventListener("change", function (e) {
  const bouton = document.getElementById("bouton-acces");
  bouton.disabled = !this.checked;
});
