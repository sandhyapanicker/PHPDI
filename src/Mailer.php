<?php

namespace Sandhya\DIExample;
class Mailer {
	protected $hostname;
	protected $smtp_user;
	protected $smtp_password;
	protected $smtp_port;
	
	public function __construct($config) {
		$this->hostname = $config['hostname'] ;
		$this->smtp_user = $config['smtp_user'];
		$this->smtp_password = $config['smtp_password'];
		$this->smtp_port = $config['smtp_port'];
		$this->logPath = $config['logPath'];
	}
	/**
	 * Sends mail to user.
	 *
	 * @param string $recipient
	 *   Email of the recipient.
	 * @param string $subject
	 *   Subject of the mail.
	 * @param string $body
	 *   Body of the mail.
	 *
	 * @return void
	 */
	
	public function send_mail($sender, $recipient, $subject, $body) {
		
		$logLines = array();
		$logLines[] = sprintf(
				'[%s][%s:%s@%s:%s][From: %s][To: %s][Subject: %s]',
				date('Y-m-d H:i:s'),
				$this->hostname,
				$this->smtp_user,
				$this->smtp_password,
				$this->smtp_port,
				$sender,
				$recipient,
				$subject
				);
		$logLines[] = '---------------';
		$logLines[] = $body;
		$logLines[] = '---------------';
		
		$fh = fopen($this->logPath, 'a');
		fwrite($fh, implode("\n", $logLines)."\n");
	}
}