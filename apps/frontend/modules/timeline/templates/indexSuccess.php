<?php if ($contents) : ?>
<div id="timeline">

    <div class="m-col l-col-1" data-col="0">
    <?php
        $col = 0;
    ?>
    <?php foreach ($contents as $content) : ?>
        <article data-remote="/timeline/item?id=1" data-col="<?php echo ($col++ % 2);?>" class="m-item l-<?php echo $content->getType()?>">
            <header>
                <div class="name"><?php echo ucfirst($content->getUsername())?></div>
                <div class="date">November 2008</div>
                <h1 class="title"><?php echo $content->getTitle()?></h1>
            </header>
            <?php include_partial('content'.sfInflector::camelize($content->getType()), array('content' => $content)) ?>
            <div class="commentsnb"><?php echo $content->getComments()->count()?> comments</div>
        </article>
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