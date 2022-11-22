@extends('layouts.app')
 
@section('content')
<div id="offers-page">
    <div class="content-box">
        <div class="row">
            <div class=".col-md-8 .offset-md-2">
               <h1> Sing Up To Notification For Offers</h1>
               <form method="POST" action="/offers">
                 @csrf

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                         <label for="inputfname">First Name</label>
                         <input id="inputfname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus placeholder="Jonny">
                         @error('fname')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                        </div>  
                      </div>
                    <div class="col-md-6">
                     <div class="form-group">
                         <label for="inputlname">Last Name</label>
                         <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus placeholder="Deep">
                         @error('lname')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                      </div>
                   </div>
                  </div> 
                    <div class="row">
                     <div class="col-md-6">
                      <div class="form-group">
                         <label for="inputemail">Email address</label>
                         <input id="inputemail" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="jonny@gmail.com">
                         @error('email')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                      </div>  
                  </div>
                    <div class="col-md-6">
                     <div class="form-group">
                        <label for="inputphone">Phone Numer</label>
                        <input id="inputphone" type="tel" class="form-control form-control-lg @error('phone_numer') is-invalid @enderror" name="phone_numer" value="{{ old('phone_numer') }}" required autocomplete="phone_numer" autofocus placeholder="234-576-88-98">
                         @error('phone_numer')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                     </div>
                 </div>
               </div> 
                    <div class="row">
                       <div class="col-md-6">
                        <div class="form-group">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div> 
                      </div>
                       <div class="col-md-6">
                         <div class="form-group">
                           <button class="btn btn-primary mb-2" type="submit">Comfirm</button>
                         </div>
                      </div>
                    </div> 
  
               </form>
        
             </div>
        </div>
    </div>
 </div>
 @endsection