<?php
	require_once __DIR__ . '/../vendor/autoload.php';

	$handler = new \App\Controller\Handler();
	$handler->logic->updateChannels();
