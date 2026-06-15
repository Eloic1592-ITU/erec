$(document).ready(function () {
  // Règles de validation
  const editProfileValidationRules = {
    "user[first_name]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "user[last_name]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "user[birth_date]": {
      required: true,
      date: true,
      customAgeValidation: true,
    },
    "user[cin]": {
      required: true,
    },
    "user[plainPassword]": {
      required: true,
    },
  };

  // Messages de validation
  const editProfileValidationMessages = {
    "user[first_name]": {
      required: "Veuillez entrer votre prénom.",
      minlength: "Votre prénom doit contenir au moins 2 caractères.",
      maxlength: "Votre prénom ne peut pas dépasser 255 caractères.",
    },
    "user[last_name]": {
      required: "Veuillez entrer votre nom.",
      minlength: "Votre nom doit contenir au moins 2 caractères.",
      maxlength: "Votre nom ne peut pas dépasser 255 caractères.",
    },
    "user[birth_date]": {
      required: "Veuillez entrer votre date de naissance.",
      date: "Veuillez entrer une date valide.",
      customAgeValidation:
        "Vous devez avoir au moins 18 ans pour vous inscrire.",
    },
    "user[cin]": {
      required: "Veuillez entrer votre CIN.",
    },
    "user[plainPassword]": {
      required: "Veuillez entrer votre mot de passe.",
    },
  };

  $("#edit-profile-form").validate({
    rules: editProfileValidationRules,
    messages: editProfileValidationMessages,
    errorElement: "div",
    errorClass: "invalid-feedback",
    errorPlacement: (error, element) => {
      // error.insertAfter(element);

      if (element.attr("name") === "user[plainPassword]") {
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
      submitLoaderOn("edit-profile");

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
            submitLoaderOff("edit-profile");
          }
        },
        error: (response) => {
          let errors = response.responseJSON.errors;
          errors.forEach((error) => {
            showAlert("", error, "error");
          });
          submitLoaderOff("edit-profile");
        },
      });
      return false; // Prevent default form submission
    },
    invalidHandler: function (event, validator) {
      submitLoaderOff("edit-profile");
    },
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Sélectionnez l'élément de l'erreur et le conteneur parent
  const errorElement = document.getElementById("user_plainPassword-error");
  const inputGroup = document.querySelector(".input-group.flex-nowrap");

  // Déplacez l'élément de l'erreur en dehors du conteneur parent et placez-le juste après
  if (errorElement && inputGroup) {
    inputGroup.parentNode.insertBefore(errorElement, inputGroup.nextSibling);
  }
});
