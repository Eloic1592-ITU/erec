let currentStep = 1;

const allStepCircle = document.querySelectorAll(".step-circle");

// Nombre total d'étapes dynamique
const totalSteps = typeof TOTAL_STEPS !== 'undefined' ? TOTAL_STEPS : allStepCircle.length;


allStepCircle[0].classList.add("active");

// La fonction updateProgressBar permet de mettre à jour la barre de progression
const updateProgressBar = () => {
  // let progressPercentage = ((currentStep - 1) / 8) * 100;
  // let progressBar = document.querySelector(".progress-bar");
  // if (progressBar) {
  //   progressBar.style.width = `${progressPercentage}%`;
  // }
    let progressPercentage = ((currentStep - 1) / (totalSteps - 1)) * 100;
    let progressBar = document.querySelector(".progress-bar");
    if (progressBar) {
        progressBar.style.width = `${progressPercentage}%`;
    }
};

// Pour supprimer la class "active" de plusieurs éléments.
const resetActiveClass = elements => {
  //  elements.forEach(element => {
  //   element.classList.remove("active");
  // });
    elements.forEach(element => {
        element.classList.remove("active");
    });
};


// La fonction displayStep qui permet s'afficher l'etape choisi
const displayStep = stepNumber => {
  //  resetActiveClass(allStepCircle);
  // const currentStepCircle = allStepCircle[stepNumber - 1];
  // currentStepCircle.classList.add("active");
  // let currentStepElement = document.querySelector(".step-" + currentStep);
  // let stepElement = document.querySelector(".step-" + stepNumber);
  // if (currentStepElement && stepElement) {
  //   currentStepElement.style.display = "none";
  //   stepElement.style.display = "block";
  //   currentStep = stepNumber;
  //   updateProgressBar();
  // }
    resetActiveClass(allStepCircle);
    const currentStepCircle = allStepCircle[stepNumber - 1];
    currentStepCircle.classList.add("active");
    let currentStepElement = document.querySelector(".step-" + currentStep);
    let stepElement = document.querySelector(".step-" + stepNumber);
    if (currentStepElement && stepElement) {
        currentStepElement.style.display = "none";
        stepElement.style.display = "block";
        currentStep = stepNumber;
        updateProgressBar();
    }
};

// Masque toutes les étapes sauf la première
const steps = document.querySelectorAll(".step");
steps.forEach((step, index) => {
  if (index > 0) {
    step.style.display = "none";
  }
});

// Récupération des boutons "next-step" et ajout d'un gestionnaire d'événement
const nextButtons = document.querySelectorAll(".next-step");
nextButtons.forEach(nextButton => {
  // nextButton.addEventListener("click", event => {
  //   let inputsValid = validateInputs(event.currentTarget);
  //   if (inputsValid && currentStep < 9) {
  //     const completedStepCircle = allStepCircle[currentStep - 1];
  //     completedStepCircle.classList.add("success");
  //     completedStepCircle.classList.remove("active");
  //     const currentStepCircle = allStepCircle[currentStep];
  //     currentStepCircle.classList.add("active");
  //     let currentStepElement = document.querySelector(".step-" + currentStep);
  //     currentStepElement.classList.add("animate__animated", "animate__fadeOut");
  //     currentStep++;
  //     setTimeout(() => {
  //       currentStepElement.classList.remove(
  //         "animate__animated",
  //         "animate__fadeOut"
  //       );
  //       steps.forEach(step => {
  //         step.style.display = "none";
  //       });
  //       let nextStepElement = document.querySelector(".step-" + currentStep);
  //       nextStepElement.style.display = "block";
  //       nextStepElement.classList.add("animate__animated", "animate__fadeIn");
  //       updateProgressBar();
  //     }, 200);
  //   }
  // });
    nextButton.addEventListener("click", event => {
        let inputsValid = validateInputs(event.currentTarget);
        if (inputsValid && currentStep < totalSteps) { // totalSteps au lieu de 9
            const completedStepCircle = allStepCircle[currentStep - 1];
            completedStepCircle.classList.add("success");
            completedStepCircle.classList.remove("active");
            const currentStepCircle = allStepCircle[currentStep];
            currentStepCircle.classList.add("active");
            let currentStepElement = document.querySelector(".step-" + currentStep);
            currentStepElement.classList.add("animate__animated", "animate__fadeOut");
            currentStep++;
            setTimeout(() => {
                currentStepElement.classList.remove(
                    "animate__animated",
                    "animate__fadeOut"
                );
                steps.forEach(step => {
                    step.style.display = "none";
                });
                let nextStepElement = document.querySelector(".step-" + currentStep);
                nextStepElement.style.display = "block";
                nextStepElement.classList.add("animate__animated", "animate__fadeIn");
                updateProgressBar();
            }, 200);
        }
    });
});

// Récupération des boutons "prev-step" et ajout d'un gestionnaire d'événement
const prevButtons = document.querySelectorAll(".prev-step");
prevButtons.forEach(prevButton => {
  prevButton.addEventListener("click", () => {
    resetActiveClass(allStepCircle);
    if (currentStep > 1) {
      let currentStepElement = document.querySelector(".step-" + currentStep);
      currentStepElement.classList.add("animate__animated", "animate__fadeOut");
      currentStep--;
      setTimeout(function () {
        currentStepElement.classList.remove(
          "animate__animated",
          "animate__fadeOut"
        );
        steps.forEach(function (step) {
          step.style.display = "none";
        });
        let prevStepElement = document.querySelector(".step-" + currentStep);
        prevStepElement.style.display = "block";
        prevStepElement.classList.add("animate__animated", "animate__fadeIn");
        updateProgressBar();
      }, 200);
    }
  });
});

// Validation des champs
const validateInputs = button => {
  // let inputsValid = true;
  // const inputs = button.parentElement.parentElement.parentElement.querySelectorAll(".form-control");
  // inputs.forEach(input => {
  //   const valid = input.checkValidity();
  //   if (!valid) {
  //     inputsValid = false;
  //   }
  // });
  // return inputsValid;

  return true;
};

// Gestionnaire d'événements de clic à chaque cercle d'étape
// const allStepCircles = document.querySelectorAll(".step-circle");
// allStepCircles.forEach(stepCircle => {
//   stepCircle.addEventListener("click", () => {
//     const stepNumber = parseInt(stepCircle.textContent);
//     for (let i = 1; i < stepNumber; i++) {
//       const stepElement = document.querySelector(".step-" + i);
//       if (!validateInputs(stepElement.querySelector(".next-step"))) {
//         return;
//       }
//     }
//     displayStep(stepNumber);
//   });
// });

// Other Utils Fonctions & Global Variable

// Next Button or "Continuer" button template.
const nextBtn = `
  <button type="button" class="btn btn-outline-success pe-lg-1 next-step d-flex align-items-center gap-1">
    <span class="d-none d-lg-flex">Continuer</span> <i class="bx bx-chevron-right"></i>
  </button>
`;

/**
 * Initialise le bouton "Suivant" pour un formulaire multi-étapes.
 *
 * @param {string} buttonSelector - Le sélecteur CSS du bouton "Suivant".
 */
const initializeNextStepButton = buttonSelector => {
  document.querySelector(buttonSelector).addEventListener("click", event => {
    let inputsValid = validateInputs(event.currentTarget);
    if (inputsValid && currentStep < 9) {
      const completedStepCircle = allStepCircle[currentStep - 1];
      completedStepCircle.classList.add("success");
      completedStepCircle.classList.remove("active");
      const currentStepCircle = allStepCircle[currentStep];
      currentStepCircle.classList.add("active");
      let currentStepElement = document.querySelector(".step-" + currentStep);
      currentStepElement.classList.add("animate__animated", "animate__fadeOut");
      currentStep++;
      setTimeout(() => {
        currentStepElement.classList.remove(
          "animate__animated",
          "animate__fadeOut"
        );
        steps.forEach(step => {
          step.style.display = "none";
        });
        let nextStepElement = document.querySelector(".step-" + currentStep);
        nextStepElement.style.display = "block";
        nextStepElement.classList.add("animate__animated", "animate__fadeIn");
        updateProgressBar();
      }, 200);
    }
  });
}
