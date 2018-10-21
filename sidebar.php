<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="mainright">
	<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
				<div class="spdloop">
					<div class="spdtitle"><?php _e('最新文章'); ?></div>
					<ul>
						<?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
					</ul>
				</div>
	<?php endif; ?>
	<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
				<div class="spdloop">
					<div class="spdtitle"><?php _e('最近回复'); ?></div>
					<ul>
						<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
        <?php endwhile; ?>
					</ul>
				</div>
	<?php endif; ?>
	<?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
				<div class="spdloop">
					<div class="spdtitle"><?php _e('分类'); ?></div>
					<?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
				</div>
	<?php endif; ?>
	<?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
				<div class="spdloop">
					<div class="spdtitle"><?php _e('归档'); ?></div>
					<ul>
						<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年m月')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
					</ul>
				</div>
	<?php endif; ?>
	<?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
				<div class="spdloop">
					<div class="spdtitle"><?php _e('其它'); ?></div>
					<ul>
						<?php if($this->user->hasLogin()): ?>
				<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
            <?php else: ?>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
					</ul>
				</div>
	<?php endif; ?>
<div class="spdloop">
					<!--div class="spdtitle">这是推广</div-->
					<ul>
<a href="https://cloud.tencent.com/redirect.php?redirect=1032&cps_key=1f7441d953777f49b3e06dbf9eb36464&from=console" target="_blank" rel="noflow"><img src="//i.mcxiaofan.cn/usr/uploads/2018/10/2052292522.jpg" width="100%" alt="化腾云广告" title="国内首家采用 amd EPYC™霄龙处理器的实例，业界领先的性价比，0.57元/天起" /></a>
					</ul>
				</div>


<!--div class="spdloop">
					<div class="spdtitle"></div>
					<ul>
					</ul>
				</div-->


			</div>