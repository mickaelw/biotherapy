<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_website_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\WebsiteBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/admin/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/admin/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_user_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\UserBundle\\Controller\\DefaultController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/user/ajouter/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\UserBundle\\Controller\\DefaultController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/user/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\UserBundle\\Controller\\DefaultController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/user/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_card_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\CardBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/fiche/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_card_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\CardBundle\\Controller\\DefaultController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/fiche/ajouter/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_card_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\CardBundle\\Controller\\DefaultController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/fiche/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_card_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\CardBundle\\Controller\\DefaultController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/fiche/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_text_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\TextBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/texte/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_text_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\TextBundle\\Controller\\DefaultController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/texte/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_biotherapy_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\BiotherapyBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/biotherapie/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_biotherapy_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\BiotherapyBundle\\Controller\\DefaultController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/biotherapie/ajouter/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_biotherapy_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\BiotherapyBundle\\Controller\\DefaultController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/biotherapie/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_biotherapy_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\BiotherapyBundle\\Controller\\DefaultController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/biotherapie/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_CS_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\ClinicalSituationBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/clinical_situation/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_CS_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\ClinicalSituationBundle\\Controller\\DefaultController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/clinical_situation/ajouter/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_CS_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\ClinicalSituationBundle\\Controller\\DefaultController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/clinical_situation/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_CS_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\ClinicalSituationBundle\\Controller\\DefaultController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/clinical_situation/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_partner_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\PartnerBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/partner/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_partner_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\PartnerBundle\\Controller\\DefaultController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/partner/ajouter/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_partner_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\PartnerBundle\\Controller\\DefaultController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/partner/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_partner_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\PartnerBundle\\Controller\\DefaultController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/partner/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_media_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\MediaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/media/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_media_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Back\\MediaBundle\\Controller\\DefaultController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login/media/ajouter/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_media_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\MediaBundle\\Controller\\DefaultController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/media/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_media_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\MediaBundle\\Controller\\DefaultController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/login/media/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_website_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Front\\WebsiteBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_website_ajax' => array (  0 =>   array (    0 => 'param',  ),  1 =>   array (    '_controller' => 'Front\\WebsiteBundle\\Controller\\DefaultController::ajaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'param',    ),    1 =>     array (      0 => 'text',      1 => '/ajax/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_website_dowload' => array (  0 =>   array (    0 => 'id',    1 => 'slug',    2 => 'format',  ),  1 =>   array (    '_controller' => 'Front\\WebsiteBundle\\Controller\\DefaultController::downloadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => 'format',    ),    1 =>     array (      0 => 'variable',      1 => '-',      2 => '[^/\\.]++',      3 => 'slug',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\-]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/telechargment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_website_card' => array (  0 =>   array (    0 => 'id',    1 => 'slug',    2 => 'format',  ),  1 =>   array (    '_controller' => 'Front\\WebsiteBundle\\Controller\\DefaultController::cardAction',  ),  2 =>   array (    'format' => 'html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html',      3 => 'format',    ),    1 =>     array (      0 => 'variable',      1 => '-',      2 => '[^/\\.]++',      3 => 'slug',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\-]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/fiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_website_card_admin' => array (  0 =>   array (    0 => 'id',    1 => 'slug',    2 => 'format',  ),  1 =>   array (    '_controller' => 'Back\\CardBundle\\Controller\\DefaultController::miniAction',  ),  2 =>   array (    'format' => 'html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html',      3 => 'format',    ),    1 =>     array (      0 => 'variable',      1 => '-',      2 => '[^/\\.]++',      3 => 'slug',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\-]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/fiche/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_website_card_admin_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Back\\CardBundle\\Controller\\DefaultController::miniUpdateAction',  ),  2 =>   array (    'format' => 'html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/fiche/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_website_card_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Front\\WebsiteBundle\\Controller\\DefaultController::cardAction',  ),  2 =>   array (    'format' => 'html',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fiche/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_website_pdf' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pdf/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_website_pdf_config' => array (  0 =>   array (    0 => 'version',    1 => 'BioID',    2 => 'CS1ID',  ),  1 =>   array (    '_controller' => 'Front\\WebsiteBundle\\Controller\\PdfController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '-',      2 => '[^/]++',      3 => 'CS1ID',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\-]++',      3 => 'BioID',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'version',    ),    3 =>     array (      0 => 'text',      1 => '/pdf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
