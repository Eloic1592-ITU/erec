const refreshAllTelInput = () => {
  document.querySelectorAll(".tel").forEach((tel) => {
    window.intlTelInput(tel, {
      initialCountry: "MG",
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/utils.js",
    });
  });
};

// Initialisation les d'intlTelInput
refreshAllTelInput();
