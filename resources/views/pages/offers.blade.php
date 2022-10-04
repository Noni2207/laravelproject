@extends('layouts.app')
 
@section('content')
<div id="offers-page">
    <div class="content-box">
        <div class="row">
            <div class=".col-md-8 .offset-md-2">
               <h1> Sing Up To Notification For Offers</h1>
<form>
 <div class="row">
     <div class="col-md-6">
        <div class="form-group">
            <label for="firstinput">First Name</label>
            <input type="text" class="form-control" name="fname" id="firstinput" placeholder="example Jonny">
          </div>  
     </div>
     <div class="col-md-6">
        <div class="form-group">
            <label for="lastinput">Last Name</label>
            <input type="text" class="form-control" name="lname" id="lastinput" placeholder="exsemple Depp">
          </div>
     </div>
 </div> 
 <div class="row">
     <div class="col-md-6">
        <div class="form-group">
            <label for="emailinput">Email address</label>
            <input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
          </div>  
     </div>
     <div class="col-md-6">
        <div class="form-group">
            <label for="phoneinput">Phone #</label>
            <input type="phone" class="form-control" name="email" id="phoneinput" placeholder="781-298-5768">
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
@endsection