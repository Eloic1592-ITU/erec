// Step 4 Script

$(document).ready(function () {
  // Numero de l'etape
  const stepNum = typeof STEP_NUMBERS !== 'undefined'
     ? STEP_NUMBERS.certification
     : 4;
   
  // Yes or No Controller
    initFormItemController(stepNum);
  // initFormItemController(4);

  // Next Button
  const certificationNextBtn = $("#certification-actions .next-step");

    // Gestion du bouton "Non" → activer le bouton Continuer
    $(document).on('click', `.step-${stepNum} .show-alert-btn`, function() {
        certificationNextBtn.prop('disabled', false);
        certificationNextBtn.removeClass('disabled');
    });

    // Gestion du bouton "Oui" → désactiver le bouton Continuer jusqu'à ajout
    $(document).on('click', `.step-${stepNum} .form-items-btn`, function() {
        updateCertificationListUI();
    });

  // List Title
  const certificationListTitle = "Mes Certifications / Attestations enregistrées";

  // Nombre limite
  const certificationslimit = 3;

  // Règles de validation
  const certificationValidationRules = {
    "certification[certification]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "certification[specialty]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "certification[institution]": {
      required: true,
      minlength: 2,
      maxlength: 255,
    },
    "certification[certification_year]": {
      required: true,
      digits: true,
      minlength: 4,
      maxlength: 4,
      validYear: true,
    },
    "certification[certificationFile]": {
      required: true,
      fileType: "image/jpeg,image/png,application/pdf",
      maxFileSize: 2 * 1024 * 1024, // 2 MB in bytes
    },
  };

  // Messages de validation
  const certificationValidationMessages = {
    "certification[certification]": {
      required: "Veuillez saisir le nom de la certification.",
      minlength:
        "Le nom de la certification doit comporter au moins 2 caractères.",
      maxlength:
        "Le nom de la certification ne peut pas dépasser 255 caractères.",
    },
    "certification[specialty]": {
      required: "Veuillez saisir la spécialité.",
      minlength: "La spécialité doit comporter au moins 2 caractères.",
      maxlength: "La spécialité ne peut pas dépasser 255 caractères.",
    },
    "certification[institution]": {
      required: "Veuillez saisir le nom de l'institution.",
      minlength:
        "Le nom de l'institution doit comporter au moins 2 caractères.",
      maxlength: "Le nom de l'institution ne peut pas dépasser 255 caractères.",
    },
    "certification[certification_year]": {
      required: "Veuillez saisir l'année d'obtention de votre certification.",
      digits: "Veuillez saisir une année valide.",
      minlength: "Veuillez saisir une année valide",
      maxlength: "Veuillez saisir une année valide",
      validYear: "Veuillez saisir une année valide",
    },
    "certification[certificationFile]": {
      required:
        "Veuillez enregistrez une copie du certificat / de l'attestion.",
      fileType: "Veuillez télécharger un fichier au format .jpg, .png ou .pdf.",
      maxFileSize: "La taille du fichier ne doit pas dépasser 2 MB.",
    },
  };

  // Fonction pour limiter le nombre d'éléments ajoutés
  function certificationLimitList(limit) {
    // Formulaire d'ajout
    $(".new-certification-form").show();
    
    // Limiter le nombre d'éléments ajoutés
    if($(".certification-form").length >= limit) {
      $(".new-certification-form").hide();
    } else {
      $(".new-certification-form").show();
    }
  }

  // Limiter le nombre d'éléments ajoutés
  certificationLimitList(certificationslimit);

  function updateCertificationListUI() {
    if ($("#certification-forms").children().length === 0) {
      
      // Effacer le contenu et le bouton "Continuer" s'il n'y a plus de certifications
      $("#certification-forms").children().remove();

      // Désactiver le bouton de progression
      certificationNextBtn.prop('disabled', true); 

    } else {
      
      // Ajouter le titre si nécessaire
      if (!$("#certification-forms h4").length) {
        $("#certification-forms").prepend(`
          <h4 class="border-bottom mt-4 pb-2">${certificationListTitle}</h4>
        `);
      }

      // Activer le bouton "Continuer"
      certificationNextBtn.prop('disabled', false);

    }
    
    // Limiter le nombre d'éléments ajoutés
    certificationLimitList(certificationslimit);
  }

  // Ajout
  $("#certification-new").validate({
    rules: certificationValidationRules,
    messages: certificationValidationMessages,
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
      submitLoaderOn("certification-new");

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
            $("#certification-new")[0].reset();

            // Mettre à jour le contenu des certifications affichées
            $("#certification-forms").append(response.data.html);

            // Notification
            showAlert("", response.message, response.status);

            // Émettre un événement 'certificationAdded'
            EventBus.emit("certificationAdded");

            // Ajouter gestionnaire d'événements pour édition et suppression sans quitter la page
            setupCertificationFormEvents(response.data.id);
            submitLoaderOff("certification-new");
          } else {
            showAlert("", response.message, response.status);
            submitLoaderOff("certification-new");
          }
        },
        error: (response) => {
          showAlert("", response.message, response.status);
          submitLoaderOff("certification-new");
        },
      });

      return false;
    },
  });

  // Edition
  $('form[id^="certification-"]').each(function () {
    $(this).validate({
      rules: certificationValidationRules,
      messages: certificationValidationMessages,
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
  $(".delete-certification").on("click", async function (e) {
    const id = $(this).data("id");
    const url = $(this).data("url");
    const $certificationForm = $("#certification-" + id);

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
          $certificationForm.parent().remove();

          // Effacer le titre si il la liste ne contient aucun élément
          if ($("#certification-forms").children().length === 1) {
            $("#certification-forms").children().remove();
            certificationNextBtn.prop('disabled', true);
          }

          $(".new-certification-form").show();

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
  $("#remove-all-certifications-form").on("click", async function (e) {
    const url = $(this).data("url");

    const result = await Swal.fire({
      title: "Êtes-vous sûr ?",
      text: "Cette action supprimera tous vos certificats!",
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
          // Supprimer tous les formulaires de certification du DOM
          $(".certification-form").remove();

          // Supprimer le titre de la liste des éléments
          $("#certification-forms h4").remove();

          // Émettre un événement 'certificationsCleared'
          EventBus.emit("certificationsCleared");

          // $(`.step-4 .yon`).show();
          // $(`.step-4 .form-items`).hide();
          
          $(`.step-${stepNum} .yon`).show();
          $(`.step-${stepNum} .form-items`).hide();

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
  function setupCertificationFormEvents(id) {
    const $form = $(`#certification-${id}`);
    const editUrl = $form.data("edit-url");
    const deleteUrl = $form.data("delete-url");

    // Edition
    $form.validate({
      rules: certificationValidationRules,
      messages: certificationValidationMessages,
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
    $form.find(".delete-certification").on("click", async function (e) {
      const $certificationForm = $form;

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
            $certificationForm.parent().remove();

            // Effacer le titre si il la liste ne contient aucun élément
            if ($("#certification-forms").children().length === 1) {
              $("#certification-forms").children().remove();
              certificationNextBtn.prop('disabled', true);
            }

            $(".new-certification-form").show();

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

  // Écouter l'événement 'certificationAdded' pour mettre à jour la liste
  EventBus.on("certificationAdded", updateCertificationListUI);
  EventBus.on("certificationsCleared", updateCertificationListUI);
});
