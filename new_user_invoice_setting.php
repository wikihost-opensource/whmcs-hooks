<?php
/**
 * en: Make sure the new user's service has a dedicated invoice instead merge
 * zh_cn: 确保新用户关联服务产生的账单都是独立的
 * 
 * @author Sam <zhang.san66@pm.me>
 */
use WHMCS\Database\Capsule;

add_hook('ClientAdd', 100, function ($vars) {
    Capsule::table('tblclients')->where('id', $vars['userid'])->update(['separateinvoices' => 1]);
});
