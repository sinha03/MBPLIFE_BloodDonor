            <!--   <span>enter donor list</span>
          <div id="list">         
            <form id="formElem" class="contact100-form validate-form"  name="formElem" method="POST" action="{!! route('donor') !!}">
                 {!! csrf_field() !!}  
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
                             
                         
                                <input id="gender" type="text" class="input100" name="gender"  placeholder="gender" value="{{ old('Male') }}" required autofocus>
                              
                              
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                           <div class="wrap-input100 validate-input{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="label-input100">location:</label>
                             
                         
                                <input id="location" type="text" class="input100" name="location"  placeholder="Sylhet" value="{{ old('location') }}" required autofocus>
                              
                              
                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                          
                        </div>
                          <div class="wrap-input100 validate-input{{ $errors->has('bloodgroup') ? ' has-error' : '' }}">
                            <label for="bloodgroup" class="label-input100">BloodGroup:</label>
                             
                         
                                <input id="bloodgroup" type="text" class="input100" name="bloodgroup"  placeholder="A+" value="{{ old('bloodgroup') }}" required autofocus>
                              
                              
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
                         <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        SAVE
                    </button>
                </div>
              </fieldset> 
            </form>
        </div>
-->