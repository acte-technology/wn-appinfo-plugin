<?php namespace Acte\AppInfo\Controllers\Api;

use Backend\Classes\Controller;
use System\Models\PluginVersion;
use System\Classes\UpdateManager;

use Response;

/**
 * Controller
 */
class SystemInfos extends Controller
{


  public function getBuild(){
    $build = UpdateManager::instance()->getBuildNumberManually(false);
    return $build['build'];
  }

  public function getPlugins(){
    return PluginVersion::all();
  }

  public function read(){

    $plugins = $this->getPlugins();
    $build = $this->getBuild();

    return Response::json([
      'build' => $build,
      'plugins' => $plugins,
    ]);

  }

  public function readBuild(){

    return Response::json([
      'build' => $this->getBuild()
    ]);

  }

}
