$(document).ready(function () {
  // Règles de validation
  const editPasswordValidationRules = {
    "user_password[plainPassword]": {
      required: true,
    },
    "user_password[newPassword][first]": {
      required: true,
      customPasswordValidation: true,
    },
    "user_password[newPassword][second]": {
      required: true,
      equalTo: "#user_password_newPassword_first",
    },
  };

  // Messages de validation
  const editPasswordValidationMessages = {
    "user_password[plainPassword]": {
      required: "Ce champ est requis",
    },
    "user_password[newPassword][first]": {
      required: "Ce champ est requis",
      customPasswordValidation:
        "Votre mot de passe doit contenir au moins 8 caractères, y compris une lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial.",
    },
    "user_password[newPassword][second]": {
      required: "Ce champ est requis",
      equalTo: "Les mots de passe ne correspondent pas.",
    },
  };

  $("#edit-password-form").validate({
    rules: editPasswordValidationRules,
    messages: editPasswordValidationMessages,
    errorElement: "div",
    errorClass: "invalid-feedback",
    errorPlacement: (error, element) => {
      // error.insertAfter(element);

      if (
        element.attr("name") === "user_password[plainPassword]" ||
        element.attr("name") === "user_password[newPassword][first]" ||
        element.attr("name") === "user_password[newPassword][second]"
      ) {
        error.appendTo(element.closest(".input-group").parent());
      } else {
        error.insertAfter(element);
      }
    },
    highlight: (element) => {
      $(element).addClass("is-invalid");
    },
    unhighlight: (element) => {
      $(element).removeClass("is-invalid");
    },
    submitHandler: function (form) {
      submitLoaderOn("edit-password");

      const formData = $(form).serialize();

      $.ajax({
        url: form.action,
        type: form.method,
        data: formData,
        success: (response) => {
          if (response.status === "success") {
            Swal.fire({
              title: "",
              text: response.message,
              icon: "success",
              confirmButtonText: "Fermer",
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = response.redirect_url; // Redirection après avoir cliqué sur Fermer
              }
            });
          } else {
            showAlert("", response.message, "error");
            submitLoaderOff("edit-password");
          }
        },
        error: (response) => {
          let errors = response.responseJSON.errors;
          errors.forEach((error) => {
            showAlert("", error, "error");
          });
          submitLoaderOff("edit-password");
        },
      });
      return false; // Prevent default form submission
    },
    invalidHandler: function (event, validator) {
      submitLoaderOff("edit-password");
    },
  });
});
