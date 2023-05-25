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

/* contact/index.html.twig */
class __TwigTemplate_c92a52c9b5f71fd71fb723fca55a5a17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Contact | Majestic";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    
    ";
        // line 14
        echo "    ";
        // line 17
        echo "    .message-input {
        height: 250px;
        width: 25vw;
    } 
    ";
        // line 22
        echo "    ";
        // line 25
        echo "</style>
<body>
";
        // line 27
        $this->loadTemplate("partials/_nav.html.twig", "contact/index.html.twig", 27)->display($context);
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        // line 30
        echo "        ";
        // line 43
        echo "<section id=\"form\" data-aos=\"fade-down\">
  <div class=\"container\">
    <h3 class=\"form__title\">
      Contactez-nous
    </h3>
    <div class=\"form__wrapper\">
      ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 49, $this->source); })()), 'form_start', ["attr" => ["onsubmit" => "launchModal()"]]);
        echo "
      ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 50, $this->source); })()), 'errors');
        echo "
        <div class=\"form__group\">
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 52, $this->source); })()), "mail", [], "any", false, false, false, 52), 'label');
        echo "
          ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 53, $this->source); })()), "mail", [], "any", false, false, false, 53), 'widget');
        echo "
          ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 54, $this->source); })()), "mail", [], "any", false, false, false, 54), 'errors');
        echo "
        </div>
    <div class=\"form__group form__group__full\">
      ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 57, $this->source); })()), "message", [], "any", false, false, false, 57), 'label');
        echo "
      ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 58, $this->source); })()), "message", [], "any", false, false, false, 58), 'widget', ["attr" => ["style" => "height:300px"]]);
        echo "
      ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 59, $this->source); })()), "message", [], "any", false, false, false, 59), 'errors');
        echo "
    </div>

    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 62, $this->source); })()), "envoyer", [], "any", false, false, false, 62), 'widget');
        echo "
  ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
</div>

  </div>
</section>
";
        // line 68
        $this->loadTemplate("partials/_footer.html.twig", "contact/index.html.twig", 68)->display($context);
        // line 69
        echo "</body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 69,  173 => 68,  165 => 63,  161 => 62,  155 => 59,  151 => 58,  147 => 57,  141 => 54,  137 => 53,  133 => 52,  128 => 50,  124 => 49,  116 => 43,  114 => 30,  112 => 29,  110 => 28,  108 => 27,  104 => 25,  102 => 22,  96 => 17,  94 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact | Majestic{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    
    {# .form-group {
        display: flex;
        flex-direction: column;
    } #}
    {# .my-label {
        font-size:30px;
    } #}
    .message-input {
        height: 250px;
        width: 25vw;
    } 
    {# Ceci est un commentaire Twig en Symfony #}
    {# .mail-input {
        width: 20vw;
    } #}
</style>
<body>
{% include \"partials/_nav.html.twig\"%}
    {# <h1>Contactez-nous</h1> #}
    {# <div> #}
        {# {{ form_start(formulaire, {'attr': {'onsubmit':'launchModal()'}}) }}
            {{ form_errors(formulaire) }}
                {{ form_label(formulaire.mail)}}
                {{ form_widget(formulaire.mail)}}
                {{ form_errors(formulaire.mail) }}

                {{ form_label(formulaire.message) }}
                {{ form_widget(formulaire.message) }}
                {{ form_errors(formulaire.message) }}

              {{ form_widget(formulaire.envoyer) }}
            
        {{ form_end(formulaire) }} #}
<section id=\"form\" data-aos=\"fade-down\">
  <div class=\"container\">
    <h3 class=\"form__title\">
      Contactez-nous
    </h3>
    <div class=\"form__wrapper\">
      {{ form_start(formulaire, {'attr': {'onsubmit':'launchModal()'}}) }}
      {{ form_errors(formulaire) }}
        <div class=\"form__group\">
          {{ form_label(formulaire.mail)}}
          {{ form_widget(formulaire.mail)}}
          {{ form_errors(formulaire.mail) }}
        </div>
    <div class=\"form__group form__group__full\">
      {{ form_label(formulaire.message) }}
      {{ form_widget(formulaire.message, {'attr': {'style' : 'height:300px'}}) }}
      {{ form_errors(formulaire.message) }}
    </div>

    {{ form_widget(formulaire.envoyer) }}
  {{ form_end(formulaire) }}
</div>

  </div>
</section>
{% include \"partials/_footer.html.twig\"%}
</body>

{% endblock %}
", "contact/index.html.twig", "C:\\Users\\augus\\Symfony\\restaurant\\templates\\contact\\index.html.twig");
    }
}
