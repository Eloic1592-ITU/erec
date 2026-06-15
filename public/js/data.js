const steps = [
  {
    id: 1,
    title: "Poste demandé",
    label: "Poste",
    description: "Sélectionnez le poste demandé",
  },
  {
    id: 2,
    title: "Informations personnelles",
    label: "Informations",
    description: "Entrez vos informations personnelles",
  },
  {
    id: 3,
    title: "Diplômes académiques",
    label: "Diplômes",
    description: "Ajoutez vos diplômes académiques",
  },
  {
    id: 4,
    title: "Certificats ou attestations",
    label: "Certificats",
    description: "Téléchargez vos certificats ou attestations",
  },
  {
    id: 5,
    title: "Stages suivis",
    label: "Stages",
    description: "Indiquez les stages que vous avez suivis",
  },
  {
    id: 6,
    title: "Expériences professionnelles",
    label: "Expériences",
    description: "Ajoutez vos expériences professionnelles",
  },
  {
    id: 7,
    title: "Autres Informations",
    label: "Autres",
    description: "Fournissez d'autres informations pertinentes",
  },
  {
    id: 8,
    title: "CV et LM",
    label: "CV",
    description: "Téléchargez votre CV et lettre de motivation",
  },
  {
    id: 9,
    title: "Validation et envoi",
    label: "Validation",
    description: "Validez et envoyez votre formulaire",
  },
];

const tableTemp = {
  Poste,
  Nom,
  Prenom,
  Email, 
  Diplome : {
    Nom,
    Filiere,
    Etablissement
  },
  Certificats  : {
    Nom,
    Specialite,
    Etablissement
  },
  Experiences : {
    Poste,
    Societe,
    Duree
  },
  Competences : {
    Logiciel,
    Niveau
  },
  "A selectionner" : {
    OUI,
    NON
  }
}