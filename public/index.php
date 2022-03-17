<?php
	require_once __DIR__.'/../vendor/autoload.php';

	use app\core\Application;
	use app\controllers\SiteController;

	$app = new Application(dirname(__DIR__));

	$app->router->get('/home', 'home');
	$app->router->get('/contact', [SiteController::class, 'contact']);
	$app->router->post('/contact', [SiteController::class, 'handleContact']);

	$app->run();

?>
