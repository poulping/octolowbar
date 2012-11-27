<?php if ($is_index) : ?>
<div class="txt-wrapper"><?php echo truncate_text($content->getContent(), 300)?></div>
<?php else: ?>
<div class="txt-wrapper"><?php echo auto_link_text(simple_format_text($content->getContent()))?></div>
<?php endif; ?>