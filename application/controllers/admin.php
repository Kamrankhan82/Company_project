<?php
class admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }
    public function form(){
       if(isset($_POST['submit'])){
        $data=array(
        'name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'contact'=>$this->input->post('contact'),
        'industry'=>$this->input->post('industry'),
        'region'=>$this->input->post('region'),
        'country'=>$this->input->post('country'),
        'objective'=>$this->input->post('objective'),
        'queries'=>$this->input->post('queries'),
        'brand_name'=>$this->input->post('brand_name'),
        'url'=>$this->input->post('url'),
        
        );
            $this->session->set_userdata('industry',$data['industry']);
            $this->session->set_userdata('objective',$data['objective']);
            $this->session->set_userdata('queries',$data['queries']);
           $this->session->set_userdata('email',$data['email']);
       $insert_data=$this->admin_model->insert_data($data);
           redirect(base_url() . 'admin/checkout');
       }else{
           $this->load->view('admin/form');
       }
    }
    public function price(){
    
        if(isset($_POST['submit'])){
            $data=array(
            'industry'=>$this->input->post('industry'),
            'objective'=>$this->input->post('objective'),
            'queries'=>$this->input->post('queries'),
            'price'=>$this->input->post('price'),    
            );
           
            $insert_data=$this->admin_model->insert_price($data);
            echo "price inserted";
        }else{
            $this->load->view('admin/price');
        }
    }
    public function checkout(){
        $wh='email="'.$this->session->userdata('email').'";';
        $where=' industry="'.$this->session->userdata('industry').'" and objective="'.$this->session->userdata('objective').'" and queries='.$this->session->userdata('queries').';';
        $data['result']=$this->admin_model->get_price($where);
        $data['main_result']=$this->admin_model->get_details($wh);
        $this->load->view('admin/checkout',$data);
    
    }
}

?>