<?php if ($contents) : ?>
<div id="timeline">
    <a href="/frontend_dev.php/timeline/show/1" data-target="#modal-item-view" data-toggle="modal">Launch demo modal</a>
    <a href="/frontend_dev.php/timeline/show/4" data-target="#modal-item-view" data-toggle="modal">Launch demo modal</a>
    <?php $col = 0; ?>
    <?php $previous_year = false; ?>
    <?php foreach ($contents as $content) : $col++; ?>

        <?php if ($previous_year != $content->getDateTimeObject('date_published')->format('Y')) : ?>
            <?php include_partial('badge', array('content' => $content)) ?>here
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

<!-- Modal -->
<div id="modal-item-view" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
        <!-- Content is remotely added here -->
    </div>
    <div class="modal-footer">&nbsp;</div>
</div>

<?php endif; ?>