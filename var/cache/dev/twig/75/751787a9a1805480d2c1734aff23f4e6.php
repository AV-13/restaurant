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

/* home/index.html.twig */
class __TwigTemplate_a5bcba6a763b7e072e7d9990e4df6bcf extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue | Majestic ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "        
          <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/reset.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/globalStyles.css"), "html", null, true);
        echo "\">
          ";
        // line 9
        echo "          <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/components.css"), "html", null, true);
        echo "\">
          ";
        // line 11
        echo "          ";
        // line 12
        echo "          <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />
          <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/home.css"), "html", null, true);
        echo "\">
            ";
        // line 14
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        $this->loadTemplate("partials/_nav.html.twig", "home/index.html.twig", 18)->display($context);
        // line 19
        echo "<section id=\"hero\">
    <div class=\"container\">
      <div class=\"hero__wrapper\">
        <div class=\"hero__left\" data-aos=\"fade-left\">
          <div class=\"hero__left__wrapper\">

            <h1 class=\"hero__heading\">Une cuisine gastronomique française revisitée</h1>
            <p class=\"hero__info\">
              Majestic propose une expérience culinaire unique en son genre en revisitant la cuisine gastronomique française. Les plats sont préparés avec des ingrédients frais et de qualité, et présentés de manière créative pour offrir une explosion de saveurs en bouche. Les clients pourront ainsi déguster des plats traditionnels français revisités avec une touche de modernité et d'originalité, pour une expérience gastronomique inoubliable.
            </p>
            <div class=\"button__wrapper\">
              <a href=\"#\" class=\"btn primary-btn\">Découvrez la carte</a>
              <a href=\"#storeInfo\" class=\"btn\">Nos restaurants</a>
            </div>
          </div>
        </div>
        <div class=\"hero__right\" data-aos=\"fade-right\">
          <div class=\"hero__imgWrapper\">
            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/heroImg.png"), "html", null, true);
        echo "\">
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id=\"storeInfo\" data-aos=\"fade-up\">
    <div class=\"container\">
      <div class=\"storeInfo__wrapper\">
        <div class=\"storeInfo__item\">
          <div class=\"storeInfo__icon\">
            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/wall-clock-icon.svg"), "html", null, true);
        echo "\" alt=\"clock icon\">
          </div>
          <h3 class=\"storeInfo__title\">
            11 H - 23 H
          </h3>
          <p class=\"storeInfo__text\">
            Heures d'ouverture
          </p>
        </div>
        <div class=\"storeInfo__item\">
          <div class=\"storeInfo__icon\">
            <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/address-icon.svg"), "html", null, true);
        echo "\" alt=\"clock icon\">
          </div>
          <h3 class=\"storeInfo__title\">
            Paris 14
          </h3>
          <p class=\"storeInfo__text\">
            15 rue d'Alesia
          </p>
        </div>
        <div class=\"storeInfo__item\">
          <div class=\"storeInfo__icon\">
            <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/address-icon.svg"), "html", null, true);
        echo "\" alt=\"clock icon\">
          </div>
          <h3 class=\"storeInfo__title\">
            Paris 17
          </h3>
          <p class=\"storeInfo__text\">
            3 rue Emile Level
          </p>
        </div>
        <div class=\"storeInfo__item\">
          <div class=\"storeInfo__icon\">
            <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/address-icon.svg"), "html", null, true);
        echo "\" alt=\"clock icon\">
          </div>
          <h3 class=\"storeInfo__title\">
            Paris 5
          </h3>
          <p class=\"storeInfo__text\">
            76 rue Monge
          </p>
        </div>
        <div class=\"storeInfo__item\">
          <div class=\"storeInfo__icon\">
            <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/phone-icon.svg"), "html", null, true);
        echo "\" alt=\"clock icon\">
          </div>
          <h3 class=\"storeInfo__title\">
            01 80 13 12 38
          </h3>
          <p class=\"storeInfo__text\">
            Appelez nous
          </p>
        </div>
      </div>
    </div>
  </section>



    <section id=\"ourSpecials\" data-aos=\"fade-up\">
    <div class=\"container\">
      <div class=\"ourSpecials__wrapper\">
        <div class=\"ourSpecials__left\">
          <div class=\"ourSpecials__item\">
            <div class=\"ourSpecials__item__img\">
              <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/steak-tartare.jpg"), "html", null, true);
        echo "\" alt=\"food img\">
            </div>
            <h2 class=\"ourSpecials__item__title\">
              Steak Tartare
            </h2>
            <h3 class=\"ourSpecials__item__price\">
              34 €
            </h3>
            <div class=\"ourSpecials__item__stars\">
              <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3star.png"), "html", null, true);
        echo "\" alt=\"3 stars\">
            </div>
            <p class=\"ourSpecials__item__text\">
              Notre steak tartare est une création unique qui combine les saveurs classiques du plat traditionnel français avec une touche moderne. Préparé à partir de viande de boeuf frais soigneusement sélectionnée et coupée à la main, ce tartare est mélangé avec une sauce épicée maison à base de moutarde de Dijon, de câpres et d'oignons rouges finement hachés.
            </p>
          </div>
          <div class=\"ourSpecials__item\">
            <div class=\"ourSpecials__item__img\">
              <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gratin.jpg"), "html", null, true);
        echo "\" alt=\"food img\">
            </div>
            <h2 class=\"ourSpecials__item__title\">
              Gratin à la truffe
            </h2>
            <h3 class=\"ourSpecials__item__price\">
              47 €
            </h3>
            <div class=\"ourSpecials__item__stars\">
              <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3star.png"), "html", null, true);
        echo "\" alt=\"3 stars\">
            </div>
            <p class=\"ourSpecials__item__text\">
              Notre gratin dauphinois à la truffe est un mets réconfortant et luxueux à la fois. Des pommes de terre tranchées finement sont cuites dans une crème riche et savoureuse, infusée avec de l'ail frais et des herbes aromatiques. La truffe noire fraîche est ensuite râpée sur le dessus pour ajouter une saveur et un arôme intenses et inoubliables. Le gratin est ensuite cuit jusqu'à ce qu'il soit doré et croustillant sur le dessus, avec un intérieur moelleux et crémeux
            </p>
          </div>
        </div>
        <div class=\"ourSpecials__right\">
          <h2 class=\"ourSpecials__title\">
            Nos spécialités
          </h2>
          <p class=\"ourSpecials__text\">
            Nos spécialités culinaires sont le steak tartare revisité et le gratin dauphinois à la truffe, deux plats français classiques préparés avec une touche de modernité et de raffinement pour une expérience gustative inoubliable.
          </p>
          <a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        echo "\" class=\"btn primary-btn\">Réservez une table</a>
        </div>
      </div>
    </div>
  </section>



  <section id=\"dishGrid\" data-aos=\"fade-up\">
    <div class=\"container\">
      <h2 class=\"dishGrid__title\">
        Nos plats vegan
      </h2>
      <div class=\"dishGrid__wrapper\">
        <div class=\"dishGrid__item\">
          <div class=\"dishGrid__item__img\">
            <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/food-1.png"), "html", null, true);
        echo "\" alt=\"food img\">
          </div>
          <div class=\"dishGrid__item__info\">
            <h3 class=\"dishGrid__item__title\">
              Salade vegan
            </h3>
            <h3 class=\"dishGrid__item__price\">12 €</h3>
            <div class=\"dishGrid__item__stars\">
              <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3star.png"), "html", null, true);
        echo "\" alt=\"3 star\">
            </div>
          </div>
        </div>
        <div class=\"dishGrid__item\">
          <div class=\"dishGrid__item__img\">
            <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/food-2.png"), "html", null, true);
        echo "\" alt=\"food img\">
          </div>
          <div class=\"dishGrid__item__info\">
            <h3 class=\"dishGrid__item__title\">
              Pâtes de céleri au pesto
            </h3>
            <h3 class=\"dishGrid__item__price\">12 €</h3>
            <div class=\"dishGrid__item__stars\">
              <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3star.png"), "html", null, true);
        echo "\" alt=\"3 star\">
            </div>
          </div>
        </div>
        <div class=\"dishGrid__item\">
          <div class=\"dishGrid__item__img\">
            <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/food-7.png"), "html", null, true);
        echo "\" alt=\"food img\">
          </div>
          <div class=\"dishGrid__item__info\">
            <h3 class=\"dishGrid__item__title\">
              Salade aux noix de cajou
            </h3>
            <h3 class=\"dishGrid__item__price\">12 €</h3>
            <div class=\"dishGrid__item__stars\">
              <img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3star.png"), "html", null, true);
        echo "\" alt=\"3 star\">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Top Dishes -->
  <!-- Discount Section -->
  <section id=\"discount\" data-aos=\"fade-up\">
    <div class=\"container\">
      <div class=\"discount__wrapper\">
        <div class=\"discount__images\">
          <div class=\"discount__img1\">
            <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/food-6.png"), "html", null, true);
        echo "\" alt=\"Food img\">
          </div>
          <div class=\"discount__img2\">
            <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/food-4.png"), "html", null, true);
        echo "\" alt=\"Food img\">
          </div>
          <div class=\"discount__img3\">
            <img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/food-3.png"), "html", null, true);
        echo "\" alt=\"Food img\">
          </div>
        </div>
        <div class=\"discount__info\">
          <h3 class=\"discount__text\">- 20%</h3>
          <h3 class=\"discount__title\">Promotion midi en semaine</h3>
          <h3 class=\"discount__price\">
            <span class=\"discount__oldPrice\">€45</span>
            <span class=\"discount__newPrice\">€35</span>
          </h3>
          <div class=\"discount__stars\">
            <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3star.png"), "html", null, true);
        echo "\" alt=\"3 stars\">
          </div>
          <a class=\"btn primary-btn\" href=\"";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        echo "\">En profiter</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Discount Section -->
  <!-- Events Media -->
  <section id=\"eventsMedia\" data-aos=\"fade-up\">
    <div class=\"container\">
      <div class=\"eventsMedia__wrapper\">
        <div class=\"eventsMedia__1\">
          <img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/eventsMedia1.png"), "html", null, true);
        echo "\" alt=\"events\">
        </div>
        <div class=\"eventMedia__2\">
          <img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/eventsMedia2.png"), "html", null, true);
        echo "\" alt=\"events\">
        </div>
      </div>
    </div>
  </section>
  <!-- End Events Media -->
  <!-- Events Info -->
  <section id=\"eventsInfo\" data-aos=\"fade-up\">
    <div class=\"container\">
      <div class=\"eventsInfo__wrapper\">
        <div class=\"eventsInfo__left\">
          <div class=\"eventsInfo__item\">
            <div class=\"eventsInfo__item__img\">
              <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/event-corporate.png"), "html", null, true);
        echo "\" alt=\"corporate events\">
            </div>
            <div class=\"eventsInfo__item__info\">
              <h2 class=\"eventsInfo__item__title\">Anniversaire</h2>
              <p class=\"eventsInfo__item__text\">
                L'un de nos établissement au cadre chaleureux saura répondre à vos attentes pour organiser votre anniversaire.
              </p>
            </div>
          </div>
          <div class=\"eventsInfo__item\">
            <div class=\"eventsInfo__item__img\">
              <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/event-weedings.png"), "html", null, true);
        echo "\"alt=\"wedding events\">
            </div>
            <div class=\"eventsInfo__item__info\">
              <h2 class=\"eventsInfo__item__title\">Mariages</h2>
              <p class=\"eventsInfo__item__text\">
                Nous sommes préparés à recevoir des mariages, la capacité de notre établissement peut atteindre jusqu'à 100 places selon le restaurant que vous choisissez.
              </p>
            </div>
          </div>
        </div>
        <div class=\"eventsInfo__right\">
          <h2 class=\"eventsInfo__title\">Organisation d'évènements</h2>
          <p class=\"eventsInfo__text\">
            Profitez de l'un de nos établissement pour organiser un évènement aux côtés de nos équipes. Vous pouvez nous contacter via le formulaire de contact de notre site.
          </p>
          <a href=\"";
        // line 293
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"btn primary-btn\">Contactez Nous !</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Events Info -->
  <!-- Why Us section -->
  <section id=\"whyUs\">
    <div class=\"container\">
      <div class=\"whyUs__wrapper\">
        <div class=\"whyUs__left\" data-aos=\"fade-right\">
          <h2 class=\"whyUs__title\">
            Pourquoi Nous ? 
          </h2>
          <p class=\"whyUs__text\">
            Choisissez-nous pour une expérience culinaire française unique en son genre. Nous proposons des plats traditionnels revisités avec une touche de créativité, préparés avec des ingrédients frais et de qualité pour offrir une explosion de saveurs en bouche. Notre service professionnel et attentionné, ainsi que notre ambiance élégante et confortable, vous garantissent une soirée mémorable dans notre restaurant.
          </p>
        </div>
        <div class=\"whyUs__right\" data-aos=\"fade-left\">
          <div class=\"whyUs__items__wrapper\">
            <div class=\"whyUs__item\">
              <div class=\"whyUs__item__icon\">
                <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/whyUs-icon1.svg"), "html", null, true);
        echo "\" alt=\"quality Food\">
              </div>
              <p class=\"whyUs__item__text\">Cuisine gastronomique</p>
            </div>
            <div class=\"whyUs__item\">
              <div class=\"whyUs__item__icon\">
                <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/whyUs-icon2.svg"), "html", null, true);
        echo "\" alt=\"Classical taste\">
              </div>
              <p class=\"whyUs__item__text\">Classique ou moderne</p>
            </div>
            <div class=\"whyUs__item\">
              <div class=\"whyUs__item__icon\">
                <img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/whyUs-icon3.svg"), "html", null, true);
        echo "\" alt=\"Skilled chef\">
              </div>
              <p class=\"whyUs__item__text\">Chef talentueux</p>
            </div>
            <div class=\"whyUs__item\">
              <div class=\"whyUs__item__icon\">
                <img src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/whyUs-icon4.svg"), "html", null, true);
        echo "\" alt=\"Best service\">
              </div>
              <p class=\"whyUs__item__text\">Service exceptionnel</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Why Us section -->
  <!-- Testimonial Section -->
  <section id=\"testimonial\">
    <div class=\"container\">
      <div class=\"testimonial__wrapper\" data-aos=\"fade-up\">
        <h2 class=\"testimonial__title\">Qu'en disent nos clients ?</h2>
        <div class=\"testimonial__items__wrapper\">
          <div class=\"testimonial__item\">
            <div class=\"testimonial__item__img\">
              <img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alice.jpg"), "html", null, true);
        echo "\" alt=\"Sayed Ahmed\">
            </div>
            <div class=\"testimonial__item__info\">
              <h3 class=\"testimonial__item__name\">Alice</h3>
              <div class=\"testimonial__item__stars\">
                <img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3star.png"), "html", null, true);
        echo "\" alt=\"3 star\">
              </div>
              <p class=\"testimonial__item__text\">
                \"J'ai été époustouflé par la présentation créative de mon plat et la qualité des ingrédients utilisés. Le service était également impeccable. Je recommande vivement ce restaurant !\"
              </p>
            </div>
          </div>
          <div class=\"testimonial__item\">
            <div class=\"testimonial__item__img\">
              <img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alexandre.webp"), "html", null, true);
        echo "\"  alt=\"Sayed Ahmed\">
            </div>
            <div class=\"testimonial__item__info\">
              <h3 class=\"testimonial__item__name\">Alexandre</h3>
              <div class=\"testimonial__item__stars\">
                <img src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3star.png"), "html", null, true);
        echo "\" alt=\"3 star\">
              </div>
              <p class=\"testimonial__item__text\">
                \"Je suis un grand fan de cuisine française et ce restaurant n'a pas déçu. Les plats étaient tous très bien préparés et les portions étaient généreuses. Je recommande vivement ce restaurant pour une soirée délicieuse.\"
              </p>
            </div>
          </div>
          <div class=\"testimonial__item\">
            <div class=\"testimonial__item__img\">
              <img src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/phil.jpg"), "html", null, true);
        echo "\" alt=\"Sayed Ahmed\">
            </div>
            <div class=\"testimonial__item__info\">
              <h3 class=\"testimonial__item__name\">Phillippe</h3>
              <div class=\"testimonial__item__stars\">
                <img src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3star.png"), "html", null, true);
        echo "\" alt=\"3 star\">
              </div>
              <p class=\"testimonial__item__text\">
                \"Le gratin dauphinois à la truffe était absolument divin. La crème était parfaitement assaisonnée et la truffe ajoutait une saveur extraordinaire. C'était vraiment un plat extraordinaire.\"
              </p>
            </div>
          </div>
          <div class=\"testimonial__item\">
            <div class=\"testimonial__item__img\">
              <img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/paul.jpg"), "html", null, true);
        echo "\" alt=\"Sayed Ahmed\">
            </div>
            <div class=\"testimonial__item__info\">
              <h3 class=\"testimonial__item__name\">Paul</h3>
              <div class=\"testimonial__item__stars\">
                <img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3star.png"), "html", null, true);
        echo "\" alt=\"3 star\">
              </div>
              <p class=\"testimonial__item__text\">
                \"Le steak tartare est le meilleur que j'ai jamais mangé ! La sauce épicée était délicieuse et la viande était parfaitement préparée. Je vais certainement revenir pour en avoir encore.\"
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonial Section -->
  <!-- Footer -->
  ";
        // line 411
        $this->loadTemplate("partials/_footer.html.twig", "home/index.html.twig", 411)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 411,  634 => 398,  626 => 393,  614 => 384,  606 => 379,  594 => 370,  586 => 365,  574 => 356,  566 => 351,  545 => 333,  536 => 327,  527 => 321,  518 => 315,  493 => 293,  475 => 278,  461 => 267,  445 => 254,  439 => 251,  425 => 240,  420 => 238,  406 => 227,  400 => 224,  394 => 221,  377 => 207,  366 => 199,  357 => 193,  346 => 185,  337 => 179,  326 => 171,  307 => 155,  290 => 141,  278 => 132,  267 => 124,  255 => 115,  231 => 94,  217 => 83,  203 => 72,  189 => 61,  175 => 50,  159 => 37,  139 => 19,  137 => 18,  127 => 17,  114 => 14,  110 => 13,  107 => 12,  105 => 11,  100 => 9,  96 => 7,  92 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue | Majestic {% endblock %}
{% block stylesheets %}
        
          <link rel=\"stylesheet\" href=\"{{ asset('Style/reset.css') }}\">
          <link rel=\"stylesheet\" href=\"{{ asset('Style/globalStyles.css') }}\">
          {# <link rel=\"stylesheet\" href=\"{{ asset('Style/about.css') }}\"> #}
          <link rel=\"stylesheet\" href=\"{{ asset('Style/components.css') }}\">
          {# <link rel=\"stylesheet\" href=\"{{ asset('Style/menu.css') }}\"> #}
          {# CDN AOS #}
          <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />
          <link rel=\"stylesheet\" href=\"{{ asset('Style/home.css') }}\">
            {{ parent() }}

{% endblock %}
{% block body %}
{% include \"partials/_nav.html.twig\"%}
<section id=\"hero\">
    <div class=\"container\">
      <div class=\"hero__wrapper\">
        <div class=\"hero__left\" data-aos=\"fade-left\">
          <div class=\"hero__left__wrapper\">

            <h1 class=\"hero__heading\">Une cuisine gastronomique française revisitée</h1>
            <p class=\"hero__info\">
              Majestic propose une expérience culinaire unique en son genre en revisitant la cuisine gastronomique française. Les plats sont préparés avec des ingrédients frais et de qualité, et présentés de manière créative pour offrir une explosion de saveurs en bouche. Les clients pourront ainsi déguster des plats traditionnels français revisités avec une touche de modernité et d'originalité, pour une expérience gastronomique inoubliable.
            </p>
            <div class=\"button__wrapper\">
              <a href=\"#\" class=\"btn primary-btn\">Découvrez la carte</a>
              <a href=\"#storeInfo\" class=\"btn\">Nos restaurants</a>
            </div>
          </div>
        </div>
        <div class=\"hero__right\" data-aos=\"fade-right\">
          <div class=\"hero__imgWrapper\">
            <img src=\"{{ asset('images/heroImg.png') }}\">
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id=\"storeInfo\" data-aos=\"fade-up\">
    <div class=\"container\">
      <div class=\"storeInfo__wrapper\">
        <div class=\"storeInfo__item\">
          <div class=\"storeInfo__icon\">
            <img src=\"{{ asset('images/wall-clock-icon.svg') }}\" alt=\"clock icon\">
          </div>
          <h3 class=\"storeInfo__title\">
            11 H - 23 H
          </h3>
          <p class=\"storeInfo__text\">
            Heures d'ouverture
          </p>
        </div>
        <div class=\"storeInfo__item\">
          <div class=\"storeInfo__icon\">
            <img src=\"{{ asset('images/address-icon.svg') }}\" alt=\"clock icon\">
          </div>
          <h3 class=\"storeInfo__title\">
            Paris 14
          </h3>
          <p class=\"storeInfo__text\">
            15 rue d'Alesia
          </p>
        </div>
        <div class=\"storeInfo__item\">
          <div class=\"storeInfo__icon\">
            <img src=\"{{ asset('images/address-icon.svg') }}\" alt=\"clock icon\">
          </div>
          <h3 class=\"storeInfo__title\">
            Paris 17
          </h3>
          <p class=\"storeInfo__text\">
            3 rue Emile Level
          </p>
        </div>
        <div class=\"storeInfo__item\">
          <div class=\"storeInfo__icon\">
            <img src=\"{{ asset('images/address-icon.svg') }}\" alt=\"clock icon\">
          </div>
          <h3 class=\"storeInfo__title\">
            Paris 5
          </h3>
          <p class=\"storeInfo__text\">
            76 rue Monge
          </p>
        </div>
        <div class=\"storeInfo__item\">
          <div class=\"storeInfo__icon\">
            <img src=\"{{ asset('images/phone-icon.svg') }}\" alt=\"clock icon\">
          </div>
          <h3 class=\"storeInfo__title\">
            01 80 13 12 38
          </h3>
          <p class=\"storeInfo__text\">
            Appelez nous
          </p>
        </div>
      </div>
    </div>
  </section>



    <section id=\"ourSpecials\" data-aos=\"fade-up\">
    <div class=\"container\">
      <div class=\"ourSpecials__wrapper\">
        <div class=\"ourSpecials__left\">
          <div class=\"ourSpecials__item\">
            <div class=\"ourSpecials__item__img\">
              <img src=\"{{ asset('images/steak-tartare.jpg') }}\" alt=\"food img\">
            </div>
            <h2 class=\"ourSpecials__item__title\">
              Steak Tartare
            </h2>
            <h3 class=\"ourSpecials__item__price\">
              34 €
            </h3>
            <div class=\"ourSpecials__item__stars\">
              <img src=\"{{ asset('images/3star.png') }}\" alt=\"3 stars\">
            </div>
            <p class=\"ourSpecials__item__text\">
              Notre steak tartare est une création unique qui combine les saveurs classiques du plat traditionnel français avec une touche moderne. Préparé à partir de viande de boeuf frais soigneusement sélectionnée et coupée à la main, ce tartare est mélangé avec une sauce épicée maison à base de moutarde de Dijon, de câpres et d'oignons rouges finement hachés.
            </p>
          </div>
          <div class=\"ourSpecials__item\">
            <div class=\"ourSpecials__item__img\">
              <img src=\"{{ asset('images/gratin.jpg') }}\" alt=\"food img\">
            </div>
            <h2 class=\"ourSpecials__item__title\">
              Gratin à la truffe
            </h2>
            <h3 class=\"ourSpecials__item__price\">
              47 €
            </h3>
            <div class=\"ourSpecials__item__stars\">
              <img src=\"{{ asset('images/3star.png') }}\" alt=\"3 stars\">
            </div>
            <p class=\"ourSpecials__item__text\">
              Notre gratin dauphinois à la truffe est un mets réconfortant et luxueux à la fois. Des pommes de terre tranchées finement sont cuites dans une crème riche et savoureuse, infusée avec de l'ail frais et des herbes aromatiques. La truffe noire fraîche est ensuite râpée sur le dessus pour ajouter une saveur et un arôme intenses et inoubliables. Le gratin est ensuite cuit jusqu'à ce qu'il soit doré et croustillant sur le dessus, avec un intérieur moelleux et crémeux
            </p>
          </div>
        </div>
        <div class=\"ourSpecials__right\">
          <h2 class=\"ourSpecials__title\">
            Nos spécialités
          </h2>
          <p class=\"ourSpecials__text\">
            Nos spécialités culinaires sont le steak tartare revisité et le gratin dauphinois à la truffe, deux plats français classiques préparés avec une touche de modernité et de raffinement pour une expérience gustative inoubliable.
          </p>
          <a href=\"{{ path('app_reservation') }}\" class=\"btn primary-btn\">Réservez une table</a>
        </div>
      </div>
    </div>
  </section>



  <section id=\"dishGrid\" data-aos=\"fade-up\">
    <div class=\"container\">
      <h2 class=\"dishGrid__title\">
        Nos plats vegan
      </h2>
      <div class=\"dishGrid__wrapper\">
        <div class=\"dishGrid__item\">
          <div class=\"dishGrid__item__img\">
            <img src=\"{{ asset('images/food-1.png') }}\" alt=\"food img\">
          </div>
          <div class=\"dishGrid__item__info\">
            <h3 class=\"dishGrid__item__title\">
              Salade vegan
            </h3>
            <h3 class=\"dishGrid__item__price\">12 €</h3>
            <div class=\"dishGrid__item__stars\">
              <img src=\"{{ asset('images/3star.png') }}\" alt=\"3 star\">
            </div>
          </div>
        </div>
        <div class=\"dishGrid__item\">
          <div class=\"dishGrid__item__img\">
            <img src=\"{{ asset('images/food-2.png') }}\" alt=\"food img\">
          </div>
          <div class=\"dishGrid__item__info\">
            <h3 class=\"dishGrid__item__title\">
              Pâtes de céleri au pesto
            </h3>
            <h3 class=\"dishGrid__item__price\">12 €</h3>
            <div class=\"dishGrid__item__stars\">
              <img src=\"{{ asset('images/3star.png') }}\" alt=\"3 star\">
            </div>
          </div>
        </div>
        <div class=\"dishGrid__item\">
          <div class=\"dishGrid__item__img\">
            <img src=\"{{ asset('images/food-7.png') }}\" alt=\"food img\">
          </div>
          <div class=\"dishGrid__item__info\">
            <h3 class=\"dishGrid__item__title\">
              Salade aux noix de cajou
            </h3>
            <h3 class=\"dishGrid__item__price\">12 €</h3>
            <div class=\"dishGrid__item__stars\">
              <img src=\"{{ asset('images/3star.png') }}\" alt=\"3 star\">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Top Dishes -->
  <!-- Discount Section -->
  <section id=\"discount\" data-aos=\"fade-up\">
    <div class=\"container\">
      <div class=\"discount__wrapper\">
        <div class=\"discount__images\">
          <div class=\"discount__img1\">
            <img src=\"{{ asset('images/food-6.png') }}\" alt=\"Food img\">
          </div>
          <div class=\"discount__img2\">
            <img src=\"{{ asset('images/food-4.png') }}\" alt=\"Food img\">
          </div>
          <div class=\"discount__img3\">
            <img src=\"{{ asset('images/food-3.png') }}\" alt=\"Food img\">
          </div>
        </div>
        <div class=\"discount__info\">
          <h3 class=\"discount__text\">- 20%</h3>
          <h3 class=\"discount__title\">Promotion midi en semaine</h3>
          <h3 class=\"discount__price\">
            <span class=\"discount__oldPrice\">€45</span>
            <span class=\"discount__newPrice\">€35</span>
          </h3>
          <div class=\"discount__stars\">
            <img src=\"{{ asset('images/3star.png') }}\" alt=\"3 stars\">
          </div>
          <a class=\"btn primary-btn\" href=\"{{ path('app_reservation') }}\">En profiter</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Discount Section -->
  <!-- Events Media -->
  <section id=\"eventsMedia\" data-aos=\"fade-up\">
    <div class=\"container\">
      <div class=\"eventsMedia__wrapper\">
        <div class=\"eventsMedia__1\">
          <img src=\"{{ asset('images/eventsMedia1.png') }}\" alt=\"events\">
        </div>
        <div class=\"eventMedia__2\">
          <img src=\"{{ asset('images/eventsMedia2.png') }}\" alt=\"events\">
        </div>
      </div>
    </div>
  </section>
  <!-- End Events Media -->
  <!-- Events Info -->
  <section id=\"eventsInfo\" data-aos=\"fade-up\">
    <div class=\"container\">
      <div class=\"eventsInfo__wrapper\">
        <div class=\"eventsInfo__left\">
          <div class=\"eventsInfo__item\">
            <div class=\"eventsInfo__item__img\">
              <img src=\"{{ asset('images/event-corporate.png') }}\" alt=\"corporate events\">
            </div>
            <div class=\"eventsInfo__item__info\">
              <h2 class=\"eventsInfo__item__title\">Anniversaire</h2>
              <p class=\"eventsInfo__item__text\">
                L'un de nos établissement au cadre chaleureux saura répondre à vos attentes pour organiser votre anniversaire.
              </p>
            </div>
          </div>
          <div class=\"eventsInfo__item\">
            <div class=\"eventsInfo__item__img\">
              <img src=\"{{ asset('images/event-weedings.png') }}\"alt=\"wedding events\">
            </div>
            <div class=\"eventsInfo__item__info\">
              <h2 class=\"eventsInfo__item__title\">Mariages</h2>
              <p class=\"eventsInfo__item__text\">
                Nous sommes préparés à recevoir des mariages, la capacité de notre établissement peut atteindre jusqu'à 100 places selon le restaurant que vous choisissez.
              </p>
            </div>
          </div>
        </div>
        <div class=\"eventsInfo__right\">
          <h2 class=\"eventsInfo__title\">Organisation d'évènements</h2>
          <p class=\"eventsInfo__text\">
            Profitez de l'un de nos établissement pour organiser un évènement aux côtés de nos équipes. Vous pouvez nous contacter via le formulaire de contact de notre site.
          </p>
          <a href=\"{{ path('app_contact') }}\" class=\"btn primary-btn\">Contactez Nous !</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Events Info -->
  <!-- Why Us section -->
  <section id=\"whyUs\">
    <div class=\"container\">
      <div class=\"whyUs__wrapper\">
        <div class=\"whyUs__left\" data-aos=\"fade-right\">
          <h2 class=\"whyUs__title\">
            Pourquoi Nous ? 
          </h2>
          <p class=\"whyUs__text\">
            Choisissez-nous pour une expérience culinaire française unique en son genre. Nous proposons des plats traditionnels revisités avec une touche de créativité, préparés avec des ingrédients frais et de qualité pour offrir une explosion de saveurs en bouche. Notre service professionnel et attentionné, ainsi que notre ambiance élégante et confortable, vous garantissent une soirée mémorable dans notre restaurant.
          </p>
        </div>
        <div class=\"whyUs__right\" data-aos=\"fade-left\">
          <div class=\"whyUs__items__wrapper\">
            <div class=\"whyUs__item\">
              <div class=\"whyUs__item__icon\">
                <img src=\"{{ asset('images/whyUs-icon1.svg') }}\" alt=\"quality Food\">
              </div>
              <p class=\"whyUs__item__text\">Cuisine gastronomique</p>
            </div>
            <div class=\"whyUs__item\">
              <div class=\"whyUs__item__icon\">
                <img src=\"{{ asset('images/whyUs-icon2.svg') }}\" alt=\"Classical taste\">
              </div>
              <p class=\"whyUs__item__text\">Classique ou moderne</p>
            </div>
            <div class=\"whyUs__item\">
              <div class=\"whyUs__item__icon\">
                <img src=\"{{ asset('images/whyUs-icon3.svg') }}\" alt=\"Skilled chef\">
              </div>
              <p class=\"whyUs__item__text\">Chef talentueux</p>
            </div>
            <div class=\"whyUs__item\">
              <div class=\"whyUs__item__icon\">
                <img src=\"{{ asset('images/whyUs-icon4.svg') }}\" alt=\"Best service\">
              </div>
              <p class=\"whyUs__item__text\">Service exceptionnel</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Why Us section -->
  <!-- Testimonial Section -->
  <section id=\"testimonial\">
    <div class=\"container\">
      <div class=\"testimonial__wrapper\" data-aos=\"fade-up\">
        <h2 class=\"testimonial__title\">Qu'en disent nos clients ?</h2>
        <div class=\"testimonial__items__wrapper\">
          <div class=\"testimonial__item\">
            <div class=\"testimonial__item__img\">
              <img src=\"{{ asset('images/alice.jpg') }}\" alt=\"Sayed Ahmed\">
            </div>
            <div class=\"testimonial__item__info\">
              <h3 class=\"testimonial__item__name\">Alice</h3>
              <div class=\"testimonial__item__stars\">
                <img src=\"{{ asset('images/3star.png') }}\" alt=\"3 star\">
              </div>
              <p class=\"testimonial__item__text\">
                \"J'ai été époustouflé par la présentation créative de mon plat et la qualité des ingrédients utilisés. Le service était également impeccable. Je recommande vivement ce restaurant !\"
              </p>
            </div>
          </div>
          <div class=\"testimonial__item\">
            <div class=\"testimonial__item__img\">
              <img src=\"{{ asset('images/alexandre.webp') }}\"  alt=\"Sayed Ahmed\">
            </div>
            <div class=\"testimonial__item__info\">
              <h3 class=\"testimonial__item__name\">Alexandre</h3>
              <div class=\"testimonial__item__stars\">
                <img src=\"{{ asset('images/3star.png') }}\" alt=\"3 star\">
              </div>
              <p class=\"testimonial__item__text\">
                \"Je suis un grand fan de cuisine française et ce restaurant n'a pas déçu. Les plats étaient tous très bien préparés et les portions étaient généreuses. Je recommande vivement ce restaurant pour une soirée délicieuse.\"
              </p>
            </div>
          </div>
          <div class=\"testimonial__item\">
            <div class=\"testimonial__item__img\">
              <img src=\"{{ asset('images/phil.jpg') }}\" alt=\"Sayed Ahmed\">
            </div>
            <div class=\"testimonial__item__info\">
              <h3 class=\"testimonial__item__name\">Phillippe</h3>
              <div class=\"testimonial__item__stars\">
                <img src=\"{{ asset('images/3star.png') }}\" alt=\"3 star\">
              </div>
              <p class=\"testimonial__item__text\">
                \"Le gratin dauphinois à la truffe était absolument divin. La crème était parfaitement assaisonnée et la truffe ajoutait une saveur extraordinaire. C'était vraiment un plat extraordinaire.\"
              </p>
            </div>
          </div>
          <div class=\"testimonial__item\">
            <div class=\"testimonial__item__img\">
              <img src=\"{{ asset('images/paul.jpg') }}\" alt=\"Sayed Ahmed\">
            </div>
            <div class=\"testimonial__item__info\">
              <h3 class=\"testimonial__item__name\">Paul</h3>
              <div class=\"testimonial__item__stars\">
                <img src=\"{{ asset('images/3star.png') }}\" alt=\"3 star\">
              </div>
              <p class=\"testimonial__item__text\">
                \"Le steak tartare est le meilleur que j'ai jamais mangé ! La sauce épicée était délicieuse et la viande était parfaitement préparée. Je vais certainement revenir pour en avoir encore.\"
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonial Section -->
  <!-- Footer -->
  {% include \"partials/_footer.html.twig\"%}
{% endblock %}

", "home/index.html.twig", "C:\\Users\\augus\\Symfony\\restaurant\\templates\\home\\index.html.twig");
    }
}
