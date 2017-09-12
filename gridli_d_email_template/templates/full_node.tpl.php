<?php
/**
 * Created by PhpStorm.
 * User: Li Li
 * Date: 8/31/2017 3:31 PM
 */

// Sample theme variables
// $item
$_item = [
  'image' => '',
  'url' => '',
  'title' => '',
  'summary' => '',
];

// $html
$_css_h3 = 'font-size:15px;color:#333333;line-height: 100% !important;font-weight:bold;font-family:Arial,Helvetica,sans-serif !important;';
$_css_h3_a = 'font-size:15px;color:#333333;line-height: 100% !important;font-weight:bold;font-family:Arial,Helvetica,sans-serif !important;text-decoration: none;';
$_css_p = 'font-size:12px !important;margin: 1em 0;line-height:120% !important;font-family: Arial, Helvetica, sans-serif;';

$full_width_html = [
  'spacer' => '',
  'row'    => 'articleBlockFullColumn',
  'h3'     => $_css_h3,
  'h3 a'   => $_css_h3_a,
  'p'      => $_css_p,
  'img'    => [
    'enable' => 1,
    'class'  => 'articleImg',
    'w'      => '140',
    'h'      => '',
    'style'  => 'width:140px; height:auto; vertical-align:top;',
  ],
  'div'    => [
    'class' => 'articleDiv',
    'w'     => 15,
  ],
];

$full_width_no_image_html = [
  'spacer' => '',
  'row'    => 'articleBlockFullColumn',
  'h3'     => $_css_h3,
  'h3 a'   => $_css_h3_a,
  'p'      => $_css_p,
  'img'    => [
    'enable' => 0,
    'class'  => 'articleImg',
    'w'      => '140',
    'h'      => '',
    'style'  => 'width:140px; height:auto; vertical-align:top;',
  ],
  'div'    => [
    'class' => 'articleDiv',
    'w'     => 15,
  ],
];

// $readmore
$_readmore = [
  'inline' => 1,
  'text'   => 'read more',
  'class'  => 'readmore',
];
?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <?php if (isset($html['spacer']) && $html['spacer'] == 'top'): ?>
    <tr><td>&nbsp;</td></tr>
  <?php endif; ?>
  <tr>
    <td align="left" valign="top" width="100%" class="<?php echo $html['row']; ?>">
      <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <?php if (!empty($item['image']) && $html['img']['enable']): ?>
            <td class="<?php echo $html['img']['class']; ?>" align="center" valign="top">
              <a
                href="<?php echo $item['url']; ?>"
                target="_blank"><img
                  alt=""
                  src="<?php echo $item['image']; ?>"
                  <?php if ($html['img']['w']) echo ' width="'. $html['img']['w']. '"'; ?>
                  <?php if ($html['img']['h']) echo ' height="'. $html['img']['h']. '"'; ?>
                  style="<?php echo $html['img']['style']; ?>"/></a>
            </td>
            <td class="<?php echo $html['div']['class']; ?>"
                width="<?php echo $html['div']['w']; ?>">&nbsp;</td>
          <?php endif; ?>

          <td align="left" valign="top">
            <h3 style="<?php echo $html['h3']; ?>"><a
                href="<?php echo $item['url']; ?>"
                target="_blank"
                style="<?php echo $html['h3 a']; ?>"><?php
                print theme('nc_custom_templates_inline_native_article',
                  ['article' => $item]
                );
                echo $item['title'];
                ?></a></h3>
            <p style="<?php echo $html['p']; ?>"><?php echo $item['summary']; ?> <?php
              if ($readmore['inline']) {
                print theme(
                  'nc_custom_templates_inline_read_more',
                  ['item' => $item,
                   'options'=> $readmore
                  ]);
              }
              ?>
            </p>
            <?php
            if (!$readmore['inline']) {
              print theme(
                'nc_custom_templates_inline_read_more',
                ['item' => $item,
                 'options'=> $readmore
                ]);
            }
            ?>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <?php if (isset($html['spacer']) && $html['spacer'] == 'bottom'): ?>
    <tr><td>&nbsp;</td></tr>
  <?php endif; ?>
</table>