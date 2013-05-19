<?php
echo head(array('title'=>"Just a fake title. Usually comes from real data"));
?>

<h1><?php echo "Some fake title"; ?></h1>

<?php foreach($data as $datum): ?>
<p><?php echo $datum; ?></p>
<?php endforeach; ?>

<?php foreach(loop('Items') as $item): ?>
<p><?php echo metadata($item, array('Dublin Core', 'Title')); ?></p>
<?php endforeach; ?>

<?php 
echo foot();
?>