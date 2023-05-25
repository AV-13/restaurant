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

/* account/index.html.twig */
class __TwigTemplate_ac6c8f7987972a4d57b3fcd0a24ff371 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "La carte | Majestic";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        
          <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/reset.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/globalStyles.css"), "html", null, true);
        echo "\">
          ";
        // line 12
        echo "          <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/components.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/profile.css"), "html", null, true);
        echo "\">
          ";
        // line 15
        echo "          <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />
          ";
        // line 17
        echo "            ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
          <style>
.gradient-custom {
background: #f6d365;
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        $this->loadTemplate("partials/_nav.html.twig", "account/index.html.twig", 28)->display($context);
        // line 29
        $context["currentDate"] = twig_date_converter($this->env, "now");
        // line 46
        echo "
  ";
        // line 120
        echo "<section class=\"profilepage\">

<div class=\"wrapper\">
    <div class=\"left\">
           ";
        // line 124
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 124, $this->source); })()), "imageUrl", [], "any", false, false, false, 124))) {
            // line 125
            echo "              <img class=\"profile_img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/img/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "imageUrl", [], "any", false, false, false, 125))), "html", null, true);
            echo "\"
                alt=\"Avatar\"/>
              ";
        } else {
            // line 128
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMG/default.jpg"), "html", null, true);
            echo "\"
                alt=\"Avatar\"/>
              ";
        }
        // line 131
        echo "        <h2> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "firstname", [], "any", false, false, false, 131), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "lastname", [], "any", false, false, false, 131), "html", null, true);
        echo "</h2>
        <a <a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 132, $this->source); })()), "id", [], "any", false, false, false, 132)]), "html", null, true);
        echo "\" class=\"btn primary-btn\">Modifier</a>
    </div>
    <div class=\"right\">
        <div class=\"info\">
            <h3>Information</h3>
            <div class=\"info_data\">
                 <div class=\"data\">
                    <h2>Email</h2>
                    <p>alex@gmail.com</p>
                 </div>
                 <div class=\"data\">
                   <h2>Phone</h2>
                    <p>0001-213-998761</p>
              </div>
            </div>
        </div>
      
      <div class=\"projects\">
            <h3>Livraison</h3>
            <div class=\"projects_data\">
                 <div class=\"data\">
                    <h2>Recent</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                 </div>
                 <div class=\"data\">
                   <h2>Most Viewed</h2>
                    <p>dolor sit amet.</p>
              </div>
            </div>
        </div>
</div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 132,  172 => 131,  165 => 128,  158 => 125,  156 => 124,  150 => 120,  147 => 46,  145 => 29,  143 => 28,  133 => 27,  112 => 17,  109 => 15,  105 => 13,  100 => 12,  96 => 10,  92 => 9,  89 => 8,  79 => 7,  60 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}



{% block title %}La carte | Majestic{% endblock %}
{% block stylesheets %}
        
          <link rel=\"stylesheet\" href=\"{{ asset('Style/reset.css') }}\">
          <link rel=\"stylesheet\" href=\"{{ asset('Style/globalStyles.css') }}\">
          {# <link rel=\"stylesheet\" href=\"{{ asset('Style/about.css') }}\"> #}
          <link rel=\"stylesheet\" href=\"{{ asset('Style/components.css') }}\">
          <link rel=\"stylesheet\" href=\"{{ asset('Style/profile.css') }}\">
          {# CDN AOS #}
          <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />
          {# <link rel=\"stylesheet\" href=\"{{ asset('Style/home.css') }}\"> #}
            {{ parent() }}
          <style>
.gradient-custom {
background: #f6d365;
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>

{% endblock %}
{% block body %}
{% include \"partials/_nav.html.twig\" %}
{% set currentDate = date(\"now\") %}
{#<section data-aos=\"fade-down\">
  <div>
    <h1 class=\"profile_h1\">
      Profil
    </h1>
    <div class=\"profile_card\">
              {% if user.imageUrl is not null %}
              <img class=\"profile_img\" src=\"{{ asset('uploads/img/' ~ user.imageUrl) }}\"
                alt=\"Avatar\"/>
              {% else %}
              <img src=\"{{ asset('IMG/default.jpg') }}\"
                alt=\"Avatar\"/>
              {% endif %}
              <h2> {{ user.firstname }} {{ user.lastname }}</h2>
    
             {# <a href=\"{{ path('app_register_edit', {'id': user.id}) }}\">Modifier</a> #}

  {#<div class=\"profile_info\">
    <div class=\"profile_info_block\">
      <h3>Informations</h3>
      <hr>
      <div>
        <p>{{ user.phone }}</p>
        <p>{{ user.email}}</p>
      </div>
    </div>

    <div class=\"profile_info_block\">
      <h3>Livraison</h3>
      <hr>
      <div>
        <p>{{ user.country }}</p>
        <p>{{ user.city }}</p>
        <p>{{ user.zipcode }}</p>
        <p>{{ user.address }}</p>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
<section>
  <div>
    <div>
      <h2>Mes réservations à venir</h2>
      <div>
        {% for reservation in reservations %}
          {% if reservation.date > currentDate %}
            <div>
              <div>
                <div>
                  <h5>Au nom de {{ reservation.reservationName }}</h5>
                  <p>Date: {{ reservation.date|date(\"d-m-Y\") }}</p>
                  <p>Heure: {{ reservation.heure|date('H:i') }}</p>
                  <p>Restaurant: {{ reservation.restaurantName }}</p>
                  <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\">Modifier</a>
                </div>
              </div>
            </div>
            {% endif %}
          {% endfor %}
      </div>
    </div>
    <div>
      <h2>Mes réservations passées</h2>
      <div class=>
{% set hasReservations = false %}
{% for reservation in reservations %}
  {% if reservation.date < currentDate %}
    {% set hasReservations = true %}
    <div>
      <div>
        <div>
          <h5>Au nom de {{ reservation.reservationName }}</h5>
          <p>Date: {{ reservation.date|date(\"d-m-Y\") }}</p>
          <p>Heure: {{ reservation.heure|date('H:i') }}</p>
          <p>Restaurant: {{ reservation.restaurantName }}</p>
        </div>
      </div>
    </div>
  {% endif %}
{% endfor %}

{% if not hasReservations %}
  <p style=\"text-align:center; padding-top:100px;\">Vous n'avez pas encore mangé chez nous, nous avons hâte de vous retrouver.</p>
{% endif %}
      </div>
    </div>
  </div>
</section> #}
<section class=\"profilepage\">

<div class=\"wrapper\">
    <div class=\"left\">
           {% if user.imageUrl is not null %}
              <img class=\"profile_img\" src=\"{{ asset('uploads/img/' ~ user.imageUrl) }}\"
                alt=\"Avatar\"/>
              {% else %}
              <img src=\"{{ asset('IMG/default.jpg') }}\"
                alt=\"Avatar\"/>
              {% endif %}
        <h2> {{ user.firstname }} {{ user.lastname }}</h2>
        <a <a href=\"{{ path('app_register_edit', {'id': user.id}) }}\" class=\"btn primary-btn\">Modifier</a>
    </div>
    <div class=\"right\">
        <div class=\"info\">
            <h3>Information</h3>
            <div class=\"info_data\">
                 <div class=\"data\">
                    <h2>Email</h2>
                    <p>alex@gmail.com</p>
                 </div>
                 <div class=\"data\">
                   <h2>Phone</h2>
                    <p>0001-213-998761</p>
              </div>
            </div>
        </div>
      
      <div class=\"projects\">
            <h3>Livraison</h3>
            <div class=\"projects_data\">
                 <div class=\"data\">
                    <h2>Recent</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                 </div>
                 <div class=\"data\">
                   <h2>Most Viewed</h2>
                    <p>dolor sit amet.</p>
              </div>
            </div>
        </div>
</div>
</section>
{% endblock %}
", "account/index.html.twig", "C:\\Users\\augus\\Symfony\\restaurant\\templates\\account\\index.html.twig");
    }
}
