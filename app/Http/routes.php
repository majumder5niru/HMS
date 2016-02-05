<?php

Route::group(['middleware' => ['web']], function () {
	//outdoor pateint
	Route::get('/', 'PatientsController@index');
    Route::get('/create_patient', 'PatientsController@create_patient');
	Route::post('/create_patient', 'PatientsController@store_data');
	Route::get('/all_reports', 'PatientsController@show_all_report');
	Route::get('/edit_report/{patient_id}', 'PatientsController@edit_report');
	Route::get('/update_report/{patient_id}', 'PatientsController@update_report');
	Route::post('/update_report/{patient_id}', 'PatientsController@update_report');
	Route::get('/show_report/{patient_id}', 'PatientsController@show_report');
	//adding doctor
	Route::get('/create_doctor', 'DoctorsController@create_doctor');
	Route::post('/create_doctor', 'DoctorsController@store_data');
	Route::get('/edit_doctor/{dr_id}', 'DoctorsController@edit_doctor');
	Route::get('/update_dr_info/{dr_id}', 'DoctorsController@update_dr_info');
	Route::post('/update_dr_info/{dr_id}', 'DoctorsController@update_dr_info');
	Route::get('/show_info/{dr_id}', 'DoctorsController@show_info');
	Route::get('/all_doctors', 'DoctorsController@show_all_dr');
	Route::get('/delete_doctor/{dr_id}', 'DoctorsController@delete_doctor');
	//indoor patient
	Route::get('/indoor_patient', 'IpatientsController@create_indoor_patient');
	Route::post('/indoor_patient', 'IpatientsController@store_data');
	Route::get('/edit_indoor_patient/{id}', 'IpatientsController@edit_indoor_patient_report');
	Route::get('/update_indoor_report/{id}', 'IpatientsController@update_indoor_report');
	Route::post('/update_indoor_report/{id}', 'IpatientsController@update_indoor_report');
	Route::get('/show_indoor_report/{id}', 'IpatientsController@show_report');
	Route::get('/all_indoor_report', 'IpatientsController@show_all_report');
	//generating report of total bill for individual month and range of month
	Route::get('/search', 'ReportsController@search_form');
	Route::post('/search', 'ReportsController@store_data');
	Route::get('/search_option/{id}', 'ReportsController@search_option');
	//Toal bill in a range of days
	Route::get('/total_bill_in_range', 'ReportsController@total_bill_in_range');
	Route::post('/total_bill_in_range', 'ReportsController@store_date_range');
	Route::get('/total_bill_range_report/{id}', 'ReportsController@total_bill_range_report');
	//yearly report of total balance for both
	Route::get('/yearly_report', 'ReportsController@yearly_report');
	Route::post('/yearly_report', 'ReportsController@store_year');
	Route::get('/summary_year/{id}', 'ReportsController@summary_year');
	//outdoor test balance of particular month
	Route::get('/monthly_outdoor_test_report', 'ReportsController@monthly_outdoor_test_report');
	Route::post('/monthly_outdoor_test_report', 'ReportsController@store_outdoor_test_month');
	Route::get('/monthly_outdoor_test_balance/{id}', 'ReportsController@monthly_outdoor_test');
	//Indoor test balance of particular month
	Route::get('/monthly_indoor_test_report', 'ReportsController@monthly_indoor_test_report');
	Route::post('/monthly_indoor_test_report', 'ReportsController@store_indoor_test_month');
	Route::get('/monthly_indoor_test_balance/{id}', 'ReportsController@monthly_indoor_test');
	//outdoor test balance of days of range
	Route::get('/outdoor_test_report_range', 'ReportsController@outdoor_test_report_range');
	Route::post('/outdoor_test_report_range', 'ReportsController@store_outdoor_range_date');
	Route::get('/outdoor_test_summary_range/{id}', 'ReportsController@outdoor_test_summary_range');
	//Indoor test balance of days of range
	Route::get('/indoor_test_report_range', 'ReportsController@indoor_test_report_range');
	Route::post('/indoor_test_report_range', 'ReportsController@store_indoor_range_date');
	Route::get('/indoor_test_summary_range/{id}', 'ReportsController@indoor_test_summary_range');
	// Yearly balance of several outdoor test in year
	Route::get('/yearly_outdoor_test_report', 'ReportsController@yearly_outdoor_test_report');
	Route::post('/yearly_outdoor_test_report', 'ReportsController@store_year_outdoor_yearly');
	Route::get('/summary_outdoor_report/yearly/{id}', 'ReportsController@summary_outdoor_report_yearly');
	// Yearly balance of several indoor test in year
	Route::get('/yearly_indoor_test_report', 'ReportsController@yearly_indoor_test_report');
	Route::post('/yearly_indoor_test_report', 'ReportsController@store_year_indoor_yearly');
	Route::get('/summary_indoor_report/yearly/{id}', 'ReportsController@summary_indoor_report_yearly');





	Route::get('/user/registration', 'UsersController@show_user_registration_form');
	Route::post('/user/registration', 'UsersController@store_user_and_assign_role_to_them');
	Route::get('/user/create_user_role', 'UsersController@create_user_role');
	Route::post('user/create_user_role', 'UsersController@store_user_role');
	Route::get('/user/all', 'UsersController@all_user');
	Route::get('/user/single/{id}', 'UsersController@single_user');

	Route::get('/user/single/{id}/edit', 'UsersController@edit_user');
	Route::post('/user/single/{id}/edit', 'UsersController@update_user');
	Route::post('/user/single/{id}/delete', 'UsersController@deleteUser');
	Route::post('/user/search', 'UsersController@user_search');
	//for redirection after login
	Route::get('/redirection_page', 'UsersController@redirection_page');
	//file created 
	Route::get('notallowed/{role}', 'UsersController@not_allowed');

	//auth route
	Route::controllers([
	    'auth' => 'Auth\AuthController',
	    'password' => 'Auth\PasswordController'
	]);
});