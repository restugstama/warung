 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inbound extends CI_Model
{
    public function input_data($data)
    {
        $this->db->insert('tambah_inbound');
    }
} 
