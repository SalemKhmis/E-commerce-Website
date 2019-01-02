<?php

/* base-admin.html.twig */
class __TwigTemplate_d1b318c9fc373db9097e2492a767b03c42289b40882e1b937adc7e0e6ae83ecd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base-admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base-admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

       <link rel=\"icon\" href=\"/img/images/favicon.ico\" type=\"image/ico\" />

               <!-- Bootstrap -->
        <link href=\"/vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link href=\"/vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
        <!-- NProgress -->
        <link href=\"/vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
        <!-- iCheck -->
        <link href=\"/vendors/iCheck/skins/flat/green.css\" rel=\"stylesheet\">
      
        <!-- bootstrap-progressbar -->
        <link href=\"/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\">
        <!-- JQVMap -->
        <link href=\"/vendors/jqvmap/dist/jqvmap.min.css\" rel=\"stylesheet\"/>
        <!-- bootstrap-daterangepicker -->
        <link href=\"/vendors/bootstrap-daterangepicker/daterangepicker.css\" rel=\"stylesheet\">

        <!-- Custom Theme Style -->
        <link href=\"/build/css/custom.min.css\" rel=\"stylesheet\">

        <!-- Bootstrap core CSS
        <link href=\"/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">-->

        <!-- Custom fonts for this template-->
        <link href=\"/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Page level plugin CSS-->
        <link href=\"/vendor/datatables/dataTables.bootstrap4.css\" rel=\"stylesheet\">

        <!-- Custom styles for this template-->
        <link href=\"/css/sb-admin.css\" rel=\"stylesheet\">

        ";
        // line 44
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "    </head>
     <body class=\"nav-md\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"#\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>interface admin</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"/img/images/salem1.jpg\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Welcome,</span>
                <h2>SALEM KHMIS</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>General</h3>
                <ul class=\"nav side-menu\">

                  <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">
            <i class=\"fa fa-home\"></i>
            <span>Accueil</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\">
            <i class=\"fa fa-chevron-down\"></i>
            <span>Categories</span></a>
            <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_new");
        echo "\" >ajouter</a></li>
                      <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        echo "\">liste</a></li>
                      
                    </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\">
            <i class=\"fa fa-chevron-down\"></i>
            <span>Produits</span></a>
            <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_new");
        echo "\" >ajouter</a></li>
                      <li><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index");
        echo "\">liste</a></li>
                      
                    </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order");
        echo "\">
            <i class=\"fa fa-edit\"></i>
            <span>Commandes</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_index");
        echo "\">
            <i class=\"fas fa-fw fa-table\"></i>
            <span>Avis</span></a>
        </li>
                  
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.php\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

             
                </li> <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"images/salem1.jpg\" alt=\"\">SALEM KHMIS
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    
                    
                    <li><a href=\"#\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
         

          ";
        // line 172
        $this->displayBlock('body', $context, $blocks);
        // line 173
        echo "    </div>


    <!-- jQuery -->
    <script src=\"/vendors/jquery/dist/jquery.min.js\"></script>
    <!-- Bootstrap -->
    <script src=\"/vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- FastClick -->
    <script src=\"/vendors/fastclick/lib/fastclick.js\"></script>
    <!-- NProgress -->
    <script src=\"/vendors/nprogress/nprogress.js\"></script>
    <!-- Chart.js -->
    <script src=\"/vendors/Chart.js/dist/Chart.min.js\"></script>
    <!-- gauge.js -->
    <script src=\"/vendors/gauge.js/dist/gauge.min.js\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js\"></script>
    <!-- iCheck -->
    <script src=\"/vendors/iCheck/icheck.min.js\"></script>
    <!-- Skycons -->
    <script src=\"/vendors/skycons/skycons.js\"></script>
    <!-- Flot -->
    <script src=\"/vendors/Flot/jquery.flot.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.pie.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.time.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.stack.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.resize.js\"></script>
    <!-- Flot plugins -->
    <script src=\"/vendors/flot.orderbars/js/jquery.flot.orderBars.js\"></script>
    <script src=\"/vendors/flot-spline/js/jquery.flot.spline.min.js\"></script>
    <script src=\"/vendors/flot.curvedlines/curvedLines.js\"></script>
    <!-- DateJS -->
    <script src=\"/vendors/DateJS/build/date.js\"></script>
    <!-- JQVMap -->
    <script src=\"/vendors/jqvmap/dist/jquery.vmap.js\"></script>
    <script src=\"/vendors/jqvmap/dist/maps/jquery.vmap.world.js\"></script>
    <script src=\"/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"/vendors/moment/min/moment.min.js\"></script>
    <script src=\"/vendors/bootstrap-daterangepicker/daterangepicker.js\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"/build/js/custom.min.js\"></script>
        
        <!-- Bootstrap core JavaScript-->
        <script src=\"/vendor/jquery/jquery.min.js\"></script>
        <script src=\"/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

        <!-- Core plugin JavaScript-->
        <script src=\"/vendor/jquery-easing/jquery.easing.min.js\"></script>

        <!-- Page level plugin JavaScript-->
        <script src=\"/vendor/chart.js/Chart.min.js\"></script>

        <!-- Custom scripts for all pages-->
        <script src=\"/js/sb-admin.min.js\"></script>

        <!-- Demo scripts for this page-->
        <script src=\"/js/demo/chart-area-demo.js\"></script>
        <script src=\"/js/demo/chart-bar-demo.js\"></script>
        <script src=\"/js/demo/chart-pie-demo.js\"></script>
        ";
        // line 234
        $this->displayBlock('javascripts', $context, $blocks);
        // line 235
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 234
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 234,  346 => 172,  329 => 44,  311 => 9,  300 => 235,  298 => 234,  235 => 173,  233 => 172,  167 => 109,  159 => 104,  151 => 99,  147 => 98,  135 => 89,  131 => 88,  118 => 78,  83 => 45,  81 => 44,  43 => 9,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>{% block title %}Welcome!{% endblock %}</title>

       <link rel=\"icon\" href=\"/img/images/favicon.ico\" type=\"image/ico\" />

               <!-- Bootstrap -->
        <link href=\"/vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link href=\"/vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
        <!-- NProgress -->
        <link href=\"/vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
        <!-- iCheck -->
        <link href=\"/vendors/iCheck/skins/flat/green.css\" rel=\"stylesheet\">
      
        <!-- bootstrap-progressbar -->
        <link href=\"/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\">
        <!-- JQVMap -->
        <link href=\"/vendors/jqvmap/dist/jqvmap.min.css\" rel=\"stylesheet\"/>
        <!-- bootstrap-daterangepicker -->
        <link href=\"/vendors/bootstrap-daterangepicker/daterangepicker.css\" rel=\"stylesheet\">

        <!-- Custom Theme Style -->
        <link href=\"/build/css/custom.min.css\" rel=\"stylesheet\">

        <!-- Bootstrap core CSS
        <link href=\"/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">-->

        <!-- Custom fonts for this template-->
        <link href=\"/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Page level plugin CSS-->
        <link href=\"/vendor/datatables/dataTables.bootstrap4.css\" rel=\"stylesheet\">

        <!-- Custom styles for this template-->
        <link href=\"/css/sb-admin.css\" rel=\"stylesheet\">

        {% block stylesheets %}{% endblock %}
    </head>
     <body class=\"nav-md\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"#\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>interface admin</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"/img/images/salem1.jpg\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Welcome,</span>
                <h2>SALEM KHMIS</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>General</h3>
                <ul class=\"nav side-menu\">

                  <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('admin') }}\">
            <i class=\"fa fa-home\"></i>
            <span>Accueil</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\">
            <i class=\"fa fa-chevron-down\"></i>
            <span>Categories</span></a>
            <ul class=\"nav child_menu\">
                      <li><a href=\"{{ path('categorie_new') }}\" >ajouter</a></li>
                      <li><a href=\"{{ path('categorie_index') }}\">liste</a></li>
                      
                    </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\">
            <i class=\"fa fa-chevron-down\"></i>
            <span>Produits</span></a>
            <ul class=\"nav child_menu\">
                      <li><a href=\"{{ path('produit_new') }}\" >ajouter</a></li>
                      <li><a href=\"{{ path('produit_index') }}\">liste</a></li>
                      
                    </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('admin_order') }}\">
            <i class=\"fa fa-edit\"></i>
            <span>Commandes</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('avis_index') }}\">
            <i class=\"fas fa-fw fa-table\"></i>
            <span>Avis</span></a>
        </li>
                  
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.php\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

             
                </li> <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"images/salem1.jpg\" alt=\"\">SALEM KHMIS
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    
                    
                    <li><a href=\"#\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
         

          {% block body %}{% endblock %}
    </div>


    <!-- jQuery -->
    <script src=\"/vendors/jquery/dist/jquery.min.js\"></script>
    <!-- Bootstrap -->
    <script src=\"/vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- FastClick -->
    <script src=\"/vendors/fastclick/lib/fastclick.js\"></script>
    <!-- NProgress -->
    <script src=\"/vendors/nprogress/nprogress.js\"></script>
    <!-- Chart.js -->
    <script src=\"/vendors/Chart.js/dist/Chart.min.js\"></script>
    <!-- gauge.js -->
    <script src=\"/vendors/gauge.js/dist/gauge.min.js\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js\"></script>
    <!-- iCheck -->
    <script src=\"/vendors/iCheck/icheck.min.js\"></script>
    <!-- Skycons -->
    <script src=\"/vendors/skycons/skycons.js\"></script>
    <!-- Flot -->
    <script src=\"/vendors/Flot/jquery.flot.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.pie.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.time.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.stack.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.resize.js\"></script>
    <!-- Flot plugins -->
    <script src=\"/vendors/flot.orderbars/js/jquery.flot.orderBars.js\"></script>
    <script src=\"/vendors/flot-spline/js/jquery.flot.spline.min.js\"></script>
    <script src=\"/vendors/flot.curvedlines/curvedLines.js\"></script>
    <!-- DateJS -->
    <script src=\"/vendors/DateJS/build/date.js\"></script>
    <!-- JQVMap -->
    <script src=\"/vendors/jqvmap/dist/jquery.vmap.js\"></script>
    <script src=\"/vendors/jqvmap/dist/maps/jquery.vmap.world.js\"></script>
    <script src=\"/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"/vendors/moment/min/moment.min.js\"></script>
    <script src=\"/vendors/bootstrap-daterangepicker/daterangepicker.js\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"/build/js/custom.min.js\"></script>
        
        <!-- Bootstrap core JavaScript-->
        <script src=\"/vendor/jquery/jquery.min.js\"></script>
        <script src=\"/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

        <!-- Core plugin JavaScript-->
        <script src=\"/vendor/jquery-easing/jquery.easing.min.js\"></script>

        <!-- Page level plugin JavaScript-->
        <script src=\"/vendor/chart.js/Chart.min.js\"></script>

        <!-- Custom scripts for all pages-->
        <script src=\"/js/sb-admin.min.js\"></script>

        <!-- Demo scripts for this page-->
        <script src=\"/js/demo/chart-area-demo.js\"></script>
        <script src=\"/js/demo/chart-bar-demo.js\"></script>
        <script src=\"/js/demo/chart-pie-demo.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>", "base-admin.html.twig", "C:\\Users\\marzouk\\Desktop\\Electro-master\\templates\\base-admin.html.twig");
    }
}
