<?php

use Emsifa\ApiWilayah\Generator;
use Emsifa\ApiWilayah\Repository;

require "vendor/autoload.php";

header('Access-Control-Allow-Origin: http://localhost:3001');

$repository = new Repository(__DIR__.'/data');

$repository->cache('districts.csv');
$repository->cache('villages.csv');

$generator = new Generator($repository, __DIR__.'/static/api');

$generator->clearOutputDir();
$generator->generate();
