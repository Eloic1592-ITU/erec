$(document).ready(function () {
  // Règles de validation
  const registrationValidationRules = {
    "registration[first_name]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "registration[last_name]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "registration[birth_date]": {
      required: true,
      date: true,
      customAgeValidation: true,
    },
    "registration[cin]": {
      required: true,
      validCin: true,
    },
    "registration[email]": {
      required: true,
      email: true,
      customEmailValidation: true,
    },
  };

  // Messages de validation
  const registrationValidationMessages = {
    "registration[first_name]": {
      required: "Veuillez entrer votre prénom.",
      minlength: "Votre prénom doit contenir au moins 2 caractères.",
      maxlength: "Votre prénom ne peut pas dépasser 255 caractères.",
    },
    "registration[last_name]": {
      required: "Veuillez entrer votre nom.",
      minlength: "Votre nom doit contenir au moins 2 caractères.",
      maxlength: "Votre nom ne peut pas dépasser 255 caractères.",
    },
    "registration[birth_date]": {
      required: "Veuillez entrer votre date de naissance.",
      date: "Veuillez entrer une date valide.",
      customAgeValidation:
        "Vous devez avoir au moins 18 ans pour vous inscrire.",
    },
    "registration[cin]": {
      required: "Veuillez entrer votre CIN.",
      validCin: "Le numéro CIN doit contenir exactement 12 chiffres.",
    },
    "registration[email]": {
      required: "Veuillez entrer une adresse email.",
      email: "Veuillez entrer une adresse email valide.",
      customEmailValidation:
        "L'adresse email saisie doit contenir un @ et un .",
    },
  };

  $("#registration-form").validate({
    rules: registrationValidationRules,
    messages: registrationValidationMessages,
    errorElement: "div",
    errorClass: "invalid-feedback",
    errorPlacement: (error, element) => {
      error.insertAfter(element);
    },
    highlight: (element) => {
      $(element).addClass("is-invalid");
    },
    unhighlight: (element) => {
      $(element).removeClass("is-invalid");
    },
    submitHandler: function (form) {
      submitLoaderOn("registration");
      form.submit();
    },
    invalidHandler: function (event, validator) {
      submitLoaderOff("registration");
    },
  });
});
