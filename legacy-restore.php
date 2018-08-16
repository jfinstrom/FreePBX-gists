<?php
//This is in the modules Restore class

public function processLegacy($pdo, $data, $tables, $unknownTables, $tmpfiledir){
  $tables = array_flip($tables+$unknownTables);
  if(!isset($tables[''])){
    return $this;
  }
  $bmo = $this->FreePBX->Callback;
  $bmo->setDatabase($pdo);
  $data = $bmo->foo();
  $cb->resetDatabase();
  /*do stuff with data*
  return $this;
}
