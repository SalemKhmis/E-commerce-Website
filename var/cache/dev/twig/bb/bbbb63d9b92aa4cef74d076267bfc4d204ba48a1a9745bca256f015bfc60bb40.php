<?php

/* front/produit.html.twig */
class __TwigTemplate_41f247bd725df71d3af1e5c4a301a7f481e84018f4f581808fac8c2c2dd1e2e6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/produit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/produit.html.twig"));

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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 3, $this->source); })()), "libelle", array()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
    .custom-alert{ padding: 5px 10px; display:none } .custom-alert-success{ padding: 5px 10px; display:none }

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    <!-- SECTION -->
    <div class=\"section\">
        <!-- container -->
        <div class=\"container\">
        <div class=\"breadcrumbs\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a></li>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 21, $this->source); })()), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 22
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_produits", array("id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "libelle", array()), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    <li class=\"active\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 24, $this->source); })()), "libelle", array()), "html", null, true);
        echo "</li>
\t\t\t\t</ol>
\t\t\t</div>
            <!-- row -->
            <div class=\"row\">
                <!-- Product main img -->
                <div class=\"col-md-5 col-md-push-2\">
                    <div id=\"product-main-img\">
                        <div class=\"product-preview\">
                            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 33, $this->source); })()), "imagePrincipale", array()), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"product-preview\">
                            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 37, $this->source); })()), "imageSecondaire1", array()), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"product-preview\">
                            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 41, $this->source); })()), "imageSecondaire1", array()), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class=\"col-md-2  col-md-pull-5\">
                    <div id=\"product-imgs\">
                        <div class=\"product-preview\">
                            <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 51, $this->source); })()), "imagePrincipale", array()), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"product-preview\">
                            <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 55, $this->source); })()), "imageSecondaire1", array()), "html", null, true);
        echo "\" alt=\"\">
                        </div>

                        <div class=\"product-preview\">
                            <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 59, $this->source); })()), "imageSecondaire1", array()), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class=\"col-md-5\">
                    <div class=\"product-details\">
                        <h2 class=\"product-name\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 68, $this->source); })()), "libelle", array()), "html", null, true);
        echo "</h2>
                        <div>
                            ";
        // line 70
        if ((twig_round((isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 70, $this->source); })())) == 0)) {
            // line 71
            echo "                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                </div>
                            ";
        } elseif ((twig_round(        // line 78
(isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 78, $this->source); })())) == 1)) {
            // line 79
            echo "                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                </div>
                            ";
        } elseif ((twig_round(        // line 86
(isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 86, $this->source); })())) == 2)) {
            // line 87
            echo "                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                </div>
                            ";
        } elseif ((twig_round(        // line 94
(isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 94, $this->source); })())) == 3)) {
            // line 95
            echo "                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                </div>
                            ";
        } elseif ((twig_round(        // line 102
(isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 102, $this->source); })())) == 4)) {
            // line 103
            echo "                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                </div>
                            ";
        } elseif ((twig_round(        // line 110
(isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 110, $this->source); })())) == 5)) {
            // line 111
            echo "                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                </div>
                            ";
        }
        // line 119
        echo "                            <a class=\"review-link\" data-toggle=\"tab\" href=\"#tab3\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 119, $this->source); })()), "avis", array())), "html", null, true);
        echo "
                                | Add your Avis</a>
                        </div>
                        <div>
                            <h3 class=\"product-price\">";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 123, $this->source); })()), "prix", array()), "html", null, true);
        echo "
                                DT</h3>
                        </div>
                        <p>";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 126, $this->source); })()), "descriptionCourt", array()), "html", null, true);
        echo "</p>
                        <form action=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 127, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                            <div class=\"add-to-cart\">
                                <div class=\"qty-label\">
                                    Qty
                                    <div class=\"input-number\">
                                        <input type=\"number\" name=\"quantite\" value=\"1\">
                                        <span class=\"qty-up\">+</span>
                                        <span class=\"qty-down\">-</span>
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"add-to-cart-btn\">
                                    <i class=\"fa fa-shopping-cart\"></i>
                                    ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class=\"col-md-12\">
                    <div id=\"product-tab\">
                        <!-- product tab nav -->
                        <ul class=\"tab-nav\">
                            <li class=\"active\">
                                <a data-toggle=\"tab\" href=\"#tab1\">Description</a>
                            </li>
                            <li>
                                <a data-toggle=\"tab\" href=\"#tab3\">Avis (";
        // line 156
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 156, $this->source); })()), "avis", array())), "html", null, true);
        echo ")</a>
                            </li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class=\"tab-content\">
                            <!-- tab1 -->
                            <div id=\"tab1\" class=\"tab-pane fade in active\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <p>";
        // line 167
        echo twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 167, $this->source); })()), "descriptionLong", array());
        echo "</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1 -->

                            <!-- tab3 -->
                            <div id=\"tab3\" class=\"tab-pane fade in\">
                                <div class=\"row\">
                                    <!-- Rating -->
                                    <div class=\"col-md-3\">
                                        <div id=\"rating\">
                                            <div class=\"rating-avg\">
                                                <span>";
        // line 180
        echo twig_escape_filter($this->env, twig_round((isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 180, $this->source); })()), 1, "floor"), "html", null, true);
        echo "</span>
                                                ";
        // line 181
        if ((twig_round((isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 181, $this->source); })())) == 0)) {
            // line 182
            echo "                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                    </div>
                                                ";
        } elseif ((twig_round(        // line 189
(isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 189, $this->source); })())) == 1)) {
            // line 190
            echo "                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                    </div>
                                                ";
        } elseif ((twig_round(        // line 197
(isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 197, $this->source); })())) == 2)) {
            // line 198
            echo "                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                    </div>
                                                ";
        } elseif ((twig_round(        // line 205
(isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 205, $this->source); })())) == 3)) {
            // line 206
            echo "                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                    </div>
                                                ";
        } elseif ((twig_round(        // line 213
(isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 213, $this->source); })())) == 4)) {
            // line 214
            echo "                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                    </div>
                                                ";
        } elseif ((twig_round(        // line 221
(isset($context["avg_rating"]) || array_key_exists("avg_rating", $context) ? $context["avg_rating"] : (function () { throw new Twig_Error_Runtime('Variable "avg_rating" does not exist.', 221, $this->source); })())) == 5)) {
            // line 222
            echo "                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                    </div>
                                                ";
        }
        // line 230
        echo "                                            </div>
                                            <ul class=\"rating\">
                                                <li>
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                    </div>
                                                    <div class=\"rating-progress\">
                                                        <div></div>
                                                    </div>
                                                    <span class=\"sum\">";
        // line 243
        echo twig_escape_filter($this->env, (isset($context["star_five"]) || array_key_exists("star_five", $context) ? $context["star_five"] : (function () { throw new Twig_Error_Runtime('Variable "star_five" does not exist.', 243, $this->source); })()), "html", null, true);
        echo "</span>
                                                </li>
                                                <li>
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                    </div>
                                                    <div class=\"rating-progress\">
                                                        <div></div>
                                                    </div>
                                                    <span class=\"sum\">";
        // line 256
        echo twig_escape_filter($this->env, (isset($context["star_four"]) || array_key_exists("star_four", $context) ? $context["star_four"] : (function () { throw new Twig_Error_Runtime('Variable "star_four" does not exist.', 256, $this->source); })()), "html", null, true);
        echo "</span>
                                                </li>
                                                <li>
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                    </div>
                                                    <div class=\"rating-progress\">
                                                        <div></div>
                                                    </div>
                                                    <span class=\"sum\">";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["star_three"]) || array_key_exists("star_three", $context) ? $context["star_three"] : (function () { throw new Twig_Error_Runtime('Variable "star_three" does not exist.', 269, $this->source); })()), "html", null, true);
        echo "</span>
                                                </li>
                                                <li>
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                    </div>
                                                    <div class=\"rating-progress\">
                                                        <div></div>
                                                    </div>
                                                    <span class=\"sum\">";
        // line 282
        echo twig_escape_filter($this->env, (isset($context["star_two"]) || array_key_exists("star_two", $context) ? $context["star_two"] : (function () { throw new Twig_Error_Runtime('Variable "star_two" does not exist.', 282, $this->source); })()), "html", null, true);
        echo "</span>
                                                </li>
                                                <li>
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                    </div>
                                                    <div class=\"rating-progress\">
                                                        <div></div>
                                                    </div>
                                                    <span class=\"sum\">";
        // line 295
        echo twig_escape_filter($this->env, (isset($context["star_one"]) || array_key_exists("star_one", $context) ? $context["star_one"] : (function () { throw new Twig_Error_Runtime('Variable "star_one" does not exist.', 295, $this->source); })()), "html", null, true);
        echo "</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Rating -->

                                    <!-- Reviews -->
                                    <div class=\"col-md-6\">
                                        <div id=\"reviews\">
                                            <ul class=\"reviews\">
                                                ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 306, $this->source); })()), "avis", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 307
            echo "                                                    <li>
                                                        <div class=\"review-heading\">
                                                            <h5 class=\"name\">";
            // line 309
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "fullName", array()), "html", null, true);
            echo "</h5>
                                                            <p class=\"date\">";
            // line 310
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                                                            ";
            // line 311
            if ((twig_get_attribute($this->env, $this->source, $context["avi"], "rating", array()) == 0)) {
                // line 312
                echo "                                                                <div class=\"review-rating\">
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                </div>
                                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 319
$context["avi"], "rating", array()) == 1)) {
                // line 320
                echo "                                                                <div class=\"review-rating\">
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                </div>
                                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 327
$context["avi"], "rating", array()) == 2)) {
                // line 328
                echo "                                                                <div class=\"review-rating\">
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                </div>
                                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 335
$context["avi"], "rating", array()) == 3)) {
                // line 336
                echo "                                                                <div class=\"review-rating\">
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                </div>
                                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 343
$context["avi"], "rating", array()) == 4)) {
                // line 344
                echo "                                                                <div class=\"review-rating\">
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star-o empty\"></i>
                                                                </div>
                                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 351
$context["avi"], "rating", array()) == 5)) {
                // line 352
                echo "                                                                <div class=\"review-rating\">
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star\"></i>
                                                                    <i class=\"fa fa-star\"></i>
                                                                </div>
                                                            ";
            }
            // line 360
            echo "
                                                        </div>
                                                        <div class=\"review-body\">
                                                            <p>";
            // line 363
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "description", array()), "html", null, true);
            echo "</p>
                                                        </div>
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        echo "                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Reviews -->

                                    <!-- Review Form -->
                                    <div class=\"col-md-3\">
                                        <div id=\"review-form\">
                                            <form class=\"review-form\" action=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_produit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 375, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                                                <div class=\"alert alert-danger custom-alert\">
                                                    Name And Email And description must be
                                                    <strong>Empty</strong>
                                                </div>
                                                <div class=\"alert alert-success custom-alert-success\">
                                                    Name And Email And description must be
                                                    <strong>Empty</strong>
                                                </div>
                                                <input id=\"nom\" class=\"input\" type=\"text\" name=\"nom\" placeholder=\"Your Name\">

                                                <input id=\"email\" class=\"input\" type=\"email\" name=\"email\" placeholder=\"Your Email\">

                                                <textarea id=\"desc\" name=\"desc\" class=\"input\" placeholder=\"Your Review\"></textarea>
                                                <div class=\"input-rating\">
                                                    <span>Your Rating:
                                                    </span>
                                                    <div class=\"stars\">
                                                        <input id=\"star5\" name=\"rating\" value=\"5\" type=\"radio\">
                                                        <label for=\"star5\"></label>
                                                        <input id=\"star4\" name=\"rating\" value=\"4\" type=\"radio\">
                                                        <label for=\"star4\"></label>
                                                        <input id=\"star3\" name=\"rating\" value=\"3\" type=\"radio\">
                                                        <label for=\"star3\"></label>
                                                        <input id=\"star2\" name=\"rating\" value=\"2\" type=\"radio\">
                                                        <label for=\"star2\"></label>
                                                        <input id=\"star1\" name=\"rating\" value=\"1\" type=\"radio\">
                                                        <label for=\"star1\"></label>
                                                    </div>
                                                </div>
                                                <button class=\"primary-btn\">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /Review Form -->
                                </div>
                            </div>
                            <!-- /tab3 -->

                        </div>
                        <!-- /product tab content -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 428
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 429
        echo "    <script>
        \$(function () {
            'use strict';

            var nomError = true,
                emailError = true,
                descError = true;

            \$('#nom').blur(function () {
                if (\$(this).val() === '') {
                    nomError = true;
                } else {
                    nomError = false;
                }
            });
            \$('#email').blur(function () {
                if (\$(this).val() === '') {
                    emailError = true;
                } else {
                    emailError = false;
                }
            });
            \$('#desc').blur(function () {
                if (\$(this).val() === '') {
                    descError = true;
                } else {
                    descError = false;
                }
            });

            \$('.review-form').submit(function (e) {
                if (nomError === true || emailError === true || descError === true) {
                    e.preventDefault();
                    \$('.custom-alert').fadeIn(200);
                    \$('.custom-alert-success').hide();
                } else {
                    \$('.custom-alert').hide();
                    \$('.custom-alert-success').fadeIn(200);
                    \$('#desc').text('');
                    \$('#nom').text('');
                    \$('#email').text('');
                }

            })

        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  687 => 429,  678 => 428,  616 => 375,  606 => 367,  596 => 363,  591 => 360,  581 => 352,  579 => 351,  570 => 344,  568 => 343,  559 => 336,  557 => 335,  548 => 328,  546 => 327,  537 => 320,  535 => 319,  526 => 312,  524 => 311,  520 => 310,  516 => 309,  512 => 307,  508 => 306,  494 => 295,  478 => 282,  462 => 269,  446 => 256,  430 => 243,  415 => 230,  405 => 222,  403 => 221,  394 => 214,  392 => 213,  383 => 206,  381 => 205,  372 => 198,  370 => 197,  361 => 190,  359 => 189,  350 => 182,  348 => 181,  344 => 180,  328 => 167,  314 => 156,  282 => 127,  278 => 126,  272 => 123,  264 => 119,  254 => 111,  252 => 110,  243 => 103,  241 => 102,  232 => 95,  230 => 94,  221 => 87,  219 => 86,  210 => 79,  208 => 78,  199 => 71,  197 => 70,  192 => 68,  180 => 59,  173 => 55,  166 => 51,  153 => 41,  146 => 37,  139 => 33,  126 => 24,  115 => 22,  111 => 21,  107 => 20,  98 => 13,  89 => 12,  76 => 7,  67 => 6,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ produit.libelle }}
{% endblock %}

{% block stylesheets %}

    .custom-alert{ padding: 5px 10px; display:none } .custom-alert-success{ padding: 5px 10px; display:none }

{% endblock %}

{% block body %}

    <!-- SECTION -->
    <div class=\"section\">
        <!-- container -->
        <div class=\"container\">
        <div class=\"breadcrumbs\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"{{path('homepage')}}\">Accueil</a></li>
                    {% for cat in produit.categories %}
\t\t\t\t\t<li><a href=\"{{path('category_produits',{ 'id': cat.id })}}\">{{ cat.libelle }}</a></li>
                    {% endfor %}
                    <li class=\"active\">{{ produit.libelle }}</li>
\t\t\t\t</ol>
\t\t\t</div>
            <!-- row -->
            <div class=\"row\">
                <!-- Product main img -->
                <div class=\"col-md-5 col-md-push-2\">
                    <div id=\"product-main-img\">
                        <div class=\"product-preview\">
                            <img src=\"{{ produit.imagePrincipale }}\" alt=\"\">
                        </div>

                        <div class=\"product-preview\">
                            <img src=\"{{ produit.imageSecondaire1 }}\" alt=\"\">
                        </div>

                        <div class=\"product-preview\">
                            <img src=\"{{ produit.imageSecondaire1 }}\" alt=\"\">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class=\"col-md-2  col-md-pull-5\">
                    <div id=\"product-imgs\">
                        <div class=\"product-preview\">
                            <img src=\"{{ produit.imagePrincipale }}\" alt=\"\">
                        </div>

                        <div class=\"product-preview\">
                            <img src=\"{{ produit.imageSecondaire1 }}\" alt=\"\">
                        </div>

                        <div class=\"product-preview\">
                            <img src=\"{{ produit.imageSecondaire1 }}\" alt=\"\">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class=\"col-md-5\">
                    <div class=\"product-details\">
                        <h2 class=\"product-name\">{{ produit.libelle }}</h2>
                        <div>
                            {% if avg_rating|round == 0 %}
                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                </div>
                            {% elseif avg_rating|round == 1 %}
                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                </div>
                            {% elseif avg_rating|round == 2  %}
                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                </div>
                            {% elseif avg_rating|round == 3  %}
                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                </div>
                            {% elseif avg_rating|round == 4  %}
                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-o empty\"></i>
                                </div>
                            {% elseif avg_rating|round == 5  %}
                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                </div>
                            {% endif %}
                            <a class=\"review-link\" data-toggle=\"tab\" href=\"#tab3\">{{ produit.avis | length }}
                                | Add your Avis</a>
                        </div>
                        <div>
                            <h3 class=\"product-price\">{{ produit.prix }}
                                DT</h3>
                        </div>
                        <p>{{ produit.descriptionCourt }}</p>
                        <form action=\"{{ path('add_to_cart', {'id': produit.id}) }}\" method=\"post\">
                            <div class=\"add-to-cart\">
                                <div class=\"qty-label\">
                                    Qty
                                    <div class=\"input-number\">
                                        <input type=\"number\" name=\"quantite\" value=\"1\">
                                        <span class=\"qty-up\">+</span>
                                        <span class=\"qty-down\">-</span>
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"add-to-cart-btn\">
                                    <i class=\"fa fa-shopping-cart\"></i>
                                    ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class=\"col-md-12\">
                    <div id=\"product-tab\">
                        <!-- product tab nav -->
                        <ul class=\"tab-nav\">
                            <li class=\"active\">
                                <a data-toggle=\"tab\" href=\"#tab1\">Description</a>
                            </li>
                            <li>
                                <a data-toggle=\"tab\" href=\"#tab3\">Avis ({{ produit.avis | length }})</a>
                            </li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class=\"tab-content\">
                            <!-- tab1 -->
                            <div id=\"tab1\" class=\"tab-pane fade in active\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <p>{{ produit.descriptionLong | raw }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1 -->

                            <!-- tab3 -->
                            <div id=\"tab3\" class=\"tab-pane fade in\">
                                <div class=\"row\">
                                    <!-- Rating -->
                                    <div class=\"col-md-3\">
                                        <div id=\"rating\">
                                            <div class=\"rating-avg\">
                                                <span>{{ avg_rating|round(1, 'floor') }}</span>
                                                {% if avg_rating | round == 0 %}
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                    </div>
                                                {% elseif avg_rating|round == 1 %}
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                    </div>
                                                {% elseif avg_rating|round == 2  %}
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                    </div>
                                                {% elseif avg_rating|round == 3  %}
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                    </div>
                                                {% elseif avg_rating|round == 4  %}
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o empty\"></i>
                                                    </div>
                                                {% elseif avg_rating|round == 5  %}
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                    </div>
                                                {% endif %}
                                            </div>
                                            <ul class=\"rating\">
                                                <li>
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                    </div>
                                                    <div class=\"rating-progress\">
                                                        <div></div>
                                                    </div>
                                                    <span class=\"sum\">{{ star_five }}</span>
                                                </li>
                                                <li>
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                    </div>
                                                    <div class=\"rating-progress\">
                                                        <div></div>
                                                    </div>
                                                    <span class=\"sum\">{{ star_four }}</span>
                                                </li>
                                                <li>
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                    </div>
                                                    <div class=\"rating-progress\">
                                                        <div></div>
                                                    </div>
                                                    <span class=\"sum\">{{ star_three }}</span>
                                                </li>
                                                <li>
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                    </div>
                                                    <div class=\"rating-progress\">
                                                        <div></div>
                                                    </div>
                                                    <span class=\"sum\">{{ star_two }}</span>
                                                </li>
                                                <li>
                                                    <div class=\"rating-stars\">
                                                        <i class=\"fa fa-star\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                        <i class=\"fa fa-star-o\"></i>
                                                    </div>
                                                    <div class=\"rating-progress\">
                                                        <div></div>
                                                    </div>
                                                    <span class=\"sum\">{{ star_one }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Rating -->

                                    <!-- Reviews -->
                                    <div class=\"col-md-6\">
                                        <div id=\"reviews\">
                                            <ul class=\"reviews\">
                                                {% for avi in produit.avis %}
                                                    <li>
                                                        <div class=\"review-heading\">
                                                            <h5 class=\"name\">{{ avi.fullName }}</h5>
                                                            <p class=\"date\">{{ avi.createdAt | date('d/m/Y') }}</p>
                                                            {% if avi.rating == 0 %}
                                                                <div class=\"review-rating\">
                                                                    <i class=\"fa fa-star-o empty\"></i>
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

                                                        </div>
                                                        <div class=\"review-body\">
                                                            <p>{{ avi.description }}</p>
                                                        </div>
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Reviews -->

                                    <!-- Review Form -->
                                    <div class=\"col-md-3\">
                                        <div id=\"review-form\">
                                            <form class=\"review-form\" action=\"{{ path('show_produit', {'id': produit.id}) }}\" method=\"post\">
                                                <div class=\"alert alert-danger custom-alert\">
                                                    Name And Email And description must be
                                                    <strong>Empty</strong>
                                                </div>
                                                <div class=\"alert alert-success custom-alert-success\">
                                                    Name And Email And description must be
                                                    <strong>Empty</strong>
                                                </div>
                                                <input id=\"nom\" class=\"input\" type=\"text\" name=\"nom\" placeholder=\"Your Name\">

                                                <input id=\"email\" class=\"input\" type=\"email\" name=\"email\" placeholder=\"Your Email\">

                                                <textarea id=\"desc\" name=\"desc\" class=\"input\" placeholder=\"Your Review\"></textarea>
                                                <div class=\"input-rating\">
                                                    <span>Your Rating:
                                                    </span>
                                                    <div class=\"stars\">
                                                        <input id=\"star5\" name=\"rating\" value=\"5\" type=\"radio\">
                                                        <label for=\"star5\"></label>
                                                        <input id=\"star4\" name=\"rating\" value=\"4\" type=\"radio\">
                                                        <label for=\"star4\"></label>
                                                        <input id=\"star3\" name=\"rating\" value=\"3\" type=\"radio\">
                                                        <label for=\"star3\"></label>
                                                        <input id=\"star2\" name=\"rating\" value=\"2\" type=\"radio\">
                                                        <label for=\"star2\"></label>
                                                        <input id=\"star1\" name=\"rating\" value=\"1\" type=\"radio\">
                                                        <label for=\"star1\"></label>
                                                    </div>
                                                </div>
                                                <button class=\"primary-btn\">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /Review Form -->
                                </div>
                            </div>
                            <!-- /tab3 -->

                        </div>
                        <!-- /product tab content -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

{% endblock %}

{% block javascripts %}
    <script>
        \$(function () {
            'use strict';

            var nomError = true,
                emailError = true,
                descError = true;

            \$('#nom').blur(function () {
                if (\$(this).val() === '') {
                    nomError = true;
                } else {
                    nomError = false;
                }
            });
            \$('#email').blur(function () {
                if (\$(this).val() === '') {
                    emailError = true;
                } else {
                    emailError = false;
                }
            });
            \$('#desc').blur(function () {
                if (\$(this).val() === '') {
                    descError = true;
                } else {
                    descError = false;
                }
            });

            \$('.review-form').submit(function (e) {
                if (nomError === true || emailError === true || descError === true) {
                    e.preventDefault();
                    \$('.custom-alert').fadeIn(200);
                    \$('.custom-alert-success').hide();
                } else {
                    \$('.custom-alert').hide();
                    \$('.custom-alert-success').fadeIn(200);
                    \$('#desc').text('');
                    \$('#nom').text('');
                    \$('#email').text('');
                }

            })

        });
    </script>

{% endblock %}", "front/produit.html.twig", "C:\\Users\\marzouk\\Desktop\\Electro-master\\templates\\front\\produit.html.twig");
    }
}
