<?php
use Sandhya\DIExample\SubscriberManager;
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';
$notify = new SubscriberManager($config);
$notify->notifySubscriber();
