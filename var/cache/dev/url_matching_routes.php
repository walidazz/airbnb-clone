<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/account_login' => [[['_route' => 'account_login', '_controller' => 'App\\Controller\\AccountController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\AccountController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'account_register', '_controller' => 'App\\Controller\\AccountController::register'], null, null, null, false, false, null]],
        '/account/update-password' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountController::updatePassword'], null, null, null, false, false, null]],
        '/myProfile' => [[['_route' => 'profile_page', '_controller' => 'App\\Controller\\AccountController::myProfile'], null, null, null, false, false, null]],
        '/account/myBookins' => [[['_route' => 'account_bookings', '_controller' => 'App\\Controller\\AccountController::bookings'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_account_login', '_controller' => 'App\\Controller\\AdminAccountController::index'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_account_logout', '_controller' => 'App\\Controller\\AdminAccountController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, true, false, null]],
        '/annonces' => [[['_route' => 'annonces', '_controller' => 'App\\Controller\\AnnonceController::index'], null, null, null, false, false, null]],
        '/annonce/create' => [[['_route' => 'annonce_create', '_controller' => 'App\\Controller\\AnnonceController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\GlobalController::index'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::searchBar'], null, null, null, false, false, null]],
        '/cookie_consent' => [[['_route' => 'ch_cookie_consent.show', '_controller' => 'ConnectHolland\\CookieConsentBundle\\Controller\\CookieConsentController::show'], null, null, null, false, false, null]],
        '/cookie_consent_alt' => [[['_route' => 'ch_cookie_consent.show_if_cookie_consent_not_set', '_controller' => 'ConnectHolland\\CookieConsentBundle\\Controller\\CookieConsentController::showIfCookieConsentNotSet'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|ccount/(?'
                        .'|profile/([^/]++)(*:200)'
                        .'|booking/([^/]++)(*:224)'
                    .')'
                    .'|dmin/(?'
                        .'|annonces(?'
                            .'|(?:/(\\d+))?(*:263)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:288)'
                                .'|delete(*:302)'
                            .')'
                        .')'
                        .'|bookings(?'
                            .'|(?:/(\\d+))?(*:334)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:359)'
                                .'|delete(*:373)'
                            .')'
                        .')'
                        .'|comments(?'
                            .'|(?:/(\\d+))?(*:405)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:430)'
                                .'|delete(*:444)'
                            .')'
                        .')'
                    .')'
                    .'|nnonce/(?'
                        .'|edit/([^/]++)(*:478)'
                        .'|([^/]++)(*:494)'
                        .'|delete/([^/]++)(*:517)'
                        .'|([^/]++)/booking(*:541)'
                    .')'
                .')'
                .'|/user/([^/]++)(*:565)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'edit_profile', '_controller' => 'App\\Controller\\AccountController::profile'], ['slug'], null, null, false, true, null]],
        224 => [[['_route' => 'booking_show', '_controller' => 'App\\Controller\\BookingController::bookingShow'], ['id'], null, null, false, true, null]],
        263 => [[['_route' => 'admin_annonce_index', 'page' => '1', '_controller' => 'App\\Controller\\AdminAnnonceController::index'], ['page'], null, null, false, true, null]],
        288 => [[['_route' => 'admin_annonce_edit', '_controller' => 'App\\Controller\\AdminAnnonceController::edit'], ['slug'], null, null, false, false, null]],
        302 => [[['_route' => 'admin_annonce_delete', '_controller' => 'App\\Controller\\AdminAnnonceController::delete'], ['slug'], null, null, false, false, null]],
        334 => [[['_route' => 'admin_booking_index', 'page' => '1', '_controller' => 'App\\Controller\\AdminBookinController::index'], ['page'], null, null, false, true, null]],
        359 => [[['_route' => 'admin_booking_edit', '_controller' => 'App\\Controller\\AdminBookinController::edit'], ['id'], null, null, false, false, null]],
        373 => [[['_route' => 'admin_booking_delete', '_controller' => 'App\\Controller\\AdminBookinController::delete'], ['id'], null, null, false, false, null]],
        405 => [[['_route' => 'admin_comment_index', 'page' => '1', '_controller' => 'App\\Controller\\AdminCommentController::index'], ['page'], null, null, false, true, null]],
        430 => [[['_route' => 'admin_comment_edit', '_controller' => 'App\\Controller\\AdminCommentController::edit'], ['id'], null, null, false, false, null]],
        444 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\AdminCommentController::delete'], ['id'], null, null, false, false, null]],
        478 => [[['_route' => 'annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::create'], ['id'], null, null, false, true, null]],
        494 => [[['_route' => 'annonce', '_controller' => 'App\\Controller\\AnnonceController::single'], ['slug'], null, null, false, true, null]],
        517 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['slug'], null, null, false, true, null]],
        541 => [[['_route' => 'booking_create', '_controller' => 'App\\Controller\\BookingController::book'], ['slug'], null, null, false, false, null]],
        565 => [
            [['_route' => 'show_user', '_controller' => 'App\\Controller\\UserController::index'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
