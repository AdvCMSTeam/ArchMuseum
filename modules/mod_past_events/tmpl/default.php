<?php
	defined('_JEXEC') or die('Restricted access');
	if($params->get('type')){
		$doc = JFactory::getDocument();
		$doc->addStyleSheet(JURI::root(true)."/modules/mod_past_events/media/style.css");
		$doc->addScript("http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js");
		$doc->addScript(JURI::root(true)."/modules/mod_past_events/media/main.js");
	}
?>

<div id="events" >
	<div class="events" style="">
		<?php if($data): ?>
            <?php foreach($data as $item): ?>
                <div>
                    <p class="title"><?= $item->title; ?></p>
                    <p class="description">
                        <?= $item->description; ?>
                    </p>
                    <p class="date"><?= $item->date; ?></p>
                    <?php if($item->image): ?>
                        <img src="<?= JURI::root(true); ?>/administrator/components/com_events/img/<?=$item->image;?>" style="width: 100px;"/>
                    <?php endif; ?>
                    <a href="<?= JURI::root(true); ?>/index.php?option=com_events&view=event&id=<?= $item->id; ?>">Read more</a>
                </div>
                </br></br>
            <?php endforeach; ?>
            <div class="pagination-wrp">
                <?php echo $pageNav->getPagesLinks(); ?>
            </div>
        <?php else: ?>
            <p>No events found</p>
        <?php endif; ?>
	</div>

</div>
