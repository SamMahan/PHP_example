<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
<span class="caret"></span></button>
<ul class="dropdown-menu">
{foreach $Students as $studentID => $student}


 <li><a href="#" data-id="{$studentID}">{$student.First_Name}</a></li>


{/foreach}
</ul>
</div>
