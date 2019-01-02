<?php

/* front/produits.html.twig */
class __TwigTemplate_481dc50aa52e4ae80f54df614e4b99173f9280bc7e072dc6d20d761589b9309d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/produits.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/produits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/produits.html.twig"));

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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 3, $this->source); })()), "libelle", array()), "html", null, true);
        echo " ";
        
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
\t\t<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t<li class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 15, $this->source); })()), "libelle", array()), "html", null, true);
        echo "</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<p class=\"title\">";
        // line 23
        echo twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 23, $this->source); })()), "description", array());
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t\t\t<h3 class=\"title\">Produits</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 34
            echo "\t\t\t\t\t<!-- product -->

\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "imagePrincipale", array()), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t<p class=\"product-category\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 42, $this->source); })()), "libelle", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "libelle", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t\t\t<h6>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "descriptionCourt", array()), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t<h4 style=\"color: #ff4d4d\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
            echo " DT</h4>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_produit", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Détails</a>
\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t<button id=\"btn-add-cart\" onclick=\"location.href='";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_one_to_cart", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "'\" class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> Ajouter au panier </button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /product -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /Section -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 56,  150 => 50,  143 => 46,  139 => 45,  135 => 44,  131 => 43,  127 => 42,  121 => 39,  114 => 34,  110 => 33,  97 => 23,  86 => 15,  82 => 14,  73 => 7,  64 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ categorie.libelle }} {% endblock %}


{% block body %}

<!-- Section -->
\t\t<div class=\"section\">
\t\t\t<!-- container -->
\t\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"{{path('homepage')}}\">Accueil</a></li>
\t\t\t\t\t<li class=\"active\">{{ categorie.libelle }}</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t\t\t<!-- row -->
\t\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<p class=\"title\">{{ categorie.description | raw }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t\t\t<h3 class=\"title\">Produits</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
                    {% for produit in produits %}
\t\t\t\t\t<!-- product -->

\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t<img src=\"{{ produit.imagePrincipale }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t\t\t<p class=\"product-category\">{{ categorie.libelle }}</p>
\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"#\">{{ produit.libelle }}</a></h3>
\t\t\t\t\t\t\t\t<h6>{{ produit.descriptionCourt }}</h6>
\t\t\t\t\t\t\t\t<h4 style=\"color: #ff4d4d\">{{ produit.prix }} DT</h4>
\t\t\t\t\t\t\t\t<a href=\"{{ path('show_produit',{ 'id' : produit.id }) }}\" class=\"btn btn-success\">Détails</a>
\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t<button id=\"btn-add-cart\" onclick=\"location.href='{{ path('add_one_to_cart', { 'id' : produit.id }) }}'\" class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> Ajouter au panier </button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /product -->
                    {% endfor %}

\t\t\t\t</div>
\t\t\t\t<!-- /row -->
\t\t\t</div>
\t\t\t<!-- /container -->
\t\t</div>
\t\t<!-- /Section -->

{% endblock %}
", "front/produits.html.twig", "C:\\Users\\marzouk\\Desktop\\Electro-master\\templates\\front\\produits.html.twig");
    }
}
