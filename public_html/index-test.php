<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */
include '../load.php';
require_once($yii);
Yii::createWebApplication($config)->run();
