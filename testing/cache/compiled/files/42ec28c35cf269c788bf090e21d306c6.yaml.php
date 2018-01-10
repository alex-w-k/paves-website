<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/pavesn5/public_html/testing/user/plugins/simplesearch/simplesearch.yaml',
    'modified' => 1487487634,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'display_button' => false,
        'min_query_length' => 3,
        'route' => '/search',
        'template' => 'simplesearch_results',
        'filters' => [
            'category' => 'blog'
        ],
        'filter_combinator' => 'and',
        'ignore_accented_characters' => true,
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ]
    ]
];
