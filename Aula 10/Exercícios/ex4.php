<?php

namespace Notificacao;

interface MeioDeNotificacao {
    public function enviar();
}

class Email implements MeioDeNotificacao {
    public function enviar() {
        return "Enviando email...";
    }
}

class Sms implements MeioDeNotificacao {
    public function enviar() {
        return "Enviando SMS...";
    }
}


$email = new Email();
$sms = new Sms();

echo $email->enviar() . "\n";
echo $sms->enviar() . "\n";