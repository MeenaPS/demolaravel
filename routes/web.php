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
use App\Task; //model name 'Task under App folder'
use Illuminate\Http\Request;

/*Route::get('/', function () {
    //return view('welcome');  //welcome.blade.php
    
});*/

Route::get('/', function () {
    //$tasks = Task::orderBy('created_at', 'asc')->get(); //get the records based on order
     $tasks = Task::all(); // get all records from 'tasks' table
    //$tasks = DB::table('tasks')->where('id',5)->get(); //to get particular record details
    //$tasks = Task::where('id',3)->get(); //to get particular record details
    return view('tasks', [
        'tasks' => $tasks
    ]);
});

/**
 * Add A New Task
 */
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});
/**
 * Delete An Existing Task
 */
Route::delete('/task/{id}', function ($id) {
    Task::findOrFail($id)->delete();

    return redirect('/');
});


Route::resource('student','StudentController'); 


Route::get('about', function () {
	$bitfumes = ['This','is', 'bitfumes'];
    return view('about', ['bitfum' =>$bitfumes]);  //about.blade.php
})->middleware('test');
Route::resource('songs','SongsController'); 


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/signup', function () {
    return view('index');  //index.blade.php
});

Route::post('/register', 'RegistersController@register');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');
