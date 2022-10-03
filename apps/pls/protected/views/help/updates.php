<?php
/**
 * @var HelpController     $this
 * @var SimpleXMLElement[] $updates
 */

$this->pageTitle = Yii::app()->name . ' - ' . Yii::t('pls', 'Latest Updates');
$this->breadcrumbs = [
	Yii::t('pls', 'Latest Updates'),
];
?>
<h1><?= Yii::t('pls', 'Latest Updates') ?></h1>

<?php
$config = array(
	'displayMostRecent' 		=> 5,
	'viewTemplate'				=> 'list',
	'title'                     => 'PLS 3rd Learning',
	'adminEmail'                => 'contact@pls3rdlearning.com',
	'copyrightInfo'             => 'Copyright &copy; 2022 PLS 3rd Learning. All Rights Reserved.',
	'latestUpdatesFeedCacheDir' => '/tmp',
	'latestUpdatesFeedCacheExp' => 3600 * 4,
	'latestUpdatesFeedUrl'      => 'https://supereval.com/blog/category/supereval-updates/feed',
	'curlUserAgent'             => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.50',
); 

$this->widget('application.components.widgets.updatesFeed.UpdatesFeed', $config);
?>
