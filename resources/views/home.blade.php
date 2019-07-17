@extends('layouts.app')

@section('content')
<div class="container">
    @role('admin')
    <h1>You are the Admin</h1>
    @endrole
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class='search-form' method="POST" action="{{ route('search') }}">
                         @csrf
                        <input class='form-control' placeholder='Search with addess, postcode, zipcode' type='text' name='search'>
                        <button class='btn btn-link search-btn' type="submit">
                        <i class='glyphicon glyphicon-search'></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
