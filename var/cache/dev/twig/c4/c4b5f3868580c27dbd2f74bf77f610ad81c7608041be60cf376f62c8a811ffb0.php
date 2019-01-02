<?php

/* order/show.html.twig */
class __TwigTemplate_86250206a4cb288350292b86ac910a4be7356060ded5c26f30e0bc4cf96bfd9b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base-admin.html.twig", "order/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order/show.html.twig"));

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

        echo "Order Details ";
        
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
        echo "<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #0aa;
  color: white;
}

#details{
    text-align: right;
}
</style>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "    ";
        $context["total_ht"] = 0;
        // line 35
        echo "    ";
        $context["tva"] = 0;
        // line 36
        echo "    ";
        $context["total_ttc"] = 0;
        // line 37
        echo "
    <table class=\"table\">
        <tr>
            <td>
                <h3>Commande n° ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 41, $this->source); })()), "id", array()), "html", null, true);
        echo "</h3>
                <h4>Du ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 42, $this->source); })()), "createdAt", array()), "d/m/Y"), "html", null, true);
        echo "</h4>
            </td>
            <td id=\"details\">
                <h5>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 45, $this->source); })()), "fullName", array()), "html", null, true);
        echo "</h5>
                <h5>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 46, $this->source); })()), "email", array()), "html", null, true);
        echo "</h5>
                <h5>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 47, $this->source); })()), "address", array()), "html", null, true);
        echo "</h4>
                <h5>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 48, $this->source); })()), "zipCode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 48, $this->source); })()), "city", array()), "html", null, true);
        echo "</h4>
                <h5>Tel : ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 49, $this->source); })()), "telephone", array()), "html", null, true);
        echo "</h4>
            </td>
        </tr>
    </table>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produit</th>
                <th>PU</th>
                <th>Qté</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 65, $this->source); })()), "ligneCommandes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 66
            echo "            <tr>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "produit", array()), "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "produit", array()), "libelle", array()), "html", null, true);
            echo "t</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "quantite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["ligne"], "prix", array()) * twig_get_attribute($this->env, $this->source, $context["ligne"], "quantite", array())), "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 73
            $context["total_ht"] = ((isset($context["total_ht"]) || array_key_exists("total_ht", $context) ? $context["total_ht"] : (function () { throw new Twig_Error_Runtime('Variable "total_ht" does not exist.', 73, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["ligne"], "prix", array()) * twig_get_attribute($this->env, $this->source, $context["ligne"], "quantite", array())));
            // line 74
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            
            ";
        // line 76
        $context["tva"] = (((isset($context["total_ht"]) || array_key_exists("total_ht", $context) ? $context["total_ht"] : (function () { throw new Twig_Error_Runtime('Variable "total_ht" does not exist.', 76, $this->source); })()) * 10) / 100);
        // line 77
        echo "            ";
        $context["total_ttc"] = ((isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new Twig_Error_Runtime('Variable "tva" does not exist.', 77, $this->source); })()) + (isset($context["total_ht"]) || array_key_exists("total_ht", $context) ? $context["total_ht"] : (function () { throw new Twig_Error_Runtime('Variable "total_ht" does not exist.', 77, $this->source); })()));
        // line 78
        echo "

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Total HT</td>
                <td>";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["total_ht"]) || array_key_exists("total_ht", $context) ? $context["total_ht"] : (function () { throw new Twig_Error_Runtime('Variable "total_ht" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Montant TVA 10%</td>
                <td>";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new Twig_Error_Runtime('Variable "tva" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><strong>Total TTC</strong></td>
                <td><strong>";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["total_ttc"]) || array_key_exists("total_ttc", $context) ? $context["total_ttc"] : (function () { throw new Twig_Error_Runtime('Variable "total_ttc" does not exist.', 99, $this->source); })()), "html", null, true);
        echo "</strong></td>
            </tr>
        </tbody>
    </table>

    <div>
        <button type=\"submit\" class=\"btn btn-success\">Imprimer</button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        echo "<script>
\$(document).ready(function() {
    \$(function () {
        \$('button[type=\"submit\"]').click(function () {
            var pageTitle = 'Comande details',
                stylesheet = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css',
                win = window.open('', 'Print', 'width=500,height=300');
            win.document.write('<html><head><title>' + pageTitle + '</title>' +
                '<link rel=\"stylesheet\" href=\"' + stylesheet + '\">' +
                '</head><body>' + \$('.table')[0].outerHTML +'<br>'+ \$('.table')[1].outerHTML + '</body></html>');
            win.document.close();
            win.print();
            win.close();
            return false;
        });
    });

});

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 110,  272 => 109,  253 => 99,  243 => 92,  233 => 85,  224 => 78,  221 => 77,  219 => 76,  216 => 75,  210 => 74,  208 => 73,  203 => 71,  199 => 70,  195 => 69,  191 => 68,  187 => 67,  184 => 66,  180 => 65,  161 => 49,  155 => 48,  151 => 47,  147 => 46,  143 => 45,  137 => 42,  133 => 41,  127 => 37,  124 => 36,  121 => 35,  118 => 34,  109 => 33,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base-admin.html.twig' %}

{% block title %}Order Details {% endblock %}

{% block stylesheets %}
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #0aa;
  color: white;
}

#details{
    text-align: right;
}
</style>



{% endblock %}

{% block body %}
    {% set total_ht  = 0 %}
    {% set tva       = 0 %}
    {% set total_ttc = 0 %}

    <table class=\"table\">
        <tr>
            <td>
                <h3>Commande n° {{commande.id}}</h3>
                <h4>Du {{commande.createdAt | date('d/m/Y')}}</h4>
            </td>
            <td id=\"details\">
                <h5>{{commande.fullName}}</h5>
                <h5>{{commande.email}}</h5>
                <h5>{{commande.address}}</h4>
                <h5>{{commande.zipCode}} {{commande.city}}</h4>
                <h5>Tel : {{commande.telephone}}</h4>
            </td>
        </tr>
    </table>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produit</th>
                <th>PU</th>
                <th>Qté</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            
            {% for ligne in commande.ligneCommandes %}
            <tr>
                <td>{{ligne.produit.id}}</td>
                <td>{{ligne.produit.libelle}}t</td>
                <td>{{ligne.prix}}</td>
                <td>{{ligne.quantite}}</td>
                <td>{{ligne.prix * ligne.quantite}}</td>
            </tr>
            {% set total_ht  = total_ht +  ligne.prix * ligne.quantite %}
            {% endfor %}
            
            {% set tva       =  total_ht * 10 / 100 %}
            {% set total_ttc =  tva + total_ht  %}


            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Total HT</td>
                <td>{{total_ht}}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Montant TVA 10%</td>
                <td>{{tva}}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><strong>Total TTC</strong></td>
                <td><strong>{{total_ttc}}</strong></td>
            </tr>
        </tbody>
    </table>

    <div>
        <button type=\"submit\" class=\"btn btn-success\">Imprimer</button>
    </div>
{% endblock %}

{% block javascripts %}
<script>
\$(document).ready(function() {
    \$(function () {
        \$('button[type=\"submit\"]').click(function () {
            var pageTitle = 'Comande details',
                stylesheet = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css',
                win = window.open('', 'Print', 'width=500,height=300');
            win.document.write('<html><head><title>' + pageTitle + '</title>' +
                '<link rel=\"stylesheet\" href=\"' + stylesheet + '\">' +
                '</head><body>' + \$('.table')[0].outerHTML +'<br>'+ \$('.table')[1].outerHTML + '</body></html>');
            win.document.close();
            win.print();
            win.close();
            return false;
        });
    });

});

</script>
{% endblock %}
", "order/show.html.twig", "C:\\Users\\marzouk\\Desktop\\Electro-master\\templates\\order\\show.html.twig");
    }
}
