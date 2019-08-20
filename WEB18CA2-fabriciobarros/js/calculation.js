function call(){
var q=parseInt((new Date()).getFullYear());
var w=parseInt(document.getElementById("yob").value);
var result=q-w;
   if(isNaN(q)||isNaN(w)){
          alert("please enter a number");
     }
     else

        {

         var result=q-w;
        document.getElementById("result").innerHTML=q-w;
         //alert("The subtraction is " +result);  
       }

}