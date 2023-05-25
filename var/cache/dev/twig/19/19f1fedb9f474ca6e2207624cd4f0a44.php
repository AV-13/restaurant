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

/* security/login.html.twig */
class __TwigTemplate_7dfeb4e7ec2244b2cc4638298c91f525 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion | Majestic";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->loadTemplate("partials/_nav.html.twig", "security/login.html.twig", 6)->display($context);
        // line 7
        echo "<section id=\"form\" data-aos=\"fade-down\">
  <div class=\"container\">
    <h3 class=\"form__title\">
      Connectez-vous !
    </h3>
    <div class=\"form__wrapper\">
<form method=\"post\">


    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "        <div class=\"mb-3\">
            Vous êtes déjà connecté";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "userIdentifier", [], "any", false, false, false, 18), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Vous souhaitez vous déconnectez ?</a>
        </div>
    ";
        }
        // line 21
        echo "

    <div class=\"form__group\">
        <label for=\"inputEmail\" class=\"form-label\">Email</label>
        <input type=\"email\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" aria-describedby=\"emailHelp\" autocomplete=\"email\" required autofocus>
    </div>
    <div class=\"form__group\">
        <label for=\"inputPassword\" class=\"form-label\">Mot de passe</label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" autocomplete=\"current-password\" required>

        <input type=\"hidden\" name=\"_csrf_token\"
            value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
        >
    </div>
     <div class=\"form__group\">
    <button class=\"btn primary-btn\" type=\"submit\">
        Se connecter
    </button>
    </div>
        ";
        // line 40
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "        <div class=\"alert alert-danger\" style=\"margin-top:15px;\">Vos indentifiants ne sont pas valides</div>
    ";
        }
        // line 43
        echo "</form>
</div>
</div>
</section>
";
        // line 47
        $this->loadTemplate("partials/_footer.html.twig", "security/login.html.twig", 47)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 47,  147 => 43,  143 => 41,  141 => 40,  130 => 32,  120 => 25,  114 => 21,  106 => 18,  103 => 17,  101 => 16,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion | Majestic{% endblock %}

{% block body %}
{% include \"partials/_nav.html.twig\" %}
<section id=\"form\" data-aos=\"fade-down\">
  <div class=\"container\">
    <h3 class=\"form__title\">
      Connectez-vous !
    </h3>
    <div class=\"form__wrapper\">
<form method=\"post\">


    {% if app.user %}
        <div class=\"mb-3\">
            Vous êtes déjà connecté{{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Vous souhaitez vous déconnectez ?</a>
        </div>
    {% endif %}


    <div class=\"form__group\">
        <label for=\"inputEmail\" class=\"form-label\">Email</label>
        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" aria-describedby=\"emailHelp\" autocomplete=\"email\" required autofocus>
    </div>
    <div class=\"form__group\">
        <label for=\"inputPassword\" class=\"form-label\">Mot de passe</label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" autocomplete=\"current-password\" required>

        <input type=\"hidden\" name=\"_csrf_token\"
            value=\"{{ csrf_token('authenticate') }}\"
        >
    </div>
     <div class=\"form__group\">
    <button class=\"btn primary-btn\" type=\"submit\">
        Se connecter
    </button>
    </div>
        {% if error %}
        <div class=\"alert alert-danger\" style=\"margin-top:15px;\">Vos indentifiants ne sont pas valides</div>
    {% endif %}
</form>
</div>
</div>
</section>
{% include \"partials/_footer.html.twig\" %}
{% endblock %}
", "security/login.html.twig", "C:\\Users\\augus\\Symfony\\restaurant\\templates\\security\\login.html.twig");
    }
}
