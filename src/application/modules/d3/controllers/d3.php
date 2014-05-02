<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class D3 extends MY_Controller {

    /**
     * Example page
     */
    public function index()
    {
        $data = array();
        
        $this->db->select('x, y');
        $this->db->from('test');
        $data['query_data'] = $this->db->get()->result();
        
        $this->load->view('index', $data);
    }
}

/* End of file todo.php */
/* Location: ./application/modules/todo/controllers/todo.php */