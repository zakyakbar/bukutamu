<?php 

class M_bukutamu extends CI_Model {

        function input_data($data,$table){
		$this->db->insert($table,$data);
	}

        function tampil_data(){
                //$this->db->select('tb_dosen.*, tb_matkul.nama_matkul');               /**untuk memilih tabel user dan kolom jenis pada tabel gender */
                $this->db->select('*');         
                $this->db->from('tb_bukutamu');                                   /**untuk memilih tabel user untuk dihubungkan ke tabel gender */
                //$this->db->join('tb_matkul', 'tb_matkul.id_mk = tb_dosen.matakuliah');      /**untuk menggabungkan 2 tabel tadi */
                $query = $this->db->get();
                return $query->result();
        }
        
}