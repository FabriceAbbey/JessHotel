<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // _twig_error_test
        if (preg_match('#^/(?P<_locale>en|fr)/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',  '_locale' => 'fr',));
        }

        // admin_index
        if (preg_match('#^/(?P<_locale>en|fr)/admin/?$#s', $pathinfo, $matches)) {
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

        // admin_post_new
        if (preg_match('#^/(?P<_locale>en|fr)/admin/post/new/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_admin_post_new;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_post_new');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_new')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::newPostAction',  '_locale' => 'fr',));
        }
        not_admin_post_new:

        // admin_event_new
        if (preg_match('#^/(?P<_locale>en|fr)/admin/event/new/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_admin_event_new;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_event_new');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_event_new')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::newEventAction',  '_locale' => 'fr',));
        }
        not_admin_event_new:

        // admin_post_show
        if (preg_match('#^/(?P<_locale>en|fr)/admin/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_admin_post_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_show')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::showAction',  '_locale' => 'fr',));
        }
        not_admin_post_show:

        // admin_post_edit
        if (preg_match('#^/(?P<_locale>en|fr)/admin/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_admin_post_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_edit')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::editAction',  '_locale' => 'fr',));
        }
        not_admin_post_edit:

        // admin_post_delete
        if (preg_match('#^/(?P<_locale>en|fr)/admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_admin_post_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::deleteAction',  '_locale' => 'fr',));
        }
        not_admin_post_delete:

        // hotel_index
        if (preg_match('#^/(?P<_locale>en|fr)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_index')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',  '_locale' => 'fr',));
        }

        // hotel_rooms
        if (preg_match('#^/(?P<_locale>en|fr)/rooms/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_rooms');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_rooms')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::roomsAction',  '_locale' => 'fr',));
        }

        // hotel_rooms_paginated
        if (preg_match('#^/(?P<_locale>en|fr)/rooms/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_rooms_paginated');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_rooms_paginated')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::roomsAction',  '_locale' => 'fr',));
        }

        // hotel_room_detail
        if (preg_match('#^/(?P<_locale>en|fr)/room/(?P<id>\\d+)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_room_detail');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_room_detail')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::roomDetailAction',  '_locale' => 'fr',));
        }

        // hotel_blog
        if (preg_match('#^/(?P<_locale>en|fr)/blog/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_blog');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_blog')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::blogAction',  '_locale' => 'fr',));
        }

        // hotel_booking
        if (preg_match('#^/(?P<_locale>en|fr)/booking/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_booking');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_booking')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::bookingAction',  '_locale' => 'fr',));
        }

        // hotel_about_us
        if (preg_match('#^/(?P<_locale>en|fr)/about\\-us/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_about_us');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_about_us')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::aboutUsAction',  '_locale' => 'fr',));
        }

        // hotel_services
        if (preg_match('#^/(?P<_locale>en|fr)/services/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_services');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_services')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::servicesAction',  '_locale' => 'fr',));
        }

        // hotel_gallery
        if (preg_match('#^/(?P<_locale>en|fr)/gallery/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_gallery');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_gallery')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::galleryAction',  '_locale' => 'fr',));
        }

        // hotel_contact
        if (preg_match('#^/(?P<_locale>en|fr)/contact/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hotel_contact');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_contact')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::contactAction',  '_locale' => 'fr',));
        }

        // fes_send_mail
        if (preg_match('#^/(?P<_locale>en|fr)/contact/send\\-mail$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fes_send_mail')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::sendMailAction',  '_locale' => 'fr',));
        }

        // blog_post
        if (preg_match('#^/(?P<_locale>en|fr)/posts/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::postShowAction',  '_locale' => 'fr',));
        }

        // comment_new
        if (preg_match('#^/(?P<_locale>en|fr)/comment/(?P<postSlug>[^/]++)/new$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comment_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_new')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::commentNewAction',  '_locale' => 'fr',));
        }
        not_comment_new:

        // security_login
        if (preg_match('#^/(?P<_locale>en|fr)/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_login')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'fr',));
        }

        // security_login_check
        if (preg_match('#^/(?P<_locale>en|fr)/login_check$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_login_check')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',  '_locale' => 'fr',));
        }

        // security_logout
        if (preg_match('#^/(?P<_locale>en|fr)/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_logout')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'fr',));
        }

        // homepage
        if (preg_match('#^/(?P<_locale>en|fr)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'default/homepage.html.twig',  '_locale' => 'fr',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
