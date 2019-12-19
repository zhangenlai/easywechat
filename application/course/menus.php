<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

/**
 * 菜单信息
 */
return [
    [
        'title' => '课程',
        'icon' => 'fa fa-fw fa-book',
        'url_type' => 'module_admin',
        'url_value' => 'course/index/index',
        'url_target' => '_self',
        'online_hide' => 0,
        'sort' => 5,
        'status' => 1,
        'child' => [
            [
                'title' => '课程管理',
                'icon' => 'fa fa-fw fa-book',
                'url_type' => 'module_admin',
                'url_value' => '',
                'url_target' => '_self',
                'online_hide' => 0,
                'sort' => 100,
                'status' => 1,
                'child' => [
                    [
                        'title' => '课程管理',
                        'icon' => 'fa fa-fw fa-book',
                        'url_type' => 'module_admin',
                        'url_value' => 'course/index/index',
                        'url_target' => '_self',
                        'online_hide' => 0,
                        'sort' => 100,
                        'status' => 1,
                        'child' => [
                            [
                                'title' => '查看详情',
                                'icon' => '',
                                'url_type' => 'module_admin',
                                'url_value' => 'course/index/eye',
                                'url_target' => '_self',
                                'online_hide' => 1,
                                'sort' => 100,
                                'status' => 1,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
