<?php if ($is_index) : ?>
<div class="img-wrapper"><img src="http://img.youtube.com/vi/<?php echo $content->getVideoId()?>/hqdefault.jpg"></div>
<?php else: ?>
<iframe width="490" height="276" src="http://www.youtube.com/embed/<?php echo $content->getVideoId()?>?rel=0" frameborder="0" allowfullscreen></iframe>
<?php endif; ?>