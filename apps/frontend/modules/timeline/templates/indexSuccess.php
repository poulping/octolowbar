<?php if ($contents) : ?>
<div id="timeline">
    <?php $col = 0; ?>
    <?php $previous_year = false; ?>
    <?php foreach ($contents as $content) : $col++; ?>

        <?php if ($previous_year != $content->getDateTimeObject('date_published')->format('Y')) : ?>
            <?php include_partial('badge', array('content' => $content)) ?>
            <?php $previous_year = $content->getDateTimeObject('date_published')->format('Y') ?>
        <?php endif; ?>

        <?php include_partial('contentContainer', array('content' => $content, 'is_index' => true, 'col' => $col)); ?>
        <?php if ($col >=2) {$col=0;} ?>
    <?php endforeach; ?>
    <div class="m-col l-col-1" data-col="1">
    </div>
    <div class="m-col l-col-2" data-col="2">
    </div>


</div>


<?php endif; ?>


<div class="m-notifications"></div>