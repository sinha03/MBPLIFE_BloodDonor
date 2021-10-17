@extends('donnerside.aboutdonorlayout')
@section('Title','Blood Donor App') 
@section('content')  
 <div class="container-contact100">
        <div class="wrap-contact100">
   <div class="contact100-form-title" >
                <span>Update Donor list</span>
            </div> 
<?php

  foreach($user as $user){

     
        $id=$user->id;
    
		$donorname  = $user->donorname;
		$gender  = $user->gender;
		$location  = $user->location;
		$bloodgroup  = $user->bloodgroup;
		$phonenumber  = $user->phonenumber;

  }



?>

{{ Form::open(['route' => ['update_donor',$user->id],'files'=>true], ['class' => 'contact100-form validate-form']) }} 


              <div class="wrap-input1001 validate-input1">

                 {{ Form::hidden('id', $id, ['size' => '30x1'])}}
 
                {{ Form::label('DonorName','DonorName:'), ['class' => 'label-input100']}}<br>

                {{ Form::textarea('donorname', $donorname, ['class' => 'text'])}}

              </div>

              <div class="wrap-input1001 validate-input1">
                
                 {{ Form::label('Gender',' Gender:'), ['class' => 'label-input100']}}<br>

                  {{ Form::textarea('gender', $gender, ['class' => 'text'])}}
              </div>
               <div class="wrap-input1001 validate-input1">
                
                 {{ Form::label('Location',' Location:'), ['class' => 'label-input100']}}<br>

                  {{ Form::textarea('location', $location, ['class' => 'text'])}}
              </div>

                  <div class="wrap-input1001 validate-input1">
                
                 {{ Form::label('Bloodgroup',' Bloodgroup:'), ['class' => 'label-input100']}}<br>

                  {{ Form::textarea('bloodgroup', $bloodgroup, ['class' => 'text'])}}
              </div>

               <div class="wrap-input1001 validate-input1">
                
                 {{ Form::label('Phonenumber','Phonenumber:'), ['class' => 'label-input100']}}<br>

                  {{ Form::textarea('phonenumber', $phonenumber, ['class' => 'text'])}}
              </div>

             <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        Update
                    </button>
                </div>

            {!! Form::close() !!}

@endsection