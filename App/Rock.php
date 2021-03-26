<?php

namespace App;

class Rock implements Symbol
{
    private string $symbol = 'R';

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function isWinner($playerChoice): bool
    {
        if ($playerChoice === 'S') {
            return true;
        }
        return false;
    }
}