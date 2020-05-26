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

namespace PJZ9n\CustomTag2;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable(): void
    {
        //Configのアップデート処理
        $this->getLogger()->info("config.ymlをアップデートします...");
        $fp = $this->getResource("config.yml");
        $configYaml = "";
        while (!feof($fp)) $configYaml .= fgets($fp);
        fclose($fp);
        $oldCount = count($this->getConfig()->getAll(), COUNT_RECURSIVE);
        $this->getConfig()->setDefaults(yaml_parse($configYaml));//replace
        $newCount = count($this->getConfig()->getAll(), COUNT_RECURSIVE);
        $this->getLogger()->info(($newCount - $oldCount) . "個の値を追加しました！");
        $this->saveConfig();
    }
}