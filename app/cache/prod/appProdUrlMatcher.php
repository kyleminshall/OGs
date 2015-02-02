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

        // main
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'main');
            }

            return array (  '_controller' => 'OG\\ClubBundle\\Controller\\PageController::mainAction',  '_route' => 'main',);
        }

        if (0 === strpos($pathinfo, '/pro')) {
            // progress
            if ($pathinfo === '/progress') {
                return array (  '_controller' => 'OG\\ClubBundle\\Controller\\PageController::progressAction',  '_route' => 'progress',);
            }

            // profile
            if ($pathinfo === '/profile') {
                return array (  '_controller' => 'OG\\ClubBundle\\Controller\\PageController::profileAction',  '_route' => 'profile',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'OG\\ClubBundle\\Controller\\PageController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'OG\\ClubBundle\\Controller\\PageController::logoutAction',  '_route' => 'logout',);
            }

        }

        // signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'OG\\ClubBundle\\Controller\\PageController::signupAction',  '_route' => 'signup',);
        }

        if (0 === strpos($pathinfo, '/ajax')) {
            if (0 === strpos($pathinfo, '/ajax/remove')) {
                // ajax_remove_activity
                if ($pathinfo === '/ajax/removeActivity') {
                    return array (  '_controller' => 'OG\\ClubBundle\\Controller\\AjaxController::removeActivityAction',  '_route' => 'ajax_remove_activity',);
                }

                // ajax_remove_notifs
                if ($pathinfo === '/ajax/removeNotifs') {
                    return array (  '_controller' => 'OG\\ClubBundle\\Controller\\AjaxController::removeNotifsAction',  '_route' => 'ajax_remove_notifs',);
                }

            }

            if (0 === strpos($pathinfo, '/ajax/like')) {
                // ajax_like_add
                if ($pathinfo === '/ajax/likeAdd') {
                    return array (  '_controller' => 'OG\\ClubBundle\\Controller\\AjaxController::likeAddAction',  '_route' => 'ajax_like_add',);
                }

                // ajax_like_get
                if ($pathinfo === '/ajax/likeGet') {
                    return array (  '_controller' => 'OG\\ClubBundle\\Controller\\AjaxController::likeGetAction',  '_route' => 'ajax_like_get',);
                }

            }

            if (0 === strpos($pathinfo, '/ajax/delete')) {
                // ajax_delete_post
                if ($pathinfo === '/ajax/deletePost') {
                    return array (  '_controller' => 'OG\\ClubBundle\\Controller\\AjaxController::deletePostAction',  '_route' => 'ajax_delete_post',);
                }

                // ajax_delete_reply
                if ($pathinfo === '/ajax/deleteReply') {
                    return array (  '_controller' => 'OG\\ClubBundle\\Controller\\AjaxController::deleteReplyAction',  '_route' => 'ajax_delete_reply',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
