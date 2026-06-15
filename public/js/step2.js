// Step 2 Script

$(document).ready(function () {
  // Sélectionner le bouton "Continuer" à l'intérieur de #profile-actions
  const profileNextBtn = $("#profile-actions .next-step");

  // Détecter les changements dans les champs de formulaire
  $("#profile-form input, #profile-form select, #profile-form textarea").on(
    "change",
    function () {
      profileNextBtn.prop('disabled', true);
    }
  );

  // Règles de validation
  const profileValidationRules = {
    "profile[civility]": {
      required: true,
    },
    "profile[birth_country]": {
      required: true,
    },
    "profile[birth_city]": {
      required: true,
    },
    "profile[cin_issue_date]": {
      required: true,
      date: true,
    },
    "profile[cin_issue_place]": {
      required: true,
    },
    "profile[address]": {
      required: true,
    },
    "profile[postal_code]": {
      required: true,
    },
    "profile[city]": {
      required: true,
    },
    "profile[country]": {
      required: true,
    },
    "profile[nationality]": {
      required: true,
    },
    "profile[marital_status]": {
      required: true,
    },
    "profile[number_of_children]": {
      required: true,
      digits: true,
    },
    "profile[phone1]": {
      required: true,
    },
  };

  // Messages de validation
  const profileValidationMessages = {
    "profile[civility]": {
      required: "Veuillez choisir votre civilité.",
    },
    "profile[birth_country]": {
      required: "Veuillez entrer votre pays de naissance.",
    },
    "profile[birth_city]": {
      required: "Veuillez entrer votre ville de naissance.",
    },
    "profile[cin_issue_date]": {
      required: "Veuillez entrer la date d'émission de votre CIN.",
      date: "Veuillez entrer une date valide.",
    },
    "profile[cin_issue_place]": {
      required: "Veuillez entrer le lieu d'émission de votre CIN.",
    },
    "profile[address]": {
      required: "Veuillez entrer votre adresse.",
    },
    "profile[postal_code]": {
      required: "Veuillez entrer votre code postal.",
    },
    "profile[city]": {
      required: "Veuillez entrer votre ville.",
    },
    "profile[country]": {
      required: "Veuillez entrer votre pays.",
    },
    "profile[nationality]": {
      required: "Veuillez entrer votre nationalité.",
    },
    "profile[marital_status]": {
      required: "Veuillez choisir votre état civil.",
    },
    "profile[number_of_children]": {
      required: "Veuillez entrer le nombre d'enfants.",
      digits: "Veuillez entrer un nombre valide.",
    },
    "profile[phone1]": {
      required: "Veuillez entrer votre numéro de téléphone.",
    },
  };

  // Validate phone number
  $('#profile-form input.tel').off('keydown').on('keydown', function(event){
    var key = event.keyCode;
    if ((key >= 48 && key <= 57) || (key >= 96 && key <= 105) || key == 32 || key == 8 || key == 46 || key == 37 || key == 39 || key == 107) {

    } else {
      event.preventDefault();
    }
  });

  $("#profile-form").validate({
    rules: profileValidationRules,
    messages: profileValidationMessages,
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
      submitLoaderOn("profile");

      const formData = new FormData(form);

      $.ajax({
        url: form.action,
        type: form.method,
        data: formData,
        processData: false,
        contentType: false,
        success: (response) => {
          if (response.status === "success") {
            // Changer l'action du formulaire d'ajout en action pour le formulaire d'edition
            $("#profile-form").attr("action", response.redirectUrl);

            if (!response.isEdit) {
              profileNextBtn.prop('disabled', false);
            }

            profileNextBtn.prop('disabled', false);

            // Notification
            showAlert("", response.message, response.status);
            submitLoaderOff("profile");
          } else {
            showAlert("", response.message, response.status);
            submitLoaderOff("profile");
          }
        },
        error: (response) => {
          showAlert("", response.message, response.status);
          submitLoaderOff("profile");
        },
      });
      return false;
    },
  });
});
