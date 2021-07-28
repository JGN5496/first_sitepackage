<?php

/**
 * Extension Manager/Repository config file for ext "first_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'First Sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'XimaMediaGmbh\\FirstSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'jni',
    'author_email' => 'jni@xima.de',
    'author_company' => 'Xima Media GmbH',
    'version' => '1.0.0',
];
