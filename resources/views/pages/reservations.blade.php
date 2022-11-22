@extends('layouts.app')
 
@section('content')
<div id="waitlist-page">
    <div class="content-box">
        <div class="row">
            <div class="col-md-6">
               <h1> Get On The List</h1>
               <form method="POST" action="/reservation">
                 @csrf
                <div class="form-group">
                  <label for="inputfname">First Name</label>
                  <input id="inputfname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus placeholder="Jonny">
                         @error('fname')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                   </div> 
                   <div class="form-group">
                   <label for="lastinput">Last Name</label>
                   <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus placeholder="Deep">
                         @error('lname')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                  </div>
                <div class="form-group">
                  <label for="emailinput">Email address</label>
                  <input id="inputemail" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="jonny@gmail.com">
                         @error('email')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                </div>
                <div class="form-group">
                   <label for="phoneinput">Phone Numer</label>
                   <input id="inputphone" type="tel" class="form-control form-control-lg @error('phone_numer') is-invalid @enderror" name="phone_numer" value="{{ old('phone_numer') }}" required autocomplete="phone_numer" autofocus placeholder="234-576-88-98">
                         @error('phone_numer')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                </div>
                <div class="form-group">
                  <label for="guestsinput">How Many Guest</label>
                   <select class="form-control form-control-lg @error('guest_total') is-invalid @enderror" name="guest_total" id="guestsinput">
                      <option value="6">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                   </select>
                   @error('guest_total')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                </div>
                <div class="form-group">
                  <label for="timeinput">What Time?</label>
                   <select class="form-control form-control-lg @error('time') is-invalid @enderror" name="time" id="timeinput">
                     <option value="6">6:00 PM</option>
                     <option value="7">7:00 PM</option>
                     <option value="8">8:00 PM</option>
                     <option value="9">9:00 PM</option>
                     <option value="10">10:00 PM</option>
                  </select>
                  @error('time')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                         @enderror
                 </div>
                <div class="form-group">
                  <button class="btn btn-primary mb-2" type="submit">Comfirm</button>
                </div>
           </form>
        </div>
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                 nisi ut aliquip ex ea commodo consequat.
                 </p>
        </div>
    </div>
</div>
</div>
@endsection