@extends('layouts.app')
@section('title', __('create_user.text_titre'))
@section('titleHeader', __('create_user.text_titre'))
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                @csrf
                <div class="card-body">
                    <input type="text" class="form-control mt-3" name="nom" placeholder="@lang('create_user.text_nom')" required value="{{old('nom')}}">
                    @if($errors->has('nom'))
                        <div class="text-danger mt-2">
                            {{$errors->first('nom')}}
                        </div>
                    @endif 
                    <input type="text" class="form-control mt-3" name="adresse" placeholder="@lang('create_user.text_adresse')" required value="{{old('adresse')}}">
                    @if($errors->has('adresse'))
                        <div class="text-danger mt-2">
                            {{$errors->first('adresse')}}
                        </div>
                    @endif
                  <input type="text" class="form-control mt-3" name="phone" placeholder="@lang('create_user.text_phone')" required value="{{old('phone')}}">
                    @if($errors->has('phone'))
                        <div class="text-danger mt-2">
                            {{$errors->first('phone')}}
                        </div>
                    @endif
                  <input type="date" class="form-control mt-3" name="date_naissance" placeholder="@lang('create_user.text_date_naissance')" required value="{{ old('date_naissance') }}">
                    @if($errors->has('date_naissance'))
                        <div class="text-danger mt-2">
                            {{$errors->first('date_naissance')}}
                        </div>
                    @endif 

                     <select name="ville_id" class="form-control mt-3" required>
                        <option value="">@lang('create_user.text_ville')</option>
                        @foreach($villes as $ville)
                        <option value="{{ $ville->id }}"  {{ old('ville_id') == $ville->id ? 'selected' : '' }}>{{ $ville->nom }}</option>
                       
                        @endforeach
                    </select>
                    @if($errors->has('ville_id'))
                        <div class="text-danger mt-2">
                            {{$errors->first('ville_id')}}
                        </div>
                    @endif                      
                    <input type="email" class="form-control mt-3" name="email" placeholder="@lang('create_user.text_email')" required value="{{old('email')}}">
                    @if($errors->has('email'))
                        <div class="text-danger mt-2">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                    <input type="password" class="form-control mt-3" name="password" placeholder="@lang('create_user.text_password')" required>
                    @if($errors->has('password'))
                        <div class="text-danger mt-2">
                            {{$errors->first('password')}}
                        </div>
                    @endif
                    <input type="password" class="form-control mt-3" name="password_confirmation" placeholder="@lang('create_user.text_confirm_password')" required>
                    @if($errors->has('password_confirmation'))
                        <div class="text-danger mt-2">
                            {{$errors->first('password_confirmation')}}
                        </div>
                    @endif                      
                </div>
                <div class="card-footer d-grid mx-auto">
                    <input type="submit" value="@lang('create_user.test_bouton')" class="btn btn-dark btn-block">
                </div>
                
                </form>
            </div>
            <div class="text-center mt-3">
                <a href="{{route('login')}}">@lang('create_user.text_lien_login')</a>
            </div>
        </div>
    </div>
@endsection
