<?php

/* admin/index.html.twig */
class __TwigTemplate_8428f16130fbbf5b3704bdd617f16779d5eae00f89df0fafa4dee7b5498d943a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base-admin.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

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

        echo "Administrateur
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
        echo "    <h1><i class=\"green\">Page administrateur</i></h1>




         <!-- top tiles -->
          <div class=\"row tile_count\">
            <div class=\"col-md-2 col-sm-4 col-xs-4 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fas fa-fw fa-list\"></i> Produits</span>
              <div class=\"count\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["nb_p"]) || array_key_exists("nb_p", $context) ? $context["nb_p"] : (function () { throw new Twig_Error_Runtime('Variable "nb_p" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</div>
              <a  href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index");
        echo "\"><span  class=\"count_bottom\"><i class=\"green\">Afficher les details  <span class=\"float-right\">
                            <i class=\"fas fa-angle-right\"></i>
                        </span></i></span>
              </a>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-4 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fas fa-fw fa-table\"></i> Catégories</span>
              <div class=\"count\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["nb_ca"]) || array_key_exists("nb_ca", $context) ? $context["nb_ca"] : (function () { throw new Twig_Error_Runtime('Variable "nb_ca" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</div>
              <a  href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        echo "\"><span class=\"count_bottom\"><i class=\"green\">Afficher les details  <span class=\"float-right\">
                            <i class=\"fas fa-angle-right\"></i>
                        </span></i></span></a>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-4 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-edit\"></i> Commandes </span>
              <div class=\"count\"> ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["nb_co"]) || array_key_exists("nb_co", $context) ? $context["nb_co"] : (function () { throw new Twig_Error_Runtime('Variable "nb_co" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</div>
              <a  href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order");
        echo "\"><span class=\"count_bottom\"><i class=\"green\">Afficher les details  <span class=\"float-right\">
                            <i class=\"fas fa-angle-right\"></i>
                        </span></i></span></a>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-4 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-bar-chart-o\"></i> Montant commandes</span>
              <div class=\"count\">";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["total_m"]) || array_key_exists("total_m", $context) ? $context["total_m"] : (function () { throw new Twig_Error_Runtime('Variable "total_m" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</div>
              <a  href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order");
        echo "\"><span class=\"count_bottom\"><i class=\"green\">Afficher les details  <span class=\"float-right\">
                            <i class=\"fas fa-angle-right\"></i>
                        </span></i></span></a>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-4 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Avis clients</span>
              <div class=\"count\">";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["nb_avis"]) || array_key_exists("nb_avis", $context) ? $context["nb_avis"] : (function () { throw new Twig_Error_Runtime('Variable "nb_avis" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "</div>
              <a  href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_index");
        echo "\"><span class=\"count_bottom\"><i class=\"green\">Afficher les details  <span class=\"float-right\">
                            <i class=\"fas fa-angle-right\"></i>
                        </span></i></span></a>
            </div>




   

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  137 => 45,  128 => 39,  124 => 38,  115 => 32,  111 => 31,  102 => 25,  98 => 24,  88 => 17,  84 => 16,  73 => 7,  64 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base-admin.html.twig' %}

{% block title %}Administrateur
{% endblock %}

{% block body %}
    <h1><i class=\"green\">Page administrateur</i></h1>




         <!-- top tiles -->
          <div class=\"row tile_count\">
            <div class=\"col-md-2 col-sm-4 col-xs-4 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fas fa-fw fa-list\"></i> Produits</span>
              <div class=\"count\">{{ nb_p }}</div>
              <a  href=\"{{ path('produit_index') }}\"><span  class=\"count_bottom\"><i class=\"green\">Afficher les details  <span class=\"float-right\">
                            <i class=\"fas fa-angle-right\"></i>
                        </span></i></span>
              </a>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-4 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fas fa-fw fa-table\"></i> Catégories</span>
              <div class=\"count\">{{ nb_ca }}</div>
              <a  href=\"{{ path('categorie_index') }}\"><span class=\"count_bottom\"><i class=\"green\">Afficher les details  <span class=\"float-right\">
                            <i class=\"fas fa-angle-right\"></i>
                        </span></i></span></a>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-4 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-edit\"></i> Commandes </span>
              <div class=\"count\"> {{ nb_co }}</div>
              <a  href=\"{{ path('admin_order') }}\"><span class=\"count_bottom\"><i class=\"green\">Afficher les details  <span class=\"float-right\">
                            <i class=\"fas fa-angle-right\"></i>
                        </span></i></span></a>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-4 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-bar-chart-o\"></i> Montant commandes</span>
              <div class=\"count\">{{ total_m }}</div>
              <a  href=\"{{ path('admin_order') }}\"><span class=\"count_bottom\"><i class=\"green\">Afficher les details  <span class=\"float-right\">
                            <i class=\"fas fa-angle-right\"></i>
                        </span></i></span></a>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-4 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Avis clients</span>
              <div class=\"count\">{{ nb_avis }}</div>
              <a  href=\"{{ path('avis_index') }}\"><span class=\"count_bottom\"><i class=\"green\">Afficher les details  <span class=\"float-right\">
                            <i class=\"fas fa-angle-right\"></i>
                        </span></i></span></a>
            </div>




   

{% endblock %}", "admin/index.html.twig", "C:\\Users\\marzouk\\Desktop\\Electro-master1\\templates\\admin\\index.html.twig");
    }
}
