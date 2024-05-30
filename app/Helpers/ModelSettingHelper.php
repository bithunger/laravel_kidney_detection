<?php

if (! function_exists('modelSetting')) {

    function modelSetting($name, $default = null)
    {
        return \App\Models\DetectionModel::getByName($name, $default);
    }
}
