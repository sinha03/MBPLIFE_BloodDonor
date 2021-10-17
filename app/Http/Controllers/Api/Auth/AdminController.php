<?php

namespace App\Http\Controllers\Api\Auth;
use DB;
use App\Http\Controllers\Api\Auth\ApiBasecontroller as ApiBasecontroller;
use Auth;
use Validator, Input, Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\Rule;
use App\AdminModel;
use App\insert_donor;
use App\donordetail;
use App\insert_new;
use Schema;

class AdminController extends ApiBasecontroller
{
   protected $redirectPath = 'donorside';
   protected $redirectPath1 = 'showdetails';
   public function showLoginForm()
      {
      return view('donnerside.adminlogin');
     }
     public function donorcreate()
      {
      return view('donnerside.createdonor');
     }

      public function new()
       {
        return view('donnerside.createnew');
       }

      public function login1(Request $request){

         $email=$request->email;

        $password=$request->password;

        $users = DB::table('admin')->where([

            ['email', '=', $email],

            ['password', '=', $password],

                ])->get();
         
          return redirect($this->redirectPath);

        return $this->sendResponse($post->toArray(), 'Post created successfully.');
           

            }

     public function donor(Request $request)
           
             {
      
           $input = request()->except(['_token']);
          
           $validator = Validator::make($input, [

           'name' => 'required|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
             'gender' =>   ['required',Rule::in(['MALE', 'FEMALE']),],
           'location' =>   'required|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
           'blood_group' =>  ['required',Rule::in(['A+','A-','O+','O-','AB+','AB-']),],
           'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',

           //'image'=> 'required|image|mimes:jpg,jpeg,png,gif',
             
        ]);

        if ($validator->fails()) {
           return redirect('/donorside')
            ->withInput()
            ->withErrors($validator);
         }     
           
           
            $task = new insert_donor;
            $task->name = $request->name;
            $task->gender = $request->gender;
            $task->location = $request->location;
            $task->blood_group = $request->blood_group;
            $task->phone_number = $request->phone_number;
            $task->save();
 

          //    return redirect('/subject_list');
              return redirect()->action('Api\Auth\AdminController@donor');
         }

           public function show_donor(Request $data)
                {
       
                     $post = DB::table('donor_list')
                     ->get();
                       if (is_null($post)) {
                     return $this->sendError('Post not found');
                 }      
                return $this->sendResponse($post->toArray(),' retrieved successfully.');
          }

           public function showdonor(Request $request)
            {
                 $list= DB::table('donor_list')->get(); 
                 return view('donnerside.showdonor',['list'=>$list]); 
            }

             public function delete_donor($id){

                      DB::table('donor_list')->where(['id'=>$id])->delete();      

                return redirect('showdonor');
          }

          public function edit_donor($id){

             $user=DB::select('select * from donor_list where id = :id', ['id' => $id]);

          return view('donnerside.update_donor',['user'=>$user]);
          }

           public function update_donor(Request $data,$id){

                $id=$data->id;
               // $model= PhysicsModel::find($question_id);

                $name=$data->name;
                $gender=$data->gender;
                $location=$data->location;
                $blood_group=$data->blood_group;
                $phone_number=$data->phone_number;
               
                $user= DB::table('donor_list')->where(['id'=>$id])->update(['name' => $name,'gender' => $gender,'location' => $location,'blood_group' => $blood_group,'phone_number' => $phone_number]);

                if($user){

              return redirect()->action( 'Api\Auth\AdminController@showdonor', ['id' => $id]);

                  }
         }

             public function donordetail(Request $request)
               {

                   $id=$request->id;
                   $list= DB::table('donor_list')->where(['id'=>$id])->get();     
                   return view('donnerside.createdetails',['list'=>$list]);
         
               }

            public function detail(Request $request,$id)
           
             {
      
           $input = request()->except(['_token']);
           $donorname = $request->get('donorname');
             $id = $request->get('id');

            if (!Schema::hasTable('donordetails')) {
            // Code to create table
          Schema::connection('mysql')->create('donordetails', function($table)
           {
             $table->increments('detail_id');
              $table->integer('id');
             $table->string('donorname');
             $table->integer('age');
              $table->string('action');
              $table->string('month');
             $table->string('occupation');
             $table->timestamps();

          });
       }
          
           $validator = Validator::make($input, [

          'donorname' =>         'required|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
           'age' =>         'required|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
           'action' =>     ['required',Rule::in(['YES', 'NO']),],
           'month' =>       'required|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
           'occupation' =>  ['required',Rule::in(['STDUENT','EMPLOYEE']),],
          
           //'image'=> 'required|image|mimes:jpg,jpeg,png,gif',
             
        ]);

        if ($validator->fails()) {
           return redirect('/donorside')
            ->withInput()
            ->withErrors($validator);
         }     
           
           
            $task = new donordetail;
            $task->id = $request->id;
            $task->donorname = $request->donorname;
            $task->age = $request->age;
            $task->action = $request->action;
            $task->month = $request->month;
            $task->occupation = $request->occupation;
            
            $task->save();
 

          //    return redirect('/subject_list');
              return redirect($this->redirectPath1);
         }

          public function showdetails(Request $request)
            {
                 $list= DB::table('donordetails')->get(); 
                 return view('donnerside.showdetails',['list'=>$list]); 
            }


             public function newdonor(Request $request)
           
             {
      
           $input = request()->except(['_token']);


            if (!Schema::hasTable('new_donor_list')) {
            // Code to create table
          Schema::connection('mysql')->create('new_donor_list', function($table)
           {
            
              $table->increments('id');
             $table->string('donorname');
             $table->string('gender');
             $table->string('location');
             $table->string('bloodgroup');
             $table->string('phonenumber');
             $table->integer('age');
              $table->string('action');
              $table->string('month');
             $table->string('occupation');
             $table->timestamps();

          });
       }
          
           $validator = Validator::make($input, [

           'donorname' => 'required|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
             'gender' =>   ['required',Rule::in(['MALE', 'FEMALE']),],
           'location' =>   'required|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
           'bloodgroup' =>  ['required',Rule::in(['A+','A-','O+','O-','AB+','AB-']),],
           'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'age' =>         'required|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
           'action' =>     ['required',Rule::in(['YES', 'NO']),],
           'month' =>       'required|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
           'occupation' =>  ['required',Rule::in(['STDUENT','EMPLOYEE']),],

           //'image'=> 'required|image|mimes:jpg,jpeg,png,gif',
             
        ]);

        if ($validator->fails()) {
           return redirect('/donorside')
            ->withInput()
            ->withErrors($validator);
         }     
           
           
            $task = new insert_new;              
            $task->donorname = $request->donorname;
            $task->gender = $request->gender;
            $task->location = $request->location;
            $task->bloodgroup = $request->bloodgroup;
            $task->phonenumber = $request->phonenumber;
             $task->age = $request->age;
            $task->action = $request->action;
            $task->month = $request->month;
            $task->occupation = $request->occupation;
            $task->save();
 

          //    return redirect('/subject_list');
              return redirect()->action('Api\Auth\AdminController@newdonor');
         }


            public function shownew(Request $request)
            {
                 $list= DB::table('new_donor_list')->get(); 
                 return view('donnerside.shownew',['list'=>$list]); 
            }

            /* public function delete_donor($id){

                      DB::table('donor_list')->where(['id'=>$id])->delete();      

                return redirect('showdonor');
          }

          public function edit_donor($id){

             $user=DB::select('select * from donor_list where id = :id', ['id' => $id]);

          return view('donnerside.update_donor',['user'=>$user]);
          }

           public function update_donor(Request $data,$id){

                $id=$data->id;
               // $model= PhysicsModel::find($question_id);

                $donorname=$data->donorname;
                $gender=$data->gender;
                $location=$data->location;
                $bloodgroup=$data->bloodgroup;
                $phonenumber=$data->phonenumber;
                $ans=$data->ans;
                $user= DB::table('donor_list')->where(['id'=>$id])->update(['donorname' => $donorname,'gender' => $gender,'location' => $location,'bloodgroup' => $bloodgroup,'phonenumber' => $phonenumber]);

                if($user){

              return redirect()->action( 'Api\Auth\AdminController@showdonor', ['id' => $id]);

                  }
         }*/

          public function showdetail(Request $data,$id)
                {
       
                     $post = DB::table('donordetails')->where(['id'=>$id])
                     ->get();
                       if (is_null($post)) {
                     return $this->sendError('Post not found');
                 }      
                return $this->sendResponse($post->toArray(),' retrieved successfully.');
          }


          public function __construct()
          {
               $this->middleware('guest')->except('logout');
           }
}
