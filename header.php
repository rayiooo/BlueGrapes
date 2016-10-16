<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- css -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>">
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<header class="l-header" style="background-image:url(<?php $this->options->themeUrl('img/header.jpg'); ?>">
    <div class="hdbg"></div>
    <div class="hdbg2"></div>
    <div class="m-about">
        <div id="logo">
            <a href="<?php $this->options->siteUrl(); ?>"><img src="https://www.hongweipeng.com/usr/uploads/2016/08/2357678419.jpg" alt=""></a>
        </div>
        <h1 class="tit"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></h1>
        <div class="about"><?php $this->options->description(); ?></div>
    </div>
</header>
<div id="m-nav" class="m-nav">
    <div class="m-nav-all">
        <div class="m-logo-url">
            <img src="https://www.hongweipeng.com/usr/uploads/2016/08/2357678419.jpg">
            <h3>Hong Weapon</h3>
        </div>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <ul class="nav">
            <li <?php if($this->is('index')): ?> class="active"<?php endif; ?>>
                <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
            </li>
            <?php while($pages->next()): ?>
                <li <?php if($this->is('page', $pages->slug)): ?> class="active"<?php endif; ?>>
                    <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
<form role="search" method="get" id="search-form" action="#">
    <div class="search-form">
        <span id="search-form-close">×</span>
        <input placeholder="Search for" name="s" id="search-input-s" type="text">
        <input class="webFont" id="searchsubmit" value="L" type="submit">
    </div>
</form>
<div id="m-header" class="m-header">
    <div id="showLeftPush" class="left m-header-button"></div>
    <h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></h1>
    <div id="search-trigger" style="font-size: 18px;" class="right m-header-search"></div>
</div>