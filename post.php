<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="mainloop">
					<div class="postpagetitle"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
					<div class="loginfo"><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time> <?php //_e('分类: '); ?><?php// $this->category(','); ?></div>
					<div class="postlogcon"><?php $this->content(); ?></div>
				</div>
<?php $this->need('comments.php'); ?>
</div></div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
