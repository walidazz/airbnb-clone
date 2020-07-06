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

/* global/index.html.twig */
class __TwigTemplate_905c9481041fba9d17a93778baba4c6079080273ef2c0962b5bf2b664b05369c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "global/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Bienvenue sur le meilleur
réseau d'appartements ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
  <div class=\"jumbotron mt-3\">
    <h1 class=\"display-3\">Bienvenue sur mon site !</h1>
    <p class=\"lead\">
      Nous mettons en relations les voyageurs et les propriétaires qui veulent
      profiter d'opportunités et gagner de l'argent en proposant leur bien à la
      location !
    </p>
    <hr class=\"my-4\" />
    <p>
      Vous êtes voyageur ? Et vous voulez voir où vous pourrez loger pour votre
      prochain déplacement ?
    </p>
    <p class=\"lead\">
      <a
        class=\"btn btn-primary btn-lg\"
        href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
        echo "\"
        role=\"button\"
        >Voir nos annonces</a
      >
    </p>
  </div>

  <h2 class=\"h1 my-5\">Nos appartements stars</h2>

  <div class=\"row\">
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 30, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo " ";
            $this->loadTemplate("annonce/_ad.html.twig", "global/index.html.twig", 30)->display(twig_array_merge($context, ["annonce" => twig_get_attribute($this->env, $this->source,             // line 31
$context["data"], "annonce", [], "any", false, false, false, 31)]));
            echo " ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </div>

  <h2 class=\"h1 my-5\">Nos propriétaires stars !</h2>

  <div class=\"row\">
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 38
            echo "    <div class=\"col\">
      <div class=\"card border-secondary mb-3\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 41), "firstName", [], "any", false, false, false, 41), "html", null, true);
            echo "</h4>

          <hr />

          <div class=\"card-text\">
            <img
              src=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 47), "picture", [], "any", false, false, false, 47), "html", null, true);
            echo "\"
              alt=\"Avatar de ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 48), "firstName", [], "any", false, false, false, 48), "html", null, true);
            echo "\"
              class=\"float-left mr-3\"
            />
            <p>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 51), "introduction", [], "any", false, false, false, 51), "html", null, true);
            echo "</p>
            <a
              href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_user", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 53), "slug", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\"
              class=\"btn btn-success float-right\"
              >En savoir plus!</a
            >
          </div>
        </div>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "  </div>
</div>


";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ch_cookie_consent.show_if_cookie_consent_not_set"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "global/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 66,  208 => 62,  193 => 53,  188 => 51,  182 => 48,  178 => 47,  169 => 41,  164 => 38,  160 => 37,  153 => 32,  138 => 31,  120 => 30,  107 => 20,  88 => 3,  78 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %} Bienvenue sur le meilleur
réseau d'appartements {% endblock %} {% block body %}

<div class=\"container\">
  <div class=\"jumbotron mt-3\">
    <h1 class=\"display-3\">Bienvenue sur mon site !</h1>
    <p class=\"lead\">
      Nous mettons en relations les voyageurs et les propriétaires qui veulent
      profiter d'opportunités et gagner de l'argent en proposant leur bien à la
      location !
    </p>
    <hr class=\"my-4\" />
    <p>
      Vous êtes voyageur ? Et vous voulez voir où vous pourrez loger pour votre
      prochain déplacement ?
    </p>
    <p class=\"lead\">
      <a
        class=\"btn btn-primary btn-lg\"
        href=\"{{ path('annonces') }}\"
        role=\"button\"
        >Voir nos annonces</a
      >
    </p>
  </div>

  <h2 class=\"h1 my-5\">Nos appartements stars</h2>

  <div class=\"row\">
    {% for data in annonces %} {% include 'annonce/_ad.html.twig' with
    {'annonce': data.annonce} %} {% endfor %}
  </div>

  <h2 class=\"h1 my-5\">Nos propriétaires stars !</h2>

  <div class=\"row\">
    {% for data in users %}
    <div class=\"col\">
      <div class=\"card border-secondary mb-3\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">{{ data.user.firstName }}</h4>

          <hr />

          <div class=\"card-text\">
            <img
              src=\"{{ data.user.picture }}\"
              alt=\"Avatar de {{ data.user.firstName }}\"
              class=\"float-left mr-3\"
            />
            <p>{{ data.user.introduction }}</p>
            <a
              href=\"{{ path('show_user', { slug: data.user.slug }) }}\"
              class=\"btn btn-success float-right\"
              >En savoir plus!</a
            >
          </div>
        </div>
      </div>
    </div>
    {% endfor %}
  </div>
</div>


{{ render(path('ch_cookie_consent.show_if_cookie_consent_not_set')) }}
{% endblock %}
", "global/index.html.twig", "C:\\Users\\walid\\Desktop\\symfony_airbnb\\templates\\global\\index.html.twig");
    }
}
