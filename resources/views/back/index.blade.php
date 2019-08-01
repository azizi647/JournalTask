@extends('back.layouts.app')

@section('title')

  <title>Jurnal</title>
@endsection

@section('container')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">

        {{-- Main row --}}
        <div class="row">
            {{-- left column --}}
            <div class="col-md-12">
                {{-- error olanda start --}}
                <div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                {{-- error olanda end --}}
                <div class="flash-message">
                    @if(Session::has('alert-success'))
                        <p class="alert alert-success">{{ Session::get('alert-success') }}
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                </div>
                {{--  end .flash-message  --}}
            </div>
        </div>
    </section>

@endsection