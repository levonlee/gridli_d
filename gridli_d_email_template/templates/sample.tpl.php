<?php
/**
 * Created by PhpStorm.
 * User: Li Li
 * Date: 8/31/2017 6:38 PM
 */

$_preview_text = 'Preview text paragraph';

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



$_css_section_title = 'color: #eb1f2a;font-size:22px;font-family: Arial,Helvetica,sans-serif !important;';

$_css_hr = '<hr noshade color="#eb1f2a" width="100%" size="1" style="padding:0; margin:8px 0 8px 0; border:none; width:100%; height: 1px; color:#eb1f2a; background-color: #eb1f2a" />';
$_css_hr_grey = '<hr noshade color="#AAAAAA" width="100%" size="1" style="padding:0; margin:8px 0 8px 0; border:none; width:100%; height: 1px; color:#AAAAAA; background-color: #AAAAAA" />';

$_css_text_small = 'font-size:10px;color:#555555;line-height:100% !important;font-family:Arial,Helvetica,sans-serif !important;';
$_css_small_a = 'font-size:12px;color:#e01d25;line-height: 100% !important;text-decoration:none;font-family: Arial, Helvetica, sans-serif;outline:none;';

$_css_p = 'font-size:12px !important;margin: 1em 0;line-height:120% !important;font-family: Arial, Helvetica, sans-serif;';
$_css_readmore = 'font-size:12px !important;color:#e01d25;line-height:120% !important;font-family: Arial, Helvetica, sans-serif;text-decoration: none;';
$_css_h3 = 'font-size:15px;color:#333333;line-height: 100% !important;font-weight:bold;font-family:Arial,Helvetica,sans-serif !important;';
$_css_h3_a = 'font-size:15px;color:#333333;line-height: 100% !important;font-weight:bold;font-family:Arial,Helvetica,sans-serif !important;text-decoration: none;';
$_css_h4 = 'font-size:14px;color:#333333;line-height: 100% !important;font-weight:bold;font-family:Arial,Helvetica,sans-serif !important;';
$_css_h4_a = 'font-size:14px;color:#333333;line-height: 100% !important;font-weight:bold;font-family:Arial,Helvetica,sans-serif !important;text-decoration: none;';

$readmore = [
  'inline' => 1,
  'text'   => 'read more',
  'class'  => 'readmore',
];

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

$_test_link = 'http://www.google.com';
$_test_bb = 'http://placehold.it/300x250/?text=300x250';

$_test_100x24 = 'http://placehold.it/100x24/?text=100x24';
$content_items = [
  [
    'title' => 'Article (image, 55 words)',
    'summary' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,…",
    'url' => $_test_link,
    'image' => 'http://placehold.it/170x140/?text=1',
    'meta' => "",
    'tags' => "Earnings / Ratings,Insurance,Legal,Legislation / Regulation,Personal Lines,Auto,Financial,Insurer,Product,Risk",
    'pubdate' => "1504195615"
  ],
];
$event_items = [
  [
    'title' => 'Event #1: 373 letters',
    'summary' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim jus…',
    'url' => $_test_link,
    'image' => '',
    'meta' => '',
    'tags' => '',
    'pubdate' => "1505793600",
  ],
  [
    'title' => 'Event #2: 352 letters',
    'summary' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eg…',
    'url' => $_test_link,
    'image' => '',
    'meta' => '',
    'tags' => '',
    'pubdate' => "1505793600",
  ],
  [
    'title' => 'Event #3: 342 letters',
    'summary' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vu…',
    'url' => $_test_link,
    'image' => '',
    'meta' => '',
    'tags' => '',
    'pubdate' => "1505793600",
  ],
];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <!--[if !mso]><!-- -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!--<![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Sample Email Campaign Template</title>
  <?php
  print theme(
    'gridli_d_email_template_css',
    [
      'v' => [
        'c' => [
          'readmore' => $_css_readmore,
        ],
        'e' => [
          'p' => $_css_p,
        ]
      ],
    ]
  );
  ?>
</head>
<body>
<center>
  <div style="line-height: 0; mso-hide: all; display: none;"><?php echo $_preview_text; ?></div>
  <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="width:100% !important; margin:0; padding:0;">
    <tr>
      <td align="center" valign="top" id="bodyCell">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="emailContainer" style="width:100%;">


          <!-- Section -->
          <?php
          $_section_content = '';
          $_full_node_with_image = theme(
            'gridli_d_email_template_full_node',
            [
              'item'     => $content_items[0],
              'readmore' => $readmore,
              'html'  => $full_width_html,
            ]
          );
          $_full_node_without_image = theme(
            'gridli_d_email_template_full_node',
            [
              'item'     => $content_items[0],
              'readmore' => $readmore,
              'html'  => $full_width_no_image_html,
            ]
          );

          $_section_content .= $_full_node_with_image;

          $_section = $_css_section;
          $_section['h']['content'] = $_section_content;
          print theme('gridli_d_email_template_section', $_section);
          ?>
          <!-- Section. -->

          <!-- Section -->
          <?php
          $_section_content = '';
          $_temp =<<<HTML
<h2 style="{$_css_section_title}">Post without Image</h2>
{$_css_hr}
HTML;
          $_section_title = theme(
            'gridli_d_email_template_col_1',
            [
              'h'     => [
                'spacer' => '', // '' no spacer, top or bottom
                'content' => $_temp,
                'align' => ['','left'], // first one is table then td
                'valign' => ['','top'],
                'class' => ['',''],
                'style' => ['',''],
              ],
            ]
          );

          $_full_node_without_image = theme(
            'gridli_d_email_template_full_node',
            [
              'item'     => $content_items[0],
              'readmore' => $readmore,
              'html'  => $full_width_no_image_html,
            ]
          );

          $_section_content .= $_section_title.$_full_node_without_image;

          $_section = $_css_section;
          $_section['h']['content'] = $_section_content;
          print theme('gridli_d_email_template_section', $_section);
          ?>
          <!-- Section. -->

          <!-- Section -->
          <?php
          $_section_content = '';
          $_temp =<<<HTML
<h2 style="{$_css_section_title}"><img src="{$_test_100x24}" alt="" width="100" height="24" valign="middle"> Big Box with 1 Post</h2>
{$_css_hr}
HTML;
          $_section_title = theme(
            'gridli_d_email_template_col_1',
            [
              'h'     => [
                'spacer' => '', // '' no spacer, top or bottom
                'content' => $_temp,
                'align' => ['','left'], // first one is table then td
                'valign' => ['','top'],
                'class' => ['',''],
                'style' => ['',''],
              ],
            ]
          );

          $_temp = <<<HTML
<a href="{$_test_link}"><img src="{$_test_bb}" width="300" height="250" /></a>
HTML;
          $_bb_1 = theme(
            'gridli_d_email_template_col_1',
            [
              'h'     => [
                'spacer' => '', // '' no spacer, top or bottom
                'content' => $_temp,
                'align' => ['','right'], // first one is table then td
                'valign' => ['','top'],
                'class' => ['','mobilecenter'], // 100% width and text center in mobile
                'style' => ['',''],
              ],
            ]
          );

          $_bb_with_one_post = theme(
            'gridli_d_email_template_col_2',
            [
              'h' => [
                'table' => [
                  'align' => '',
                  'valign' => '',
                  'class' => '',
                  'style' => '',
                ],
                'spacer' => 'bottom',
                'content' => [
                  $_full_node_without_image,
                  $_bb_1
                ],
                'width'   => ['50%', '50%'],
                'align'   => [ 'left', 'right' ],
                'valign'  => [ 'top', 'top' ],
                'class'   => [
                  'articleBlockLeftColumn',
                  'articleBlockRightColumn'
                ],
                'style'   => [ '', '' ],
              ],
            ]
          );
          $_section_content = $_section_title.$_bb_with_one_post;
          $_section = $_css_section;
          $_section['h']['content'] = $_section_content;
          print theme('gridli_d_email_template_section', $_section);
          ?>
          <!-- Section. -->

          <!-- Section -->
          <?php
          $_section_content = '';
          $_temp =<<<HTML
<h2 style="{$_css_section_title}">Big Box with 2 Posts</h2>
{$_css_hr}
HTML;
          $_section_title = theme(
            'gridli_d_email_template_col_1',
            [
              'h'     => [
                'spacer' => '', // '' no spacer, top or bottom
                'content' => $_temp,
                'align' => ['','left'], // first one is table then td
                'valign' => ['','top'],
                'class' => ['',''],
                'style' => ['',''],
              ],
            ]
          );

          $_bb_with_two_posts = theme(
            'gridli_d_email_template_col_2',
            [
              'h' => [
                'table' => [
                  'align' => '',
                  'valign' => '',
                  'class' => '',
                  'style' => '',
                ],
                'spacer' => 'bottom',
                'content' => [
                  $_full_node_without_image.$_full_node_without_image,
                  $_bb_1
                ],
                'width'   => ['50%', '50%'],
                'align'   => [ 'left', 'right' ],
                'valign'  => [ 'top', 'top' ],
                'class'   => [
                  'articleBlockLeftColumn',
                  'articleBlockRightColumn'
                ],
                'style'   => [ '', '' ],
              ],
            ]
          );

          $_section_content = $_section_title.$_bb_with_two_posts;
          $_section = $_css_section;
          $_section['h']['content'] = $_section_content;
          print theme('gridli_d_email_template_section', $_section);
          ?>
          <!-- Section. -->

          <!-- Section -->
          <?php
          $_section_content = '';
          $_temp =<<<HTML
<h2 style="{$_css_section_title}">Events Split into 2 Columns</h2>
{$_css_hr}
HTML;
          $_section_title = theme(
            'gridli_d_email_template_col_1',
            [
              'h'     => [
                'spacer' => '', // '' no spacer, top or bottom
                'content' => $_temp,
                'align' => ['','left'], // first one is table then td
                'valign' => ['','top'],
                'class' => ['',''],
                'style' => ['',''],
              ],
            ]
          );
          $_item = $event_items;
          $_events_array   = [];
          $_events_content = '';
          for ( $i = 0; $i < count( $_item ); $i ++ ) {
            $_i              = $_item[ $i ];
            $_i_description  = views_trim_text(array(
              'max_length' => 150,
              'word_boundary' => TRUE,
              'ellipsis' => TRUE,
            ), $_i['summary']);
            $_i_content      = <<<HTML
<h4 style="{$_css_h4}"><a href="{$_i['url']}" target="_blank" style="{$_css_h4_a}">{$_i['title']}</a></h4>
<p style="{$_css_p}">{$_i_description}</p>
HTML;
            $_i_content      = theme(
              'gridli_d_email_template_col_1',
              [
                'h' => [
                  'spacer'  => '',
                  // '' no spacer, top or bottom
                  'content' => $_i_content,
                  'align'   => [ '', 'left' ],
                  // first one is table then td
                  'valign'  => [ '', 'top' ],
                  'class'   => [ '', '' ],
                  'style'   => [ '', 'padding-right:0.4em !important;' ],
                ],
              ]
            );
            $_events_array[] = $_i_content;
          }
          $_events_counter = 0;
          while ($_events_counter < count( $_events_array )) {
            $_events_left  = $_events_array[ $_events_counter ];
            $_events_right = '';
            if ( ( $_events_counter + 1 ) < count( $_events_array ) ) {
              $_events_right = $_events_array[ $_events_counter + 1 ];
            }
            $_events_content .= theme(
              'gridli_d_email_template_col_2',
              [
                'h' => [
                  'table'   => [
                    'align'  => '',
                    'valign' => '',
                    'class'  => '',
                    'style'  => '',
                  ],
                  'spacer'  => '',
                  'content' => [
                    $_events_left,
                    $_events_right
                  ],
                  'width'   => ['50%', '50%'],
                  'align'   => [ 'left', 'left' ],
                  'valign'  => [ 'top', 'top' ],
                  'class'   => [
                    'articleBlockLeftColumn',
                    'articleBlockRightColumn'
                  ],
                  'style'   => [ '', '' ], // padding: 0.4em
                ],
              ]
            );
            $_events_counter = $_events_counter+2;
          }

          $_section_content_all_events = theme(
              'nc_custom_templates_component_col_1',
              [
                'h' => [
                  'spacer'  => '',
                  // '' no spacer, top or bottom
                  'content' => $_events_content,
                  'align'   => [ '', 'left' ],
                  // first one is table then td
                  'valign'  => [ '', 'top' ],
                  'class'   => [ '', '' ],
                  'style'   => [ '', '' ],
                ],
              ]
            );

          $_temp =<<<HTML
<a href="{$_test_link}" style="{$_css_small_a}">all events</a>
HTML;
          $_section_content_footer = theme(
            'nc_custom_templates_component_col_1',
            [
              'h' => [
                'spacer'  => '',
                'content' => $_temp,
                'align'   => [ '', 'left' ],
                'valign'  => [ '', 'top' ],
                'class'   => [ '', '' ],
                'style'   => [ '', '' ],
              ],
            ]
          );

          $_section_content = $_section_title.$_section_content_all_events.$_section_content_footer;
          $_section = $_css_section;
          $_section['h']['content'] = $_section_content;
          print theme('gridli_d_email_template_section', $_section);
          ?>
          <!-- Section. -->

          <!-- Section -->
          <?php
          $_section_content = '';
          $_temp =<<<HTML
<h2 style="{$_css_section_title}">Rows with 2 Columns with hr</h2>
{$_css_hr}
HTML;
          $_section_title = theme(
            'gridli_d_email_template_col_1',
            [
              'h'     => [
                'spacer' => '', // '' no spacer, top or bottom
                'content' => $_temp,
                'align' => ['','left'], // first one is table then td
                'valign' => ['','top'],
                'class' => ['',''],
                'style' => ['',''],
              ],
            ]
          );

          for ( $i = 0; $i < count( $event_items ); $i ++ ) {
            $_i              = $event_items[ $i ];
            $_row_left      = <<<html
<h4 style="{$_css_h4}"><a href="{$_test_link}" target="_blank" style="{$_css_h4_a}">{$_i['title']}</a></h4>
html;
            $_pubdate = gmdate("Y-m-d", $_i['pubdate']);
            $_row_right      = <<<html
<p>{$_pubdate}</p>
html;
            $_section_content .= theme(
              'gridli_d_email_template_col_2',
              [
                'h' => [
                  'table'   => [
                    'align'  => '',
                    'valign' => '',
                    'class'  => '',
                    'style'  => '',
                  ],
                  'spacer'  => '',
                  'content' => [
                    $_row_left,
                    $_row_right
                  ],
                  'width'   => ['', ''],
                  'align'   => [ 'left', 'right' ],
                  'valign'  => [ 'top', 'top' ],
                  'class'   => ['',''],
                  'style'   => ['',''], // padding: 0.4em
                ],
              ]
            );
            if ($i < (count($event_items) -1) ) {
              $_section_content .= theme(
                'gridli_d_email_template_col_1',
                [
                  'h' => [
                    'spacer'  => '',
                    // '' no spacer, top or bottom
                    'content' => $_css_hr_grey,
                    'align'   => [ '', 'left' ],
                    // first one is table then td
                    'valign'  => [ '', 'top' ],
                    'class'   => [ '', '' ],
                    'style'   => [ '', '' ],
                  ],
                ]
              );
            }
            else {
              $_temp =<<<HTML
<a href="{$_test_link}" style="{$_css_small_a}">all events</a>
HTML;
              $_section_content .= theme(
                'gridli_d_email_template_col_1',
                [
                  'h' => [
                    'spacer'  => 'bottom',
                    // '' no spacer, top or bottom
                    'content' => $_temp,
                    'align'   => [ '', 'left' ],
                    // first one is table then td
                    'valign'  => [ '', 'top' ],
                    'class'   => [ '', '' ],
                    'style'   => [ '', '' ],
                  ],
                ]
              );
            }
          }
          $_section_content = $_section_title.$_section_content;
          $_section = $_css_section;
          $_section['h']['content'] = $_section_content;
          print theme('gridli_d_email_template_section', $_section);
          ?>
          <!-- Section. -->

        </table>
      </td>
    </tr>
  </table>
</center>
</body>
</html>
