<?php
namespace FreePBX\modules\Yourmodule;
use FreePBX\modules\Backup as Base;
class Restore Extends Base\RestoreBase{
  public function runRestore($restoreid){
    $configs = $this->getConfigs();
    $files = $this->getFiles();
    foreach($configs as $config){
      //do something
    }
    foreach($files as $file){
        //do something
    }
  }
}