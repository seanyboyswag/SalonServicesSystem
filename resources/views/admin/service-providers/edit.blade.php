@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Service Provider: {{ $serviceprovider->first_name . " " . $serviceprovider->last_name }}</h3>
                    </div>
                    <div class="box-body">
                        <a href="{{ url('/admin/service-providers') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($serviceprovider, [
                            'method' => 'PATCH',
                            'url' => ['/admin/service-providers', $serviceprovider->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.service-providers.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
