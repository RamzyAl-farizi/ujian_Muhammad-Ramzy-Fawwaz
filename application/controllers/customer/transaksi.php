<?php

class transaksi extends CI_Controller
{
    public function index()
    {
        $customer = $this->session->userdata('id_customer');
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND cs.id_customer='$customer'ORDER BY id_rental DESC ")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/transaksi', $data);
        $this->load->view('templates_customer/footer');
    }

    public function pembayaran($id)
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND tr.id_rental='$id'ORDER BY id_rental DESC ")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/pembayaran', $data);
        $this->load->view('templates_customer/footer');
    }
}
