<?php
require 'import.php';
import('config');
import('libs/Bootstrap');
import('libs/Controller');
import('libs/Database');
import('libs/Model');
import('libs/View');

// ==========================
import('./libs/custom/Auth');
import('./libs/Mail');
import('./libs/Validation');
import('./libs/plugins/Upload/Upload');
import('./libs/Helper');
import('./libs/Session');
import('./libs/Hash');
import('./libs/Cookie');
// ===========================
$bootstrap = new Bootstrap();
$bootstrap->init();
