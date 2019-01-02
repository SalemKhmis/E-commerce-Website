<?php

/* base.html.twig */
class __TwigTemplate_19a2c288c638d47d1b903065e6d7e1fb3e5cd8ffa87fb2fe22291dc1d1273c03 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Google font -->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500,700\" rel=\"stylesheet\">

        <!-- Bootstrap -->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/bootstrap.min.css\"/>

    <link href=\"/css/base.css\" rel=\"stylesheet\" media=\"screen\"/>
<!-- Bootstrap style responsive --> 
    <link href=\"/css/bootstrap-responsive.min.css\" rel=\"stylesheet\"/>
    <link href=\"/css/font-awesome.css\" rel=\"stylesheet\" type=\"text/css\">
<!-- Google-code-prettify -->    
    <link href=\"/js/google-code-prettify/prettify.css\" rel=\"stylesheet\"/>
<!-- fav and touch icons --> 

        <!-- Slick -->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/slick.css\"/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/slick-theme.css\"/>

        <!-- nouislider -->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/nouislider.min.css\"/>

        <!-- Font Awesome Icon -->
        <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">

        <!-- Custom stlylesheet -->  
        <link type=\"text/css\" rel=\"stylesheet\"  href=\"/css/style.css\"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script> <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script> <![endif]-->
        </title>
        <style>
            ";
        // line 43
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "        <title>
            ";
        // line 46
        $this->displayBlock('title', $context, $blocks);
        // line 47
        echo "        </style>
    </head>
    <body >

        <!-- HEADER -->
        <header >
            <!-- TOP HEADER -->
          
                    
                            
                        
                                Salem Khmis DSI3.1</a>
                       
               
            <!-- /TOP HEADER -->

            <!-- MAIN HEADER -->

            <div id=\"header\" >

                <!-- container -->
                <div class=\"container\">

                    <!-- row -->
                    <div class=\"row\">

                        <!-- LOGO --> 
                        <div class=\"col-md-3\">
                            <div class=\"header-logo\">
                                <a  href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"logo\">
                                      <img src=\"/img/salem1.jpg\" alt=\"\" class=\"img-circle profile_img\">
                                          
                                <h4 style=\"color: #fff\">Salem Khmis</h4> </a>
                            </div>
                        </div>
                        <!-- /LOGO -->



                        <!-- SEARCH BAR -->
                        <div class=\"col-md-6\">
                            <div class=\"header-search\">
                        <form class=\"form-inline navbar-search\" method=\"post\" action=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" >

                                    <input name=\"q\" class=\"input\" placeholder=\"Taper le nom de produit\">
          <button type=\"submit\" id=\"submitButton\" class=\"btn btn-primary\">Chercher</button>
                                </form>
                            </div>
                        </div>
                        <!-- /SEARCH BAR -->

                        <!-- ACCOUNT -->
                        <div class=\"col-md-3 clearfix\">
                            <div class=\"header-ctn \" >

                                <!-- Cart -->
                                <div class=\"dropdown\">
                                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CartController::nbproduit"));
        echo "
                                </div>
                                <!-- /Cart -->

                            </div>
                        </div>
                        <!-- /ACCOUNT -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- /MAIN HEADER -->
        </header>

  <!-- SECTION -->
        <div class=\"section\">
            <!-- container -->
            <div class=\"container\">

                ";
        // line 124
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "
            </div>
        </div>


<!-- Footer ================================================================== -->
    <div  id=\"footerSection\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                <h5>ACCOUNT</h5>
                <a href=\"#\">YOUR ACCOUNT</a>
                <a href=\"#\">PERSONAL INFORMATION</a> 
                <a href=\"#\">ADDRESSES</a> 
                <a href=\"#\">DISCOUNT</a>  
                <a href=\"#\">ORDER HISTORY</a>
             </div>
            <div class=\"span3\">
                <h5>INFORMATION</h5>
                <a href=\"#\">CONTACT</a>  
                <a href=\"#.\">REGISTRATION</a>  
                <a href=\"#\">LEGAL NOTICE</a>  
                <a href=\"#\">TERMS AND CONDITIONS</a> 
                <a href=\"#\">FAQ</a>
             </div>
            <div class=\"span3\">
                <h5>OUR OFFERS</h5>
                <a href=\"#\">NEW PRODUCTS</a> 
                <a href=\"#\">TOP SELLERS</a>  
                <a href=\"#\">SPECIAL OFFERS</a>  
                <a href=\"#\">MANUFACTURERS</a> 
                <a href=\"#\">SUPPLIERS</a> 
             </div>
            <div id=\"socialMedia\" class=\"span3 pull-right\">
                <h5>SOCIAL MEDIA </h5>
                <a href=\"#\"><img width=\"60\" height=\"60\" src=\"/img/facebook.png\" title=\"facebook\" alt=\"facebook\"/></a>
                <a href=\"#\"><img width=\"60\" height=\"60\" src=\"/img/twitter.png\" title=\"twitter\" alt=\"twitter\"/></a>
                <a href=\"#\"><img width=\"60\" height=\"60\" src=\"/img/youtube.png\" title=\"youtube\" alt=\"youtube\"/></a>
             </div> 
         </div>
        <p class=\"pull-right\">&copy; Bootshop</p>
    </div><!-- Container End -->
    </div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
    <script src=\"/js/jquery.js\" type=\"text/javascript\"></script>
    <script src=\"/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"/js/google-code-prettify/prettify.js\"></script>
    
    <script src=\"/js/bootshop1.js\"></script>
    <script src=\"/js/jquery.lightbox-0.5.js\"></script>
  

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 44
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Poterie ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 124,  255 => 46,  245 => 44,  236 => 43,  173 => 125,  171 => 124,  148 => 104,  130 => 89,  114 => 76,  83 => 47,  81 => 46,  78 => 45,  76 => 43,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Google font -->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500,700\" rel=\"stylesheet\">

        <!-- Bootstrap -->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/bootstrap.min.css\"/>

    <link href=\"/css/base.css\" rel=\"stylesheet\" media=\"screen\"/>
<!-- Bootstrap style responsive --> 
    <link href=\"/css/bootstrap-responsive.min.css\" rel=\"stylesheet\"/>
    <link href=\"/css/font-awesome.css\" rel=\"stylesheet\" type=\"text/css\">
<!-- Google-code-prettify -->    
    <link href=\"/js/google-code-prettify/prettify.css\" rel=\"stylesheet\"/>
<!-- fav and touch icons --> 

        <!-- Slick -->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/slick.css\"/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/slick-theme.css\"/>

        <!-- nouislider -->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/nouislider.min.css\"/>

        <!-- Font Awesome Icon -->
        <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">

        <!-- Custom stlylesheet -->  
        <link type=\"text/css\" rel=\"stylesheet\"  href=\"/css/style.css\"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script> <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script> <![endif]-->
        </title>
        <style>
            {% block stylesheets  %}
            {% endblock %}
        <title>
            {% block title %}Poterie {% endblock %}
        </style>
    </head>
    <body >

        <!-- HEADER -->
        <header >
            <!-- TOP HEADER -->
          
                    
                            
                        
                                Salem Khmis DSI3.1</a>
                       
               
            <!-- /TOP HEADER -->

            <!-- MAIN HEADER -->

            <div id=\"header\" >

                <!-- container -->
                <div class=\"container\">

                    <!-- row -->
                    <div class=\"row\">

                        <!-- LOGO --> 
                        <div class=\"col-md-3\">
                            <div class=\"header-logo\">
                                <a  href=\"{{path('homepage')}}\" class=\"logo\">
                                      <img src=\"/img/salem1.jpg\" alt=\"\" class=\"img-circle profile_img\">
                                          
                                <h4 style=\"color: #fff\">Salem Khmis</h4> </a>
                            </div>
                        </div>
                        <!-- /LOGO -->



                        <!-- SEARCH BAR -->
                        <div class=\"col-md-6\">
                            <div class=\"header-search\">
                        <form class=\"form-inline navbar-search\" method=\"post\" action=\"{{ path('search') }}\" >

                                    <input name=\"q\" class=\"input\" placeholder=\"Taper le nom de produit\">
          <button type=\"submit\" id=\"submitButton\" class=\"btn btn-primary\">Chercher</button>
                                </form>
                            </div>
                        </div>
                        <!-- /SEARCH BAR -->

                        <!-- ACCOUNT -->
                        <div class=\"col-md-3 clearfix\">
                            <div class=\"header-ctn \" >

                                <!-- Cart -->
                                <div class=\"dropdown\">
                                    {{render(controller('App\\\\Controller\\\\CartController::nbproduit' )) }}
                                </div>
                                <!-- /Cart -->

                            </div>
                        </div>
                        <!-- /ACCOUNT -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- /MAIN HEADER -->
        </header>

  <!-- SECTION -->
        <div class=\"section\">
            <!-- container -->
            <div class=\"container\">

                {% block body %}{% endblock %}

            </div>
        </div>


<!-- Footer ================================================================== -->
    <div  id=\"footerSection\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                <h5>ACCOUNT</h5>
                <a href=\"#\">YOUR ACCOUNT</a>
                <a href=\"#\">PERSONAL INFORMATION</a> 
                <a href=\"#\">ADDRESSES</a> 
                <a href=\"#\">DISCOUNT</a>  
                <a href=\"#\">ORDER HISTORY</a>
             </div>
            <div class=\"span3\">
                <h5>INFORMATION</h5>
                <a href=\"#\">CONTACT</a>  
                <a href=\"#.\">REGISTRATION</a>  
                <a href=\"#\">LEGAL NOTICE</a>  
                <a href=\"#\">TERMS AND CONDITIONS</a> 
                <a href=\"#\">FAQ</a>
             </div>
            <div class=\"span3\">
                <h5>OUR OFFERS</h5>
                <a href=\"#\">NEW PRODUCTS</a> 
                <a href=\"#\">TOP SELLERS</a>  
                <a href=\"#\">SPECIAL OFFERS</a>  
                <a href=\"#\">MANUFACTURERS</a> 
                <a href=\"#\">SUPPLIERS</a> 
             </div>
            <div id=\"socialMedia\" class=\"span3 pull-right\">
                <h5>SOCIAL MEDIA </h5>
                <a href=\"#\"><img width=\"60\" height=\"60\" src=\"/img/facebook.png\" title=\"facebook\" alt=\"facebook\"/></a>
                <a href=\"#\"><img width=\"60\" height=\"60\" src=\"/img/twitter.png\" title=\"twitter\" alt=\"twitter\"/></a>
                <a href=\"#\"><img width=\"60\" height=\"60\" src=\"/img/youtube.png\" title=\"youtube\" alt=\"youtube\"/></a>
             </div> 
         </div>
        <p class=\"pull-right\">&copy; Bootshop</p>
    </div><!-- Container End -->
    </div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
    <script src=\"/js/jquery.js\" type=\"text/javascript\"></script>
    <script src=\"/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"/js/google-code-prettify/prettify.js\"></script>
    
    <script src=\"/js/bootshop1.js\"></script>
    <script src=\"/js/jquery.lightbox-0.5.js\"></script>
  

</body>
</html>", "base.html.twig", "C:\\Users\\marzouk\\Desktop\\Electro-master\\templates\\base.html.twig");
    }
}
