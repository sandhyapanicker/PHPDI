<?php
$config['hostname'] = 'smtp.blogtrottr.com';
$config['smtp_user'] = 'smtpuser';
$config['smtp_password'] = 'smtppass';
$config['smtp_port'] = '465';
$config['logPath'] = __DIR__.'/logs/emails.log';
$config['dsn'] = 'sqlite:' . __DIR__ . '/data/database.sqlite';