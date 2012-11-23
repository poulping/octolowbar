<?php if ($is_index) : ?>
<div class="img-wrapper"><img src="http://img.youtube.com/vi/<?php echo $content->getVideoId()?>/hqdefault.jpg"></div>
<?php else: ?>
<iframe width="560" height="315" src="http://youtube.com/<?php echo $content->getVideoId()?>" frameborder="0" allowfullscreen></iframe>
<?php endif; ?>