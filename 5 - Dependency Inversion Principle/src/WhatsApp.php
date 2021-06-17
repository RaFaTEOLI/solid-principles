<?php

namespace src;

class WhatsApp implements IMensagemToken {
    public function enviar(): void {
        echo 'WhatsApp: seu token é 888-222';
    }
}