<?php
namespace App\Helpers;

class YGH
{
  protected $url = 'https://db.ygoprodeck.com/api/v6/cardinfo.php';

  public function getAllCards() {
    $cards = file_get_contents($this->url);
    $cardCollection = collect(json_decode($cards));
    $cardCollection = $cardCollection->chunk(21)->first(); //[0]
    return $cardCollection;

  }
}
