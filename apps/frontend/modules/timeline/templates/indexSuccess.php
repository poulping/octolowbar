OCTOLOWBAR
<?php if ($contents) : ?>
<ul id="timeline">
<?php foreach ($contents as $content) : ?>
    <li class="m-row" data-timestamp="<?php echo $content->getDatePublished()?>">
        <a href="#" class="m-item l-<?php echo $content->getType()?>">
            <div class="commentsnb"><?php echo $content->getComments()->count()?> comments</div>
            <h2><?php echo $content->getTitle()?></h2>
            <?php include_partial('content'.sfInflector::camelize($content->getType()), array('content' => $content)) ?>
            <div class="name">- <?php echo ucfirst($content->getUsername())?></div>
        </a>
    </li>
<?php endforeach; ?>
<?php /*
    <li class="m-row" data-timestamp="">
        <a href="#" class="m-item l-photo">
            <div class="commentsnb">No comments</div>
            <h2>Aenean non mi</h2>
            <img src="http://placekitten.com/560/315" width="560" height="315"/>
            <div class="name">- Mathieu</div>
        </a>
    </li>
    <li class="m-row" data-timestamp="">
        <a href="#" class="m-item l-text">
            <div class="commentsnb">6 comments</div>
            <h2>Duis tempus fringilla pulvinar</h2>
            <div class="name">- Alex</div>
        </a>
    </li>
</ul>
 */?>
<?php endif; ?>