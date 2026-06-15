// Step 8 Script

$(document).ready(function () {
  // Sélectionner le bouton "Continuer" à l'intérieur de #document-actions
  const documentNextBtn = $("#document-actions .next-step");

  // Détecter les changements dans les champs de formulaire
  $("#document-form input").on(
    "change", 
    function () {
      documentNextBtn.prop('disabled', true);
    }
  );

  // Règles de validation
  const documentValidationRules = {
    "document[cv]": {
      required: true,
      fileType: "image/jpeg,image/png,application/pdf",
      maxFileSize: 2 * 1024 * 1024, // 2 MB in bytes
    },
    "document[lm]": {
      required: true,
      fileType: "image/jpeg,image/png,application/pdf",
      maxFileSize: 2 * 1024 * 1024, // 2 MB in bytes
    },
  };

  // Messages de validation
  const documentValidationMessages = {
    "document[cv]": {
      required: "Veuillez enregistrez votre CV.",
      fileType: "Veuillez télécharger un fichier au format .jpg, .png ou .pdf.",
      maxFileSize: "La taille du fichier ne doit pas dépasser 2 MB.",
    },
    "document[lm]": {
      required: "Veuillez votre lettre de motivation.",
      fileType: "Veuillez télécharger un fichier au format .jpg, .png ou .pdf.",
      maxFileSize: "La taille du fichier ne doit pas dépasser 2 MB.",
    },
  };

  $("#document-form").validate({
    rules: documentValidationRules,
    messages: documentValidationMessages,
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
      submitLoaderOn("document");

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
            $("#document-form").attr("action", response.redirectUrl);

            if (!response.isEdit) {
              documentNextBtn.prop('disabled', false);
            }

            documentNextBtn.prop('disabled', false);

            // Notification
            showAlert("", response.message, response.status);
            submitLoaderOff("document");
          } else {
            showAlert("", response.message, response.status);
            submitLoaderOff("document");
          }
        },
        error: (response) => {
          showAlert("", response.message, response.status);
          submitLoaderOff("document");
        },
      });
      return false;
    },
  });
});
