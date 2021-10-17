@extends('donnerside.aboutdonorlayout')
@section('Title','Blood Donor App') 
@section('content') 
 <div class="container-contact100">
    <div class="wrap-contact100">
      <div class="contact100-form-title" >
          <span>enter donor list</span>
          </div>
          <div id="list">         
            <form id="formElem" name="formElem" method="POST" action="{!! route('createdonor') !!}">
                   
                   <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                 <fieldset class="step">
                     <div class="wrap-input100 validate-input{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="label-input100">DonorName:</label>
                             
                         
                                <input id="name" type="text" class="input100" name="name"  placeholder="Sujit Singha" value="{{ old('name') }}" required autofocus>
                              
                              
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                         <div class="wrap-input100 validate-input{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="label-input100">Gender:</label>
                            <select name="gender" class="col-md-4 control-label">
                                   <option value="MALE">MALE</option>
                                   <option value="FEMALE">FEMALE</option>
                              </select>   
                            <!--  <input id="gender" type="text" class="input100" name="gender"  placeholder="gender" value="{{ old('Male') }}" required autofocus>-->
       
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                           <div class="wrap-input100 validate-input{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="label-input100">location:</label>
                             
                                    <input id="location" type="text" class="input100" name="location"  placeholder="sylhet" value="{{ old('location') }}" required autofocus>
                              
                              
                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                          <div class="wrap-input100 validate-input{{ $errors->has('blood_group') ? ' has-error' : '' }}">
                            <label for="blood_group" class="label-input100">BloodGroup:</label>
                            
                            <select name="blood_group" class="col-md-4 control-label">
                                   <option value="A+">A+</option>
                                   <option value="A-">A-</option>
                                   <option value="O+">O+</option>
                                   <option value="O-">O-</option>
                                   <option value="AB+">AB+</option>
                                   <option value="AB-">AB-</option>

                              </select>
                           
                               
                              
                                @if ($errors->has('blood_group'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('blood_group') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                         <div class="wrap-input100 validate-input{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number" class="label-input100">PhoneNumber:</label>
                             
                         
                                <input id="phone_number" type="text" class="input100" name="phone_number"  placeholder="01712345678" value="{{ old('phone_number') }}" required autofocus>
                              
                              
                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                         <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        SAVE
                    </button>
                </div>
              </fieldset> 
            </form>
        </div>

 @endsection 