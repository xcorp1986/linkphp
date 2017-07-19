<?php

/**
 * --------------------------------------------------*
 *  LhinkPHP遵循Apache2开源协议发布  Link ALL Thing  *
 * --------------------------------------------------*
 *  @author LiuJun     Mail-To:liujun2199@vip.qq.com *
 * --------------------------------------------------*
 * Copyright (c) 2017 LinkPHP. All rights reserved.  *
 * --------------------------------------------------*
 *                 LinkPHP框架入口文件               *
 * --------------------------------------------------*
 */

 //类文件后缀常量
 const EXT = '.php';
 const SYS = '.sys.php';

 //版本信息
 define('LINKPHP_VERSION','1.0.0');
 //声明路径常量
 //目录基础常量的定义
 defined('ROOT_PATH') or define('ROOT_PATH',dirname(__DIR__ . '/') . '/');
 //定义站点入库文件夹目录常量
 defined('WEB_PATH') or define('WEB_PATH',ROOT_PATH . 'web/');
 defined('APPLICATION_PATH') or define('APPLICATION_PATH', ROOT_PATH . 'assets/');
 //定义Composer目录常量
 defined('VENDOR_PATH') or define('VENDOR_PATH', ROOT_PATH . 'vendor/');
 //定义缓存目录常量
 defined('CACHE_PATH') or define('CACHE_PATH', WEB_PATH . 'resource/');
 //定义站点运行数据存储目录常量
 defined('STORAGE_PATH') or define('STORAGE_PATH', WEB_PATH . 'storage/');
 //定义应用公共目录常量
 defined('COMMON_PATH') or define('COMMON_PATH', APPLICATION_PATH . 'common/');
 //定义公共附件目录常量
 defined('__ATTACH__') or define('__ATTACH__', CACHE_PATH . 'attachment/');
 //定义LinkPHP框架目录常量
 defined('LINKPHP_PATH') or define('LINKPHP_PATH', ROOT_PATH . 'linkphp/');
 //定义LinkPHP框架核心类目录常量
 defined('CORE_PATH') or define('CORE_PATH', LINKPHP_PATH . 'bootstrap/');
//定义LinkPHP框架扩展类库目录常量
defined('EXTEND_PATH') or define('EXTEND_PATH', LINKPHP_PATH . 'extend/');
 //定义LinkPHP框架工具助手目录常量
 defined('HELPER_PATH') or define('HELPER_PATH', EXTEND_PATH . 'helper/');
 //定义LinkPHP框架应用公共配置目录常量
 defined('APPCONF_PATH') or define('APPCONF_PATH', WEB_PATH . 'configure/');
 //定义LinkPHP框架系统文件目录常量
 defined('SYSTEM_PATH') or define('SYSTEM_PATH', LINKPHP_PATH . 'system/');
 //定义LinkPHP框架语言目录常量
 defined('LANG_PATH') or define('LANG_PATH', SYSTEM_PATH . 'lang/');
 //定义LinkPHP框架附件目录常量
 defined('TEMP_PATH') or define('TEMP_PATH', SYSTEM_PATH . 'temp/');

 //系统可变常量
 defined('CREATE_SQLVI_ON') or define('CREATE_SQLVI_ON','FALSE'); //开启视图索引创建
 defined('APP_DEBUG') or define('APP_DEBUG','FALSE'); //开启站点调试
 defined('SYSTEM_LANGUAGE') or define('SYSTEM_LANGUAGE','');


?>