@extends('back.layouts.app')

@section('title')

    <title>Jurnal yaz</title>
@endsection

@section('metalinks')
    {{-- Date Picker --}}
    <link rel="stylesheet" href="{{ asset('back/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">

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
                        <h3 class="box-title">Jurnal yaz</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">

                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $("#from-datepicker").datepicker({
                                        format: 'yyyy-mm-dd'
                                    });
                                    $("#from-datepicker").on("change", function () {
                                        var fromdate = $(this).val();
                                    });
                                });
                            </script>
                            <form class="form-inline" action="{{ url('/aadmin/grades/select') }}" method="GET">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="from-datepicker" class="sr-only">Date</label>
                                    <input type="text" class="form-control" id="from-datepicker"  name="date" placeholder="select date">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">ok</button>
                            </form>
                            <hr/>

                            <div class="box-footer">
                                <a href="/aadmin/journals" class="btn btn-default">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('metafooter')
    {{-- datepicker --}}
    <script src="{{ asset('back/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
@endsection