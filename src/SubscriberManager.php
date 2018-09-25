<?php
namespace Sandhya\DIExample;
use Sandhya\DIExample\Mailer;
use PDO;
class SubscriberManager {
	protected $pdo;
	protected $config;
	
	public function __construct($config) {
		// Get list of subscribers from datasource.
		//$dsn = 'sqlite:' . __DIR__ . '/../data/database.sqlite';
		$this->config = $config;
		$this->pdo = new PDO($config['dsn'] );
	}
	public function notifySubscriber() {
		
		$query = 'SELECT * FROM subscribers';
		$subscribers = $this->pdo->query($query);
		
		// Sender and Subject of the mail.
		$sender = 'subscriptions@example.com';
		$subject = 'New Article alert for you!';
		$mailer = new Mailer($this->config);
		foreach ($subscribers as $subscriber) {
			// Customized message of the mail.
			$message = sprintf(<<<EOF
Hello %s! A new article has been published in the domain you have subscribed for.
You can visit the link below to read the article below. To unsubscribe, browse to our website, login & click on unsubscribe button!.
EOF
					, $subscriber['name']);
			
			$mailer->send_mail($sender, $subscriber['email'], $subject, $message);
	}
}
}