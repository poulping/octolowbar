<ul>
<?php foreach (ContentTable::$types as $type) : ?>
    <li><?php echo link_to($type, '@add_content_type?content_type='.$type, array()) ; ?></li>
<?php endforeach; ?>
</ul>
<?php if ($sf_user->hasFlash('content_add.success')) : ?>
<h2><?php echo $sf_user->getFlash('content_add.success')?></h2>
<?php endif; ?>
<?php if ($form) : ?>
<?php echo form_tag('@add_content_'.$form->getObject()->getSubType(), array('multipart' => $form->isMultipart())) ?>
<table>
    <?php echo $form ?>
    <tr>
        <td coslpan="2"><input type="submit" value="Send" /></td>
    </tr>
</table>
</form>
<?php endif; ?>
