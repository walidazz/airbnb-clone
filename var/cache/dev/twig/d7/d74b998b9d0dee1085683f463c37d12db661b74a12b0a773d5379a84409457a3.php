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

/* annonce/single.html.twig */
class __TwigTemplate_9cd7d277e4dc16ac7d0533561f2a2b952184e1e512d9735dea3d150ecf906aab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/single.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/single.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "annonce/single.html.twig", 1);
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

        echo "Annonce détail";
        
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



<div class=\"row\">

    <div class=\"col border border-primary m-3 p-3\">
        <div class=\"row m-5 \"></div>
        Titre:";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
        echo " <br>
        <img height=\"200\" width=\"200\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 15, $this->source); })()), "coverImage", [], "any", false, false, false, 15), "html", null, true);
        echo "\" alt=\"\"> <br>
        Introduction: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 16, $this->source); })()), "introduction", [], "any", false, false, false, 16), "html", null, true);
        echo " <br>
        Contenu: ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 17, $this->source); })()), "content", [], "any", false, false, false, 17);
        echo " <br>
        Nombre de chambre ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 18, $this->source); })()), "rooms", [], "any", false, false, false, 18), "html", null, true);
        echo " <br>
        Prix:";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 19, $this->source); })()), "rooms", [], "any", false, false, false, 19), "html", null, true);
        echo " <br>
        <div class=\"border border-black\">
            Auteur: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 21, $this->source); })()), "author", [], "any", false, false, false, 21), "firstname", [], "any", false, false, false, 21), "html", null, true);
        echo "
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 22, $this->source); })()), "author", [], "any", false, false, false, 22), "picture", [], "any", false, false, false, 22)), "html", null, true);
        echo "\" height=\"200\" width=\"200\" alt=\"\">
            nb annonce utilisateur ";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 23, $this->source); })()), "author", [], "any", false, false, false, 23)), "html", null, true);
        echo "
            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 24, $this->source); })()), "author", [], "any", false, false, false, 24), "introduction", [], "any", false, false, false, 24), "html", null, true);
        echo "
            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_user", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 25, $this->source); })()), "author", [], "any", false, false, false, 25), "slug", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">Voir profil de ce bouffon</a>
        </div>

        ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 28, $this->source); })()), "author", [], "any", false, false, false, 28)))) {
            // line 29
            echo "        <a class=\"btn btn-danger btn-md\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">
            Modifier </a>
        ";
        }
        // line 32
        echo "
        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 33, $this->source); })()), "slug", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\" class=\"btn btn-danger\">Supprimer</a>


        <a class=\"btn btn-primary btn-md\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_create", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 36, $this->source); })()), "slug", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\"> Reserver !
        </a>


        <div class=\"row\">
            ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 41, $this->source); })()), "comments", [], "any", false, false, false, 41)) {
            // line 42
            echo "            <h4>Section commentaires</h4>
            <div class=\"alert alert-info\">
                <h4 class=\"alert-heading text-center \">
                    <div class=\"row align-items-center\">
                        <div class=\"col\">Note globale donnée par nos voyageurs </div>
                        <div class=\"col\">

                            ";
            // line 49
            $this->loadTemplate("shared/rating.html.twig", "annonce/single.html.twig", 49)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 49, $this->source); })()), "AvgRating", [], "any", false, false, false, 49)]));
            echo " <br>
                            <small>cette moyenne est calculé sur
                                ";
            // line 51
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 51, $this->source); })()), "comments", [], "any", false, false, false, 51)), "html", null, true);
            echo " </small>
                        </div>
                    </div>

                </h4>
            </div>
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 57, $this->source); })()), "comments", [], "any", false, false, false, 57));
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
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 58
                echo "            <div class=\"rounded border-black border m-3 p-3\">
                Auteur : ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 59), "firstName", [], "any", false, false, false, 59), "html", null, true);
                echo " <br>
                ";
                // line 60
                $this->loadTemplate("shared/rating.html.twig", "annonce/single.html.twig", 60)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 60)]));
                // line 61
                echo "

                <br>

                Commentaire: ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 65), "html", null, true);
                echo " <br>
                date: ";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 66)), "html", null, true);
                echo " <br>

            </div>


            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "            ";
        }
        // line 73
        echo "        </div>


        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 78, $this->source); })()), "images", [], "any", false, false, false, 78));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 79
            echo "
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 80), "html", null, true);
            echo "\"
                    class=\" ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 81)) {
                echo " active ";
            }
            echo "\"></li>

                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
            </ol>
            <div class=\"carousel-inner\">

                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 88, $this->source); })()), "images", [], "any", false, false, false, 88));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 89
            echo "                <div class=\"carousel-item  ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 89)) {
                echo " active ";
            }
            echo "\">
                    <img height=\"400\" src=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 90), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div>
                    <p>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "caption", [], "any", false, false, false, 93), "html", null, true);
            echo "</p>
                </div>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "

            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Précedent</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Suivant</span>
            </a>
        </div>

    </div>
</div>
<div class=\"col-4\">
    <div class=\"col-!\">
        <img src=\"http://placehold.it/200x200\" alt=\"\">
        <h6>Auteur</h6>
    </div>


</div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annonce/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 96,  341 => 93,  335 => 90,  328 => 89,  311 => 88,  305 => 84,  286 => 81,  282 => 80,  279 => 79,  262 => 78,  255 => 73,  252 => 72,  232 => 66,  228 => 65,  222 => 61,  220 => 60,  216 => 59,  213 => 58,  196 => 57,  187 => 51,  182 => 49,  173 => 42,  171 => 41,  163 => 36,  157 => 33,  154 => 32,  147 => 29,  145 => 28,  139 => 25,  135 => 24,  131 => 23,  127 => 22,  123 => 21,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Annonce détail{% endblock %}

{% block body %}




<div class=\"row\">

    <div class=\"col border border-primary m-3 p-3\">
        <div class=\"row m-5 \"></div>
        Titre:{{annonce.title}} <br>
        <img height=\"200\" width=\"200\" src=\"{{annonce.coverImage}}\" alt=\"\"> <br>
        Introduction: {{annonce.introduction}} <br>
        Contenu: {{annonce.content | raw}} <br>
        Nombre de chambre {{annonce.rooms}} <br>
        Prix:{{annonce.rooms}} <br>
        <div class=\"border border-black\">
            Auteur: {{annonce.author.firstname}}
            <img src=\"{{asset(annonce.author.picture)}}\" height=\"200\" width=\"200\" alt=\"\">
            nb annonce utilisateur {{annonce.author |length}}
            {{annonce.author.introduction}}
            <a href=\"{{path('show_user', {'slug' : annonce.author.slug})}}\">Voir profil de ce bouffon</a>
        </div>

        {% if app.user and app.user == annonce.author %}
        <a class=\"btn btn-danger btn-md\" href=\"{{path('annonce_edit', {'id' : annonce.id})}}\">
            Modifier </a>
        {% endif %}

        <a href=\"{{path('delete' , {'slug' : annonce.slug})}}\" class=\"btn btn-danger\">Supprimer</a>


        <a class=\"btn btn-primary btn-md\" href=\"{{path('booking_create' , {'slug' : annonce.slug})}}\"> Reserver !
        </a>


        <div class=\"row\">
            {% if annonce.comments %}
            <h4>Section commentaires</h4>
            <div class=\"alert alert-info\">
                <h4 class=\"alert-heading text-center \">
                    <div class=\"row align-items-center\">
                        <div class=\"col\">Note globale donnée par nos voyageurs </div>
                        <div class=\"col\">

                            {% include 'shared/rating.html.twig' with {'rating': annonce.AvgRating} %} <br>
                            <small>cette moyenne est calculé sur
                                {{annonce.comments | length}} </small>
                        </div>
                    </div>

                </h4>
            </div>
            {% for comment in annonce.comments %}
            <div class=\"rounded border-black border m-3 p-3\">
                Auteur : {{comment.author.firstName}} <br>
                {% include 'shared/rating.html.twig'  with {'rating': comment.rating } %}


                <br>

                Commentaire: {{comment.content}} <br>
                date: {{comment.createdAt|date}} <br>

            </div>


            {% endfor %}
            {% endif %}
        </div>


        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                {% for image in annonce.images %}

                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{loop.index0}}\"
                    class=\" {% if loop.first %} active {% endif %}\"></li>

                {% endfor %}

            </ol>
            <div class=\"carousel-inner\">

                {% for image in annonce.images %}
                <div class=\"carousel-item  {% if loop.first %} active {% endif %}\">
                    <img height=\"400\" src=\"{{image.url}}\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div>
                    <p>{{image.caption}}</p>
                </div>
                {% endfor %}


            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Précedent</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Suivant</span>
            </a>
        </div>

    </div>
</div>
<div class=\"col-4\">
    <div class=\"col-!\">
        <img src=\"http://placehold.it/200x200\" alt=\"\">
        <h6>Auteur</h6>
    </div>


</div>

</div>
{% endblock %}", "annonce/single.html.twig", "C:\\Users\\walid\\Desktop\\symfony_airbnb\\templates\\annonce\\single.html.twig");
    }
}
