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

Route::get('/test', function(){
    
    return App\User::find(1)->profile;

});

//users

Route::get('/users', [
    
    'uses' => 'UsersController@index',
    'as' => 'users'
]);

// create user
Route::get('/user/create', [
    
    'uses' => 'UsersController@create',
    'as' => 'user.create'
]);


//store users

Route::post('/user/store', [
    'uses' => 'UsersController@store',
    'as' => 'user.store'
]);

//make user admin

Route::get('user/admin/{id}', [

    'uses' => 'UsersController@admin',
    'as'  => 'user.admin'

]);

//not admin

Route::get('user/not-admin/{id}', [
    'uses' => 'UsersController@not_admin',
    'as' => 'user.not.admin'

]);


//view  profile user


Route::get('user/profile', [
  'uses' => 'ProfilesController@index',
  'as' => 'user.profile'
  
]);
//edit profile user
Route::post('/user/profile/update', [
    'uses' => 'ProfilesController@update',
    'as' => 'user.profile.update'    
  ]);

  //delete profile user
  Route::get('user/delete/{id}', [
   
    'uses' => 'UsersController@destroy',

    'as' => 'user.delete'
  ]);





Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as'=> 'index'
  ]);

 
    


Auth::routes();






Route::group(['prefix' => 'admin' , 'middleware' =>'auth'], function() {


    Route::get('/home', 'HomeController@index')->name('home');


    //create post
    Route::get('/post/create',[
    
        'uses' => 'PostsController@create',
        'as' => 'post.create'
    ]);
//store post

    Route::post('/post/store',[
    
        'uses' => 'PostsController@store',
        'as' => 'post.store'
    ]);

    //view
    Route::get('/posts',[
    
        'uses' => 'PostsController@index',
        'as' => 'posts'
    ]);
    
    //delete post
     Route::get('/post/delete/{id}',[
         'uses' => 'PostsController@destroy',
         'as' => 'post.delete'
     ]);

     //trashed
     Route::get('/posts/trash', [
         'uses' => 'PostsController@trashed',
         'as' => 'posts.trash'
     ]);

     //kill post
     Route::get('/posts/kill/{id}', [
        'uses' => 'PostsController@kill',
        'as' => 'post.kill'
    ]);

    //restore post

    Route::get('/posts/restore/{id}', [
        'uses' => 'PostsController@restore',
        'as' => 'post.restore'
    ]);

    //edit

    Route::get('/posts/edit/{id}', [
        'uses' => 'PostsController@edit',
        'as' => 'post.edit'
    ]);

    //update

    Route::post('/post/update/{id}', [
        'uses' => 'PostsController@update',
        'as' => 'post.update'
    ]);
    


    //create category
    Route::get('/category/create',[
    
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);

    //save
    Route::post('/category/store',[
    
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);

//edit
    Route::get('/category/edit/{id}', [
    
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);

//delete
    Route::get('/category/delete/{id}', [
    
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);


    //update
    Route::post('/category/update/{id}',[
    
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);



//view
    Route::get('/categories',[
    
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
    ]);






    //tags
    Route::get('/tags', [
        
        'uses' => 'TagsController@index',
        'as' => 'tags'
    ]);


    Route::get('/tag/create', [
        
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
    ]);
      

    Route::post('/tag/store', [
         'uses' =>'TagsController@store',
         'as' => 'tag.store'
    ]);


    

    Route::get('/tag/edit/{id}', [

        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
    ]);

    
    Route::post('/tag/update/{id}', [

        'uses' => 'TagsController@update',
        'as' => 'tag.update'

    ]);


    Route::get('/tag/delete/{id}', [

        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'

    ]);

//view site settings

Route::get('/settings', [

    'uses' => 'SettingsController@index',
    'as' => 'settings'

]);


Route::post('/settings/update', [

    'uses' =>'SettingsController@update',
    'as' =>'settings.update'

]);



});