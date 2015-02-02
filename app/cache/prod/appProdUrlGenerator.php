<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'main' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OG\\ClubBundle\\Controller\\PageController::mainAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'progress' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OG\\ClubBundle\\Controller\\PageController::progressAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/progress',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OG\\ClubBundle\\Controller\\PageController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OG\\ClubBundle\\Controller\\PageController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OG\\ClubBundle\\Controller\\PageController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'signup' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OG\\ClubBundle\\Controller\\PageController::signupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/signup',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax_remove_activity' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OG\\ClubBundle\\Controller\\AjaxController::removeActivityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/removeActivity',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax_remove_notifs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OG\\ClubBundle\\Controller\\AjaxController::removeNotifsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/removeNotifs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax_like_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OG\\ClubBundle\\Controller\\AjaxController::likeAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/likeAdd',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax_like_get' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OG\\ClubBundle\\Controller\\AjaxController::likeGetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/likeGet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax_delete_post' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OG\\ClubBundle\\Controller\\AjaxController::deletePostAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/deletePost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax_delete_reply' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OG\\ClubBundle\\Controller\\AjaxController::deleteReplyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/deleteReply',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
