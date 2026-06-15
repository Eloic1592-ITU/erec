/**
 * Affiche le loader et masque le bouton de soumission pour un formulaire spécifique.
 *
 * @param {string} formName - Le nom du formulaire utilisé pour cibler les éléments de soumission et de chargement.
 *                            Par exemple, pour un formulaire avec les ID `#edit-profile-submit` et `#edit-profile-loader`,
 *                            le `formName` serait `edit-profile`.
 */
const submitLoaderOn = (formName) => {
    $(`#${formName}-submit`).addClass("d-none");
    $(`#${formName}-loader`).removeClass("d-none");
}

/**
 * Masque le loader et affiche le bouton de soumission pour un formulaire spécifique.
 *
 * @param {string} formName - Le nom du formulaire utilisé pour cibler les éléments de soumission et de chargement.
 *                            Par exemple, pour un formulaire avec les ID `#edit-profile-submit` et `#edit-profile-loader`,
 *                            le `formName` serait `edit-profile`.
 */
const submitLoaderOff = (formName) => {
    $(`#${formName}-submit`).removeClass("d-none");
    $(`#${formName}-loader`).addClass("d-none");
}