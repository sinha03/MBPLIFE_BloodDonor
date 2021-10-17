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
      
        <th class="th-sm">Details_ID</th>
        <th class="th-sm">DonorName_ID</th>
        <th class="th-sm">DonorName</th>
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

        $detail_id    = $list1->detail_id;
        $id=$list1->id;
        $donorname=$list1->donorname;
        $age=$list1->age;
        $action=$list1->action;
        $month=$list1->month;
        $occupation=$list1->occupation;

    ?>
       <tr>

        <td><?php echo $detail_id;?></td> 
        <td><?php echo $id;?></td>       
        <td><?php echo $donorname;?></td>      
        <td><?php echo $age;?></td>      
        <td><?php echo $action;?></td>
        <td><?php echo $month;?></td>
        <td><?php echo $occupation;?></td>
       
            
            <td><a class="action1" href="<?php echo url('delete_detail');?>/<?php echo $id;?>">Delete</a></td>
            <td><a class="action" href="<?php echo url('edit_detail');?>/<?php echo $id;?>">Update</a>
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