@extends('layouts.app')

@section('template_title')
    {{ $teacher->name ?? "{{ __('Show') Teacher" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Teacher</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teachers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $teacher->name }}
                        </div>
                        <div class="form-group">
                            <strong>Specialization:</strong>
                            {{ $teacher->specialization }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $teacher->email }}
                        </div>
                        <div class="form-group">
                            <strong>Hiredate:</strong>
                            {{ $teacher->hireDate }}
                        </div>
                        <div class="form-group">
                            <strong>Rank:</strong>
                            {{ $teacher->rank }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
