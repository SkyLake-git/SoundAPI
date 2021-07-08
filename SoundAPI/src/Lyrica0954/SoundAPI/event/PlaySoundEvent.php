<?php

declare(strict_types=1);

namespace Lyrica0954\SoundAPI\event;

use pocketmine\event\player\PlayerEvent;
use pocketmine\event\Cancellable;
use pocketmine\Player;

class PlaySoundEvent extends PlayerEvent implements Cancellable{

    private $player;
    private $sound;
    private $pitch;
    private $volume;
    private $isBroadcast;

    public function __construct(Player $player, String $sound, Float $pitch, Float $volume, Bool $isBroadcast){
        $this->player = $player;
        $this->sound = $sound;
        $this->pitch = $pitch;
        $this->volume = $volume;
        $this->isBroadcast = $isBroadcast;
    }

    public function getSoundName(){
        return $this->sound;
    }

    public function getPitch(){
        return $this->pitch;
    }

    public function getVolume(){
        return $this->volume;
    }
    
    public function isBroadcast(){
        return $this->isBroadcast;
    }
}