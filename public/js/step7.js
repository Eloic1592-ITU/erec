// Step 7 Script

$(document).ready(function () {
  // Sélectionner le bouton "Continuer" à l'intérieur de #other-info-actions
  const otherInfoNextBtn = $("#other-info-actions .next-step");

  // Détecter les changements dans les champs de formulaire
  $(
    "#other-info-form input, #other-info-form select, #other-info-form textarea"
  ).on("change", function () {
    otherInfoNextBtn.prop("disabled", true);
  });

  // Règles de validation
  const otherInfoValidationRules = {
    "other_info[malagasy_reading_level]": {
      required: true,
    },
    "other_info[malagasy_writing_level]": {
      required: true,
    },
    "other_info[malagasy_speaking_level]": {
      required: true,
    },
    "other_info[french_reading_level]": {
      required: true,
    },
    "other_info[french_writing_level]": {
      required: true,
    },
    "other_info[french_speaking_level]": {
      required: true,
    },
    "other_info[english_reading_level]": {
      required: true,
    },
    "other_info[english_writing_level]": {
      required: true,
    },
    "other_info[english_speaking_level]": {
      required: true,
    },
    "other_info[microsoft_word_level]": {
      required: true,
    },
    "other_info[microsoft_excel_level]": {
      required: true,
    },
    "other_info[microsoft_powerPoint_level]": {
      required: true,
    },
    "other_info[microsoft_oneNote_level]": {
      required: true,
    },
    "other_info[microsoft_outlook_level]": {
      required: true,
    },
    "other_info[microsoft_publisher_level]": {
      required: true,
    },
    "other_info[microsoft_access_level]": {
      required: true,
    },
    "other_info[microsoft_visio_level]": {
      required: true,
    },
    "other_info[microsoft_project_level]": {
      required: true,
    },
  };

  // Messages de validation
  const otherInfoValidationMessages = {
    "other_info[malagasy_reading_level]": {
      required: "Veuillez sélectionner le niveau",
    },
    "other_info[malagasy_writing_level]": {
      required: "Veuillez sélectionner le niveau",
    },
    "other_info[malagasy_speaking_level]": {
      required: "Veuillez sélectionner le niveau",
    },
    "other_info[french_reading_level]": {
      required: "Veuillez sélectionner le niveau",
    },
    "other_info[french_writing_level]": {
      required: "Veuillez sélectionner le niveau",
    },
    "other_info[french_speaking_level]": {
      required: "Veuillez sélectionner le niveau.",
    },
    "other_info[english_reading_level]": {
      required: "Veuillez sélectionner le niveau.",
    },
    "other_info[english_writing_level]": {
      required: "Veuillez sélectionner le niveau.",
    },
    "other_info[english_speaking_level]": {
      required: "Veuillez sélectionner le niveau.",
    },
    "other_info[microsoft_word_level]": {
      required:
        "Veuillez sélectionner le niveau de compétence pour Microsoft Word.",
    },
    "other_info[microsoft_excel_level]": {
      required:
        "Veuillez sélectionner le niveau de compétence pour Microsoft Excel.",
    },
    "other_info[microsoft_powerPoint_level]": {
      required:
        "Veuillez sélectionner le niveau de compétence pour Microsoft PowerPoint.",
    },
    "other_info[microsoft_oneNote_level]": {
      required:
        "Veuillez sélectionner le niveau de compétence pour Microsoft OneNote.",
    },
    "other_info[microsoft_outlook_level]": {
      required:
        "Veuillez sélectionner le niveau de compétence pour Microsoft Outlook.",
    },
    "other_info[microsoft_publisher_level]": {
      required:
        "Veuillez sélectionner le niveau de compétence pour Microsoft Publisher.",
    },
    "other_info[microsoft_access_level]": {
      required:
        "Veuillez sélectionner le niveau de compétence pour Microsoft Access.",
    },
    "other_info[microsoft_visio_level]": {
      required:
        "Veuillez sélectionner le niveau de compétence pour Microsoft Visio.",
    },
    "other_info[microsoft_project_level]": {
      required:
        "Veuillez sélectionner le niveau de compétence pour Microsoft Project.",
    },
  };

  function checkLanguageFields() {
    let readingLevel = $("#other_info_other_language_reading_level")
      .val()
      .trim();
    let writingLevel = $("#other_info_other_language_writing_level")
      .val()
      .trim();
    let speakingLevel = $("#other_info_other_language_speaking_level")
      .val()
      .trim();
    let languageName = $("#other_info_other_language_name").val().trim();

    // Si l'un des champs de niveau de langue est rempli, rendre le champ de langue obligatoire
    if (readingLevel !== "" || writingLevel !== "" || speakingLevel !== "") {
      $("#other_info_other_language_name")
        .attr("required", "required")
        .rules("add", {
          required: true,
          messages: {
            required: "Veuillez entrer le nom de la langue.",
          },
        });
    } else {
      $("#other_info_other_language_name")
        .removeAttr("required")
        .rules("remove", "required");
    }

    // Si le champ de langue est vide, vider les champs de niveau de langue et enlever leur obligation

    if (languageName === "") {
      $("#other_info_other_language_reading_level")
        .val("")
        .removeClass("is-invalid")
        .removeAttr("required")
        .rules("remove", "required");
      $("#other_info_other_language_writing_level")
        .val("")
        .removeClass("is-invalid")
        .removeAttr("required")
        .rules("remove", "required");
      $("#other_info_other_language_speaking_level")
        .val("")
        .removeClass("is-invalid")
        .removeAttr("required")
        .rules("remove", "required");
      $("#other_info_other_language_name")
        .removeClass("is-invalid")
        .removeAttr("required")
        .rules("remove", "required");
    } else {
      // Si le champ de langue est non vide, rendre les champs de niveau de langue obligatoires
      $("#other_info_other_language_reading_level")
        .attr("required", "required")
        .rules("add", {
          required: true,
          messages: {
            required: "Veuillez sélectionner un niveau de lecture.",
          },
        });
      $("#other_info_other_language_writing_level")
        .attr("required", "required")
        .rules("add", {
          required: true,
          messages: {
            required: "Veuillez sélectionner un niveau.",
          },
        });
      $("#other_info_other_language_speaking_level")
        .attr("required", "required")
        .rules("add", {
          required: true,
          messages: {
            required: "Veuillez sélectionner un niveau.",
          },
        });
    }
  }

  // Ajouter des écouteurs d'événements sur les champs
  $("#other_info_other_language_name").on("input", function () {
    checkLanguageFields();
  });

  $(
    "#other_info_other_language_reading_level, #other_info_other_language_writing_level, #other_info_other_language_speaking_level"
  ).on("change", function () {
    checkLanguageFields();
  });

  $("#other-info-form").validate({
    rules: otherInfoValidationRules,
    messages: otherInfoValidationMessages,
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
      submitLoaderOn("other-info");

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
            $("#other-info-form").attr("action", response.redirectUrl);

            if (!response.isEdit) {
              otherInfoNextBtn.prop("disabled", false);
            }

            otherInfoNextBtn.prop("disabled", false);

            // Notification
            showAlert("", response.message, response.status);
            submitLoaderOff("other-info");
          } else {
            showAlert("", response.message, response.status);
            submitLoaderOff("other-info");
          }
        },
        error: (response) => {
          showAlert("", response.message, response.status);
          submitLoaderOff("other-info");
        },
      });
      return false;
    },
  });

  // Vérifier les champs de langue au chargement de la page
  checkLanguageFields();
});

// Le script du modal pour ajouter des skills supplementaire.
$(document).ready(function () {
  // Capture the form submission from the modal
  $("#submitAddOtherSkill").on("click", function () {
    // Get the value of the new skill from the input
    const newSkill = $("#other_skill").val().trim();

    // Check if the new skill is not empty
    if (newSkill !== "") {
      // Add the new skill to the other_info_other_skills select
      const newOption = new Option(newSkill, newSkill, true, true);
      $("#other_info_other_skills").append(newOption).trigger("change");

      // Clear the input field
      $("#other_skill").val("");

      // Close the modal
      $("#addOtherSkill").modal("hide");
    } else {
      alert("Veuillez saisir une compétence.");
    }
  });
});
