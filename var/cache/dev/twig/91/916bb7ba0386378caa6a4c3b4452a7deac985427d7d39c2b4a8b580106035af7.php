<?php

/* avis/index.html.twig */
class __TwigTemplate_19eff51accf4a51ec89ca592c46d8ee46a286ed72d215ec66649f62d170364c1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base-admin.html.twig", "avis/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

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

        echo "Avis";
        
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
        echo "    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #0aa;
            color: white;
        }

        .review-rating {
            color: red;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "    <h1><i class=\"green\">Avis</i></h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Rating</th>
                <th>Produit</th>
                <th>Produit Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new Twig_Error_Runtime('Variable "avis" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 49
            echo "                <tr>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "id", array()), "html", null, true);
            echo "</td>
                    <td>

                        ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, $context["avi"], "rating", array()) == 0)) {
                // line 54
                echo "                            <div class=\"review-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                            </div>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 61
$context["avi"], "rating", array()) == 1)) {
                // line 62
                echo "                            <div class=\"review-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                            </div>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 69
$context["avi"], "rating", array()) == 2)) {
                // line 70
                echo "                            <div class=\"review-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                            </div>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 77
$context["avi"], "rating", array()) == 3)) {
                // line 78
                echo "                            <div class=\"review-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                            </div>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 85
$context["avi"], "rating", array()) == 4)) {
                // line 86
                echo "                            <div class=\"review-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                            </div>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 93
$context["avi"], "rating", array()) == 5)) {
                // line 94
                echo "                            <div class=\"review-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                        ";
            }
            // line 102
            echo "                    </td>
                    <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avi"], "produit", array()), "libelle", array()), "html", null, true);
            echo "</td>
                    <td><img height=\"100px\" width=\"100px\" src=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avi"], "produit", array()), "imagePrincipale", array()), "html", null, true);
            echo "\"/></td>
                    <td>
                        <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_show", array("id" => twig_get_attribute($this->env, $this->source, $context["avi"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["avi"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 111
            echo "                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "avis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 115,  239 => 111,  230 => 107,  226 => 106,  221 => 104,  217 => 103,  214 => 102,  204 => 94,  202 => 93,  193 => 86,  191 => 85,  182 => 78,  180 => 77,  171 => 70,  169 => 69,  160 => 62,  158 => 61,  149 => 54,  147 => 53,  141 => 50,  138 => 49,  133 => 48,  118 => 35,  109 => 34,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base-admin.html.twig' %}

{% block title %}Avis{% endblock %}

{% block stylesheets %}
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #0aa;
            color: white;
        }

        .review-rating {
            color: red;
        }
    </style>

{% endblock %}

{% block body %}
    <h1><i class=\"green\">Avis</i></h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Rating</th>
                <th>Produit</th>
                <th>Produit Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            {% for avi in avis %}
                <tr>
                    <td>{{ avi.id }}</td>
                    <td>

                        {% if avi.rating == 0 %}
                            <div class=\"review-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                            </div>
                        {% elseif avi.rating == 1 %}
                            <div class=\"review-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                            </div>
                        {% elseif avi.rating == 2  %}
                            <div class=\"review-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                            </div>
                        {% elseif avi.rating == 3  %}
                            <div class=\"review-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                            </div>
                        {% elseif avi.rating == 4  %}
                            <div class=\"review-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-o empty\"></i>
                            </div>
                        {% elseif avi.rating == 5  %}
                            <div class=\"review-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                        {% endif %}
                    </td>
                    <td>{{ avi.produit.libelle }}</td>
                    <td><img height=\"100px\" width=\"100px\" src=\"{{ avi.produit.imagePrincipale }}\"/></td>
                    <td>
                        <a href=\"{{ path('avis_show', {'id': avi.id}) }}\">show</a>
                        <a href=\"{{ path('avis_edit', {'id': avi.id}) }}\">edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

{% endblock %}", "avis/index.html.twig", "C:\\Users\\marzouk\\Desktop\\Electro-master1\\templates\\avis\\index.html.twig");
    }
}
