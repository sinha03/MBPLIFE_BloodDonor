@extends('donnerside.aboutdonorlayout')
@section('Title','Blood Donor App') 
@section('content') 
 <div class="container-contact100">
    <div class="wrap-contact100">
      <div class="contact100-form-title" >
          <span>enter donor list</span>
          </div>
          <div id="list">        
             @foreach($list as $list)
            <form id="formElem" class="contact100-form validate-form"  name="formElem" method="POST" action="{!! route('createdetails', array('id' => $list->id)) !!}">
                 {!! csrf_field() !!}  
                 <fieldset class="step">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="id" value="{{ $list->id }}">
                 <input type="hidden" name="donorname" value="{{ $list->donorname }}">
                   @endforeach
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