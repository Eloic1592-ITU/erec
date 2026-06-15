/**
 * All Custom method to validate special Inputs
 */

// Custom method to validate age
$.validator.addMethod(
  "customAgeValidation",
  (value) => {
    let birthDate = new Date(value);
    let today = new Date();
    let age = today.getFullYear() - birthDate.getFullYear();
    let m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
      age--;
    }
    return age >= 18;
  },
  "Vous devez avoir au moins 18 ans pour vous inscrire."
);

// Custom method to validate password
$.validator.addMethod(
  "customPasswordValidation",
  function (value, element) {
    const password = value;
    let valid = true;

    if (password.length < 8) {
      valid = false;
    }
    if (!/[a-z]/.test(password)) {
      valid = false;
    }
    if (!/[A-Z]/.test(password)) {
      valid = false;
    }
    if (!/\d/.test(password)) {
      valid = false;
    }
    if (!/[\W_]/.test(password)) {
      valid = false;
    }

    return valid;
  },
  "Votre mot de passe doit contenir au moins 8 caractères, y compris une lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial."
);

// Custom method to validate email
$.validator.addMethod(
  "customEmailValidation",
  function (value, element) {
    return this.optional(element) || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
  },
  "L'adresse email saisie doit contenir un @ et un ."
);

// Custom method to validate end date
$.validator.addMethod("greaterThanStartDate", function(value, element, params) {
  const startDate = $(params).val();
  if (!startDate) {
      return true;
  }
  return new Date(value) > new Date(startDate);
}, "La date de fin doit être supérieure à la date de début.");

// Custom method to validate fileType
$.validator.addMethod("fileType", function (value, element, param) {
  const file = element.files[0];
  if (file) {
      const mimeType = file.type;
      const validTypes = param.split(",");
      return validTypes.includes(mimeType);
  }
  return true;
}, "Veuillez télécharger un fichier au format .jpg, .png ou .pdf.");

// Custom method to validate fileSize
$.validator.addMethod("maxFileSize", function (value, element, param) {
  const file = element.files[0];
  if (file) {
      return file.size <= param;
  }
  return true;
}, "La taille du fichier ne doit pas dépasser 2 MB.");

// Custom method to validate CIN
$.validator.addMethod("validCin", function(value, element) {
  const cleanedValue = value.replace(/\s/g, '');
  return this.optional(element) || /^\d{12}$/.test(cleanedValue);
}, "Le numéro CIN doit contenir exactement 12 chiffres au format 000 000 000 000.");

// Custom method to validate year
$.validator.addMethod("validYear", function(value, element) {
  const currentYear = new Date().getFullYear();
  const year = parseInt(value, 10);

  return this.optional(element) ||
         (year >= 1950 && year <= currentYear && /^\d{4}$/.test(value));
}, "L'année saisie doit être comprise entre 1900 et l'année actuelle, et au format YYYY.");
