<?php
/**
 * hiAPI Certum.pl plugin
 *
 * @link      https://github.com/hiqdev/hiapi-certum
 * @package   hiapi-certum
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2018, HiQDev (http://hiqdev.com/)
 */

return [
    'container' => [
        'definitions' => [
            'certum-tool' => [
                'class' => \hiapi\certum\CertumTool::class,
            ],
        ],
    ],
];
