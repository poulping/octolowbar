<?php if ($contents) : ?>
<div id="timeline">

    <div class="m-col l-col-1" data-col="0">
    <?php
        $col = 0;
    ?>
    <?php foreach ($contents as $content) : $col++; ?>
        <?php include_partial('contentContainer', array('content' => $content, 'is_index' => true)); ?>

            <?php if ($col >=2) {$col=0;} ?>
    <?php endforeach; ?>
    </div>
    <div class="m-col l-col-2" data-col="1">

        <article data-remote="/timeline/item?id=1" data-col="1" class="m-item l-audio">
            <div class="name">Barlow</div>
            <h1 class="title">my test</h1>
            <!-- <iframe width="560" height="315" src="http://www.youtube.com/embed/QSETdYyOGig" frameborder="0" allowfullscreen></iframe> -->

            <div class="img-wrapper"><img src="http://img.youtube.com/vi/QSETdYyOGig/hqdefault.jpg"></div>            <div class="commentsnb">0 comments</div>
        </article>

    </div>
</div>
<?php endif; ?>