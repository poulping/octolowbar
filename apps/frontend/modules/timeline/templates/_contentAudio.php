<?php if ($is_index) : ?>
<iframe width="560" height="315" src="<?php echo $content->getVideoId()?>" frameborder="0" allowfullscreen></iframe>
<?php else: ?>
<div class="img-wrapper"><img src="http://img.youtube.com/vi/<?php echo $content->getVideoId()?>/hqdefault.jpg"></div>
<?php endif; ?>