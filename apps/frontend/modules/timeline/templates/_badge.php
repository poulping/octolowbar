<div data-time="<?php echo $content->getDateTimeObject('date_published')->format('U');?>" class="js-badge m-year-badge" data-badge="<?php echo $content->getDateTimeObject('date_published')->format('y')?>">
    <div class="year"><?php echo $content->getDateTimeObject('date_published')->format('y')?></div>
    <div class="icon"></div>
</div>