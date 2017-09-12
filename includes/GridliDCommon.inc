<?php
/**
 * Created by PhpStorm.
 * User: Li Li
 * Date: 8/17/2017 10:09 AM
 */
class GridliDCommon {

  /**
   * The options is array contains these keys
   *
   * @code
   * $o = [
   * ];
   * @endcode
   *
   * @var array
   */
  private $options;

  public function __construct(array $options) {
    $this->options = $options;
  }

  public static function getFieldValue($entity, $field_name = NULL, $type = 'node', $delta = 0, $default = NULL, $field_type = 'text') {
    $return = $default;
    if (!is_null($field_name)) {
      $f = field_get_items($type, $entity, $field_name);
      if ($f) {
        if (is_int($delta) && isset($f[$delta]) && isset($f[$delta]['value'])) {
          // $v = getFieldValue($node, 'body'); gets first body. If not defined, returned default null
          $return = $f[$delta]['value'];
        }
        elseif (!is_int($delta)) {
          // $v = getFieldValue($node, 'body', NULL); gets all bodies
          $return = $f;
        }
      }
    }
    return $return;
  }

}