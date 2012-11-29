<div class="m-fullview">

    <div class="content">
        <h2>Post title</h2>
        <?php include_partial('content'.sfInflector::camelize($content->getType()), array('content' => $content, 'is_index' => false)) ?>
        <?php if ($content->getContentAdditional()) : ?>

            <?php echo $content->getContentAdditional() ?>
        <?php endif; ?>
    </div>

    <?php if ($content->getComments()) : ?>
    <ul class="m-comments">
    <?php foreach($content->getComments() as $comment) : ?>
        <li><strong><?php echo $comment->getUsername() ?></strong> : <?php echo $comment->getContent() ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <?php echo form_tag('@process_comment?for_content_id='.$content->getId()) ?>
        <table>
            <h3>Say something:</h3>
            <?php echo $comment_form?>
            <tr>
                <td colspan="2"><input type="submit" id="submitcomment" value="Add it" /></td>
            </tr>
        </table>
    </form>
</div>