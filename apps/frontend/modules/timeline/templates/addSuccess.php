<ul>
<?php foreach (ContentTable::$types as $type) : ?>
    <li><?php echo link_to($type, '@add_content_type?content_type='.$type, array()) ; ?></li>
<?php endforeach; ?>
</ul>
<table>
    <tr><?php echo $form ?></tr>
</table>
