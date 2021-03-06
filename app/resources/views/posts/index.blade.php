@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Posts</h1>
                </div>

                <div class="col-sm-4">
                    <form method="GET" action="{{ route('posts.index') }}">
                        <div class="d-flex flex-row float-right">
                            <input type="search" name="search" value="@if (isset($search)) {{ $search }} @endif">
                                {{-- <a href="{{ route('posts.index') }}" class="btn btn-sm btn-success float-right">Clear</a> --}}
                                <button type="submit" class="btn btn-sm btn-outline-success float-right ml-1" >Search</button>
                        </div>
                    </form>
                </div>

                <div class="col-sm-2">
                    <a class="btn btn-primary float-right"
                    href="{{ route('posts.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('posts.table')

                <div class="card-footer clearfix">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

