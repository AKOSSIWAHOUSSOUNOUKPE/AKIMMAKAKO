<?php
/* Smarty version 4.3.1, created on 2024-07-16 08:10:44
  from 'C:\wamp64\www\prestashop\admin674dldcimkalnq6chmj\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66962b0496e8b7_94217685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e1e50afc5ae134e0fb46d30d0497199f4c992f1' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin674dldcimkalnq6chmj\\themes\\default\\template\\content.tpl',
      1 => 1720431441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66962b0496e8b7_94217685 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
