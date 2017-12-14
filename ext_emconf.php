<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'News preview',
    'description' => 'News preview',
    'category' => 'fe',
    'author' => 'Georg Ringer',
    'author_email' => 'typo3@ringerge.org',
    'state' => 'stable',
    'uploadfolder' => 0,
    'clearCacheOnLoad' => 1,
    'author_company' => '',
    'version' => '1.0.1',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '7.6.0-8.7.99',
                    'news' => '6.1.0-6.1.99',
                ],
            'conflicts' =>
                [],
            'suggests' =>
                [],
        ],
];
