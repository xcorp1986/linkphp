<?php

// +----------------------------------------------------------------------
// | LinkPHP [ Link All Thing ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://linkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liugene <liujun2199@vip.qq.com>
// +----------------------------------------------------------------------
// |               配置类
// +----------------------------------------------------------------------

namespace util\sms\drives\liugene\alisms;
use util\sms\drives\liugene\alisms\send\AlibabaAliqinSendSms;
class SmsSdk
{
    //保存sms发送配置
    private $_sms_param = [];

    //实例化后自动设置配置
    public function __set($name,$value)
    {
        return $this->_sms_param[$name] = $value;
    }

    //发送短信
    public function send()
    {
        AlibabaAliqinSendSms::request($this->_sms_param);
    }

}