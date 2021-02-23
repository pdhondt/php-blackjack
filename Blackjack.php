<?php
declare(strict_types=1);

class Blackjack
{
    private Player $player;
    private Player $dealer;
    private Deck $deck;

    public function __construct()
    {
        $this->player = new Player($this->deck);
        $this->dealer = new Player($this->deck);
        $this->deck = new Deck();
        $this->deck->shuffle();
    }

    public function getPlayer(): Player
    {
        return $this->player;
    }

    public function getDealer(): Player      // change return type to Dealer afterwards!
    {
        return $this->dealer;
    }

    public function getDeck(): Deck
    {
        return $this->deck;
    }

}