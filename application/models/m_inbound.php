 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inbound extends CI_Model
{
    public function input_data($data)
    {
        $this->db->insert('tambah_inbound',$data);
    }

    public function view() 
    { 
        return $this->db->get('tambah_inbound');  
    }

    public function inset_data($where)
    {
        return $this->db->get_where('tambah_inbound', $where);
    }

    // kode otomatis 
    public function faktur()
    {
        $this->db->select('RIGHT(tambah_inbound.faktur,6) as faktur', FALSE);
        $this->db->order_by('faktur','DESC');
        $this->db->limit(1);

        $query=$this->db->get('tambah_inbound');
        date_default_timezone_set('Asia/Jakarta');

        if ($query->num_rows()<>0)
        {
            $data=$query->row();
            $kode=intval($data->faktur)+1;
        }
        else
        {
            $kode=1;
        }
        $kodemax=str_pad($kode,5,"0",STR_PAD_LEFT);
        $kode="INB".date('YmdHi').$kodemax."JKT";
        return $kode;
    }

    /*Kategori*/
    public function input_kategori($data)
    {
        $this->db->insert('kategori', $data);
    }

    /*ITEM*/

    public function input_item($data)
    {
        $this->db->insert('item', $data);
    }
}  
 