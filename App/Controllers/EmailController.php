<?php
namespace App\Controllers;

// OS recursos do Miniframework
use MF\Controller\Action;
use MF\Model\Container;

use Nette\Mail\Message;
use Nette\Mail\SmtpMailer;

class emailController extends Action{

    public function sendMail(){
        //$user=Container::getModel("User");
        /*$mail=new Message;

        $mail->setFrom($_POST['email']);
        $mail->addTo("authentcgj186@gmail.com");
        $mail->setSubject($_POST['nome']);
        $mail->setBody($_POST['duvida']);

        

        $mailer = new SmtpMailer(
            'smtp.gmail.com',
            'jgabrielfdc08@gmail.com',
            'Tazercraft2!',
            SmtpMailer::EncryptionSSL,
            2023
        );
        $mailer->send($mail);

        header("Location:/suporte?sucesso=1");*/

        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
    }
}