const initFormItemController = (stepNum) => {
  $(`.step-${stepNum} .alert`).hide();
  $(`.step-${stepNum} .form-items`).hide();

  // Case of empty-list
  // ...
  
  // Case of not-empty-list
  $(`.step-${stepNum} .not-empty-list .yon`).hide();
  $(`.step-${stepNum} .not-empty-list .form-items`).show();

  //  --> Non
  $(`.step-${stepNum} .show-alert-btn`).click(function () {
    $(`.step-${stepNum} .alert`).show();
    $(`.step-${stepNum} .form-items`).hide();

    // nextBtn is from multistep.js
    // if($(`.step-${stepNum} .step-${stepNum}-actions`).children().length === 1) {
    //   $(`.step-${stepNum} .step-${stepNum}-actions`).append(nextBtn);
    //   // Gérer le click du bouton "Continuer"
    //   initializeNextStepButton(`.step-${stepNum} .step-${stepNum}-actions .next-step`);
    // }

    $(`.step-${stepNum} .step-${stepNum}-actions .next-step`).prop('disabled', false);
  });

  //   --> Oui
  $(`.step-${stepNum} .form-items-btn`).click(function () {
    $(`.step-${stepNum} .yon`).hide();
    $(`.step-${stepNum} .alert`).hide();
    $(`.step-${stepNum} .form-items`).show();
    if($(`.step-${stepNum} .step-${stepNum}-forms`).children().length === 0) {
      // $((`.step-${stepNum} .step-${stepNum}-actions .next-step`)).remove();
      $(`.step-${stepNum} .step-${stepNum}-actions .next-step`).prop('disabled', true);
    }
  });
};
