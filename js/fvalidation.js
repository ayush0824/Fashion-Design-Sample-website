function val()
{

   if(document.getElementById('uname')!=null && document.getElementById('uname').value=="")
	{
		alert("Name is Empty");
		document.getElementById('uname').focus();
		return false;
	}

	if(document.getElementById('upno')!=null && document.getElementById('upno').value=="")
	{
		alert("Please Enter Contact No.");
		document.getElementById('upno').focus();
			return false;
	}

	if(document.getElementById('upno')!=null && document.getElementById('upno').value.length<10)
	{
		alert("Please Enter 10 digit");
		document.getElementById('upno').focus();
			return false;
	}

	if(document.getElementById('uemail')!=null && document.getElementById('uemail').value=="")
	{
		alert("Please Enter your valid Email.");
		document.getElementById('uemail').focus();
			return false;
	}

	if(document.getElementById('umsg')!=null && document.getElementById('umsg').value=="")
	{
		alert("Please Enter your message.");
		document.getElementById('umsg').focus();
			return false;
	}

	if(document.getElementById('mobno')!=null && document.getElementById('mobno').value=="")
	{
		alert("Please Enter mobile No.");
		document.getElementById('mobno').focus();
			return false;
	}
	if(document.getElementById('mobno')!=null && document.getElementById('mobno').value.length<10)
	{
		alert("Please Enter 10 digit");
		document.getElementById('mobno').focus();
			return false;
	}

	if(document.getElementById('slider')!=null && document.getElementById('slider').value=="")
	{
		alert("Please Enter slider title");
		document.getElementById('slider').focus();
			return false;
	}

	if(document.getElementById('gallery')!=null && document.getElementById('gallery').value=="")
	{
		alert("Please Enter gallery title");
		document.getElementById('gallery').focus();
			return false;
	}

	if(document.getElementById('ntitle')!=null && document.getElementById('ntitle').value=="")
	{
		alert("Please Enter news title");
		document.getElementById('ntitle').focus();
			return false;
	}

	if(document.getElementById('bcategory')!=null && document.getElementById('bcategory').value=="")
	{
		alert("Please Enter blog category");
		document.getElementById('bcategory').focus();
			return false;
	}

	if(document.getElementById('btitle')!=null && document.getElementById('btitle').value=="")
	{
		alert("Please Enter blog title");
		document.getElementById('btitle').focus();
			return false;
	}

	if(document.getElementById('stitle')!=null && document.getElementById('stitle').value=="")
	{
		alert("Please Enter seo title");
		document.getElementById('stitle').focus();
			return false;
	}

	if(document.getElementById('opass')!=null && document.getElementById('opass').value=="")
	{
		alert("Please Enter old password");
		document.getElementById('opass').focus();
			return false;
	}

	if(document.getElementById('npass')!=null && document.getElementById('npass').value=="")
	{
		alert("Please Enter new password");
		document.getElementById('npass').focus();
			return false;
	}

	if(document.getElementById('cpass')!=null && document.getElementById('cpass').value=="")
	{
		alert("Please Enter confirm password");
		document.getElementById('cpass').focus();
			return false;
	}
}

function onfill()
{
	alert("Successfull submited ");
}

function del()
{
	return confirm('Are you sure want to delete this item');
}