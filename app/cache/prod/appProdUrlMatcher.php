<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // crowd_rise_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crowd_rise_homepage')), array (  '_controller' => 'Crowd\\CrowdRiseBundle\\Controller\\DefaultController::indexAction',));
        }

        // acceuil
        if ($pathinfo === '/acceuil') {
            return array (  '_controller' => 'Crowd\\CrowdRiseBundle\\Controller\\CrowdController::acceuilAction',  '_route' => 'acceuil',);
        }

        // freelancer
        if ($pathinfo === '/freelancer') {
            return array (  '_controller' => 'Crowd\\CrowdRiseBundle\\Controller\\CrowdController::freelancerAction',  '_route' => 'freelancer',);
        }

        // Calendrier_evenements
        if ($pathinfo === '/Calendrier_evenements') {
            return array (  '_controller' => 'Crowd\\CrowdRiseBundle\\Controller\\CrowdController::Calendrier_evenementsAction',  '_route' => 'Calendrier_evenements',);
        }

        // detail_evenement
        if ($pathinfo === '/detail_evenement') {
            return array (  '_controller' => 'Crowd\\CrowdRiseBundle\\Controller\\CrowdController::detail_evenementAction',  '_route' => 'detail_evenement',);
        }

        // evenement_avenir
        if ($pathinfo === '/evenement_avenir') {
            return array (  '_controller' => 'Crowd\\CrowdRiseBundle\\Controller\\CrowdController::evenement_avenirAction',  '_route' => 'evenement_avenir',);
        }

        // List_projets
        if ($pathinfo === '/List_projets') {
            return array (  '_controller' => 'Crowd\\CrowdRiseBundle\\Controller\\CrowdController::List_projetsAction',  '_route' => 'List_projets',);
        }

        // detail_projets
        if ($pathinfo === '/detail_projets') {
            return array (  '_controller' => 'Crowd\\CrowdRiseBundle\\Controller\\CrowdController::detail_projetsAction',  '_route' => 'detail_projets',);
        }

        // financement_projets
        if ($pathinfo === '/financement_projets') {
            return array (  '_controller' => 'Crowd\\CrowdRiseBundle\\Controller\\CrowdController::financement_projetsAction',  '_route' => 'financement_projets',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Crowd\\CrowdRiseBundle\\Controller\\CrowdController::contactAction',  '_route' => 'contact',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Crowd\\CrowdRiseBundle\\Controller\\CrowdController::loginAction',  '_route' => 'login',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
