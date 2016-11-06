<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // back_website_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'back_website_homepage');
                }

                return array (  '_controller' => 'Back\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'back_website_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/login')) {
                // fos_user_security_login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'Back\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if (rtrim($pathinfo, '/') === '/admin/login') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_security_check');
                    }

                    return array (  '_controller' => 'Back\\WebsiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'fos_user_security_check',);
                }

                if (0 === strpos($pathinfo, '/admin/login/profile')) {
                    // fos_user_profile_show
                    if (rtrim($pathinfo, '/') === '/admin/login/profile') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_profile_show;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                    }
                    not_fos_user_profile_show:

                    // fos_user_profile_edit
                    if ($pathinfo === '/admin/login/profile/edit') {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/re')) {
                if (0 === strpos($pathinfo, '/admin/register')) {
                    // fos_user_registration_register
                    if (rtrim($pathinfo, '/') === '/admin/register') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                    }

                    if (0 === strpos($pathinfo, '/admin/register/c')) {
                        // fos_user_registration_check_email
                        if ($pathinfo === '/admin/register/check-email') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_check_email;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                        }
                        not_fos_user_registration_check_email:

                        if (0 === strpos($pathinfo, '/admin/register/confirm')) {
                            // fos_user_registration_confirm
                            if (preg_match('#^/admin/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_fos_user_registration_confirm;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                            }
                            not_fos_user_registration_confirm:

                            // fos_user_registration_confirmed
                            if ($pathinfo === '/admin/register/confirmed') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_fos_user_registration_confirmed;
                                }

                                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                            }
                            not_fos_user_registration_confirmed:

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/resetting')) {
                    // fos_user_resetting_request
                    if ($pathinfo === '/admin/resetting/request') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_request;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                    }
                    not_fos_user_resetting_request:

                    // fos_user_resetting_send_email
                    if ($pathinfo === '/admin/resetting/send-email') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_resetting_send_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    }
                    not_fos_user_resetting_send_email:

                    // fos_user_resetting_check_email
                    if ($pathinfo === '/admin/resetting/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    }
                    not_fos_user_resetting_check_email:

                    // fos_user_resetting_reset
                    if (0 === strpos($pathinfo, '/admin/resetting/reset') && preg_match('#^/admin/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_user_resetting_reset;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                    }
                    not_fos_user_resetting_reset:

                }

            }

            // fos_user_change_password
            if ($pathinfo === '/admin/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            if (0 === strpos($pathinfo, '/admin/log')) {
                // fos_user_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Back\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_logout',);
                }

                if (0 === strpos($pathinfo, '/admin/login')) {
                    if (0 === strpos($pathinfo, '/admin/login/user')) {
                        // back_user_homepage
                        if (rtrim($pathinfo, '/') === '/admin/login/user') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_user_homepage');
                            }

                            return array (  '_controller' => 'Back\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_user_homepage',);
                        }

                        // back_user_add
                        if (rtrim($pathinfo, '/') === '/admin/login/user/ajouter') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_user_add');
                            }

                            return array (  '_controller' => 'Back\\UserBundle\\Controller\\DefaultController::addAction',  '_route' => 'back_user_add',);
                        }

                        // back_user_update
                        if (0 === strpos($pathinfo, '/admin/login/user/modifier') && preg_match('#^/admin/login/user/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_user_update')), array (  '_controller' => 'Back\\UserBundle\\Controller\\DefaultController::updateAction',));
                        }

                        // back_user_delete
                        if (0 === strpos($pathinfo, '/admin/login/user/supprimer') && preg_match('#^/admin/login/user/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_user_delete')), array (  '_controller' => 'Back\\UserBundle\\Controller\\DefaultController::deleteAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/login/fiche')) {
                        // back_card_homepage
                        if (rtrim($pathinfo, '/') === '/admin/login/fiche') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_card_homepage');
                            }

                            return array (  '_controller' => 'Back\\CardBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_card_homepage',);
                        }

                        // back_card_add
                        if (rtrim($pathinfo, '/') === '/admin/login/fiche/ajouter') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_card_add');
                            }

                            return array (  '_controller' => 'Back\\CardBundle\\Controller\\DefaultController::addAction',  '_route' => 'back_card_add',);
                        }

                        // back_card_update
                        if (0 === strpos($pathinfo, '/admin/login/fiche/modifier') && preg_match('#^/admin/login/fiche/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_card_update')), array (  '_controller' => 'Back\\CardBundle\\Controller\\DefaultController::updateAction',));
                        }

                        // back_card_delete
                        if (0 === strpos($pathinfo, '/admin/login/fiche/supprimer') && preg_match('#^/admin/login/fiche/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_card_delete')), array (  '_controller' => 'Back\\CardBundle\\Controller\\DefaultController::deleteAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/login/texte')) {
                        // back_text_homepage
                        if (rtrim($pathinfo, '/') === '/admin/login/texte') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_text_homepage');
                            }

                            return array (  '_controller' => 'Back\\TextBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_text_homepage',);
                        }

                        // back_text_update
                        if (0 === strpos($pathinfo, '/admin/login/texte/modifier') && preg_match('#^/admin/login/texte/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_text_update')), array (  '_controller' => 'Back\\TextBundle\\Controller\\DefaultController::updateAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/login/biotherapie')) {
                        // back_biotherapy_homepage
                        if (rtrim($pathinfo, '/') === '/admin/login/biotherapie') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_biotherapy_homepage');
                            }

                            return array (  '_controller' => 'Back\\BiotherapyBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_biotherapy_homepage',);
                        }

                        // back_biotherapy_add
                        if (rtrim($pathinfo, '/') === '/admin/login/biotherapie/ajouter') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_biotherapy_add');
                            }

                            return array (  '_controller' => 'Back\\BiotherapyBundle\\Controller\\DefaultController::addAction',  '_route' => 'back_biotherapy_add',);
                        }

                        // back_biotherapy_update
                        if (0 === strpos($pathinfo, '/admin/login/biotherapie/modifier') && preg_match('#^/admin/login/biotherapie/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_biotherapy_update')), array (  '_controller' => 'Back\\BiotherapyBundle\\Controller\\DefaultController::updateAction',));
                        }

                        // back_biotherapy_delete
                        if (0 === strpos($pathinfo, '/admin/login/biotherapie/supprimer') && preg_match('#^/admin/login/biotherapie/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_biotherapy_delete')), array (  '_controller' => 'Back\\BiotherapyBundle\\Controller\\DefaultController::deleteAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/login/clinical_situation')) {
                        // back_CS_homepage
                        if (rtrim($pathinfo, '/') === '/admin/login/clinical_situation') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_CS_homepage');
                            }

                            return array (  '_controller' => 'Back\\ClinicalSituationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_CS_homepage',);
                        }

                        // back_CS_add
                        if (rtrim($pathinfo, '/') === '/admin/login/clinical_situation/ajouter') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_CS_add');
                            }

                            return array (  '_controller' => 'Back\\ClinicalSituationBundle\\Controller\\DefaultController::addAction',  '_route' => 'back_CS_add',);
                        }

                        // back_CS_update
                        if (0 === strpos($pathinfo, '/admin/login/clinical_situation/modifier') && preg_match('#^/admin/login/clinical_situation/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_CS_update')), array (  '_controller' => 'Back\\ClinicalSituationBundle\\Controller\\DefaultController::updateAction',));
                        }

                        // back_CS_delete
                        if (0 === strpos($pathinfo, '/admin/login/clinical_situation/supprimer') && preg_match('#^/admin/login/clinical_situation/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_CS_delete')), array (  '_controller' => 'Back\\ClinicalSituationBundle\\Controller\\DefaultController::deleteAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/login/partner')) {
                        // back_partner_homepage
                        if (rtrim($pathinfo, '/') === '/admin/login/partner') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_partner_homepage');
                            }

                            return array (  '_controller' => 'Back\\PartnerBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_partner_homepage',);
                        }

                        // back_partner_add
                        if (rtrim($pathinfo, '/') === '/admin/login/partner/ajouter') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_partner_add');
                            }

                            return array (  '_controller' => 'Back\\PartnerBundle\\Controller\\DefaultController::addAction',  '_route' => 'back_partner_add',);
                        }

                        // back_partner_update
                        if (0 === strpos($pathinfo, '/admin/login/partner/modifier') && preg_match('#^/admin/login/partner/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_partner_update')), array (  '_controller' => 'Back\\PartnerBundle\\Controller\\DefaultController::updateAction',));
                        }

                        // back_partner_delete
                        if (0 === strpos($pathinfo, '/admin/login/partner/supprimer') && preg_match('#^/admin/login/partner/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_partner_delete')), array (  '_controller' => 'Back\\PartnerBundle\\Controller\\DefaultController::deleteAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/login/media')) {
                        // back_media_homepage
                        if (rtrim($pathinfo, '/') === '/admin/login/media') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_media_homepage');
                            }

                            return array (  '_controller' => 'Back\\MediaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_media_homepage',);
                        }

                        // back_media_add
                        if (rtrim($pathinfo, '/') === '/admin/login/media/ajouter') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_media_add');
                            }

                            return array (  '_controller' => 'Back\\MediaBundle\\Controller\\DefaultController::addAction',  '_route' => 'back_media_add',);
                        }

                        // back_media_update
                        if (0 === strpos($pathinfo, '/admin/login/media/modifier') && preg_match('#^/admin/login/media/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_media_update')), array (  '_controller' => 'Back\\MediaBundle\\Controller\\DefaultController::updateAction',));
                        }

                        // back_media_delete
                        if (0 === strpos($pathinfo, '/admin/login/media/supprimer') && preg_match('#^/admin/login/media/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_media_delete')), array (  '_controller' => 'Back\\MediaBundle\\Controller\\DefaultController::deleteAction',));
                        }

                    }

                }

            }

        }

        // front_website_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_website_homepage');
            }

            return array (  '_controller' => 'Front\\WebsiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_website_homepage',);
        }

        // front_website_ajax
        if (0 === strpos($pathinfo, '/ajax/recherche') && preg_match('#^/ajax/recherche/(?P<param>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_website_ajax')), array (  '_controller' => 'Front\\WebsiteBundle\\Controller\\DefaultController::ajaxAction',));
        }

        // front_website_dowload
        if (0 === strpos($pathinfo, '/telechargment') && preg_match('#^/telechargment/(?P<id>[^/\\-]++)\\-(?P<slug>[^/\\.]++)\\.(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_website_dowload')), array (  '_controller' => 'Front\\WebsiteBundle\\Controller\\DefaultController::downloadAction',));
        }

        if (0 === strpos($pathinfo, '/fiche')) {
            // front_website_card
            if (preg_match('#^/fiche/(?P<id>[^/\\-]++)\\-(?P<slug>[^/\\.]++)\\.(?P<format>html)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_website_card')), array (  '_controller' => 'Front\\WebsiteBundle\\Controller\\DefaultController::cardAction',));
            }

            // front_website_card_admin
            if (0 === strpos($pathinfo, '/fiche/modifier') && preg_match('#^/fiche/modifier/(?P<id>[^/\\-]++)\\-(?P<slug>[^/\\.]++)\\.(?P<format>html)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_website_card_admin')), array (  '_controller' => 'Back\\CardBundle\\Controller\\DefaultController::miniAction',));
            }

            // front_website_card_admin_update
            if (0 === strpos($pathinfo, '/fiche/update') && preg_match('#^/fiche/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_website_card_admin_update')), array (  '_controller' => 'Back\\CardBundle\\Controller\\DefaultController::miniUpdateAction',));
            }

            // front_website_card_logout
            if ($pathinfo === '/fiche/logout') {
                return array (  '_controller' => 'Front\\WebsiteBundle\\Controller\\DefaultController::cardAction',  '_route' => 'front_website_card_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/pdf')) {
            // front_website_pdf
            if (rtrim($pathinfo, '/') === '/pdf') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'front_website_pdf');
                }

                return array('_route' => 'front_website_pdf');
            }

            // front_website_pdf_config
            if (preg_match('#^/pdf/(?P<version>[^/]++)/(?P<BioID>[^/\\-]++)\\-(?P<CS1ID>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_website_pdf_config')), array (  '_controller' => 'Front\\WebsiteBundle\\Controller\\PdfController::indexAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
