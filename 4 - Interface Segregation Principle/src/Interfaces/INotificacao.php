<?php

namespace src\Interfaces;

use src\Componentes\Notificacao;

interface INotificacao {
    public function enviarNotificacao(Notificacao $notificacao);
}