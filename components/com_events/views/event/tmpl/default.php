<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.01.14
 * Time: 9:02
 */
?>

<h1><?= $this->item->title; ?></h1>
<p><?= $this->item->description; ?></p>
<?php if($this->item->image): ?>
    <img src="<?= JURI::root(true); ?>/administrator/components/com_events/img/<?=$this->item->image;?>" style="width: 200px;" />
<?php endif ?>
<p><?= $this->item->date; ?></p>
