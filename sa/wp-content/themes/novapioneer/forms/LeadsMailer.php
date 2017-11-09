<?php
require 'lib/vendor/autoload.php';

class LeadsMailer
{
    protected $mailer;

    public function __construct()
    {
        $this->mailer = new PHPMailer;
        $this->mailer->isSMTP();
        $this->mailer->SMTPDebug = false;
        $this->mailer->Debugoutput = 'html';
        $this->mailer->Host = 'smtp.mandrillapp.com';
        $this->mailer->Port = 587;
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = 'aliya@circle.co.ke';
        $this->mailer->Password = 'T9u7A6QsdLf5U_NOGbQIhw';
    }

    public function sendMail($subject, $message, array $to = array(), array $bcc = array(), $from_email = null, $from_name = null, $attachments = null)
    {
        // Add recepients if we have them set
        if ((!empty($to)) && (!is_null($to))) {
            foreach ($to as $email => $name) {
                $this->mailer->addAddress($email, $name);
            }
        }

        // Add bcc if we have it set
        if ((!empty($bcc)) && (!is_null($bcc))) {
            foreach ($bcc as $email => $name) {
                $this->mailer->AddBcc($email, $name);
            }
        }

        // Set from
        if ($from_email == null) {
            $this->mailer->setFrom('no-reply@novapioneer.com', 'Nova Campaign Pages');
            $this->mailer->addReplyTo('no-reply@novapioneer.com', 'Nova Campaign Pages');
        } else {
            $this->mailer->setFrom($from_email, $from_name);
            $this->mailer->addReplyTo($from_email, $from_name);
        }

        if ($attachments) {
            foreach ($attachments as $attachment) {
                $this->mailer->addAttachment($attachment);
            }

        }

        $this->mailer->Subject = $subject;
        $this->mailer->msgHTML($message);

        if ($this->mailer->send()) {
            return true;
        } else {
            return false;
        }
    }

}
