<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {return view('home');})->name('home');

Route::get('Welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('Person',App\Http\Controllers\Person\Index::class)->name('Person');
Route::get('Person/Create',App\Http\Controllers\Person\Create::class)->name('CreatePerson');
Route::get('Person/Supplier',App\Http\Controllers\Person\Supplier::class)->name('SupplierPerson');



Route::get('Buy',App\Http\Controllers\Buy\Index::class)->name('Buy');
Route::get('Buy/Create',App\Http\Controllers\Buy\Create::class)->name('CreateBuy');
Route::get('Buy/Invoices',App\Http\Controllers\Buy\CreateInvoice::class)->name('CreateInvoice');
Route::get('Buy/Debt',App\Http\Controllers\Buy\Company::class)->name('DebtCompany');
Route::get('Buy/{stock:id}',App\Http\Controllers\Buy\Edit::class)->name('EditBuy');




Route::get('Notification',App\Http\Controllers\Notification\Index::class)->name('Notification');
Route::get('Notification/Exp',App\Http\Controllers\Notification\Small::class)->name('SmallNotification');
Route::get('Notification/Lack',App\Http\Controllers\Notification\LackStock::class)->name('LackOfStockNotification');
Route::get('Notification/Amount',App\Http\Controllers\Notification\Expired::class)->name('ExpiredNotification');


Route::get('Daily',App\Http\Controllers\Daily\Index::class)->name('Daily');
Route::get('Outcome',App\Http\Controllers\Outcome\Index::class)->name('Outcome');


Route::get('Box',App\Http\Controllers\Box\Index::class)->name('Box');
Route::get('Box/Create',App\Http\Controllers\Box\Create::class)->name('CreateBox');
Route::get('Box/View',App\Http\Controllers\Box\View::class)->name('ViewBox');


Route::get('Purchase',App\Http\Controllers\Purchase\Index::class)->name('Purchase');
Route::get('Purchase/Create',App\Http\Controllers\Purchase\Create::class)->name('CreatePurchase');


Route::get('Driver',App\Http\Controllers\Driver\Index::class)->name('Drivers');


Route::get('Company',App\Http\Controllers\Company\Index::class)->name('Company');


Route::get('Position',App\Http\Controllers\Position\create::class)->name('Position');



// Small invoice and Big invoice
Route::get('/invoice', App\Http\Controllers\SmallInvoices::class)->name('Invoice');
Route::get('/Receipt', App\Http\Controllers\BigInvoice::class)->name('Receipt');



Route::get('Index',App\Http\Controllers\return\Index::class)->name('ReturnIndex');


Route::get('View',App\Http\Controllers\return\View::class)->name('ReturnView');

Route::get('Report',App\Http\Controllers\Report\Index::class)->name('Report');
Route::get('Report/Money',App\Http\Controllers\Report\Money::class)->name('ReportMoney');


