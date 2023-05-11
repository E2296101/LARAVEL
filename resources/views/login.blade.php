
@extends('master')
@section('titre', 'Login') <!-- titre page -->
@section('activeLogin', 'active') <!-- menu actif -->
@section('content') 
<section class="signin-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block">
                    @isset($data)
                        <h2 class="text-center">Félicitations, vous êtes maintenant connecté !</h2>
                        <h3 class="text-center">Courriel de connexion : {{$data->email}}</h3>
                    @else
                        <h2 class="text-center">Sign In to BitBank</h2>
                        <form class="text-left clearfix mt-50"  method="post" >
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control"  placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-main" >Sign In</button>
                            
                        </form>
                        <p class="mt-20">New in this site ?<a href="signin.html"> Create New Account</a></p>
                        <p><a href="forget-password.html"> Forgot your password?</a></p>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</section>
@endsection