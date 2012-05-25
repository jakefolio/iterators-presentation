<?php
$channel = new Zend_Feed_Rss('http://feeds.feedburner.com/SomeFeedGoesHere');
$it = new LimitIterator($channel, 0, 5);
foreach ($it as $item): ?>

	<?php $date = new DateTime($item->pubDate()); ?>
	<div class="blog-article">
		<span class="date">:: <?php echo $date->format('m.d.y'); ?></span><br>
		<?php echo $item->title(); ?><br>
		<a href="<?php echo $item->link(); ?>">Read More</a>
	</div>

<?php endforeach; ?>