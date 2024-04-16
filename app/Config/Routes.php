<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::randRedirect');
$routes->get('/api', function() {
    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
});
$routes->get('/about', 'Home::about');
$routes->get('/about\.txt', function() {
    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
});
$routes->get('/about\.md', function() {
    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
});
$routes->get('/about\.slide', function() {
    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
});
$routes->get('/api/pullNote', 'Notes::pullNote');
$routes->post('/api/pushNote', 'Notes::pushNote');
$routes->get('/api/isNoteExists', 'Notes::isNoteExists');
$routes->get('/api/randNote', 'Notes::randNote');
$routes->get('/(^[a-zA-Z0-9]{1,10}$)', 'Home::view');
$routes->get('/(^[a-zA-Z0-9]{1,10}\.txt$)', 'Home::outText/$1');
$routes->get('/(^[a-zA-Z0-9]{1,10}\.md$)', 'Home::outMD');
$routes->get('/(^[a-zA-Z0-9]{1,10}\.slide$)', 'Home::outSlide');
