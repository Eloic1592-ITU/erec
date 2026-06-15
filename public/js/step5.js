// Step 5 Script

$(document).ready(function () {
  // Yes or No Controller
  initFormItemController(5);

  // Next Button
  const internshipNextBtn = $("#internship-actions .next-step");

  // List Title
  const internshipListTitle = "Mes stages enregistrés";

  // Règles de validation
  const internshipValidationRules = {
    "internship[theme]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "internship[organization]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "internship[internship_year]": {
      required: true,
      digits: true,
      minlength: 4,
      maxlength: 4,
      validYear: true,
    },
    "internship[duration]": {
      required: true,
      digits: true,
      minlength: 1,
      maxlength: 2,
    },
  };

  // Messages de validation
  const internshipValidationMessages = {
    "internship[theme]": {
      required: "Veuillez saisir le thème du stage.",
      minlength: "Le thème du stage doit comporter au moins 2 caractères.",
      maxlength: "Le thème du stage ne peut pas dépasser 255 caractères.",
    },
    "internship[organization]": {
      required: "Veuillez saisir le nom de l'organisation.",
      minlength:
        "Le nom de l'organisation doit comporter au moins 2 caractères.",
      maxlength:
        "Le nom de l'organisation ne peut pas dépasser 255 caractères.",
    },
    "internship[internship_year]": {
      required: "Veuillez saisir l'année du stage.",
      digits: "Veuillez saisir une année valide.",
      minlength: "Veuillez saisir une année valide",
      maxlength: "Veuillez saisir une année valide",
      validYear: "Veuillez saisir une année valide",
    },
    "internship[duration]": {
      required: "Veuillez saisir la durée du stage.",
      digits: "Veuillez saisir une durée valide en chiffres.",
      minlength: "La durée du stage doit comporter au moins 1 chiffre.",
      maxlength: "La durée du stage ne peut pas dépasser 2 chiffres.",
    },
  };

  function updateInternshipListUI() {
    if ($("#internship-forms").children().length === 0) {
      
      // Effacer le contenu et le bouton "Continuer" s'il n'y a plus de stages
      $("#internship-forms").children().remove();

      // Désactiver le bouton de progression
      internshipNextBtn.prop('disabled', true); 

    } else {

      // Ajouter le titre si nécessaire
      if (!$("#internship-forms h4").length) {
        $("#internship-forms").prepend(`
          <h4 class="border-bottom mt-4 pb-2">${internshipListTitle}</h4>
        `);
      }

      // Ajouter le bouton "Continuer"
      internshipNextBtn.prop('disabled', false);

    }
  }

  // Ajout
  $("#internship-new").validate({
    rules: internshipValidationRules,
    messages: internshipValidationMessages,
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
      submitLoaderOn("internship-new");

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
            $("#internship-new")[0].reset();

            // Mettre à jour le contenu des stages affichées
            $("#internship-forms").append(response.data.html);

            // Notification
            showAlert("", response.message, response.status);

            // Émettre un événement 'internshipAdded'
            EventBus.emit("internshipAdded");

            // Ajouter gestionnaire d'événements pour édition et suppression sans quitter la page
            setupInternshipFormEvents(response.data.id);

            submitLoaderOff("internship-new");
          } else {
            showAlert("", response.message, response.status);
            submitLoaderOff("internship-new");
          }
        },
        error: (response) => {
          showAlert("", response.message, response.status);
          submitLoaderOff("internship-new");
        },
      });

      return false;
    },
  });

  // Edition
  $('form[id^="internship-"]').each(function () {
    $(this).validate({
      rules: internshipValidationRules,
      messages: internshipValidationMessages,
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
  $(".delete-internship").on("click", async function (e) {
    const id = $(this).data("id");
    const url = $(this).data("url");
    const $internshipForm = $("#internship-" + id);

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
          $internshipForm.parent().remove();

          // Effacer le titre si il la liste ne contient aucun élément
          if ($("#internship-forms").children().length === 1) {
            $("#internship-forms").children().remove();
            internshipNextBtn.prop('disabled', true);
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
  $("#remove-all-internships-form").on("click", async function (e) {
    const url = $(this).data("url");

    const result = await Swal.fire({
      title: "Êtes-vous sûr ?",
      text: "Cette action supprimera tous vos stages !",
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
          // Supprimer tous les formulaires de stage du DOM
          $(".internship-form").remove();

          // Supprimer le titre de la liste des éléments
          $("#internship-forms h4").remove();

          // Émettre un événement 'internshipsCleared'
          EventBus.emit("internshipsCleared");

          $(`.step-5 .yon`).show();
          $(`.step-5 .form-items`).hide();

          await showAlert("", response.message, "success");
        } else {
          await showAlert("", response.message, "error");
        }
      } catch (error) {
        await showAlert(
          "",
          "Une erreur est survenue lors de la suppression des certificats.",
          "error"
        );
      }
    }
  });

  // Gerer les Editions et Suppressions apres Ajout
  function setupInternshipFormEvents(id) {
    const $form = $(`#internship-${id}`);
    const editUrl = $form.data("edit-url");
    const deleteUrl = $form.data("delete-url");

    // Edition
    $form.validate({
      rules: internshipValidationRules,
      messages: internshipValidationMessages,
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
    $form.find(".delete-internship").on("click", async function (e) {
      const $internshipForm = $form;

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
            $internshipForm.parent().remove();

            // Effacer le titre si il la liste ne contient aucun élément
            if ($("#internship-forms").children().length === 1) {
              $("#internship-forms").children().remove();
              internshipNextBtn.prop('disabled', true);
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

  // Écouter l'événement 'internshipAdded' pour mettre à jour la liste
  EventBus.on("internshipAdded", updateInternshipListUI);
  EventBus.on("internshipsCleared", updateInternshipListUI);
});
