<html>
  <head>
    <title>texresume.com</title>
    <link rel="stylesheet" type="text/css" href="/styles/tex_style.css">
    <link href="/styles/tabcontent.css" rel="stylesheet" type="text/css" />
    <script src="tabcontent.js" type="text/javascript"></script> 
    <script type="text/javascript" src="/lib/jquery-2.1.1.min.js"></script>
  </head>
  
  <body>
    <?php include 'header.php';?>
    
    <?php
      echo "<br />";echo $_POST['email'];echo "<br />";
    ?>
    
    <ul class="tabs"  data-persist="true"> 
    <li><a href="#view1">Basic Info</a></li> 
    <li><a href="#view2">Education</a></li> 
    <li><a href="#view3">Work Experience</a></li>
    <li><a href="#view4">Interests</a></li>
    <li><a href="#view5">References</a></li>
    </ul> 
    
    <div class="tabcontents">
    <form action="create_resume.php" method="post">
    <div id="view1"> 
    
      <table>
      
        <tr>
          <td class="label">Full Name </td>
          <td id="paddingtab" />
          <td class="label">Email </td>
        </tr>

        <tr>
          <td><input type="text" name="name" id="name" value=""/></td>
          <td  />
          <td><input type="text" name="email" id="email" value="<?php echo $_POST['email']?>"/></td>
        </tr>
          
        <tr id="padding-row"><td id="padding-tab" /> <td id="padding" /><td id="padding-tab" /><tr/>
          
        <tr>
          <td class="label">Phone Numbers </td>
          <td id="paddingtab" />
          <td class="label">Address line 1</td>
        </tr>

        <tr>
          <td><input type="text" name="phone" id="phone" value=""/></td>
          <td id="paddingtab" />
          <td><input type="text" name="addr1" id="addr1" value=""/></td>
        </tr>
          
        <tr id="padding-row"><td id="padding-tab" /> <td id="padding" /><td id="padding-tab" /><tr/>
          
        <tr>
          <td class="label">Address line 2 </td>
          <td id="paddingtab" />
          <td class="label">Address line 3 </td>
        </tr>

        <tr>
          <td><input type="text" name="addr2" id="addr2" value=""/></td>
          <td id="paddingtab" />
          <td><input type="text" name="addr3" id="addr3" value=""/></td>
        </tr>
        
      </table>
      
      <input type="submit" class="button" id="create_resume" value="Create Resume">
    </div> 
    
    
    <div id="view2">
    
      <script type="text/javascript">
    
        var eduCount = 1;
    
        $(function(){
          $('input#add_edu').click(function(){
            eduCount += 1;
            //alert(count);
            var eduPaddingRow = '<tr id="padding-row"><td id="padding-tab"> </td> <td id="padding"> </td><td id="padding-tab"> </td><tr></tr>';
     
            var eduNewRowLabel = '<tr><td class="label">Course Name </td><td id="paddingtab"></td><td class="label">Institution Name</td><td id="paddingtab"< </td><td class="label">Start Date </td><td id="paddingtab"< </td><td class="label">End Date </td><td id="paddingtab"></td><td class="label">Percentage or CGPA </td></tr>';
     
            var eduNewRowField = '<tr><td><input type="text" name="course_name_'+ eduCount +'" id="course_name_'+ eduCount +'" value=""></input></td><td></td><td><input type="text" name="college_name_'+ eduCount +'" id="college_name_'+ eduCount +'" value=""></input></td><td></td><td><input type="text" name="start_dt_'+ eduCount +'" id="start_dt_'+ eduCount +'"  value=""></input></td><td></td><td><input type="text" name="end_dt_'+ eduCount +'" id="end_dt_'+ eduCount +'" value=""></input></td><td></td><td><input type="text" name="cgpa_'+ eduCount +'" id="cgpa_'+ eduCount +'" value=""></input></td></tr>';
     
     
            $('#edu_table').append(eduPaddingRow);
            $('#edu_table').append(eduNewRowLabel);
            $('#edu_table').append(eduNewRowField);
     
            $('input#edu_count').val(eduCount);

          });
        });
      </script>
      <div>
      <input type="button" id="add_edu" value="Add Entry" >
      <input class="counter" id="edu_count" type="text" value="1" readonly="readonly"></input>
      </div>
    
    
      <div>
        <table id="edu_table">
          <tr>
            <td class="label">Course Name </td>
            <td id="paddingtab" />
            <td class="label">Institution Name </td>
            <td id="paddingtab" />
            <td class="label">Start Date </td>
            <td id="paddingtab" />
            <td class="label">End Date </td>
            <td id="paddingtab" />
            <td class="label">Percentage or CGPA </td>
          </tr>
        
          <tr>
            <td><input type="text" name="course_name_1" id="course_name_1" value=""/></td>
            <td  />
            <td><input type="text" name="college_name_1" id="college_name_1" value=""/></td>
            <td  />
            <td><input type="text" name="start_dt_1" id="start_dt_1" value=""/></td>
            <td  />
            <td><input type="text" name="end_dt_1" id="end_dt_1" value=""/></td>
            <td  />
            <td><input type="text" name="cgpa_1" id="cgpa_1" value=""/></td>
          </tr>
      
        </table>
      </div>
      
      <input type="submit" class="button" id="create_resume" value="Create Resume">
    </div> 
    
    
    <div id="view3"> 
      <script type="text/javascript">
        var workCount = 1;
        $(function(){
          $('input#add_work').click(function(){
            workCount += 1;
            //alert(count);
            var workPaddingRow = '<tr id="padding-row"><td id="padding-tab"> </td> <td id="padding"> </td><td id="padding-tab"> </td><tr></tr>';
     
            var workNewRowLabel = '<tr><td class="label">Job Title </td><td id="paddingtab"> </td><td class="label">Company Name </td><td id="paddingtab"> </td><td class="label">Start Date </td><td id="paddingtab"> </td><td class="label">End Date </td><td id="paddingtab"> </td><td class="label">Description</td></tr>';
     
            var workNewRowField = '<tr><td><input type="text" name="job_title_'+workCount+'" id="job_title_'+workCount+'" value=""></td><td> </td><td><input type="text" name="company_name_'+workCount+'" id="company_name_'+workCount+'" value=""></td><td> </td><td><input type="text" name="begin_dt_'+workCount+'" id="begin_dt_'+workCount+'" value=""></td><td> </td><td><input type="text" name="finish_dt_'+workCount+'" id="finish_dt_'+workCount+'" value=""></td><td></td><td><textarea class="workexp" id="workexp_'+workCount+'" value=""></textarea></td></tr>';
     
     
            $('#work_table').append(workPaddingRow);
            $('#work_table').append(workNewRowLabel);
            $('#work_table').append(workNewRowField);

          });
        });
      </script>
      <div>
        <input type="button" id="add_work" value="Add Entry" ></div>
      
      <div>
        <table id="work_table">
          <tr>
            <td class="label">Job Title </td>
            <td id="paddingtab" />
            <td class="label">Company Name </td>
            <td id="paddingtab" />
            <td class="label">Start Date </td>
            <td id="paddingtab" />
            <td class="label">End Date </td>
            <td id="paddingtab" />
            <td class="label">Description </td>
          </tr>
          
          <tr>
            <td><input type="text" name="job_title_1" id="job_title_1" value=""/></td>
            <td  />
            <td><input type="text" name="company_name_1" id="company_name_1" value=""/></td>
            <td  />
            <td><input type="text" name="begin_dt_1" id="begin_dt_1" value=""/></td>
            <td  />
            <td><input type="text" name="finish_dt_1" id="finish_dt_1" value=""/></td>
            <td  />
            <td><textarea class="workexp" id="workexp_1" value=""></textarea></td>
          </tr>
      
        </table>
      </div>
    
      <input type="submit" class="button" id="create_resume" value="Create Resume">
    </div> 
    
    
    <div id="view4"> 
      <table>
        <tr>
          <td class="label">Interests </td>
          <td id="paddingtab" />
        </tr>
    
        <tr>
          <td><textarea type="text" name="interests" id="interests" value="None"/></textarea></td>
          <td id="paddingtab" />
        </tr>
      </table>
      <input type="submit" class="button" id="create_resume" value="Create Resume">
    </div>
    
    
    <div id="view5"> 
      <table>
        <tr>
          <td class="label">References </td>
          <td id="paddingtab" />
        </tr>
        <tr>
          <td><textarea type="text" name="references" id="references" value=""/></textarea></td>
          <td id="paddingtab" />
        </tr>
      </table>
      <input type="submit" class="button" id="create_resume" value="Create Resume">
    </div>
    
    </form>
    </div>    
   <?php include 'footer.php';?>
  </body>
</html>
