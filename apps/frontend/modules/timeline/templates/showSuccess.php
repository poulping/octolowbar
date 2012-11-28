
<div class="m-fullview">
    <?php include_partial('content'.sfInflector::camelize($content->getType()), array('content' => $content, 'is_index' => false)) ?>
    <?php if ($content->getContentAdditional()) : ?>

    <div class="content">
    <?php echo $content->getContentAdditional() ?>
    </div>
    <?php endif; ?>

    <?php if ($content->getComments()) : ?>
    <ul class="m-comments">
    <?php foreach($content->getComments() as $comment) : ?>
        <li><strong><?php echo $comment->getUsername() ?></strong> : <?php echo $comment->getContent() ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <?php echo form_tag('@process_comment?for_content_id='.$content->getId()) ?>
        <table>
            <?php echo $comment_form?>
            <tr>
                <td colspan="2"><input type="submit" value="send" /></td>
            </tr>
        </table>
    </form>
</div>