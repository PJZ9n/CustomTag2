<?php

/**
 * Copyright (c) 2020 PJZ9n.
 *
 * This file is part of CustomTag2.
 *
 * CustomTag2 is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * CustomTag2 is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with CustomTag2. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace PJZ9n\CustomTag2\Command;

use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\plugin\Plugin;

class TagAdminCommand extends PluginCommand implements CommandExecutor
{
    public function __construct(Plugin $owner)
    {
        parent::__construct("tagadmin", $owner);
        $this->setDescription("CustomTagの管理フォームを開く");
        $this->setUsage("/tagadmin");
        $this->setAliases([
            "taga",
        ]);
        $this->setPermission("customtag2.command.tagadmin");
        $this->setExecutor($this);
    }
    
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        return true;
    }
}