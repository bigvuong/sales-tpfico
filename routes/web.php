<?php

Route::redirect('/admin', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index')->name('index');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');

    // Posts
    Route::delete('posts/destroy', 'PostsController@massDestroy')->name('posts.massDestroy');
    Route::resource('posts', 'PostsController');

    // Tags
    Route::delete('tags/destroy', 'TagsController@massDestroy')->name('tags.massDestroy');
    Route::resource('tags', 'TagsController');

});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});


Route::group(['prefix' => '/', 'as' => 'site.', 'namespace' => 'Site'], function () {
    // Homepage
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/gioi-thieu', 'AboutController@index')->name('about');
    Route::get('/tin-tuc', 'PostsController@index')->name('posts');
    Route::get('/tin-tuc/{slug}', 'PostsController@show')->name('post_detail');
    Route::get('/lien-he', 'ContactController@index')->name('contact');
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return redirect()->back();
});

Route::get('/create-sitemap', function () {
    Artisan::call('sitemap:create');
    return redirect()->back();
});
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return redirect()->back();
});

Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    return redirect()->back();
});

Route::get('/config-clear', function () {
    Artisan::call('config:clear');
    return redirect()->back();
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
});

Auth::routes();

