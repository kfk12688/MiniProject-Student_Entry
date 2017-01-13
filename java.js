function validateform()
	{ 
	var x=document.regform.name.value;
	var y=document.regform.dept.value;
	var coll=document.regform.clg.value;
	var c=document.regform.year.value;
	var d=document.regform.email.value;
	var e=document.regform.phone.value;
	

	if (x==null || x=="") 
	{
		alert("Name must be filled out");
        return false;
    }
	else
	{
		var xx=/^[A-Za-z\s]*$/;
	if(!xx.test(x))
	{
		alert("Enter proper Name");
		return false;
	}
	}
	
	
	if (y==null || y=="")
	{
			alert("Department must be filled out");
			return false;
	}
	else
	{
		var yy=/^[A-Za-z\s]*$/;
		if(!yy.test(y))
		{
			alert("Enter proper Department");
			return false;
		}
	}
	
	
	if(coll==null||coll=="")
	{
				alert("College name must be filled out");
        return false;

	}
	else
	{
		var zz=/^[A-Za-z\s]*$/;
		if(!zz.test(coll))
		{
			alert("Enter proper College Name");
			return false;
		}
	}
	
	
	
		if(c==null||c=="")
	{
				alert("Year must be filled out");
        return false;

	}
	else
	{
		var cc=/^[1-9]+$/;
		if(!cc.test(c))
		{
			alert("Enter proper year");
			return false;
		}
		else
		{
			if(!(c<=5&&c>0))
			{
				alert("Enter proper year ranges between 1 and 5 ");
			return false;
			}
		
		}
	}
		if(d==null||d=="")
	{
				alert("Email id must be filled out");
        return false;
		
	}
	else
	{
		var dd=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(!dd.test(d))
		{
			alert("Enter proper Email ID");
			return false;
		}
	}
		if(e==null||e=="")
	{
						alert("Phone number must be filled out");
        return false;

	}
	else
	{
		var mob = /^[1-9]{1}[0-9]{9}$/;  
 		 if(!mob.test(e))  
  		{  
      			 
  		  
     			alert("Not a valid Phone Number");  
     			return false;  
  		}  
	}
if(document.getElementById("event1").checked==false)
{
	if(document.getElementById("event2").checked==false)
	{
		if(document.getElementById("event3").checked==false)
		{
			if(document.getElementById("event4").checked==false)
			{
				if(document.getElementById("event5").checked==false)
				{
					if(document.getElementById("event6").checked==false)
					{
						alert("You must select atleast one event");
						return false;
					}
				}
			}
		}
	}
}




	}
	function check()
{
	var id=document.form.id.value;
	var pass=document.form.pass.value;
	if(id=="abhimaan14" && pass=="abhimaan14")
	{
		return true;
	}
	else
	{	alert("Password and Id mismatched");
	return false;
	}
}