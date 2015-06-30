<?php
$config = Symfony\CS\Config\Config::create();
$config
    ->setUsingCache(true)
    ->setDir(__DIR__);
return $config;
