<?php

namespace src\Interfaces;

use src\Componentes\Notificacao;

interface ILog {
    public function registrarLog(Log $log);
}