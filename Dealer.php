<?php
declare(strict_types=1);

require 'Deck.php';

class Dealer extends Player
{
    private const MAX_DEALER_SCORE = 15;

    public function __construct(Deck $deck)
    {
        parent::__construct($deck);
    }

    public function hit(Deck $deck): void
    {
        while ($this->getScore() < self::MAX_DEALER_SCORE) {
            parent::hit();
    }

    }


}
