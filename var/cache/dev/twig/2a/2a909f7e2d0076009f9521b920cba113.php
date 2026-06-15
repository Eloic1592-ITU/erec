<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* front/marketing/index.html.twig */
class __TwigTemplate_8dd52a5085b9b01d4436a84cd8f49000 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "front/layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketing/index.html.twig"));

        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/marketing/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Landing
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/landing.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
  <header class=\"text-center\" data-aos=\"slide-down\" data-aos-duration=\"500\" data-aos-delay=\"100\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bcm.png"), "html", null, true);
        echo "\" alt=\"logo-bcm\" class=\"my-4\" width=\"70px\" />
    <h4 class=\"landing-logo-text\">BANKY FOIBEN'I MADAGASIKARA</h4>
  </header>

  <main class=\"pt-5 mb-5\">
    <div class=\"container\">
      <div class=\"row d-flex align-items-center\">
        <div class=\"col-lg-5\" data-aos=\"zoom-in\" data-aos-duration=\"500\" data-aos-delay=\"300\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
          <img
            src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/landing-pic.jpg"), "html", null, true);
        echo "\"
            alt=\"welcome\"
            width=\"100%\"
            class=\"rounded-4\"
          />
        </div>
        <div class=\"col-lg-7 landing-title my-4\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-delay=\"300\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
          <h1 class=\"m-0\">Bienvenue sur le site</h1>
          <h1>dédié au recrutement de</h1>
          <h1 class=\"text-orange\">BANKY FOIBEN'I MADAGASIKARA</h1>
        </div>
      </div>
      <div class=\"row my-4\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-delay=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
        <div class=\"col-lg-12\">
          <h3 class=\"text-primary text-center m-0\">
            Découvrez et postulez à nos offres d'emploi, nous serons ravis
            d'étudier votre candidature.
          </h3>
        </div>
      </div>
      <div class=\"row my-4\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-delay=\"700\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
        <div class=\"col-lg-12\">
          <div id=\"alert\" class=\"note py-3 px-3\">
            <div
              class=\"d-flex justify-content-between align-items-center mb-2\"
            >
              <div class=\"d-flex align-items-center gap-2\">
                <img
                  src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/warning.png"), "html", null, true);
        echo "\"
                  alt=\"warning\"
                  width=\"30px\"
                />
                <h5 class=\"m-0\">Note importante</h5>
              </div>
              <img
                id=\"close-alert\"
                src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/xmark.png"), "html", null, true);
        echo "\"
                alt=\"close\"
                class=\"close-alert\"
              />
            </div>
            <p class=\"mb-0\">
              Vous devez soumettre votre candidature en ligne pour un poste
              spécifique afin d\"être candidat à l'emploi.<br />
              Les candidatures déposées physiquement au sein de BFM ou
              envoyées par la poste ou par courrier éléctronique ne sont pas
              acceptées.
            </p>
          </div>
        </div>
      </div>
      <div class=\"row\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-delay=\"900\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
        <div class=\"col-lg-6 mt-2\">
          <div class=\"row mb-2\">
            <div class=\"col-xs-2 col-lg-2 text-center text-lg-start\">
              <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/secure.png"), "html", null, true);
        echo "\" alt=\"secure\" width=\"70px\" />
            </div>
            <div class=\"col-xs-10 col-lg-10 text-center text-lg-start\">
              <h6 class=\"title-secure mt-3\">
                INFORMATIONS SUR DES RISQUES DE FRAUDE
              </h6>
            </div>
          </div>
          <p>
            BFM ne demande JAMAIS d'argent ou de paiement d'aucune sorte dans
            le cadre de ses processus de recrutement. Le seul et unique moyen
            de postuler est via notre plateforme de recrutement. Si des
            individus vous contactent an nom de BFM et vous réclament une
            contribution financière sous quelque forme que ce soit, sachez que
            ces démarches sont frauduleuses.
          </p>
        </div>
        <div class=\"col-lg-6 mt-2\">
          <div class=\"row mb-2\">
            <div class=\"col-xs-2 col-lg-2 text-center text-lg-start\">
              <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/secure.png"), "html", null, true);
        echo "\" alt=\"secure\" width=\"70px\" />
            </div>
            <div class=\"col-xs-10 col-lg-10 text-center text-lg-start\">
              <h6 class=\"title-secure mt-3\">
                QUELQUES CONSEILS AVANT DE POSTULER
              </h6>
            </div>
          </div>
          <div class=\"liste\">
            <div class=\"d-flex gap-2\">
              <span class=\"check\">✓</span>
              <p>
                Passer en revue les informations et le profil recherché
                relatifs à chaque poste;
              </p>
            </div>
            <div class=\"d-flex gap-2\">
              <span class=\"check\">✓</span>
              <p>
                Evaluer dans quelle mesure vous répondez au profil du poste;
              </p>
            </div>
            <div>
              <div class=\"d-flex gap-2\">
                <span class=\"check\">✓</span>
                <p>
                  Identifier les documents requis pour votre dossier de
                  candidature et préparer les versions éléctroniques :
                </p>
              </div>

              <div class=\"mx-5\">
                <div class=\"d-flex gap-2\">
                  <span>-</span>
                  <p>CV à jour avec photo récente;</p>
                </div>
                <div class=\"d-flex gap-2\">
                  <span>-</span>
                  <p>Lettre de motivation;</p>
                </div>
                <div class=\"d-flex gap-2\">
                  <span>-</span>
                  <p>
                    Diplôme le plus élevé et/ou autres diplôme les plus
                    pertinents;
                  </p>
                </div>
                <div class=\"d-flex gap-2\">
                  <span>-</span>
                  <p>
                    Attestation de travail relative au poste occupé
                    actuellement (moins d'un mois);
                  </p>
                </div>
                <div class=\"d-flex gap-2\">
                  <span>-</span>
                  <p>
                    Certificat(s) de travail relatif(s) à(aux) l'emploi(s)
                    précédent(s);
                  </p>
                </div>
                <div class=\"d-flex gap-2\">
                  <span>-</span>
                  <p>
                    Certificats ou attestations de formation les plus
                    pertinents.
                  </p>
                </div>
              </div>
            </div>
            <div class=\"d-flex gap-2\">
              <span class=\"check\">✓</span>
              <p>Nous ne donnons aucun renseignement par téléphone</p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row my-4\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
        <div class=\"col-lg-12 d-flex justify-content-center\">
          <div class=\"confid\">
            <div class=\"confid-head\">
              <h6>
                INDICATION CONCERNANT LA PROTECTION DES DONNEES PERSONNELLES
              </h6>
            </div>
            <div class=\"confid-body p-3\">
              <p>
                Dans le cadre de nos procédures de recrutement, notre
                institution est amenée à collecter et conserver les données
                vous concernant pour nous permettre de traiter votre
                candidature dans de bonnes conditions. Etant assujettis aux
                dispositions de la loi n° 2014-038 en date du 9 janvier 2015
                sur la protection des données à caractère personnel, nous
                traitons l’ensemble des données à caractère personnel sur
                toutes les bases légales requises conformément aux
                dispositions légales.
              </p>
              <p>
                En postulant auprès de notre institution, vous consentez
                librement à autoriser BFM à utiliser vos données personnelles
                associées à votre dossier de candidature. En ce sens, afin
                d’assurer le bon traitement de votre candidature, nous
                utilisons ces données personnelles à des fins de gestion
                administrative et juridique, et pour les candidats retenus, à
                des fins d’exécution d’une relation contractuelles.
              </p>
              <p>
                Les données personnelles des candidats ne seront accessibles
                qu’aux personnes en charge du recrutement à des fins
                strictement internes et ne feront l’objet d’aucun autre
                transfert à des tiers sauf obligation légale sur demande des
                autorités administratives ou judiciaire habilitées.
              </p>
              <p>
                Les données personnelles seront conservées uniquement pendant
                le temps nécessaire à la réalisation du recrutement.
              </p>
              <p>
                A défaut de recrutement, les données des candidats ne seront
                conservées que pendant le délai de prescription légale en
                vigueur.
              </p>
              <div class=\"d-flex justify-content-center my-2\">
                <div class=\"form-check\">
                  <input
                    class=\"form-check-input\"
                    type=\"checkbox\"
                    value=\"\"
                    id=\"seen\"
                  />
                  <label class=\"form-check-label\" for=\"seen\">
                    J'ai lu et j'accepte les Conditions d'utilisation et la
                    Politique de confidentialité
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row mb-5\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
        <div class=\"col-lg-12 text-center\">
        
          ";
        // line 246
        if ((array_key_exists("refPosition", $context) && ($context["refPosition"] ?? null))) {
            // line 247
            echo "          <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_first_login", ["ref" => ($context["refPosition"] ?? null)]), "html", null, true);
            echo "\">
            <button type=\"submit\" id=\"bouton-acces\" class=\"btn btn-plateforme px-5 py-2\" disabled>
              Accéder à la plateforme
            </button>
          </form>
          ";
        } else {
            // line 253
            echo "          <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
            <button type=\"submit\" id=\"bouton-acces\" class=\"btn btn-plateforme px-5\" disabled>
              Accéder à la plateforme
            </button>
          </form>
          ";
        }
        // line 259
        echo "          
        </div>
      </div>
      <div class=\"row my-4\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-easing=\"ease-in-out\" data-aos-once=\"true\">
        <div class=\"col-lg-12\">
          <h2 class=\"text-primary text-center\">Foire aux Questions (FAQs)</h2>
          <div class=\"accordion my-4 overflow-hidden\" id=\"accordionExample\">
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\">
                <button
                  class=\"accordion-button\"
                  type=\"button\"
                  data-bs-toggle=\"collapse\"
                  data-bs-target=\"#collapseOne\"
                  aria-expanded=\"true\"
                  aria-controls=\"collapseOne\"
                >
                  1. Comment se connecter pour une première fois ?
                </button>
              </h2>
              <div
                id=\"collapseOne\"
                class=\"accordion-collapse collapse show\"
                data-bs-parent=\"#accordionExample\"
              >
                <div class=\"accordion-body\">
                  Pour débuter la procédure de candidature en ligne, il vous sera
                  demandé au préalable de vous inscrire en créant un compte « Candidat
                  » à partir d’une adresse mail valide. Veuillez par la suite
                  renseigner les données demandées.
                  <br />
                  Vous recevrez par courriel la confirmation de la création du compte.
                </div>
              </div>
            </div>
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\">
                <button
                  class=\"accordion-button collapsed\"
                  type=\"button\"
                  data-bs-toggle=\"collapse\"
                  data-bs-target=\"#collapseTwo\"
                  aria-expanded=\"false\"
                  aria-controls=\"collapseTwo\"
                >
                  2. Puis-je avoir plusieurs comptes \"Candidat\" ?
                </button>
              </h2>
              <div
                id=\"collapseTwo\"
                class=\"accordion-collapse collapse\"
                data-bs-parent=\"#accordionExample\"
              >
                <div class=\"accordion-body\">
                  Il ne peut y avoir qu’un seul compte candidat par adresse mail.
                  L’adresse mail est l’identifiant du compte. Des vérifications seront
                  effectuées par rapport à l’identité du candidat.
                </div>
              </div>
            </div>
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\">
                <button
                  class=\"accordion-button collapsed\"
                  type=\"button\"
                  data-bs-toggle=\"collapse\"
                  data-bs-target=\"#collapseThree\"
                  aria-expanded=\"false\"
                  aria-controls=\"collapseThree\"
                >
                  3. Puis-je postuler à plusieurs offres ?
                </button>
              </h2>
              <div
                id=\"collapseThree\"
                class=\"accordion-collapse collapse\"
                data-bs-parent=\"#accordionExample\"
              >
                <div class=\"accordion-body\">
                  Vous avez la possibilité de postuler à plusieurs offres (3 maximum)
                  qui répondent à votre profil. Toutefois, nous vous recommandons de
                  rester cohérents dans vos choix d’offres, votre candidature en sera
                  d’autant plus pertinente.
                </div>
              </div>
            </div>
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\">
                <button
                  class=\"accordion-button collapsed\"
                  type=\"button\"
                  data-bs-toggle=\"collapse\"
                  data-bs-target=\"#collapseFour\"
                  aria-expanded=\"false\"
                  aria-controls=\"collapseFour\"
                >
                  4. Comment soumettre ma candidature ?
                </button>
              </h2>
              <div
                id=\"collapseFour\"
                class=\"accordion-collapse collapse\"
                data-bs-parent=\"#accordionExample\"
              >
                <div class=\"accordion-body\">
                  Connectez-vous sur votre compte « Candidat ». Il vous sera demandé
                  de remplir un formulaire de candidature et de télécharger les pièces
                  justificatives demandées. Il importe de fournir des renseignements
                  exacts et complets, car ils serviront de base à l’évaluation qui
                  déterminera si votre profil correspond au poste. Le caractère
                  obligatoire des réponses est indiqué au candidat par la présence
                  d’un astérisque. Une fois que vous avez commencé, vous pouvez
                  enregistrer votre candidature en ligne selon son état d’avancement
                  et la reprendre ultérieurement. Veuillez prêter attention à la date
                  limite de soumission des candidatures.
                </div>
              </div>
            </div>
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\">
                <button
                  class=\"accordion-button collapsed\"
                  type=\"button\"
                  data-bs-toggle=\"collapse\"
                  data-bs-target=\"#collapseFive\"
                  aria-expanded=\"false\"
                  aria-controls=\"collapseFive\"
                >
                  5. Comment attacher les pièces jointes ?
                </button>
              </h2>
              <div
                id=\"collapseFive\"
                class=\"accordion-collapse collapse\"
                data-bs-parent=\"#accordionExample\"
              >
                <div class=\"accordion-body\">
                  <ul>
                    <li>
                      Nommer les fichiers selon le type de document, en précisant
                      votre nom et votre prénom (exemple : CV_RAKOTOEric)
                    </li>
                    <li>
                      Choisir le format PDF (1 pièce jointe = 1 document) sans
                      dépasser 1Mo par fichier
                    </li>
                    <li>Joindre chaque document demandé suivant les rubriques</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\">
                <button
                  class=\"accordion-button collapsed\"
                  type=\"button\"
                  data-bs-toggle=\"collapse\"
                  data-bs-target=\"#collapseSix\"
                  aria-expanded=\"false\"
                  aria-controls=\"collapseSix\"
                >
                  6. Comment être sûr que ma candidature a bien été prise en compte ?
                </button>
              </h2>
              <div
                id=\"collapseSix\"
                class=\"accordion-collapse collapse\"
                data-bs-parent=\"#accordionExample\"
              >
                <div class=\"accordion-body\">
                  Vous recevez un courriel de confirmation indiquant que votre
                  candidature a bien été reçue. Nous l'étudierons avec soin et vous
                  contacterons si vos compétences et qualifications répondent aux
                  attentes.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  ";
        // line 442
        echo twig_include($this->env, $context, "front/partials/_footer.html.twig");
        echo "
    
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 447
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 448
        echo "
  ";
        // line 450
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aosInit.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/marketing.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/marketing/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  580 => 452,  574 => 450,  571 => 448,  564 => 447,  554 => 442,  369 => 259,  359 => 253,  349 => 247,  347 => 246,  201 => 103,  178 => 83,  156 => 64,  145 => 56,  114 => 28,  102 => 19,  98 => 17,  91 => 16,  82 => 12,  77 => 11,  70 => 10,  62 => 6,  55 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/marketing/index.html.twig", "D:\\PROJECTS\\Php\\erecrutement\\templates\\front\\marketing\\index.html.twig");
    }
}
