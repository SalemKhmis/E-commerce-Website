<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/admi' => array(array(array('_route' => 'admin', '_controller' => 'App\\Controller\\AdministrateurController::index'), null, null, null, false, null)),
            '/admi/avis' => array(array(array('_route' => 'avis_index', '_controller' => 'App\\Controller\\AvisController::index'), null, array('GET' => 0), null, true, null)),
            '/admi/avis/new' => array(array(array('_route' => 'avis_new', '_controller' => 'App\\Controller\\AvisController::new'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/cart' => array(array(array('_route' => 'cart', '_controller' => 'App\\Controller\\CartController::cart'), null, null, null, false, null)),
            '/cleancart' => array(array(array('_route' => 'clear_cart', '_controller' => 'App\\Controller\\CartController::cleancart'), null, null, null, false, null)),
            '/admi/categorie' => array(array(array('_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'), null, array('GET' => 0), null, true, null)),
            '/admi/categorie/new' => array(array(array('_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/' => array(array(array('_route' => 'homepage', '_controller' => 'App\\Controller\\FrontController::index'), null, null, null, false, null)),
            '/search' => array(array(array('_route' => 'search', '_controller' => 'App\\Controller\\FrontController::searchBar'), null, null, null, false, null)),
            '/order' => array(array(array('_route' => 'order', '_controller' => 'App\\Controller\\OrderController::order'), null, null, null, false, null)),
            '/admi/order' => array(array(array('_route' => 'admin_order', '_controller' => 'App\\Controller\\OrderController::ordersAction'), null, null, null, false, null)),
            '/admi/produit' => array(array(array('_route' => 'produit_index', '_controller' => 'App\\Controller\\ProduitController::index'), null, array('GET' => 0), null, true, null)),
            '/admi/produit/new' => array(array(array('_route' => 'produit_new', '_controller' => 'App\\Controller\\ProduitController::new'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/admi/(?'
                        .'|avis/([^/]++)(?'
                            .'|(*:32)'
                            .'|/edit(*:44)'
                            .'|(*:51)'
                        .')'
                        .'|categorie/([^/]++)(?'
                            .'|(*:80)'
                            .'|/edit(*:92)'
                            .'|(*:99)'
                        .')'
                        .'|order/([^/]++)(*:121)'
                        .'|produit/([^/]++)(?'
                            .'|(*:148)'
                            .'|/edit(*:161)'
                            .'|(*:169)'
                        .')'
                    .')'
                    .'|/ca(?'
                        .'|rt/(?'
                            .'|add/(?'
                                .'|([^/]++)(*:206)'
                                .'|one/([^/]++)(*:226)'
                            .')'
                            .'|remove/(?'
                                .'|([^/]++)(*:253)'
                                .'|one/([^/]++)(*:273)'
                            .')'
                        .')'
                        .'|tegory/([^/]++)(*:298)'
                    .')'
                    .'|/produit/([^/]++)(*:324)'
                    .'|/success/([^/]++)(*:349)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:388)'
                        .'|wdt/([^/]++)(*:408)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:454)'
                                .'|router(*:468)'
                                .'|exception(?'
                                    .'|(*:488)'
                                    .'|\\.css(*:501)'
                                .')'
                            .')'
                            .'|(*:511)'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            32 => array(array(array('_route' => 'avis_show', '_controller' => 'App\\Controller\\AvisController::show'), array('id'), array('GET' => 0), null, false, null)),
            44 => array(array(array('_route' => 'avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            51 => array(array(array('_route' => 'avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'), array('id'), array('DELETE' => 0), null, false, null)),
            80 => array(array(array('_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'), array('id'), array('GET' => 0), null, false, null)),
            92 => array(array(array('_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            99 => array(array(array('_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'), array('id'), array('DELETE' => 0), null, false, null)),
            121 => array(array(array('_route' => 'admin_order_show', '_controller' => 'App\\Controller\\OrderController::detailsAction'), array('id'), null, null, false, null)),
            148 => array(array(array('_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'), array('id'), array('GET' => 0), null, false, null)),
            161 => array(array(array('_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            169 => array(array(array('_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'), array('id'), array('DELETE' => 0), null, false, null)),
            206 => array(array(array('_route' => 'add_to_cart', '_controller' => 'App\\Controller\\CartController::addToCart'), array('id'), null, null, false, null)),
            226 => array(array(array('_route' => 'add_one_to_cart', '_controller' => 'App\\Controller\\CartController::addOneToCart'), array('id'), null, null, false, null)),
            253 => array(array(array('_route' => 'remove_from_cart', '_controller' => 'App\\Controller\\CartController::removeFromCart'), array('id'), null, null, false, null)),
            273 => array(array(array('_route' => 'remove_one_to_cart', '_controller' => 'App\\Controller\\CartController::removeOneToCart'), array('id'), null, null, false, null)),
            298 => array(array(array('_route' => 'category_produits', '_controller' => 'App\\Controller\\FrontController::categoryAction'), array('id'), null, null, false, null)),
            324 => array(array(array('_route' => 'show_produit', '_controller' => 'App\\Controller\\FrontController::showProduit'), array('id'), null, null, false, null)),
            349 => array(array(array('_route' => 'success', '_controller' => 'App\\Controller\\OrderController::success'), array('order_id'), null, null, false, null)),
            388 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            408 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            454 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            468 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            488 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            501 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            511 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
        );
    }
}
