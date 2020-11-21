<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

/*Onlinespeedy routing*/

$routes->match(['post', 'get'], 'home', 'Home::index');
//$routes->get('home', 'Home::index');

$routes->match(['post', 'get'], 'creditpass', 'Home::creditpass/creditpass');
$routes->get('creditpass', 'Home::creditpass/creditpass');

$routes->get('faq', 'Home::faq/faq');

$routes->get('fees', 'Home::fees/fees');

$routes->match(['post', 'get'], 'lenders', 'Home::lenders/lenders');
$routes->get('lenders', 'Home::lenders/lenders');

$routes->get('privacy', 'Home::privacy/privacy');

$routes->get('terms', 'Home::terms/terms');

$routes->match(['post', 'get'], 'creditpass-confirm', 'Home::creditpass_confirm/creditpass-confirm');
$routes->get('creditpass-confirm', 'Home::creditpass_confirm/creditpass-confirm');


/*CRM Admin routing*/

$routes->match(['post', 'get'], 'crm-admin', 'Admin::login/login');
$routes->get('crm-admin', 'Admin::login/login');

$routes->match(['post', 'get'], 'verification', 'Admin::verification/verification');
// $routes->get('verification', 'Admin::verification/verification');

$routes->group('crm-admin', function($routes){

    $routes->match(['post', 'get'], 'dashboard', 'Admin::dashboard/dashboard');
	$routes->get('dashboard', 'Admin::dashboard/dashboard');

	$routes->match(['post', 'get'], 'authorizecodelist', 'Admin::authorizecodelist/authorize-code-list');
	$routes->get('authorizecodelist', 'Admin::authorizecodelist/authorize-code-list');

	$routes->match(['post', 'get'], 'users', 'Admin::userslist/users-list');
	$routes->get('users', 'Admin::userslist/users-list');

	$routes->match(['post', 'get'], 'usagehistory', 'Admin::usagehistory/usage-history');
	$routes->get('usagehistory', 'Admin::usagehistory/usage-history');

	$routes->match(['post', 'get'], 'thirdpartywebsites', 'Admin::thirdpartywebsites/third-party-websites');
	$routes->get('thirdpartywebsites', 'Admin::thirdpartywebsites/third-party-websites');

});

   






$routes->match(['post', 'get'], 'change_password', 'Admin::change_password/change_password');
$routes->get('change_password', 'Admin::change_password/change_password');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
