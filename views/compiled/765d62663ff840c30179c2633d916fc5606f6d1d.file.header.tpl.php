<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 14:29:19
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1946557fb69d00e2c14-11544586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1478093321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1946557fb69d00e2c14-11544586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fb69d00ed575_60515923',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fb69d00ed575_60515923')) {function content_57fb69d00ed575_60515923($_smarty_tpl) {?><div class="sticky">
<header>

<nav>
      <div class="bannerimg">
      <img src="banner.png" alt="" />
    </div>
  <ul>
    <!--<li id="logoli"><a id="niks" href="?action=home"><img src="xlogo.png" alt="xlogo" /></a></li>
    -->
    <li><a href="?action=home">Home</a></li>
    <li><a href="?action=tourdates">Tour dates</a></li>
    <li><a href="?action=audio">X Album</a></li>
    <li><a href="?action=search">Search</a></li>
  </ul>
  <div class="handle"><img src="edxlogo.png" alt="edxlogo" id="edxlogo" /><img src="hamburger.png" alt="hamburger" id="hamburgericon"/></div>
  </nav>
</header>
</div>
<script>
  $('.handle').on('click', function(){
    $('nav ul').toggleClass('showing');
  });
</script>
<?php }} ?>
