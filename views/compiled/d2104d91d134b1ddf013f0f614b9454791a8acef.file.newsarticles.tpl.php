<?php /* Smarty version Smarty-3.1.18, created on 2016-10-27 10:45:54
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:406457fb6b5998d675-74452463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1477557930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '406457fb6b5998d675-74452463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fb6b59a5bd49_65927202',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fb6b59a5bd49_65927202')) {function content_57fb6b59a5bd49_65927202($_smarty_tpl) {?><div class="pagination">
  <ul>
    <li><a href="?action=home&pagenr=2">2</a></li>
    <li><a href="?action=home&pagenr=1">1</a></li>

  </ul>
</div>


<section id="news">
  <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
  <article><h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
    <img src='<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
'>
    <br>
    <content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content>
    <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date_created'];?>
</p>
  </article>
  <?php } ?>
</section>
<?php }} ?>
