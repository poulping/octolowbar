<?php if ($contents) : ?>
<div id="timeline">

    <?php
        $col = 0;
    ?>
    <?php foreach ($contents as $content) : $col++; ?>
        <article data-remote="<?php echo url_for('@show_content?id='.$content->getId())?>" data-col="<?php echo $col;?>" class="m-item l-<?php echo $content->getType()?> fade">
            <header>
                <div class="name"><?php echo ucfirst($content->getUsername())?></div>
                <div class="date"><?php echo $content->getDateTimeObject('date_published')->format('m Y');?></div>
                <h1 class="title"><?php echo link_to($content->getTitle(),'@show_content?id='.$content->getId())?></h1>
            </header>
            <?php include_partial('content'.sfInflector::camelize($content->getType()), array('content' => $content, 'is_index' => true)) ?>
            <div class="commentsnb"><?php echo $content->getComments()->count()?> comments</div>
        </article>
        <?php if ($col >=2) {$col=0;} ?>
    <?php endforeach; ?>
    <div class="m-col l-col-1" data-col="1"></div>
    <div class="m-col l-col-2" data-col="2"></div>
</div>

<!-- Modal -->
<div id="modal-item-view" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
</div>

<?php endif; ?>