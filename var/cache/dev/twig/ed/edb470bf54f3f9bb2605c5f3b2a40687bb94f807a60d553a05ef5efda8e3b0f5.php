<?php

/* front/produitsRecherche.html.twig */
class __TwigTemplate_1f4cd96cbedf8070f351475e215b09e7d382ad52ebe8727517407bdf4ad000bb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/produitsRecherche.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/produitsRecherche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/produitsRecherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recherche Produit
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <!-- Section -->
    <div class=\"section\">
        <!-- container -->
        <div class=\"container\">
            <!-- row -->
            <div class=\"row\">

                <div class=\"col-md-12\">
                    <div class=\"section-title text-center\">
                        <h3 class=\"title\">Produits</h3>
                    </div>
                </div>

                
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 23
            echo "                    <!-- product -->
                    <div class=\"col-md-3 col-xs-6\">
                        <div class=\"product\">
                            <div class=\"product-img\">
                                <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "imagePrincipale", array()), "html", null, true);
            echo "\" alt=\"\">
                            </div>

                            <div class=\"product-body\">
\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "libelle", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t\t\t<h6>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "descriptionCourt", array()), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t<h4 class=\"product-price\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
            echo " DT</h4>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_produit", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Détails</a>
\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t<button id=\"btn-add-cart\" onclick=\"location.href='";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_one_to_cart", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "'\" class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t</div>
                            
                            <div class=\"add-to-cart\">
                                <button id=\"btn-add-cart\" onclick=\"location.href='";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_one_to_cart", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "'\" class=\"add-to-cart-btn\">
                                    <i class=\"fa fa-shopping-cart\"></i>
                                    add to cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- /product -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "           </div>
            <!-- /row -->

        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/produitsRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 50,  133 => 42,  126 => 38,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  100 => 27,  94 => 23,  90 => 22,  73 => 7,  64 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Recherche Produit
{% endblock %}

{% block body %}

    <!-- Section -->
    <div class=\"section\">
        <!-- container -->
        <div class=\"container\">
            <!-- row -->
            <div class=\"row\">

                <div class=\"col-md-12\">
                    <div class=\"section-title text-center\">
                        <h3 class=\"title\">Produits</h3>
                    </div>
                </div>

                
                {% for produit in produits %}
                    <!-- product -->
                    <div class=\"col-md-3 col-xs-6\">
                        <div class=\"product\">
                            <div class=\"product-img\">
                                <img src=\"{{ produit.imagePrincipale }}\" alt=\"\">
                            </div>

                            <div class=\"product-body\">
\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">{{ produit.libelle }}</a></h3>
\t\t\t\t\t\t\t\t<h6>{{ produit.descriptionCourt }}</h6>
\t\t\t\t\t\t\t\t<h4 class=\"product-price\">{{ produit.prix }} DT</h4>
\t\t\t\t\t\t\t\t<a href=\"{{ path('show_produit',{ 'id' : produit.id }) }}\" class=\"btn btn-success\">Détails</a>
\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t<button id=\"btn-add-cart\" onclick=\"location.href='{{ path('add_one_to_cart', { 'id' : produit.id }) }}'\" class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button>
\t\t\t\t\t\t\t</div>
                            
                            <div class=\"add-to-cart\">
                                <button id=\"btn-add-cart\" onclick=\"location.href='{{ path('add_one_to_cart', { 'id' : produit.id }) }}'\" class=\"add-to-cart-btn\">
                                    <i class=\"fa fa-shopping-cart\"></i>
                                    add to cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- /product -->
                {% endfor %}
           </div>
            <!-- /row -->

        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->

{% endblock %}", "front/produitsRecherche.html.twig", "C:\\Users\\marzouk\\Desktop\\Electro-master\\templates\\front\\produitsRecherche.html.twig");
    }
}
