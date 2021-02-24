<?php
declare(strict_types=1);

session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Suit.php';
require 'Card.php';
//require 'Deck.php';
require 'Player.php';
require 'Blackjack.php';

if (!isset($_SESSION['blackjack'])) {
    $_SESSION['blackjack'] = new Blackjack();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Peter's Blackjack</title>
</head>
<body>

    <form method="post">
        <div id="control_area">
            <button type="submit" name="btn_hit">hit</button>
            <button type="submit" name="btn_stand">stand</button>
            <button type="submit" name="btn_surrender">surrender</button>
        </div>
        <br />

        <div id="score_area">
            <div>
                <label for="player">Player score:</label>
                <input type="text" name="player" id="player" placeholder="player score" value="">
            </div>
            <br />
            <div>
                <label for="dealer">Dealer score:</label>
                <input type="text" name="dealer" id="dealer" placeholder="dealer score" value="">
            </div>
            <br />
            <div>
                <label for="winner">Winner:</label>
                <input type="text" name="winner" id="winner" placeholder="winner" value="">
            </div>
        </div>
    </form>

</body>
</html>

