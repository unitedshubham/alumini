$("#add_job_submit").click(function(){

  var job_title=$("#job_title").val();
  var job_description=$("#job_description").val();
  var vacancy=$("#vacancy").val();
  var edu_qualification_required=$("#edu_qualification_required").val();
  var Work_experience=$("#Work_experience").val();
  var salary_begin=$("#salary_begin").val();
  var salary_end=$("#salary_end").val();
  var job_type=$("#job_type").val();
  var job_end_date=$("#job_end_date").val();
  

  


  var datastr='job_title='+job_title+'&job_description='+job_description+'&vacancy='+vacancy+'&edu_qualification_required='+edu_qualification_required+'&Work_experience='+Work_experience+'&salary_begin='+salary_begin+'&salary_end='+salary_end+'&job_type='+job_type+'&job_end_date='+job_end_date;

  $.ajax({
    type: "POST",
    url: "insert_jobs.php",
    data: datastr,
    cache: false,
    success: function(res){
     if(res==1)
     {
      alert("Successfull!!");

    }
    else
    {
      alert("Some Error Occured!!");
      
    }

  }
});
});



