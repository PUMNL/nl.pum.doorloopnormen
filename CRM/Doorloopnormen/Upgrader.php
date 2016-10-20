<?php

/**
 * Collection of upgrade steps.
 */
class CRM_Doorloopnormen_Upgrader extends CRM_Doorloopnormen_Upgrader_Base {

  public function install() {
    $this->executeSqlFile('sql/doorloopnormen.sql');
  }

  public function uninstall() {
   CRM_Core_DAO::executeQuery("DROP TABLE IF EXISTS `civicrm_doorloopnormen`");
  }

}
