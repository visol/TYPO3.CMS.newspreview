<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'News preview',
	'description' => 'News preview',
	'category' => 'fe',
	'author' => 'Georg Ringer',
	'author_email' => 'typo3@ringerge.org',
	'state' => 'stable',
	'uploadfolder' => 0,
	'clearCacheOnLoad' => 1,
	'author_company' => '',
	'version' => '1.0.0',
	'constraints' =>
		array(
			'depends' =>
				array(
					'typo3' => '6.2.3-7-99.99',
					'news' => '',
				),
			'conflicts' =>
				array(),
			'suggests' =>
				array(),
		),
	'_md5_values_when_last_written' => '
	',
);