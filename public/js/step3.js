// Step 3 Script

$(document).ready(function () {
  // Sélectionner le bouton "Continuer" à l'intérieur de #profile-actions
  const educationNextBtn = $("#education-actions .next-step");

  // Nombre limite
  const educationslimit = 4;

  // Gerer les "other-field-of-study"
  function setupOtherFieldOfStudy() {
    // Value de l'option "Autre"
    const autreFieldvalue = "4";

    // Init
    const educationForms = $('form[id^="education-"] [data-toggle]');
    educationForms.each(function () {
      if (this.getAttribute("data-toggle") !== "new") {
        let fieldId = this.getAttribute("data-toggle");
        let fieldvalue = this.value;
        if (fieldvalue === autreFieldvalue) {
          $(`.other-field-of-study-${fieldId}`).closest(".row").show();
        } else {
          $(`.other-field-of-study-${fieldId}`).closest(".row").hide();
        }
      }
    });

    // Gerer les "other-field-of-study" Pour le formulaire d'ajout (nouveau diplôme)
    const newFieldOfStudySelect = $('#education-new [data-toggle="new"]');
    newFieldOfStudySelect.on("change", function () {
      if (this.value === autreFieldvalue) {
        $(`.other-field-of-study-new`).closest(".row").show();
      } else {
        $(`.other-field-of-study-new`).val("");
        $(`.other-field-of-study-new`).closest(".row").hide();
      }
    });

    // Gerer les "other-field-of-study" Pour les formulaires d'édition des diplômes existants
    $('form[id^="education-"]').each(function () {
      const dataToggle = $(this).find("[data-toggle]").attr("data-toggle");

      $(this)
        .find("[data-toggle]")
        .on("change", function () {
          if (dataToggle !== "new") {
            let fieldValue = $(this).val();
            console.log(fieldValue);
            if (fieldValue === autreFieldvalue) {
              $(`.other-field-of-study-${dataToggle}`).closest(".row").show();
            } else {
              $(`.other-field-of-study-${dataToggle}`).val("");
              $(`.other-field-of-study-${dataToggle}`).closest(".row").hide();
            }
          }
        });
    });
  }

  // Fonction pour limiter le nombre d'éléments ajoutés
  function educationLimitList(limit) {
    // Formulaire d'ajout
    $(".new-education-form").show();

    // Limiter le nombre d'éléments ajoutés
    if ($(".education-form").length >= limit) {
      $(".new-education-form").hide();
    } else {
      $(".new-education-form").show();
    }
  }

  setupOtherFieldOfStudy();

  educationLimitList(educationslimit);

  // Fonction pour désactiver les options sélectionnées dans les autres selects
  function disableSelectedOptions() {
    // Récupérer toutes les options et les activer
    $('select[name="education[field_of_study]"] option').prop(
      "disabled",
      false
    );

    // Pour chaque select, récupérer la valeur sélectionnée et désactiver cette option dans les autres selects
    $('select[name="education[field_of_study]"]').each(function () {
      var selectedValue = $(this).val();
      if (selectedValue) {
        $('select[name="education[field_of_study]"]')
          .not(this)
          .find('option[value="' + selectedValue + '"]')
          .prop("disabled", true);
      }
    });
  }

  // Appliquer la fonction lors du chargement de la page
  disableSelectedOptions();

  // Appliquer la fonction chaque fois qu'une option est sélectionnée
  $(document).on(
    "change",
    'select[name="education[field_of_study]"]',
    function () {
      disableSelectedOptions();
    }
  );

  // Règles de validation
  const educationValidationRules = {
    "education[degree]": {
      required: true,
    },
    "education[field_of_study]": {
      required: true,
    },
    "education[specialty]": {
      required: true,
    },
    "education[institution]": {
      required: true,
    },
    "education[graduation_year]": {
      required: true,
      digits: true,
      minlength: 4,
      maxlength: 4,
      validYear: true,
    },
    "education[degreeFile]": {
      required: true,
      fileType: "image/jpeg,image/png,application/pdf",
      maxFileSize: 2 * 1024 * 1024, // 2 MB in bytes
    },
  };

  // Messages de validation
  const educationValidationMessages = {
    "education[degree]": {
      required: "Veuillez saisir votre diplôme.",
    },
    "education[field_of_study]": {
      required: "Veuillez sélectionner votre domaine d'études.",
    },
    "education[specialty]": {
      required: "Veuillez saisir votre spécialité.",
    },
    "education[institution]": {
      required: "Veuillez saisir votre institution.",
    },
    "education[graduation_year]": {
      required: "Veuillez saisir l'année d'obtention de votre diplôme.",
      digits: "Veuillez saisir une année valide.",
      minlength: "Veuillez saisir une année valide",
      maxlength: "Veuillez saisir une année valide",
      validYear: "Veuillez saisir une année valide",
    },
    "education[degreeFile]": {
      required: "Veuillez enregistrez une copie du diplôme.",
      fileType: "Veuillez télécharger un fichier au format .jpg, .png ou .pdf.",
      maxFileSize: "La taille du fichier ne doit pas dépasser 2 MB.",
    },
  };

  // Ajout
  $("#education-new").validate({
    rules: educationValidationRules,
    messages: educationValidationMessages,
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
      submitLoaderOn("education-new");

      const formData = new FormData(form);

      $.ajax({
        url: form.action,
        type: form.method,
        data: formData,
        processData: false,
        contentType: false,
        success: (response) => {
          if (response.status === "success") {
            // Effacer les champs du formulaire
            $("#education-new")[0].reset();

            // Vérifier si le div a des éléments enfants et ajouter le titre si nécessaire
            if ($("#education-forms").children().length === 0) {
              $("#education-forms").append(`
                <h4 class="border-bottom mt-4 pb-2">Mes diplôme enregistrés</h4>
              `);

              educationNextBtn.prop("disabled", false);
            }

            // Mettre à jour le contenu des diplômes affichés
            $("#education-forms").append(response.data.html);

            // Ajouter gestionnaire d'événements pour édition et suppression sans quitter la page
            setupFormEvents(response.data.id);

            setupOtherFieldOfStudy();

            // Notification
            showAlert("", response.message, response.status);

            educationLimitList(educationslimit);

            disableSelectedOptions();

            submitLoaderOff("education-new");
          } else {
            showAlert("", response.message, response.status);
            submitLoaderOff("education-new");
          }
        },
        error: (response) => {
          showAlert("", response.message, response.status);
          submitLoaderOff("education-new");
        },
      });

      return false;
    },
  });

  // Edition
  $('form[id^="education-"]').each(function () {
    $(this).validate({
      rules: educationValidationRules,
      messages: educationValidationMessages,
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
        const formData = new FormData(form);

        $.ajax({
          url: form.action,
          type: form.method,
          data: formData,
          processData: false,
          contentType: false,
          success: (response) => {
            if (response.status === "success") {
              showAlert("", response.message, response.status);
            } else {
              showAlert("", response.message, response.status);
            }
          },
          error: (response) => {
            showAlert("", response.message, response.status);
          },
        });

        return false;
      },
    });
  });

  // Suppression
  $(".delete-education").on("click", async function (e) {
    const id = $(this).data("id");
    const url = $(this).data("url");
    const $educationForm = $("#education-" + id);

    const result = await Swal.fire({
      title: "Êtes-vous sûr ?",
      text: "Vous ne pourrez pas revenir en arrière !",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Confirmer",
      cancelButtonText: "Annuler",
    });

    if (result.isConfirmed) {
      try {
        const response = await $.ajax({
          url: url,
          type: "DELETE",
        });

        if (response.status === "success") {
          // Supprimer le formulaire du DOM, dans notre cas, on supprime le parent pour un meilleur visuel.
          // $educationForm.remove();
          $educationForm.parent().remove();

          // Effacer le h4 : "Mes diplôme enregistrés" si il la liste ne contient aucun diplôme
          if ($("#education-forms").children().length === 1) {
            $("#education-forms").children().remove();

            educationNextBtn.prop("disabled", true);
          }

          educationLimitList(educationslimit);

          disableSelectedOptions();

          await showAlert("", response.message, response.status);
        } else {
          await showAlert("", response.message, response.status);
        }
      } catch (error) {
        await showAlert("", response.message, response.status);
      }
    }
  });

  // Edition et Suppression après Ajout
  function setupFormEvents(id) {
    const $form = $(`#education-${id}`);
    const editUrl = $form.data("edit-url");
    const deleteUrl = $form.data("delete-url");

    $form.validate({
      rules: educationValidationRules,
      messages: educationValidationMessages,
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
        const formData = new FormData(form);

        $.ajax({
          url: editUrl,
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          success: (response) => {
            if (response.status === "success") {
              showAlert("", response.message, response.status);
            } else {
              showAlert("", response.message, response.status);
            }
          },
          error: (response) => {
            showAlert("", response.message, response.status);
          },
        });

        return false;
      },
    });

    // Suppression
    $form.find(".delete-education").on("click", async function (e) {
      const $educationForm = $form;

      const result = await Swal.fire({
        title: "Êtes-vous sûr ?",
        text: "Vous ne pourrez pas revenir en arrière !",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Confirmer",
        cancelButtonText: "Annuler",
      });

      if (result.isConfirmed) {
        try {
          const response = await $.ajax({
            url: deleteUrl,
            type: "DELETE",
          });

          if (response.status === "success") {
            // Supprimer le formulaire du DOM, dans notre cas, on supprime le parent pour un meilleur visuel.
            // $educationForm.remove();
            $educationForm.parent().remove();

            // Effacer le h4 : "Mes diplôme enregistrés" si il la liste ne contient aucun diplôme
            if ($("#education-forms").children().length === 1) {
              $("#education-forms").children().remove();
              educationNextBtn.prop("disabled", true);
            }

            educationLimitList(educationslimit);

            disableSelectedOptions();

            await showAlert("", response.message, response.status);
          } else {
            await showAlert("", response.message, response.status);
          }
        } catch (error) {
          await showAlert("", response.message, response.status);
        }
      }
    });
  }
});
