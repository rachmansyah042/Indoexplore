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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function() {
	return view('home');
});

Route::get('/test',function() {
	return view('test');
});

Route::get('/login',function() {
	return view('login');
});

Route::get('/register',function() {
	return view('register');
});

Route::get('/forgot',function() {
	return view('forgot');
});

Route::get('/provider',function() {
	return view('provider');
});

Route::get('/editAkun',function() {
	return view('editAkunProvider');
});

Route::get('/lihatTrip',function() {
	return view('lihatTrip');
});

Route::get('/formEditTrip',function() {
	return view('formEditTrip');
});

Route::get('/lihatBook',function() {
	return view('lihatBookProvider');
});

Route::get('/lihatTrip',function() {
	return view('lihatTripProvider');
});

Route::get('/tabungan',function() {
	return view('tabunganProvider');
});

Route::get('/tambahTrip',function() {
	return view('tambahTripProvider');
});

Route::get('/destinasi/{id_trip}',function() {
	return view('destinasi');
});

Route::get('/kategori',function() {
	return view('kategori');
});

Route::get('/slide',function() {
	return view('slide');
});

Route::get('/sumatera',function() {
	return view('sumatera');
});

Route::get('/kalimantan',function() {
	return view('kalimantan');
});

Route::get('/sulawesi',function() {
	return view('sulawesi');
});

Route::get('/jawa',function() {
	return view('jawa');
});

Route::get('/privatetrip',function() {
	return view('privateTrip');
});

Route::get('/opentrip',function() {
	return view('opentrip');
});

Route::get('/coba',function() {
	return view('coba');
});

Route::get('/destinasiprivat',function() {
	return view('destinasiprivat');
});

Route::get('/opentravel',function() {
	return view('opentravel');
});

Route::get('/formpemesanan',function() {
	return view('formpemesanan');
});

Route::get('/ubahprofile',function() {
	return view('ubahprofile');
});

Route::get('/homeupdate',function() {
	return view('homeupdate');
});

Route::get('/history',function() {
	return view('historybooking');
});

Route::get('/kategori',function() {
	return view('kategoritrip');
});

