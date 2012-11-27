<article data-time="<?php echo $content->getDateTimeObject('date_published')->format('U');?>" data-remote="<?php echo url_for('@show_content?id='.$content->getId())?>"<?php echo ($col) ? ' data-col="'.$col.'"' : '';?> class="m-item l-<?php echo $content->getType()?>">
    <header>
        <div class="name"><?php echo ucfirst($content->getUsername())?></div>
        <div class="date"><?php echo $content->getDateTimeObject('date_published')->format('M Y');?></div>
        <h1 class="title"><?php echo $content->getTitle(); ?></h1>
    </header>
    <?php include_partial('content'.sfInflector::camelize($content->getType()), array('content' => $content, 'is_index' => true)) ?>
    <div class="commentsnb"><?php echo $content->getComments()->count()?> comments</div>
</article>