<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-02-05 18:35:40 --> No connection could be made because the target machine actively refused it.

#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(377): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(643): CodeIgniter\Database\BaseConnection->initialize()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#4 C:\laragon\www\easywork\app\Models\User_model.php(13): CodeIgniter\Model->findAll()
#5 C:\laragon\www\easywork\app\Controllers\Home.php(17): App\Models\User_Model->getuser()
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->index()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#11 {main}
CRITICAL - 2020-02-05 18:35:58 --> No connection could be made because the target machine actively refused it.

#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(377): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(643): CodeIgniter\Database\BaseConnection->initialize()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#4 C:\laragon\www\easywork\app\Models\User_model.php(13): CodeIgniter\Model->findAll()
#5 C:\laragon\www\easywork\app\Controllers\Home.php(17): App\Models\User_Model->getuser()
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->index()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#11 {main}
CRITICAL - 2020-02-05 19:15:04 --> Declaration of App\Models\Gateway_Model::update($data) must be compatible with CodeIgniter\Model::update($id = NULL, $data = NULL): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2020-02-05 19:15:17 --> Declaration of App\Models\Gateway_Model::update($data) must be compatible with CodeIgniter\Model::update($id = NULL, $data = NULL): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2020-02-05 19:15:17 --> Declaration of App\Models\Gateway_Model::update($data) must be compatible with CodeIgniter\Model::update($id = NULL, $data = NULL): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2020-02-05 19:15:29 --> Declaration of App\Models\Gateway_Model::update($data) must be compatible with CodeIgniter\Model::update($id = NULL, $data = NULL): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2020-02-05 19:15:29 --> Declaration of App\Models\Gateway_Model::update($data) must be compatible with CodeIgniter\Model::update($id = NULL, $data = NULL): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2020-02-05 19:17:26 --> Call to a member function post() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:19:11 --> Call to undefined function form_open()
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\View\View.php(236): include()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Common.php(176): CodeIgniter\View\View->render('pages/gateway_s...', Array, NULL)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(38): view('pages/gateway_s...', Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 19:19:18 --> Call to undefined function form_open()
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\View\View.php(236): include()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Common.php(176): CodeIgniter\View\View->render('pages/gateway_s...', Array, NULL)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(38): view('pages/gateway_s...', Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 19:19:55 --> Call to undefined function form_open()
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\View\View.php(236): include()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Common.php(176): CodeIgniter\View\View->render('pages/gateway_s...', Array, NULL)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(38): view('pages/gateway_s...', Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 19:20:12 --> Call to undefined function form_open()
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\View\View.php(236): include()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Common.php(176): CodeIgniter\View\View->render('pages/gateway_s...', Array, NULL)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(38): view('pages/gateway_s...', Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 19:22:06 --> Call to a member function post() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:22:45 --> Call to a member function post() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:27:46 --> Call to a member function post() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:30:02 --> Call to a member function post() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:31:21 --> Call to a member function post() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:33:57 --> Call to a member function post() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:37:03 --> Call to a member function post() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:37:46 --> Call to a member function post() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:37:55 --> Call to a member function post() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:38:01 --> Call to a member function post() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:38:36 --> Call to a member function update() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:39:38 --> Call to a member function update() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:43:50 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(55): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 19:43:54 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(55): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 19:47:22 --> Too few arguments to function App\Controllers\Home::submit(), 0 passed in C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php on line 847 and exactly 1 expected
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:47:29 --> Too few arguments to function App\Controllers\Home::submit(), 0 passed in C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php on line 847 and exactly 1 expected
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:47:36 --> Too few arguments to function App\Controllers\Home::submit(), 0 passed in C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php on line 847 and exactly 1 expected
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:47:44 --> Too few arguments to function App\Controllers\Home::submit(), 0 passed in C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php on line 847 and exactly 1 expected
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:47:57 --> Too few arguments to function App\Controllers\Home::submit(), 0 passed in C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php on line 847 and exactly 1 expected
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:49:56 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Controllers\Home.php(35): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#11 {main}
CRITICAL - 2020-02-05 19:50:01 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Controllers\Home.php(35): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#11 {main}
CRITICAL - 2020-02-05 19:50:11 --> Too few arguments to function App\Controllers\Home::submit(), 0 passed in C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php on line 847 and exactly 1 expected
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:51:24 --> Too few arguments to function App\Controllers\Home::submit(), 0 passed in C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php on line 847 and exactly 1 expected
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 19:52:58 --> Argument 1 passed to CodeIgniter\Model::doProtectFields() must be of the type array, integer given, called in C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php on line 823
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(1)
#1 C:\laragon\www\easywork\app\Models\Gateway_model.php(18): CodeIgniter\Model->update(Array, 1)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(55): App\Models\Gateway_Model->updat(1, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 19:53:32 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Models\Gateway_model.php(18): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\app\Controllers\Home.php(55): App\Models\Gateway_Model->updat(Array)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#9 {main}
CRITICAL - 2020-02-05 19:56:14 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::where()
#0 C:\laragon\www\easywork\app\Controllers\Home.php(55): App\Models\Gateway_Model->updat(Array)
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:06:53 --> Call to a member function table() on null
#0 C:\laragon\www\easywork\app\Controllers\Home.php(55): App\Models\Gateway_Model->updat(Array)
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:10:59 --> Call to a member function updat() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 20:11:05 --> Call to a member function updat() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 20:16:05 --> Call to a member function updat() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 20:16:30 --> Call to a member function updat() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 20:17:07 --> Call to a member function updat() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 20:17:11 --> Call to a member function updat() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 20:17:19 --> Call to a member function updat() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 20:18:20 --> Call to a member function table() on null
#0 C:\laragon\www\easywork\app\Controllers\Home.php(49): App\Models\Gateway_Model->updat(Array, 1)
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:29:08 --> Call to a member function table() on null
#0 C:\laragon\www\easywork\app\Controllers\Home.php(49): App\Models\Gateway_Model->updat(Array, 1)
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:33:35 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(54): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:33:55 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(38): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:33:56 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(38): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:34:03 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(38): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:34:04 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(38): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:34:04 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(38): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:34:56 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(54): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:35:00 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(54): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:35:05 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(54): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:35:12 --> Call to a member function update() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 20:35:50 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(54): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:37:25 --> 
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(48): redirect('home')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:37:49 --> 
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(48): redirect('public/home')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:37:53 --> 
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(48): redirect('public/home')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:38:03 --> 
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(48): redirect('public/home/ind...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:38:19 --> 
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(48): redirect('index')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:38:22 --> 
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(48): redirect('index')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:39:22 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Controllers\Home.php(53): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#8 {main}
CRITICAL - 2020-02-05 20:43:31 --> earwork is not a valid database connection group.
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(328): CodeIgniter\Database\Config::connect('earwork')
#1 C:\laragon\www\easywork\app\Controllers\Home.php(29): CodeIgniter\Model->__construct()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#7 {main}
CRITICAL - 2020-02-05 20:43:33 --> earwork is not a valid database connection group.
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(328): CodeIgniter\Database\Config::connect('earwork')
#1 C:\laragon\www\easywork\app\Controllers\Home.php(29): CodeIgniter\Model->__construct()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#7 {main}
CRITICAL - 2020-02-05 20:43:33 --> earwork is not a valid database connection group.
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(328): CodeIgniter\Database\Config::connect('earwork')
#1 C:\laragon\www\easywork\app\Controllers\Home.php(29): CodeIgniter\Model->__construct()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#7 {main}
CRITICAL - 2020-02-05 20:43:37 --> syntax error, unexpected 'x' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST)
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\laragon\\www\\...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Gate...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Gate...')
#3 C:\laragon\www\easywork\app\Controllers\Home.php(29): spl_autoload_call('App\\Models\\Gate...')
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#9 {main}
CRITICAL - 2020-02-05 20:43:38 --> syntax error, unexpected 'x' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST)
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\laragon\\www\\...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Gate...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Gate...')
#3 C:\laragon\www\easywork\app\Controllers\Home.php(29): spl_autoload_call('App\\Models\\Gate...')
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#9 {main}
CRITICAL - 2020-02-05 20:43:38 --> syntax error, unexpected 'x' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST)
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\laragon\\www\\...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Gate...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Gate...')
#3 C:\laragon\www\easywork\app\Controllers\Home.php(29): spl_autoload_call('App\\Models\\Gate...')
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#9 {main}
CRITICAL - 2020-02-05 20:43:41 --> syntax error, unexpected 'x' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST)
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\laragon\\www\\...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Gate...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Gate...')
#3 C:\laragon\www\easywork\app\Controllers\Home.php(29): spl_autoload_call('App\\Models\\Gate...')
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#9 {main}
CRITICAL - 2020-02-05 20:44:09 --> easywork is not a valid database connection group.
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(328): CodeIgniter\Database\Config::connect('easywork')
#1 C:\laragon\www\easywork\app\Controllers\Home.php(29): CodeIgniter\Model->__construct()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#7 {main}
CRITICAL - 2020-02-05 20:45:44 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Controllers\Home.php(35): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#11 {main}
CRITICAL - 2020-02-05 20:45:47 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Controllers\Home.php(35): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#11 {main}
CRITICAL - 2020-02-05 20:46:33 --> Too few arguments to function App\Models\Gateway_Model::__construct(), 0 passed in C:\laragon\www\easywork\app\Controllers\Home.php on line 29 and exactly 1 expected
#0 C:\laragon\www\easywork\app\Controllers\Home.php(29): App\Models\Gateway_Model->__construct()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:46:33 --> Too few arguments to function App\Models\Gateway_Model::__construct(), 0 passed in C:\laragon\www\easywork\app\Controllers\Home.php on line 29 and exactly 1 expected
#0 C:\laragon\www\easywork\app\Controllers\Home.php(29): App\Models\Gateway_Model->__construct()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:46:33 --> Too few arguments to function App\Models\Gateway_Model::__construct(), 0 passed in C:\laragon\www\easywork\app\Controllers\Home.php on line 29 and exactly 1 expected
#0 C:\laragon\www\easywork\app\Controllers\Home.php(29): App\Models\Gateway_Model->__construct()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:46:33 --> Too few arguments to function App\Models\Gateway_Model::__construct(), 0 passed in C:\laragon\www\easywork\app\Controllers\Home.php on line 29 and exactly 1 expected
#0 C:\laragon\www\easywork\app\Controllers\Home.php(29): App\Models\Gateway_Model->__construct()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:46:34 --> Too few arguments to function App\Models\Gateway_Model::__construct(), 0 passed in C:\laragon\www\easywork\app\Controllers\Home.php on line 29 and exactly 1 expected
#0 C:\laragon\www\easywork\app\Controllers\Home.php(29): App\Models\Gateway_Model->__construct()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:46:34 --> Too few arguments to function App\Models\Gateway_Model::__construct(), 0 passed in C:\laragon\www\easywork\app\Controllers\Home.php on line 29 and exactly 1 expected
#0 C:\laragon\www\easywork\app\Controllers\Home.php(29): App\Models\Gateway_Model->__construct()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:46:34 --> Too few arguments to function App\Models\Gateway_Model::__construct(), 0 passed in C:\laragon\www\easywork\app\Controllers\Home.php on line 29 and exactly 1 expected
#0 C:\laragon\www\easywork\app\Controllers\Home.php(29): App\Models\Gateway_Model->__construct()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:46:34 --> Too few arguments to function App\Models\Gateway_Model::__construct(), 0 passed in C:\laragon\www\easywork\app\Controllers\Home.php on line 29 and exactly 1 expected
#0 C:\laragon\www\easywork\app\Controllers\Home.php(29): App\Models\Gateway_Model->__construct()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:46:34 --> Too few arguments to function App\Models\Gateway_Model::__construct(), 0 passed in C:\laragon\www\easywork\app\Controllers\Home.php on line 29 and exactly 1 expected
#0 C:\laragon\www\easywork\app\Controllers\Home.php(29): App\Models\Gateway_Model->__construct()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:46:35 --> Too few arguments to function App\Models\Gateway_Model::__construct(), 0 passed in C:\laragon\www\easywork\app\Controllers\Home.php on line 29 and exactly 1 expected
#0 C:\laragon\www\easywork\app\Controllers\Home.php(29): App\Models\Gateway_Model->__construct()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:46:35 --> Too few arguments to function App\Models\Gateway_Model::__construct(), 0 passed in C:\laragon\www\easywork\app\Controllers\Home.php on line 29 and exactly 1 expected
#0 C:\laragon\www\easywork\app\Controllers\Home.php(29): App\Models\Gateway_Model->__construct()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#6 {main}
CRITICAL - 2020-02-05 20:48:44 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Models\Gateway_model.php(30): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\app\Controllers\Home.php(35): App\Models\Gateway_Model->get()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#9 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#12 {main}
CRITICAL - 2020-02-05 20:48:45 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Models\Gateway_model.php(30): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\app\Controllers\Home.php(35): App\Models\Gateway_Model->get()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#9 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#12 {main}
CRITICAL - 2020-02-05 20:48:45 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Models\Gateway_model.php(30): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\app\Controllers\Home.php(35): App\Models\Gateway_Model->get()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#9 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#12 {main}
CRITICAL - 2020-02-05 20:48:45 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Models\Gateway_model.php(30): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\app\Controllers\Home.php(35): App\Models\Gateway_Model->get()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#9 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#12 {main}
CRITICAL - 2020-02-05 20:48:45 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Models\Gateway_model.php(30): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\app\Controllers\Home.php(35): App\Models\Gateway_Model->get()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#9 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#12 {main}
CRITICAL - 2020-02-05 20:48:45 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Models\Gateway_model.php(30): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\app\Controllers\Home.php(35): App\Models\Gateway_Model->get()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#9 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#12 {main}
CRITICAL - 2020-02-05 20:48:46 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Models\Gateway_model.php(30): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\app\Controllers\Home.php(35): App\Models\Gateway_Model->get()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#9 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#12 {main}
CRITICAL - 2020-02-05 20:48:46 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Models\Gateway_model.php(30): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\app\Controllers\Home.php(35): App\Models\Gateway_Model->get()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#9 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#12 {main}
CRITICAL - 2020-02-05 20:48:46 --> Unknown column 'gateway.deleted_at' in 'where clause'
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(373): CodeIgniter\Database\BaseBuilder->get()
#5 C:\laragon\www\easywork\app\Models\Gateway_model.php(30): CodeIgniter\Model->find(1)
#6 C:\laragon\www\easywork\app\Controllers\Home.php(35): App\Models\Gateway_Model->get()
#7 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#9 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#12 {main}
CRITICAL - 2020-02-05 20:50:38 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(823): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Models\Gateway_model.php(22): CodeIgniter\Model->update(Array, Array)
#3 C:\laragon\www\easywork\app\Controllers\Home.php(53): App\Models\Gateway_Model->semula(Array)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#9 {main}
CRITICAL - 2020-02-05 20:52:16 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(693): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Models\Gateway_model.php(22): CodeIgniter\Model->insert(Array)
#3 C:\laragon\www\easywork\app\Controllers\Home.php(53): App\Models\Gateway_Model->semula(Array)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#9 {main}
CRITICAL - 2020-02-05 20:54:53 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(693): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Models\Gateway_model.php(22): CodeIgniter\Model->insert(Array)
#3 C:\laragon\www\easywork\app\Controllers\Home.php(53): App\Models\Gateway_Model->semula(Array)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#9 {main}
CRITICAL - 2020-02-05 20:55:07 --> Allowed fields must be specified for model: App\Models\Gateway_Model
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(1210): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Gate...')
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Model.php(693): CodeIgniter\Model->doProtectFields(Array)
#2 C:\laragon\www\easywork\app\Models\Gateway_model.php(22): CodeIgniter\Model->insert(Array)
#3 C:\laragon\www\easywork\app\Controllers\Home.php(41): App\Models\Gateway_Model->semula(Array)
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->gateway()
#5 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#9 {main}
CRITICAL - 2020-02-05 21:00:29 --> Call to a member function post() on null
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Home->submit()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 22:06:36 --> Class 'App\Controllers\Employee_model' not found
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Employee->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Employee))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 22:06:51 --> Class 'App\Controllers\Employee_model' not found
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Employee->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Employee))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 22:06:52 --> Class 'App\Controllers\Employee_model' not found
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Employee->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Employee))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 22:06:52 --> Class 'App\Controllers\Employee_model' not found
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Employee->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Employee))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 22:06:52 --> Class 'App\Controllers\Employee_model' not found
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Employee->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Employee))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 22:07:09 --> Class 'App\Controllers\Employee_model' not found
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Employee->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Employee))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 22:07:29 --> Class 'App\Controllers\Employee_model' not found
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Employee->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Employee))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 22:07:29 --> Class 'App\Controllers\Employee_model' not found
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Employee->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Employee))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 22:09:03 --> Class 'App\Controllers\Employee_model' not found
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Employee->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Employee))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 22:09:03 --> Class 'App\Controllers\Employee_model' not found
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Employee->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Employee))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 22:09:04 --> Class 'App\Controllers\Employee_model' not found
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Employee->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Employee))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
CRITICAL - 2020-02-05 22:09:04 --> Class 'App\Controllers\Employee_model' not found
#0 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(847): App\Controllers\Employee->index()
#1 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Employee))
#2 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\laragon\www\easywork\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\laragon\www\easywork\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\laragon\\www\\...')
#5 {main}
