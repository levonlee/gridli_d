<?php
/**
 * Created by PhpStorm.
 * User: Li Li
 * Date: 8/3/2017 2:28 PM
 *
 * This single column table always takes 100% width with no border and padding
 */

module_load_include('inc','gridli_d_email_template','includes/GridliDEmailTemplate');
$_f = new GridliDEmailTemplate([]);

$_h = [
  'h'     => [
    'spacer' => '', // '' no spacer, top or bottom
    'content' => '<a href="..."><img src="..." width="300" height="250" /></a>',
    'align' => ['','right'], // first one is table then td
    'valign' => ['','top'],
    'class' => ['','mobilecenter'],
    'style' => ['',''],
  ],
];
?>
<table border="0" cellpadding="0" cellspacing="0" width="100%" <?php echo $_f->getAttributesByIndex([$h, ['align', 'valign', 'style', 'class'], 0]); ?>>
  <?php if (isset($h['spacer']) && $h['spacer'] == 'top'): ?>
    <tr><td>&nbsp;</td></tr>
  <?php endif; ?>
  <tr>
    <td <?php echo $_f->getAttributesByIndex([$h, ['align', 'valign', 'style', 'class'], 1]); ?>><?php echo $h['content']; ?></td>
  </tr>
  <?php if (isset($h['spacer']) && $h['spacer'] == 'bottom'): ?>
    <tr><td>&nbsp;</td></tr>
  <?php endif; ?>
</table>