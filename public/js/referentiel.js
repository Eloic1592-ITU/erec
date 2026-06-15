$(document).ready(function () {

    /**
     * Script pour l'Ajout d'un Référentiel.
     *
     * Ce script initialise la validation et la soumission d'un formulaire d'ajout
     * d'un référentiel. Il utilise la bibliothèque jQuery Validate pour gérer la 
     * validation des champs et envoie les données du formulaire via AJAX.
     *
     * @param {string} referentielName - Nom du référentiel.
     *                                   Exemple : field-of-study
     * @param {Object} referentielValidationRules - Règles de validation pour le formulaire.
     * @param {Object} referentielValidationMessages - Messages de validation pour le formulaire.
     */
    const newReferentiel = (referentielName, referentielValidationRules, referentielValidationMessages) => {
        $(`#${referentielName}-new`).validate({
          rules: referentielValidationRules,
          messages: referentielValidationMessages,
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
            submitLoaderOn(`${referentielName}-new`);
            form.submit();
          },
          invalidHandler: function (event, validator) {
            submitLoaderOff(`${referentielName}-new`);
          },
        });
    }

    /**
     * Script pour l'Édition d'un Référentiel.
     *
     * Ce script initialise la validation et la soumission des formulaires
     * d'édition de référentiel. Il utilise la bibliothèque jQuery Validate pour
     * gérer la validation des champs et envoie les données des formulaires via AJAX.
     *
     * @param {string} referentielName - Nom du référentiel.
     *                                   Exemple : field-of-study
     * @param {Object} referentielValidationRules - Règles de validation pour le formulaire.
     * @param {Object} referentielValidationMessages - Messages de validation pour le formulaire.
     */
    const editReferentiel = (referentielName, referentielValidationRules, referentielValidationMessages) => {
        $(`form[id^="${referentielName}-"]`).each(function () {
          $(this).validate({
            rules: referentielValidationRules,
            messages: referentielValidationMessages,
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
              form.submit();
            },
          });
        });
    }

    
    /**
     * Script pour la modification de l'état d'un référentiel.
     *
     * Ce script gère la modification de l'état d'un référentiel (Activé / Desactivé) 
     * en ajoutant un gestionnaire d'événements click sur les éléments ayant une classe spécifique. Il utilise
     * SweetAlert2 pour demander confirmation avant d'envoyer une requête AJAX pour modifier l'état.
     *
     * @param {string} referentielName - Nom du référentiel.
     *                                   Exemple : field-of-study
     */
    const updateReferentielState = (referentielName) => {
      const bindDeleteHandlers = () => {
        $(`.delete-${referentielName}`).off("click").on("click", async function (e) {
          const state = $(this).data("state");
          const url = $(this).data("url");

          const result = await Swal.fire({
              title: "Êtes-vous sûr ?",
              text: `Voulez-vous vraiment ${state} ?`,
              icon: "warning",
              showCancelButton: true,
              confirmButtonText: "Confirmer",
              cancelButtonText: "Annuler",
          });

          if (result.isConfirmed) {
            try {
              $.ajax({
                url: url,
                type: "POST",
                success: () => {
                  Swal.fire({
                    title: "",
                    text: "Le statut a été modifié.",
                    icon: "success",
                    confirmButtonText: "Fermer"
                  }).then(() => {
                    window.location.reload();
                  });
                },
                error: (error) => {
                    showAlert("", "Une erreur est survenue lors de l'operation.", "error");
                }
              });
            } catch (error) {
              await showAlert("", response.message, response.status);
            }
          }
        });
      };

      // Appel initial pour attacher les gestionnaires d'événements
      bindDeleteHandlers();

      // Actualiser les gestionnaires d'événements à chaque redessin de la table
      $('#data-list').on('draw.dt', function () {
        bindDeleteHandlers();
      });
    }

    /**
     * Script pour mettre en place le CUD ou Create - Update - Delete d'un Référentiel.
     *
     * Ce script combine les fonctionnalités d'ajout, d'édition et de suppression
     * d'un référentiel en appelant les fonctions correspondantes.
     *
     * @param {string} referentielName - Nom du référentiel.
     *                                   Exemple : field-of-study
     * @param {Object} referentielValidationRules - Règles de validation pour le formulaire.
     * @param {Object} referentielValidationMessages - Messages de validation pour le formulaire.
     */
    const CUDReferentiel = (referentielName, referentielValidationRules, referentielValidationMessages) => {
        newReferentiel(referentielName, referentielValidationRules, referentielValidationMessages);
        editReferentiel(referentielName, referentielValidationRules, referentielValidationMessages);
        updateReferentielState(referentielName);
    }

    // CRUD - Field Of Study

    // Règles de validation
    const fieldOfStudyValidationRules = {
        "field_of_study[name]": {
            required: true,
            minlength: 2,
            maxlength: 255,
        },
    };
    
    // Messages de validation
    const fieldOfStudyValidationMessages = {
        "field_of_study[name]": {
            required: "Veuillez saisir un nom.",
            minlength: "Le nom doit comporter au moins 2 caractères.",
            maxlength: "Le nom ne peut pas dépasser 255 caractères.",
        },
    };
    
    CUDReferentiel("field-of-study", fieldOfStudyValidationRules, fieldOfStudyValidationMessages);

    // CRUD - Degree

    // Règles de validation
    const degreeValidationRules = {
      "degree[name]": {
          required: true,
          minlength: 2,
          maxlength: 255,
      },
    };
  
    // Messages de validation
    const degreeValidationMessages = {
        "degree[name]": {
            required: "Veuillez saisir un nom.",
            minlength: "Le nom doit comporter au moins 2 caractères.",
            maxlength: "Le nom ne peut pas dépasser 255 caractères.",
        },
    };

    CUDReferentiel("degree", degreeValidationRules, degreeValidationMessages);

    // CRUD - Position

    // Règles de validation
    const positionValidationRules = {
      "position[name]": {
          required: true,
          minlength: 2,
          maxlength: 255,
      },
      "position[reference]": {
          required: true,
          minlength: 2,
          maxlength: 255,
      },
    };
  
    // Messages de validation
    const positionValidationMessages = {
        "position[name]": {
            required: "Veuillez saisir un nom.",
            minlength: "Le nom doit comporter au moins 2 caractères.",
            maxlength: "Le nom ne peut pas dépasser 255 caractères.",
        },
        "position[reference]": {
            required: "Veuillez saisir un nom.",
            minlength: "Le nom doit comporter au moins 2 caractères.",
            maxlength: "Le nom ne peut pas dépasser 255 caractères.",
        },
    };

    CUDReferentiel("position", positionValidationRules, positionValidationMessages);


    // CRUD - Level

    // Règles de validation
    const levelValidationRules = {
      "level[name]": {
          required: true,
          minlength: 2,
          maxlength: 255,
      },
    };
  
    // Messages de validation
    const levelValidationMessages = {
        "level[name]": {
            required: "Veuillez saisir un nom.",
            minlength: "Le nom doit comporter au moins 2 caractères.",
            maxlength: "Le nom ne peut pas dépasser 255 caractères.",
        },
    };

    CUDReferentiel("level", levelValidationRules, levelValidationMessages);

    // CRUD - Skill

    // Règles de validation
    const skillValidationRules = {
      "skill[name]": {
          required: true,
          minlength: 2,
          maxlength: 255,
      },
    };
  
    // Messages de validation
    const skillValidationMessages = {
        "skill[name]": {
            required: "Veuillez saisir un nom.",
            minlength: "Le nom doit comporter au moins 2 caractères.",
            maxlength: "Le nom ne peut pas dépasser 255 caractères.",
        },
    };

    CUDReferentiel("skill", skillValidationRules, skillValidationMessages);

    // CRUD - Civility

    // Règles de validation
    const civilityValidationRules = {
      "civility[name]": {
          required: true,
          minlength: 2,
          maxlength: 255,
      },
    };
  
    // Messages de validation
    const civilityValidationMessages = {
        "civility[name]": {
            required: "Veuillez saisir un nom.",
            minlength: "Le nom doit comporter au moins 2 caractères.",
            maxlength: "Le nom ne peut pas dépasser 255 caractères.",
        },
    };

    CUDReferentiel("civility", civilityValidationRules, civilityValidationMessages);

    // CRUD - MaritalStatus

    // Règles de validation
    const maritalStatusValidationRules = {
      "marital_status[name]": {
          required: true,
          minlength: 2,
          maxlength: 255,
      },
    };
  
    // Messages de validation
    const maritalStatusValidationMessages = {
        "marital_status[name]": {
            required: "Veuillez saisir un nom.",
            minlength: "Le nom doit comporter au moins 2 caractères.",
            maxlength: "Le nom ne peut pas dépasser 255 caractères.",
        },
    };

    CUDReferentiel("marital-status", maritalStatusValidationRules, maritalStatusValidationMessages);

    // Users Switch State 
    updateReferentielState("user");

});

