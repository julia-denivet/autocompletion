function autocomp() 
{   vartext=window.document.getElementById('auto').value ;
    console.log(vartext);
    httpRequest = new XMLHttpRequest();
			  httpRequest.onreadystatechange = function() 
  			{
      			document.getElementById("data").innerHTML = this.responseText;
  			};
  			httpRequest.open("GET","option.php?srt="+vartext);
  			httpRequest.send();
    
}