
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\EquipeManagement;
use App\Http\Livewire\LegendeManagement;
use App\Http\Livewire\RoleManagement;

use App\Http\Livewire\EmploiManagement;
use App\Http\Livewire\LaravelExamples\UserManagement;
use App\Http\Livewire\EditUser;
use App\Http\Livewire\Pointages;
use App\Http\Livewire\FormulaireRole ;
use App\Http\Livewire\Inscriptionemploi;
use App\Http\Livewire\Inscriptionrole;
use App\Http\Livewire\Inscriptionequipe;
use App\Http\Livewire\Inscriptionlegende;
//use App\Http\Livewire\PaginateUser;
use App\Http\Livewire\Editequipe;
use App\Http\Livewire\Editrole ;
use App\Http\Livewire\Editemploi;
use App\Http\Livewire\Editlegende;
use App\Http\Livewire\Inscription;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PointageBilanController;
//use App\Http\Controllers\LegendeController;
use App\Http\Controllers\SemaineController;
//use App\Http\Controllers\EquipeController;
use App\Http\Controllers\EmploiController;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;

use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;

use App\Http\Livewire\LaravelExamples\UserProfile;

use App\Http\Livewire\VirtualReality;
use Illuminate\Http\Request;

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
    return redirect('/dashboard');
});

//pointages
//Route::get('/pointages', Pointages::class)->name('pointages');

//Route::controller(SemaineController::class)->group(function () {
//Route::get('/', 'index');
//Route::get('/semaine/create', 'create');
//Route::get('/semaine/{id}', 'show');
//Route::get('/semaine/{id}/edit', 'edit');

//Route::post('/semaine', 'store');
// Route::patch('/semaine/{id}', 'update');
// Route::delete('/semaine/{id}', 'destroy');
//});

Route::middleware('guest')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');

    Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
    Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');
});
Route::get('bilan', [PointageBilanController::class,'render']);
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    // La route-ressource => Les routes "register.*"
    Route::get('/inscription',Inscription ::class)->name('inscription');
// La route-ressource => Les routes "registerLegende.*"
    Route::get('/inscriptionlegende',Inscriptionlegende ::class)->name('inscriptionlegende');
    Route::get('/inscriptionrolre',Inscriptionrole ::class)->name('inscriptionrole');
// La route-ressource => Les routes "registerEmploi.*"
    Route::get('/inscriptionemploi', Inscriptionemploi ::class)->name('inscriptionemploi');
// La route-ressource => Les routes "registerEquuipe.*"
    Route::get('/formulaire-role',FormulaireRole ::class)->name('formulaire-role');
    Route::get('/inscriptionequipe',Inscriptionequipe ::class)->name('inscriptionequipe');
//Route::get('/pointages',PaginateUser::class)->name('pointages');
    Route::get('semaine', [SemaineController::class,'qwery'])->name('semaine.search');
    Route::get('emploi', [EmploiController::class,'qwery'])->name('emploi.search');
// La route-ressource => Les routes "Legende.*"

    Route::get('send-mail', [MailController::class,   'index']);
//Route::resource('legendes', LegendeController ::class);
// La route-ressource => Les routes "Equipes.*"
//Route::resource('equipes', EquipeController::class);
// La route-ressource => Les routes "semaine.*"
    Route::resource('semaines', SemaineController::class);
// La route-ressource => Les routes "emploi.*"
    Route::resource('emplois', EmploiController::class);

    Route::get('legende-management/{id}/edit',Editlegende::class)->name('editlegende');
    Route::get('user-management/{id}/edit',EditUser::class)->name('edit-user');
    Route::get('role-management/{id}/edit',Editrole ::class)->name('editrole');

    Route::get('emploi-management/{id}/edit',Editemploi::class)->name('editemploi');
    Route::get('equipe-management/{id}/edit',Editequipe::class)->name('editequipe');
    Route::get('/pointages',Pointages::class)->name('pointages');
//Route::get('/legendes',Legendes::class)->name('legendes');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/virtual-reality', VirtualReality::class)->name('virtual-reality');
    Route::get('/user-profile', UserProfile::class)->name('user-profile');
    Route::get('/user-management', UserManagement::class)->name('user-management');
    Route::get('/legende-management', LegendeManagement::class)->name('legende-management');
    Route::get('/equipe-management', EquipeManagement::class)->name('equipe-management');
    Route::get('/emploi-management', EmploiManagement::class)->name('emploi-management');
    Route::get('/role-management', RoleManagement::class)->name('role-management');
//Route::get('user-management', UserManagement::class)->middleware('auth')->name('user-management');
});
