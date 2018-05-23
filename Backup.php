<?php
namespace FreePBX\modules\Yourmodule;
use FreePBX\modules\Backup as Base;
class Backup Extends Base\BackupBase{
  public function runBackup($id,$transaction){
    $configs = [];
    $files = [];
    $dirs = [];
    $this->addDirectories($dirs);
    $this->addDependency('');
    $this->addConfigs($configS);
  }
}