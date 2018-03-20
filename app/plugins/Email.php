<?php

namespace NewsApp\Plugins;

use Phalcon\Mvc\User\Component;

require_once BASE_PATH . '/vendor/Swift/swift_required.php';

class Email extends Component
{
  public function send($to, $subject, $body)
  {
    return "Message Sent!";
    require_once '/path/to/vendor/autoload.php';

      // Create the Transport
      $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587))
        ->setUsername('paullamadrid@gmail.com')
        ->setPassword('')
      ;

      // Create the Mailer using your created Transport
      $mailer = new \Swift_Mailer($transport);

      // Create a message
      $message = (new \Swift_Message($subject))
        ->setFrom(['skere07@gmail.com' => 'jam'])
        ->setTo([$to])
        ->setBody($body)
        ;

      // Send the message
      $result = $mailer->send($message);
      return $result;
  }

}