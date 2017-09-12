<?php
/**
 * Created by PhpStorm.
 * User: Li Li
 * Date: 8/17/2017 10:09 AM
 */

class GridliDEmailTemplate {

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

  public static function truncateText($text, $length = null, $options = []) {
    $return = $text;
    if ($length) {
      // check if string length exceeds
      if (mb_strlen($text) > $length) {
        // remove ellipsis added by wordpress
        $return = rtrim($text,'…');
        $return = truncate_utf8($return, $length, true, true);
      }
    }
    return $return;
  }

  /**
   * Returns a set of HTML attribute = value if value is not empty string
   * @param array $i
   * @code
   * $i = [
   * ['align' => 'center', 'valign' => 'middle'],
   * ['align', 'valign', 'width'], // name of the attribute
   * ]
   * @endcode
   * This returns (no width)
   * @code
   *  align="center" valign="middle"
   * @endcode
   *
   * @return string
   */
  public function getAttributes(array $i) {
    $r = '';
    foreach ($i[1] as $a) {
      if (isset($i[0][$a]) && strlen($i[0][$a])) {
        $r .= ' '. $a. '="'.$i[0][$a].'"';
      }
    }
    return $r;
  }

  /**
   * Returns a set of HTML attribute = value if value is not empty string
   * @param array $i
   * @code
   * $i = [
   * ['align' => ['center', ''], 'valign' => ['','']],
   * ['align', 'valign', 'width'], // name of the attribute
   * 0, // Index. first value
   * ]
   * @endcode
   * This returns (no valgin for index 0)
   * @code
   *  align="center"
   * @endcode
   *
   * @return string
   */
  public function getAttributesByIndex(array $i) {
    $r = '';
    foreach ($i[1] as $a) {
      if (isset($i[0][$a]) && isset($i[0][$a][$i[2]]) && strlen($i[0][$a][$i[2]])) {
        $r .= ' '. $a. '="'.$i[0][$a][$i[2]].'"';
      }
    }
    return $r;
  }

}