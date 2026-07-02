<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\FieldOfStudy;
use App\Entity\Degree;
use App\Entity\Position;
use App\Entity\Location;
use App\Entity\Level;
use App\Entity\Skill;
use App\Entity\Civility;
use App\Entity\MaritalStatus;
use App\Entity\Campaign;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{
    /**
     * @var Generator
     */
    private Generator $faker;
    private $connection;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->faker = Factory::create('fr_FR');
        $this->connection = $doctrine->getConnection();
    }

    public function load(ObjectManager $manager): void
    {
        // Set the Oracle session date formats
        $this->connection->executeQuery("ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_TZ_FORMAT = 'YYYY-MM-DD HH24:MI:SS TZH:TZM'");

        $this->loadCampaign($manager);
        $this->loadPosition($manager);
        
        $manager->flush();

        $this->loadFieldOfStudy($manager);
        $this->loadDegree($manager);
        $this->loadLocation($manager);
        $this->loadLevel($manager);
        $this->loadSkill($manager);
        $this->loadCivility($manager);
        $this->loadMaritalStatus($manager);
        $this->loadUsers($manager);

        $manager->flush();
    }

    private function loadUsers(ObjectManager $manager): void
    {
        // Récupérer toutes les positions
        $positions = $manager->getRepository(Position::class)->findAll();

        // Vérifier si des positions ont été trouvées
        if (empty($positions)) {
            return; 
        }

        // Create an admin user
        $adminUser = new User();
        $adminUser
            ->setEmail('admin.erec@mail.bfm')
            ->setLastName('Admin')
            ->setFirstName('Admin')
            ->setBirthDate(new \DateTime())
            ->setCin("101010101010")
            ->setRoles(['ROLE_ADMIN'])
            ->setPlainPassword('rh1Admin2Erecrutement3');

        // Assigner une position aléatoire parmi les positions disponibles
        $adminRandomPosition = $positions[array_rand($positions)];
        $adminUser->setReferencePosition($adminRandomPosition);
        
        $manager->persist($adminUser);

        // Create regular users
        $users = [];
        for ($i = 1; $i <= 9; $i++) {
            $user = new User();
            $user
                ->setEmail($this->faker->email())
                ->setLastName("Nom " . $i)
                ->setFirstName("Prénom " . $i)
                ->setBirthDate(new \DateTime())
                ->setCin("10122113265" . $i)
                ->setRoles(["ROLE_USER"])
                ->setPlainPassword("password");

            // Assigner une position aléatoire parmi les positions disponibles
            $randomPosition = $positions[array_rand($positions)];
            $user->setReferencePosition($randomPosition);

            $users[] = $user;
            $manager->persist($user);
        }

        $manager->flush();
    }

    private function loadFieldOfStudy(ObjectManager $manager): void
    {
        $fieldOfStudyChoices = [
            'Informatique',
            'Ingénierie',
            'Mathématiques',
            'Autre'
        ];

        foreach ($fieldOfStudyChoices as $field) {
            $fieldOfStudy = new FieldOfStudy();
            $fieldOfStudy->setName($field);
            $manager->persist($fieldOfStudy);
        }
    }

    private function loadDegree(ObjectManager $manager): void
    {
        $degreeChoices = [
            'Licence',
            'Master',
            'Doctorat',
        ];

        foreach ($degreeChoices as $degree) {
            $degreeEntity = new Degree();
            $degreeEntity->setName($degree);
            $manager->persist($degreeEntity);
        }
    }

private function loadPosition(ObjectManager $manager): void
{
    $positionChoices = [
        'Economistes' => 'ECO0224',
        'Juristes' => 'JUR0224',
        'Auditeurs informatiques et Auditeurs internes' => 'AUD0224',
        'Acheteurs polyvalents et Acheteurs spécialisés' => 'ACH0224',
        'Acheteurs Gestionnaires de contrat' => 'GES0224',
        'Ingénieurs et Techniciens informatiques' => 'INF0224',
        'Spécialistes en Actuariat' => 'ACT0224',
    ];

    $campaignCount = 3; // doit correspondre au nombre de campagnes créées dans loadCampaign()

    foreach ($positionChoices as $position => $reference) {
        $positionEntity = new Position();
        $positionEntity->setName($position);
        $positionEntity->setReference($reference);
        $positionEntity->setDeleted(false);
        $positionEntity->setClosingDate(new \DateTime('+30 days'));

        // Assignation aléatoire d'une campagne parmi celles créées dans loadCampaign()
        $randomCampaignIndex = random_int(0, $campaignCount - 1);
        $campaign = $this->getReference('campaign_' . $randomCampaignIndex, Campaign::class);
        $positionEntity->setCampaign($campaign);

        $manager->persist($positionEntity);
    }
}

    private function loadLocation(ObjectManager $manager): void
    {
        $locationChoices = [
            'Antsiranana',
            'Nosy Be',
            'Sambava',
            'Mahajanga',
            'Toamasina',
            'Antananarivo',
            'Antsirabe',
            'Morondava',
            'Fianarantsoa',
            'Manakara',
            'Toliara',
            'Tolagnaro',
        ];

        foreach ($locationChoices as $location) {
            $locationEntity = new Location();
            $locationEntity->setName($location);
            $manager->persist($locationEntity);
        }
    }

    private function loadLevel(ObjectManager $manager): void
    {
        $levelChoices = [
            'Débutant',
            'Intermédiaire',
            'Avancé',
        ];

        foreach ($levelChoices as $level) {
            $levelEntity = new Level();
            $levelEntity->setName($level);
            $manager->persist($levelEntity);
        }
    }

    private function loadSkill(ObjectManager $manager): void
    {
        $skillChoices = [
            'Google Workspace',
            'Slack',
            'Zoom',
            'Microsoft Teams',
            'Salesforce',
            'HubSpot',
            'Asana',
            'Trello',
            'JIRA',
            'Confluence',
            'GitHub',
            'GitLab',
            'Bitbucket',
            'Docker',
            'Kubernetes',
            'Jenkins',
            'CircleCI',
            'Travis CI',
            'Azure DevOps',
            'AWS',
            'Google Cloud Platform',
            'Microsoft Azure',
            'Oracle Cloud',
            'ServiceNow',
            'Zendesk',
            'Freshdesk',
            'SAP',
            'Oracle ERP',
            'QuickBooks',
            'ADP',
            'Workday',
            'Tableau',
            'Power BI',
            'Looker',
            'Splunk',
            'New Relic',
            'Datadog',
            'Snowflake',
            'Apache Kafka',
            'ElasticSearch',
            'MongoDB',
            'PostgreSQL',
            'MySQL',
            'Redis',
            'Microsoft SQL Server',
            'IBM Db2',
            'Oracle Database',
            'Adobe Creative Cloud',
        ];

        foreach ($skillChoices as $skill) {
            $skillEntity = new Skill();
            $skillEntity->setName($skill);
            $manager->persist($skillEntity);
        }
    }

    private function loadCivility(ObjectManager $manager): void
    {
        $civilityChoices = [
            'Monsieur',
            'Madame',
            'Mademoiselle',
        ];

        foreach ($civilityChoices as $civility) {
            $civilityEntity = new Civility();
            $civilityEntity->setName($civility);
            $manager->persist($civilityEntity);
        }
    }

    private function loadMaritalStatus(ObjectManager $manager): void
    {
        $maritalStatusChoices = [
            'Célibataire',
            'Marié(e)',
            'Divorcé(e)',
            'Veuf(ve)',
        ];

        foreach ($maritalStatusChoices as $status) {
            $maritalStatusEntity = new MaritalStatus();
            $maritalStatusEntity->setName($status);
            $manager->persist($maritalStatusEntity);
        }
    }

    // Chargement des donnees de test pour l'entité Campagne
    private function loadCampaign(ObjectManager $manager): void
    {
        $campaignTitles = [
            'Campagne de recrutement 2026',
            'Stages été 2026',
            'Recrutement Prestataire 2026',
            'Recrutement Sequence 6 2026',
        ];

        foreach ($campaignTitles as $index => $title) {
            $campaign = new Campaign();
            $campaign->setTitle($title);
            $campaign->setDescription('Description de la campagne : ' . $title);
            $campaign->setDeleted(false);

            $manager->persist($campaign);

            // Référence pour pouvoir lier les Position à cette campagne dans loadPosition()
            $this->addReference('campaign_' . $index, $campaign);
        }
    }
}
