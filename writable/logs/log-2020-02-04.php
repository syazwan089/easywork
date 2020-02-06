<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-02-04 01:34:04 --> Call to a member function view() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-04 01:34:14 --> Call to a member function view() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-04 01:43:54 --> count(): Parameter must be an array or an object that implements Countable
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'count(): Parame...', 'C:\\laragon\\www\\...', 17, Array)
#1 C:\laragon\www\easywork\app\Controllers\Home.php(17): count(NULL)
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->index()
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#7 {main}
