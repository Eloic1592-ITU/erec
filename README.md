# Plateforme de Recrutement de Banky Foiben'ny Madagasikara : e-recrutement

Bienvenue sur notre plateforme de recrutement, un outil complet et intuitif conçu pour simplifier et optimiser le processus de recrutement des candidats. Cette plateforme est construite en utilisant Symfony, un framework PHP robuste et flexible, pour assurer une expérience utilisateur fluide et une gestion efficace des données.

## Table des Matières

* [À Propos](#à-propos)
* [Technologies Utilisées](#technologies-utilisées)
    * [Technologies et Outils](#technologies-et-outils)
    * [Infrastructure](#infrastructure)
* [Comment Utiliser](#comment-utiliser)
    * [1 - Générer une nouvelle migration](#1---générer-une-nouvelle-migration)
    * [2 - Exécuter les migrations](#2---exécuter-les-migrations)
    * [3 - Créer des sequences et des triggers pour toutes les tables](#3---créer-des-sequences-et-des-triggers-pour-toutes-les-tables)
    * [4 - Charger les fixtures](#4---charger-les-fixtures)
    * [5 - Définir les permissions pour le répertoire `public/uploads`](#5---définir-les-permissions-pour-le-répertoire-publicuploads)

## À Propos

Le projet "e-recrutement" consiste en la refonte totale de la plateforme de recrutement de BFM. Ce projet englobe toutes les étapes, de la conception initiale à la mise en  production, visant à moderniser et optimiser le processus de recrutement en utilisant des technologies et outils de pointe.

![Aperçu](/public/img/preview.png)

## Technologies Utilisées

### Technologies et Outils

Les outils et technologies utilisés dans ce projet comprennent :

- draw.io : Conception des diagrammes de relation d'entités (ERD).
- Figma : Conception des maquettes web.
- Photoshop : Traitement des images.
- PHP et JavaScript : Langages de programmation utilisés pour le développement.
- Symfony : Framework PHP utilisé pour structurer et développer l'application.
- Doctrine ORM : Outil de mapping objet-relationnel (ORM) utilisé pour interagir avec la base de données.
- Oracle : Base de données utilisée pour stocker les informations des utilisateurs et des candidatures.

### Infrastructure

L'infrastructure technique mise en place pour le projet inclut :

- VisualCppRedist_AIO
- WAMPServer 3.3.1
- PHP 8.2.0
- Composer 2.7.4
- Symfony 6.4.5
- FileZilla
- Visual Studio Code
- Git & GitHub
- InstantClient 19_22
- Oracle Database 11g Express Edition
- Toad for Oracle 12.1
- HTML 5, CSS 3, JavaScript, jQuery, Bootstrap 5

## Comment Utiliser

Pour une base de données ORACLE, vous devez créer manuellement la base de données.

Ensuite, configurez-la dans le fichier `.env` du projet.

```
DATABASE_URL="oci8://recru:recrutement@192.168.1.19:1521/bcm11"
```

Une fois la base de données créée et configurée, vous pouvez suivre les étapes suivantes :

### 1 - Générer une nouvelle migration

Tout d'abord, assurez-vous de supprimer les fichiers de migration existants dans le dossier `migrations/` (par exemple, `migrations/Version20240801231345.php`).

Ensuite, pour créer une nouvelle migration, utilisez la commande suivante :

```
php bin/console make:migration
```

### 2 - Exécuter les migrations

Pour appliquer les migrations à la base de données, utilisez la commande suivante :

```
php bin/console doctrine:migrations:migrate
```

### 3 - Créer des sequences et des triggers pour toutes les tables

Pour faciliter la création des `sequences` et des `triggers` pour chaque table de votre base de données, vous pouvez exécuter le script suivante :

```
-- Create sequences and triggers for all tables

-- Table: EREC_USER
CREATE SEQUENCE EREC_USER_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_USER_BEFORE_INSERT
BEFORE INSERT ON EREC_USER
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_USER_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_CERTIFICATION
CREATE SEQUENCE EREC_CERT_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_CERT_BI
BEFORE INSERT ON EREC_CERTIFICATION
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_CERT_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_CIVILITY
CREATE SEQUENCE EREC_CIV_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_CIV_BI
BEFORE INSERT ON EREC_CIVILITY
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_CIV_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_DEGREE
CREATE SEQUENCE EREC_DEG_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_DEG_BI
BEFORE INSERT ON EREC_DEGREE
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_DEG_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_DOCUMENT
CREATE SEQUENCE EREC_DOC_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_DOC_BI
BEFORE INSERT ON EREC_DOCUMENT
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_DOC_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_EDUCATION
CREATE SEQUENCE EREC_EDU_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_EDU_BI
BEFORE INSERT ON EREC_EDUCATION
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_EDU_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_ENGAGEMENT
CREATE SEQUENCE EREC_ENG_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_ENG_BI
BEFORE INSERT ON EREC_ENGAGEMENT
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_ENG_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_FIELD_OF_STUDY
CREATE SEQUENCE EREC_FOS_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_FOS_BI
BEFORE INSERT ON EREC_FIELD_OF_STUDY
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_FOS_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_INTERNSHIP
CREATE SEQUENCE EREC_INT_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_INT_BI
BEFORE INSERT ON EREC_INTERNSHIP
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_INT_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_JOB_APPLICATION
CREATE SEQUENCE EREC_JOBAPP_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_JOBAPP_BI
BEFORE INSERT ON EREC_JOB_APPLICATION
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_JOBAPP_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_LEVEL
CREATE SEQUENCE EREC_LVL_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_LVL_BI
BEFORE INSERT ON EREC_LEVEL
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_LVL_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_LOCATION
CREATE SEQUENCE EREC_LOC_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_LOC_BI
BEFORE INSERT ON EREC_LOCATION
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_LOC_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_MARITAL_STATUS
CREATE SEQUENCE EREC_MARSTAT_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_MARSTAT_BI
BEFORE INSERT ON EREC_MARITAL_STATUS
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_MARSTAT_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_OTHER_INFO
CREATE SEQUENCE EREC_OTHINFO_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_OTHINFO_BI
BEFORE INSERT ON EREC_OTHER_INFO
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_OTHINFO_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_POSITION
CREATE SEQUENCE EREC_POS_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_POS_BI
BEFORE INSERT ON EREC_POSITION
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_POS_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_PROFILE
CREATE SEQUENCE EREC_PROF_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_PROF_BI
BEFORE INSERT ON EREC_PROFILE
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_PROF_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_SKILL
CREATE SEQUENCE EREC_SKILL_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_SKILL_BI
BEFORE INSERT ON EREC_SKILL
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_SKILL_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: EREC_WORK_EXPERIENCE
CREATE SEQUENCE EREC_WORKEXP_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_WORKEXP_BI
BEFORE INSERT ON EREC_WORK_EXPERIENCE
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_WORKEXP_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

-- Table: CAMPAIGN
CREATE SEQUENCE EREC_CAMPAIGN_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;

CREATE OR REPLACE TRIGGER EREC_CAMPAIGN_BEFORE_INSERT
BEFORE INSERT ON EREC_CAMPAIGN
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_CAMPAIGN_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/


-- Table USER_POSITION
CREATE SEQUENCE EREC_USER_POSITION_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;


CREATE OR REPLACE TRIGGER EREC_USER_POS_BEFORE_INSERT
BEFORE INSERT ON EREC_USER_POSITION
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_USER_POSITION_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/


-- Table CONTRAT_TYPE
CREATE SEQUENCE EREC_CONTRACT_TYPE_SEQ
  START WITH 1
  INCREMENT BY 1
  NOCACHE;


CREATE OR REPLACE TRIGGER EREC_CON_TYPE_BEFORE_INSERT
BEFORE INSERT ON EREC_CONTRACT_TYPE
FOR EACH ROW
WHEN (NEW.ID IS NULL)
BEGIN
  SELECT EREC_CONTRACT_TYPE_SEQ.NEXTVAL INTO :NEW.ID FROM dual;
END;
/

```

### 4 - Charger les fixtures

Les **fixtures** sont des ensembles de données de test préconfigurées que vous pouvez charger dans la base de données pour faciliter le développement et les tests.

Pour charger les fixtures dans la base de données, utilisez la commande suivante :

```
php bin/console doctrine:fixtures:load
```

Cette commande insère les données définies dans vos fixtures dans la base de données.

Les fixtures peuvent être modifiées dans le fichier suivant : `src/DataFixtures/AppFixtures.php`.

### 5 - Définir les permissions pour le répertoire `public/uploads`

La plateforme permet le téléchargement de fichiers, il est donc important de s'assurer que le répertoire `public/uploads` a les bonnes permissions pour permettre au serveur web de lire et écrire dans ce répertoire.

```
uploads
 ┣ attestation-de-travail
 ┣ certification
 ┣ cv
 ┣ diplome
 ┣ cover-letter
 ┣ school-certificate
 ┗ lm
```