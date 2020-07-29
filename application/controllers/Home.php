<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	public function index2()
	{
		$this->load->view('index');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function forget_pass()
	{
		$this->load->view('forget_pass');
	}
	public function add_customer()
	{
		$this->load->model('savedata');
		$data = $this->savedata->get_data();
		$this->load->view('add_customer',array('data'=>$data));
	}
	public function recipt()
	{
		$this->load->model('savedata');
		$data = $this->savedata->get_data();
		$this->load->view('recipt',array('data'=>$data));
	}
	public function recipt_genration()
	{
		$item_id=$_GET['item_id'];
		$this->load->model('savedata');
		$data1 = $this->savedata->get_data_loan($item_id);
		$this->load->view('recipt_genration',array('data1'=>$data1));
	}
	public function metal_cost()
	{
		$this->load->view('metal_cost');
	}
	public function calculator()
	{
		$this->load->view('calculator');
	}
	public function save_data()
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$data = array('email' => $email , 'pwd' => $pwd, 'username' => $username);
		$this->load->model('savedata');
		$this->savedata->register($data);
	}
	public function login()
	{
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];
		$this->load->model('savedata');
		$this->savedata->login($username,$pwd);	
	}
	public function save_customer()
	{
		$date = $_POST['date'];
		$city = $_POST['city'];
		$cust_name = $_POST['cust_name'];
		$cust_phone = $_POST['cust_phone'];
		$data = array('date' => $date , 'customer_city' => $city, 'customer_name' => $cust_name, 'customer_phone' => $cust_phone);
		$this->load->model('savedata');
		$this->savedata->save_customer($data);
	}
	public function delete_data()
	{

		$rowno = $_POST['rowno'];
		$this->load->model('savedata');
		$this->save_data->delete_data_by_rowno($rowno);
	}
	public function edit_data()
	{

		$rowno = $_POST['rowno'];
		$this->load->model('savedata');
		$this->savedata->edit_data_by_rowno($rowno);	
	}
	public function edit_item()
	{
		$cust_id = $_POST['cust_id'];
		$this->load->model('savedata');
		$this->savedata->edit_item1($cust_id);
	}
	public function update_customer()
	{
		$rowno = $_POST['rowno'];
		$date = $_POST['date'];
		$city = $_POST['city'];
		$cust_name = $_POST['cust_name'];
		$cust_phone = $_POST['cust_phone'];

		$data = array('date' => $date , 'customer_city' => $city, 'customer_name' => $cust_name, 'customer_phone' => $cust_phone);
		$this->load->model('savedata');
		$this->savedata->update_customer($rowno,$data);
	}
	public function save_item()
	{
		$acc_no = $_POST['acc_no'];
		$items = $_POST['items'];
		$item_type = $_POST['item_type'];
		$net_weight = $_POST['net_weight'];
		$f_weight = $_POST['f_weight'];
		$pr_tn = $_POST['pr_tn'];
		$custname = $_POST['custname'];
		$custphone = $_POST['custphone'];
		$data = array('customer_id' => $acc_no , 'customer_name' => $custname, 'customer_phone' => $custphone, 'item_name' => $items, 'item_type' => $item_type , 'net_weight' => $net_weight, 'pr_tn' => $pr_tn, 'fine_weight' => $f_weight);
		$this->load->model('savedata');
		$this->savedata->save_item($data);
	}
	public function editrow_item()
	{
		$item_id = $_POST['item_id'];
		$this->load->model('savedata');
		$this->savedata->editrow_item($item_id);
	}
	public function editrow_loan()
	{
		$loan_id = $_POST['loan_id'];
		$this->load->model('savedata');
		$this->savedata->editrow_loan($loan_id);
	}
	public function deleterow_item()
	{

		$item_id = $_POST['item_id'];
		$this->load->model('savedata');
		$this->save_data->deleterow_item($item_id);
	}
	public function update_item()
	{
		$acc_no = $_POST['acc_no'];
		$items = $_POST['items'];
		$item_type = $_POST['item_type'];
		$net_weight = $_POST['net_weight'];
		$f_weight = $_POST['f_weight'];
		$pr_tn = $_POST['pr_tn'];
		$custname = $_POST['custname'];
		$custphone = $_POST['custphone'];

		$data = array('customer_id' => $acc_no , 'customer_name' => $custname, 'customer_phone' => $custphone, 'item_name' => $items, 'item_type' => $item_type , 'net_weight' => $net_weight, 'pr_tn' => $pr_tn, 'fine_weight' => $f_weight);
		$this->load->model('savedata');
		$this->savedata->update_item($acc_no,$data);
	}	
	public function apply_loan()
	{
		$cust_id = $_POST['cust_id'];
		$acc_no = $_POST['acc_no'];
		$loan_amt = $_POST['loan_amt'];
		$int_rate = $_POST['int_rate'];
		$interval = $_POST['interval'];
		$today = $_POST['today'];
		$description = $_POST['description'];

		$data = array('acc_no' => $acc_no , 'customer_id' => $cust_id,'tran_date' => $today, 'loan_amt' => $loan_amt, 'Interest_rate' => $int_rate, 'day_interval' => $interval , 'description' => $description, 'status' => "Active");
		$this->load->model('savedata');
		$this->savedata->apply_loan($data);
	}
	public function edit_loan()
	{
		$acc_no = $_POST['acc_no'];
		$this->load->model('savedata');
		$this->savedata->edit_loan($acc_no);
	}	
	public function submit_cost()
	{
		$today = $_POST['today'];
		$metal_name = $_POST['metal_name'];
		$metal_cost = $_POST['metal_cost'];
		$data = array('curr_date' => $today , 'metal_type' => $metal_name, 'metal_cost' => $metal_cost);
		$this->load->model('savedata');
		$this->savedata->submit_cost($data);
	}
	public function get_metal_cost()
	{
		$this->load->model('savedata');
		$this->savedata->get_metal_cost();
	}
	public function genrate_pdf()
	{ 
		$custid = $_POST['custid'];
		$this->load->model('savedata');
		$data_cust=$this->savedata->get_csust_details($custid);

		$this->load->model('savedata');
		$data_loan=$this->savedata->get_csusta_loan_details($custid);

		$this->load->model('savedata');
		$data=$this->savedata->leager($custid);

		$html= $this->load->view('leadger.php',array('data'=>$data,'data_cust'=>$data_cust,'data_loan'=>$data_loan),true);
		
		require_once 'mpdf/mpdf.php';
		$mpdf = new mPDF();
		$mpdf = new mPDF('','A4');
		$time = microtime();
		$mpdf->WriteHTML($html);
		$path = 'C:\xampp\htdocs\loan_soft\pdf\\';
		$filename= 'Details'.$custid.'.pdf';
		$mpdf->Output($path.$filename,'F');
		return;
	}
}
