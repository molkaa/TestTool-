
           
            $("#CountDownTimer").TimeCircles({ 
                time: { Days: { show: false }, Hours: { show: true, color: "#0A4579" } ,Minutes: {show: true, text: "Minutes",color: "#0256D5" } ,Seconds: {show: true,text: "Seconds",color: "#0E0102"}
},
                count_past_zero: false,
                text_size: 0.1,
                circle_bg_color: "#C0C3C6"
               
               
                
            });
            
           
            $("#CountDownTimer").TimeCircles().addListener(function(unit,value,total){
                  
                $.cookie('tempQuiz'+nomTest, total);
              
                
              /*  if(total=== 10 ||total=== 9 ||total=== 8 ||total=== 7 ||total=== 6 ||total=== 5 ||total=== 4 ||total=== 3 || total=== 2 || total=== 1 ){
                    $("#CountDownTimer").TimeCircles({
                       
                       "circle_bg_color": "#cd2323" 
                       
                   });
                   
                 
               } */
               
               //else
              
                   if (total === 0 )
               {
                
                
                  document.forms["myform"].submit();
                 
                 // alert("end test");
                 
               }
               
               
               
               
               
              
                   
        });
                 
            
 
    
        