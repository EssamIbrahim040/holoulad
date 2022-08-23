
  
    // One day Time in ms (milliseconds)
    var one_day = 1000 * 60 * 60 * 24
  
// To set present_dates to two variables
var present_date = new Date();
  
// 0-11 is Month in JavaScript
var christmas_day = new Date(present_date.getFullYear(), 11, 25)
  
// To Calculate next year's Christmas if passed already.
if (present_date.getMonth() == 11 && present_date.getdate() > 25)
    christmas_day.setFullYear(christmas_day.getFullYear() + 1)
  
// To Calculate the result in milliseconds and then converting into days
var Result = Math.round(christmas_day.getTime() - present_date.getTime()) / (one_day);
  
// To remove the decimals from the (Result) resulting days value
var Final_Result = Result.toFixed(0);
  
//To display the final_result value
document.write("Number of days remaining till christmas <br>" 
               + present_date + "<br> and <br>" 
               + christmas_day + " is: <br> " 
               + Final_Result);
 
               /*
    <html> 
<head> 
    <title> Calculate days between dates </title> 
      <script>
       function daysDifference() {
         //define two variables and fetch the input from HTML form
         var dateI1 = document.getElementById("dateInput1").value;
         var dateI2 = document.getElementById("dateInput2").value;

        //define two date object variables to store the date values
         var date1 = new Date(dateI1);
         var date2 = new Date(dateI2);
 
        //calculate time difference
         var time_difference = date2.getTime() - date1.getTime();

         //calculate days difference by dividing total milliseconds in a day
         var result = time_difference / (1000 * 60 * 60 * 24);

         return document.getElementById("result").innerHTML =  
              result + " days between both dates. ";
                    }
      </script>  
</head>  
<body> 
  
    <h2 style="color: 32A80F" align="Center">  
            Javatpoint : Calculate days between dates 
        <br> <br> </h2> 
  
        <p align="Center"> <b> Enter date1   </b> 
        <input type="date" id="dateInput1"> 
        <br> <br> 
        
        <p align="Center"> <b> Enter date2   </b> 
        <input type="date" id="dateInput2"> 
        <br> <br>     
  
        <button onclick="daysDifference()"> 
          Calculate number of days 
        </button> 
    </p> 
  
    <h3 style="color:32A80F" id="result" align="center"></h3> 
  
</body>  
</htm

               */