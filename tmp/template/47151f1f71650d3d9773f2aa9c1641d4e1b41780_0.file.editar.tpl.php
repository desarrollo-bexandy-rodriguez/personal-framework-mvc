<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-12 23:58:58
  from "/home/brodriguez/public_html/framework-mvc/views/post/editar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57ae9b025b3219_51432524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47151f1f71650d3d9773f2aa9c1641d4e1b41780' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/post/editar.tpl',
      1 => 1470884271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ae9b025b3219_51432524 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="content">
  <div class="container">
    <div class="row box-gray">

      <form role="form" id="form1" action="" method="post" >

        <input type="hidden" name="guardar" value="1">

        <div class="form-group">
          <label>Titulo:</label>
          <br>
          <input type="text" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" >
        </div>

        <div class="form-group">
          <label>Cuerpo:</label>
          <br>
          <textarea name="cuerpo" ><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
        </div>

        <button type="submit" class="btn btn-theme">Guardar</button>

      </form>

    </div>
  </div>
</section>
<?php }
}
