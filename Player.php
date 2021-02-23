<?php
declare(strict_types=1);

require 'Deck.php';

class Player
{
    private const MAX_SCORE = 21;
    private array $cards = [];
    private bool $lost = false;
    //private int $score;

    public function __construct(Deck $deck)
    {
        array_push($this->cards, $deck->drawCard(), $deck->drawCard());
    }

    public function hit(Deck $deck): void
    {
        array_push($this->cards, $deck->drawCard());
        if ($this->getScore() > self::MAX_SCORE) {
            $this->lost = true;
        }
    }

    public function surrender(): void
    {
        $this->lost = true;
    }

    public function getScore(): int
    {
        foreach($this->cards AS $card) {
            $totalscore += $card->getValue();
        }
        return $totalscore;
    }

    public function hasLost(): bool
    {
        return $this->lost;
    }

}
