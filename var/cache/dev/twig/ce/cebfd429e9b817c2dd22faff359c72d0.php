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

/* partials/_nav.html.twig */
class __TwigTemplate_1727652c8255cae504744a209c088781 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_nav.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partials/_nav.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "        
          <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/reset.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/globalStyles.css"), "html", null, true);
        echo "\">
          ";
        // line 34
        echo "          <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/components.css"), "html", null, true);
        echo "\">
          ";
        // line 36
        echo "          ";
        // line 37
        echo "          <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />
          ";
        // line 39
        echo "            ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "
";
        // line 48
        echo "    ";
        // line 82
        echo "        ";
        // line 108
        echo "  <div class=\"nav\">
      <div class=\"nav__wrapper\">
        <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"logo\">
          <img style=\"width:150px; height:90px;\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Majestic Logo\">
        </a>
        <nav>
          <div class=\"nav__icon\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
              stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
              class=\"feather feather-menu\">
              <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\" />
              <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\" />
              <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\" />
            </svg>
          </div>
          <div class=\"nav__bgOverlay\"></div>
          <ul class=\"nav__list\">
            <div class=\"nav__close\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                class=\"feather feather-x\">
                <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\" />
                <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\" />
              </svg>
            </div>
            <div class=\"nav__list__wrapper\">

              <li><a class=\"nav__link\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a></li>
              <li><a class=\"nav__link\" href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte");
        echo "\">La carte</a></li>
              <li><a class=\"nav__link\" href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_apropos");
        echo "\">A propos de nous</a></li>
              <li><a class=\"nav__link\" href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Nous contacter</a></li>
              <li><a class=\"nav__link\" href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        echo "\">Réservez</a></li>
              ";
        // line 140
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140))) {
            // line 141
            echo "              <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn primary-btn\">Connexion</a></li>
              <li><a href=\"";
            // line 142
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn primary-btn\">Inscription</a></li>
              ";
        }
        // line 144
        echo "              ";
        // line 145
        echo "              ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145))) {
            // line 146
            echo "              <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn primary-btn\">Déconnexion</a></li>
              <li><a href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147)]), "html", null, true);
            echo "\" class=\"btn primary-btn\">Mon compte</a></li>
              ";
        }
        // line 149
        echo "            </div>
          </ul>
        </nav>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 149,  199 => 147,  194 => 146,  191 => 145,  189 => 144,  184 => 142,  179 => 141,  177 => 140,  173 => 139,  169 => 138,  165 => 137,  161 => 136,  157 => 135,  130 => 111,  126 => 110,  122 => 108,  120 => 82,  118 => 48,  115 => 44,  105 => 43,  90 => 39,  87 => 37,  85 => 36,  80 => 34,  76 => 32,  72 => 31,  69 => 30,  59 => 29,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{# {% block stylesheets %} #}
{# <style>
  .nav-item {
    font-size:1.3em;
  }
  .boutons{
    display:flex;
    flex-direction:row;
    align-items:center;
  }
  .boutons a{
    font-size:1.3em;
  }
  .navbarflex{
    width:100%;
    display:flex;
    justify-content:space-around;
  }
 #navbarSupportedContent {
  
  justify-content: center;
}
.navbarflex{
  background-color: white;
}
</style> #}
{# {% endblock %} #}
{% block stylesheets %}
        
          <link rel=\"stylesheet\" href=\"{{ asset('Style/reset.css') }}\">
          <link rel=\"stylesheet\" href=\"{{ asset('Style/globalStyles.css') }}\">
          {# <link rel=\"stylesheet\" href=\"{{ asset('Style/about.css') }}\"> #}
          <link rel=\"stylesheet\" href=\"{{ asset('Style/components.css') }}\">
          {# <link rel=\"stylesheet\" href=\"{{ asset('Style/menu.css') }}\"> #}
          {# CDN AOS #}
          <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />
          {# <link rel=\"stylesheet\" href=\"{{ asset('Style/home.css') }}\"> #}
            {{ parent() }}


{% endblock %}
{% block body %}

{# <nav class=\"navbar navbar-expand-lg bg-light\">
    <div class=\"navbarflex\">
    {# <a class=\"navbar-brand logo\" href=\"{{ path('app_home') }}\">LOGO</a> #}
    {# <div>
    <a style=\"width:100px;\" href=\"{{ path('app_home') }}\"><img style=\"width:100px; height:100px;\" src=\"{{ asset('/IMG/logotestrogne.png') }}\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <div class=\"centernav\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href= \"{{ path('app_home') }}\">Home</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">La carte</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            A propos de nous
          </a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" href=\"{{ path('app_creation') }}\">Création</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Nos restaurants</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">L'équipe</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Le chef</a></li>
          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href= \"/contact\">Nous contacter</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href= \"{{ path('app_reservation') }}\">Reservez une table</a>
        </li>
        <li class=\"nav-item\">
          {# <a class=\"nav-link\" href= \"{{ path('app_recrutement') }}\">Nous rejoindre</a> #}
        {# </li> 
      </ul>
      </div>
      </div>
      <div class=\"boutons\"> 
        {% if app.user is null %}
        
        <li>
        <a class=\"btn btn-outline-success button\" href= \"{{ path('app_login') }}\">Login</a>
        </li>
        <li>
        <a class=\"btn btn-outline-success button\" href= \"{{ path('app_register') }}\">Register</a>
        </li>
        {% endif %}
        {# OU 
        {% if app.user is not null %}
        <li> 
        <a class=\"btn btn-outline-success button\" href= \"{{ path('app_logout') }}\">Logout</a>
        </li>
        <li>
        <a class=\"btn btn-outline-success button\" href= \"{{ path('app_account', {'id': app.user.id}) }}\">My account</a>
        </li>
        {% endif %}
        </div>
        </div>
</nav> #}
  <div class=\"nav\">
      <div class=\"nav__wrapper\">
        <a href=\"{{ path('app_home') }}\" class=\"logo\">
          <img style=\"width:150px; height:90px;\" src=\"{{ asset('images/logo.png') }}\" alt=\"Majestic Logo\">
        </a>
        <nav>
          <div class=\"nav__icon\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
              stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
              class=\"feather feather-menu\">
              <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\" />
              <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\" />
              <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\" />
            </svg>
          </div>
          <div class=\"nav__bgOverlay\"></div>
          <ul class=\"nav__list\">
            <div class=\"nav__close\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                class=\"feather feather-x\">
                <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\" />
                <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\" />
              </svg>
            </div>
            <div class=\"nav__list__wrapper\">

              <li><a class=\"nav__link\" href=\"{{ path('app_home') }}\">Accueil</a></li>
              <li><a class=\"nav__link\" href=\"{{ path('app_carte') }}\">La carte</a></li>
              <li><a class=\"nav__link\" href=\"{{ path('app_apropos') }}\">A propos de nous</a></li>
              <li><a class=\"nav__link\" href=\"{{ path('app_contact') }}\">Nous contacter</a></li>
              <li><a class=\"nav__link\" href=\"{{ path('app_reservation') }}\">Réservez</a></li>
              {% if app.user is null %}
              <li><a href=\"{{ path('app_login') }}\" class=\"btn primary-btn\">Connexion</a></li>
              <li><a href=\"{{ path('app_register') }}\" class=\"btn primary-btn\">Inscription</a></li>
              {% endif %}
              {# OU #}
              {% if app.user is not null %}
              <li><a href=\"{{ path('app_logout') }}\" class=\"btn primary-btn\">Déconnexion</a></li>
              <li><a href=\"{{ path('app_account', {'id': app.user.id}) }}\" class=\"btn primary-btn\">Mon compte</a></li>
              {% endif %}
            </div>
          </ul>
        </nav>
      </div>
    </div>
  </div>
{# <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script> #}
{% endblock %}", "partials/_nav.html.twig", "C:\\Users\\augus\\Symfony\\restaurant\\templates\\Partials\\_nav.html.twig");
    }
}
