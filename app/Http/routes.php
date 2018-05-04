<?php

use App\Country;
use App\Post;
use App\User;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'PostsController@test');

Route::get('/prototype', 'PostsController@prototype');

Route::get('/app', function () {
    return view('app');
});


/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
|
*/


// In die Datenbank schreiben

// Route::get('/insert', function() {
    
//   DB::insert('insert into posts(title, content) values (?, ?)', ['Laravel is awesome with Edwin', 'PHP best best best']);
    
// });


// Aus der Datenbank auslesen

// Route::get('/read', function() {
    
//     $results = DB::select('select * from posts where id = ?', [1]); 

//     foreach($results as $post) {
       
//       return $post->title;
//     }
    
// });


// Daten in der Datenbank aktualisieren

// Route::get('/update', function() {
    
//     $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
    
//     return $updated;
        
// });


// Daten aus der Datenbank löschen

// Route::get('/delete', function () {
    
//   $deleted = DB::delete('delete from posts where id = ?', [1]);
   
//   return $deleted;
    
// });


/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
|
*/


// Aus der Datenbank lesen 

// Route::get('/read', function() {
    
//     $posts = Post::all();
    
//     foreach($posts as $post) {
        
//         return $post->title;
        
//     }
    
// });


// Findet und zeigt den 2.ten Eintrag(für alle: all() schreiben) in der Tabelle

// Route::get('/find', function() {
    
//     $post = Post::find(2);
    
//     return $post->title;
    
//     // foreach($posts as $post) {
        
//     //     return $post->title;
        
//     // }
    
// });


// Route::get('/findwhere', function () {

//     $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
   
//     return $posts;
    
// });


// Route::get('/findmore', function() {
    
// //   $posts = Post::findOrFail(); 
   
// //   return $posts;

//     $posts = Post::where('users_count', '<', 50)->firstOrFail();

// });


// Neue Methode erstellen, 2 Datensätze einfügen, speichern

// Route::get('/basicinsert', function(){
   
//   $post = new Post;
   
//   $post->title = 'New Eloquent title insert';
//   $post->content = 'Wow eloquent is cool';
   
//   $post->save();
    
// });


// Id 2 finden, 2 Datensätze einfügen, speichern

// Route::get('/basicinsert2', function(){
   
//   $post = Post::find(2);
   
//   $post->title = 'New Eloquent title insert #2';
//   $post->content = 'Wow eloquent is cool #2';
   
//   $post->save();
    
// });


// Erstelle neue Tabelle mit Spalten und deren Inhalten

Route::get('/create', function(){
    
  Post::create(['title'=>'the create method', 'content'=>'WOW i learn alot']);
    
});


// Aktualisiere spezifische Stellen in der Tabelle

// Route::get('/update', function(){
    
//   Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'i love my instructor Edwin!']);
    
// });


// Finden der ID, Löschen von Spalten

// Route::get('/delete', function(){
    
//   $post = Post::find(2);
   
//   $post->delete();
    
// });


// Löschen von Spalte 3

// Route::get('/delete2', function(){
   
//   Post::destroy(3);
    
// });


// Mehrere Spalten löschen [4, 5]

// Route::get('/delete3', function(){
    
//     Post::destroy([4,5]);
    
//     // Post::where('is_admin', 0)->delete();
    
// });



// "Löschen" mit Zeitstempel
 Route::get('/softdelete', function() {
        
        Post::find(1)->delete();
     
 });

// Wiederherstellen von gelöschten Daten
Route::get('/restore', function(){
   
   Post::withTrashed()->where('is_admin', 0)->restore();
    
});

// Endgültiges!!! Löschen von gelöschten Daten
Route::get('/forcedelete', function(){
   
   Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
    
});


/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
*/

// One to One Relationship

Route::get('/user/{id}/post', function($id) {
    
    return User::find($id)->post->title;
    
    
});

// The inverse (umgekehrte/reziproke) relation

Route::get('/post/{id}/user', function($id) {

    return Post::find($id)->user->name;
 
});


// 11 - 65 many to many relations
Route::get('/user/{id}/role', function($id){
    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
    
    return $user;
    
    // foreach($user->$roles as $role){
    //  return $role->name;  
    // }
});



/*
|--------------------------------------------------------------------------
| DICTCC Wordfinder 
|--------------------------------------------------------------------------
*/

Route::get('/dict/{id}', function($id){
    return redirect('http://www.dict.cc/?s=' . $id);
});


Route::get('user/pivot', function(){
   
   $user = User::find(1);
   
   foreach($user->roles as $role){
       
       echo $role->pivot->create_at; 
   }
   
   
});

// has Many Trhough relation part 2 11/68
Route::get('/user/country/{id}', function($id){
   
   
   $country = Country::find($id); 
   
   foreach($country->posts as $post){
       
       return $post->title;
   }
   
});


// Polymorpic Realtions
Route::get('user/photos', function(){
    
    $user = User::find(1);

    foreach($user->photos as $photo) {
    
        return $photo;
        // return $photo->path;
    
    }
});

//Route::get('post/photos', function(){
Route::get('post/{id}/photos', function($id){
    
    //$post = Post::find(1);
    $post = Post::find($id);

    foreach($post->photos as $photo) {
    
        echo $photo->path . "<br>";
        // return $photo->path;
    
    }
});