function autocomp(test) 
{  console.log(test);
	t=test;

	 if(t=='0')
	{
		vartext=window.document.getElementById('autoa').value ;
	}
	else
	{
		vartext=window.document.getElementById('autob').value ;
	}
	
    console.log(vartext);
    httpRequest = new XMLHttpRequest();
			  httpRequest.onreadystatechange = function() 
  			{
				if(t=='0')
				{
					document.getElementById("dataa").innerHTML = this.responseText;
				}
				else
				{
					document.getElementById("datab").innerHTML = this.responseText;
				}  
      			
  			};
  			httpRequest.open("GET","option.php?srt="+vartext);
  			httpRequest.send();
    
}