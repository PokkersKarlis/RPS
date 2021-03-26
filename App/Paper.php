<?php

namespace App;

class Paper implements Symbol
{
    private string $symbol = 'P';

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function isWinner($playerChoice): bool
    {
        if ($playerChoice === 'R') {
            return true;
        }
        return false;
    }
}