<?php

namespace App;

class SymbolCollection
{
    private array $symbols = [];
    private Symbol $symbol;

    public function setSymbols(Symbol $rock, Symbol $paper, Symbol $scissors): void
    {
        array_push($this->symbols, $rock, $paper, $scissors);
    }

    public function getSymbols(): array
    {
        $this->setSymbols(new Rock(), new Paper(), new Scissor());
        return $this->symbols;
    }

    public function setSymbol(): void
    {
        $randomizer = rand(0, count($this->getSymbols()));
        $this->symbol = $this->getSymbols()[$randomizer];
    }

    public function getSymbol(): Symbol
    {
        return $this->symbol;
    }
}