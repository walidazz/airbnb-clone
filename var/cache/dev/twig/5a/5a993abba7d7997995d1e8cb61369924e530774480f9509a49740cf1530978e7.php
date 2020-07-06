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

/* admin/shared/header.html.twig */
class __TwigTemplate_4acb5f605a4caff623bf50736bfb0fd1f6582b52881b4dc96088ae243fc83379 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/shared/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/shared/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"#\">Walid'Bnb</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\"
        aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav mx-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Accueil<span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\"> <i class=\"fas chart-line\"></i> Dashboard</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonce_index");
        echo "\"> <i class=\"fas fa-hotel\"></i> Annonces</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_booking_index");
        echo "\"> <i class=\"fas fa-folder\"></i>
                    Reservations</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_index");
        echo "\"> <i class=\"fas fa-comments\"></i>
                    Commentaires</a>
            </li>


            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\"> <i class=\"fas fa-users\"></i> Utilisateurs</a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">

            ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "            <li class=\"nav-item dropdown mx-5\">
                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"\" role=\"button\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "firstName", [], "any", false, false, false, 39), "html", null, true);
            echo "</a>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" target=\"_blank\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            echo "\"> <i class=\"fas fa-eye\"></i>
                        Voir le site</a>

                    <a class=\"dropdown-item\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_logout");
            echo "\">Deconnexion</a>

                </div>
            </li>

            ";
        }
        // line 50
        echo "
        </ul>
    </div>
</nav>

";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 56
            echo "
";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 58
                echo "<div class=\"col-4 text-center float-right\">
    <div class=\"alert alert-dismissible alert-";
                // line 59
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        <strong>Notification: </strong> ";
                // line 61
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
    </div>

</div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/shared/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 67,  144 => 61,  139 => 59,  136 => 58,  132 => 57,  129 => 56,  125 => 55,  118 => 50,  109 => 44,  103 => 41,  98 => 39,  94 => 37,  92 => 36,  78 => 25,  70 => 20,  64 => 17,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"#\">Walid'Bnb</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\"
        aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav mx-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Accueil<span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('admin_dashboard')}}\"> <i class=\"fas chart-line\"></i> Dashboard</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('admin_annonce_index')}}\"> <i class=\"fas fa-hotel\"></i> Annonces</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('admin_booking_index')}}\"> <i class=\"fas fa-folder\"></i>
                    Reservations</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('admin_comment_index')}}\"> <i class=\"fas fa-comments\"></i>
                    Commentaires</a>
            </li>


            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\"> <i class=\"fas fa-users\"></i> Utilisateurs</a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">

            {% if app.user %}
            <li class=\"nav-item dropdown mx-5\">
                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"\" role=\"button\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">{{app.user.firstName}}</a>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" target=\"_blank\" href=\"{{path('annonces')}}\"> <i class=\"fas fa-eye\"></i>
                        Voir le site</a>

                    <a class=\"dropdown-item\" href=\"{{path('admin_account_logout')}}\">Deconnexion</a>

                </div>
            </li>

            {% endif %}

        </ul>
    </div>
</nav>

{% for label,messages in app.flashes %}

{% for message in messages %}
<div class=\"col-4 text-center float-right\">
    <div class=\"alert alert-dismissible alert-{{label}}\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        <strong>Notification: </strong> {{message}}
    </div>

</div>

{% endfor %}

{% endfor %}", "admin/shared/header.html.twig", "C:\\Users\\walid\\Desktop\\symfony_airbnb\\templates\\admin\\shared\\header.html.twig");
    }
}
