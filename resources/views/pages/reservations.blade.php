@extends('layouts.app')
 
@section('content')
<div id="waitlist-page">
    <div class="content-box">
        <div class="row">
            <div class="col-md-6">
               <h1> Get On The List</h1>
<form>
  <div class="form-group">
    <label for="firstinput">First Name</label>
    <input type="text" class="form-control" name="fname" id="firstinput" placeholder="example Jonny">
  </div> 
  <div class="form-group">
    <label for="lastinput">Last Name</label>
    <input type="text" class="form-control" name="lname" id="lastinput" placeholder="exsemple Depp">
  </div>
  <div class="form-group">
    <label for="emailinput">Email address</label>
    <input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="phoneinput">Phone #</label>
    <input type="phone" class="form-control" name="email" id="phoneinput" placeholder="781-298-5768">
  </div>
  <div class="form-group">
    <label for="guestsinput">How Many Guest</label>
    <select class="form-control" name="guest" id="guestsinput">
      <option value="6">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="timeinput">What Time?</label>
    <select class="form-control" name="time" id="timeinput">
      <option value="6">6:00 PM</option>
      <option value="7">7:00 PM</option>
      <option value="8">8:00 PM</option>
      <option value="9">9:00 PM</option>
      <option value="10">10:00 PM</option>
    </select>
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