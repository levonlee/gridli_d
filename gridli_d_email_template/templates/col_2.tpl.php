<?php
/**
 * Created by PhpStorm.
 * User: Li Li
 * Date: 8/3/2017 2:28 PM
 *
 * $html => [
 *   'left' => 'articleBlockLeftColumn',
 *   'right' => 'articleBlockRightColumn',
 *   'ad' => 'bigAds',
 * ]
 */

module_load_include('inc','gridli_d_email_template','includes/GridliDEmailTemplate');
$_f = new GridliDEmailTemplate([]);

$_h = [
  'h' => [
    'table' => [
      'align' => '',
      'valign' => '',
      'class' => '',
      'style' => '',
    ],
    'spacer' => 'bottom',
    'content' => [ '', '' ],
    'width'   => ['50%', '50%'],
    'align'   => [ 'left', 'right' ],
    'valign'  => [ 'top', 'top' ],
    'class'   => [
      'articleBlockLeftColumn',
      'articleBlockRightColumn'
    ],
    'style'   => [ '', '' ],
  ],
];
?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"
  <?php echo $_f->getAttributes([$h['table'], ['align', 'valign', 'style', 'class']])?>>
  <?php if (isset($h['spacer']) && $h['spacer'] == 'top'): ?>
    <tr><td colspan="2">&nbsp;</td></tr>
  <?php endif; ?>
  <tr>
    <td <?php echo $_f->getAttributesByIndex([$h, ['width', 'align', 'valign', 'style', 'class'], 0]); ?>><?php echo $h['content'][0]; ?>
    </td>
    <td <?php echo $_f->getAttributesByIndex([$h, ['width', 'align', 'valign', 'style', 'class'], 1]); ?>><?php echo $h['content'][1]; ?>
    </td>
  </tr>
  <?php if ($h['spacer'] && $h['spacer'] == 'bottom'): ?>
    <tr><td colspan="2">&nbsp;</td></tr>
  <?php endif; ?>
</table>