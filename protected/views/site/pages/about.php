<?php
/* @var $this SiteController */

$about_ru = Yii::t('app', 'About');
$this->pageTitle=Yii::app()->name . ' - '. $about_ru;
$this->breadcrumbs=array(
    $about_ru,
);
?>
<h1><?= $about_ru ?></h1>

<p>This is a "static" page. You may change the content of this page
by updating the file <code><?php echo __FILE__; ?></code>.</p>
