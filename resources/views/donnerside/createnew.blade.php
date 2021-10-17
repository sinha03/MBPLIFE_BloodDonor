@extends('donnerside.aboutdonorlayout')
@section('Title','Blood Donor App') 
@section('content') 
 <div class="container-contact100">
    <div class="wrap-contact100">
      <div class="contact100-form-title" >
          <span>enter donor list</span>
          </div>
          <div id="list">         
            <form id="formElem" name="formElem" method="POST" action="{!! route('createnew') !!}">
                   
                   <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                 <fieldset class="step">
                     <div class="wrap-input100 validate-input{{ $errors->has('donorname') ? ' has-error' : '' }}">
                            <label for="donorname" class="label-input100">DonorName:</label>
                             
                         
                                <input id="donorname" type="text" class="input100" name="donorname"  placeholder="Sujit Singha" value="{{ old('donorname') }}" required autofocus>
                              
                              
                                @if ($errors->has('donorname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('donorname') }}</strong>
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
                          <div class="wrap-input100 validate-input{{ $errors->has('bloodgroup') ? ' has-error' : '' }}">
                            <label for="bloodgroup" class="label-input100">BloodGroup:</label>
                            
                            <select name="bloodgroup" class="col-md-4 control-label">
                                   <option value="A+">A+</option>
                                   <option value="A-">A-</option>
                                   <option value="O+">O+</option>
                                   <option value="O-">O-</option>
                                   <option value="AB+">AB+</option>
                                   <option value="AB-">AB-</option>

                              </select>
                           
                               
                              
                                @if ($errors->has('bloodgroup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bloodgroup') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                         <div class="wrap-input100 validate-input{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
                            <label for="phonenumber" class="label-input100">PhoneNumber:</label>
                             
                         
                                <input id="phonenumber" type="text" class="input100" name="phonenumber"  placeholder="01712345678" value="{{ old('phonenumber') }}" required autofocus>
                              
                              
                                @if ($errors->has('phonenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                        <div class="wrap-input100 validate-input{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="label-input100">Age:</label>
                             
                         
                                <input id="age" type="text" class="input100" name="age"  placeholder="30" value="{{ old('age') }}" required autofocus>
                              
                              
                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                         <div class="wrap-input100 validate-input{{ $errors->has('action') ? ' has-error' : '' }}">
                            <label for="action" class="label-input100">Have you donated blood in the past?:</label>
                             
                              <select name="action" class="col-md-4 control-label">
                                   <option value="YES">YES</option>
                                   <option value="NO">NO</option>
                              </select> 
                                @if ($errors->has('action'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('action') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                           <div class="wrap-input100 validate-input{{ $errors->has('month') ? ' has-error' : '' }}">
                            <label for="month" class="label-input100">Last Dontated:</label>

                              <input id="month" type="text" class="input100" name="month"  placeholder="3 months ago or No" value="{{ old('month') }}" required autofocus>
                               

                                @if ($errors->has('month'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('month') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                          <div class="wrap-input100 validate-input{{ $errors->has('occupation') ? ' has-error' : '' }}">
                            <label for="occupation" class="label-input100">Occupation:</label>
                          
                              <select name="occupation" class="col-md-4 control-label">
                                   <option value="STDUENT">STDUENT</option>
                                   <option value="EMPLOYEE">EMPLOYEE</option>
                              </select> 
                              
                                @if ($errors->has('occupation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('occupation') }}</strong>
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