<?php
	use Tuupola\Middleware\HttpBasicAuthentication;
	use Slim\Factory\AppFactory;

	require __DIR__ . '/../vendor/autoload.php';
	
	$app = AppFactory::create();

	require_once __DIR__ . '/middleware.php';
	require_once __DIR__ . '/controller.php';
	require_once __DIR__ . '/route.php';
	
	
	// Chargement du Middleware
	$app->add(new Tuupola\Middleware\JwtAuthentication($options));
	
	// Run app
	$app->run();