<?php /* Smarty version Smarty-3.1.19, created on 2019-02-22 14:54:32
         compiled from "D:\wamp\www\projects\ps\sun-device.local\modules\posslideshow\pie-timer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320905c6fff18951155-96236059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5de539efa350b27215846203c18aa19c484a577e' => 
    array (
      0 => 'D:\\wamp\\www\\projects\\ps\\sun-device.local\\modules\\posslideshow\\pie-timer.tpl',
      1 => 1534502030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320905c6fff18951155-96236059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slideOptions' => 0,
    'pietimer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c6fff189dbeb7_20903683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6fff189dbeb7_20903683')) {function content_5c6fff189dbeb7_20903683($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pietimer'] = new Smarty_variable(($_smarty_tpl->tpl_vars['slideOptions']->value['pause_time']/2.1), null, 0);?>
<style type="text/css">
.pie_out {
  position: absolute;
  opacity: 0;
  bottom: 15px;
  right: 15px;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background-color: #000;
  overflow: hidden;
  z-index: 17;
  -webkit-animation: piein 1000ms ease forwards ; 
  -moz-animation: piein 1000ms ease forwards ; 
  -ms-animation: piein 1000ms ease forwards ; 
  -o-animation: piein 1000ms ease forwards ; 
  animation: piein 1000ms ease forwards ;
}
.demi-droit,
.demi-gauche {
  position: absolute;
  top: 0;
  bottom: 0;
  background-color: transparent;
  overflow: hidden;
}
.demi-droit:after,
.demi-gauche:after {
  content: '';
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: #c92c61;
}
.demi-droit {
  left: 50%;
  right: 0;
}
.demi-droit:after {
  right: 100%;
  transform-origin: center right;
  animation: turn <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['pause_time']!='') {?><?php echo $_smarty_tpl->tpl_vars['pietimer']->value;?>
<?php } else { ?>2500<?php }?>ms linear forwards;
}
.demi-gauche {
  left: 0;
  right: 50%;
}
.demi-gauche:after {
  left: 100%;
  transform-origin: center left;
  animation: turn <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['pause_time']!='') {?><?php echo $_smarty_tpl->tpl_vars['pietimer']->value;?>
<?php } else { ?>2500<?php }?>ms <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['pause_time']!='') {?><?php echo $_smarty_tpl->tpl_vars['pietimer']->value;?>
<?php } else { ?>2500<?php }?>ms linear forwards;
}
@-moz-keyframes turn {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(180deg);
  }
}
@-webkit-keyframes turn {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(180deg);
  }
}
@-o-keyframes turn {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(180deg);
  }
}
@keyframes turn {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(180deg);
  }
}
</style><?php }} ?>
