<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1493205412,
    'checksum' => '35eb6a7f9c87e23c20aa847fd0d43b6d',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1476471759
            ],
            'plugins/ganalytics' => [
                'file' => 'user/config/plugins/ganalytics.yaml',
                'modified' => 1478652387
            ],
            'plugins/socialbuttons' => [
                'file' => 'user/config/plugins/socialbuttons.yaml',
                'modified' => 1478652562
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1476471759
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1478643277
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1476471759
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1478643048
            ],
            'themes/x-corporation' => [
                'file' => 'user/config/themes/x-corporation.yaml',
                'modified' => 1476731094
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1487487280
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1487487280
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1487487280
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1487487280
            ]
        ],
        'user/plugins' => [
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/breadcrumbs.yaml',
                'modified' => 1476735148
            ],
            'plugins/archives' => [
                'file' => 'user/plugins/archives/archives.yaml',
                'modified' => 1476735147
            ],
            'plugins/socialbuttons' => [
                'file' => 'user/plugins/socialbuttons/socialbuttons.yaml',
                'modified' => 1478652524
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1487487634
            ],
            'plugins/facebook' => [
                'file' => 'user/plugins/facebook/facebook.yaml',
                'modified' => 1487488406
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1487488364
            ],
            'plugins/shortcode-core' => [
                'file' => 'user/plugins/shortcode-core/shortcode-core.yaml',
                'modified' => 1487487638
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/taxonomylist.yaml',
                'modified' => 1476735146
            ],
            'plugins/gravstrap' => [
                'file' => 'user/plugins/gravstrap/gravstrap.yaml',
                'modified' => 1476735135
            ],
            'plugins/blog-injector' => [
                'file' => 'user/plugins/blog-injector/blog-injector.yaml',
                'modified' => 1476736149
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1473508128
            ],
            'plugins/embed' => [
                'file' => 'user/plugins/embed/embed.yaml',
                'modified' => 1478652077
            ],
            'plugins/highlight' => [
                'file' => 'user/plugins/highlight/highlight.yaml',
                'modified' => 1476735149
            ],
            'plugins/editor-buttons' => [
                'file' => 'user/plugins/editor-buttons/editor-buttons.yaml',
                'modified' => 1478651957
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/feed.yaml',
                'modified' => 1487487636
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1487487640
            ],
            'plugins/ganalytics' => [
                'file' => 'user/plugins/ganalytics/ganalytics.yaml',
                'modified' => 1487487644
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1487488368
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1487487645
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1487488407
            ],
            'plugins/langswitcher' => [
                'file' => 'user/plugins/langswitcher/langswitcher.yaml',
                'modified' => 1487488345
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/pagination.yaml',
                'modified' => 1476735145
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1476895986
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/relatedpages.yaml',
                'modified' => 1476735144
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'breadcrumbs' => [
                'enabled' => true,
                'show_all' => true,
                'built_in_css' => true,
                'include_home' => true,
                'icon_home' => '',
                'icon_divider_classes' => 'fa fa-angle-right',
                'link_trailing' => false
            ],
            'archives' => [
                'enabled' => true,
                'built_in_css' => true,
                'date_display_format' => 'F Y',
                'show_count' => true,
                'limit' => 12,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'filter_combinator' => 'and',
                'filters' => [
                    'category' => 'blog'
                ],
                'taxonomy_names' => [
                    'month' => 'archives_month',
                    'year' => 'archives_year'
                ]
            ],
            'socialbuttons' => [
                'enabled' => true,
                'buttons' => [
                    'facebook' => [
                        'enabled' => true,
                        'label' => 'Facebook'
                    ],
                    'twitter' => [
                        'enabled' => true,
                        'label' => 'Twitter'
                    ],
                    'googleplus' => [
                        'enabled' => false,
                        'label' => 'Google+'
                    ],
                    'linkedin' => [
                        'enabled' => false,
                        'label' => 'Linkedin'
                    ],
                    'reddit' => [
                        'enabled' => true,
                        'label' => 'Reddit'
                    ],
                    'youtube' => [
                        'enabled' => false,
                        'label' => 'Youtube'
                    ],
                    'hackernews' => [
                        'enabled' => false,
                        'label' => 'Hackernews'
                    ],
                    'pinterest' => [
                        'enabled' => false,
                        'label' => 'Pinterest'
                    ],
                    'pocket' => [
                        'enabled' => false,
                        'label' => 'Pocket'
                    ],
                    'tumblr' => [
                        'enabled' => true,
                        'label' => 'Tumblr'
                    ],
                    'vk' => [
                        'enabled' => false,
                        'label' => 'VK'
                    ],
                    'github' => [
                        'enabled' => false,
                        'label' => 'Github'
                    ],
                    'email' => [
                        'enabled' => true,
                        'label' => 'Email'
                    ]
                ]
            ],
            'simplesearch' => [
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
            ],
            'facebook' => [
                'enabled' => true,
                'built_in_css' => true,
                'use_unitegallery_plugin' => true
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'shortcode-core' => [
                'enabled' => true,
                'active' => true,
                'active_admin' => true,
                'parser' => 'regex',
                'fontawesome' => [
                    'load' => true,
                    'url' => '//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css'
                ]
            ],
            'taxonomylist' => [
                'enabled' => true,
                'route' => '/blog'
            ],
            'gravstrap' => [
                'enabled' => true
            ],
            'blog-injector' => [
                'enabled' => true,
                'framework' => 'bootstrap',
                'add_default_css' => true,
                'add_framework_assets' => false
            ],
            'markdown-notices' => [
                'enabled' => true,
                'built_in_css' => true,
                'level_classes' => [
                    0 => 'yellow',
                    1 => 'red',
                    2 => 'blue',
                    3 => 'green'
                ]
            ],
            'embed' => [
                'enabled' => true,
                'oembed' => [
                    'endpoint' => 'http://open.iframe.ly/api/oembed'
                ]
            ],
            'highlight' => [
                'enabled' => true,
                'theme' => 'default'
            ],
            'editor-buttons' => [
                'enabled' => true,
                'insert_table' => true,
                'insert_notice' => true
            ],
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => 'My Feed Description',
                'lang' => 'en-us',
                'length' => 500
            ],
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'ganalytics' => [
                'enabled' => true,
                'trackingId' => 'UA-87083411-1',
                'position' => 'head',
                'objectName' => 'ga',
                'forceSsl' => false,
                'async' => false,
                'anonymizeIp' => false,
                'blockedIps' => [
                    
                ],
                'cookieConfig' => false,
                'cookieName' => '_ga',
                'cookieDomain' => '',
                'cookieExpires' => 63072000,
                'debugStatus' => false,
                'debugTrace' => false
            ],
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => '',
                'body_classes' => '',
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => true,
                    'dashboard-notifications' => true,
                    'dashboard-feed' => true,
                    'dashboard-pages' => true
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'show_github_msg' => true,
                'google_fonts' => true,
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => true,
                    'dashboard' => true,
                    'plugins' => true,
                    'themes' => true
                ],
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'filesize' => 5,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => NULL,
                'route_register' => false,
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'redirect_after_login' => NULL,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'user_registration' => [
                    'enabled' => true,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => true,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ],
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ]
            ],
            'langswitcher' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'relatedpages' => [
                'enabled' => true,
                'limit' => 5,
                'show_score' => true,
                'score_threshold' => 20,
                'filter' => [
                    'items' => [
                        '@page' => '/blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ]
                ],
                'page_in_filter' => true,
                'explicit_pages' => [
                    'process' => true,
                    'score' => 100
                ],
                'taxonomy_match' => [
                    'taxonomy' => 'tag',
                    'taxonomy_taxonomy' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 50,
                            2 => 75,
                            3 => 100
                        ]
                    ],
                    'taxonomy_content' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 20,
                            2 => 30,
                            3 => 45,
                            4 => 60,
                            5 => 70,
                            6 => 80,
                            7 => 90,
                            8 => 100
                        ]
                    ]
                ],
                'content_match' => [
                    'process' => false
                ]
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpeg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xld' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xla' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlc' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlw' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xll' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7zip.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'site' => [
            'title' => 'PAVES',
            'default_lang' => 'en',
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
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'custom_base_url' => '',
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'gravstrap-theme',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => true
                ],
                'twig_first' => true,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '301',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => true,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => false,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => '1',
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true
            ]
        ],
        'security' => [
            'salt' => 'N3CegmuJOIdo4U'
        ],
        'themes' => [
            'x-corporation' => [
                'enabled' => true
            ]
        ]
    ]
];
