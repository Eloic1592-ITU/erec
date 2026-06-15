// Step 6 Script

$(document).ready(function () {
  // Yes or No Controller
  initFormItemController(6);

  // Next Button
  const workExperienceNextBtn = $("#work-experience-actions .next-step");

  // List Title
  const workExperienceListTitle = "Mes postes enregistrés";

  // Le champ input[name='work_experience[start_date]'] du formulaire d'ajout
  const startDateSelectorNew = `#work-experience-new input[name='work_experience[start_date]']`;

  // Règles de validation (New)
  const workExperienceValidationRulesNew = {
    "work_experience[position]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "work_experience[organization]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "work_experience[location]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "work_experience[start_date]": {
      required: true,
      date: true,
    },
    "work_experience[end_date]": {
      required: true,
      date: true,
      greaterThanStartDate: startDateSelectorNew,
    },
    "work_experience[reference_name]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "work_experience[reference_position]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "work_experience[reference_email]": {
      required: true,
      email: true,
      customEmailValidation: true,
    },
    "work_experience[reference_phone]": {
      required: true,
    },
    "work_experience[workFile]": {
      required: false,
      fileType: "image/jpeg,image/png,application/pdf",
      maxFileSize: 2 * 1024 * 1024, // 2 MB in bytes
    },
  };

  // Messages de validation (New)
  const workExperienceValidationMessagesNew = {
    "work_experience[position]": {
      required: "Veuillez saisir le poste.",
      minlength: "Le poste doit comporter au moins 2 caractères.",
      maxlength: "Le poste ne peut pas dépasser 255 caractères.",
    },
    "work_experience[organization]": {
      required: "Veuillez saisir le nom de l'organisation.",
      minlength: "L'organisation doit comporter au moins 2 caractères.",
      maxlength: "L'organisation ne peut pas dépasser 255 caractères.",
    },
    "work_experience[location]": {
      required: "Veuillez saisir le lieu.",
      minlength: "Le lieu doit comporter au moins 2 caractères.",
      maxlength: "Le lieu ne peut pas dépasser 255 caractères.",
    },
    "work_experience[start_date]": {
      required: "Veuillez saisir la date de début.",
      date: "Veuillez saisir une date valide.",
    },
    "work_experience[end_date]": {
      required: "Veuillez saisir la date de fin.",
      date: "Veuillez saisir une date valide.",
      greaterThanStartDate:
        "La date de fin doit être supérieure à la date de début.",
    },
    "work_experience[reference_name]": {
      required: "Veuillez saisir le nom du référent.",
      minlength: "Le nom du référent doit comporter au moins 2 caractères.",
      maxlength: "Le nom du référent ne peut pas dépasser 255 caractères.",
    },
    "work_experience[reference_position]": {
      required: "Veuillez saisir le poste du référent.",
      minlength: "Le poste du référent doit comporter au moins 2 caractères.",
      maxlength: "Le poste du référent ne peut pas dépasser 255 caractères.",
    },
    "work_experience[reference_email]": {
      required: "Veuillez saisir l'email du référent.",
      email: "Veuillez saisir un email valide.",
      customEmailValidation:
        "L'adresse email saisie doit contenir un @ et un .",
    },
    "work_experience[reference_phone]": {
      required: "Veuillez saisir le téléphone du référent.",
    },
    "work_experience[workFile]": {
      /*required: "Veuillez une copie d'attestation de travail.",*/
      fileType: "Veuillez télécharger un fichier au format .jpg, .png ou .pdf.",
      maxFileSize: "La taille du fichier ne doit pas dépasser 2 MB.",
    },
  };

  function updateWorkExperienceListUI() {
    if ($("#work-experience-forms").children().length === 0) {
      
      // Effacer le contenu et le bouton "Continuer" s'il n'y a plus de postes
      $("#work-experience-forms").children().remove();
      
      // Désactiver le bouton de progression
      workExperienceNextBtn.prop('disabled', true);

    } else {

      // Ajouter le titre si nécessaire
      if (!$("#work-experience-forms h4").length) {
        $("#work-experience-forms").prepend(`
          <h4 class="border-bottom mt-4 pb-2">${workExperienceListTitle}</h4>
        `);
      }

      // Ajouter le bouton "Continuer"
      workExperienceNextBtn.prop('disabled', false);

    }
  }

  // Ajout
  $("#work-experience-new").validate({
    rules: workExperienceValidationRulesNew,
    messages: workExperienceValidationMessagesNew,
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
      submitLoaderOn("work-experience-new");

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
            $("#work-experience-new")[0].reset();

            // Mettre à jour le contenu des postes affichés
            $("#work-experience-forms").append(response.data.html);

            // Notification
            showAlert("", response.message, response.status);

            // Émettre un événement 'workExperienceAdded'
            EventBus.emit("workExperienceAdded");

            // Ajouter gestionnaire d'événements pour édition et suppression sans quitter la page
            setupWorkExperienceFormEvents(response.data.id);

            submitLoaderOff("work-experience-new");
          } else {
            showAlert("", response.message, response.status);
            submitLoaderOff("work-experience-new");
          }
        },
        error: (response) => {
          showAlert("", response.message, response.status);
          submitLoaderOff("work-experience-new");
        },
      });

      return false;
    },
  });

  // Edition
  $('form[id^="work-experience-"]').each(function () {

    const form = $(this);
    const formId = form.attr('id');  // Récupère l'ID du formulaire
    const startDateSelector = `#${formId} input[name='work_experience[start_date]']`;

    $(this).validate({
      rules: {
        "work_experience[position]": {
          required: true,
          minlength: 2,
          maxlength: 255,
        },
        "work_experience[organization]": {
          required: true,
          minlength: 2,
          maxlength: 255,
        },
        "work_experience[location]": {
          required: true,
          minlength: 2,
          maxlength: 255,
        },
        "work_experience[start_date]": {
          required: true,
          date: true,
        },
        "work_experience[end_date]": {
          required: true,
          date: true,
          greaterThanStartDate: startDateSelector
        },
        "work_experience[reference_name]": {
          required: true,
          minlength: 2,
          maxlength: 255,
        },
        "work_experience[reference_position]": {
          required: true,
          minlength: 2,
          maxlength: 255,
        },
        "work_experience[reference_email]": {
          required: true,
          email: true,
          customEmailValidation: true,
        },
        "work_experience[reference_phone]": {
          required: true,
        },
        "work_experience[workFile]": {
          required: false,
          fileType: "image/jpeg,image/png,application/pdf",
          maxFileSize: 2 * 1024 * 1024, // 2 MB in bytes
        },
      },
      messages: {
        "work_experience[position]": {
          required: "Veuillez saisir le poste.",
          minlength: "Le poste doit comporter au moins 2 caractères.",
          maxlength: "Le poste ne peut pas dépasser 255 caractères.",
        },
        "work_experience[organization]": {
          required: "Veuillez saisir le nom de l'organisation.",
          minlength: "L'organisation doit comporter au moins 2 caractères.",
          maxlength: "L'organisation ne peut pas dépasser 255 caractères.",
        },
        "work_experience[location]": {
          required: "Veuillez saisir le lieu.",
          minlength: "Le lieu doit comporter au moins 2 caractères.",
          maxlength: "Le lieu ne peut pas dépasser 255 caractères.",
        },
        "work_experience[start_date]": {
          required: "Veuillez saisir la date de début.",
          date: "Veuillez saisir une date valide.",
        },
        "work_experience[end_date]": {
          required: "Veuillez saisir la date de fin.",
          date: "Veuillez saisir une date valide.",
          greaterThanStartDate:
            "La date de fin doit être supérieure à la date de début.",
        },
        "work_experience[reference_name]": {
          required: "Veuillez saisir le nom du référent.",
          minlength: "Le nom du référent doit comporter au moins 2 caractères.",
          maxlength: "Le nom du référent ne peut pas dépasser 255 caractères.",
        },
        "work_experience[reference_position]": {
          required: "Veuillez saisir le poste du référent.",
          minlength: "Le poste du référent doit comporter au moins 2 caractères.",
          maxlength: "Le poste du référent ne peut pas dépasser 255 caractères.",
        },
        "work_experience[reference_email]": {
          required: "Veuillez saisir l'email du référent.",
          email: "Veuillez saisir un email valide.",
          customEmailValidation:
            "L'adresse email saisie doit contenir un @ et un .",
        },
        "work_experience[reference_phone]": {
          required: "Veuillez saisir le téléphone du référent.",
        },
        "work_experience[workFile]": {
          /*required: "Veuillez une copie d'attestation de travail.",*/
          fileType: "Veuillez télécharger un fichier au format .jpg, .png ou .pdf.",
          maxFileSize: "La taille du fichier ne doit pas dépasser 2 MB.",
        },
      },
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
  $(".delete-work-experience").on("click", async function (e) {
    const id = $(this).data("id");
    const url = $(this).data("url");
    const $workExperienceForm = $("#work-experience-" + id);

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
          // Supprimer le formulaire du DOM
          $workExperienceForm.parent().remove();

          // Effacer le titre si il la liste ne contient aucun élément
          if ($("#work-experience-forms").children().length === 1) {
            $("#work-experience-forms").children().remove();
            workExperienceNextBtn.prop('disabled', true);
          }

          await showAlert("", response.message, response.status);
        } else {
          await showAlert("", response.message, response.status);
        }
      } catch (error) {
        await showAlert("", response.message, response.status);
      }
    }
  });

  // Supprimer tout
  $("#remove-all-work-experiences-form").on("click", async function (e) {
    const url = $(this).data("url");

    const result = await Swal.fire({
      title: "Êtes-vous sûr ?",
      text: "Cette action supprimera tous vos postes !",
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
          // Supprimer tous les formulaires de postes du DOM
          $(".work-experience-form").remove();

          // Supprimer le titre "Mes postes enregistrés"
          $("#work-experience-forms h4").remove();

          // Émettre un événement 'workExperiencesCleared'
          EventBus.emit("workExperiencesCleared");

          $(`.step-6 .yon`).show();
          $(`.step-6 .form-items`).hide();

          await showAlert("", response.message, "success");
        } else {
          await showAlert("", response.message, "error");
        }
      } catch (error) {
        await showAlert(
          "",
          "Une erreur est survenue lors de la suppression des postes.",
          "error"
        );
      }
    }
  });

  // Gerer les Editions et Suppressions apres Ajout
  function setupWorkExperienceFormEvents(id) {
    const form = $(`#work-experience-${id}`);
    const editUrl = form.data("edit-url");
    const deleteUrl = form.data("delete-url");

    const formId = form.attr('id');  // Récupère l'ID du formulaire
    const startDateSelector = `#${formId} input[name='work_experience[start_date]']`;

    // Edition
    form.validate({
      rules: {
        "work_experience[position]": {
          required: true,
          minlength: 2,
          maxlength: 255,
        },
        "work_experience[organization]": {
          required: true,
          minlength: 2,
          maxlength: 255,
        },
        "work_experience[location]": {
          required: true,
          minlength: 2,
          maxlength: 255,
        },
        "work_experience[start_date]": {
          required: true,
          date: true,
        },
        "work_experience[end_date]": {
          required: true,
          date: true,
          greaterThanStartDate: startDateSelector
        },
        "work_experience[reference_name]": {
          required: true,
          minlength: 2,
          maxlength: 255,
        },
        "work_experience[reference_position]": {
          required: true,
          minlength: 2,
          maxlength: 255,
        },
        "work_experience[reference_email]": {
          required: true,
          email: true,
          customEmailValidation: true,
        },
        "work_experience[reference_phone]": {
          required: true,
        },
        "work_experience[workFile]": {
          required: false,
          fileType: "image/jpeg,image/png,application/pdf",
          maxFileSize: 2 * 1024 * 1024, // 2 MB in bytes
        },
      },
      messages: {
        "work_experience[position]": {
          required: "Veuillez saisir le poste.",
          minlength: "Le poste doit comporter au moins 2 caractères.",
          maxlength: "Le poste ne peut pas dépasser 255 caractères.",
        },
        "work_experience[organization]": {
          required: "Veuillez saisir le nom de l'organisation.",
          minlength: "L'organisation doit comporter au moins 2 caractères.",
          maxlength: "L'organisation ne peut pas dépasser 255 caractères.",
        },
        "work_experience[location]": {
          required: "Veuillez saisir le lieu.",
          minlength: "Le lieu doit comporter au moins 2 caractères.",
          maxlength: "Le lieu ne peut pas dépasser 255 caractères.",
        },
        "work_experience[start_date]": {
          required: "Veuillez saisir la date de début.",
          date: "Veuillez saisir une date valide.",
        },
        "work_experience[end_date]": {
          required: "Veuillez saisir la date de fin.",
          date: "Veuillez saisir une date valide.",
          greaterThanStartDate:
            "La date de fin doit être supérieure à la date de début.",
        },
        "work_experience[reference_name]": {
          required: "Veuillez saisir le nom du référent.",
          minlength: "Le nom du référent doit comporter au moins 2 caractères.",
          maxlength: "Le nom du référent ne peut pas dépasser 255 caractères.",
        },
        "work_experience[reference_position]": {
          required: "Veuillez saisir le poste du référent.",
          minlength: "Le poste du référent doit comporter au moins 2 caractères.",
          maxlength: "Le poste du référent ne peut pas dépasser 255 caractères.",
        },
        "work_experience[reference_email]": {
          required: "Veuillez saisir l'email du référent.",
          email: "Veuillez saisir un email valide.",
          customEmailValidation:
            "L'adresse email saisie doit contenir un @ et un .",
        },
        "work_experience[reference_phone]": {
          required: "Veuillez saisir le téléphone du référent.",
        },
        "work_experience[workFile]": {
          /*required: "Veuillez une copie d'attestation de travail.",*/
          fileType: "Veuillez télécharger un fichier au format .jpg, .png ou .pdf.",
          maxFileSize: "La taille du fichier ne doit pas dépasser 2 MB.",
        },
      },
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
    form.find(".delete-work-experience").on("click", async function (e) {
      const $workExperienceForm = form;

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
            // Supprimer le formulaire du DOM
            $workExperienceForm.parent().remove();

            // Effacer le titre si il la liste ne contient aucun élément
            if ($("#work-experience-forms").children().length === 1) {
              $("#work-experience-forms").children().remove();
              workExperienceNextBtn.prop('disabled', true);
            }

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

  // Écouter l'événement 'workExperienceAdded' pour mettre à jour la liste
  EventBus.on("workExperienceAdded", updateWorkExperienceListUI);
  EventBus.on("workExperiencesCleared", updateWorkExperienceListUI);
});
