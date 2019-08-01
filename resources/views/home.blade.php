@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ url('/aadmin/jurnal/create') }}">Jurnal yarat</a></li>
                            <li class="list-group-item"><a href="{{ url('/aadmin/jurnal/write') }}">Jurnal yaz</a></li>
                            <li class="list-group-item"><a href="{{ url('/aadmin/jurnal') }}">Hesabat</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
