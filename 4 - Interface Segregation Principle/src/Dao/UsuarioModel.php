<?php

namespace src\Dao;

use src\BD;
use src\Interfaces\ICadastro;
use src\Interfaces\ILog;
use src\Interfaces\INotificacao;

use src\Componentes\Log;
use src\Componentes\Notificacao;

class UsuarioModel extends BD implements ICadastro {
    public function salvar() {

    }

    public function registrarLog(Log $log) {

    }

    public function enviarNotificacao(Notificacao $notificacao) {

    }
}