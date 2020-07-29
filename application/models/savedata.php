<?php
	class savedata extends CI_Model {

        public function register($data)
        {

               $respones = $this->db->insert('register', $data);
               return $respones;
        }
        public function login($username,$pwd)
        {
            $wherearray = array('username' => $username, 'pwd' => $pwd);
            $this->db->select('*');    
            // $this->db->from('register');
            $this->db->where($wherearray);
            $query = $this->db->get('register');
            $data = $query->row();
            print_r(json_encode($data));
        }
        public function save_customer($data)
        {

               $respones = $this->db->insert('customer', $data);
               return $respones;
        }
        public function get_data()
        {

            $query = $this->db->query('SELECT * FROM customer ORDER BY customer_id DESC');
            return $query->result_array();
        }
        public function delete_data_by_rowno($rowno)
        {
            $this->db->where('customer_id', $rowno);
            $this->db->delete('customer');
        }
        public function edit_data_by_rowno($rowno)
        {
            $wherearray = array('customer_id' => $rowno);
            $this->db->select('*');    
            // $this->db->from('register');
            $this->db->where($wherearray);
            $query = $this->db->get('customer');
            $data = $query->row();
            print_r(json_encode($data));
        }
        public function update_data_by_rowno($rowno,$date)
        {
            $this->db->where('customer_id', $rowno);
            $this->db->update('customer',$data);
        }
        public function save_item($data)
        {
           $respones = $this->db->insert('item_details', $data);
           return $respones;
        }
         public function edit_item1($cust_id)
        {
            $wherearray = array('customer_id' => $cust_id);
            $this->db->select('*');    
            $this->db->where($wherearray);
            $query = $this->db->get('item_details');
            $data = $query->result_array();
            print_r(json_encode($data));
        }
        public function editrow_item($item_id)
        {
            $wherearray = array('acc_no' => $item_id);
            $this->db->select('*');    
            // $this->db->from('register');
            $this->db->where($wherearray);
            $query = $this->db->get('item_details');
            $data = $query->row();  
            print_r(json_encode($data));
        }
        public function editrow_loan($loan_id)
        {
            $wherearray = array('loan_id' => $loan_id);
            $this->db->select('*');    
            $this->db->where($wherearray);
            $query = $this->db->get('apply_loan');
            $data = $query->row();  
            print_r(json_encode($data));
        }
        public function edit_loan($acc_no)
        {
            $wherearray = array('acc_no' => $acc_no);
            $this->db->select('*');    
            $this->db->where($wherearray);
            $query = $this->db->get('apply_loan');
            $data = $query->result_array();
            print_r(json_encode($data));
        }
        public function deleterow_item($item_id)
        {
            $this->db->where('acc_no', $item_id);
            $this->db->delete('item_details');
        }
        public function update_item($data,$acc_no)
        {
            $this->db->where('acc_no', $acc_no);
            $this->db->update('item_details',$data);
        }
        public function apply_loan($data)
        {

            $respones = $this->db->insert('apply_loan', $data);
            return $respones;
        }
        public function submit_cost($data)
        {
            $respones = $this->db->insert('metal_cost', $data);
            return $respones;
        }
        public function get_metal_cost()
        {
            $query = $this->db->get('metal_cost');
            return $query->result_array();
        }
        public function get_data_loan($item_id)
        {
            $wherearray = array('acc_no' => $item_id);
            $this->db->select('*');    
            $this->db->where($wherearray);
            $query = $this->db->get('apply_loan');
            return $query->result_array();
        }
        public function leager($custid)
        {
            $query = $this->db->query('SELECT item_details.acc_no,item_details.item_name,item_details.item_type,item_details.fine_weight,item_details.pr_tn,item_details.net_weight FROM item_details where item_details.customer_id='.$custid.'');
            return $query->result_array();
        }
        public function get_csust_details($custid)
        {
            $query = $this->db->query('SELECT customer.customer_id,customer.customer_name,customer.customer_phone,customer.customer_city, customer.date FROM customer where customer.customer_id='.$custid.'');
            return $query->result_array();
        }
        public function get_csusta_loan_details($custid)
        {
            $query = $this->db->query('SELECT apply_loan.acc_no,apply_loan.tran_date,apply_loan.loan_amt,apply_loan.Interest_rate,apply_loan.day_interval, apply_loan.status FROM apply_loan where apply_loan.customer_id='.$custid.'');
            return $query->result_array();
        }
}       
?>