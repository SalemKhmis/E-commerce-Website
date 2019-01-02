<?php

/* cart/cart.html.twig */
class __TwigTemplate_3cdfa9a0d67ddaec0500899aab08f582ec2704a088dd5e602a7683e3d9147cb4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cart/cart.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cart/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cart/cart.html.twig"));

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

        echo "Cart ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "/*************************
*******Cart CSS******
**************************/
#do_action {
  margin-bottom: 50px;
}

#do_action .total_area {
  padding-bottom: 18px !important;
}

#do_action .total_area, #do_action .chose_area {
  border: 1px solid #E6E4DF;
  color: #696763;
  padding: 30px 25px 30px 0;
  margin-bottom: 80px;
}

#do_action .total_area {
  padding-bottom: 18px !important;
}

.total_area span {
  float: right;
}

.total_area ul li {
  background:#E6E4DF;
  color: #696763;
  margin-top: 10px;
  padding: 7px 20px;
}



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "
<section id=\"cart_items\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Panier</li>
\t\t\t\t</ol>
\t\t\t</div>
        ";
        // line 53
        if ( !twig_test_empty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "\t\t\t<div class=\"table-responsive cart_info\">
\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"cart_menu\">
\t\t\t\t\t\t\t<td class=\"image\">Produit</td>
\t\t\t\t\t\t\t<td class=\"description\">Détails</td>
\t\t\t\t\t\t\t<td class=\"price\">Prix TND</td>
\t\t\t\t\t\t\t<td class=\"quantity\">Quantité</td>
\t\t\t\t\t\t\t<td class=\"total\">Total TND</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 68, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prd"]) {
                // line 69
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"cart_product\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prd"], "imagePrincipale", array()), "html", null, true);
                echo "\" width=\"100px\" alt=\"\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_description\">
\t\t\t\t\t\t\t\t<h4><a href=\"\">";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prd"], "libelle", array()), "html", null, true);
                echo "</a></h4>
\t\t\t\t\t\t\t\t<p>ID: ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prd"], "id", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_price\">
\t\t\t\t\t\t\t\t<p>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prd"], "prix", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_quantity\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"cart_quantity_button\">
\t\t\t\t\t\t\t\t\t<button onclick=\"location.href='";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_one_to_cart", array("id" => twig_get_attribute($this->env, $this->source, $context["prd"], "id", array()))), "html", null, true);
                echo "'\">+</button>
\t\t\t\t\t\t\t\t\t<input id=\"qte_1\" class=\"cart_quantity_input\" type=\"text\" name=\"quantity\" value=\"";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 84, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["prd"], "id", array()), array(), "array"), "html", null, true);
                echo "\" autocomplete=\"off\" size=\"2\" disabled=\"\">
\t\t\t\t\t\t\t\t\t<button onclick=\"location.href='";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_one_to_cart", array("id" => twig_get_attribute($this->env, $this->source, $context["prd"], "id", array()))), "html", null, true);
                echo "'\">-</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_total\">
\t\t\t\t\t\t\t\t<p class=\"cart_total_price\">";
                // line 89
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 89, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["prd"], "id", array()), array(), "array") * twig_get_attribute($this->env, $this->source, $context["prd"], "prix", array())), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_delete\">
\t\t\t\t\t\t\t\t<a class=\"cart_quantity_delete\" 
\t\t\t\t\t\t\t\thref=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_from_cart", array("id" => twig_get_attribute($this->env, $this->source, $context["prd"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "
\t\t\t\t\t\t

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>


\t\t</div>
\t</section> <!--/#cart_items-->

\t<section id=\"do_action\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">

\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<div class=\"total_area\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Sous total <span>";
            // line 119
            echo twig_escape_filter($this->env, (isset($context["total_ht"]) || array_key_exists("total_ht", $context) ? $context["total_ht"] : (function () { throw new Twig_Error_Runtime('Variable "total_ht" does not exist.', 119, $this->source); })()), "html", null, true);
            echo "</span></li>
\t\t\t\t\t\t\t<li>TVA (10%) <span>";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["mnt_tva"]) || array_key_exists("mnt_tva", $context) ? $context["mnt_tva"] : (function () { throw new Twig_Error_Runtime('Variable "mnt_tva" does not exist.', 120, $this->source); })()), "html", null, true);
            echo "</span></li>
\t\t\t\t\t\t\t<li>Frais de transport <span>Gratuit</span></li>
\t\t\t\t\t\t\t<li>Total <span>";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["total_ttc"]) || array_key_exists("total_ttc", $context) ? $context["total_ttc"] : (function () { throw new Twig_Error_Runtime('Variable "total_ttc" does not exist.', 122, $this->source); })()), "html", null, true);
            echo "</span></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a class=\"btn btn-danger\" 
\t\t\t\t\t\thref=\"";
            // line 125
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clear_cart");
            echo "\">Vider le panier</a> 

                        <a class=\"btn btn-success\" 
\t\t\t\t\t\thref=\"";
            // line 128
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\">Valider ma commande</a> 

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section><!--/#do_action-->\t

    ";
        } else {
            // line 138
            echo "\t\t<h4> Panier est vide !!! </h4>
\t\t<br><br><br><br><br><br><br><br><br><br><br><br>
\t";
        }
        // line 141
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 141,  281 => 138,  268 => 128,  262 => 125,  256 => 122,  251 => 120,  247 => 119,  225 => 99,  213 => 93,  206 => 89,  199 => 85,  195 => 84,  191 => 83,  183 => 78,  177 => 75,  173 => 74,  167 => 71,  163 => 69,  159 => 68,  143 => 54,  141 => 53,  134 => 49,  127 => 44,  118 => 43,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Cart {% endblock %}

{% block stylesheets %}
/*************************
*******Cart CSS******
**************************/
#do_action {
  margin-bottom: 50px;
}

#do_action .total_area {
  padding-bottom: 18px !important;
}

#do_action .total_area, #do_action .chose_area {
  border: 1px solid #E6E4DF;
  color: #696763;
  padding: 30px 25px 30px 0;
  margin-bottom: 80px;
}

#do_action .total_area {
  padding-bottom: 18px !important;
}

.total_area span {
  float: right;
}

.total_area ul li {
  background:#E6E4DF;
  color: #696763;
  margin-top: 10px;
  padding: 7px 20px;
}



{% endblock %}

{% block body %}

<section id=\"cart_items\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"{{path('homepage')}}\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Panier</li>
\t\t\t\t</ol>
\t\t\t</div>
        {% if products is not empty %}
\t\t\t<div class=\"table-responsive cart_info\">
\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"cart_menu\">
\t\t\t\t\t\t\t<td class=\"image\">Produit</td>
\t\t\t\t\t\t\t<td class=\"description\">Détails</td>
\t\t\t\t\t\t\t<td class=\"price\">Prix TND</td>
\t\t\t\t\t\t\t<td class=\"quantity\">Quantité</td>
\t\t\t\t\t\t\t<td class=\"total\">Total TND</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t{% for prd in products %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"cart_product\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{prd.imagePrincipale}}\" width=\"100px\" alt=\"\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_description\">
\t\t\t\t\t\t\t\t<h4><a href=\"\">{{prd.libelle}}</a></h4>
\t\t\t\t\t\t\t\t<p>ID: {{prd.id}}</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_price\">
\t\t\t\t\t\t\t\t<p>{{prd.prix}}</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_quantity\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"cart_quantity_button\">
\t\t\t\t\t\t\t\t\t<button onclick=\"location.href='{{ path('add_one_to_cart', { 'id' : prd.id }) }}'\">+</button>
\t\t\t\t\t\t\t\t\t<input id=\"qte_1\" class=\"cart_quantity_input\" type=\"text\" name=\"quantity\" value=\"{{cart[prd.id]}}\" autocomplete=\"off\" size=\"2\" disabled=\"\">
\t\t\t\t\t\t\t\t\t<button onclick=\"location.href='{{ path('remove_one_to_cart', { 'id' : prd.id }) }}'\">-</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_total\">
\t\t\t\t\t\t\t\t<p class=\"cart_total_price\">{{cart[prd.id] * prd.prix}}</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"cart_delete\">
\t\t\t\t\t\t\t\t<a class=\"cart_quantity_delete\" 
\t\t\t\t\t\t\t\thref=\"{{path('remove_from_cart', {'id': prd.id})}}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>


\t\t</div>
\t</section> <!--/#cart_items-->

\t<section id=\"do_action\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">

\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<div class=\"total_area\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Sous total <span>{{total_ht}}</span></li>
\t\t\t\t\t\t\t<li>TVA (10%) <span>{{mnt_tva}}</span></li>
\t\t\t\t\t\t\t<li>Frais de transport <span>Gratuit</span></li>
\t\t\t\t\t\t\t<li>Total <span>{{total_ttc}}</span></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a class=\"btn btn-danger\" 
\t\t\t\t\t\thref=\"{{path('clear_cart')}}\">Vider le panier</a> 

                        <a class=\"btn btn-success\" 
\t\t\t\t\t\thref=\"{{path('order')}}\">Valider ma commande</a> 

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section><!--/#do_action-->\t

    {% else %}
\t\t<h4> Panier est vide !!! </h4>
\t\t<br><br><br><br><br><br><br><br><br><br><br><br>
\t{% endif %}

{% endblock %}", "cart/cart.html.twig", "C:\\Users\\marzouk\\Desktop\\Electro-master\\templates\\cart\\cart.html.twig");
    }
}
