function Toggle() 
{ 
	var temp = document.getElementById("pwd"); 
	if (temp.type === "password") { 
	    temp.type = "text"; 
	} 
	else { 
	    temp.type = "password"; 
	} 
}
function register() 
{
	var username = $("#username").val();
	var email = $("#email").val();
	var pwd = $("#pwd").val();
	if (username=='') 
	{
		Swal.fire('Please enter Username');
	}else if(email == '')
	{
		Swal.fire('Please enter email');
	}else if(pwd == '')
	{
		Swal.fire('Please enter password');
	}else{
			$.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/save_data",
		      data: { username : username,email : email,pwd : pwd},
		      dataType: "text",
		      success: function(resultData) 
		      { 
		      	
				Swal.fire({
					  title: 'Registered successfully',
					  text: "Registered successfully Kindly Login",
					  icon: 'success',
					  confirmButtonText: 'Login'
					}).then((result) => {
					  if (result.value) {
					    window.location.href = "http://localhost/loan_soft/Home/index";
					  }
					})
		      }
		});
	}		
}
function login() 
{
	var username = $("#username").val();
	var pwd = $("#pwd").val();

	if(username=='')
	{
		Swal.fire('Please enter Username');
	}else if (pwd == '') 
	{
		Swal.fire('Please enter password');
	}else
	{
			$.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/login",
		      data: {username : username,pwd : pwd},
		      dataType: "json",
		      success: function(resultData) 
		      { 
		      	
		      	if (resultData!=null) 
		      	{
		      		Swal.fire({
					  title: 'Logined successfully',
					  text: "Registered food successfully Kindly Login",
					  icon: 'success',
					  confirmButtonText: 'Ok'
					}).then((result) => {
					  if (result.value) {
					    window.location.href = "http://localhost/loan_soft/Home/index2?username="+resultData[i].username+"&email="+resultData[i].email+"";
					  }
					})
		      	}else
		      	{
		      		Swal.fire({
						  title: 'Invalid Credintials',
						  text: "Invalid Username or password entered!",
						  icon: 'warning',
						  showCancelButton: true,
						  confirmButtonColor: '#3085d6',
						  cancelButtonColor: '#d33',
						  confirmButtonText: 'Do You want to retry?'
						}).then((result) => {
						  if (result.value) {
						  	 username = $("#username").val('');
							 pwd = $("#pwd").val('');
						  }
						})
		      	}
		      	
		      	
		      }
		});
	}	
}
function today_date()
{
	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
	var yyyy = today.getFullYear();

	today = dd + '/' + mm + '/' + yyyy;
	$("#today").val(today);
	$("#today2").val(today);
}
var date_diff = 0;
function total_days()
{
	date1 = $("#today").val();
	date2 = $("#today2").val();
	// if(date1<date2)
	// {
	// 	Swal.fire({
	// 	  icon: 'error',
	// 	  title: 'Oops...',
	// 	  text: 'Invalid Date Entered!',
	// 	})
	// 	return;
	// }
	var newDate = date1.split('/'); 	
	start_date = newDate[1] + "/" + newDate[0] + "/" + newDate[2];
	var newDate = date2.split('/'); 	
	end_date = newDate[1] + "/" + newDate[0] + "/" + newDate[2];
	var dateFirst = new Date(start_date);
 	var dateSecond = new Date(end_date);
 	var timeDiff = Math.abs(dateSecond.getTime() - dateFirst.getTime());
 	var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
 	date_diff = diffDays;
 	if(diffDays==31)
 	{
 		date_diff = 31;
 		$("#total_days").val(date_diff);
 	}else if(diffDays<=30){
 		date_diff = 30;
 		$("#total_days").val(date_diff);
 	}else{
 		$("#total_days").val(date_diff);
 	}
}
function result()
{
	var amt = parseInt($("#amount").val());
	var int = parseInt($("#interest").val());
	if(date_diff>365)
	{

	}else if(date_diff==30){
		var famt = (amt * int)/100;
		famt=Math.round(famt);
		$("#final_amount").val(famt);
		var tamt = amt + famt;
		tamt=Math.round(tamt);
		$("#total_amount").val(tamt);
	}else{
		var famt = (amt * int)/100;
		var single = famt/30;
		famt = (single*date_diff);
		famt=Math.round(famt);
		$("#final_amount").val(famt);
		var tamt = amt + famt;
		tamt=Math.round(tamt);
		$("#total_amount").val(tamt);
	}
}
function reset()
{
	$("#metal_name").empty();
	$("#metal_cost").val('');
	$("#city").val('');
	$("#customer_name").val('');
	$("#customer_phone").val('');	
}
function reset2()
{
	$("#acc_no").val('');
	$("#items").val('');
	$("#item_type").val('');
	$("#net_weight").val('');
	$("#pr_tn").val('');
	$("#f_weight").val('');
}
function reset3()
{
	$("#tran_no").val('');
	$("#loan_amt").val('');
	$("#int_rate").val('');
	$("#interval").val('');
	$("#description").val('');
}
var rowno,custname, custphone;
var trn_no;
function save_customer()
{
	var date = $("#today").val();
	var city= $("#city").val();
	var cust_name=$("#customer_name").val();
	var cust_phone=$("#customer_phone").val();

	if (date=='') 
	{
		Swal.fire('Please enter date');
	}else if(city == '')
	{
		Swal.fire('Please enter city');
	}else if(cust_name == '')
	{
		Swal.fire('Please enter Customer name');
	}else if(cust_phone == '')
	{
		Swal.fire('Please enter Customer phone');
	}else{
			$.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/save_customer",
		      data: {date : date,city : city,cust_name : cust_name, cust_phone : cust_phone},
		      dataType: "text",
		      success: function(resultData) 
		      { 
				// Swal.fire({
				// 	  title: 'Customer Added Successfully',
				// 	  text: "Kindly give Item And Loan Details",
				// 	  icon: 'success',
				// 	  confirmButtonText: 'Ok'
				// 	})
				location.reload();
		      }
		});
	}
}
function onget()
{
	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0');
	var yyyy = today.getFullYear();

	today = dd + '/' + mm + '/' + yyyy;
	$("#today").val(today);
	$("#today2").val(today);
}
function deleterow(rowno)
{
	Swal.fire({
	  title: 'Are You Sure',
	  text: "This Delete will not undo your entry",
	  icon: 'danger',
	  confirmButtonText: 'Ok'
	}).then((result) => {
	  if (result.value) {
	    $.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/delete_data",
		      data: {rowno : rowno},
		      dataType: "text",
		      success: function(resultData) 
		      { 
		      	alert("Field delete Successfully");
		      	location.reload();

		      }
		});
	  }
	})
}
var cust_id=0;
function editrow(rowno)
{
	tran_no=rowno;
	cust_id=rowno;
	 $.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/edit_data",
		      data: {rowno : rowno},
		      dataType: "json",
		      success: function(resultDat) 
		      { 
    	
		      	if (resultDat!=null) 
		      	{
		      		$("#today").val(resultDat.date);
		      		$("#city").val(resultDat.customer_city);
		      		$("#customer_name").val(resultDat.customer_name);
		      		$("#customer_phone").val(resultDat.customer_phone);
		      		$("#acc_no").val(rowno);
		      		custname = resultDat.customer_name;
		      		custphone = resultDat.customer_phone;
		      		
		      	}else
		      	{
		      		alert("Something Went Wrong");
		      	}
		      	
		      	
		      }
		});
	 $.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/edit_item",
		      data: {cust_id : cust_id},
		      dataType: "json",
		      success: function(resultData) 
		      { 	      	
		      	if (resultData!=null) 
		      	{
		      		$("#tbody").empty();
		      		var i;
		      		for (i = 0; i < resultData.length; i++) 
		      		{
					  $("#tbody").append('<tr><td>'+resultData[i].item_name+'</td><td>'+resultData[i].item_type+'</td><td>'+resultData[i].net_weight+'</td><td>'+resultData[i].pr_tn+'</td><td>'+resultData[i].fine_weight+'</td><td><button class="btn btn-warning" style="background-color: black; margin-right:5px;"  onclick="editrow_item('+resultData[i].acc_no+');">Edit</button><button class="btn btn-danger"  onclick="deleterow_item('+resultData[i].acc_no+');">Delete</button></td></tr>');
					}

		      	}else
		      	{
		      		alert("Something Went Wrong");
		      	}
		      	
		      	
		      }
		});
}
function update()
{
	var date = $("#today").val();
	var city= $("#city").val();
	var cust_name=$("#customer_name").val();
	var cust_phone=$("#customer_phone").val();

	if (date=='') 
	{
		Swal.fire('Please enter date');
	}else if(city == '')
	{
		Swal.fire('Please enter city');
	}else if(cust_name == '')
	{
		Swal.fire('Please enter Customer name');
	}else if(cust_phone == '')
	{
		Swal.fire('Please enter Customer phone');
	}else{
			$.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/update_customer",
		      data: {rowno : rowno,date : date,city : city,cust_name : cust_name, cust_phone : cust_phone },
		      dataType: "text",
		      success: function(resultData) 
		      { 
		      	alert();
				// Swal.fire({
				// 	  title: 'Customer Updated Successfully',
				// 	  text: "Kindly Update Item And Loan Details",
				// 	  icon: 'success',
				// 	  confirmButtonText: 'Ok'
				// 	})
		      }
		});
	}
}
function calculatetn() 
{
	var net_weight=$("#net_weight").val();
	var pr_tn= $("#pr_tn").val();
	f_weight = net_weight * (pr_tn/100);
	f_weight=Math.round(f_weight);
	$("#f_weight").val(f_weight);
}
var acc_no;
var static;
function save_itme() 
{
	var acc_no = $("#acc_no").val();
	var items= $("#items").val();
	var item_type=$("#item_type").val();
	var net_weight=$("#net_weight").val();
	var pr_tn= $("#pr_tn").val();
	var f_weight=$("#f_weight").val();

	if (acc_no=='') 
	{
		Swal.fire('Please Select the customer');
	}else if(items == '')
	{
		Swal.fire('Please enter items');
	}else if(item_type == '')
	{
		Swal.fire('Please enter Item Type');
	}else if(net_weight == '')
	{
		Swal.fire('Please enter net weight');
	}else if(f_weight == '')
	{
		Swal.fire('Please enter Fine weight');
	}else if(pr_tn == '')
	{
		Swal.fire('Please enter pr_tn');
	}else if(custname == '')
	{
		Swal.fire('Please enter Customer name');
	}else if(custphone == '')
	{
		Swal.fire('Please enter Customer phone');
	}else{
			$.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/save_item",
		      data: {acc_no : acc_no,items : items,item_type : item_type,net_weight : net_weight, f_weight : f_weight, pr_tn : pr_tn,custname : custname, custphone : custphone},
		      dataType: "text",
		      success: function(resultData) 
		      { 
		      	alert("Items saved Successfully");
				$.ajax({
				      type: 'POST',
				      url: "http://localhost/loan_soft/Home/edit_item",
				      data: {cust_id : cust_id},
				      dataType: "json",
				      success: function(resultData) 
				      { 	      	
				      	if (resultData!=null) 
				      	{
				      		$("#tbody").empty();
				      		var i;
				      		for (i = 0; i < resultData.length; i++) 
				      		{
							  $("#tbody").append('<tr><td>'+resultData[i].item_name+'</td><td>'+resultData[i].item_type+'</td><td>'+resultData[i].net_weight+'</td><td>'+resultData[i].pr_tn+'</td><td>'+resultData[i].fine_weight+'</td><td><button class="btn btn-warning" style="background-color: black; margin-right:5px;"  onclick="editrow_item('+resultData[i].acc_no+');">Edit</button><button class="btn btn-danger"  onclick="deleterow_item('+resultData[i].acc_no+');">Delete</button></td></tr>');
							  static=resultData[i].acc_no;
							}
				      	}else
				      	{
				      		alert("Something Went Wrong");
				      	} 	
				      	
				      }
				});

		      }
		});
	}
}
var item_id, coust_id;
function editrow_item(item_id)
{
	acc_no=item_id;
	static=acc_no;
	 $.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/editrow_item",
		      data: {item_id : item_id},
		      dataType: "json",
		      success: function(resultData) 
		      { 
		      	if (resultData!=null) 
		      	{
		      		$("#loan_table").empty();
		      		cust_id=tran_no;
		      		$("#tran_no").val(''+tran_no+'/'+item_id+'');
					$("#items").val(resultData.item_name);
					$("#item_type").val(resultData.item_type);
					$("#net_weight").val(resultData.net_weight);
					$("#pr_tn").val(resultData.pr_tn);
					$("#f_weight").val(resultData.fine_weight);
		      	}else
		      	{
		      		alert("Something Went Wrong");
		      	}
		      }
		});

	 $.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/edit_loan",
		      data: {acc_no : acc_no},
		      dataType: "json",
		      success: function(resultData) 
		      { 	      	
		      	if (resultData!=null) 
		      	{
		      		$("#loan_table").empty();
		      		var i;
		      		for (i = 0; i <= resultData.length; i++) 
		      		{
					  $("#loan_table").append('<tr><td>'+resultData[i].loan_amt+'</td><td>'+resultData[i].Interest_rate+'</td><td>'+resultData[i].day_interval+'</td><td>'+resultData[i].description+'</td><td>'+resultData[i].status+'</td><td><button class="btn btn-warning" style="background-color: black; margin-right:5px;"  onclick="editrow_loan('+resultData[i].loan_id+');">Edit</button><button class="btn btn-danger"  onclick="deleterow_loan('+resultData[i].loan_id+');">Delete</button></td></tr>');
					}
		      			  		
		      	}else
		      	{
		      		alert("Something Went Wrong");
		      	}
		      	
		      	
		      }
		});
}
function deleterow_item(item_id)
{
	Swal.fire({
	  title: 'Are You Sure',
	  text: "This Delete will not undo your entry",
	  icon: 'danger',
	  confirmButtonText: 'Ok'
	}).then((result) => {
	  if (result.value) {
	    $.ajax({
		    type: 'POST',
		    url: "http://localhost/loan_soft/Home/deleterow_item",
		    data: {item_id : item_id},
		    dataType: "text",
		    success: function(resultData) 
		    { 
		      	$.ajax({
		      	type: 'POST',
		      	url: "http://localhost/loan_soft/Home/edit_item",
		      	data: {rowno : rowno},
		     	dataType: "json",
			      	success: function(resultData) 
			      	{ 	      	
			      		if (resultData!=null) 
			      		{
			      			$("#tbody").empty();
			      			var i;
			      			for (i = 0; i < resultData.length; i++) 
			      			{
						  	$("#tbody").append('<tr><td><input type="checkbox" id="'+resultData[i].acc_no+'"></input></td><td>'+resultData[i].item_name+'</td><td>'+resultData[i].item_type+'</td><td>'+resultData[i].net_weight+'</td><td>'+resultData[i].pr_tn+'</td><td>'+resultData[i].fine_weight+'</td><td><button class="btn btn-warning" style="background-color: black; margin-right:5px;"  onclick="editrow_item('+resultData[i].acc_no+');">Edit</button><button class="btn btn-danger"  onclick="deleterow_item('+resultData[i].acc_no+');">Delete</button></td></tr>');
							}
			      			  		
			      		}else
			      		{
			      			alert("Something Went Wrong");
			      		}
			      	}
				});
		    }
		});
	  }
	})
}
function update_item()
{
	
	var item_type=$("#item_type").val();
	var net_weight=$("#net_weight").val();
	var pr_tn= $("#pr_tn").val();
	var f_weight=$("#f_weight").val();

	if (acc_no=='') 
	{
		Swal.fire('Please Select the customer');
	}else if(items == '')
	{
		Swal.fire('Please enter items');
	}else if(item_type == '')
	{
		Swal.fire('Please enter Item Type');
	}else if(net_weight == '')
	{
		Swal.fire('Please enter net weight');
	}else if(f_weight == '')
	{
		Swal.fire('Please enter Fine weight');
	}else if(pr_tn == '')
	{
		Swal.fire('Please enter pr_tn');
	}else if(custname == '')
	{
		Swal.fire('Please enter Customer name');
	}else if(custphone == '')
	{
		Swal.fire('Please enter Customer phone');
	}else{
			$.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/update_item",
		      data: {acc_no : acc_no,items : items,item_type : item_type,net_weight : net_weight, f_weight : f_weight, pr_tn : pr_tn,custname : custname, custphone : custphone},
		      dataType: "text",
		      success: function(resultData) 
		      { 
		      	alert("Items Updated Successfully");
				$.ajax({
				      type: 'POST',
				      url: "http://localhost/loan_soft/Home/edit_item",
				      data: {rowno : rowno},
				      dataType: "json",
				      success: function(resultData) 
				      { 	      	
				      	if (resultData!=null) 
				      	{
				      		$("#tbody").empty();
				      		var i;
				      		for (i = 0; i < resultData.length; i++) 
				      		{
							  $("#tbody").append('<tr><td><input type="checkbox" id="'+resultData[i].acc_no+'"></input></td><td>'+resultData[i].item_name+'</td><td>'+resultData[i].item_type+'</td><td>'+resultData[i].net_weight+'</td><td>'+resultData[i].pr_tn+'</td><td>'+resultData[i].fine_weight+'</td><td><button class="btn btn-warning" style="background-color: black; margin-right:5px;"  onclick="editrow_item('+resultData[i].acc_no+');">Edit</button><button class="btn btn-danger"  onclick="deleterow_item('+resultData[i].acc_no+');">Delete</button></td></tr>');
							}
				      	}else
				      	{
				      		alert("Something Went Wrong");
				      	} 	
				      	
				      }
				});

		      }
		});
	}
}
function apply_loan()
{
	acc_no=static;
	var loan_amt= $("#loan_amt").val();
	var int_rate=$("#int_rate").val();
	var interval=$("#interval").val();
	var description= $("#description").val();

	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0'); 
	var yyyy = today.getFullYear();
	var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

	today = dd + '/' + mm + '/' + yyyy + ' ' + time;

	if (cust_id=='') 
	{
		Swal.fire('Please Select the customer');
	}else if(acc_no == '')
	{
		Swal.fire('Please Select the items');
	}else if(loan_amt == '')
	{
		Swal.fire('Please enter loan amount');
	}else if(int_rate == '')
	{
		Swal.fire('Please enter interest rate');
	}else if(interval == '')
	{
		Swal.fire('Please enter days interval');
	}else if(description == '')
	{
		Swal.fire('Please enter description');
	}else{
			$.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/apply_loan",
		      data: {cust_id : cust_id,acc_no : acc_no,today : today,loan_amt : loan_amt,int_rate : int_rate, interval : interval, description : description},
		      dataType: "text",
		      success: function(resultData) 
		      { 
		      	alert("Loan applied Successfully");
				$.ajax({
			      type: 'POST',
			      url: "http://localhost/loan_soft/Home/edit_loan",
			      data: {acc_no : acc_no},
			      dataType: "json",
			      success: function(resultData) 
			      { 	      	
			      	if (resultData!=null) 
			      	{
			      		$("#loan_table").empty();
			      		var i;
			      		for (i = 0; i < resultData.length; i++) 
			      		{
						  $("#loan_table").append('<tr><td><input type="checkbox" id="'+resultData[i].loan_id+'"></input></td><td>'+resultData[i].loan_amt+'</td><td>'+resultData[i].Interest_rate+'</td><td>'+resultData[i].day_interval+'</td><td>'+resultData[i].description+'</td><td>'+resultData[i].status+'</td><td><button class="btn btn-warning" style="background-color: black; margin-right:5px;"  onclick="editrow_loan('+resultData[i].loan_id+');">Edit</button><button class="btn btn-danger"  onclick="deleterow_laon('+resultData[i].loan_id+');">Delete</button></td></tr>');
						}
			      			  		
			      	}else
			      	{
			      		alert("Something Went Wrong");
			      	}
			      	
			      	
			      }
			});

		      }
		});
	}
}
function submit_cost()
{
	var today = $("#today").val();
	var metal_name = $("#metal_name").val();
	var metal_cost = $("#metal_cost").val();
	if (today=='') 
	{
		Swal.fire('Please enter Today Date');
	}else if(metal_name == '')
	{
		Swal.fire('Please enter Metal Type');
	}else if(metal_cost == '')
	{
		Swal.fire('Please enter Metal Cost');
	}else{
			$.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/submit_cost",
		      data: {today : today,metal_name : metal_name,metal_cost : metal_cost},
		      dataType: "text",
		      success: function(resultData) 
		      { 
		      	
				Swal.fire({
					  title: 'Saved',
					  text: "Metal Cost  Saved successfully",
					  icon: 'success',
					  confirmButtonText: 'Done'
					})
		      }
		});
	}		
}
var loan_id;
function editrow_loan(loan_id) 
{
	$.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/editrow_loan",
		      data: {loan_id : loan_id},
		      dataType: "json",
		      success: function(resultData) 
		      { 
		      	if (resultData!=null) 
		      	{
					$("#tran_no").val(""+resultData.customer_id+"/"+resultData.acc_no+"");
					$("#loan_amt").val(resultData.loan_amt);
					$("#int_rate").val(resultData.Interest_rate);
					$("#interval").val(resultData.day_interval);
					$("#description").val(resultData.description);
		      	}else
		      	{
		      		alert("Something Went Wrong");
		      	}
		      }
		});	
}
var cust,custid;
var custname,custphone;
function select(cust)
{

	rowno=cust;
	tran_no=rowno;
	cust_id=rowno;
	 $.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/edit_data",
		      data: {rowno : rowno},
		      dataType: "json",
		      success: function(resultDat) 
		      { 
    	
		      	if (resultDat!=null) 
		      	{
		      		$("#today").val(resultDat.date);
		      		$("#city").val(resultDat.customer_city);
		      		$("#customer_name").val(resultDat.customer_name);
		      		$("#customer_phone").val(resultDat.customer_phone);
		      		$("#acc_no").val(rowno);
		      		custname = resultDat.customer_name;
		      		custphone = resultDat.customer_phone;
		      		custid =  resultDat.customer_id;
		      		
		      	}else
		      	{
		      		alert("Something Went Wrong");
		      	}
		      	
		      	
		      }
		});
	 var goldcost,silvercost;
	 $.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/get_metal_cost",
		      dataType: "json",
		      success: function(resultData) 
		      { 
				if (resultData!=null) 
		      	{
		      		var i;
		      		for (i = 0; i <= resultData.length; i++) 
		      		{
					  if(resultData[i].metal_type=='Gold'||resultData[i].metal_type=='gold')
					  {
					  	goldcost=resultData[i].metal_cost;
					  }else if(resultData[i].metal_type=='Silver'||resultData[i].metal_type=='silver')
					  {
					  	silvercost=resultData[i].metal_cost;
					  }
					}
		      	}else
		      	{
		      		alert("Something Went Wrong");
		      	}
		     }
		});
	 $.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/edit_item",
		      data: {cust_id : cust_id},
		      dataType: "json",
		      success: function(resultData) 
		      { 	      	
		      	if (resultData!=null) 
		      	{
		      		$("#tbody").empty();
		      		var i;
		      		for (i = 0; i <= resultData.length; i++) 
		      		{
		      			if(resultData[i].item_type=='Gold'||resultData[i].item_type=='gold')
		      			{
		      				valuation = goldcost;
		      			}else if(resultData[i].item_type=='Silver'||resultData[i].item_type=='silver')
		      			{
		      				valuation = silvercost;
		      			}else{
		      				valuation='nill';
		      			}
		      			$("#tbody").append('<tr><td>'+resultData[i].item_name+'</td><td>'+resultData[i].item_type+'</td><td>'+resultData[i].net_weight+'</td><td>'+resultData[i].pr_tn+'</td><td>'+resultData[i].fine_weight+'</td><td>'+valuation+'</td><td><button class="btn btn-warning" style="background-color:blue; margin-right:5px;"  onclick="select_loan('+resultData[i].acc_no+');">Selct Loan</button></td></tr>');
					}

		      	}else
		      	{
		      		alert("Something Went Wrong");
		      	}
		      	
		      	
		      }
		});
}
var item;
function select_loan(item)
{
	window.location.replace("http://localhost/loan_soft/Home/recipt_genration?item_id="+item+"&cname="+custname+"&custid="+custid+"&cphone="+custphone+"");
}
function recipt() 
{
	window.location.replace("http://localhost/loan_soft//Home/recipt");
}
function recipt_genration()
{
	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0');
	var yyyy = today.getFullYear();

	today = dd + '/' + mm + '/' + yyyy;
	$("#today").val(today);
	$("#today2").val(today);
}
var loan_id, item_id, constant;
function select_loanid(loan_id) 
{
	item_id=$("#item_id").val();
	$.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/editrow_item",
		      data: {item_id : item_id},
		      dataType: "json",
		      success: function(resultData) 
		      { 
		      	if (resultData!=null) 
		      	{
		      		item_name=resultData.item_name;
		      		$("#secur").val(item_name);
		      		$("#weight").val(resultData.fine_weight);
		      		
		      	}else
		      	{
		      		alert("Something Went Wrong");
		      	}
		      }
		});
	$.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/editrow_loan",
		      data: {loan_id : loan_id},
		      dataType: "json",
		      success: function(resultData) 
		      { 
		      	if (resultData!=null) 
		      	{
		      		str=resultData.tran_date;
					var res = str.split(" ",1);
					date_diff = calculate_date_diff(resultData.tran_date,resultData.day_interval,resultData.loan_amt);
					$("#date_diff").val(date_diff);
					$("#day").val(date_diff);
					$("#opntoday").val(res);
					$("#day_intv").val(resultData.day_interval);
					$("#amt").val(resultData.loan_amt);
					$("#detail").val(resultData.description);
		      	}else
		      	{
		      		alert("Something Went Wrong");
		      	}
		      }
		});	
}
var stat,amount;
function calculate_date_diff(constant,interval,loan_amt) 
{
	
	date1 = constant;
	stat=interval;
	amount=loan_amt;
	date2 = $("#today2").val();
	var newDate = date1.split("/"); 
	start_date = newDate[1] + "/" + newDate[0] + "/" + newDate[2];
	var newDate = date2.split('/'); 	
	end_date = newDate[1] + "/" + newDate[0] + "/" + newDate[2];
	var dateFirst = new Date(start_date);
	var dateSecond = new Date(end_date);
	var timeDiff = Math.abs(dateSecond.getTime() - dateFirst.getTime());
	var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
	if(diffDays==31)
 	{
 		diffDays = 31;
 	}else if(diffDays<=30){
 		diffDays = 30;
 	}
	$("#date_diff").val(diffDays);
	$("#day").val(diffDays);

	var year = diffDays/365;
	year = Math.floor(year);
	var interval = diffDays/stat;
	interval = Math.ceil(interval);
	$("#intv").val(interval);
	$("#year").val(year);
	int=1.5;
	amt=parseInt(amount);
	if(diffDays>365)
	{

	}else if(diffDays==30){
		var famt = (amt * int)/100;
		famt=Math.round(famt);
		$("#int_amt").val(famt);
		var tamt = amt + famt;
		tamt=Math.round(tamt);
		$("#total_due").val(tamt);
	}else{
		var famt = (amt * int)/100;
		var single = famt/30;
		famt = (single*date_diff);
		famt=Math.round(famt);
		$("#int_amt").val(famt);
		var tamt = amt + famt;
		tamt=Math.round(tamt);
		$("#total_due").val(tamt);
	}
	return diffDays;
}
function calculate_date() 
{
	date1 = $("#opntoday").val();
	date2 = $("#today2").val();
	var newDate = date1.split("/"); 
	start_date = newDate[1] + "/" + newDate[0] + "/" + newDate[2];
	var newDate = date2.split('/'); 	
	end_date = newDate[1] + "/" + newDate[0] + "/" + newDate[2];
	var dateFirst = new Date(start_date);
	var dateSecond = new Date(end_date);
	var timeDiff = Math.abs(dateSecond.getTime() - dateFirst.getTime());
	var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 

	if(diffDays==31)
 	{
 		diffDays = 31;
 	}else if(diffDays<=30){
 		diffDays = 30;
 	}
	$("#date_diff").val(diffDays);
	$("#day").val(diffDays);

	var year = diffDays/365;
	year = Math.floor(year);
	var interval = diffDays/stat;
	interval = Math.ceil(interval);	
	$("#intv").val(interval);
	$("#year").val(year);
	
	int=parseInt($("#rte").val());
	amt=parseInt($("#amt").val());
	var day_intv=parseInt($("#day_intv").val());
	if(diffDays>365)
	{

	}else if(diffDays==30){
		var famt = (amt * int)/100;
		famt=Math.round(famt);
		var tamt = amt + famt;
		tamt=Math.round(tamt);
	}else{
		var famt = (amt * int)/100;
		var single = famt/day_intv;
		famt = (single*diffDays);
		famt=Math.round(famt);
		var tamt = amt + famt;
		tamt=Math.round(tamt);		
	}
	alert(int_amt);
		$("#int_amt").val(famt);
		$("#total_due").val(tamt);
}
var custid;
function genrate(custid)
{
	$.ajax({
		      type: 'POST',
		      url: "http://localhost/loan_soft/Home/genrate_pdf",
		      data: {custid : custid},
		      dataType: "text",
		      success: function(resultData) 
		      { 
		      	if (resultData!=null) 
		      	{
		      		alert("PDF Genrated Successfully");
		      	}else
		      	{
		      		alert("Something Went Wrong");
		      	}
		      }
		});
}