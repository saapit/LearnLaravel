<?php

namespace App\Http\Controllers;

use App\Student;
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
        //return->model->all data dalam json
        // return Student::all();

        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // cara 1st
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->phone = $request->phone;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        // cara 2nd
        // Student::create([
        //     'nama' => $request->nama,
        //     'phone' => $request->phone,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        // validation
        $request->validate([
            'nama' => 'required',
            'phone' => 'required|size:9',
            'email' => 'required',
            'jurusan' => 'required'
        ]);


        // cara 2nd simpilfly refering to guarded or fillable in Student Model
        Student::create($request->all());
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // compact == ['students' => $students]
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
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
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // validation
        $request->validate([
            'nama' => 'required',
            'phone' => 'required|size:9',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        //ada dua data, data lama $ baru(edited)
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'phone' => $request->phone,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);

        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil DiUbah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Didelete!');
    }
}
