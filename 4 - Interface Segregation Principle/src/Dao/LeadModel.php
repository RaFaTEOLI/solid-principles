<?php

namespace src\Dao;

use src\BD;
use src\Interfaces\ICadastro;
use src\Interfaces\INotificacao;

use src\Componentes\Notificacao;

class LeadModel extends BD implements ICadastro, INotificacao {
    public function salvar() {

    }

    public function enviarNotificacao(Notificacao $notificacao) {

    }
}