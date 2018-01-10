<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/pavesn5/public_html/testing/user/config/site.yaml',
    'modified' => 1478643277,
    'data' => [
        'title' => 'PAVES',
        'author' => [
            'name' => 'Alex Koch',
            'email' => 'alex.koch@pavesnonprofit.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'author'
        ],
        'metadata' => [
            'description' => 'PAVES Nonprofit'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
