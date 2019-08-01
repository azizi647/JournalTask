<?php

namespace JurnalTask\Http\Controllers\Backend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use JurnalTask\Day;
use JurnalTask\Http\Controllers\Controller;
use JurnalTask\Journal;
use JurnalTask\Subject;
use Validator;

class JournalController extends Controller
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
    public function create()
    {
        return view('back.pages.journals.create',[
            'days'=>Day::select(['id', 'name'])->where(['status'=>1])->get()->toArray(),
            'subjects'=>Subject::select(['id', 'name'])->where(['status'=>1])->get()->toArray()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return dd($request->all());
        $validator = Validator::make($request->all(),[
            'day.*.*'=>'required|numeric'
        ]);

        if($validator->fails()){
            return redirect('/aadmin/journals/create')
                ->withErrors($validator)
                ->withInput();
        }


        try{
            Journal::truncate();
            \DB::table('journals')->truncate();

            $journal = new Journal([]);
            $journal->save();

            foreach($request->day as $d=>$subjects){
                foreach($subjects as $h=>$s_id){
                    \DB::table('journal_day_subject_xref')->insert([
                        'journalID'=>$journal->id,
                        'dayID'=>$d,
                        'subjectID'=>$s_id,
                        'lessonOrder'=>$h,
                        'created_at' => \Carbon\Carbon::now(),
                        'updated_at' => \Carbon\Carbon::now(),
                    ]);
                }
            }
            $request->session()->flash('alert-success', 'Journal was successful added!');
            return Redirect::to('/aadmin/journals');

        }catch (\Exception $e){
            return redirect('/aadmin/journals/create')->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
