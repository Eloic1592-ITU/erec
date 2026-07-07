// Step 9 Script

// Fonction pour obtenir la date d'aujourd'hui formatée en français
const getTodayFormatted = () => {
  const today = new Date();
  const options = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
  };
  return today.toLocaleDateString("fr-FR", options);
};

// Fonction pour mettre à jour le contenu d'un élément avec la date d'aujourd'hui
const updateElementWithDate = (selector) => {
  const formattedDate = getTodayFormatted();
  $(selector).text(formattedDate);
};

// Quand le document est prêt, met à jour le contenu du span
$(document).ready(function () {
  updateElementWithDate(".commitment-date");
});

$(document).ready(function () {
  // Sélectionner le bouton "Valider ma candidature" à l'intérieur de #engagement-actions
  const engagementNextBtn = $("#engagement-actions .next-step");

  // Détecter les changements dans les champs de formulaire
  $("#engagement-form input, #engagement-form select").on(
    "change", 
    function () {
      engagementNextBtn.addClass('disabled');
      engagementNextBtn.attr('href', '#');
    }
  );

  // Règles de validation
  const engagementValidationRules = {
    "engagement[city]": {
      required: true,
    },
  };

  // Messages de validation
  const engagementValidationMessages = {
    "engagement[city]": {
      required: "Veuillez entrer une ville.",
    },
  };

  $("#engagement-form").validate({
    rules: engagementValidationRules,
    messages: engagementValidationMessages,
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
      submitLoaderOn("engagement");

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
            $("#engagement-form").attr("action", response.redirectUrl);

            // if (!response.isEdit) {
            //   engagementNextBtn.removeClass('disabled');
            //   engagementNextBtn.attr('href', response.detailsUrl);
            // }

            engagementNextBtn.removeClass('disabled');
            engagementNextBtn.attr('href', response.detailsUrl);

            // Notification
            showAlert("", response.message, response.status);
            submitLoaderOff("engagement");
          } else {
            showAlert("", response.message, response.status);
            submitLoaderOff("engagement");
          }
        },
        error: (response) => {
          showAlert("", response.message, response.status);
          submitLoaderOff("engagement");
        },
      });
      return false;
    },
  });
});
