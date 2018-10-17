<?php
// +----------------------------------------------------------------------
// | TPPHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2017   [ http://www.ruimeng898.com ]
// +----------------------------------------------------------------------
// | 官方网站：http://www.ruimeng898.com
// +----------------------------------------------------------------------
// | 开源协议 ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | 作者: 蔡伟明 <460932465@qq.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');

// 检查是否安装
if(!is_file(__DIR__ .'/../data/install.lock')){
    define('BIND_MODULE', 'install');
}

// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
