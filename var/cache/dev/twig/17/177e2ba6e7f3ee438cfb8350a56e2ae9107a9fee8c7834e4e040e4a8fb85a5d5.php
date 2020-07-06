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

/* booking/bookingShow.html.twig */
class __TwigTemplate_d7ba07d5cb81ad6f516be89f3eac74d2de340a9e0b327653515e0f0850221e2d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/bookingShow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/bookingShow.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/bookingShow.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Récapitulatif";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $context["annonce"] = twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 7, $this->source); })()), "annonce", [], "any", false, false, false, 7);
        // line 8
        $context["author"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 8, $this->source); })()), "annonce", [], "any", false, false, false, 8), "author", [], "any", false, false, false, 8);
        // line 9
        echo "
<h1>Reservation n° ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", [0 => "withAlert"], "method", false, false, false, 11)) {
            // line 12
            echo "<div class=\"alert alert-success\">
    <h4 class=\"alert-heading\">
        <p>Votre réservation aupres de ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 14, $this->source); })()), "firstName", [], "any", false, false, false, 14), "html", null, true);
            echo " pour l'annonce de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
        a bien été prise en compte
    </h4>
</div>
";
        }
        // line 19
        echo "<div class=\"row\">

    <div class=\"col\">
        <div class=\"alert alert-light\">
            <h2>Détails</h2>
            <dl class=\"row\">
                <dt class=\"col-md-4\">Numéro de réservation </dt>
                <dd class=\"col-md-8\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "</dd>
                <dt class=\"col-md-4\">Date d'arrivée</dt>
                <dd class=\"col-md-8\">";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 28, $this->source); })()), "startDate", [], "any", false, false, false, 28), "m/d/Y"), "html", null, true);
        echo "</dd>
                <dt class=\"col-md-4\">Date de départ</dt>
                <dd class=\"col-md-8\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 30, $this->source); })()), "endDate", [], "any", false, false, false, 30), "m/d/Y"), "html", null, true);
        echo "</dd>
                <dt class=\"col-md-4\">Nombre de nuit</dt>
                <dd class=\"col-md-8\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 32, $this->source); })()), "duration", [], "any", false, false, false, 32), "html", null, true);
        echo "</dd>
                <dt class=\"col-md-4\">Montant totale</dt>
                <dd class=\"col-md-8\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 34, $this->source); })()), "amount", [], "any", false, false, false, 34), "html", null, true);
        echo " &euro;</dd>
                <dt class=\"col-md-4\">Commentaire</dt>
                <dd class=\"col-md-8\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 36, $this->source); })()), "comment", [], "any", false, false, false, 36), "html", null, true);
        echo "</dd>
            </dl>
            <hr>

            <h2 class=\"alert-heading\">Votre hote</h2>
            <div class=\"row\">
                <div class=\"col-3\">
                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 43, $this->source); })()), "picture", [], "any", false, false, false, 43), "html", null, true);
        echo "\" class=\"avatar-medium\" alt=\"avatar de booking\">
                </div>
                <div class=\"col-9\">
                    <h4><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_page", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 46, $this->source); })()), "slug", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 46, $this->source); })()), "firstName", [], "any", false, false, false, 46), "html", null, true);
        echo "</a></h4>
                    <span class=\"badge badge-primary\">Nombre d'annonce : ";
        // line 47
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 47, $this->source); })()), "annonces", [], "any", false, false, false, 47)), "html", null, true);
        echo "</span>
                    <p>Description: ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_page", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 49, $this->source); })()), "slug", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\"> Voir la page de profile de l'hote</a>
                </div>

                <div class=\"alert alert-light\" id=\"comment\">
                    <h2 class=\"alert-heading\">Votre avis compte !</h2>
                    ";
        // line 54
        if (1 === twig_compare(twig_date_converter($this->env), twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 54, $this->source); })()), "endDate", [], "any", false, false, false, 54)))) {
            // line 55
            echo "                    ";
            $context["comment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 55, $this->source); })()), "annonce", [], "any", false, false, false, 55), "CommentFromAuthor", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55)], "method", false, false, false, 55);
            // line 56
            echo "                    ";
            if ( !(null === (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 56, $this->source); })()))) {
                // line 57
                echo "                    <blockquote>
                        ";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 58, $this->source); })()), "content", [], "any", false, false, false, 58), "html", null, true);
                echo "
                    </blockquote>

                    <strong>Note : </strong>
                    ";
                // line 62
                $this->loadTemplate("shared/rating.html.twig", "booking/bookingShow.html.twig", 62)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 62, $this->source); })()), "rating", [], "any", false, false, false, 62)]));
                // line 63
                echo "                    ";
            } else {
                // line 64
                echo "                    ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_start');
                echo "
                    ";
                // line 65
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'widget');
                echo "
                    ";
                // line 66
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
                echo "
                    ";
            }
            // line 68
            echo "
                    ";
        } else {
            // line 70
            echo "                    <p>Vous ne pourrez pas noter cette annonce tant que votre voyage ne sera pas complet
                        !</p>
                    ";
        }
        // line 73
        echo "                </div>
            </div>




        </div>



    </div>




    <div class=\"col\">
        <div class=\"alert alert-light\">
            <h2>Votre hébergement</h2>
            <h4><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 91, $this->source); })()), "slug", [], "any", false, false, false, 91)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 91, $this->source); })()), "title", [], "any", false, false, false, 91), "html", null, true);
        echo "</a></h4>
            <img class=\"img-fluid\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 92, $this->source); })()), "coverImage", [], "any", false, false, false, 92), "html", null, true);
        echo "\" alt=\"image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 92, $this->source); })()), "title", [], "any", false, false, false, 92), "html", null, true);
        echo "\">
            <p>";
        // line 93
        echo twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 93, $this->source); })()), "content", [], "any", false, false, false, 93);
        echo "</p>
            <a class=\"btn btn-info btn-md\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 94, $this->source); })()), "slug", [], "any", false, false, false, 94)]), "html", null, true);
        echo "\">Plus d'information
                concernant l'annonce</a>
        </div>
    </div>

</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "booking/bookingShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 94,  268 => 93,  262 => 92,  256 => 91,  236 => 73,  231 => 70,  227 => 68,  222 => 66,  218 => 65,  213 => 64,  210 => 63,  208 => 62,  201 => 58,  198 => 57,  195 => 56,  192 => 55,  190 => 54,  182 => 49,  178 => 48,  174 => 47,  168 => 46,  162 => 43,  152 => 36,  147 => 34,  142 => 32,  137 => 30,  132 => 28,  127 => 26,  118 => 19,  108 => 14,  104 => 12,  102 => 11,  98 => 10,  95 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Récapitulatif{% endblock %}

{% block body %}

{% set annonce = booking.annonce%}
{% set author = booking.annonce.author %}

<h1>Reservation n° {{booking.id}}</h1>
{% if app.request.query.get('withAlert') %}
<div class=\"alert alert-success\">
    <h4 class=\"alert-heading\">
        <p>Votre réservation aupres de {{author.firstName}} pour l'annonce de {{annonce.title}}</p>
        a bien été prise en compte
    </h4>
</div>
{% endif %}
<div class=\"row\">

    <div class=\"col\">
        <div class=\"alert alert-light\">
            <h2>Détails</h2>
            <dl class=\"row\">
                <dt class=\"col-md-4\">Numéro de réservation </dt>
                <dd class=\"col-md-8\">{{booking.id}}</dd>
                <dt class=\"col-md-4\">Date d'arrivée</dt>
                <dd class=\"col-md-8\">{{booking.startDate|date(\"m/d/Y\")}}</dd>
                <dt class=\"col-md-4\">Date de départ</dt>
                <dd class=\"col-md-8\">{{booking.endDate|date(\"m/d/Y\")}}</dd>
                <dt class=\"col-md-4\">Nombre de nuit</dt>
                <dd class=\"col-md-8\">{{booking.duration}}</dd>
                <dt class=\"col-md-4\">Montant totale</dt>
                <dd class=\"col-md-8\">{{booking.amount}} &euro;</dd>
                <dt class=\"col-md-4\">Commentaire</dt>
                <dd class=\"col-md-8\">{{booking.comment}}</dd>
            </dl>
            <hr>

            <h2 class=\"alert-heading\">Votre hote</h2>
            <div class=\"row\">
                <div class=\"col-3\">
                    <img src=\"{{author.picture}}\" class=\"avatar-medium\" alt=\"avatar de booking\">
                </div>
                <div class=\"col-9\">
                    <h4><a href=\"{{path('profile_page', {'slug' : author.slug})}}\">{{author.firstName}}</a></h4>
                    <span class=\"badge badge-primary\">Nombre d'annonce : {{author.annonces|length}}</span>
                    <p>Description: {{author.description}}</p>
                    <a href=\"{{path('profile_page', {'slug' : author.slug})}}\"> Voir la page de profile de l'hote</a>
                </div>

                <div class=\"alert alert-light\" id=\"comment\">
                    <h2 class=\"alert-heading\">Votre avis compte !</h2>
                    {% if date() > date(booking.endDate) %}
                    {% set comment = booking.annonce.CommentFromAuthor(app.user) %}
                    {% if comment is not null %}
                    <blockquote>
                        {{comment.content}}
                    </blockquote>

                    <strong>Note : </strong>
                    {% include 'shared/rating.html.twig' with {'rating': comment.rating} %}
                    {% else %}
                    {{ form_start(form) }}
                    {{ form_widget(form) }}
                    {{ form_end(form) }}
                    {% endif %}

                    {% else %}
                    <p>Vous ne pourrez pas noter cette annonce tant que votre voyage ne sera pas complet
                        !</p>
                    {% endif %}
                </div>
            </div>




        </div>



    </div>




    <div class=\"col\">
        <div class=\"alert alert-light\">
            <h2>Votre hébergement</h2>
            <h4><a href=\"{{path('annonce', {'slug' : annonce.slug})}}\">{{annonce.title}}</a></h4>
            <img class=\"img-fluid\" src=\"{{annonce.coverImage}}\" alt=\"image de {{annonce.title}}\">
            <p>{{annonce.content|raw}}</p>
            <a class=\"btn btn-info btn-md\" href=\"{{path('annonce', {'slug' : annonce.slug})}}\">Plus d'information
                concernant l'annonce</a>
        </div>
    </div>

</div>


{% endblock %}", "booking/bookingShow.html.twig", "C:\\Users\\walid\\Desktop\\symfony_airbnb\\templates\\booking\\bookingShow.html.twig");
    }
}
