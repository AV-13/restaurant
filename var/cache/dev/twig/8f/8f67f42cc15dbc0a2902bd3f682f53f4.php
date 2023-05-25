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

/* reservation/index.html.twig */
class __TwigTemplate_9d342ba489cf3f59de865e5af50b27c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<style>
";
        // line 13
        echo "</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Réservation  | Majestic";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    ";
        $this->loadTemplate("partials/_nav.html.twig", "reservation/index.html.twig", 17)->display($context);
        // line 18
        echo "    ";
        // line 61
        echo "


<section id=\"form\" data-aos=\"fade-down\">
  <div class=\"container\">
    <h3 class=\"form__title\">
      Formulaire de réservation
    </h3>
    <div class=\"form__wrapper\">
      ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "launchModal()"]]);
        echo "
      ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'errors');
        echo "
        <div class=\"form__group\">
          ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "date", [], "any", false, false, false, 73), 'label', ["label" => "Date"]);
        echo "
          ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "date", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control js-datepicker"]]);
        echo "
          ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "date", [], "any", false, false, false, 75), 'errors');
        echo "
        </div>
        <div class=\"form__group\">
          ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "heure", [], "any", false, false, false, 78), 'label', ["label" => "Heure"]);
        echo "
          ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "heure", [], "any", false, false, false, 79), 'widget');
        echo "
          ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "heure", [], "any", false, false, false, 80), 'errors');
        echo "
        </div>
        <div class=\"form__group\">
          ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "reservation_name", [], "any", false, false, false, 83), 'label', ["label" => "Nom de la réservation"]);
        echo "
          ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "reservation_name", [], "any", false, false, false, 84), 'widget', ["attr" => ["placeholder" => "Nom de la réservation"]]);
        echo "
          ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "reservation_name", [], "any", false, false, false, 85), 'errors');
        echo "
        </div>
        <div class=\"form__group\">
          ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "restaurant_name", [], "any", false, false, false, 88), 'label', ["label" => "Restaurant"]);
        echo "
          ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "restaurant_name", [], "any", false, false, false, 89), 'widget', ["attr" => ["placeholder" => "Restaurant à choisir", "class" => "form-select"]]);
        echo "
          ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "restaurant_name", [], "any", false, false, false, 90), 'errors');
        echo "
        </div>
        <div class=\"form__group\">
          ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "number", [], "any", false, false, false, 93), 'label', ["label" => "Nombre de personnes"]);
        echo "
          ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "number", [], "any", false, false, false, 94), 'widget', ["attr" => ["placeholder" => "Nombre de personnes"]]);
        echo "
          ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "number", [], "any", false, false, false, 95), 'errors');
        echo "
        </div>
        <div class=\"form__group\">
          ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), 'label', ["label" => "E-mail"]);
        echo "
          ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "email", [], "any", false, false, false, 99), 'widget', ["attr" => ["placeholder" => "Email"]]);
        echo "
          ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "email", [], "any", false, false, false, 100), 'errors');
        echo "
        </div>
        <div class=\"form__group\">
          ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "submit", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "btn primary-btn"]]);
        echo "
        </div>
      ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_end');
        echo "
    </div>
  </div>
</section>

    ";
        // line 110
        $this->loadTemplate("partials/_footer.html.twig", "reservation/index.html.twig", 110)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "
<script>
   \$(document).on('ready', function() {
         \$('.js-datepicker').datepicker({
              format: 'yyyy-MM-dd HH:mm:ss',
              startDate: new Date(),
         });
     });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 113,  246 => 112,  236 => 110,  228 => 105,  223 => 103,  217 => 100,  213 => 99,  209 => 98,  203 => 95,  199 => 94,  195 => 93,  189 => 90,  185 => 89,  181 => 88,  175 => 85,  171 => 84,  167 => 83,  161 => 80,  157 => 79,  153 => 78,  147 => 75,  143 => 74,  139 => 73,  134 => 71,  130 => 70,  119 => 61,  117 => 18,  114 => 17,  104 => 16,  85 => 15,  74 => 13,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
<style>
{# .table-condensed {
  display: none;
}
#reservation_date_date{
    display:none;
}
#reservation_date_time{
    display:none;
} #}
</style>
{% endblock %}
{% block title %}Réservation  | Majestic{% endblock %}
{% block body %}
    {% include \"partials/_nav.html.twig\" %}
    {# {{ dump(form.date) }} #}
{# <div class=\"container\">
<div class=\"row justify-content-center\">
<div class=\"col-md-6\">
<h1 style=\"text-align:center;\"> Formulaire de réservation</h1>
{{ form_start(form) }}
    <div class=\"outline mb-4\">
        {{ form_label(form.date, 'Date') }}
        {{ form_widget(form.date, {'attr': {'class': 'form-control js-datepicker'}}) }}
        {{ form_errors(form.date) }}
    </div>
    <div class=\"outline mb-4\">
    {{ form_label(form.heure, 'Heure') }}
    {{ form_widget(form.heure, {'attr': {'class': 'form-control'}}) }}
    {{ form_errors(form.heure) }}
    </div>
    <div class=\"outline mb-4\">
    {{ form_label(form.reservation_name, 'Nom de la réservation') }}
    {{ form_widget(form.reservation_name, {'attr': {'placeholder': 'Nom de la réservation', 'class': 'form-control'}}) }}
    {{ form_errors(form.reservation_name) }}
    </div>
    <div class=\"outline mb-4\">
    {{ form_label(form.restaurant_name, 'Restaurant') }}
    {{ form_widget(form.restaurant_name, {'attr': {'placeholder': 'Restaurant à choisir', 'class': 'form-select'}}) }}
    {{ form_errors(form.restaurant_name) }}
    </div>
    <div class=\"outline mb-4\">
    {{ form_label(form.number, 'Nombre de personnes') }}
    {{ form_widget(form.number, {'attr': {'placeholder': 'Nombre de personnes', 'class': 'form-control'}}) }}
    {{ form_errors(form.number) }}
    </div>
    <div class=\"outline mb-4\">
    {{ form_label(form.email) }}
    {{ form_widget(form.email, {'attr': {'placeholder': 'Email', 'class': 'form-control'}}) }}
    {{ form_errors(form.email) }}
    </div>
    <div class=\"outline mb-4\">
    {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }}
    </div>
{{ form_end(form) }}
</div>
</div>
</div> #}



<section id=\"form\" data-aos=\"fade-down\">
  <div class=\"container\">
    <h3 class=\"form__title\">
      Formulaire de réservation
    </h3>
    <div class=\"form__wrapper\">
      {{ form_start(form, {'attr': {'onsubmit':'launchModal()'}}) }}
      {{ form_errors(form) }}
        <div class=\"form__group\">
          {{ form_label(form.date, 'Date') }}
          {{ form_widget(form.date, {'attr': {'class': 'form-control js-datepicker'}}) }}
          {{ form_errors(form.date) }}
        </div>
        <div class=\"form__group\">
          {{ form_label(form.heure, 'Heure') }}
          {{ form_widget(form.heure) }}
          {{ form_errors(form.heure) }}
        </div>
        <div class=\"form__group\">
          {{ form_label(form.reservation_name, 'Nom de la réservation') }}
          {{ form_widget(form.reservation_name, {'attr': {'placeholder': 'Nom de la réservation'}}) }}
          {{ form_errors(form.reservation_name) }}
        </div>
        <div class=\"form__group\">
          {{ form_label(form.restaurant_name, 'Restaurant') }}
          {{ form_widget(form.restaurant_name, {'attr': {'placeholder': 'Restaurant à choisir', 'class': 'form-select'}}) }}
          {{ form_errors(form.restaurant_name) }}
        </div>
        <div class=\"form__group\">
          {{ form_label(form.number, 'Nombre de personnes') }}
          {{ form_widget(form.number, {'attr': {'placeholder': 'Nombre de personnes'}}) }}
          {{ form_errors(form.number) }}
        </div>
        <div class=\"form__group\">
          {{ form_label(form.email, 'E-mail') }}
          {{ form_widget(form.email, {'attr': {'placeholder': 'Email',}}) }}
          {{ form_errors(form.email) }}
        </div>
        <div class=\"form__group\">
          {{ form_widget(form.submit, {'attr': {'class': 'btn primary-btn'}}) }}
        </div>
      {{ form_end(form) }}
    </div>
  </div>
</section>

    {% include \"partials/_footer.html.twig\" %}
{% endblock %}
{% block javascripts %}

<script>
   \$(document).on('ready', function() {
         \$('.js-datepicker').datepicker({
              format: 'yyyy-MM-dd HH:mm:ss',
              startDate: new Date(),
         });
     });
</script>
{% endblock %}
", "reservation/index.html.twig", "C:\\Users\\augus\\Symfony\\restaurant\\templates\\reservation\\index.html.twig");
    }
}
