"<html>
  <head>
  	  <style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
	</style>
  </head>
  <body>
   <div class="container">
      	<div class="content-header">
	        <div class="row">
				<div class="col-md-12">
	        		<h1 style="text-align: center">Customer Details</h1>
				</div>
				<?php foreach ($data_cust as $key => $value) {  ?>
				<div class="col-md-2">
					<span>Customer Id</span><samp> :</samp><span> <?php echo $value['customer_id'];?></span>
					<br>
					<span>Customer Name</span><samp> :</samp><span> <?php echo $value['customer_name'];?></span>
					<br>
					<span>Customer Phone</span><samp> :</samp><span> <?php echo $value['customer_phone'];?></span>
					<br>
					<span>Customer City</span><samp> :</samp><span> <?php echo $value['customer_city'];?></span>
					<br>
					<span>Customer Vising date</span><samp> :</samp><span> <?php echo $value['date'];?></span>
				</div>
				<?php } ?>
			</div>
      	</div>
      	<h2>Item Details</h2>
        <table id="table">
              <thead>
              	<tr>
              		<th>Item ID</th>
	                <th>Item Name</th>
	                <th>Item Type</th>
	                <th>Net Weight</th>
	                <th>PR/TN</th>
	                <th>Fine Weight</th>
	             </tr>
            </thead>
            <?php foreach ($data as $key => $value) {  ?>
            <tbody>
             <tr>
             	<td><?php echo $value['acc_no'];?></td>
                <td><?php echo $value['item_name'];?></td>
                <td><?php echo $value['item_type'];?></td>
	            <td><?php echo $value['net_weight'];?></td>               
                <td><?php echo $value['pr_tn'];?></td>
                <td><?php echo $value['fine_weight'];?></td>
            </tr>
	        </tbody>
	    	<?php } ?>
	    </table>
	    <h2>Loan Details</h2>
        <table id="table">
              <thead>
              	<tr>
              		<th>Item ID</th>
	                <th>Transaction Date</th>
	                <th>Loan amount</th>
	                <th>Interest</th>
	                <th>Day Interval</th>
	                <th>Status</th>
	             </tr>
            </thead>
            <?php foreach ($data_loan as $key => $value) {  ?>
            <tbody>
             <tr>
             	<td><?php echo $value['acc_no'];?></td>
                <td><?php echo $value['tran_date'];?></td>
                <td><?php echo $value['loan_amt'];?></td>
	            <td><?php echo $value['Interest_rate'];?></td>               
                <td><?php echo $value['day_interval'];?></td>
                <td><?php echo $value['status'];?></td>
            </tr>
	        </tbody>
	    	<?php } ?>
	    </table>
	 </div>
	</body>
</html>"
