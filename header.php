<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('%s'),
            'tag'       =>  _t('%s'),
            'author'    =>  _t('%s')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>">
<?php $this->header(); ?>
</head>

<body>
	<div id="main">
		<header>
			<div id="logo"><?php if ($this->options->logoUrl): ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" width="100%" height="100%">
                </a>
            <?php else: ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
            <?php endif; ?></div><div id="ad"><a href="https://jq.qq.com/?_wv=1027&k=5fRZkMu" target="_blank" rel="noflow">欢迎大佬</a></div>
			<div id="menu"><span class="floatleft"><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?></span><span class="floatright">
				<form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search"><input id="serch" name="s" type="text" placeholder="输入关键词并Enter"><input type="submit" style="display: none;"></form></span></div>
		</header>
		<div id="vbody">
			<div id="mainleft">