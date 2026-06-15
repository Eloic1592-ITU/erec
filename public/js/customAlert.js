/**
 * Custom Sweet Alert 2
 */

const showAlert = (title, text, icon) => {
  Swal.fire({
    title: title,
    text: text,
    icon: icon,
    confirmButtonText: "Fermer",
  });
};
