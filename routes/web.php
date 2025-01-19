<?php

use App\Models\Activity;
use App\Models\Announcement;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $activities = Post::orderBy('published_at', 'desc')->take(5)->get();
    $left_activities = $activities->slice(1,2); // Ambil 2 untuk kolom kiri
    $center_activity = $activities->first(); // Ambil 1 untuk kolom tengah
    $right_activities = $activities->slice(3); // Ambil 3 untuk kolom kanan (dimulai dari indeks 2)
    // =====================================================================================================
    $allAnnouncement = Announcement::orderBy('published_at', 'desc')->take(5)->get();

    $left_announcement = $allAnnouncement->slice(0, 3); // Ambil 3 pertama
    $right__announcement = $allAnnouncement->slice(3, 1)->first(); // Ambil satu terakhir

    return view('frontends.home.index', compact('left_activities', 'center_activity', 'right_activities', 'left_announcement', 'right__announcement'));
});



Route::get('/home', function () {
    return redirect('/');
    // return view('frontends.home.index');
})->name('home');

Route::get('/kontak', function () {
    return view('frontends.contact.index');
})->name('contact');

Route::get('/profil', function () {
    return view('frontends.profile.index');
})->name('profile');


Route::get('/kegiatan', function () {
    $activity_banner = Post::with('category')->orderBy('published_at', 'desc')->limit(4)->get();
    $category        = Category::withCount('posts')->orderBy('name', 'asc')->get();
    $posts            = Post::orderBy('published_at', 'desc')->paginate(3);
    return view('frontends.activity.index', compact('category', 'activity_banner', 'posts'));
})->name('activity');

Route::get('/kegiatan/{post}', function (Post $post) {
    $category        = Category::withCount('posts')->orderBy('name', 'asc')->get();
    $allPost         = Post::orderBy('published_at', 'desc')->paginate(5);
    return view('frontends.activity.detail', compact('post', 'category', 'allPost'));
})->name('activity-detail');


Route::get('/pengumuman', function () {
    $allAnnouncement = Announcement::latest()->paginate(5);
    return view('frontends.announcement.index', compact('allAnnouncement'));
})->name('announcement');

Route::get('/pengumuman/{announcement}', function (Announcement $announcement) {
    $allAnnouncement = Announcement::latest()->limit(4)->get();
    return view('frontends.announcement.detail', compact('announcement', 'allAnnouncement'));
})->name('announcement-detail');

Route::post('kontak-send', function (Request $request) {
      $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'message' => 'required|string|max:1000',
    ], [
        'name.required' => 'Nama lengkap wajib diisi.',
        'phone.required' => 'Nomor Handphone wajib diisi.',
        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'message.required' => 'Pesan wajib diisi.',
    ]);
    Contact::create($validated);
    return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
})->middleware('throttle:3,1')->name('kontak.send');


Route::post('komentar-send/{post}', function (Request $request, Post $post) {
    $validated = $request->validate([
      'nama' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'no_hp' => 'required|string|max:20',
      'message' => 'required|string|max:1000',
  ], [
      'nama.required' => 'Nama lengkap wajib diisi.',
      'no_hp.required' => 'Nomor Handphone wajib diisi.',
      'email.required' => 'Email wajib diisi.',
      'email.email' => 'Format email tidak valid.',
      'message.required' => 'Pesan wajib diisi.',
  ]);
  $post->comments()->create($validated);
  return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
})->middleware('throttle:3,1')->name('comment.send');



