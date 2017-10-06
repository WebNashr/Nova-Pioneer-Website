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
        $this->mailer->Password = 'cotr35wlVOUplhClB0rXAA';
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
            $this->mailer->setFrom('sales@imbank.co.ke', 'I&M Bank Kenya Sales');
            $this->mailer->addReplyTo('sales@imbank.co.ke', 'I&M Bank Kenya Sales');
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
