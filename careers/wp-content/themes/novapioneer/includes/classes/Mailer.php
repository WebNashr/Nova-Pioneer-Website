<?php

namespace NovaPioneer;

use PHPMailer;

class Mailer
{
  protected $mailer;

  public function __construct()
  {
    $this->mailer               = new PHPMailer;
    $this->mailer->isSMTP();
    $this->mailer->SMTPDebug    = false;
    $this->mailer->Debugoutput  = 'html';
    $this->mailer->Host         = defined('NOVAP_SMTP_HOST') ? NOVAP_SMTP_HOST : 'smtp.mandrillapp.com';
    $this->mailer->Port         = defined('NOVAP_SMTP_PORT') ? NOVAP_SMTP_PORT : 587;
    $this->mailer->SMTPAuth     = defined('NOVAP_SMTP_AUTH') ? NOVAP_SMTP_AUTH : true;
    $this->mailer->Username     = defined('NOVAP_SMTP_USERNAME') ? NOVAP_SMTP_USERNAME : 'aliya@circle.co.ke';
    $this->mailer->Password     = defined('NOVAP_SMTP_PASSWORD') ? NOVAP_SMTP_PASSWORD : 'cotr35wlVOUplhClB0rXAA';
    $this->mailer->addReplyTo(
        defined('NOVAP_SMTP_REPLY_TO_EMAIL') ? NOVAP_SMTP_REPLY_TO_EMAIL : 'developers@circle.co.ke', 
        defined('NOVAP_SMTP_REPLY_TO_NAME') ? NOVAP_SMTP_REPLY_TO_NAME : 'The Novapioneer Team'
    );
  }

  public function sendMail($subject, $message, array $to = array(), array $bcc = array(), $from_email = null, $from_name = null)
  {
    // Add recepients if we have them set
    if((!empty($to)) && (!is_null($to)))
    {
      foreach($to as $email => $name)
      {
        $this->mailer->addAddress($email, $name);
      }
    }

    // Add bcc if we have it set
    if((!empty($bcc)) && (!is_null($bcc)))
    {
      foreach($bcc as $email => $name)
      {
        $this->mailer->AddBcc($email, $name);
      }
    }

    // Set from
    if($from_email == null)
    {
      $this->mailer->setFrom(
        defined('NOVAP_SMTP_REPLY_TO_EMAIL') ? NOVAP_SMTP_REPLY_TO_EMAIL : 'developers@circle.co.ke', 
        defined('NOVAP_SMTP_REPLY_TO_NAME') ? NOVAP_SMTP_REPLY_TO_NAME : 'The Novapioneer Team'
      );
    }
    else
    {
      $this->mailer->setFrom($from_email, $from_name);
    }

    $this->mailer->Subject = $subject;
    $this->mailer->msgHTML($message);

    if($this->mailer->send())
    {
      return true;
    }
    else
    {
      return false;
    }
  }

}
