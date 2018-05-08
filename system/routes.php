<?php
/*--------------------------------------------------------------------------
| 路由规则设置
|--------------------------------------------------------------------------
| 框架支持路由访问机制与普通GET方式访问
| 如果使用普通GET方式访问时不需要设置路由规则
| 当然也可以根据业务需要两种方式都使用
|-------------------------------------------------------------------------*/
Route::get('category_{cid}.html', 'home/listpage/index');
Route::get('tag_{tid}.html', 'home/listpage/index');
Route::get('article_{aid}.html', 'home/content/index');
Route::get('common.html', 'home/listpage/common');
Route::get('aboutMe.html', 'home/content/aboutMe');
Route::get('wap_category_{cid}.html', 'wap/listpage/index');
Route::get('wap_tag_{tid}.html', 'wap/listpage/index');
Route::get('wap_article_{aid}.html', 'wap/content/index');
Route::get('search.html', 'home/search/index');

