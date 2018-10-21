
$('.newUser').click(function getStudents(){
  var target = $(this);
  var course = target.parents('.panel').data('id');
//  var Table = target.parents('panel').find("table");
    var info = {
      Course_Id: course,
    };
    var data =info;

    $.ajax({
      type: "POST",
      //dataType: "json",
      url: "./api/getStudents.php",
      data: data,

      success: function(res,response){
        res = jQuery.parseJSON(res)
        var string = ""
        for(var i = 0; i<res.length; i++){
          string += "<li><a href='#'class = 'student_add' data-course = '"+course+"' data-last_name="+res[i].Last_Name+" data-email="+res[i].Email+" data-id='"+res[i].Student_OID+"'>"+res[i].First_Name+"</a></li>"
        }
        var modal = $('#gModal');
        modal.modal('show');
        $('#gModal').find(".dropdown-menu").html(string);
        refreshAdds();

      },


      error: function(xhr, status, error){
        alert(error);
      }

  });
});
function refreshAdds(){
$('.student_add').click(function(){
  var target = $(this);
  var courseId = target.data('course');
  var studentId = target.data('id');
  var doc = $(document);
  var table = doc.find('[data-id = '+courseId+']').find('table');
//  var Table = target.parents('panel').find("table");
    var info = {
      Course_Id: courseId,
      Student_Id: studentId,
    };
    var data =info;

    $.ajax({
      type: "POST",
      //dataType: "json",
      url: "./api/addStudent.php",
      data: data,

      success: function(res,response){

        var append="<tr><td> <a href=viewStudent.php?id="+target.data("id")+">"+target.text()+
        "</a>  </td><td>"+target.data('last_name')+"</td><td>"+target.data('email')+"</td></tr>";
        table.append(append);
      },


      error: function(xhr, status, error){
        alert(error);
      }

  });
})
}
function getNewUser(){
    var info = {
      "input":$("#input").val(),
    }
    var data = info;
    //tests what I input
  //  $("#output").text(info.input);

    $.ajax({
      type: "POST",
      //dataType: "json",
      url: "./api/getstudents.php",
      data: data,
      success: function(data,response){
        $("#output").text(data);
      },
      error: function(xhr, status, error){
        alert(error);
      }
              });
  }


///////

function handleNewUserClick(e){
  this.selTable = e.currrentTarget.parents(".panel-body").find('table');
  this.selCourse = e.currentTarget.parents(".panel-body").data("id");
  this.getNewUser();

}
