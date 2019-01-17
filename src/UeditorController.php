<?php

namespace xuying\ueditor;

use xuying\ueditor\Control;

/**
 * Class UeditorController
 * @package xuying\ueditor
 */
class UeditorController
{
    /**
     *
     */
    public function index()
    {
        $control = new Control();
        $control->index();
    }

    /**
     * @param array $config
     */
    public function ueditor_action($config = [])
    {
        $configJsonPath = $config['configJsonPath'];//fixme 载入配置文件 config.json
        $control = new Control($configJsonPath);
        $control->index();
    }
}