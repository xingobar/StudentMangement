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


Route::get('/', ['as' => '/', 'uses' => 'LoginController@getLogin']);
Route::post('/login', ['as' => 'login', 'uses' => 'LoginController@postLogin']);

Route::get('/noPermission', function () {
    return view('permission.noPermission');
});


Route::group(['middleware' => ['authen']], function () {
    Route::get('/dashboard', [
        'as' => 'dashboard',
        'uses' => 'DashboardController@dashboard'
    ]);

    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'LoginController@getLogout'
    ]);

});

Route::group(['middleware' => ['authen', 'roles'], 'roles' => ['admin']], function () {

    // for admin
    Route::get('/createuser', function () {
        echo 'create user ';
    });

    Route::get('/manage/course', [
        'as' => 'manageCourse',
        'uses' => 'CourseController@getManageCourse'
    ]);

    Route::post('/manage/course/insert', [
        'as' => 'postInsertAcademic',
        'uses' => 'CourseController@postInsertAcademic'
    ]);

    Route::post('/manage/course/insert-program', [
        'as' => 'postInsertProgram',
        'uses' => 'CourseController@postInsertProgram'
    ]);

    Route::post('/manage/course/insert-level', [
        'as' => 'postInsertLevel',
        'uses' => 'CourseController@postInsertLevel'
    ]);

    Route::get('/manage/course/showLevel', [
        'as' => 'showLevel',
        'uses' => 'CourseController@showLevel'
    ]);

    Route::post('/manage/course/insert-shift', [
        'as' => 'postInsertShift',
        'uses' => 'CourseController@postInsertShift'
    ]);

    Route::post('/manage/course/insert-time', [
        'as' => 'postInsertTime',
        'uses' => 'CourseController@postInsertTime'
    ]);

    Route::post('/manage/course/insert-batch', [
        'as' => 'postInsertBatch',
        'uses' => 'CourseController@postInsertBatch'
    ]);

    Route::post('/manage/course/insert-group', [
        'as' => 'postInsertGroup',
        'uses' => 'CourseController@postInsertGroup'
    ]);

    Route::post('/manage/course/insert-class', [
        'as' => 'postInsertClass',
        'uses' => 'CourseController@postInsertClasses'
    ]);

    Route::get('/manage/course/classInfo', [
        'as' => 'showClassInformation',
        'uses' => 'CourseController@showClassInformation'
    ]);

    Route::post('/manage/course/class/delete', [
        'as' => 'deleteClass',
        'uses' => 'CourseController@deleteClass'
    ]);

    Route::get('/manage/course/class/edit', [
        'as' => 'editClass',
        'uses' => 'CourseController@editClass'
    ]);

    Route::post('/manage/course/class/update', [
        'as' => 'updateClass',
        'uses' => 'CourseController@updateClassInfo'
    ]);

    Route::get('/student/getregister',[
        'as' => 'getStudentRegister',
        'uses'=> 'StudentController@getStudentRegister'
    ]);

    Route::post('/student/postregister',[
        'as' => 'postStudentRegister',
        'uses' => 'StudentController@postStudentRegister'
    ]);
});
