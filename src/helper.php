<?php
if (!function_exists('collect')) {
    /**
     * 生成集合
     * @param $data
     * @return mixed
     */
    function collect(array $data) {
        return (new \willphp\collection\Collection())->make($data);
    }
}