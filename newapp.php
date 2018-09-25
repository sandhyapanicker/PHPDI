<?php
use Sandhya\DIExample\SubscriberManager;
use Sandhya\DIExample\Mailer;
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';
$pdo = new PDO($config['dsn'] );
$mailer = new Mailer($config);
$notify = new SubscriberManager($pdo,$mailer);
$notify->notifySubscriber();
