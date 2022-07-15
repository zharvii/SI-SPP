<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class petugas_model extends Data_Model {

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'petugas';
        $this->pkey = 'id_petugas';
    }

    function getAll()
    {
        $this->datatables->select('id_petugas,username,password,nama_petugas,level');
        $this->datatables->from('petugas');

        $this->datatables->add_column('view', '<div class="text-center"><span style="margin-right: 8px;" data-id="$1" data-user="$2"  data-nama="$3" data-level="$4" class="edit btn btn-xs btn-warning"><i class="fa fa-edit"></i> edit</span><a style="margin-right: 8px;" data-id="$1" class="hapus btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></div>', 'id_petugas,username,nama_petugas,level');
        return $this->datatables->generate();
    }

    function insert($user='',$pass='',$nama='',$level=''){
        $sql = "INSERT INTO petugas(username,password,nama_petugas,level) VALUES('$user','$pass','$nama','$level')";
        return $this->db->query($sql);
    }

    function update($id='',$user='',$pass='',$nama='',$level='',$param){
        if($param=='f'){
            $sql = "UPDATE petugas SET username='$user',nama_petugas='$nama',level='$level' WHERE id_petugas='$id'";
        }else if($param=='t'){
            $sql = "UPDATE petugas SET username='$user',password='$pass',nama_petugas='$nama',level='$level' WHERE id_petugas='$id'";
        }
        return $this->db->query($sql);
    }

    function delete($id=''){
        $query = "DELETE FROM petugas WHERE id_petugas='$id'";

        return $this->db->query($query);
    }

    function changePassword($id='',$pass=''){
        $sql = "UPDATE petugas SET password='$pass' WHERE id_petugas='$id'";
        return $this->db->query($sql);
    }
}
