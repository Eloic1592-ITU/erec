$(document).ready(function () {
  // Version français de "Print"
  $(".buttons-print span").text("Imprimer");
});

new DataTable("#data-list", {
  columnDefs: [
    {
      className: "dtr-control arrow-right",
      orderable: false,
      target: -1,
    },
  ],
  responsive: {
    details: {
      display: DataTable.Responsive.display.modal({
        header: function (row) {
          var data = row.data();
          return "Plus de détails";
        },
      }),
      renderer: DataTable.Responsive.renderer.tableAll({
        tableClass: "table",
      }),

      type: "column",
      target: -1,
    },
  },
  layout: {
    topStart: {
      buttons: ["excel", "csv", "print"],
    },
  },
  language: {
    decimal: "",
    emptyTable: "Aucune donnée disponible dans le tableau",
    info: "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
    infoEmpty: "Affichage de 0 à 0 sur 0 entrée",
    infoFiltered: "(filtré parmi _MAX_ entrées au total)",
    infoPostFix: "",
    thousands: ",",
    lengthMenu: "Afficher _MENU_ entrées",
    loadingRecords: "Chargement en cours...",
    processing: "",
    search: "<i class='bx bx-search'></i>",
    zeroRecords: "Aucun enregistrement correspondant trouvé",
    paginate: {
      first: "<i class='bx bx-chevrons-left' ></i>",
      last: "<i class='bx bx-chevrons-right' ></i>",
      next: "<i class='bx bx-chevron-right' ></i>",
      previous: "<i class='bx bx-chevron-left' ></i>",
    },
    aria: {
      orderable: "Trier par cette colonne",
      orderableReverse: "Inverser l'ordre de cette colonne",
    },
  },
});

new DataTable("#data-list-skills-language", {
  columnDefs: [
    {
      className: "dtr-control arrow-right",
      orderable: false,
      target: -1,
    },
  ],
  responsive: {
    details: {
      display: DataTable.Responsive.display.modal({
        header: function (row) {
          var data = row.data();
          return "Plus de détails";
        },
      }),
      renderer: DataTable.Responsive.renderer.tableAll({
        tableClass: "table",
      }),

      type: "column",
      target: -1,
    },
  },
  layout: {
    topStart: {
      buttons: ["excel", "csv", "print"],
    },
  },
  language: {
    decimal: "",
    emptyTable: "Aucune donnée disponible dans le tableau",
    info: "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
    infoEmpty: "Affichage de 0 à 0 sur 0 entrée",
    infoFiltered: "(filtré parmi _MAX_ entrées au total)",
    infoPostFix: "",
    thousands: ",",
    lengthMenu: "Afficher _MENU_ entrées",
    loadingRecords: "Chargement en cours...",
    processing: "",
    search: "<i class='bx bx-search'></i>",
    zeroRecords: "Aucun enregistrement correspondant trouvé",
    paginate: {
      first: "<i class='bx bx-chevrons-left' ></i>",
      last: "<i class='bx bx-chevrons-right' ></i>",
      next: "<i class='bx bx-chevron-right' ></i>",
      previous: "<i class='bx bx-chevron-left' ></i>",
    },
    aria: {
      orderable: "Trier par cette colonne",
      orderableReverse: "Inverser l'ordre de cette colonne",
    },
  },
});

new DataTable("#data-list-skills-microsoft", {
  columnDefs: [
    {
      className: "dtr-control arrow-right",
      orderable: false,
      target: -1,
    },
  ],
  responsive: {
    details: {
      display: DataTable.Responsive.display.modal({
        header: function (row) {
          var data = row.data();
          return "Plus de détails";
        },
      }),
      renderer: DataTable.Responsive.renderer.tableAll({
        tableClass: "table",
      }),

      type: "column",
      target: -1,
    },
  },
  layout: {
    topStart: {
      buttons: ["excel", "csv", "print"],
    },
  },
  language: {
    decimal: "",
    emptyTable: "Aucune donnée disponible dans le tableau",
    info: "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
    infoEmpty: "Affichage de 0 à 0 sur 0 entrée",
    infoFiltered: "(filtré parmi _MAX_ entrées au total)",
    infoPostFix: "",
    thousands: ",",
    lengthMenu: "Afficher _MENU_ entrées",
    loadingRecords: "Chargement en cours...",
    processing: "",
    search: "<i class='bx bx-search'></i>",
    zeroRecords: "Aucun enregistrement correspondant trouvé",
    paginate: {
      first: "<i class='bx bx-chevrons-left' ></i>",
      last: "<i class='bx bx-chevrons-right' ></i>",
      next: "<i class='bx bx-chevron-right' ></i>",
      previous: "<i class='bx bx-chevron-left' ></i>",
    },
    aria: {
      orderable: "Trier par cette colonne",
      orderableReverse: "Inverser l'ordre de cette colonne",
    },
  },
});

new DataTable("#data-list-state", {
  columnDefs: [
    {
      className: "dtr-control arrow-right",
      orderable: false,
      target: -1,
    },
  ],
  responsive: {
    details: {
      display: DataTable.Responsive.display.modal({
        header: function (row) {
          var data = row.data();
          return "Plus de détails";
        },
      }),
      renderer: DataTable.Responsive.renderer.tableAll({
        tableClass: "table",
      }),

      type: "column",
      target: -1,
    },
  },
  layout: {
    topStart: {
      buttons: [],
    },
  },
  language: {
    decimal: "",
    emptyTable: "Aucune donnée disponible dans le tableau",
    info: "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
    infoEmpty: "Affichage de 0 à 0 sur 0 entrée",
    infoFiltered: "(filtré parmi _MAX_ entrées au total)",
    infoPostFix: "",
    thousands: ",",
    lengthMenu: "Afficher _MENU_ entrées",
    loadingRecords: "Chargement en cours...",
    processing: "",
    search: "<i class='bx bx-search'></i>",
    zeroRecords: "Aucun enregistrement correspondant trouvé",
    paginate: {
      first: "<i class='bx bx-chevrons-left' ></i>",
      last: "<i class='bx bx-chevrons-right' ></i>",
      next: "<i class='bx bx-chevron-right' ></i>",
      previous: "<i class='bx bx-chevron-left' ></i>",
    },
    aria: {
      orderable: "Trier par cette colonne",
      orderableReverse: "Inverser l'ordre de cette colonne",
    },
  },
});