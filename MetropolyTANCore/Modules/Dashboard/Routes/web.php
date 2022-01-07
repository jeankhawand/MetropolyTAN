<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Modules\Role\Entities\RoleVar;

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth', 'role:' . RoleVar::ADMIN . '|' . RoleVar::AUTHORITATIVEPUBLICTRANSPORTATIONORGANIZER . '|' . RoleVar::OPERATOR . '|' . RoleVar::TELEOPERATOR])->group(function () {
    Route::get('/', 'DashboardController@index')->name('index');
});
