<?php

declare(strict_types=1);

namespace Lyrica0954\SoundAPI;

use pocketmine\network\mcpe\protocol\PlaySoundPacket;
use pocketmine\Player;

use Lyrica0954\SoundAPI\event\PlaySoundEvent;


class Sound{

    private $player;

    public $sound;
    public $pitch;
    public $volume;

    public function __construct(Player $player, String $sound, Float $pitch = 1.0, Float $volume = 1.0){
        $this->player = $player;
        $this->sound = $sound;
        $this->pitch = 1.0;
        $this->volume = 1.0;
    }

    protected function play(){
        $sound = new PlaySoundPacket();
        $sound->x = $this->player->getX();
        $sound->y = $this->player->getY();
        $sound->z = $this->player->getZ();
        $sound->volume = $this->volume;
        $sound->pitch = $this->pitch;
        $sound->soundName = $this->sound;
        $event = new PlaySoundEvent($this->player, $this->sound, $this->pitch, $this->volume, false);
        $event->call();
        if (!$event->isCancelled()){
            $this->player->dataPacket($sound);
        }
    }


    public function getPlayer(){
        return $this->player;
    }
}