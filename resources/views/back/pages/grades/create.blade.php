@extends('back.layouts.app')

@section('title')

    <title>Jurnal yaz</title>
@endsection

@section('container')
    <section class="content-header">
        <h1>
            Jurnal yaz
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/aadmin') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Jurnal yaz</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-8">
                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Jurnal yaz [{{ $weekDay }}. GUN]</h3>
                    </div><!-- /.box-header -->


                    <form role="form" action="{{ url('/aadmin/grades') }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <input type="hidden" name="weekID" value="{{ request()->week }}"/>
                        <input type="hidden" name="date" value="{{ request()->date }}"/>
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <th>s.</th>
                                    <th>telebe</th>
                                    <th>fenn</th>
                                    <th>bal</th>
                                </tr>

                                @foreach($students as $s)
                                    <tr>
                                        <td>{{ $s['id'] }} - id</td>
                                        <td>{{ $s['first_name'] }} {{ $s['last_name'] }}</td>
                                        <td>
                                            <div class="form-group">
                                                <label for="subjectID_{{$s['id']}}"> {{ $s['id'] }}</label>
                                                <select name="subjectID[{{$s['id']}}]" class="form-control">
                                                    @foreach($subjects as $sub)
                                                        <option @if(old('subjectID['.$s['id'].']')==$sub['id']) selected @endif value="{{ $sub['id'] }}">{{ $sub['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">

                                                <label for="grade[{{$s['id']}}]"> {{ $s['id'] }}</label>
                                                <select name="grade[{{$s['id']}}]" class="form-control">]
                                                    @foreach($points as $p)
                                                        <option @if(old('grade['.$s['id'].']')==$p) selected @endif value="{{ $p }}">{{ $p }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody></table>
                            <hr/>

                            <div class="box-footer">
                                <a href="/aadmin/journals" class="btn btn-default">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
