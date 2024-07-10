<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

require 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$tables = DB::select('SHOW TABLES');

foreach ($tables as $table) {
    $tableName = array_values((array)$table)[0];
    $modelName = Str::studly(Str::singular($tableName));
    $command = "php artisan krlove:generate:model $modelName --table-name=$tableName";
    echo "Generating model for table: $tableName with model name: $modelName\n";
    shell_exec($command);
}
