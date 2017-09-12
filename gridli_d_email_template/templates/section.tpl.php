<?php
/**
 * Created by PhpStorm.
 * User: Li Li
 * Date: 8/31/2017 2:13 PM
 */

module_load_include('inc','gridli_d_email_template','includes/GridliDEmailTemplate');
$_f = new GridliDEmailTemplate([]);

// Sample theme variable
$_css_section = [
  'h' => [
    'content'     => 'hello',
    'td'          => [
      'align'  => 'center',
      'valign' => 'top',
      'style'  => 'background-color:#ffffff;padding-right:10px !important;padding-left:10px !important;',
      'class'  => '',
    ],
    'td_table'    => [
      'width' => 640,
      'class' => 'sectionTable',
    ],
    'td_table_td' => [
      'algin'  => 'center',
      'valign' => 'top',
      'style'  => 'padding-top:15px',
    ],
  ],
];
?>
<tr>
  <td <?php echo $_f->getAttributes([$h['td'], ['align', 'valign', 'style', 'class']])?>>
    <table border="0" cellpadding="0" cellspacing="0" <?php echo $_f->getAttributes([$h['td_table'], ['width', 'class']])?>>
      <tr>
        <td <?php echo $_f->getAttributes([$h['td_table_td'], ['align', 'valign', 'style', 'class']])?>>
          <?php echo $h['content']; ?>
        </td>
      </tr>
    </table>
  </td>
</tr>