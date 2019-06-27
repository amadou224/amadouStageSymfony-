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

/* aeroport/aeroport.html.twig */
class __TwigTemplate_a85fc7c957d2448b06e9d16f1d62fbb7316ab6caf145378afd755c97d5718ffd extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "aeroport/aeroport.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/aeroport.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aeroport/aeroport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"generator\" content=\"Jekyll v3.8.5\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "<link rel=\"stylesheet\" href=\"stylesheets/base.css\">
<link rel=\"stylesheet\" href=\"stylesheets/aeroport.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
<div class=\"text-center\">
    <div class=\"p-lg-5\">
        <img class=\"img-top-body\" src=\"images/airport-logo.png\">
    </div>

    <a href=\"/horairesTarifs\" class=\"mt-3\">Consultez les horaires et les tarifs <i class=\"far fa-clock fa-lg\"></i></a>

    <div class=\"col-md-8 mx-auto mt-3\">
        <h1>Faites votre réservation</h1>
        <hr class=\"py-3\">

        <div class=\"d-flex justify-content-around\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"CheckAllerSimple\" value=\"\"
                    onclick=\"AllerSimple()\">
                <label class=\"form-check-label\" for=\"\">
                </label>
                <p><strong>Aller simple</strong><i class=\" ml-3 fas fa-arrow-right\"></i></p>
            </div>
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"CheckAllerRetour\" value=\"\"
                    onclick=\"AllerRetour()\">
                <label class=\"form-check-label\" for=\"\">                    
                </label>
                <p><strong>Aller / retour </strong><i class=\"ml-3 fas fa-arrows-alt-h\"></i></p>
            </div>
        </div>


        <div style=\"display: none;\" id=\"FormAllerSimple\">
            <form class=\"needs-validation\" name=\"formReservation\" method=\"get\" action=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservationAller");
        echo "\"
                novalidate>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" style=\"text-align:center;\" name=\"depart_aller\"
                                onclick=\"PointdePrise()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Strasbourg\">Strasbourg</option>
                                <option value=\"2\">Bruxelle</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Destination</label>
                            <select class=\"form-control\" name=\"destination_aller\" required>
                                <option value=\"1\">Strasbourg</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                <hr>

                <div>

                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Nombre de passagger ...\"
                                name=\"nb_passager_aller\">
                        </div>
                    </div>
                </div>
                <div class=\"invalid-feedback\">
                    Please choose a number.
                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de départ</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_depart_aller\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"heure_aller\">
                            <label for=\"\">Horaires de départ fixées par la société</label>
                            <select class=\"form-control\" name=\"horaire_depart_aller\" onclick=\"HeureAller()\">
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"pointDePrise\" style=\"display: none;\">
                            <label for=\"\">Point de prise</label>
                            <select class=\"form-control\" name=\"pdp_aller\" onclick=\"Domicile()\" id=\"pdp\">
                                <option value=\"Gare central\">Gare central</option>
                                <option value=\"Palais des droits de l'Homme\">Palais des droits de l'Homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Domicile\">Domicile</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>


                <div class=\"d-flex justify-content-center\">


                    <div id=\"domicile\" class=\"col-md-6 mb-3\" style=\"display: none;\">

                        <label for=\"firstName\">Adresse</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Adresse ...\" name=\"adresse_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Code Postal</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Code postal ...\" name=\"cp_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Ville</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Ville ...\" name=\"ville_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Pays</label>
                        <select class=\"form-control\" name=\"pays_aller\">
                            <option value=\"France\">France</option>
                            <option value=\"Allemagne\">Allemagne</option>
                            <option value=\"Suisse\">Suisse</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>

                    </div>
                </div>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"firstName\">Commentaire</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Commentaire ...\"
                                name=\"commentaire_aller\">
                        </div>
                    </div>
                </div>
                ";
        // line 196
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 196, $this->source); })()), "user", [])) {
            // line 197
            echo "                <button class=\"btn btn-yellow\" type=\"submit\">Réserver !</button>
                ";
        } else {
            // line 199
            echo "                <button class=\"btn btn-yellow\" type=\"submit\" disabled>Réserver !</button>
                ";
        }
        // line 201
        echo "            </form>
        </div>

        <div style=\"display: none;\" id=\"FormAllerRetour\">
            <form class=\"needs-validation\" method=\"get\" action=\"";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation");
        echo "\" novalidate>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" name=\"depart\" style=\"text-align:center;\"
                                onclick=\"PointdePrise2()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Strasbourg\">Strasbourg</option>
                                <option value=\"Bruxelle\">Bruxelle</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Destination</label>
                            <select class=\"form-control\" name=\"destination\" required>
                                <option value=\"Strasbourg\">Strasbourg</option>
                                <option value=\"Bruxelle\">Bruxelle0</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div>

                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">

                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Nombre de passagger ...\"
                                name=\"nb_passager_1\">

                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <hr class=\"hr-vertical\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Nombre de passagger ...\"
                                name=\"nb_passager_2\">
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de départ</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_depart\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                    <hr class=\"hr-vertical\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de retour</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_retour\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Horaires de départ fixées par la société</label>
                            <select class=\"form-control\" name=\"horaire_depart\">
                                <option value=\"1\">HEURE</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Horaires de retour fixées par la société</label>
                            <select class=\"form-control\" name=\"horaire_retour\">
                                <option value=\"1\">HEURE</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"pointDePrise2\" style=\"display: none;\">
                            <label for=\"\">Point de prise</label>
                            <select class=\"form-control\" name=\"pdp\" onclick=\"DomicileAllerRetour()\" id=\"pdp2\">
                                <option value=\"Gare central\">Gare central</option>
                                <option value=\"Palais des droits de l'Homme\">Palais des droits de l'Homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Domicile\">Domicile</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">


                    <div id=\"domicile2\" class=\"col-md-6 mb-3\" style=\"display: none;\">

                        <label for=\"firstName\">Adresse</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Adresse...\" name=\"adresse\">
                        <label for=\"firstName\" class=\"mt-3\">Code Postal</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Ville...\" name=\"cp\">
                        <label for=\"firstName\" class=\"mt-3\">Ville</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Pays...\" name=\"ville\">
                        <label for=\"firstName\" class=\"mt-3\">Pays</label>
                        <select class=\"form-control\" name=\"pays\">
                            <option value=\"France\">France</option>
                            <option value=\"Allemagne\">Allemagne</option>
                            <option value=\"Suisse\">Suisse</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>

                    </div>
                </div>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"firstName\">Commentaire</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Commentaire ...\" name=\"commentaire\">
                        </div>
                    </div>
                </div>

                ";
        // line 391
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "user", [])) {
            // line 392
            echo "                <button class=\"btn btn-yellow\" type=\"submit\">Réserver !</button>
                ";
        } else {
            // line 394
            echo "                <button class=\"btn btn-yellow\" type=\"submit\" disabled>Réserver !</button>
                ";
        }
        // line 396
        echo "
            </form>
        </div>
    </div>

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

    // line 426
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 427
        echo "
<script src=\"javascript/reservationAeroport.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "aeroport/aeroport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 427,  550 => 426,  512 => 396,  508 => 394,  504 => 392,  502 => 391,  313 => 205,  307 => 201,  303 => 199,  299 => 197,  297 => 196,  146 => 48,  113 => 17,  104 => 16,  92 => 12,  83 => 11,  68 => 4,  59 => 3,  27 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
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

<div class=\"text-center\">
    <div class=\"p-lg-5\">
        <img class=\"img-top-body\" src=\"images/airport-logo.png\">
    </div>

    <a href=\"/horairesTarifs\" class=\"mt-3\">Consultez les horaires et les tarifs <i class=\"far fa-clock fa-lg\"></i></a>

    <div class=\"col-md-8 mx-auto mt-3\">
        <h1>Faites votre réservation</h1>
        <hr class=\"py-3\">

        <div class=\"d-flex justify-content-around\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"CheckAllerSimple\" value=\"\"
                    onclick=\"AllerSimple()\">
                <label class=\"form-check-label\" for=\"\">
                </label>
                <p><strong>Aller simple</strong><i class=\" ml-3 fas fa-arrow-right\"></i></p>
            </div>
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"CheckAllerRetour\" value=\"\"
                    onclick=\"AllerRetour()\">
                <label class=\"form-check-label\" for=\"\">                    
                </label>
                <p><strong>Aller / retour </strong><i class=\"ml-3 fas fa-arrows-alt-h\"></i></p>
            </div>
        </div>


        <div style=\"display: none;\" id=\"FormAllerSimple\">
            <form class=\"needs-validation\" name=\"formReservation\" method=\"get\" action=\"{{ path('reservationAller')}}\"
                novalidate>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" style=\"text-align:center;\" name=\"depart_aller\"
                                onclick=\"PointdePrise()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Strasbourg\">Strasbourg</option>
                                <option value=\"2\">Bruxelle</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Destination</label>
                            <select class=\"form-control\" name=\"destination_aller\" required>
                                <option value=\"1\">Strasbourg</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                <hr>

                <div>

                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Nombre de passagger ...\"
                                name=\"nb_passager_aller\">
                        </div>
                    </div>
                </div>
                <div class=\"invalid-feedback\">
                    Please choose a number.
                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de départ</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_depart_aller\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"heure_aller\">
                            <label for=\"\">Horaires de départ fixées par la société</label>
                            <select class=\"form-control\" name=\"horaire_depart_aller\" onclick=\"HeureAller()\">
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"pointDePrise\" style=\"display: none;\">
                            <label for=\"\">Point de prise</label>
                            <select class=\"form-control\" name=\"pdp_aller\" onclick=\"Domicile()\" id=\"pdp\">
                                <option value=\"Gare central\">Gare central</option>
                                <option value=\"Palais des droits de l'Homme\">Palais des droits de l'Homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Domicile\">Domicile</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>


                <div class=\"d-flex justify-content-center\">


                    <div id=\"domicile\" class=\"col-md-6 mb-3\" style=\"display: none;\">

                        <label for=\"firstName\">Adresse</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Adresse ...\" name=\"adresse_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Code Postal</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Code postal ...\" name=\"cp_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Ville</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Ville ...\" name=\"ville_aller\">
                        <label for=\"firstName\" class=\"mt-3\">Pays</label>
                        <select class=\"form-control\" name=\"pays_aller\">
                            <option value=\"France\">France</option>
                            <option value=\"Allemagne\">Allemagne</option>
                            <option value=\"Suisse\">Suisse</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>

                    </div>
                </div>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"firstName\">Commentaire</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Commentaire ...\"
                                name=\"commentaire_aller\">
                        </div>
                    </div>
                </div>
                {% if app.user %}
                <button class=\"btn btn-yellow\" type=\"submit\">Réserver !</button>
                {% else %}
                <button class=\"btn btn-yellow\" type=\"submit\" disabled>Réserver !</button>
                {% endif %}
            </form>
        </div>

        <div style=\"display: none;\" id=\"FormAllerRetour\">
            <form class=\"needs-validation\" method=\"get\" action=\"{{ path('reservation')}}\" novalidate>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Départ</label>
                            <select class=\"form-control\" name=\"depart\" style=\"text-align:center;\"
                                onclick=\"PointdePrise2()\">
                                <option value=\"\">Choisir un point de prise</option>
                                <option value=\"Strasbourg\">Strasbourg</option>
                                <option value=\"Bruxelle\">Bruxelle</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <div>
                            <label for=\"\">Destination</label>
                            <select class=\"form-control\" name=\"destination\" required>
                                <option value=\"Strasbourg\">Strasbourg</option>
                                <option value=\"Bruxelle\">Bruxelle0</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div>

                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">

                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Nombre de passagger ...\"
                                name=\"nb_passager_1\">

                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                    <hr class=\"hr-vertical\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label for=\"\">Nombre de Passager</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Nombre de passagger ...\"
                                name=\"nb_passager_2\">
                            <div class=\"invalid-feedback\">
                                Please choose a number.
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de départ</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_depart\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                    <hr class=\"hr-vertical\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Date de retour</label>
                            <input type=\"date\" class=\"form-control\" name=\"date_retour\" required>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Horaires de départ fixées par la société</label>
                            <select class=\"form-control\" name=\"horaire_depart\">
                                <option value=\"1\">HEURE</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"\">Horaires de retour fixées par la société</label>
                            <select class=\"form-control\" name=\"horaire_retour\">
                                <option value=\"1\">HEURE</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\" id=\"pointDePrise2\" style=\"display: none;\">
                            <label for=\"\">Point de prise</label>
                            <select class=\"form-control\" name=\"pdp\" onclick=\"DomicileAllerRetour()\" id=\"pdp2\">
                                <option value=\"Gare central\">Gare central</option>
                                <option value=\"Palais des droits de l'Homme\">Palais des droits de l'Homme</option>
                                <option value=\"Hotel Hilton\">Hotel Hilton</option>
                                <option value=\"Domicile\">Domicile</option>
                            </select>
                        </div>
                        <div class=\"invalid-feedback\">
                            Please choose a number.
                        </div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-center\">


                    <div id=\"domicile2\" class=\"col-md-6 mb-3\" style=\"display: none;\">

                        <label for=\"firstName\">Adresse</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Adresse...\" name=\"adresse\">
                        <label for=\"firstName\" class=\"mt-3\">Code Postal</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Ville...\" name=\"cp\">
                        <label for=\"firstName\" class=\"mt-3\">Ville</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Pays...\" name=\"ville\">
                        <label for=\"firstName\" class=\"mt-3\">Pays</label>
                        <select class=\"form-control\" name=\"pays\">
                            <option value=\"France\">France</option>
                            <option value=\"Allemagne\">Allemagne</option>
                            <option value=\"Suisse\">Suisse</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>

                    </div>
                </div>

                <div class=\"d-flex justify-content-center\">
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"form-group\">
                            <label for=\"firstName\">Commentaire</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Commentaire ...\" name=\"commentaire\">
                        </div>
                    </div>
                </div>

                {% if app.user %}
                <button class=\"btn btn-yellow\" type=\"submit\">Réserver !</button>
                {% else %}
                <button class=\"btn btn-yellow\" type=\"submit\" disabled>Réserver !</button>
                {% endif %}

            </form>
        </div>
    </div>

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

{% endblock %}", "aeroport/aeroport.html.twig", "C:\\FZ Symfony\\Symfony\\templates\\aeroport\\aeroport.html.twig");
    }
}
