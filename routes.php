<?php


Route::get('api/acte/appinfo', 'Acte\AppInfo\Controllers\Api\SystemInfos@read');
Route::get('api/acte/appinfo/build', 'Acte\AppInfo\Controllers\Api\SystemInfos@readBuild');
