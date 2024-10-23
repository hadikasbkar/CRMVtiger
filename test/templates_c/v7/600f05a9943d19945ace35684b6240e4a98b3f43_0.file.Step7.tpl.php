<?php
/* Smarty version 4.5.4, created on 2024-10-23 12:29:40
  from 'C:\laragon\www\CRM24\vtigercrm\layouts\v7\modules\Install\Step7.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6718ec34ad8134_65444546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '600f05a9943d19945ace35684b6240e4a98b3f43' => 
    array (
      0 => 'C:\\laragon\\www\\CRM24\\vtigercrm\\layouts\\v7\\modules\\Install\\Step7.tpl',
      1 => 1727609712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6718ec34ad8134_65444546 (Smarty_Internal_Template $_smarty_tpl) {
?>
<center><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_LOADING_PLEASE_WAIT' ));?>
...</center>

<form class="form-horizontal" name="step7" method="post" action="?module=Users&action=Login">
	<img src="//stats.vtiger.com/stats.php?uid=<?php echo $_smarty_tpl->tpl_vars['APPUNIQUEKEY']->value;?>
&v=<?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>
&type=I&industry=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['INDUSTRY']->value ));?>
" alt='' title='' border=0 width='1px' height='1px'>
	<input type=hidden name="username" value="admin" >
	<input type=hidden name="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" >
</form>
<?php echo '<script'; ?>
 type="text/javascript">
	jQuery(function () { /* Delay to let page load complete */
		setTimeout(function () {
			jQuery('form[name="step7"]').submit();
		}, 150);
	});
<?php echo '</script'; ?>
>
<?php }
}
