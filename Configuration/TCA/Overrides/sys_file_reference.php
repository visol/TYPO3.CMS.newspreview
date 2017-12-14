<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$GLOBALS['TCA']['sys_file_reference']['columns']['showinpreview']['config'] = [
    'type' => 'select',
    'items' => [
        ['LLL:EXT:newspreview/Resources/Private/Language/locallang_db.xlf:showinpreview.0', 0],
        ['LLL:EXT:newspreview/Resources/Private/Language/locallang_db.xlf:showinpreview.1', 1],
        ['LLL:EXT:newspreview/Resources/Private/Language/locallang_db.xlf:showinpreview.2', 2],
    ]
];
