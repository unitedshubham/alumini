$("#update_job_submit").click(function(){

  var job_title=$("#job_title").val();
  if(job_title==""){
    job_title= $("#job_title").attr('placeholder');
  }
  var job_description=$("#job_description").val();
  if(job_description==""){
    job_description= $("#job_description").attr('placeholder');
  }
  var vacancy=$("#vacancy").val();
  if(vacancy==""){
    vacancy= $("#vacancy").attr('placeholder');
  }
  var edu_qualification_required=$("#edu_qualification_required").val();
  if(edu_qualification_required==""){
    edu_qualification_required= $("#edu_qualification_required").attr('placeholder');
  }
  var Work_experience=$("#Work_experience").val();
  if(Work_experience==""){
    Work_experience= $("#Work_experience").attr('placeholder');
  }
  var salary_begin=$("#salary_begin").val();
  if(salary_begin==""){
    salary_begin= $("#salary_begin").attr('placeholder');
  }
  var salary_end=$("#salary_end").val();
  if(salary_end==""){
    salary_end= $("#salary_end").attr('placeholder');
  }
  var job_type=$("#job_type").val();
  if(job_type==""){
    job_type= $("#job_type").attr('placeholder');
  }
  var job_end_date=$("#job_end_date").val();
  if(job_end_date==""){
    job_end_date= $("#job_end_date").attr('placeholder');
  }
  var job_id=$("#job_id").html();

  


  var datastr='job_title='+job_title+'&job_description='+job_description+'&vacancy='+vacancy+'&edu_qualification_required='+edu_qualification_required+'&Work_experience='+Work_experience+'&salary_begin='+salary_begin+'&salary_end='+salary_end+'&job_type='+job_type+'&job_end_date='+job_end_date+'&job_id='+job_id;
  
  $.ajax({
    type: "POST",
    url: "update_job.php",
    data: datastr,
    cache: false,
    success: function(res){
     if(res==1)
     {
      alert("Successfull!!");
      window.location.reload();

    }
    else
    {
      alert("Some Error Occured!!");
      
    }

  }
});
});