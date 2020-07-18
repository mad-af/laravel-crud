<?php

namespace Laravel\Http\Controllers;

use Laravel\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::all();
        // dump($data);
        return view('students/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = new Student;
        // $data->name = $request->name;
        // $data->email = $request->email;
        // $data->jurusan = $request->jurusan;
        // $data->save();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Laravel\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students/show', ['data' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Laravel\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Laravel\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        Student::where('id', $student->id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan
                ]);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Laravel\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Di Hapus');
    }

    public function trash(){
        $data = Student::onlyTrashed()->get();
        return view('students/trash', compact('data'));
    }

    public function restore($student){
        // dd($student);
        $data = Student::onlyTrashed()->where('id', $student);
        $data -> restore();
        return redirect('/students/trash')->with('status', 'Data Mahasiswa Berhasil Di Kembalikan');
    }

    public function fix_destroy($student){
        $data = Student::onlyTrashed()->where('id', $student);
        $data -> forceDelete();
        return redirect('/students/trash')->with('status', 'Data Mahasiswa Berhasil Di Hapus');
    }
}
