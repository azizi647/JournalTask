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
                        <h3 class="box-title">Ders gunleri</h3>
                    </div><!-- /.box-header -->

                    <form role="form" action="{{ url('/aadmin/journals') }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <th>s.</th>
                                    <th>gün</th>
                                    <th>1. dərs</th>
                                    <th>2. dərs</th>
                                    <th>3. dərs</th>
                                    <th>4. dərs</th>
                                    <th style="width: 40px">sechim</th>
                                </tr>

                                @foreach($days as $day)
                                    <tr>
                                        <td>{{ $day['id'] }}</td>
                                        <td>{{ $day['name'] }}</td>
                                        <td>
                                            <div class="form-group">

                                                <select name="day[{{$day['id']}}][1]" class="form-control">
                                                    @foreach($subjects as $s)
                                                        <option @if(old('day['.$day['id'].'][1]') == $s['id']) selected @endif value="{{ $s['id'] }}">{{ $s['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">

                                                <select name="day[{{$day['id']}}][2]" class="form-control">
                                                    @foreach($subjects as $s)
                                                        <option @if(old('day['.$day['id'].'][2]') == $s['id']) selected @endif value="{{ $s['id'] }}">{{ $s['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">

                                                <select name="day[{{$day['id']}}][3]" class="form-control">
                                                    @foreach($subjects as $s)
                                                        <option @if(old('day['.$day['id'].'][3]') == $s['id']) selected @endif value="{{ $s['id'] }}">{{ $s['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">

                                                <select name="day[{{$day['id']}}][4]" class="form-control">
                                                    @foreach($subjects as $s)
                                                        <option @if(old('day['.$day['id'].'][2]') == $s['id']) selected @endif value="{{ $s['id'] }}">{{ $s['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-red"> 4 fenn </span></td>
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