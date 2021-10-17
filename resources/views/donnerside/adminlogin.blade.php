@extends('donnerside.Adminloginlayout')
@section('Title','Blood Donor App') 
@section('content') 

 
   
        <!-- Buefy components goes here -->

        <template>
            <section class="formmade">
             <div class="container">
              <template>
                       <b-navbar>
                         <template slot="brand">
                            <b-navbar-item href="/">
                               <h1> MBP LIFE </h1>
                         </b-navbar-item>
                       </template>
                        </b-navbar>
                 </template>
              <form id="formElem" name="formElem" method="POST" action="{!! route('adminlogin') !!}">
                    {!! csrf_field() !!}
                     <fieldset class="step">
                        
                           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input is-rounded" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input is-rounded" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                             <button type="submit" class="button is-rounded">
                                    LOGIN 
                                </button>
                              
                            </div>
                        </div>

                   
                    </fieldset>
                      
                   </form>
               </div>
            </section>
       </template>
 </div>
 </div>
 @endsection    