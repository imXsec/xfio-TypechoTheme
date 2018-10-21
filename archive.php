<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
<?php while($this->next()): ?>				
<div class="mainloop">
					<div class="logtitle"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
					<div class="logcon"><?php $this->excerpt('120'); ?></div>
					<div class="loginfo">时间:<?php $this->date('Y-m-d'); ?> 分类:<?php $this->category(','); ?>
	    <?php $this->commentsNum('%d条评论'); ?></div>
				</div>
<?php endwhile; ?>

				<div id="fenye">
					<?php $this->pageNav(); ?>
				</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

