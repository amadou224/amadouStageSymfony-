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

/* transport/confirmationAllerRetour.html.twig */
class __TwigTemplate_4eba1266029a84365ad3b8e771be5931bebdc0155c08595c19c4b7f8f3e478ba extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transport/confirmationAllerRetour.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/confirmationAllerRetour.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/confirmationAllerRetour.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"generator\" content=\"Jekyll v3.8.5\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "<link rel=\"stylesheet\" href=\"stylesheets/base.css\">
<link rel=\"stylesheet\" href=\"stylesheets/aeroport.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div >
        <h3  style=\"background-color:#780E47; heigth:50px; text-align:center; color:white\">MEMORIAL DE NATZWEILER-STRUTHOF</h3>
    </div>

    <div class=\"content\">
            <img src=\"https://www.onac-vg.fr/sites/default/files/styles/home/public/2018-08/Centre%20europ%C3%A9en%20du%20r%C3%A9sistant%20d%C3%A9port%C3%A9%20-%20site%20du%20Struthof0002.jpg?itok=XS9zxJ7b\" alt =\"\" width=\"1920\" height=\"70\" >
           
    </div>

        
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <!-- <a class=\"navbar-brand\" href=\"#\">Navbar</a>  -->
                
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor09\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                    </button>

           <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">

                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"memorialPageAcceuil\">Acceuil <span class=\"sr-only\">(current)</span></a>
                        </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"informations\">Informations</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link \" href=\"tarif\">tarif</a>        <!--   tarif -->
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"contact\">Contact</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"galerieDuSite\">Galerie</a>
                    </li>
                </ul>
    </div>
    </nav> </br>
</br>

    <h5 style=\"text-align:center;text-decoration:underline\"><strong> <em> Les informations suivantes sont elles exactes ? </em></strong></h5>
           <div style=\"text-align:center\">
                <h5><strong>Lieu de départ:</strong>&nbsp";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 59, $this->source); })()), "depart", []), "html", null, true);
        echo "</h5></br>
                <h5><strong>Destination:</strong>&nbsp";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 60, $this->source); })()), "destination", []), "html", null, true);
        echo "</h5></br>       
                <h5><strong>E-mail:</strong>&nbsp";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 61, $this->source); })()), "email", []), "html", null, true);
        echo "</h5></br>
                <h5><strong>Téléphone:</strong>&nbsp";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 62, $this->source); })()), "telephone", []), "html", null, true);
        echo "</h5></br>
                <h5><strong>Nombre de passagers Aller:</strong>&nbsp";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 63, $this->source); })()), "nombrePassagerAller", []), "html", null, true);
        echo "</h5></br>
                <h5><strong>Nombre de passagers Rétour:</strong>&nbsp";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 64, $this->source); })()), "nombrePassagerRetour", []), "html", null, true);
        echo "</h5></br>
                <h5><strong>Date de départ:</strong>&nbsp";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 65, $this->source); })()), "dateDepart", []), "d/m/Y"), "html", null, true);
        echo "</h5></br>
                <h5><strong>Date de rétour:</strong>&nbsp";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 66, $this->source); })()), "dateRetour", []), "d/m/Y"), "html", null, true);
        echo "</h5></br>
                <h5><strong>Heure de départ:</strong>&nbsp";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 67, $this->source); })()), "horaireDeDepart", []), "html", null, true);
        echo "</h5></br>
                <h5><strong>Heure de rétour:</strong>&nbsp";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 68, $this->source); })()), "horaireRetour", []), "html", null, true);
        echo "</h5></br>  

                ";
        // line 70
        if (((twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 70, $this->source); })()), "nombrePassagerAller", []) <= 4) && (twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 70, $this->source); })()), "nombrePassagerRetour", []) <= 4))) {
            // line 71
            echo "                <h5><strong>Prix:</strong>&nbsp 160€</h5></br>
                ";
        } else {
            // line 72
            echo " 
                <h5><strong>Prix:</strong>&nbsp 300€</h5></br>
                ";
        }
        // line 75
        echo "          </div>
            <center>
<a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("envoieMailAllerRetourRoute", ["nbrePassagerAller" => twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 77, $this->source); })()), "nombrePassagerAller", []), "nbrePassagerRetour" => twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 77, $this->source); })()), "nombrePassagerRetour", []), "email" => twig_get_attribute($this->env, $this->source,         // line 78
(isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 78, $this->source); })()), "email", []), "depart" => twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 78, $this->source); })()), "depart", []), "destination" => twig_get_attribute($this->env, $this->source,         // line 79
(isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 79, $this->source); })()), "destination", []), "telephone" => twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 79, $this->source); })()), "telephone", []), "heureDepart" => twig_get_attribute($this->env, $this->source,         // line 80
(isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 80, $this->source); })()), "horaireDeDepart", []), "heureRetour" => twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 80, $this->source); })()), "horaireRetour", []), "dateDepart" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 81
(isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 81, $this->source); })()), "dateDepart", []), "d-m-Y"), "dateRetour" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["memorial"]) || array_key_exists("memorial", $context) ? $context["memorial"] : (function () { throw new RuntimeError('Variable "memorial" does not exist.', 81, $this->source); })()), "dateRetour", []), "d-m-Y")]), "html", null, true);
        // line 82
        echo "\" class=\"btn btn-green\">Confirmer</a>
                <!-- <a href=\"terminusAllerSimple\" class=\"btn btn-yellow\"  type=\"submit\">Confirmer la réservation</a> -->                             
                <a href=\"memorialPageAcceuil\" class=\"btn btn-red\"  type=\"submit\">Modifier</a>
            </center>    

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "
<script src=\"javascript/reservationAeroport.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "transport/confirmationAllerRetour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 113,  258 => 112,  220 => 82,  218 => 81,  217 => 80,  216 => 79,  215 => 78,  214 => 77,  210 => 75,  205 => 72,  201 => 71,  199 => 70,  194 => 68,  190 => 67,  186 => 66,  182 => 65,  178 => 64,  174 => 63,  170 => 62,  166 => 61,  162 => 60,  158 => 59,  113 => 16,  104 => 15,  92 => 11,  83 => 10,  68 => 3,  59 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head %}

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"generator\" content=\"Jekyll v3.8.5\">

{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"stylesheets/base.css\">
<link rel=\"stylesheet\" href=\"stylesheets/aeroport.css\">
{% endblock %}

{% block body %}

    <div >
        <h3  style=\"background-color:#780E47; heigth:50px; text-align:center; color:white\">MEMORIAL DE NATZWEILER-STRUTHOF</h3>
    </div>

    <div class=\"content\">
            <img src=\"https://www.onac-vg.fr/sites/default/files/styles/home/public/2018-08/Centre%20europ%C3%A9en%20du%20r%C3%A9sistant%20d%C3%A9port%C3%A9%20-%20site%20du%20Struthof0002.jpg?itok=XS9zxJ7b\" alt =\"\" width=\"1920\" height=\"70\" >
           
    </div>

        
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <!-- <a class=\"navbar-brand\" href=\"#\">Navbar</a>  -->
                
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor09\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                    </button>

           <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">

                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"memorialPageAcceuil\">Acceuil <span class=\"sr-only\">(current)</span></a>
                        </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"informations\">Informations</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link \" href=\"tarif\">tarif</a>        <!--   tarif -->
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"contact\">Contact</a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"galerieDuSite\">Galerie</a>
                    </li>
                </ul>
    </div>
    </nav> </br>
</br>

    <h5 style=\"text-align:center;text-decoration:underline\"><strong> <em> Les informations suivantes sont elles exactes ? </em></strong></h5>
           <div style=\"text-align:center\">
                <h5><strong>Lieu de départ:</strong>&nbsp{{memorial.depart}}</h5></br>
                <h5><strong>Destination:</strong>&nbsp{{memorial.destination}}</h5></br>       
                <h5><strong>E-mail:</strong>&nbsp{{memorial.email}}</h5></br>
                <h5><strong>Téléphone:</strong>&nbsp{{memorial.telephone}}</h5></br>
                <h5><strong>Nombre de passagers Aller:</strong>&nbsp{{memorial.nombrePassagerAller}}</h5></br>
                <h5><strong>Nombre de passagers Rétour:</strong>&nbsp{{memorial.nombrePassagerRetour}}</h5></br>
                <h5><strong>Date de départ:</strong>&nbsp{{memorial.dateDepart| date('d/m/Y')}}</h5></br>
                <h5><strong>Date de rétour:</strong>&nbsp{{memorial.dateRetour| date('d/m/Y')}}</h5></br>
                <h5><strong>Heure de départ:</strong>&nbsp{{memorial.horaireDeDepart}}</h5></br>
                <h5><strong>Heure de rétour:</strong>&nbsp{{memorial.horaireRetour}}</h5></br>  

                {% if  (memorial.nombrePassagerAller<=4) and (memorial.nombrePassagerRetour<=4)  %}
                <h5><strong>Prix:</strong>&nbsp 160€</h5></br>
                {% else %} 
                <h5><strong>Prix:</strong>&nbsp 300€</h5></br>
                {% endif %}
          </div>
            <center>
<a href=\"{{ path('envoieMailAllerRetourRoute', {'nbrePassagerAller': memorial.nombrePassagerAller,'nbrePassagerRetour':memorial.nombrePassagerRetour ,
                                        'email' : memorial.email, 'depart' : memorial.depart, 
                                         'destination': memorial.destination, 'telephone': memorial.telephone, 
                                         'heureDepart': memorial.horaireDeDepart, 'heureRetour':memorial.horaireRetour,
                                         'dateDepart': memorial.dateDepart | date('d-m-Y'), 'dateRetour':memorial.dateRetour | date('d-m-Y')
                                            })}}\" class=\"btn btn-green\">Confirmer</a>
                <!-- <a href=\"terminusAllerSimple\" class=\"btn btn-yellow\"  type=\"submit\">Confirmer la réservation</a> -->                             
                <a href=\"memorialPageAcceuil\" class=\"btn btn-red\"  type=\"submit\">Modifier</a>
            </center>    

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</div>


{% endblock %}

{% block javascripts %}

<script src=\"javascript/reservationAeroport.js\"></script>

{% endblock %}", "transport/confirmationAllerRetour.html.twig", "C:\\FZ Symfony\\Symfony\\templates\\transport\\confirmationAllerRetour.html.twig");
    }
}
