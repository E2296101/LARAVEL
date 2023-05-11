	

@extends('master')
@section('titre', 'Contact') <!-- titre de la page -->
@section('activeContact', 'active') <!-- menu actif -->
@section('content')   
	<section class="contact-us section bg-gray" id="contact">
		<div class="container">
            @isset($data)
                <div>
                    <h2>Félicitations Mr / Mme : {{$data->name}} </h2>
                    <h5>Sujet du courriel : {{$data->subject}}</h5>
                    <h5>message :  </h5>
                    <p>{{$data->message}}</p>
                </div>
            @else
                <div class="row">
                    <div class="col">
                        <div class="title text-center">
                            <h4>Drop us a note</h4>
                            <h2>Contact Us.</h2>
                            <span class="border"></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Contact Form -->
                    <div class="contact-form col-12 col-md-6  mx-auto" >
                        <form id="contact-form" method="post" >
                        @csrf
                            <div class="form-group">
                                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                            </div>
                            
                            <div class="form-group">
                                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                            </div>
                            
                            <div class="form-group">
                                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
                            </div>

                            <div id="cf-submit">
                                <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                            </div>						
                            
                        </form>
                    </div>
                    <!-- ./End Contact Form -->
                </div> <!-- end row -->
            @endisset
			
		</div> <!-- end container -->
	</section> <!-- end section -->
@endsection