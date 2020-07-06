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

/* shared/header.html.twig */
class __TwigTemplate_a2d943bbe63e343f7a382d1f7aa6b7d2b803853df702d9da089234ea0c66e729 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">Air'Bnb</a>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
        echo "\">Annonces</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Pricing</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">About</a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">
  <form class=\"form-inline my-2 my-lg-0\" action=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"GET\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" name=\"search\">
      <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
            ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "            <li class=\"nav-item dropdown mx-5\">
                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"\" role=\"button\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "firstName", [], "any", false, false, false, 31), "html", null, true);
            echo "</a>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "slug", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">Modifier
                        profile</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_page");
            echo "\">Ma page</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_create");
            echo "\">Créer une annonce</a>


                    <a class=\"dropdown-item\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Deconnexion</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_bookings");
            echo "\"> Nos réservation</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                </div>
            </li>
            ";
        } else {
            // line 46
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
            echo "\">Se connecter</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
            echo "\">S'inscrire</a>
            </li>
            ";
        }
        // line 54
        echo "
        </ul>
    </div>
</nav>

";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "flashes", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 60
            echo "
";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 62
                echo "<div class=\"col-4 text-center float-right\">
    <div class=\"alert alert-dismissible alert-";
                // line 63
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        <strong>Notification: </strong> ";
                // line 65
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
    </div>

</div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
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
        return "shared/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 71,  159 => 65,  154 => 63,  151 => 62,  147 => 61,  144 => 60,  140 => 59,  133 => 54,  127 => 51,  120 => 47,  117 => 46,  108 => 40,  104 => 39,  98 => 36,  94 => 35,  89 => 33,  84 => 31,  80 => 29,  78 => 28,  71 => 24,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">Air'Bnb</a>
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
                <a class=\"nav-link\" href=\"{{path('annonces')}}\">Annonces</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Pricing</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">About</a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">
  <form class=\"form-inline my-2 my-lg-0\" action=\"{{path('search')}}\" method=\"GET\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" name=\"search\">
      <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
            {% if app.user %}
            <li class=\"nav-item dropdown mx-5\">
                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"\" role=\"button\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">{{app.user.firstName}}</a>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"{{path('edit_profile', {'slug' : app.user.slug})}}\">Modifier
                        profile</a>
                    <a class=\"dropdown-item\" href=\"{{path('profile_page')}}\">Ma page</a>
                    <a class=\"dropdown-item\" href=\"{{path('annonce_create')}}\">Créer une annonce</a>


                    <a class=\"dropdown-item\" href=\"{{path('logout')}}\">Deconnexion</a>
                    <a class=\"dropdown-item\" href=\"{{path('account_bookings')}}\"> Nos réservation</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                </div>
            </li>
            {% else %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('account_login')}}\">Se connecter</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('account_register')}}\">S'inscrire</a>
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

{% endfor %}", "shared/header.html.twig", "C:\\Users\\walid\\Desktop\\symfony_airbnb\\templates\\shared\\header.html.twig");
    }
}
