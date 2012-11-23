<?php include_partial('content'.sfInflector::camelize($content->getType()), array('content' => $content, 'is_index' => false)) ?>
<?php if ($content->getContentAdditional()) : ?>

<?php echo $content->getContentAdditional() ?>

<?php endif; ?>

<?php if ($content->getComments()) : ?>

<?php foreach($content->getComments() as $comment) : ?>
    <div>User: <?php echo $comment->getUsername() ?></div>
    <div>Comment: <?php echo $comment->getContent() ?></div>
    <?php endforeach; ?>
<?php endif; ?>

<?php echo form_tag('process_comment') ?>
<table>
<?php echo $comment_form?>
<tr><td colspan="2"><input type="submit" value="send" /></td></tr>
</table>
</form>