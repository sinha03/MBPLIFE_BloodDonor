@extends('donnerside.aboutdonorlayout')
@section('Title','Blood Donor App') 
@section('content') 
  <main class="container2">
       <div class="list-content2">
            <div id="list2">
              
        <div class="table-responsive">

  <!--Table-->
  <table class="table">

    <!--Table head-->
    <thead>
      <tr>
      
        <th class="th-sm">ID</th>
        <th class="th-sm">DonorName</th>
        <th class="th-sm">Gender</th>
        <th class="th-sm">Location</th>
        <th class="th-sm">Bloodgroup</th>
        <th class="th-sm">PhoneNumber</th>
        <th class="th-sm">Age</th>
        <th class="th-sm">Donated blood Or Not</th>
        <th class="th-sm">How many days ago Or Not</th>
        <th class="th-sm">Occupation</th>
        <th class="th-sm">Delete</th>
        <th class="th-sm">Update</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
     
          <?php

    foreach($list as $list1){

        $id    = $list1->id;
        $donorname=$list1->donorname;
        $gender=$list1->gender;
        $location=$list1->location;
        $bloodgroup=$list1->bloodgroup;
        $phonenumber=$list1->phonenumber;
         $age=$list1->age;
        $action=$list1->action;
        $month=$list1->month;
        $occupation=$list1->occupation;

    ?>
       <tr>

        <td><?php echo $id;?></td>        
        <td><?php echo $donorname;?></td>      
        <td><?php echo $gender;?></td>      
        <td><?php echo $location;?></td>
        <td><?php echo $bloodgroup;?></td>
        <td><?php echo $phonenumber;?></td>
        <td><?php echo $age;?></td>      
        <td><?php echo $action;?></td>
        <td><?php echo $month;?></td>
        <td><?php echo $occupation;?></td>
       
           
            <td><a class="action1" href="<?php echo url('delete_new');?>/<?php echo $id;?>">Delete</a></td>
            <td><a class="action" href="<?php echo url('edit_new');?>/<?php echo $id;?>">Update</a>
           </td>

          <?php } ?>
          </tr>
    </tbody>
    <!--Table body-->

  </table>
  <!--Table-->

</div>

</div>
</div>
</main>
 @endsection 