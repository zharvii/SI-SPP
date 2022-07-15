<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kelas_model extends Data_Model {

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'kelas';
        $this->pkey = 'id_kelas';
    }

    function getAll()
    {
        $this->datatables->select('id_kelas,nama_kelas,jurusan');
        $this->datatables->from('kelas');

        $this->datatables->add_column('view', '<div class="text-center"><span style="margin-right: 8px;" data-id="$1" data-nama="$2" data-jurusan="$3" class="edit btn btn-xs btn-warning"><i class="fa fa-edit"></i> edit</span><a style="margin-right: 8px;" data-id="$1" class="hapus btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></div>', 'id_kelas,nama_kelas,jurusan');
        return $this->datatables->generate();
    }

    function insert($nama='',$jurusan=''){
        $sql = "INSERT INTO kelas(nama_kelas,jurusan) VALUES('$nama','$jurusan')";
        return $this->db->query($sql);
    }

    function update($id='',$nama='',$jurusan=''){
        $sql = "UPDATE kelas SET nama_kelas='$nama',jurusan='$jurusan' WHERE id_kelas='$id'";
        return $this->db->query($sql);
    }

    function delete($id=''){
        $query = "DELETE FROM kelas WHERE id_kelas='$id'";

        return $this->db->query($query);
    }

}
