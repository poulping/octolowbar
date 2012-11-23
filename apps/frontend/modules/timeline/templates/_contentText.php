<?php if ($is_index) : ?>
<?php echo truncate_text($content->getContent(), 50, link_to('... see more barlow', '@show_content?id='.$content->getId()))?>
<?php else: ?>
<div class="img-wrapper"><?php echo auto_link_text(simple_format_text($content->getContent()))?></div>
<?php endif; ?>