<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        // admin_index
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/admin/post/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_admin_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_index')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::indexAction',  '_locale' => 'fr',));
        }
        not_admin_index:

        // admin_post_index
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/admin/post/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_admin_post_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_post_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_index')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::indexAction',  '_locale' => 'fr',));
        }
        not_admin_post_index:

        // admin_post_new
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/admin/post/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_admin_post_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_new')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::newAction',  '_locale' => 'fr',));
        }
        not_admin_post_new:

        // admin_post_show
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/admin/post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_admin_post_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_show')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::showAction',  '_locale' => 'fr',));
        }
        not_admin_post_show:

        // admin_post_edit
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/admin/post/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_admin_post_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_edit')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::editAction',  '_locale' => 'fr',));
        }
        not_admin_post_edit:

        // admin_post_delete
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/admin/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_admin_post_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::deleteAction',  '_locale' => 'fr',));
        }
        not_admin_post_delete:

        // hotel_index
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_index')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',  '_locale' => 'fr',));
        }

        // hotel_rooms
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/rooms/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_rooms');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_rooms')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::roomsAction',  '_locale' => 'fr',));
        }

        // hotel_rooms_paginated
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/rooms/(?P<page>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_rooms_paginated')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::roomsAction',  '_locale' => 'fr',));
        }

        // hotel_room_detail
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/room/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_room_detail');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_room_detail')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::roomDetailAction',  '_locale' => 'fr',));
        }

        // hotel_blog
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/blog/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_blog');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_blog')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::blogAction',  '_locale' => 'fr',));
        }

        // hotel_booking
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/booking/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_booking');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_booking')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::bookingAction',  '_locale' => 'fr',));
        }

        // hotel_about_us
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/about\\-us/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_about_us');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_about_us')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::aboutUsAction',  '_locale' => 'fr',));
        }

        // hotel_services
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/services/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_services');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_services')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::servicesAction',  '_locale' => 'fr',));
        }

        // hotel_gallery
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/gallery/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_gallery');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_gallery')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::galleryAction',  '_locale' => 'fr',));
        }

        // hotel_contact
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/contact/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_contact');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_contact')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::contactAction',  '_locale' => 'fr',));
        }

        // fes_send_mail
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/contact/send\\-mail$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fes_send_mail')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::sendMailAction',  '_locale' => 'fr',));
        }

        // blog_post
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/posts/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::postShowAction',  '_locale' => 'fr',));
        }

        // comment_new
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/comment/(?P<postSlug>[^/]++)/new$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comment_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_new')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::commentNewAction',  '_locale' => 'fr',));
        }
        not_comment_new:

        // security_login
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_login')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'fr',));
        }

        // security_login_check
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/login_check$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_login_check')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',  '_locale' => 'fr',));
        }

        // security_logout
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_logout')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'fr',));
        }

        // homepage
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'default/homepage.html.twig',  '_locale' => 'fr',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
