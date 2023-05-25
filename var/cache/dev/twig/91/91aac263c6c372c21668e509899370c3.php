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

/* reservation/edit.html.twig */
class __TwigTemplate_3738c8ad9497998d3d14e1e3b1bd39e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/edit.html.twig", 1);
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

        echo "Modification de votre réservation";
        
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
        $this->loadTemplate("partials/_nav.html.twig", "reservation/edit.html.twig", 17)->display($context);
        // line 18
        echo "    ";
        // line 61
        echo "<section id=\"form\" data-aos=\"fade-down\">
  <div class=\"container\">
    <h3 class=\"form__title\">
      Modification de la réservation
    </h3>
    <div class=\"form__wrapper\">
      ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "launchModal()"]]);
        echo "
      ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'errors');
        echo "
        <div class=\"form__group\">
          ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "date", [], "any", false, false, false, 70), 'label', ["label" => "Date"]);
        echo "
          ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "date", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control js-datepicker"]]);
        echo "
          ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "date", [], "any", false, false, false, 72), 'errors');
        echo "
        </div>
        <div class=\"form__group\">
          ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "heure", [], "any", false, false, false, 75), 'label', ["label" => "Heure"]);
        echo "
          ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "heure", [], "any", false, false, false, 76), 'widget');
        echo "
          ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "heure", [], "any", false, false, false, 77), 'errors');
        echo "
        </div>
        <div class=\"form__group\">
          ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "reservation_name", [], "any", false, false, false, 80), 'label', ["label" => "Nom de la réservation"]);
        echo "
          ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "reservation_name", [], "any", false, false, false, 81), 'widget', ["attr" => ["placeholder" => "Nom de la réservation"]]);
        echo "
          ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "reservation_name", [], "any", false, false, false, 82), 'errors');
        echo "
        </div>
        <div class=\"form__group\">
          ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "restaurant_name", [], "any", false, false, false, 85), 'label', ["label" => "Restaurant"]);
        echo "
          ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "restaurant_name", [], "any", false, false, false, 86), 'widget', ["attr" => ["placeholder" => "Restaurant à choisir", "class" => "form-select"]]);
        echo "
          ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "restaurant_name", [], "any", false, false, false, 87), 'errors');
        echo "
        </div>
        <div class=\"form__group\">
          ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "number", [], "any", false, false, false, 90), 'label', ["label" => "Nombre de personnes"]);
        echo "
          ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "number", [], "any", false, false, false, 91), 'widget', ["attr" => ["placeholder" => "Nombre de personnes"]]);
        echo "
          ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "number", [], "any", false, false, false, 92), 'errors');
        echo "
        </div>
        <div class=\"form__group\">
          ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "email", [], "any", false, false, false, 95), 'label', ["label" => "E-mail"]);
        echo "
          ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "email", [], "any", false, false, false, 96), 'widget', ["attr" => ["placeholder" => "Email"]]);
        echo "
          ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "email", [], "any", false, false, false, 97), 'errors');
        echo "
        </div>
        <div class=\"form__group\">
          ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "submit", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "btn primary-btn"]]);
        echo "
        </div>
      ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
        echo "
    </div>
  </div>
</section>

    ";
        // line 107
        $this->loadTemplate("partials/_footer.html.twig", "reservation/edit.html.twig", 107)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
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
        return "reservation/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 110,  243 => 109,  233 => 107,  225 => 102,  220 => 100,  214 => 97,  210 => 96,  206 => 95,  200 => 92,  196 => 91,  192 => 90,  186 => 87,  182 => 86,  178 => 85,  172 => 82,  168 => 81,  164 => 80,  158 => 77,  154 => 76,  150 => 75,  144 => 72,  140 => 71,  136 => 70,  131 => 68,  127 => 67,  119 => 61,  117 => 18,  114 => 17,  104 => 16,  85 => 15,  74 => 13,  71 => 3,  61 => 2,  38 => 1,);
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
{% block title %}Modification de votre réservation{% endblock %}
{% block body %}
    {% include \"partials/_nav.html.twig\" %}
    {# {{ dump(form.date) }} #}
{# <div class=\"container\">
<div class=\"row justify-content-center\">
<div class=\"col-md-6\">
<h1 style=\"text-align:center;\">Modification de la réservation</h1>
{{ form_start(form) }}
    <div class=\"form__group\">
        {{ form_label(form.date, 'Date') }}
        {{ form_widget(form.date, {'attr': {'class': 'form-control js-datepicker'}}) }}
        {{ form_errors(form.date) }}
    </div>
    <div class=\"form__group\">
    {{ form_label(form.heure, 'Heure') }}
    {{ form_widget(form.heure, {'attr': }}) }}
    {{ form_errors(form.heure) }}
    </div>
    <div class=\"form__group\">
    {{ form_label(form.reservation_name, 'Nom de la réservation') }}
    {{ form_widget(form.reservation_name, {'attr': {'placeholder': 'Nom de la réservation',}}) }}
    {{ form_errors(form.reservation_name) }}
    </div>
    <div class=\"form__group\">
    {{ form_label(form.restaurant_name, 'Restaurant') }}
    {{ form_widget(form.restaurant_name, {'attr': {'placeholder': 'Restaurant à choisir', 'class': 'form-select'}}) }}
    {{ form_errors(form.restaurant_name) }}
    </div>
    <div class=\"form__group\">
    {{ form_label(form.number, 'Nombre de personnes') }}
    {{ form_widget(form.number, {'attr': {'placeholder': 'Nombre de personnes',}}) }}
    {{ form_errors(form.number) }}
    </div>
    <div class=\"form__group\">
    {{ form_label(form.email) }}
    {{ form_widget(form.email, {'attr': {'placeholder': 'Email',}}) }}
    {{ form_errors(form.email) }}
    </div>
    <div class=\"form__group\">
    {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }}
    </div>
{{ form_end(form) }} 
</div>
</div>
</div> #}
<section id=\"form\" data-aos=\"fade-down\">
  <div class=\"container\">
    <h3 class=\"form__title\">
      Modification de la réservation
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
{% endblock %}", "reservation/edit.html.twig", "C:\\Users\\augus\\Symfony\\restaurant\\templates\\reservation\\edit.html.twig");
    }
}
