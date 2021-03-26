<?php

namespace App;

class Scissor implements Symbol
{
    private string $symbol = 'S';

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function isWinner($playerChoice): bool
    {
        if ($playerChoice === 'P') {
            return true;
        }
        return false;
    }
}