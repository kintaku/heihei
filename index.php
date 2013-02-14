<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" />
<script src="js/jquery.js" type="text/javascript"></script>
<title>Deidei's job</title>
<script type="text/javascript">
  $(document).ready(function(){
            $("#btn").click(function(){
              console.log("i'm in");
              console.log($("#op option:selected").val());
              var rNums=/[0-9]{1}/;
  				    var s1 = document.getElementById("arg1").value;
				    	var s2 = document.getElementById("arg2").value;
					    //alert(s1+";"+s2);
					    if(rNums.test(s1) && rNums.test(s2)){
						      jQuery.ajax({
	           			dataType: "json",
           				url: "action/atomic.php",
           				type: "GET",
           				data: {arg1:$("#arg1").val(),arg2:$("#arg2").val(),op:$("#op option:selected").val()},
           				success: function(data){
	             			var htmlobj="";
            				$.each(data,function(key,val){
	              				htmlobj+=val;
              					if (key=="arg2") htmlobj+="=";
            				});
            				htmlobj+="\n";
            				$("#result").append(htmlobj);
           				  }					
         			    });
					   } else{
						      alert("Please input number!");
				     }
          
            });
          });
</script>
</head>
<body>
 <div id="contianer">
     <div id="header">
      <h1>
        <p class="p1">Dei<span class="sp1">D</span>ei
        <span class="sp1">'s</span><span class="sp2">HomeWork</span></p></h1>
     </div>
     <div id="calcu">
        <h1>
          
          <label for="arg1" class="labl">arg1:</label>
             <input type="text" id="arg1" name="arg1" class="in1" />
             <select id="op" class="oper">
               <option value="0">+</option>
        	     <option value="1">-</option>
        	     <option value="2">*</option>
        	     <option value="3">/</option>
      	     </select>
      	    <label for="arg2" class="labl">arg2:</label>
      	    <input type="text" id="arg2" name="arg2" class="in1"/>
      	    <button id="btn" type="button" class="sub">Submit</button> 
         
        </h1>
        <h2>
           <p class="p2">History of all Calculations</p>
           <textarea class="process" id="result" ></textarea>
        </h2>
     </div>
     <div id="footer">
        <h1>Copyright By DeiDei</h1>
     </div>
 </div>
</body>
</html>
