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

/* annonce/_ad.html.twig */
class __TwigTemplate_ca8e0718b4cc1f0a7b37aa86d5ae4d1b0d89b7d67d5af18e5500119ce66fcf68 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/_ad.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/_ad.html.twig"));

        // line 1
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 1, $this->source); })()), "slug", [], "any", false, false, false, 1)]);
        // line 2
        echo "
<div class=\"col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-heannonceer text-center\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 6, $this->source); })()), "rooms", [], "any", false, false, false, 6), "html", null, true);
        echo " chambres, <strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 6, $this->source); })()), "price", [], "any", false, false, false, 6), 2, ",", " "), "html", null, true);
        echo "&euro; / nuit</strong> <br>

            ";
        // line 8
        if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 8, $this->source); })()), "comments", [], "any", false, false, false, 8)), 0)) {
            // line 9
            echo "                ";
            $this->loadTemplate("shared/rating.html.twig", "annonce/_ad.html.twig", 9)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 9, $this->source); })()), "avgRating", [], "any", false, false, false, 9)]));
            // line 10
            echo "            ";
        } else {
            // line 11
            echo "                <small>Pas encore noté</small>
            ";
        }
        // line 13
        echo "        </div>
        
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 16, $this->source); })()), "coverImage", [], "any", false, false, false, 16), "html", null, true);
        echo "\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">
        </a>

        <div class=\"card-body\">
            <h4 class=\"card-title\">
                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "
                </a>
            </h4>
            <p class=\"card-text\">
                ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 26, $this->source); })()), "introduction", [], "any", false, false, false, 26), "html", null, true);
        echo "
            </p>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary float-right\">En savoir plus !</a>

            ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 30, $this->source); })()), "author", [], "any", false, false, false, 30)))) {
            // line 31
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 31, $this->source); })()), "slug", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            ";
        }
        // line 33
        echo "        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "annonce/_ad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  109 => 31,  107 => 30,  102 => 28,  97 => 26,  90 => 22,  86 => 21,  78 => 16,  74 => 15,  70 => 13,  66 => 11,  63 => 10,  60 => 9,  58 => 8,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set url = path('annonce', {'slug': annonce.slug}) %}

<div class=\"col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-heannonceer text-center\">
            {{ annonce.rooms }} chambres, <strong>{{ annonce.price | number_format(2, ',', ' ') }}&euro; / nuit</strong> <br>

            {% if annonce.comments|length > 0 %}
                {% include 'shared/rating.html.twig' with {'rating': annonce.avgRating } %}
            {% else %}
                <small>Pas encore noté</small>
            {% endif %}
        </div>
        
        <a href=\"{{ url }}\">
            <img src=\"{{ annonce.coverImage }}\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">
        </a>

        <div class=\"card-body\">
            <h4 class=\"card-title\">
                <a href=\"{{ url }}\">
                    {{ annonce.title }}
                </a>
            </h4>
            <p class=\"card-text\">
                {{ annonce.introduction }}
            </p>
            <a href=\"{{ url }}\" class=\"btn btn-primary float-right\">En savoir plus !</a>

            {% if app.user and app.user == annonce.author %}
                <a href=\"{{ path('annonce_edit', {'slug': annonce.slug}) }}\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            {% endif %}
        </div>
    </div>
</div>", "annonce/_ad.html.twig", "C:\\Users\\walid\\Desktop\\symfony_airbnb\\templates\\annonce\\_ad.html.twig");
    }
}
