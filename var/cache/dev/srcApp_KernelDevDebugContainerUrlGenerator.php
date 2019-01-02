<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin' => array(array(), array('_controller' => 'App\\Controller\\AdministrateurController::index'), array(), array(array('text', '/admi')), array(), array()),
        'avis_index' => array(array(), array('_controller' => 'App\\Controller\\AvisController::index'), array(), array(array('text', '/admi/avis/')), array(), array()),
        'avis_new' => array(array(), array('_controller' => 'App\\Controller\\AvisController::new'), array(), array(array('text', '/admi/avis/new')), array(), array()),
        'avis_show' => array(array('id'), array('_controller' => 'App\\Controller\\AvisController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admi/avis')), array(), array()),
        'avis_edit' => array(array('id'), array('_controller' => 'App\\Controller\\AvisController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admi/avis')), array(), array()),
        'avis_delete' => array(array('id'), array('_controller' => 'App\\Controller\\AvisController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admi/avis')), array(), array()),
        'cart' => array(array(), array('_controller' => 'App\\Controller\\CartController::cart'), array(), array(array('text', '/cart')), array(), array()),
        'add_to_cart' => array(array('id'), array('_controller' => 'App\\Controller\\CartController::addToCart'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/cart/add')), array(), array()),
        'remove_from_cart' => array(array('id'), array('_controller' => 'App\\Controller\\CartController::removeFromCart'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/cart/remove')), array(), array()),
        'clear_cart' => array(array(), array('_controller' => 'App\\Controller\\CartController::cleancart'), array(), array(array('text', '/cleancart')), array(), array()),
        'add_one_to_cart' => array(array('id'), array('_controller' => 'App\\Controller\\CartController::addOneToCart'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/cart/add/one')), array(), array()),
        'remove_one_to_cart' => array(array('id'), array('_controller' => 'App\\Controller\\CartController::removeOneToCart'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/cart/remove/one')), array(), array()),
        'categorie_index' => array(array(), array('_controller' => 'App\\Controller\\CategorieController::index'), array(), array(array('text', '/admi/categorie/')), array(), array()),
        'categorie_new' => array(array(), array('_controller' => 'App\\Controller\\CategorieController::new'), array(), array(array('text', '/admi/categorie/new')), array(), array()),
        'categorie_show' => array(array('id'), array('_controller' => 'App\\Controller\\CategorieController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admi/categorie')), array(), array()),
        'categorie_edit' => array(array('id'), array('_controller' => 'App\\Controller\\CategorieController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admi/categorie')), array(), array()),
        'categorie_delete' => array(array('id'), array('_controller' => 'App\\Controller\\CategorieController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admi/categorie')), array(), array()),
        'homepage' => array(array(), array('_controller' => 'App\\Controller\\FrontController::index'), array(), array(array('text', '/')), array(), array()),
        'category_produits' => array(array('id'), array('_controller' => 'App\\Controller\\FrontController::categoryAction'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/category')), array(), array()),
        'show_produit' => array(array('id'), array('_controller' => 'App\\Controller\\FrontController::showProduit'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/produit')), array(), array()),
        'search' => array(array(), array('_controller' => 'App\\Controller\\FrontController::searchBar'), array(), array(array('text', '/search')), array(), array()),
        'order' => array(array(), array('_controller' => 'App\\Controller\\OrderController::order'), array(), array(array('text', '/order')), array(), array()),
        'success' => array(array('order_id'), array('_controller' => 'App\\Controller\\OrderController::success'), array(), array(array('variable', '/', '[^/]++', 'order_id', true), array('text', '/success')), array(), array()),
        'admin_order' => array(array(), array('_controller' => 'App\\Controller\\OrderController::ordersAction'), array(), array(array('text', '/admi/order')), array(), array()),
        'admin_order_show' => array(array('id'), array('_controller' => 'App\\Controller\\OrderController::detailsAction'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admi/order')), array(), array()),
        'produit_index' => array(array(), array('_controller' => 'App\\Controller\\ProduitController::index'), array(), array(array('text', '/admi/produit/')), array(), array()),
        'produit_new' => array(array(), array('_controller' => 'App\\Controller\\ProduitController::new'), array(), array(array('text', '/admi/produit/new')), array(), array()),
        'produit_show' => array(array('id'), array('_controller' => 'App\\Controller\\ProduitController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admi/produit')), array(), array()),
        'produit_edit' => array(array('id'), array('_controller' => 'App\\Controller\\ProduitController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admi/produit')), array(), array()),
        'produit_delete' => array(array('id'), array('_controller' => 'App\\Controller\\ProduitController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/admi/produit')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
