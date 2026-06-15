// Step 1 Script

$(document).ready(function () {
  // Sélectionner le bouton "Continuer" à l'intérieur de #job-application-actions
  const jobApplicationNextBtn = $("#job-application-actions .next-step");

  // Détecter les changements dans les champs de formulaire
  $(
    "#job-application-form input, #job-application-form select, #job-application-form textarea"
  ).on("change", function () {
    jobApplicationNextBtn.prop('disabled', true);
  });

  // Règles de validation
  const jobApplicationValidationRules = {
    "job_application[primary_location]": {
      required: true,
    },
  };

  // Messages de validation
  const jobApplicationValidationMessages = {
    "job_application[primary_location]": {
      required: "Veuillez ajouter un lieu d'affectation.",
    },
  };

  $("#job-application-form").validate({
    rules: jobApplicationValidationRules,
    messages: jobApplicationValidationMessages,
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
      submitLoaderOn("job-application");

      const formData = $(form).serialize();

      $.ajax({
        url: form.action,
        type: form.method,
        data: formData,
        success: (response) => {
          if (response.status === "success") {
            
            // Changer l'action du formulaire d'ajout en action pour le formulaire d'edition
            $("#job-application-form").attr("action", response.redirectUrl);

            if (!response.isEdit) {
              jobApplicationNextBtn.prop('disabled', false);
            }

            jobApplicationNextBtn.prop('disabled', false);

            // Notification
            showAlert("", response.message, response.status);
            submitLoaderOff("job-application");
          } else {
            showAlert("", response.message, response.status);
            submitLoaderOff("job-application");
          }
        },
        error: (response) => {
          let errors = response.responseJSON.errors;
          errors.forEach((error) => {
            showAlert("", error, "error");
          });
          submitLoaderOff("job-application");
        },
      });
      return false;
    },
  });
});
