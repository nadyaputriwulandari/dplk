<?php 

class Deposito extends CI_Controller{

	public function index(){
		$data['deposito'] = $this->deposito_model->tampil_data('deposito')->result();
		$this->load->view('templates/sidebar');
		$this->load->view('templates/header');
		$this->load->view('deposito',$data);
		$this->load->view('templates/footer');
	}
	public function delete($id)
  {
    $where = array('id' =>$id);
    $this->deposito_model->hapus_data($where,'deposito');
    redirect('deposito');
  }
  public function input(){
		$this->load->view('templates/sidebar');
		$this->load->view('templates/header');
		$this->load->view('deposito_form');
		$this->load->view('templates/footer');
	}
	public function input_aksi()
	{
		$no_bilyet  = $_POST['no_bilyet'];
		$norek_bilyet  = $_POST['norek_bilyet'];
		$nama_bank  = $_POST['nama_bank'];
		$cabang  = $_POST['cabang'];
		$rate_bunga_berjalan  = $_POST['rate_bunga_berjalan'];
		$rate_bunga_piutang  = $_POST['rate_bunga_piutang'];
		$tanggal_penempatan = $_POST['tanggal_penempatan'];
		$tanggal_ro  = $_POST['tanggal_ro'];
		$jangka_waktu  = $_POST['jangka_waktu'];
		$saldo  = $_POST['saldo'];
		$bank_dplk  = $_POST['bank_dplk'];

		$this->db->query("insert into deposito values('','$no_bilyet','$norek_bilyet','$nama_bank','$cabang','$rate_bunga_berjalan','$rate_bunga_piutang','$tanggal_penempatan','$tanggal_ro','$jangka_waktu','$saldo','$bank_dplk')");
		$this->session->set_flashdata('msg', 'success');
		redirect(base_url("deposito"));
	}
	public function update($id)
	{
		$where = array('id' => $id) ;
		$data['deposito'] = $this->deposito_model->edit_data($where, 'deposito')->result();
			$this->load->view('templates/sidebar');
			$this->load->view('templates/header');
			$this->load->view('deposito_edit',$data);
			$this->load->view('templates/footer');
	}
	public function update_aksi()
	{
		$id = $this->input->post('id');
		$no_bilyet  = $this->input->post('no_bilyet');
		$norek_bilyet  = $this->input->post('norek_bilyet');
		$nama_bank  = $this->input->post('nama_bank');
		$cabang  = $this->input->post('cabang');
		$rate_bunga_berjalan  = $this->input->post('rate_bunga_berjalan');
		$rate_bunga_piutang  = $this->input->post('rate_bunga_piutang');
		$tanggal_penempatan = $this->input->post('tanggal_penempatan');
		$tanggal_ro  = $this->input->post('tanggal_ro');
		$jangka_waktu  = $this->input->post('jangka_waktu');
		$saldo  = $this->input->post('saldo');
		$bank_dplk  = $this->input->post('bank_dplk');


		$data = array(
			'no_bilyet' => $no_bilyet,
			'norek_bilyet' => $norek_bilyet,
			'nama_bank' => $nama_bank,
			'cabang' => $cabang,
			'rate_bunga_berjalan' => $rate_bunga_berjalan,
			'rate_bunga_piutang' => $rate_bunga_piutang,
			'tanggal_penempatan' => $tanggal_penempatan,
			'tanggal_ro' => $tanggal_ro,
			'jangka_waktu' => $jangka_waktu,
			'saldo' => $saldo,
			'bank_dplk' => $bank_dplk

		);
		$where = array(
			'id' => $id
		);
		$this->deposito_model->update_data($where,$data,'deposito');
		
		redirect('deposito');
	}
}