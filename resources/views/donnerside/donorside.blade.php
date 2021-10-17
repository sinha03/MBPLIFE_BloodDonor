@extends('donnerside.donersidelayout')
@section('Title','Blood Donor App') 
@section('content') 

  <div class="container">

  <div class="tile is-ancestor">
        <div class="tile is-parent">
        <a class="vertical" href="/createdonor"> 
             <article class="tile is-child box">
                     
                <img class="avatar" src="donnerstyle/images/donor4.png" alt="author01">
                <h2> Create new Donor</h2>
              
            </article>
              </a>
        </div>
        <div class="tile is-parent">
        <a class="vertical" href="/showdonor"> 
          <article class="tile is-child box">
                
               <img class="avatar" src="donnerstyle/images/donor5.png" alt="author01">
               <h2> Show Donor list</h2>
          
           </article>
             </a>
        </div>
        <div class="tile is-parent">
        <a class="vertical" href="/createdetails"> 
        <article class="tile is-child box">
            
              <img class="avatar" src="donnerstyle/images/donor6.png" alt="author01">
              <h2>Create Donors details </h2>
       
            </article>
              </a>
        </div>
   </div>
   <div class="tile is-ancestor">
        <div class="tile is-parent">
        <a class="vertical" href="/showdetails"> 
             <article class="tile is-child box">
                     
                <img class="avatar" src="donnerstyle/images/donor7.png" alt="author01">
                <h2> Show Donors details</h2>
           
            </article>
              </a>
        </div>
        <div class="tile is-parent">
        <a class="vertical" href="/createnew"> 
          <article class="tile is-child box">
               
               <img class="avatar" src="donnerstyle/images/donor8.png" alt="author01">
               <h2> New Donors Request</h2>
          
           </article>
             </a>
        </div>
        <div class="tile is-parent">
       <a class="vertical" href="/shownew"> 
          <article class="tile is-child box">
           
              <img class="avatar" src="donnerstyle/images/donor.png" alt="author01">
              <h2>New Donors Request list </h2>
          
            </article>
              </a>
        </div>
   </div>
   
 </div>
 

 @endsection         