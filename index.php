<?php
/**
 * Created by PhpStorm.
 * User: Lulu
 * Date: 11.11.2017
 * Time: 11:59
 */
include 'classes/Computer.php';
$computer = new Computer();
$computer->start();
$computer->restart();
$computer->shutdown();
$computer->restart();

