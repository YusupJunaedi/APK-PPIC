<?php

class Model_ppic extends CI_Model{

    function getTotalDataProduk()
    {
        $this->db->join('rls', 'rls.id = data_produk.rel_id');
        return $this->db->get('data_produk')->result_array();
    }

    function getDataProduk($rel_id)
    {
        $this->db->join('rls', 'rls.id = data_produk.rel_id');
        $this->db->where('rel_id', $rel_id);
        return $this->db->get('data_produk')->result_array();
    }

    function getRls()
    {
        return $this->db->get('rls')->result_array();
    }

    function getGTotalProduk($id)
    {
        $this->db->where('rel_id', $id);
        return $this->db->get('g_total_produk')->row_array();
    }

    function SumTotalUkuran($rel_id, $ukuran)
    {
        $this->db->where('rel_id', $rel_id);
        $this->db->select_sum($ukuran);
        return $this->db->get('data_produk')->row_array();
    }

    function updateDataProduk($id, $data)
    {
        $this->db->where('id_data', $id);
        $this->db->update('data_produk', $data);
    }

    function updateDataGTotalProduk($rel, $data)
    {
        $this->db->where('rel_id', $rel);
        $this->db->update('g_total_produk', $data);
    }

    function tambahDataProduk($data)
    {
        $this->db->insert('data_produk', $data);
    }

    function hapusDataProduk($id)
    {
        $this->db->where('id_data', $id);
        $this->db->delete('data_produk');
    }

    function SumGTotalProduk($ukuran){
        $this->db->select_sum($ukuran);
        return $this->db->get('g_total_produk')->row_array();
    }

    function getStokMold()
    {
        return $this->db->get('stok_mold')->result_array();
    }

    function getOsMold()
    {
        return $this->db->get('os_mold')->row_array();
    }

    function updateStokMold($id, $data)
    {
        $this->db->where('id_stok', $id);
        $this->db->update('stok_mold', $data);
    }

    function updateOsMold($id, $data)
    {
        $this->db->where('id_osMold', $id);
        $this->db->update('os_mold', $data);
    }

    function SumTotalStokMold($ukuran)
    {
        $this->db->select_sum($ukuran);
        return $this->db->get('stok_mold')->row_array();
    }

    function updateJumlahTotalStokMold($data)
    {
        $this->db->where('id_jumlah_stok', 1);
        $this->db->update('jumlah_total_stok_mold', $data);
    }

    function getJumlahTotalSM()
    {
        return $this->db->get('jumlah_total_stok_mold')->row_array();
    }

    function hapusDataStokMold($id)
    {
        $this->db->where('id_stok', $id);
        $this->db->delete('stok_mold');
    }

    function tambahStokMold($data)
    {
        $this->db->insert('stok_mold', $data);
    }

    function getRumus1($id)
    {  
        $this->db->where('rel_id', $id);
        return $this->db->get('g_total_produk')->row_array();
    }

    function updateRls($rel, $data)
    {
        $this->db->where('rel', $rel);
        $this->db->update('rls', $data);
    }

    function SumJumlahRls($ukuran){
        $this->db->select_sum($ukuran);
        return $this->db->get('rls')->row_array();
    }

    function updateTotalJumlahRls($data)
    {
        $this->db->where('id_total_jumlah_rls', 1);
        $this->db->update('total_jumlah_rls', $data);
    }

    function getTotalJumlahRls()
    {
        return $this->db->get('total_jumlah_rls')->row_array();
    }

    function cekTotalProdukRls($rel_id)
    {
        $this->db->where('rel_id', $rel_id);
        return $this->db->get('g_total_produk')->row_array();
    }

    function insertGTotalProduk($data)
    {
        $this->db->insert('g_total_produk', $data);
    }

    function insertRel($data)
    {
        $this->db->insert('rls', $data);
    }

    function updateRel($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('rls', $data);
    }

    function dellRel($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('rls');
    }




}