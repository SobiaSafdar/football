function checkPhoto5(target) {
 {
var fileName = target.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "doc" || ext == "png" || ext == "PNG" || ext == "pdf")
		{
							if(target.files[0].size > 102400) 
							{
								alert("Image too big (max 100kb)");
								document.getElementById("img5").value = "";
								return false;
							}
							return true;
		} 
		else
		{
							alert("Upload Gif or Jpg images only");
							document.getElementById("img5").value = "";
							return false;
		}
}


}
function checkPhoto1(target) {
 {
var fileName = target.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "doc" || ext == "png" || ext == "PNG" || ext == "pdf")
		{
							if(target.files[0].size > 102400) 
							{
								alert("Image too big (max 100kb)");
								document.getElementById("img1").value = "";
								return false;
							}
							return true;
		} 
		else
		{
							alert("Upload Gif or Jpg images only");
							document.getElementById("img1").value = "";
							return false;
		}
}


}
function checkPhoto4(target) {
var fileName = target.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "doc" || ext == "png" || ext == "PNG" || ext == "pdf")
		{
							if(target.files[0].size > 102400) 
							{
								alert("Image too big (max 100kb)");
								document.getElementById("img4").value = "";
								return false;
							}
							return true;
		} 
		else
		{
							alert("Upload Gif or Jpg images only");
							document.getElementById("img4").value = "";
							return false;
		}
}
function checkPhoto2(target) {
var fileName = target.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "doc" || ext == "png" || ext == "PNG" || ext == "pdf")
		{
							if(target.files[0].size > 102400) 
							{
								alert("Image too big (max 100kb)");
								document.getElementById("img2").value = "";
								return false;
							}
							return true;
		} 
		else
		{
							alert("Upload Gif or Jpg images only");
							document.getElementById("img2").value = "";
							return false;
		}
}
function checkPhoto3(target) {
var fileName = target.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "doc" || ext == "png" || ext == "PNG" || ext == "pdf")
		{
							if(target.files[0].size > 102400) 
							{
								alert("Image too big (max 100kb)");
								document.getElementById("img3").value = "";
								return false;
							}
							return true;
		} 
		else
		{
							alert("Upload Gif or Jpg images only");
							document.getElementById("img3").value = "";
							return false;
		}

}



function date_check(e)
{
	ascii =e.keyCode;
	if(  !(ascii>=0 && ascii<=255) )
	return true;
	else
	return false;
	}
////////////////////////////////////////////////////////
function chr(e)
{
	ascii =e.keyCode;
	if(((ascii>=65)&&(ascii<=91))||((ascii>=97)&&(ascii<=122)) || (ascii<=32))
	return true;
	else
	return false;
	}
//////////////////////for digits///////////////////	
	function chrr(e)
{
	ascii =e.keyCode;
	if((ascii>=48)&&(ascii<=57) ||(ascii<=32))
	return true;
	else
	return false;
	}



function validate()
{
  
if (document.forms["myForm"]["position"].value=="")
  {
  alert("Step 1 Application :Please Enter Position");
  document.forms["myForm"]["position"].focus();
  return false;
  }
 if (document.forms["myForm"]["img1"].value=="")
  {
  alert("Step 1 Application : Photograph ?");
  document.forms["myForm"]["img1"].focus();
  return false;
  }
if (document.forms["myForm"]["img2"].value=="")
  {
  alert("Step 1 Application : Proof of ID ?");
  document.forms["myForm"]["img2"].focus();
  return false;
  }
if (document.forms["myForm"]["img3"].value=="")
  {
  alert("Step 1 Application : Proof of Address ?");
  document.forms["myForm"]["img3"].focus();
  return false;
  }
if (document.forms["myForm"]["img4"].value=="")
  {
  alert("Step 1 Application : Please upload Right to Work");
  document.forms["myForm"]["img4"].focus();
  return false;
  }
if (document.forms["myForm"]["status"].value=="")
  {
  alert("Step 1 Application :Please Select Status ");
  document.forms["myForm"]["status"].focus();
  return false;
  }
if (document.forms["myForm"]["dob"].value=="")
  {
  alert("Step 1 Application :Please Enter Date of Birth )");
  document.forms["myForm"]["dob"].focus();
  return false;
  }
if (document.forms["myForm"]["firstname"].value=="")
  {
  alert("Step 1 Application :Please Enter First Name");
  document.forms["myForm"]["firstname"].focus();
  return false;
  }  
if (document.forms["myForm"]["surname"].value=="")
  {
  alert("Step 1 Application :Please Enter Surname");
  document.forms["myForm"]["surname"].focus();
  return false;
  }
 if (document.forms["myForm"]["v"].value=="0")
  {
  alert("Step 1 Application :Date of birth and Surname already exists,  Please Try with aonother one");
  return false;
  }  
if (document.forms["myForm"]["maidname"].value=="")
  {
  alert("Step 1 Application :Please Enter Maidname");
  document.forms["myForm"]["maidname"].focus();
  return false;
  }
if (document.forms["myForm"]["postcode"].value=="")
  {
  alert("Step 1 Application :Please Enter Postcode");
  document.forms["myForm"]["postcode"].focus();
  return false;
  }  
if (document.forms["myForm"]["nin"].value=="")
  {
  alert("Step 1 Application :Please Enter National Insurance Number ");
  document.forms["myForm"]["nin"].focus();
  return false;
  }
 if (document.forms["myForm"]["hometel"].value=="")
  {
  alert("Step 1 Application :Please Enter Home Telephone # ");
  document.forms["myForm"]["hometel"].focus();
  return false;
  }
  
if (document.forms["myForm"]["worktel"].value=="")
  {
  alert("Step 1 Application :Please Enter Work Telephone # ");
  document.forms["myForm"]["worktel"].focus();
  return false;
  }
if (document.forms["myForm"]["mobile"].value=="")
  {
  alert("Step 1 Application :Please Enter Mobile # ");
  document.forms["myForm"]["mobile"].focus();
  return false;
  }

if (document.forms["myForm"]["email"].value=="")
  {
  alert("Step 1 Application :Please Enter Correct Email");
  document.forms["myForm"]["email"].focus();
  return false;
  }
  if (document.forms["myForm"]["c_add"].value=="")
  {
  alert("Step 1 Application :Please Enter Current Address");
  document.forms["myForm"]["c_add"].focus();
  return false;
  }
if (document.forms["myForm"]["nationality"].value=="")
  {
  alert("Step 1 Application :Please Enter Nationality");
  document.forms["myForm"]["nationality"].focus();
  return false;
  }  
if (document.forms["myForm"]["ukenterydate"].value=="")
  {
  alert("Step 1 Application :Date of entery into UK ?");
  document.forms["myForm"]["ukenterydate"].focus();
  return false;
  }
if (document.forms["myForm"]["ukenteryplace"].value=="")
  {
  alert("Step 1 Application :Please Enter Place of entery into UK");
  document.forms["myForm"]["ukenteryplace"].focus();
  return false;
  }
if (document.forms["myForm"]["ukexpirydate"].value=="")
  {
  alert("Step 1 Application :Please Enter Expiry Date");
  document.forms["myForm"]["ukexpirydate"].focus();
  return false;
  }
  

if (document.forms["myForm"]["passnumber"].value=="")
  {
  alert("Step 1 Application :Please Enter Passport Number ?");
  document.forms["myForm"]["passnumber"].focus();
  return false;
  }
  if (document.forms["myForm"]["licence_num"].value=="")
  {
  alert("Step 1 Application :Please Enter Licence Number ?");
  document.forms["myForm"]["licence_num"].focus();
  return false;
  }
  if (document.forms["myForm"]["licence_expiry"].value=="")
  {
  alert("Step 1 Application :Please Enter Licence Expiry Date ?");
  document.forms["myForm"]["licence_expiry"].focus();
  return false;
  }
  /////////////////////////////////////////
  
  if (document.forms["myForm"]["emergency_name"].value=="")
  {
  alert("Step 1 Application : Emergency Contact =>  Contact Name ?");
  document.forms["myForm"]["emergency_name"].focus();
  return false;
  }
   if (document.forms["myForm"]["emergency_kinname"].value=="")
  {
  alert("Step 1 Application : Emergency Contact =>  Kin Name ?");
  document.forms["myForm"]["emergency_kinname"].focus();
  return false;
  }
   if (document.forms["myForm"]["emergency_home"].value=="")
  {
  alert("Step 1 Application : Emergency Contact => Tel No(Home) ?");
  document.forms["myForm"]["emergency_home"].focus();
  return false;
  }
    if (document.forms["myForm"]["emergency_office"].value=="")
  {
  alert("Step 1 Application : Emergency Contact => Tel No(Office) ?");
  document.forms["myForm"]["emergency_office"].focus();
  return false;
  }
    if (document.forms["myForm"]["emergency_address"].value=="")
  {
  alert("Step 1 Application : Emergency Contact => Address ?");
  document.forms["myForm"]["emergency_address"].focus();
  return false;
  }
 ///////////////////////////////////////////

<!-- if( document.getElementById('roll_no4').value<=1)
// {
//  alert("Step 1 Application :Please state At least one Personal Reference");
 // return false;
//}-->
/////////////////////////////////////////////
 
    if (document.forms["myForm"]["declaration_print_name"].value=="")
  {
  alert("Step 1 Application : AUTORIZATION AND COMPLIANCE => Print Name ?");
  document.forms["myForm"]["declaration_print_name"].focus();
  return false;
  }
 
 
    if (document.forms["myForm"]["declaration_print_date"].value=="")
  {
  alert("Step 1 Application : AUTORIZATION AND COMPLIANCE => Print date ?");
  document.forms["myForm"]["declaration_print_date"].focus();
  return false;
  }
  
    if (document.forms["myForm"]["working_print_name"].value=="")
  {
  alert("Step 1 Application : WORKING TIME REGULATIONS => Print Name ?");
  document.forms["myForm"]["working_print_name"].focus();
  return false;
  }
  
    if (document.forms["myForm"]["working_print_date"].value=="")
  {
  alert("Step 1 Application : WORKING TIME REGULATIONS => Print date ?");
  document.forms["myForm"]["working_print_date"].focus();
  return false;
  }

	
	
}
function reduce_balance(id){
   var elements = document.getElementsByClassName('jibi007');
var j=1;
var my_id=id+'roll';
for (var i = 0; i < elements.length; i++) {
    elements[0].value=1;
   if(parseFloat(document.getElementById(my_id).innerHTML)==i){
     elements[i].innerHTML =parseFloat(elements[i-1].innerHTML)
   }else{
       if(i!=0){
         elements[i].innerHTML =parseFloat(elements[i-1].innerHTML)+1;
        j++;
       }
   }
     document.getElementById('roll_no').value=elements.length;
}}
	
	    function remove_row(o) {    var p=o.parentNode.parentNode;   

p.parentNode.removeChild(p); }
     
function add_values()
	 {
  if(document.getElementById('add').value && document.getElementById('p_code').value && document.getElementById('year').value && document.getElementById('month').value )
 {
     
  add=document.getElementById('add').value;
  p_code=document.getElementById('p_code').value;
  year=document.getElementById('year').value;
  month=document.getElementById('month').value;
  
  
    item=document.getElementById('row_id').value;
    roll=parseInt(document.getElementById('roll_no').value);
 
    $('<tr id='+item+'><td><lable id='+item+'roll class=jibi007 >'+roll+'</label></td><td><input type=hidden value='+item+' id='+item+'id><input type=text name="address[]"  id='+item+'st value=\''+add+'\' style="width:400px" ></td><td><input type=text name="postal_code[]"  id='+item+'st value=\''+p_code+'\' style="width:150px"  readonly ></td><td><input type=text name="year[]"  id='+item+'st value=\''+year+'\' style="width: 150px"  readonly="readonly" ></td><td><input type=text name="month[]"  id='+item+'st value=\''+month+'\' style="width: 150px"  readonly="readonly" ></td><td><input type=button id='+item+' style="width:30px;border:none;height:30px;background:url(pics/close_new.png)" onclick=reduce_balance("'+item+'");$(this).closest("tr").remove(); ></td></tr>').fadeIn("slow").appendTo('#item_copy_final');
    document.getElementById('roll_no').value=roll+1;
 
    item1 = item + 1;
	document.getElementById('row_id').value= item1;

	document.getElementById('add').value		="";
  	document.getElementById('p_code').value		="";
 	document.getElementById('year').value		="";
    document.getElementById('month').value		="";
	 
    }
	else{
     alert('Please Fill the Row');
    }
}








function reduce_balance2(id){
   var elements = document.getElementsByClassName('jibi0072');
var j=1;
var my_id=id+'roll2';
for (var i = 0; i < elements.length; i++) {
    elements[0].value=1;
   if(parseFloat(document.getElementById(my_id).innerHTML)==i){
     elements[i].innerHTML =parseFloat(elements[i-1].innerHTML)
   }else{
       if(i!=0){
         elements[i].innerHTML =parseFloat(elements[i-1].innerHTML)+1;
        j++;
       }
   }
     document.getElementById('roll_no2').value=elements.length;
}}
	
	    function remove_row(o) {    var p=o.parentNode.parentNode;   

p.parentNode.removeChild(p); }
     
function add_values2()
	 { 
  if(document.getElementById('edufrom').value && document.getElementById('eduto').value && document.getElementById('qua').value && document.getElementById('teledu').value && document.getElementById('faxedu').value && document.getElementById('nameedu').value )
 {
	 
  from=document.getElementById('edufrom').value;
  to=document.getElementById('eduto').value;
  q=document.getElementById('qua').value;
  tel=document.getElementById('teledu').value;
  fax=document.getElementById('faxedu').value;
  name=document.getElementById('nameedu').value;
  
    item2=document.getElementById('row_id2').value;
    roll2=parseInt(document.getElementById('roll_no2').value);
 
    $('<tr id='+item2+'><td><lable id='+item2+'roll2 class=jibi0072 >'+roll2+'</label></td><td><input type=text name="sec_edu_name[]" id='+item2+'name value=\''+name+'\' style="width:250px" readonly ></td><td><input type=hidden value='+item2+' id='+item2+'id><input type=text name="sec_edu_from[]" id='+item2+'from value=\''+from+'\' style="width:90px" readonly ></td><td><input type=text name="sec_edu_to[]"  id='+item2+'to value=\''+to+'\' style="width:90px" readonly ></td><td><input type=text name="sec_edu_qua[]"  id='+item2+'q value=\''+q+'\' style="width:90px"  readonly ></td><td><input type=text name="sec_edu_teledu[]"  id='+item2+'tel value=\''+tel+'\' style="width:150px"  readonly ></td><td><input type=text name="sec_edu_faxedu[]"  id='+item2+'fax value=\''+fax+'\' style="width:150px"  readonly ></td><td><input type=button id='+item2+' style="width:30px;border:none;height:30px;background:url(pics/close_new.png)" onclick=reduce_balance2("'+item2+'");$(this).closest("tr").remove(); ></td></tr>').fadeIn("slow").appendTo('#item_copy_final2');

   document.getElementById('roll_no2').value=roll2+1;
 
    item1 = item2 + 1;
	document.getElementById('row_id2').value= item1;
	
  document.getElementById('edufrom').value="";
  document.getElementById('eduto').value="";
  document.getElementById('qua').value="";
  document.getElementById('teledu').value="";
  document.getElementById('faxedu').value="";
  document.getElementById('nameedu').value="";
   
    }
	else  {  alert('Please Fill the Row'); }
}






function reduce_balance3(id){
   var elements = document.getElementsByClassName('jibi0073');
var j=1;
var my_id=id+'roll3';
for (var i = 0; i < elements.length; i++) {
    elements[0].value=1;
   if(parseFloat(document.getElementById(my_id).innerHTML)==i){
     elements[i].innerHTML =parseFloat(elements[i-1].innerHTML)
   }else{
       if(i!=0){
         elements[i].innerHTML =parseFloat(elements[i-1].innerHTML)+1;
        j++;
       }
   }
     document.getElementById('roll_no3').value=elements.length;
}}
function remove_row(o) {    var p=o.parentNode.parentNode;   p.parentNode.removeChild(p); }

function add_values3()
	 { 
  if(document.getElementById('name1').value && document.getElementById('position1').value && document.getElementById('address1').value && document.getElementById('report1').value && document.getElementById('empfrom').value && document.getElementById('tel1').value && document.getElementById('reason1').value && document.getElementById('empend').value && document.getElementById('fax1').value )
 {
	name	= document.getElementById('name1').value 
	pos		=  document.getElementById('position1').value 
	add		=  document.getElementById('address1').value 
	report	=  document.getElementById('report1').value 
	empfrom	=  document.getElementById('empfrom').value 
	tel		=  document.getElementById('tel1').value 
	reason	=  document.getElementById('reason1').value 
	end		=  document.getElementById('empend').value 
	fax		=  document.getElementById('fax1').value
	 
    item3=document.getElementById('row_id3').value;
    roll3=parseInt(document.getElementById('roll_no3').value);
 
    $('<tr id='+item3+'><td><lable id='+item3+'roll3 class=jibi0073 >'+roll3+'</label></td><td><table><tr><td>Name:</td><td>Position:</td><td>Month/Year:</td></tr><tr><td><input type=text name="emp_name1[]" id='+item3+'name value=\''+name+'\' style="width:315px" readonly ></td><td><input type=hidden value='+item3+' id='+item3+'id><input type=text name="emp_position1[]" id='+item3+'pos value=\''+pos+'\' style="width:300px" readonly ></td><td><input type=text style="width:150px" readonly ></td></tr><tr><td>Addresses:</td><td>Reporting to:</td><td>From:</td></tr><tr><td><input type=text name="emp_address1[]" id='+item3+'add value=\''+add+'\' style="width:315px" readonly ></td><td><input type=text name="emp_report1[]"  id='+item3+'report value=\''+report+'\' style="width:300px"  readonly ></td><td><input type=text name="emp_from1[]"  id='+item3+'empfrom value=\''+empfrom+'\' style="width:150px"  readonly ></td></tr><tr><td>Tel:</td><td>Reason for Leaving:</td><td>To:</td></tr><tr><td><input type=text name="emp_tel1[]"  id='+item3+'tel value=\''+tel+'\' style="width:315px"  readonly ></td><td><input type=text name="emp_reason1[]"  id='+item3+'reason value=\''+reason+'\' style="width:300px"  readonly ></td><td><input type=text name="emp_end1[]"  id='+item3+'end value=\''+end+'\' style="width:150px"  readonly ></td></tr><tr><td>Fax:</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td><input type=text name="emp_fax1[]"  id='+item3+'fax value=\''+fax+'\' style="width:315px"  readonly ></td></tr></table></td><td><input type=button id='+item3+' style="width:30px;border:none;height:30px;background:url(pics/close_new.png)" onclick=reduce_balance3("'+item3+'");$(this).closest("tr").remove(); ></td></tr>').fadeIn("slow").appendTo('#item_copy_final3');

   document.getElementById('roll_no3').value=roll3+1;
 
    item1 = item3 + 1;
	document.getElementById('row_id3').value= item1;
	
	document.getElementById('name1').value 			="";
	document.getElementById('position1').value 		="";
	document.getElementById('address1').value 		="";
	document.getElementById('report1').value 		="";
	document.getElementById('empfrom').value 		="";
	document.getElementById('tel1').value 			="";
	document.getElementById('reason1').value 		="";
	document.getElementById('empend').value 			="";
	document.getElementById('fax1').value			="";
   
    }
	else  {  alert('Please Fill the Row'); }
}






function reduce_balance4(id){
   var elements = document.getElementsByClassName('jibi0074');
var j=1;
var my_id=id+'roll4';
for (var i = 0; i < elements.length; i++) {
    elements[0].value=1;
   if(parseFloat(document.getElementById(my_id).innerHTML)==i){
     elements[i].innerHTML =parseFloat(elements[i-1].innerHTML)
   }else{
       if(i!=0){
         elements[i].innerHTML =parseFloat(elements[i-1].innerHTML)+1;
        j++;
       }
   }
     document.getElementById('roll_no4').value=elements.length;
}}


function add_values4()
	 { 
	 
  if(document.getElementById('refname1').value && document.getElementById('refadd1').value && document.getElementById('refcode1').value && document.getElementById('reftel1').value && document.getElementById('refocc1').value && document.getElementById('reflong1').value  )
 {
	refname= document.getElementById('refname1').value;
	refadd= document.getElementById('refadd1').value ;
	refcode= document.getElementById('refcode1').value ;
	reftel= document.getElementById('reftel1').value ;
	refocc= document.getElementById('refocc1').value ;
	reflong= document.getElementById('reflong1').value ;
	 
	 
    item4=document.getElementById('row_id4').value;
    roll4=parseInt(document.getElementById('roll_no4').value);
 
    $('<tr id='+item4+'><td><lable id='+item4+'roll4 class=jibi0074 >'+roll4+'</label></td><td><table><tr><td >Name :</td><td colspan=6><input type=text name="refname1[]" id='+item4+'name value=\''+refname+'\' style="width:700px" readonly ></td></tr><tr><td >Address</td><td colspan=6><input type=hidden value='+item4+' id='+item4+'id><input type=text name="refadd1[]" id='+item4+'refadd value=\''+refadd+'\' style="width:700px" readonly ></td></tr><tr><td>Post Code</td><td><input type=text name="refcode1[]" id='+item4+'refcode value=\''+refcode+'\' style="width:150px" readonly ></td><td>Tell No</td><td><input type=text name="reftel1[]" id='+item4+'tel value=\''+reftel+'\' style="width:150px" readonly ></td><td>Occupation</td><td><input type=text name="refocc1[]" id='+item4+'refocc value=\''+refocc+'\' style="width:255px" readonly ></td></tr><tr><td>RefLong:</td><td colspan=6><input type=text name="reflong1[]" id='+item4+'reflong value=\''+reflong+'\' style="width:700px" readonly ></td></tr></table></td><td><input type=button id='+item4+' style="width:30px;border:none;height:30px;background:url(pics/close_new.png)" onclick=reduce_balance3("'+item4+'");$(this).closest("tr").remove(); ></td></tr>').fadeIn("slow").appendTo('#item_copy_final4');

   document.getElementById('roll_no4').value=roll4+1;
 
    item1 = item4 + 1;
	document.getElementById('row_id4').value= item1;
	
	 document.getElementById('refname1').value="";
	 document.getElementById('refadd1').value ="";
	 document.getElementById('refcode1').value="" ;
	 document.getElementById('reftel1').value ="";
	 document.getElementById('refocc1').value="" ;
	 document.getElementById('reflong1').value ="";
   
    }
	else  {  alert('Please Fill the Row'); }
}
