<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/ar', function () {
    return view('index-ar');
});


//Sectors ENG Links
Route::get('/Early-recovery-sector', function () {
    return view('pages.sectors.EN.Early-recovery-sector');
});
Route::get('/Education-sector', function () {
    return view('pages.sectors.EN.education-sector');
});
Route::get('/Environment-sector', function () {
    return view('pages.sectors.EN.Environment-sector');
});
Route::get('/Health-sector', function () {
    return view('pages.sectors.EN.Health-sector');
});
Route::get('/Human-rights-sector', function () {
    return view('pages.sectors.EN.Human-rights-sector');
});
Route::get('/Non-food-products-sector', function () {
    return view('pages.sectors.EN.non-food-products-sector');
});
Route::get('/Peacebuilding-sector', function () {
    return view('pages.sectors.EN.peacebuilding-sector');
});
Route::get('/Protection-sector', function () {
    return view('pages.sectors.EN.protection-sector');
});
Route::get('/Securing-food-sector', function () {
    return view('pages.sectors.EN.Securing-food-sector');
});




//Sectors AR Links
Route::get('/Early-recovery-sector-ar', function () {
    return view('pages.sectors.AR.Early-recovery-sector-AR');
});
Route::get('/Education-sector-ar', function () {
    return view('pages.sectors.AR.education-sector-AR');
});
Route::get('/Environment-sector-ar', function () {
    return view('pages.sectors.AR.Environment-sector-AR');
});
Route::get('/Health-sector-ar', function () {
    return view('pages.sectors.AR.Health-sector-AR');
});
Route::get('/Human-rights-sector-ar', function () {
    return view('pages.sectors.AR.Human-rights-sector-AR');
});
Route::get('/Non-food-products-sector-ar', function () {
    return view('pages.sectors.AR.non-food-products-sector-AR');
});
Route::get('/Peacebuilding-sector-ar', function () {
    return view('pages.sectors.AR.peacebuilding-sector-AR');
});
Route::get('/Protection-sector-ar', function () {
    return view('pages.sectors.AR.protection-sector-AR');
});
Route::get('/Securing-food-sector-ar', function () {
    return view('pages.sectors.AR.Securing-food-sector-AR');
});




//Main Pages AR Links
Route::get('/Who-Are-We-AR', function() {
    return view('pages.main.AR.who_are_we');
});
Route::get('/About-Us-AR', function() {
    return view('pages.main.AR.About_Us');
});
Route::get('/Our-Projects-AR', function() {
    return view('pages.main.AR.Our_Projects');
});
Route::get('/Connect-with-us-AR', function() {
    return view('pages.main.AR.Connect_with_us');
});
Route::get('/Reyhan-Stories-AR', function() {
    return view('pages.main.AR.Reyhan_Stories');
});
Route::get('/Events-AR', function() {
    return view('pages.main.AR.Events');
});
Route::get('/Initiatives-AR', function() {
    return view('pages.main.AR.Initiatives');
});
Route::get('/Campaigns-AR', function() {
    return view('pages.main.AR.Campaigns');
});
Route::get('/Reyhan-Gallery-AR', function() {
    return view('pages.main.AR.Reyhan_Gallery');
});



//Main Pages ENG Links
Route::get('/Who-Are-We', function() {
    return view('pages.main.EN.who_are_we');
})->name('who_are_we');
Route::get('/Our-Projects', function() {
    return view('pages.main.EN.Our_Projects');
});
Route::get('/Connect-with-us', function() {
    return view('pages.main.EN.Connect_with_us');
});
Route::get('/Reyhan-Stories', function() {
    return view('pages.main.EN.Reyhan_Stories');
});
Route::get('/Events', function() {
    return view('pages.main.EN.Events');
});
Route::get('/Initiatives', function() {
    return view('pages.main.EN.Initiatives');
});
Route::get('/Campaigns', function() {
    return view('pages.main.EN.Campaigns');
});
Route::get('/Reyhan-Gallery', function() {
    return view('pages.main.EN.Reyhan_Gallery');
});



//Main Pages AR Links
Route::get('/Who-Are-We-ar', function() {
    return view('pages.main.AR.who_are_we');
})->name('who_are_we');
Route::get('/Our-Projects-ar', function() { //Done
    return view('pages.main.AR.Our_Projects');
});
Route::get('/Connect-with-us-ar', function() { //Done
    return view('pages.main.AR.Connect_with_us');
});
Route::get('/Reyhan-Stories-ar', function() {
    return view('pages.main.AR.Reyhan_Stories');
});
Route::get('/Events-ar', function() {
    return view('pages.main.AR.Events');
});
Route::get('/Initiatives-ar', function() {
    return view('pages.main.AR.Initiatives');
});
Route::get('/Campaigns-ar', function() {
    return view('pages.main.AR.Campaigns');
});
Route::get('/Reyhan-Gallery-ar', function() {
    return view('pages.main.AR.Reyhan_Gallery');
});


// Campaigns ENG Links
Route::get('/campaigns/Food_aid', function() {
   return view('pages.Campaigns.EN.Food_Campaign_EN');
});
