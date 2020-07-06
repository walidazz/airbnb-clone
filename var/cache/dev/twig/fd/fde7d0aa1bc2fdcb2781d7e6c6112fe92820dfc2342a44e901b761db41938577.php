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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_0a9cf788504e4f7b8d75034273af2f4aebd7473f8afd608a9a575d65e8ac0b44 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/dashboard/index.html.twig", 1);
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

        echo "Dashboard";
        
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

<div class=\"row mt-3\">

      <div class=\"col\">
<div class=\"card text-white bg-secondary dark mb-3 text-center\">
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-4\">
                <i class=\"fas fa-hotel fa-3x\"></i>
            </div>
            <div class=\"col-8\">
                <h4 class=\"card-title\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "html", null, true);
        echo " users</h4>
            </div>
        </div>
    </div>
</div>
      </div>
    <div class=\"col\">
<div class=\"card text-white bg-info mb-3 text-center\">
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-4\">
                <i class=\"fas fa-hotel fa-3x\"></i>
            </div>
            <div class=\"col-8\">
                <h4 class=\"card-title\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 32, $this->source); })()), "annonce", [], "any", false, false, false, 32), "html", null, true);
        echo " annonces </h4>
            </div>
        </div>
    </div>
</div>

    </div>
    <div class=\"col\">
        <div class=\"card text-white bg-warning  mb-3 text-center\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <i class=\"fas fa-folder fa-3x\"></i>
                    </div>
                    <div class=\"col-8\">
                        <h4 class=\"card-title\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 47, $this->source); })()), "booking", [], "any", false, false, false, 47), "html", null, true);
        echo " books</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col\">
              <div class=\"card text-white bg-success mb-3 text-center\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <i class=\"fas fa-comments fa-3x\"></i>
                    </div>
                    <div class=\"col-8\">
                        <h4 class=\"card-title\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 61, $this->source); })()), "comment", [], "any", false, false, false, 61), "html", null, true);
        echo " avis</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"col\">
        <div class=\"alert alert-success\">
            <h2 class=\"alert-heading my-3\"> <i class=\"fas fa-arrow-up\"></i> Les annonces populaires</h2>
            <table class=\"table table-hover text-white\">
                <thead>
                    <tr>
                        <th>Annonce</th>
                        <th>Proprio</th>
                        <th>Moyenne</th>
                    </tr>
                </thead>
                <tbody>
                      ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bestAnnonce"]) || array_key_exists("bestAnnonce", $context) ? $context["bestAnnonce"] : (function () { throw new RuntimeError('Variable "bestAnnonce" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 83
            echo "                    <tr>
                      
                            
                      
                        <th>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "title", [], "any", false, false, false, 87), "html", null, true);
            echo "</th>
                        <th><img src=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "picture", [], "any", false, false, false, 88), "html", null, true);
            echo "\" height=\"50px\" width=\"50px\" alt=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "firstName", [], "any", false, false, false, 88), "html", null, true);
            echo "</th>
                        <th class=\"text-center\"> <span class=\"badge badge-dark\">
                            ";
            // line 90
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "note", [], "any", false, false, false, 90), 1, ",", " "), "html", null, true);
            echo "
                        </span></th>
                     
                    </tr>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                </tbody>


            </table>
        </div>
    </div>
    <div class=\"col\">
<div class=\"alert alert-danger\">
            <h2 class=\"alert-heading my-3\"> <i class=\"fas fa-arrow-down\"></i> Les pires annonces </h2>
            <table class=\"table table-hover text-white\">
                <thead>
                    <tr>
                        <th>Annonce</th>
                        <th>Proprio</th>
                        <th>Moyenne</th>
                    </tr>
                </thead>
                <tbody>
                      ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["worstAnnonce"]) || array_key_exists("worstAnnonce", $context) ? $context["worstAnnonce"] : (function () { throw new RuntimeError('Variable "worstAnnonce" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 114
            echo "                    <tr>
                      
                            
                      
                        <th>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "title", [], "any", false, false, false, 118), "html", null, true);
            echo "</th>
                        <th><img src=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "picture", [], "any", false, false, false, 119), "html", null, true);
            echo "\" height=\"50px\" width=\"50px\" alt=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "firstName", [], "any", false, false, false, 119), "html", null, true);
            echo "</th>
                        <th class=\"text-center\"> <span class=\"badge badge-dark\">
                            ";
            // line 121
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "note", [], "any", false, false, false, 121), 1, ",", " "), "html", null, true);
            echo "
                        </span></th>
                     
                    </tr>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                </tbody>


            </table>
        </div>


    </div>
</div>

</div>












";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 126,  251 => 121,  244 => 119,  240 => 118,  234 => 114,  230 => 113,  210 => 95,  199 => 90,  192 => 88,  188 => 87,  182 => 83,  178 => 82,  154 => 61,  137 => 47,  119 => 32,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}


<div class=\"row mt-3\">

      <div class=\"col\">
<div class=\"card text-white bg-secondary dark mb-3 text-center\">
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-4\">
                <i class=\"fas fa-hotel fa-3x\"></i>
            </div>
            <div class=\"col-8\">
                <h4 class=\"card-title\">{{stats.user}} users</h4>
            </div>
        </div>
    </div>
</div>
      </div>
    <div class=\"col\">
<div class=\"card text-white bg-info mb-3 text-center\">
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-4\">
                <i class=\"fas fa-hotel fa-3x\"></i>
            </div>
            <div class=\"col-8\">
                <h4 class=\"card-title\">{{stats.annonce}} annonces </h4>
            </div>
        </div>
    </div>
</div>

    </div>
    <div class=\"col\">
        <div class=\"card text-white bg-warning  mb-3 text-center\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <i class=\"fas fa-folder fa-3x\"></i>
                    </div>
                    <div class=\"col-8\">
                        <h4 class=\"card-title\">{{stats.booking}} books</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col\">
              <div class=\"card text-white bg-success mb-3 text-center\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <i class=\"fas fa-comments fa-3x\"></i>
                    </div>
                    <div class=\"col-8\">
                        <h4 class=\"card-title\">{{stats.comment}} avis</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"col\">
        <div class=\"alert alert-success\">
            <h2 class=\"alert-heading my-3\"> <i class=\"fas fa-arrow-up\"></i> Les annonces populaires</h2>
            <table class=\"table table-hover text-white\">
                <thead>
                    <tr>
                        <th>Annonce</th>
                        <th>Proprio</th>
                        <th>Moyenne</th>
                    </tr>
                </thead>
                <tbody>
                      {% for annonce in bestAnnonce %}
                    <tr>
                      
                            
                      
                        <th>{{annonce.title}}</th>
                        <th><img src=\"{{annonce.picture}}\" height=\"50px\" width=\"50px\" alt=\"\">{{annonce.firstName}}</th>
                        <th class=\"text-center\"> <span class=\"badge badge-dark\">
                            {{annonce.note|number_format(1, \",\", \" \")}}
                        </span></th>
                     
                    </tr>
                         {% endfor %}
                </tbody>


            </table>
        </div>
    </div>
    <div class=\"col\">
<div class=\"alert alert-danger\">
            <h2 class=\"alert-heading my-3\"> <i class=\"fas fa-arrow-down\"></i> Les pires annonces </h2>
            <table class=\"table table-hover text-white\">
                <thead>
                    <tr>
                        <th>Annonce</th>
                        <th>Proprio</th>
                        <th>Moyenne</th>
                    </tr>
                </thead>
                <tbody>
                      {% for annonce in worstAnnonce %}
                    <tr>
                      
                            
                      
                        <th>{{annonce.title}}</th>
                        <th><img src=\"{{annonce.picture}}\" height=\"50px\" width=\"50px\" alt=\"\">{{annonce.firstName}}</th>
                        <th class=\"text-center\"> <span class=\"badge badge-dark\">
                            {{annonce.note|number_format(1, \",\", \" \")}}
                        </span></th>
                     
                    </tr>
                         {% endfor %}
                </tbody>


            </table>
        </div>


    </div>
</div>

</div>












{% endblock %}
", "admin/dashboard/index.html.twig", "C:\\Users\\walid\\Desktop\\symfony_airbnb\\templates\\admin\\dashboard\\index.html.twig");
    }
}
