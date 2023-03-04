<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Internship;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $news = DB::table('news');
        $news = $news->get();

        $loker = DB::table('jobs');
        $loker = $loker->get();


        return view('homepage', [
            'news' => $news,
            'loker' => $loker,

        ]);
        // return view('homepage');
    }
    public function loker(Request $request)
    {
        $loker = DB::table('jobs');
        $loker = $loker->get();


        return view('lowongan', [
            'loker' => $loker,

        ]);
    }



    //user controller
    public function lowongan(Request $request)
    {
        $loker = DB::table('jobs');
        $loker = $loker->get();


        return view('user.lowongan', [
            'loker' => $loker,

        ]);
    }
    public function news(Request $request)
    {
        $news = DB::table('news');
        $news = $news->get();


        return view('user.news', [
            'news' => $news,

        ]);
    }
    public function guruTamu(Request $request)
    {
        $guru = DB::table('guest_teachers');
        $guru = $guru->get();


        return view('user.guru', [
            'guru' => $guru,

        ]);
    }

    //pkl controller
    public function dataPkl(Request $request)
    {
        $user = auth()->user();

        $data = DB::table('internships');
        $data = $data->get()->where('status', 'approved');
        $data = Internship::where('user_id', $user->id)->get();



        return view('user.pkl.data', [
            'data' => $data,

        ]);
    }
    public function daftarPkl(Request $request)
    {
        $user = auth()->user();

        $data = DB::table('internships');
        $data = $data->get();
        $data = Internship::where('user_id', $user->id)->get();


        return view('user.pkl.daftar', [
            'data' => $data,

        ]);
    }
    // public function internship(Request $request)
    // {
    //     $data = DB::table('internships');
    //     $data = $data->get();


    //     return view('user.pkl.data', [
    //         'pkl' => $data,
    //     ]);
    // }
    public function storeInternship(Request $request)
    {
        //validate form
        // $this->validate($request, [
        //     'name'     => 'required|',
        //     'major'     => 'required|min:5',
        //     'jenis_kelamin'   => 'required|min:2',
        //     'asal_sekolah'   => 'required|min:5',
        // ]);


        // Post::create([
        //     'name'     => $request->name,
        //     'major'   => $request->major,
        //     'jenis_kelamin'   => $request->jenis_kelamin,
        //     'asal_sekolah'   => $request->asal_sekolah,

        // ]);

        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();

        $file->storeAs('uploads', $filename);

        $file_path = storage_path('app/uploads/' . $filename);

        $user = auth()->user();

        $intern = new Internship;

        $intern->name = $request->name;
        $intern->major = $request->major;
        $intern->jenis_kelamin = $request->jenis_kelamin;
        $intern->asal_sekolah = $request->asal_sekolah;
        $intern->durasi_pkl = $request->durasi_pkl;
        $intern->surat_pengajuan = $filename;
        // $intern->file_path = $file_path;

        $user->internships()->save($intern);


        // DB::table('internships')->insert([
        //     'name'     => $request->name,
        //     'major'   => $request->major,
        //     'jenis_kelamin'   => $request->jenis_kelamin,
        //     'asal_sekolah'   => $request->asal_sekolah,
        //     'durasi_pkl'   => $request->durasi_pkl,
        // ]);

        //redirect to index
        return redirect()->route('pkl.daftar')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
