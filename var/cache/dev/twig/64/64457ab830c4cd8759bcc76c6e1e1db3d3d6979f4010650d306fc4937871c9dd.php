<?php

/* avis/show.html.twig */
class __TwigTemplate_ed1e45f2b39ea0bb402e9ea98fe2a52476bc9b855ce0fedd5930b7adb12c20d6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base-admin.html.twig", "avis/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "avis/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "avis/show.html.twig"));

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
        .review-rating {
            color: red;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <h1>Avis</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new Twig_Error_Runtime('Variable "avi" does not exist.', 21, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
                <th>Produit</th>
                <th>Produit Image</th>
            </tr>
            <tr>
                <th>Rating</th>
                <td>
                    ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new Twig_Error_Runtime('Variable "avi" does not exist.', 28, $this->source); })()), "rating", array()) == 0)) {
            // line 29
            echo "                        <div class=\"review-rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 36
(isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new Twig_Error_Runtime('Variable "avi" does not exist.', 36, $this->source); })()), "rating", array()) == 1)) {
            // line 37
            echo "                        <div class=\"review-rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 44
(isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new Twig_Error_Runtime('Variable "avi" does not exist.', 44, $this->source); })()), "rating", array()) == 2)) {
            // line 45
            echo "                        <div class=\"review-rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 52
(isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new Twig_Error_Runtime('Variable "avi" does not exist.', 52, $this->source); })()), "rating", array()) == 3)) {
            // line 53
            echo "                        <div class=\"review-rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 60
(isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new Twig_Error_Runtime('Variable "avi" does not exist.', 60, $this->source); })()), "rating", array()) == 4)) {
            // line 61
            echo "                        <div class=\"review-rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star-o empty\"></i>
                        </div>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 68
(isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new Twig_Error_Runtime('Variable "avi" does not exist.', 68, $this->source); })()), "rating", array()) == 5)) {
            // line 69
            echo "                        <div class=\"review-rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                    ";
        }
        // line 77
        echo "                </td>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new Twig_Error_Runtime('Variable "avi" does not exist.', 78, $this->source); })()), "produit", array()), "libelle", array()), "html", null, true);
        echo "</td>
                <td><img height=\"100px\" width=\"100px\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new Twig_Error_Runtime('Variable "avi" does not exist.', 79, $this->source); })()), "produit", array()), "imagePrincipale", array()), "html", null, true);
        echo "\"/></td>

            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new Twig_Error_Runtime('Variable "avi" does not exist.', 87, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 89
        echo twig_include($this->env, $context, "avis/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "avis/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 89,  204 => 87,  199 => 85,  190 => 79,  186 => 78,  183 => 77,  173 => 69,  171 => 68,  162 => 61,  160 => 60,  151 => 53,  149 => 52,  140 => 45,  138 => 44,  129 => 37,  127 => 36,  118 => 29,  116 => 28,  106 => 21,  98 => 15,  89 => 14,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base-admin.html.twig' %}

{% block title %}Avis{% endblock %}

{% block stylesheets %}
    <style>
        .review-rating {
            color: red;
        }
    </style>

{% endblock %}

{% block body %}
    <h1>Avis</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ avi.id }}</td>
                <th>Produit</th>
                <th>Produit Image</th>
            </tr>
            <tr>
                <th>Rating</th>
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

            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('avis_index') }}\">back to list</a>

    <a href=\"{{ path('avis_edit', {'id': avi.id}) }}\">edit</a>

    {{ include('avis/_delete_form.html.twig') }}
{% endblock %}", "avis/show.html.twig", "C:\\Users\\marzouk\\Desktop\\Electro-master\\templates\\avis\\show.html.twig");
    }
}
