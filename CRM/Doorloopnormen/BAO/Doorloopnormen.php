<?php
/**
 * @author Jaap Jansma (CiviCooP) <jaap.jansma@civicoop.org>
 * @license http://www.gnu.org/licenses/agpl-3.0.html
 */

class CRM_Doorloopnormen_BAO_Doorloopnormen extends CRM_Doorloopnormen_DAO_Doorloopnormen {

  /**
   * Function to get values
   *
   * @return array $result found rows with data
   * @access public
   * @static
   */
  public static function getValues($params) {
    $result = array();
    $norm = new CRM_Doorloopnormen_BAO_Doorloopnormen();
    if (!empty($params)) {
      $fields = self::fields();
      foreach ($params as $key => $value) {
        if (isset($fields[$key])) {
          $norm->$key = $value;
        }
      }
    }
    $norm->find();
    while ($norm->fetch()) {
      $row = array();
      self::storeValues($norm, $row);
      $result[$row['id']] = $row;
    }
    return $result;
  }

  /**
   * Function to add or update doorloopnorm
   *
   * @param array $params
   * @return array $result
   * @access public
   * @throws Exception when params is empty
   * @static
   */
  public static function add($params) {
    $result = array();
    if (empty($params)) {
      throw new Exception('Params can not be empty when adding or updating a Doorloopnorm');
    }

    if (!empty($params['id'])) {
      CRM_Utils_Hook::pre('edit', 'Doorloopnorm', $params['id'], $params);
    }
    else {
      CRM_Utils_Hook::pre('create', 'Doorloopnorm', NULL, $params);
    }

    $norm = new CRM_Doorloopnormen_BAO_Doorloopnormen();
    $fields = self::fields();
    foreach ($params as $key => $value) {
      if (isset($fields[$key])) {
        $norm->$key = $value;
      }
    }
    $norm->save();
    self::storeValues($norm, $result);

    if (!empty($params['id'])) {
      CRM_Utils_Hook::post('edit', 'Doorloopnorm', $norm->id, $norm);
    }
    else {
      CRM_Utils_Hook::post('create', 'Doorloopnorm', $norm->id, $norm);
    }

    return $result;
  }

}