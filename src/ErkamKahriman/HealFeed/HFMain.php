<?php

namespace ErkamKahriman\HealFeed;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class HFMain extends PluginBase {

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
        if($sender instanceof Player){
            if($sender->hasPermission("heal.use")){
                if($cmd->getName() == "heal"){
                    $sender->setHealth($sender->getMaxHealth());
                    $sender->sendMessage("§aYou healed yourself.");
                }
            }
            if($sender->hasPermission("feed.use")){
                if($cmd->getName() == "feed"){
                    $sender->setFood(20);
                    $sender->setSaturation(20);
                    $sender->sendMessage("§aYou feeded yourself.");
                }
            }
        }
        return true;
    }
}
