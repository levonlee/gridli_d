<?php
/**
 * Created by PhpStorm.
 * User: Li Li
 * Date: 8/3/2017 2:28 PM
 *
 * $v => [
 * ]
 */

// Sample theme variable
$sample = [
  'v' => [
    'c' => [
      'readmore' => 'font-size:12px !important;color:#e01d25;line-height:120% !important;font-family: Arial, Helvetica, sans-serif;text-decoration: none;',
    ],
    'e' => [
      'p' => 'font-size:12px !important;margin: 1em 0;line-height:120% !important;font-family: Arial, Helvetica, sans-serif;',
    ]
  ],
]
?>
<style type="text/css">

  body, #bodyTable, #bodyCell{
    height:100% !important;
    margin:0;
    padding:0;
    width:100% !important;
  }

  table{
    border-collapse:collapse;
  }

  img, a img{
    border:0;
    outline:none;
    text-decoration:none;
  }

  h1, h2, h3, h4, h5, h6{
    margin:0;
    padding:0;
  }

  p{
  <?php echo $v['e']['p']; ?>
  }

  table, td{
    mso-table-lspace:0pt;
    mso-table-rspace:0pt;
  }

  /* Remove spacing between tables in Outlook 2007 and up. */

  #outlook a{
    padding:0;
  }

  /* Force Outlook 2007 and up to provide a "view in browser" message. */

  img{
    -ms-interpolation-mode:bicubic;
  }

  /* Force IE to smoothly render resized images. */
  body, table, td, p, a, li, blockquote{
    -ms-text-size-adjust:100%;
    -webkit-text-size-adjust:100%;
  }

  /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */

  /* Forces Hotmail and Outlook to display emails at full width. */
  .ExternalClass{
    width:100%;
  }

  .ReadMsgBody{
    width:100%;
  }

  /* Forces Hotmail to display normal line spacing. */
  .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{
    line-height:100%;
  }

  /* Prevents Webkit and Windows Mobile platforms from changing default font sizes. */
  body{
    -webkit-text-size-adjust:none;
    -ms-text-size-adjust:none;
  }

  /* Resets all body margins and padding to "0" for good measure. */
  body{
    margin:0;
    padding:0;
  }

  /* Resolves webkit padding issue. */
  table{
    border-spacing:0;
  }

  /* Resolves the Outlook 2007, 2010, and Gmail td padding issue. */
  table td{
    border-collapse:collapse;
  }

  *{
    -webkit-transition:width 0.5s, height 0.5s, background-color 0.5s, -webkit-transform 0.5s;
    transition:width 0.5s, height 0.5s, background-color 0.5s, transform 0.5s;
  }

  h1, h2, h3, p, a{
    font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
  }

  h1, h1 a{
    color:#D83826;
    font-size:44px;
    font-weight:100;
    line-height:115%;
    text-align:left;
  }

  h2, h2 a{
    color:#606060;
    font-size:34px;
    font-weight:100;
    line-height:100%;
    text-align:left;
    padding-top:10px;
  }

  h3, h3 a{
    color:#D83826;
    font-size:30px;
    font-weight:100;
    line-height:100%;
    text-align:left;
  }

  body,
  #bodyTable,
  #headerFWContainer,
  #bottomLeaderboardContainer,
  #articleContainer,
  #partnershipContainer,
  #productContainer,
  #videoContainer,
  #editorPicksContainer,
  #blogsContainer,
  #eventContainer,
  #footerWidgetContainer,
  #footerContainer{
    background-color:#ffffff;
  }

  #emailContainer{
    width:100%;
  }

  .headerHeading,
  .articleBlockContent,
  .partnershipBlockHeading,
  .partnershipBlockContent,
  .productBlockHeading,
  .productBlockContent,
  .videoBlockHeading,
  .videoBlockContent,
  .editorPicksBlockHeading,
  .editorPicksBlockContent,
  .blogsBlockHeading,
  .blogsBlockContent,
  .eventBlockHeading,
  .eventBlockContent,
  .footerWidgetContent,
  .footerBlockContent{
    font-family:"Helvetica Neue", Helvetica, Arial, sans-serif !important;
  }

  h3{
    line-height:20px !important;
  }

  p{
    line-height:20px !important;
  }

  a{
    outline:none;
    text-decoration:none;
    border:none;
    padding:0;
    margin:0;
  }

  .text-center{
    text-align:center;
  }
  .readmore {
  <?php echo $v['c']['readmore']; ?>
  }

  div[style*="margin: 16px 0"]{
    margin:0 !important;
  }

  /*--------- View Online ------*/
  .viewOnlineContent p{
    color:#6A6868;
    font-size:8pt;
  }

  .viewOnlineContent p a{
    color:#000000;
    text-decoration:underline;
    outline:none;
  }

  /*---------Header ------*/
  .headerHeading{
    font-size:14px;
    text-align:right;
    padding-right:20px;
    font-variant:small-caps;
    font-family:sans-serif !important;
  }

  /*------- Full width image (640px)  -----*/
  .headerFWBlockContent{
    margin:0;
    padding:0;
    padding-top:5px;
    padding-bottom:5px;
  }

  .headerFWBlock{
    background-color:#FFF !important;
  }

  .headerFWImg{
    width:100%;
  }

  .headerImgMobile{
    display:none !important;
    mso-hide:all !important;
  }

  /*------- News ----------*/
  #articleBlock, .sectionTable{
    background-color:#FFF !important;
  }

  #articleBlockCell{
    padding-left:0px;
    padding-right:0px;
    padding-top:5px;
  }

  .articleBlockHeading h2{
    font-size:28px;
  }

  .articleBlockContent{
    font-size:18px;
    margin-bottom:10px !important;
  }

  .articleBlockContent p{
    margin:0;
    font-size:14px;
    color:#333333;
    margin-top:11px !important;
    margin-bottom:7px !important;
    font-family:"Helvetica Neue", Helvetica, Arial, sans-serif !important;
  }

  .articleBlockContent h3 a{
    color:#333333;
    font-weight:bold;
    font-size:20px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
  }

  .articleBlockFullColumn{
    padding-bottom:10px !important;
  }

  .articleBlockContent .articleImg{
    width:140px;
    margin-bottom:26px;
  }

  .articleBlockContent .articleInfo p{
    line-height:15px !important;
  }

  /*------- Partnership ----------*/
  #partnershipBlock{
    background-color:#FFF !important;
  }

  #partnershipBlockCell{
    padding-left:0px;
    padding-right:0px;
  }

  .partnershipBlockContent{
    border:2px solid #555;
  }

  .partnershipBlockContent p{
    color:#555555;
    font-family:sans-serif !important;
  }

  .partnershipBlockHeading{
    font-size:15px;
    color:#555555;
    font-family:sans-serif !important;
  }

  .partnershipBlockContentHeading a{
    color:#285c95;
    font-weight:normal;
    font-variant:small-caps;
    font-size:15px;
    padding-top:0.5em;
    padding-bottom:0.5em;
    font-family:sans-serif !important;
  }

  /*------- Products ------------*/
  #productBlock{
    background-color:#FFF !important;
  }

  #productBlockCell{
    padding-left:0px;
    padding-right:0px;
    padding-top:15px;
  }

  .productBlockHeading h2{
    font-size:22px;
    font-family:sans-serif !important;
    padding-bottom:5px;
  }

  .productBlockContent{
    font-size:18px;
  }

  .productBlockContent p{
    margin:0;
    font-size:10pt;
    color:#555555;
    margin-top:11px !important;
    margin-bottom:7px !important;
    font-family:sans-serif !important;
  }

  .productBlockContent h3 a{
    color:#285c95;
    font-weight:normal;
    font-size:12pt;
    font-family:sans-serif !important;
  }

  /*------- Videos ------------*/
  #videoBlock{
    background-color:#ffffff !important;
  }

  #videoBlockCell{
    padding-left:0px;
    padding-right:0px;
    padding-top:15px;
  }

  .videoBlockHeading h2{
    font-size:22px;
    font-family:sans-serif !important;
    padding-bottom:5px;
  }

  .videoBlockContent{
    font-size:18px;
  }

  .videoBlockContent p{
    margin:0;
    font-size:10pt;
    color:#555555;
    margin-top:11px !important;
    margin-bottom:7px !important;
    font-family:sans-serif !important;
  }

  .videoBlockContent h3 a{
    color:#285c95;
    font-weight:normal;
    font-size:12pt;
    font-family:sans-serif !important;
  }

  .videoBlockContent .videoImg{
    width:140px;
  }

  .videoBlockContent .videoInfo p{
    line-height:15px !important;
  }

  /*------- Editor's Picks ------------*/
  #editorPicksBlock{
    background-color:#ffffff !important;
  }

  #editorPicksBlockCell{
    padding-left:0px;
    padding-right:0px;
    padding-top:15px;
  }

  .editorPicksBlockContent{
    font-size:18px;
  }

  .editorPicksBlockContent p{
    margin:0;
    font-size:10pt;
    color:#555555;
    margin-top:11px !important;
    margin-bottom:7px !important;
    font-family:sans-serif !important;
  }

  .editorPicksBlockContent h3 a{
    color:#285c95;
    font-weight:normal;
    font-size:12pt;
    font-family:sans-serif !important;
  }

  .editorPicksBlockContent .editorPicksInfo p{
    margin-top:0 !important;
  }

  /*------- Industry Blogs ------------*/
  #blogsBlock{
    background-color:#ffffff !important;
  }

  #blogsBlockCell{
    padding-left:0px;
    padding-right:0px;
    padding-top:15px;
  }

  .blogsBlockHeading h2{
    font-size:22px;
    font-family:sans-serif !important;
    padding-bottom:5px;
  }

  .blogsBlockContent{
    font-size:18px;
  }

  .blogsBlockContent p{
    margin:0;
    font-size:10pt;
    color:#555555;
    margin-top:11px !important;
    margin-bottom:7px !important;
    font-family:sans-serif !important;
  }

  .blogsBlockContent h3 a{
    color:#285c95;
    font-weight:normal;
    font-size:12pt;
    font-family:sans-serif !important;
  }

  .blogsBlockContent .blogsImg{
    width:80px;
    margin-bottom:15px;
  }

  .blogsBlockContent .blogsInfo p{
    line-height:15px !important;
  }

  /*-------Events  ----------------*/
  #eventBlock{
    background-color:#FFF !important;
  }

  #eventBlockCell{
    padding-left:0px;
    padding-right:0px;
    padding-bottom:15px;
  }

  .eventBlockHeading h2{
    font-size:22px;
    font-family:sans-serif !important;
  }

  .eventBlockContent{
    font-size:18px;
  }

  .eventBlockContentLeft{
    padding-right:1em;
  }

  .eventBlockContent p{
    margin:0;
    font-size:10pt;
    color:#555555;
    line-height:20px;
    margin-top:11px !important;
    margin-bottom:7px !important;
    font-family:sans-serif !important;
  }

  .eventBlockContent h3 a{
    color:#285c95;
    font-weight:normal;
    font-size:12pt;
    line-height:20px;
    font-family:sans-serif !important;
  }

  .eventDate{
    color:#555555;
    font-size:10pt;
    font-family:sans-serif !important;
  }

  /*------ Footer --------------*/
  #footerWidgetBlock{
    background-color:#E3E3E3;
  }

  #footerWidgetBlockCell{
    padding-left:15px;
    padding-top:15px;
    padding-right:15px;
    padding-bottom:15px;
  }

  .footerWidgetContent{
    color:#555555;
    font-family:sans-serif !important;
    font-size:13px;
    line-height:20px;
  }

  .footerWidgetMenuItem{
    padding:0;
    color:#555555;
    font-family:sans-serif;
    font-size:13px;
    line-height:20px;
  }

  #footerWidgetMenu{
    padding-top:2em;
  }

  /*------ Newcom --------------*/
  #footerBlockCell{
    padding-left:15px;
    padding-top:0px;
    padding-right:15px;
    padding-bottom:15px;
  }

  .footerBlockContent{
    color:#333333;
    font-size:12px;
    font-family:sans-serif !important;
  }

  /* Newsletter Preview */
  tbody{
    border-top:none;
  }

  td, th{
    padding:0px;
  }

  tr td:last-child{
    border-right:none;
  }

  td.partnershipBlockContent{
    border-right:2px solid #555 !important;
  }

  td{
    vertical-align:top !important;
  }

  td.productImg{
    vertical-align:middle !important;
  }

  table{
    margin:0;
  }

  /*////// DEVICE HANDLING //////*/

  @media only screen and (max-width:640px){

    body{
      width:100% !important;
      min-width:100% !important;
    }

    td[class="headerHeading"]{
      padding:0 !important;
      padding-bottom:20px !important;
      text-align:right;
    }

    td[id="headerFWContainer"],
    td[id="articleContainer"],
    td[id="partnershipContainer"],
    td[id="productContainer"],
    td[id="videoContainer"],
    td[id="editorPicksContainer"],
    td[id="blogsContainer"],
    td[id="eventContainer"],
    td[id="bottomLeaderboardContainer"]{
      padding-right:10px !important;
      padding-left:10px !important;
    }

    td[id="footerWidgetContainer"], td[id="footerContainer"]{
      padding-right:0px !important;
      padding-left:0px !important;
    }

    table[id="headerFWBlock"],
    table[id="headerFWBlockContent"],
    table[id="articleBlock"],
    table[id="partnershipBlock"],
    table[id="productBlock"],
    table[id="videoBlock"],
    table[id="editorPicksBlock"],
    table[id="blogsBlock"],
    table[id="eventBlock"],
    table[id="footerWidgetBlock"],
    table[id="footerBlock"],
    .sectionTable{
      max-width:640px !important;
      width:100% !important;
    }

    img[class="headerFWImg"]{
      display:none !important;
    }

    img[class="headerImgMobile"]{
      display:block !important;
      mso-hide:all !important;
      margin:auto !important;
      padding-bottom:0.4em;
    }

    tr[class=mobile]{
      display:table-row !important;
      width:300px !important;
      height:90px !important;
      overflow:visible !important;
      float:none !important;
      margin:auto !important;
    }

  }

  @media only screen and (max-width:480px){
    /*////// RESET STYLES //////*/
    td[id="viewOnlineContainer"],
    td[id="headerFWContainer"],
    td[id="articleContainer"],
    td[id="partnershipContainer"],
    td[id="productContainer"],
    td[id="videoContainer"],
    td[id="editorPicksContainer"],
    td[id="blogsContainer"],
    td[id="eventContainer"]{
      padding-right:10px !important;
      padding-left:10px !important;
    }

    td[id="footerWidgetContainer"],
    td[id="footerContainer"]{
      padding-right:0px !important;
      padding-left:0px !important;
    }

    table[id="viewOnlineBlock"],
    table[id="headerFWBlock"],
    table[id="articleBlock"],
    table[id="partnershipBlock"],
    table[id="productBlock"],
    table[id="videoBlock"],
    table[id="editorPicksBlock"],
    table[id="blogsBlock"],
    table[id="eventBlock"],
    table[id="bottomLeaderboardBlock"],
    table[id="footerWidgetBlock"],
    table[id="footerBlock"],
    .sectionTable{
      max-width:480px !important;
      width:100% !important;
    }

    /*////// CLIENT-SPECIFIC STYLES //////*/
    body{
      width:100% !important;
      min-width:100% !important;
    }

    /* Force iOS Mail to render the email at full width. */
    /*////// GENERAL STYLES //////*/
    h1{
      font-size:34px !important;
      text-align:center !important;
    }

    h2{
      font-size:22px !important;
    }

    h3{
      font-size:20px !important;
    }

    /* // Header // */
    td[class="headerHeading"]{
      display:block !important;
      text-align:right !important;
      padding:0 !important;
      padding-bottom:10px !important;
    }

    h1{
      text-align:center;
    }

    h2{
      padding-left:0px !important;
      padding-right:10px !important;
    }

    p{
      padding-left:0px !important;
      padding-right:10px !important;
    }

    /* // Alternate mobile image (640px) // */
    tr[class=mobile]{
      display:table-row !important;
      width:300px !important;
      height:90px !important;
      overflow:visible !important;
      float:none !important;
      margin:auto !important;
    }
    td[class="mobilecenter"] {
      text-align: center !important;
    }
    /* News */
    td[class="articleBlockLeftColumn"],
    td[class="articleBlockRightColumn"]{
      display:block !important;
      width:100% !important;
      padding-bottom:10px;
    }

    td[class="articleImg"]{
      vertical-align:top;
      display:none;
    }

    .articleDiv{
      display:none;
    }

    /* Partnership */
    h2[class="partnershipBlockContentHeading"]{
      font-size:18px !important;
      padding-bottom:15px;
    }

    h2[class="partnershipBlockContentHeading"] a{
      padding:0em;
    }

    td[class="partnershipBlockContent"]{
      text-align:center !important;
    }

    td[class="partnershipBlockContentLeft"] {
      display:block !important;
      width:100% !important;
    }

    td[class="partnershipBlockContentRight"]{
      display:block !important;
      width:100% !important;
    }

    /* Products */
    td[class="productBlockRightColumn"]{
      text-align:center !important;
    }

    td[class="productBlockLeftColumn"],
    td[class="productBlockRightColumn"]{
      display:block !important;
      width:100% !important;
      padding-bottom:10px;
    }

    td[class="productImg"]{
      float:left;
    }

    td[class="productInfo"]{
      float:left;
    }

    /* Videos */
    td[class="videoBlockRightColumn"]{
      text-align:center !important;
    }

    td[class="videoBlockLeftColumn"],
    td[class="videoBlockRightColumn"]{
      display:block !important;
      width:100% !important;
      padding-bottom:10px;
    }

    td[class="videoImg"]{
      vertical-align:top;
    }

    td[class="videoInfo"]{
      vertical-align:top;
    }

    /* Editor's Picks */
    td[class="editorPicksBlockRightColumn"]{
      text-align:center !important;
    }

    td[class="editorPicksBlockLeftColumn"],
    td[class="editorPicksBlockRightColumn"]{
      display:block !important;
      width:100% !important;
      padding-bottom:10px;
    }

    td[class="editorPicksImg"]{
      vertical-align:top;
    }

    td[class="editorPicksInfo"]{
      vertical-align:top;
      margin:0;
    }

    .editorPicksBlockContent .editorPicksImg{
      display:none;
    }

    /* Industry Blogs */
    td[class="blogsBlockRightColumn"]{
      text-align:center !important;
    }

    td[class="blogsBlockLeftColumn"],
    td[class="blogsBlockRightColumn"]{
      display:block !important;
      width:100% !important;
      padding-bottom:10px;
    }

    td[class="blogsImg"]{
      vertical-align:top;
    }

    td[class="blogsInfo"]{
      vertical-align:top;
    }

    .blogsBlockContent .blogsImg{
      display:none;
    }

    .blogsDiv{
      display:none;
    }

    /* Events */
    .eventBlockContentLeft{
      width:100% !important;
      float:left;
    }

    .eventDate{
      width:100% !important;
      float:left;
    }

    /* Big box Ads */
    td[class="bigAds"]{
      text-align:center;
    }

    /* Footer */
    td[class="footerWidgetContent"]{
      display:block !important;
      width:100% !important;
      text-align:center;
      padding-top:10px !important;
    }
  }
</style>