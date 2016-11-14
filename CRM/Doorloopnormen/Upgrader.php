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

  public function upgrade_1001() {
    CRM_Core_DAO::executeQuery("INSERT INTO civicrm_doorloopnormen (name, label, norm) VALUES
('expert_application_assesment_cv', 'From start Expert application to assesment intake', 14),
('expert_application_filled_pum_cv', 'From start Expert application to filled out pum cv', 14),
('expert_application_activation_cv', 'From start Expert application to activation of expert', 14);");
    return true;
  }

}
