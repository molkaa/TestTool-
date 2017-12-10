function tick(num_question){
var input = document.getElementById("checkbox"+num_question);
var isChecked = input.checked;
var plus=0;

        for(var i= 0; i < tab.length; i++)
                    {
                        if(tab[i]==num_question)
                          {
                            plus = plus +1;
                            }
                     }
     if(isChecked)
     {
         document.getElementById("badge"+num_question).className = "badge bg-yellow tooltip-button";
         tickPlus();
           
     }
     else if(isChecked==false && plus>0)
     {
         
         document.getElementById("badge"+num_question).className = "badge bg-green tooltip-button";
         tickMoins();

        
     }
     
     else if(isChecked ==false && plus==0)
     {
          
          document.getElementById("badge"+num_question).className = "badge bg-red tooltip-button";
         tickMoins();
     }
            
        }

function tick2(num_question,nbr_response){
var input = document.getElementById("checkbox"+num_question);
var isChecked = input.checked;
var plus=0;

        for(var i= 0; i < tab.length; i++)
                    {
                        if(tab[i]==num_question)
                          {
                            plus = plus +1;
                            }
                     }
     if(isChecked)
     {
         document.getElementById("badge"+num_question).className = "badge bg-yellow tooltip-button";
         tickPlus();
           
     }
     else if(isChecked==false && plus==nbr_response)
     {
         
         document.getElementById("badge"+num_question).className = "badge bg-green tooltip-button";
         tickMoins();

        
     }
     
     else if(isChecked ==false && plus<nbr_response)
     {
          
          document.getElementById("badge"+num_question).className = "badge bg-red tooltip-button";
         tickMoins();
     }
            
        }

function tickrep(id_response,id_question)
{
    
    var input = document.getElementById("response"+id_response+id_question);
    var isChecked = input.checked;
    
    var input2 = document.getElementById("checkbox"+id_question);
    var isChecked2 = input2.checked;
    
    
    var plus = 0;
    if(isChecked)
     {
           tab.push(id_question);
                 for(var i= 0; i < tab.length; i++)
                    {
                        if(tab[i]==id_question)
                          {
                            plus = plus +1;
                            }
                     }

           if(plus>0 && isChecked2==true)
                {
                    document.getElementById("badge"+id_question).className = "badge bg-yellow tooltip-button";
                }
            else if(plus>0 && isChecked2==false)
                {
                    document.getElementById("badge"+id_question).className = "badge bg-green tooltip-button";
                   //alert('not checked');
                }

//alert('oui'+id_question+''+id_response);
        
       
           
     }
     if(isChecked==false)
     {      
//         alert('oui'+id_question+''+id_response)
            
        var index = tab.indexOf(id_question) ; 
        tab.splice(index, 1);
       
            for(var i= 0; i < tab.length; i++)
                    {
                         if(tab[i]==id_question)
                                {   
                                   
                                    plus = plus +1;
                                 }
                      }
                      
            

            if(plus ==0 && isChecked2==true)
                {
                      document.getElementById("badge"+id_question).className = "badge bg-yellow tooltip-button";
                }
            else if(plus ==0 && isChecked2==false)
                 {
                    document.getElementById("badge"+id_question).className = "badge bg-red tooltip-button";
                  }

        
     }
}


function tickfree(id_question){
    
    var input = document.getElementById("free"+id_question);
    var isEmpty = input.value;
    
     var input2 = document.getElementById("checkbox"+id_question);
    var isChecked2 = input2.checked;
    
    
    var plus=0;
    
  
    if(isEmpty.length>0)
    {
       
        tab.push(id_question);
        for(var i= 0; i < tab.length; i++)
                    {
                        if(tab[i]==id_question)
                          {
                            plus = plus +1;
                            }
                     }
        
         if(plus>0 && isChecked2==true)
                {
                    document.getElementById("badge"+id_question).className = "badge bg-yellow tooltip-button";
                }
            else if(plus>0 && isChecked2==false)
                {
                    document.getElementById("badge"+id_question).className = "badge bg-green tooltip-button";
                   //alert('not checked');
                }
                     
                     
    }
    else if(isEmpty.length==0)
    {
          
        
        
        var index = tab.indexOf(id_question) ; 
        tab.splice(index, 1);
       
            for(var i= 0; i < tab.length; i++)
                    {
                         if(tab[i]==id_question)
                                {   
                                   
                                    plus = plus +1;
                                 }
                      }
                      
            

            if(plus ==0 && isChecked2==true)
                {
                      document.getElementById("badge"+id_question).className = "badge bg-yellow tooltip-button";
                }
            else if(plus ==0 && isChecked2==false)
                 {
                    document.getElementById("badge"+id_question).className = "badge bg-red tooltip-button";
                  }
    }
    
    
    
}


function tickselect(id_question){
   
    var input = document.getElementById("select"+id_question);
    var isEmpty = input.value;
    
     var input2 = document.getElementById("checkbox"+id_question);
    var isChecked2 = input2.checked;
    
    
    var plus=0;
    

    if(isEmpty.length>0)
    {
     
        tab.push(id_question);
        for(var i= 0; i < tab.length; i++)
                    {
                        if(tab[i]==id_question)
                          {
                            plus = plus +1;
                            }
                     }
         
        
         if(plus>0 && isChecked2==true)
                {
                    document.getElementById("badge"+id_question).className = "badge bg-yellow tooltip-button";
                }
            else if(plus>0 && isChecked2==false)
                {
                    document.getElementById("badge"+id_question).className = "badge bg-green tooltip-button";
                   //alert('not checked');
                }
                     
                     
    }
    else if(isEmpty.length==0)
    {
          
       
       
            for(var i= 0; i <= tab.length; i++)
                    {
                       
                         if(tab[i]==id_question)
                                {  
                                    
                                   tab.splice(i,1);
                                   
                                
                                 }
                      }
                      
               for(var i= 0; i < tab.length; i++)
                    {
                         if(tab[i]==id_question)
                                {   
                                   
                                    plus = plus +1;
                                 }
                      }
                     
       
            if(plus ==0 && isChecked2==true)
                {
                      document.getElementById("badge"+id_question).className = "badge bg-yellow tooltip-button";
                }
            else if(plus ==0 && isChecked2==false)
                 {
                    document.getElementById("badge"+id_question).className = "badge bg-red tooltip-button";
                  }
    }
    
    
    
}


function ticknumeric(id_response,id_question,nbr_reponse)
{
  
    var input = document.getElementById("numeric"+id_response+id_question);
    var isEmpty = input.value;
    
    var input2 = document.getElementById("checkbox"+id_question);
    var isChecked2 = input2.checked;
    
    
    var plus = 0;
    if(isEmpty.length>0)
     {
           tab.push(id_question);
                 for(var i= 0; i < tab.length; i++)
                    {
                        if(tab[i]==id_question)
                          {
                            plus = plus +1;
                            }
                     }

           if(plus>0 && isChecked2==true )
                {
                    document.getElementById("badge"+id_question).className = "badge bg-yellow tooltip-button";
                }
            else if(isChecked2==false && plus == nbr_reponse)
                {
                    document.getElementById("badge"+id_question).className = "badge bg-green tooltip-button";
                  
                }


        
       
           
     }
     if(isEmpty.length==0)
     {      

            
        var index = tab.indexOf(id_question) ; 
        tab.splice(index, 1);
       
            for(var i= 0; i < tab.length; i++)
                    {
                         if(tab[i]==id_question)
                                {   
                                   
                                    plus = plus +1;
                                 }
                      }
                      
            

            if(plus<nbr_reponse && isChecked2==true )
                {
                      document.getElementById("badge"+id_question).className = "badge bg-yellow tooltip-button";
                }
            else if(isChecked2==false && plus<nbr_reponse)
                 {
                    document.getElementById("badge"+id_question).className = "badge bg-red tooltip-button";
                  }

        
     }
}