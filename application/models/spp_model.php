<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class spp_model extends Data_Model {

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'spp';
        $this->pkey = 'id_spp';
    }

    function getAll()
    {
        $this->datatables->select('id_spp,tahun,nominal');
        $this->datatables->from('spp');

        $this->datatables->add_column('view', '<div class="text-center"><span style="margin-right: 8px;" data-id="$1" data-tahun="$2" data-nominal="$3" class="edit btn btn-xs btn-warning"><i class="fa fa-edit"></i> edit</span><a style="margin-right: 8px;" data-id="$1" class="hapus btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></div>', 'id_spp,tahun,nominal');
        return $this->datatables->generate();
    }

    function insert($tahun='',$nominal=''){
        $sql = "INSERT INTO spp(tahun,nominal) VALUES('$tahun','$nominal')";
        return $this->db->query($sql);
    }

    function update($id='',$tahun='',$nominal=''){
        $sql = "UPDATE spp SET tahun='$tahun',nominal='$nominal' WHERE id_spp='$id'";
        return $this->db->query($sql);
    }

    function delete($id=''){
        $query = "DELETE FROM spp WHERE id_spp='$id'";

        return $this->db->query($query);
    }

}
