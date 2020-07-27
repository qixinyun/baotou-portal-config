<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            APP_ROOT.'vendor/qixinyun/baotou-portal-config/src/SmartyConfig/Bt',
            APP_ROOT.'vendor/qixinyun/baotou-portal-config/src/SmartyConfig/Common',
            APP_ROOT.'vendor/qixinyun/baotou-portal-config/src/SmartyConfig'
        );

        return $dirArray;
    }
}
