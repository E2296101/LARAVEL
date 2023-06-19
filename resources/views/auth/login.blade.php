@extends('layouts.app')
@section('title', __('login.text_titre'))
@section('titleHeader', __('login.text_titre'))
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <form action="{{route('login.authentification')}}"  method="post">
                @csrf
                <div class="card-body">
                    <input type="email" class="form-control mt-3" name="email" placeholder="@lang('login.text_email')" value="{{old('email')}}">
                    @if($errors->has('email'))
                        <div class="text-danger mt-2">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                    <input type="password" class="form-control mt-3" name="password" placeholder="@lang('login.text_password')">
                    @if($errors->has('password'))
                        <div class="text-danger mt-2">
                            {{$errors->first('password')}}
                        </div>
                    @endif
                   
                </div>
                <div class="card-footer d-grid mx-auto">
                    <input type="submit" value="@lang('login.test_bouton')" class="btn btn-dark btn-block">
                </div>
                
                </form>
            </div>
            <div class="text-center mt-3">
                <a href="{{route('auth.create')}}">@lang('login.text_lien_creation')</a>
            </div>
        </div>
    </div>
@endsection
