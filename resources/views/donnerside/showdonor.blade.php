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
        <th class="th-sm">More</th>
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
        $name=$list1->name;
        $gender=$list1->gender;
        $location=$list1->location;
        $blood_group=$list1->blood_group;
        $phone_number=$list1->phone_number;

    ?>
       <tr>

        <td><?php echo $id;?></td>        
        <td><?php echo $name;?></td>      
        <td><?php echo $gender;?></td>      
        <td><?php echo $location;?></td>
        <td><?php echo $blood_group;?></td>
        <td><?php echo $phone_number;?></td>
       
            <td><a class="action1" href="<?php echo url('createdetails');?>/<?php echo $id;?>">Add Details</a></td>
            <td><a class="action1" href="<?php echo url('delete_donor');?>/<?php echo $id;?>">Delete</a></td>
            <td><a class="action" href="<?php echo url('edit_donor');?>/<?php echo $id;?>">Update</a>
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