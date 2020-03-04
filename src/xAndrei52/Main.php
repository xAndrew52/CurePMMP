<?php

declare(strict_types=1);

namespace xAndrei52\Cure;

use\pocketmine\Server;
use\pocketmine\Player;
use\pocketmine\PluginBase;

use\pocketmine\command{Command, CommandSender};

class Main extends PluginBase{
     
     public function onCommand(CommandSender $player, Command $cmd, string $label, array $args) :bool {
     
           switch($cmd->getName()){
           case "cure":
                  if($player instanceof Player){
                        $player->sendMessage(TextFormat::AQUA . "You have been cured succesfully!");
                        $player->setHealth(20);
                        $player->setFood(20);
                 }
                 break;
              }
           return true;
           
     }
}
