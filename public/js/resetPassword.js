$(document).ready(function () {
  // Règles de validation
  const resetPasswordValidationRules = {
    "reset_password[plainPassword]": {
      required: true,
      customPasswordValidation: true,
    },
  };

  // Messages de validation
  const resetPasswordValidationMessages = {
    "reset_password[plainPassword]": {
      required: "Vous avez oublié de saisir votre nouveau mot de passe.",
      customPasswordValidation:
        "Votre mot de passe doit contenir au moins 8 caractères, y compris une lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial.",
    },
  };

  $("#reset-password-form").validate({
    rules: resetPasswordValidationRules,
    messages: resetPasswordValidationMessages,
    errorElement: "div",
    errorPlacement: (error, element) => {
      // Ne rien faire ici pour ne pas afficher les erreurs sous les champs
    },
    highlight: (element) => {
      // Ne rien faire ici pour ne pas appliquer de style Bootstrap
    },
    unhighlight: (element) => {
      // Ne rien faire ici pour ne pas appliquer de style Bootstrap
    },
    showErrors: function (errorMap, errorList) {
      $("#validation-alert").addClass("d-none").html("");
      if (errorList.length > 0) {
        $("#validation-alert").removeClass("d-none").html(errorList[0].message);
      }
      this.defaultShowErrors();
    },
    submitHandler: function (form) {
      submitLoaderOn("reset-password");
      form.submit();
    },
    invalidHandler: function (event, validator) {
      submitLoaderOff("reset-password");
    },
  });
});
