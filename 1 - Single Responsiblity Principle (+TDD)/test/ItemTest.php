<?php

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase {

    public function testEstadoInicialDoItem() {
        $item = new Item();

        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGetESetDescricao() {
        $descricao = 'Cadeira de plástico';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

    /**
     * @dataProvider dataValores
     */
    public function testGetESetValor($valor) {
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    public function testValidacaoDeItem() {
        $item = new Item();
        $item->setValor(55);
        $item->setDescricao('Cadeira de plastico');

        $this->assertEquals(true, $item->itemValido());

        $item->setValor(55);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());

        $item->setValor(0);
        $item->setDescricao('Cadeira de plastico');
        $this->assertEquals(false, $item->itemValido());

        $item->setValor(0);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
    }

    public function dataValores() {
        return [
            [100],
            [-2],
            [0]
        ];
    }
}