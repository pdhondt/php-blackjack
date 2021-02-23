<?php
declare(strict_types=1);

require 'Deck.php';

class Player
{
    private array $cards;
    private bool $lost = false;

    public function __construct(Deck $deck)
    {
        array_push($this->cards, $deck->drawCard(), $deck->drawCard());
    }

    public function hit()
    {

    }

    public function surrender()
    {

    }

    public function getScore()
    {

    }

    public function hasLost()
    {

    }

}
