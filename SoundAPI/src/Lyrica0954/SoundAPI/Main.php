<?php

namespace Lyrica0954\SoundAPI;


use pocketmine\block\BlockFactory;
use pocketmine\plugin\PluginBase;

use Lyrica0954\SoundAPI\Sound;

class Main extends PluginBase{

    public static function playSound($player, $sound, $pitch = 1.0, $volume = 1.0){
        $instance = new Sound($player, $sound, $pitch, $volume);
        $instance->play();
    }

    public function onEnable(){
        $this->getServer()->getLogger()->info("§6[SoundAPI] §9SoundAPI has been loaded!");
    }

}