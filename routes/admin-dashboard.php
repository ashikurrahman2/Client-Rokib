<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisteredAdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CampaingController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\ChildcategorieController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\PickupController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubcategorieController;
use App\Http\Controllers\Admin\WarehouseController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FactController;
use App\Http\Controllers\Admin\ChooseUsController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SmtpController;
use App\Http\Controllers\Admin\NotificationController;

/*
|--------------------------------------------------------------------------
| ⚠️ IMPORTANT: Role Name Fix
|--------------------------------------------------------------------------
| আপনার database এ role name যেটা আছে সেটা ব্যবহার করুন।
|
| যদি role name "superadmin" হয়  → নিচের OPTION A uncomment করুন
| যদি role name "super-admin" হয় → নিচের OPTION B uncomment করুন
|
| দুটো একসাথে active রাখলে সমস্যা হবে না, Laravel উভয়ই handle করবে।
|--------------------------------------------------------------------------
*/

// ============================================================
// OPTION A: role name = "superadmin" (হাইফেন ছাড়া)
// ============================================================
// $allRoles    = 'superadmin|admin|editor';
// $adminRoles  = 'superadmin|admin';

// ============================================================
// OPTION B: role name = "super-admin" (হাইফেন সহ)
// ============================================================
// $allRoles    = 'super-admin|admin|editor';
// $adminRoles  = 'super-admin|admin';

// ============================================================
// উভয় case handle করতে চাইলে এটা ব্যবহার করুন (Recommended)
// ============================================================
$allRoles   = 'superadmin|super-admin|admin|editor';
$adminRoles = 'superadmin|super-admin|admin';


// ============================================================
// Accessible by all authenticated admins (superadmin, admin, editor)
// ============================================================
Route::prefix('admin')->middleware(['auth:admin', "role:{$allRoles}"])->group(function () {

    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [AdminHomeController::class, 'show'])->name('admin.profile');
    Route::get('/profile/edit', [AdminHomeController::class, 'edit'])->name('admin.profile.edit');
    Route::put('/profile/update', [AdminHomeController::class, 'update'])->name('admin.profile.update');

    Route::get('/password/change', [AdminHomeController::class, 'passwordChange'])->name('admin.password.change');
    Route::post('/password/update', [AdminHomeController::class, 'passwordUpdate'])->name('admin.password.update');
    Route::get('/logout', [LoginController::class, 'destroy'])->name('admin.logout');

    Route::get('/notifications/clear-all', [NotificationController::class, 'clearAll'])->name('notifications.clearAll');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::post('/notifications/mark-all-read', [NotificationController::class, 'markAllAsRead'])->name('notifications.markAllAsRead');

    // Front Page Management
    Route::resource('slider', SliderController::class);
    Route::resource('feature', FeatureController::class);
    Route::resource('about', AboutController::class);
    Route::resource('fact', FactController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('choose-us', ChooseUsController::class);
    Route::resource('faq', FaqController::class);
    Route::get('/messages', [ContactUsController::class, 'index'])->name('contactus.index');
    Route::delete('/messages/{message}', [ContactUsController::class, 'destroy'])->name('contactus.destroy');
});


// ============================================================
// Accessible only by superadmin and admin
// ============================================================
Route::prefix('admin')->middleware(['auth:admin', "role:{$adminRoles}"])->group(function () {

    // Role & Permission Management
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);
    Route::get('roles/{id}/give-permissions', [RoleController::class, 'addPermissionToRole'])->name('roles.give-permissions');
    Route::put('roles/{id}/give-permissions', [RoleController::class, 'givePermissionToRole'])->name('roles.update-permissions');

    // Admin Users
    Route::resource('users', AdminUserController::class);

    // Registered Admin Approval
    Route::get('/registered-admins', [RegisteredAdminController::class, 'index'])->name('registered-admins.index');
    Route::put('/registered-admins/{id}/approve', [RegisteredAdminController::class, 'approve'])->name('registered-admins.approve');
    Route::delete('/registered-admins/{id}/reject', [RegisteredAdminController::class, 'reject'])->name('registered-admins.reject');

    Route::resource('category', CategorieController::class)->except(['show', 'create']);
    Route::resource('subcategory', SubcategorieController::class)->except(['show', 'create']);
    Route::resource('childcategory', ChildcategorieController::class)->except(['show', 'create']);
    Route::resource('campaing', CampaingController::class)->except(['show', 'create']);
    Route::resource('brand', BrandController::class)->except(['show', 'create']);
    Route::resource('warehouse', WarehouseController::class)->except(['show', 'create']);
    Route::resource('coupon', CouponController::class)->except(['show', 'create']);
    Route::resource('pickuppoint', PickupController::class)->except(['show', 'create']);
    Route::resource('product', ProductController::class);

    Route::get('product/active-featured/{id}', [ProductController::class, 'activefeatured']);
    Route::get('product/not-featured/{id}', [ProductController::class, 'notfeatured']);
    Route::get('product/active-deal/{id}', [ProductController::class, 'activedeal']);
    Route::get('product/not-deal/{id}', [ProductController::class, 'notdeal']);
    Route::get('product/active-status/{id}', [ProductController::class, 'activestatus']);
    Route::get('product/not-status/{id}', [ProductController::class, 'notstatus']);

    Route::get('/get-child-category/{id}', [CategorieController::class, 'GetChildCategory']);
});


// ============================================================
// Setting routes (only for superadmin and admin)
// ============================================================
Route::middleware(['auth:admin', "role:{$adminRoles}"])->prefix('setting')->group(function () {
    Route::resource('seo', SeoController::class)->only(['index', 'update']);
    Route::resource('smtp', SmtpController::class)->only(['index', 'update']);
    Route::resource('website', SettingController::class)->only(['index', 'update']);
    Route::resource('page', PageController::class);
});