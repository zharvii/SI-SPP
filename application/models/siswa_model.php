<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class siswa_model extends Data_Model {

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'siswa';
        $this->pkey = 'nisn';
    }

    function getAll()
    {
        $this->datatables->select('nis,nisn,nama,id_kelas,alamat,no_tlp,id_spp,tgl_lahir,pin,tahun_masuk,nama_kelas,jurusan,tahun,nominal');
        $this->datatables->from('vw_siswa');

        $this->datatables->add_column('view', '<div class="text-center"><span style="margin-right: 8px;" data-nis="$1" data-nisn="$2" data-nama="$3" data-idkelas="$4" data-alamat="$5" data-notlp="$6" data-idspp="$7" data-tgllhr="$8" data-kom="$9" class="edit btn btn-xs btn-warning"><i class="fa fa-edit"></i> edit</span><a style="margin-right: 8px;" data-nis="$1" class="hapus btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></div>', 'nis,nisn,nama,id_kelas,alamat,no_tlp,id_spp,tgl_lahir,jurusan,pin,nama_kelas,tahun,nominal');
        return $this->datatables->generate();
    }

    function genNis(){
        $count = $this->db->get('siswa')->num_rows();
        $result = '';
        if ($count > 0) {
            $siswa = $this->db->query('SELECT nis FROM siswa ORDER BY nis DESC LIMIT 1')->row();
            $angka=substr($siswa->nis,6,10);
            $result = date('Y').date('m').str_pad((int)$angka + 1, 4, '0', STR_PAD_LEFT);
            return $result;
        } else {
            $result = date('Y').date('m').'0001';
            return $result;
        }
    }
    // `nis`, `nisn`, `nama`, `id_kelas`, `alamat`, `no_tlp`, `id_spp`, `tgl_lahir`, `pin`, `kompetensi`, `tahun_masuk`

    function insert($nis='',$nisn='',$nama='',$id_kelas='',$alamat='',$no_tlp='',$id_spp,$tgl_lahir='',$pin='',$kompetensi='',$tahun_masuk=''){
        $sql = "INSERT INTO siswa VALUES('$nis','$nisn','$nama','$id_kelas','$alamat','$no_tlp','$id_spp','$tgl_lahir','$pin','$kompetensi','$tahun_masuk')";
        return $this->db->query($sql);
    }

    function update($nis='',$nisn='',$nama='',$id_kelas='',$alamat='',$no_tlp='',$id_spp,$tgl_lahir='',$pin='',$kompetensi='',$tahun_masuk=''){
        $sql = "UPDATE siswa SET nisn='$nisn',nama='$nama',id_kelas='$id_kelas',alamat='$alamat',no_tlp='$no_tlp',id_spp='$id_spp',tgl_lahir='$tgl_lahir',pin='$pin',kompetensi='$kompetensi' WHERE nis='$nis'";
        return $this->db->query($sql);
    }

    function delete($nis=''){
        $query = "DELETE FROM siswa WHERE nis='$nis'";

        return $this->db->query($query);
    }

}
