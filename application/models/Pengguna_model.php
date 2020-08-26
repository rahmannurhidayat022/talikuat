<?php 

class Pengguna_model extends CI_Model {
	
	public function getAllBio()
	{
		$query = $this->db->query("SELECT * FROM bio");
		return $query->result();
	}

	public function tambahDataPengguna() 
	{
		$bio = [
			"nama" => $this->input->post("namaBio"),
			"tempat_lahir" => $this->input->post("tempatBio"),
			"tanggal_lahir" => $this->input->post("tanggalBio"),
			"goldar" => $this->input->post("goldarBio"),
			"agama" => $this->input->post("agamaBio"),
			"jenis_kelamin" => $this->input->post("jkBio"),
			"no_telp" => $this->input->post("telpBio"),
			"email" => $this->input->post("emailBio"),
			"alamat" => $this->input->post("alamatBio")
		];

		// INSERT KE TABLE BIO
		$this->db->insert('bio', $bio);

		$query = $this->db->query("SELECT id_bio FROM bio GROUP BY id_bio DESC LIMIT 1");

		$data = $query->row();
		$id_bio = $data->id_bio;

		// INSERT KE TABLE PENDIDIKAN
		$jenjang = $this->input->post("jenjangPendidikan[]");
		$nama_sekolah = $this->input->post("namaPendidikan[]");
		$masuk_sekolah = $this->input->post("masukPendidikan[]");
		$lulus_sekolah = $this->input->post("lulusPendidikan[]");

		$value = array();
		$i = 0;
		foreach($jenjang as $key) {
		    array_push($value, array(
		    	'id_bio' => $id_bio,
		    	'jenjang' => $key,
		    	'nama_sekolah' => $nama_sekolah[$i],
		    	'tahun_masuk' => $masuk_sekolah[$i],
		    	'tahun_keluar' => $lulus_sekolah[$i]
		    ));
		   	$i += 1;
		}

		$this->db->insert_batch('pendidikan', $value);

		// INSERT KE TABLE PEKERJAAN
		$nama_perusahaan = $this->input->post("namaPerusahaan[]");
		$masuk_perusahaan = $this->input->post("masukPekerjaan[]");
		$keluar_perusahaan = $this->input->post("keluarPekerjaan[]");
		$jabatan_pekerjaan = $this->input->post("jabatanPekerjaan[]");

		$value = array();
		$i = 0;
		foreach($nama_perusahaan as $key) {
		    array_push($value, array(
		    	'id_bio' => $id_bio,
		    	'nama_perusahaan' => $key,
		    	'jabatan' => $jabatan_pekerjaan[$i],
		    	'tahun_masuk' => $masuk_perusahaan[$i],
		    	'tahun_keluar' => $keluar_perusahaan[$i]
		    ));
		   	$i += 1;
		}

		$this->db->insert_batch('pekerjaan', $value);

		// INSERT KE TABLE ORGANISASI
		$jabatan_organisasi = $this->input->post("jabatanOrganisasi[]");
		$nama_organisasi = $this->input->post("namaOrganisasi[]");
		$masuk_organisasi = $this->input->post("masukOrganisasi[]");
		$keluar_organisasi = $this->input->post("keluarOrganisasi[]");

		$value = array();
		$i = 0;
		foreach($jabatan_organisasi as $key) {
		    array_push($value, array(
		    	'id_bio' => $id_bio,
		    	'jabatan' => $key,
		    	'nama_organisasi' => $nama_organisasi[$i],
		    	'tahun_masuk' => $masuk_organisasi[$i],
		    	'tahun_keluar' => $keluar_organisasi[$i]
		    ));
		   	$i += 1;
		}

		$this->db->insert_batch('organisasi', $value);
	}

	public function hapusDataPengguna($id)
	{
		$this->db->where('id_bio', $id);
		$this->db->delete('bio');
	}

	public function getBioById($id)
	{
		return $this->db->get_where('bio', ['id_bio' => $id])->row();
	}

	public function getPendAll($id)
	{
		return $this->db->get_where('pendidikan', ['id_bio' => $id])->result();
	}

	public function getOrgAll($id)
	{
		return $this->db->get_where('organisasi', ['id_bio' => $id])->result();
	}

	public function getPkjAll($id)
	{
		return $this->db->get_where('pekerjaan', ['id_bio' => $id])->result();
	}

	public function ubahDataBio($id) {
		$bio = [
			"nama" => $this->input->post("namaBio"),
			"tempat_lahir" => $this->input->post("tempatBio"),
			"tanggal_lahir" => $this->input->post("tanggalBio"),
			"goldar" => $this->input->post("goldarBio"),
			"agama" => $this->input->post("agamaBio"),
			"jenis_kelamin" => $this->input->post("jkBio"),
			"no_telp" => $this->input->post("telpBio"),
			"email" => $this->input->post("emailBio"),
			"alamat" => $this->input->post("alamatBio")
		];

		$this->db->where('id_bio', $id);
		$this->db->update('bio', $bio);
	}

	public function cariData()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('nama', $keyword);
		return $this->db->get('bio')->result();
	}
}