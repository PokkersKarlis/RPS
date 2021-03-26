<?php

namespace App;
interface Symbol

{
    public function getSymbol(): string;

    public function isWinner($playerChoice): bool;
}