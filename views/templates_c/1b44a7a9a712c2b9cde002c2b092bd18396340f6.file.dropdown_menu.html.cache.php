<?php /* Smarty version Smarty-3.1.8, created on 2013-11-29 19:24:56
         compiled from "/home/fabioalvaro/www//sistemax/views/templates/comuns/dropdown_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:222978092529906289cc831-13234596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b44a7a9a712c2b9cde002c2b092bd18396340f6' => 
    array (
      0 => '/home/fabioalvaro/www//sistemax/views/templates/comuns/dropdown_menu.html',
      1 => 1381922847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222978092529906289cc831-13234596',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_529906289cdd83_80264132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529906289cdd83_80264132')) {function content_529906289cdd83_80264132($_smarty_tpl) {?><ul class="dropdown-menu">
  <li><a href="#">Ação</a></li>
  <li><a href="#">Another action</a></li>
  <li><a href="#">Something else here</a></li>
  <li class="divider"></li>
  <li class="dropdown-header">Envio de SMS</li>
  <li><a href="/paineldecontrole/sms">Teste de Envio</a></li>
  <li><a href="#">Saldo dos Clientes</a></li>
</ul><?php }} ?>