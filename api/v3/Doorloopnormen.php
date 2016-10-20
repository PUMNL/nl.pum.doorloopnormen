<?php
/**
 * @author Jaap Jansma (CiviCooP) <jaap.jansma@civicoop.org>
 * @license http://www.gnu.org/licenses/agpl-3.0.html
 */

function civicrm_api3_doorloopnormen_get($params) {
  $returnValues = CRM_Doorloopnormen_BAO_Doorloopnormen::getValues($params);
  return civicrm_api3_create_success($returnValues, $params, 'Doorloopnormen', 'Get');
}