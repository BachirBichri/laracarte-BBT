@extends('layouts.master')
@section('title', 'Contact')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <h1>Get In Touch</h1>
            <p class="text-muted">If you having trouble with this service, please <a href="mailto:lobachir10@gmail.com">ask for help</a></p>
            <form method="POST" action="{{ route('message.store') }}" novalidate="">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="control-label ">Name</label>
                    <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid': (old('name') ? 'is-valid' : '') }}" id="name" name="name" required value="{{ old('name') }}">
                    {!! $errors->first('name', '<span class="invalid-feedback">:message </span>' ) !!}
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control  {{$errors->has('email') ? 'is-invalid': (old('email') ? 'is-valid' : '') }}" id="email" name="email" required value="{{ old('email') }}">
                    {!! $errors->first('email', '<span class="invalid-feedback">:message </span>' ) !!}
                </div>
                <div class="form-group">
                    <label for="message" class="sr-only">Message</label>
                    <textarea class="form-control  {{$errors->has('message') ? 'is-invalid': (old('message') ? 'is-valid' : '') }}" id="messsage" name="message" required rows="10">
                        {{ old('message') }}
                    </textarea>
                    {!! $errors->first('message', '<span class="invalid-feedback">:message </span>' ) !!}
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
            </div>
        </div>
    </div>
@stop