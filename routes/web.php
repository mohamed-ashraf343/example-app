 <?php

use App\Http\Controllers\PostController;
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

/*
        خطوات بناء البروجيكت
-1  defin a new route so the user can access it through browser
-2  defin controller that renders a view
-3  defin view that contains list the view
        you moment ago uncommitted changes
*/

Route::get('/dashbord' /* in URL Rout */, [PostController::class, 'dashAction'])->name(name:'dashbord');  /// defin the Controller and methoud Action
Route::get('/posts/index'/* in URL Rout */, [PostController::class, 'index'])->name(name:'post.posts.index');   /// defin the Controller and methoud Action
Route::get('/posts/{show}' /* in URL Rout */, [PostController::class, 'postShow'])->name(name:'post.posts.show');   /// defin the Controller and methoud Action


