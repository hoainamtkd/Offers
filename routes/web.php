<?php
Route::get('auth/login',function(){
	return view('auth/index');
});
Route::get('',function(){
	return view('site/page/index');
});
Route::get('details',function(){
	return view('site/page/detail');
});
Route::get('categories',function(){
	return view('site/page/cate');
});
Route::group(['prefix' => 'admin'], function () {
	Route::group(['prefix' => 'dashboard'], function () {
		Route::get('',['as'=>'admin.dashboard.index','uses'=>'DashboardController@indexs']);
	});
	Route::group(['prefix' => 'members'], function () {
		Route::get('',['as'=>'admin.members.indexs','uses'=>'MembersController@indexs']);
		Route::get('add',['as'=>'admin.members.getAdd','uses'=>'MembersController@getAdd']);
		Route::post('add',['as'=>'admin.members.postAdd','uses'=>'MembersController@postAdd']);
		Route::get('details',['as'=>'admin.members.details','uses'=>'MembersController@details']);
		Route::get('blocks',['as'=>'admin.members.blocks','uses'=>'MembersController@blocks']);
		Route::get('social',['as'=>'admin.members.social','uses'=>'MembersController@social']);
	});
	Route::group(['prefix' => 'comments'], function () {
		Route::get('',['as'=>'admin.comments.indexs','uses'=>'CommentsController@indexs']);
	});
	Route::group(['prefix' => 'categories'], function () {
		Route::get('',['as'=>'admin.categories.indexs','uses'=>'CategoriesController@indexs']);
		Route::get('add',['as'=>'admin.categories.add','uses'=>'CategoriesController@add']);
	});
	Route::group(['prefix' => 'news'], function () {
		Route::get('',['as'=>'admin.news.indexs','uses'=>'NewsController@indexs']);
		Route::get('add',['as'=>'admin.news.add','uses'=>'NewsController@add']);
	});
	Route::group(['prefix' => 'slide'], function () {
		Route::get('',['as'=>'admin.slide.indexs','uses'=>'SlideController@indexs']);
		Route::get('add',['as'=>'admin.slide.add','uses'=>'SlideController@add']);
	});
	Route::group(['prefix' => 'email'], function () {
		Route::get('',['as'=>'admin.email.indexs','uses'=>'EmailController@indexs']);
		Route::get('send-email',['as'=>'admin.email.sendmail','uses'=>'EmailController@sendmail']);
	});
	Route::group(['prefix' => 'search'], function () {
		Route::get('',['as'=>'admin.search.indexs','uses'=>'SearchController@indexs']);
	});
	Route::group(['prefix' => 'ads'], function () {
		Route::get('',['as'=>'admin.ads.indexs','uses'=>'AdsController@indexs']);
		Route::get('add',['as'=>'admin.ads.add','uses'=>'AdsController@add']);
	});	
	Route::group(['prefix' => 'profile'], function () {
		Route::get('',function(){
			return view('admin/profile/index');
		});
	});	
});