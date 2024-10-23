<?php
/* Smarty version 4.5.4, created on 2024-10-23 13:09:57
  from 'C:\laragon\www\CRM24\vtigercrm\layouts\v7\modules\Products\RelatedList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6718f5a5bcf023_34683681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c68574cb02671c8e2e24575b0054de3a0bce59e3' => 
    array (
      0 => 'C:\\laragon\\www\\CRM24\\vtigercrm\\layouts\\v7\\modules\\Products\\RelatedList.tpl',
      1 => 1727609712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6718f5a5bcf023_34683681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'RelatedList.tpl' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_assignInScope('RELATED_MODULE_NAME', $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));
if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Products' && $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value == 'Products' && $_smarty_tpl->tpl_vars['TAB_LABEL']->value === 'Product Bundles' && $_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value && $_smarty_tpl->tpl_vars['PARENT_RECORD']->value->isBundle()) {?><div class="bundleCostContainer"><?php if ($_smarty_tpl->tpl_vars['SUB_PRODUCTS_COSTS_INFO']->value) {
$_smarty_tpl->_subTemplateRender(vtemplate_path('BundleCostView.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></div><?php }
}
}
