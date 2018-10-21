<div class = "row">
<h3 class = "title"> Pick a student to add to the course</h3>

</div>
<div class = "row">
<div class="dropdown">
 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pick a student
 <span class="caret"></span></button>
 <ul class="dropdown-menu">
   {foreach $users as $key=>$value}
   <li class = "addable_student" data-id = "{$key}"> {$value["Last_Name"]} , {$value["First_Name"]} </li>
   {/foreach}
 </ul>
</div>
</div>
<!--turbolinks-->
