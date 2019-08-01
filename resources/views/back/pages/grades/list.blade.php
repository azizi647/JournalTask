@extends('back.layouts.app')

@section('title')

    <title>Jurnal yarat</title>
@endsection

@section('container')
    <section class="content-header">
        <h1>
            Jurnal yarat
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/aadmin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Jurnal yarat</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-8">
                <!-- /.box -->

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Ders Hesabati</h3>
                </div><!-- /.box-header -->

                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>shagirdler</th>
                                @foreach($subjects as $s)
                                <th>{{ $s->name }}</th>
                                @endforeach
                            </tr>
                            {{-- ish choxluguna gore bu biabrciliqa yol verirem / dont worry --}}
                            @foreach($students as $student)
                            <tr>
                                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                                @foreach($subjects as $subject)
                                    <td>{{ \JurnalTask\Grade::where(['studentID'=>$student->id, 'subjectID'=>$subject->id])->whereIn('grade',[1,2,3,4,5])->avg('grade') }}</td>
                                @endforeach
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection