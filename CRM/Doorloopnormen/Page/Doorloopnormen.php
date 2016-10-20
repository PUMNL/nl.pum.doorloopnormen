<?php

require_once 'CRM/Core/Page.php';

class CRM_Doorloopnormen_Page_Doorloopnormen extends CRM_Core_Page {
  public function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(ts('Doorloopnormen'));

    $session = CRM_Core_Session::singleton();
    $url = CRM_Utils_System::url('civicrm/doorloopnormen', 'reset=1', TRUE);
    $session->pushUserContext($url);

    $params = array();
    $normen = CRM_Doorloopnormen_BAO_Doorloopnormen::getValues($params);
    // Example: Assign a variable for use in a template
    $this->assign('normen', $normen);

    parent::run();
  }
}
