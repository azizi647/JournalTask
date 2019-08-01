<?php

namespace JurnalTask\Http\Controllers\Backend;

use Illuminate\Http\Request;
use JurnalTask\Http\Controllers\Controller;
use JurnalTask\Student;
use JurnalTask\Subject;
use Illuminate\Support\Facades\Redirect;
use Validator;

class GradeController extends Controller
{
    /**
     * JournalController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function select(Request $request)
    {
        if($request->date){
            $unixTimestamp = strtotime($request->date);
            $dayOfWeek = date('w', $unixTimestamp);
            if($dayOfWeek>0 && $dayOfWeek<6)
                return redirect('/aadmin/grades/create?week='.$dayOfWeek.'&date='.$request->date);
        }
        return view('back.pages.grades.select');
    }

    public function create(Request $request)
    {
        if($request->week){
            $subjectDatas = \DB::table('subjects')->select(['subjects.id','name'])->leftJoin('journal_day_subject_xref',function ($join) {
                $join->on('journal_day_subject_xref.subjectID', '=', 'subjects.id')
                    ->where('subjects.status', '=', 1);
            })->where(['dayID'=>(int)$request->week])->get();
            $checkedSubjects = collect($subjectDatas)->map(function($x){ return (array) $x; })->toArray();
//            return dump($checkedSubjects);
            return view('back.pages.grades.create',[
                'students'=>Student::where(['status'=>1])->get()->toArray(),
                'points'=>['ie','qb',1,2,3,4,5],
                'subjects'=>$checkedSubjects,
                'weekDay'=>$request->week
            ]);
        }
        return view('back.pages.grades.select');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'weekID'=>'required|numeric',
            'subjectID.*'=>'required|numeric',
            'grade.*'=>'required'
        ]);

        if($validator->fails()){
            return redirect('/aadmin/grades')
                ->withErrors($validator)
                ->withInput();
        }


        try{
            $students = Student::where(['status'=>1])->select(['id'])->get();
            foreach($students as $s){
                    \DB::table('grades')->insert([
                        'studentID'=>$s->id,
                        'subjectID'=>$request->subjectID[$s->id],
                        'dayID'=>$request->weekID,
                        'grade'=>$request->grade[$s->id],
                        'created_at' => strip_tags($request->date.' 00:00:00'),
                        'updated_at' => strip_tags($request->date.' 00:00:00'),
                    ]);
            }
            $request->session()->flash('alert-success', 'Grade was successful added!');
            return Redirect::to('/aadmin/grades');

        }catch (\Exception $e){
            return redirect('/aadmin/grades')->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

//    public function show($id)
//    {
//        //
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listGrades()
    {

        return view('back.pages.grades.list',[
            'students'=>Student::all(),
            'subjects'=>Subject::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
//        //
//    }
}
