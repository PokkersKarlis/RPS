<?php

use App\SymbolCollection;

require_once 'vendor/autoload.php';


if(!isset($_POST['playerChoice']))
{require_once 'View/index.php';

}else {
    $player = $_POST['playerChoice'];
    $round = new SymbolCollection();
    $round->setSymbol();
    require_once 'View/result.php';
}
