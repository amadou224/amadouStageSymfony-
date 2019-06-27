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

/* transport/paiementStripe.html.twig */
class __TwigTemplate_b0613de63ec9a99154a8d90aafac080ceab5351037a4cf06d6d5ee5dedaf0b35 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transport/paiementStripe.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/paiementStripe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/paiementStripe.html.twig"));

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

        
    </br>
<div    align=\"center\">
\t<table>
\t\t<tr >

            <td>
                <div class=\"d-flex justify-content-around\">
                <div class=\"\">
                <a class=\"nav-link\" href=\"/\"><img src=\"images/logo-alsace-navette.png\" height=\"30\" alt=\"\"></a>
                <title>Product</title>
                <circle cx=\"12\" cy=\"12\" r=\"10\" />
                <path
                    d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\" />
                </svg>
            </td>
            
\t\t\t<td><a href=\"memorialPageAcceuil\"><span style=\"color:#780E47\"><strong><B>ACCEUIL &nbsp<B></strong></span></a></td>
\t\t\t<td><a href=\"informations\"><span style=\"color:#780E47\"><strong><B>INFORMATIONS &nbsp</B></strong></span></a></td>
\t\t\t<td><a href=\"tarif\"><span style=\"color:#780E47\"><strong><B>TARIF &nbsp</B></strong></span></a></td>
\t\t\t<td><a href=\"contact\"><span style=\"color:#780E47\"><strong><B>CONTACT&nbsp</B></strong></span></a></td>
            <td><a href=\"galerieDuSite\"><span style=\"color:#780E47\"><strong><B>GALERIE</B></strong></span></a></td>
            
\t\t</tr>
\t</table>
</div>
 </br>
 <center>
 <h4> <U>Veuillez renseigner les infomations demandées.</U></h4> <hr>

               
            
                <h5>Le montant de votre trasaction est de:</h5></br>
               
    
            <form id=\"payment-form\" method=\"post\">

                    <div class=\"field\">
                        <div class=\"col-sm-5 col-md-5\">
                            <label>
                                <span>            
                                    <B>Prénoms et Nom :</B>
                                </span>
                                <input data-stripe=\"name\" name=\"name\" placeholder=\"Prénoms et nom\" size=\"50\" type=\"text\">
                            </label>
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"col-sm-5 col-md-5\">

                            <label>
                                <span><B>Numéro carte</B></span>
                                <input data-stripe=\"number\" name=\"number\" placeholder=\"Code de carte bleu\" size=\"16\" type=\"text\">
                            </label>
                        </div>
                    </div>

                    <div class=\"field\">
                        <div class=\"col-sm-5 col-md-5\">

                            <label>
                                <span><B>Expire en (MM/YY)</B></span>
                                <input data-stripe=\"exp_month\" name=\"exp_month\" placeholder=\"MM  \" size=\"2\" type=\"text\">
                            </label>
                            <span>
                                /
                            </span>
                            <label>
                                <input data-stripe=\"exp_year\" name=\"exp_year\" placeholder=\"YYYY\" size=\"2\" type=\"text\">
                            </label>
                        </div>
                    </div>

                    <div class=\"field\">
                        <div class=\"col-sm-5 col-md-5\">

                            <label>
                                <span><B>CVC</B></span>
                                <input data-stripe=\"cvc\" name=\"cvc\" placeholder=\"Cvc\" size=\"3\" type=\"text\">
                            </label>
                        </div>
                    </div>
                    <div class=\"col-sm-5 col-md-5\">

                        <!-- <button class=\"btn btn-success\" type=\"submit\">Effectuer le paiement</button> -->
                        <a href=\"paiementOk\" class=\"btn btn-green\"  type=\"submit\">Payer</a> 
                    </div>

                </form> 
                </center>
 



 <script src=\"https://js.stripe.com/v3/\"></script>

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

    // line 147
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 148
        echo "<script>
                        var stripe = Stripe('pk_test_LiWH7BI0abhR2hwZncUIwYNZ00NLd9s01W');  
                        var elements = stripe.elements();
                        // Custom styling can be passed to options when creating an Element.
                        var style = {
                        base: {
                            // Add your base input styles here. For example:
                            fontSize: '16px',
                            color: \"#32325d\",
                        }
                        };

                        // Create an instance of the card Element.
                        var card = elements.create('card', {style: style});

                        // Add an instance of the card Element into the `card-element` <div>.
                        card.mount('#card-element');
                        card.addEventListener('change', function(event) {
                        var displayError = document.getElementById('card-errors');
                        if (event.error) {
                            displayError.textContent = event.error.message;
                        } else {
                            displayError.textContent = '';
                        }
                        });

                        // Create a token or display an error when the form is submitted.
                        var form = document.getElementById('payment-form');
                        form.addEventListener('submit', function(event) {
                        event.preventDefault();

                        stripe.createToken(card).then(function(result) {
                            if (result.error) {
                            // Inform the customer that there was an error.
                            var errorElement = document.getElementById('card-errors');
                            errorElement.textContent = result.error.message;
                            } else {
                            // Send the token to your server.
                            stripeTokenHandler(result.token);
                            }
                        });
                        });
                        function stripeTokenHandler(token) {
                        // Insert the token ID into the form so it gets submitted to the server
                        var form = document.getElementById('payment-form');
                        var hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'stripeToken');
                        hiddenInput.setAttribute('value', token.id);
                        form.appendChild(hiddenInput);

                        // Submit the form
                        form.submit();
                        }
</script>
<script src=\"javascript/reservationAeroport.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "transport/paiementStripe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 148,  252 => 147,  113 => 16,  104 => 15,  92 => 11,  83 => 10,  68 => 3,  59 => 2,  27 => 1,);
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

        
    </br>
<div    align=\"center\">
\t<table>
\t\t<tr >

            <td>
                <div class=\"d-flex justify-content-around\">
                <div class=\"\">
                <a class=\"nav-link\" href=\"/\"><img src=\"images/logo-alsace-navette.png\" height=\"30\" alt=\"\"></a>
                <title>Product</title>
                <circle cx=\"12\" cy=\"12\" r=\"10\" />
                <path
                    d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\" />
                </svg>
            </td>
            
\t\t\t<td><a href=\"memorialPageAcceuil\"><span style=\"color:#780E47\"><strong><B>ACCEUIL &nbsp<B></strong></span></a></td>
\t\t\t<td><a href=\"informations\"><span style=\"color:#780E47\"><strong><B>INFORMATIONS &nbsp</B></strong></span></a></td>
\t\t\t<td><a href=\"tarif\"><span style=\"color:#780E47\"><strong><B>TARIF &nbsp</B></strong></span></a></td>
\t\t\t<td><a href=\"contact\"><span style=\"color:#780E47\"><strong><B>CONTACT&nbsp</B></strong></span></a></td>
            <td><a href=\"galerieDuSite\"><span style=\"color:#780E47\"><strong><B>GALERIE</B></strong></span></a></td>
            
\t\t</tr>
\t</table>
</div>
 </br>
 <center>
 <h4> <U>Veuillez renseigner les infomations demandées.</U></h4> <hr>

               
            
                <h5>Le montant de votre trasaction est de:</h5></br>
               
    
            <form id=\"payment-form\" method=\"post\">

                    <div class=\"field\">
                        <div class=\"col-sm-5 col-md-5\">
                            <label>
                                <span>            
                                    <B>Prénoms et Nom :</B>
                                </span>
                                <input data-stripe=\"name\" name=\"name\" placeholder=\"Prénoms et nom\" size=\"50\" type=\"text\">
                            </label>
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"col-sm-5 col-md-5\">

                            <label>
                                <span><B>Numéro carte</B></span>
                                <input data-stripe=\"number\" name=\"number\" placeholder=\"Code de carte bleu\" size=\"16\" type=\"text\">
                            </label>
                        </div>
                    </div>

                    <div class=\"field\">
                        <div class=\"col-sm-5 col-md-5\">

                            <label>
                                <span><B>Expire en (MM/YY)</B></span>
                                <input data-stripe=\"exp_month\" name=\"exp_month\" placeholder=\"MM  \" size=\"2\" type=\"text\">
                            </label>
                            <span>
                                /
                            </span>
                            <label>
                                <input data-stripe=\"exp_year\" name=\"exp_year\" placeholder=\"YYYY\" size=\"2\" type=\"text\">
                            </label>
                        </div>
                    </div>

                    <div class=\"field\">
                        <div class=\"col-sm-5 col-md-5\">

                            <label>
                                <span><B>CVC</B></span>
                                <input data-stripe=\"cvc\" name=\"cvc\" placeholder=\"Cvc\" size=\"3\" type=\"text\">
                            </label>
                        </div>
                    </div>
                    <div class=\"col-sm-5 col-md-5\">

                        <!-- <button class=\"btn btn-success\" type=\"submit\">Effectuer le paiement</button> -->
                        <a href=\"paiementOk\" class=\"btn btn-green\"  type=\"submit\">Payer</a> 
                    </div>

                </form> 
                </center>
 



 <script src=\"https://js.stripe.com/v3/\"></script>

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
<script>
                        var stripe = Stripe('pk_test_LiWH7BI0abhR2hwZncUIwYNZ00NLd9s01W');  
                        var elements = stripe.elements();
                        // Custom styling can be passed to options when creating an Element.
                        var style = {
                        base: {
                            // Add your base input styles here. For example:
                            fontSize: '16px',
                            color: \"#32325d\",
                        }
                        };

                        // Create an instance of the card Element.
                        var card = elements.create('card', {style: style});

                        // Add an instance of the card Element into the `card-element` <div>.
                        card.mount('#card-element');
                        card.addEventListener('change', function(event) {
                        var displayError = document.getElementById('card-errors');
                        if (event.error) {
                            displayError.textContent = event.error.message;
                        } else {
                            displayError.textContent = '';
                        }
                        });

                        // Create a token or display an error when the form is submitted.
                        var form = document.getElementById('payment-form');
                        form.addEventListener('submit', function(event) {
                        event.preventDefault();

                        stripe.createToken(card).then(function(result) {
                            if (result.error) {
                            // Inform the customer that there was an error.
                            var errorElement = document.getElementById('card-errors');
                            errorElement.textContent = result.error.message;
                            } else {
                            // Send the token to your server.
                            stripeTokenHandler(result.token);
                            }
                        });
                        });
                        function stripeTokenHandler(token) {
                        // Insert the token ID into the form so it gets submitted to the server
                        var form = document.getElementById('payment-form');
                        var hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'stripeToken');
                        hiddenInput.setAttribute('value', token.id);
                        form.appendChild(hiddenInput);

                        // Submit the form
                        form.submit();
                        }
</script>
<script src=\"javascript/reservationAeroport.js\"></script>

{% endblock %}  ", "transport/paiementStripe.html.twig", "C:\\FZ Symfony\\Symfony\\templates\\transport\\PaiementStripe.html.twig");
    }
}
