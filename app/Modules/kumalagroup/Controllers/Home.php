<?php

namespace App\Modules\kumalagroup\Controllers;

use App\Controllers\BaseController;
use DateTime;

class Home extends BaseController
{
	private $api_server = 'https://marketing.kumalagroup.id/api/tHLxW586aIi1YXsQeEKBwhPOJzqfjFokybGmCgRN0M4cnlvduTrVAU2pZS9D37/';
	private $api_server_portal = 'https://portal.kumalagroup.co.id/kmg/api/tHLxW586aIi1YXsQeEKBwhPOJzqfjFokybGmCgRN0M4cnlvduTrVAU2pZS9D37/';
	// private $api_server = 'http://localhost:8888/kumala/api/tHLxW586aIi1YXsQeEKBwhPOJzqfjFokybGmCgRN0M4cnlvduTrVAU2pZS9D37/';

	public function index()
	{
		$base = "App\Modules\kumalagroup\Views";
		$d['content'] = "$base\pages\beranda";
		$d['index'] = "index";
		$berita = json_decode($this->_curl_get($this->api_server . 'berita'));
		$d['berita'] = array_slice($berita, 0, 6);
		$berita = json_decode($this->_curl_get($this->api_server . 'm_promo'));
		$d['promo'] = array_slice($berita, 0, 5);
		$d['slider'] = json_decode($this->_curl_get($this->api_server . 'slider'));
		$d['partner'] = json_decode($this->_curl_get($this->api_server . 'partner'));
		echo view("$base\index", $d);
	}

	public function tentang()
	{
		$base = "App\Modules\kumalagroup\Views";
		$d['content'] = $base . '\pages\tentang';
		$d['index'] = "tentang";
		$d['data'] = json_decode($this->_curl_get($this->api_server . 'tentang'));
		echo view("$base\index", $d);
	}

	public function berita()
	{
		$base = "App\Modules\kumalagroup\Views";
		$d['content'] =  "$base\pages\berita";
		$d['index'] = "berita";
		$d['mod'] = '';
		$data = json_decode($this->_curl_get($this->api_server . 'berita'));
		$d['data'] = [];
		if ($data) {
			$d['page'] = (isset($this->request->uri->getSegments()[1]) && $this->request->uri->getSegments()[1] == "page") ? $this->request->uri->getSegments()[2] : 1;
			$start = ($d['page'] * 9) - 9;
			$d['pages'] = ceil(count($data) / 9);
			$d['data'] = array_slice($data, $start, 9);
		}
		echo view("$base\index", $d);
	}

	public function detail_berita()
	{
		$base = "App\Modules\kumalagroup\Views";
		$d['content'] =  "$base\pages\berita";
		$d['mod'] = "detail";
		$d['index'] = "berita";
		$d['data'] = json_decode($this->_curl_get($this->api_server . 'berita/' . $this->request->uri->getSegments()[2]));
		$bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$date = new DateTime($d['data']->created_at);
		$d['date'] = $date->format('d') . " " . $bulan[$date->format('n')] . " " . $date->format('Y');
		echo view("$base\index", $d);
	}

	public function otomotif()
	{
		$post =  $this->request->getPost();
		if ($post) {
			foreach ($post as $i => $v) $data[$i] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', strip_tags($v));
			$result = $this->_curl_post($this->api_server . 'layanan', $data);
			echo $result;
		} else {
			$base = "App\Modules\kumalagroup\Views";
			$d['index'] = "unit_bisnis";
			$d['mod'] = '';
			if (isset($this->request->uri->getSegments()[1])) {
				if ($this->request->uri->getSegments()[1] == "honda") return redirect()->to("https://honda-kmg.com/");
				elseif ($this->request->uri->getSegments()[1] == "mazda") return redirect()->to("https://mazdakumala.com/");
				elseif ($this->request->uri->getSegments()[1] == "mercedes-benz") return redirect()->to("https://www.kumala.mercedes-benz.co.id/en/desktop/passenger-cars.html");
				$d['content'] =  "$base\pages\otomotif";
				$d['mod'] = "list";
				$d['slider'] = json_decode($this->_curl_get($this->api_server . 'slider' . '/' . $this->request->uri->getSegments()[1]));
				$data = json_decode($this->_curl_get($this->api_server . 'otomotif/' . $this->request->uri->getSegments()[1]));
				$d['head'] = $data->head;
				$d['dealer'] = $data->dealer;
				$d['otomotif'] = [];
				if ($data->otomotif) {
					$d['page'] = (isset($this->request->uri->getSegments()[2]) && $this->request->uri->getSegments()[2] == "page") ? $this->request->uri->getSegments()[3] : 1;
					$start = ($d['page'] * 9) - 9;
					$d['pages'] = ceil(count($data->otomotif) / 9);
					$d['otomotif'] =  array_slice($data->otomotif, $start, 9);
				}
			} else {
				$d['content'] =  "$base\pages\otomotif";
				$d['data'] = json_decode($this->_curl_get($this->api_server . 'otomotif'));
			}
			echo view("$base\index", $d);
		}
	}

	public function detail_otomotif()
	{
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		$d['content'] =  "$base\pages\otomotif";
		$d['mod'] = "detail";
		$data = json_decode($this->_curl_get($this->api_server . 'otomotif/' . $this->request->uri->getSegments()[1] . '/' . $this->request->uri->getSegments()[3]));
		$d['warna'] = $data->warna;
		$d['otomotif'] = $data->otomotif;
		$d['detail'] = $data->detail;
		echo view("$base\index", $d);
	}

	public function dealer()
	{
		$post = $this->request->getPost();
		$data = json_decode($this->_curl_get($this->api_server . 'dealer/' . $post['brand'] . '/' . $post['area']));
		if ($data) :
			foreach ($data as $v) : ?>
				<div class="card col-md-5 m-1 flex-column">
					<div class="card-header"><?= $v->judul ?></div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<img height="140px" width="240px" src="<?= base_url("assets/img_marketing/dealer/$v->gambar") ?>" width="150px" alt="">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<br />
								<p class="card-text"> <?= $v->alamat ?> <br> No tlp/fax : <?= $v->telp ?> </p>
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-md-12">
								<a href="<?= $v->map ?>" class="button button-mini button-border button-rounded button-red"><i class="icon-map-signs"></i>Cek Google maps</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach;
		else : ?>
			<p>Dealer di kota anda belum tersedia</p>
<?php endif;
	}

	public function property()
	{
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		if ($this->request->uri->getSegments()[1]) {
			$d['content'] =  "$base\pages\property";
			$d['mod'] = "list";
			$d['jenis'] = $this->request->uri->getSegments()[1];
			$d['data'] = json_decode($this->_curl_get($this->api_server . 'property/' . $this->request->uri->getSegments()[1]));
		} else {
			$d['content'] =  "$base\pages\property";
		}
		echo view("$base\index", $d);
	}
	public function detail_property()
	{
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		$d['content'] =  "$base\pages\property";
		$d['mod'] = "detail";
		$data = json_decode($this->_curl_get($this->api_server . 'property/' . $this->request->uri->getSegments()[1] . '/' . $this->request->uri->getSegments()[3]));
		$d['data'] = $data->detail;
		$d['galeri'] = $data->galeri;
		echo view("$base\index", $d);
	}

	public function trading()
	{
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		if ($this->request->uri->getSegments()[1]) {
			$d['content'] = $base . '\pages\trading';
			$d['mod'] = "list";
			$d['data'] = $this->request->uri->getSegments()[1];
		} else $d['content'] = $base . '\pages\trading';
		echo view("$base\index", $d);
	}

	public function mining()
	{
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		if ($this->request->uri->getSegments()[2]) {
			$d['content'] = $base . '\pages\mining';
			$d['mod'] = "list";
			$d['data'] = json_decode($this->_curl_get($this->api_server . 'mining/' . $this->request->uri->getSegments()[2]));
		} else {
			$d['data'] = json_decode($this->_curl_get($this->api_server . 'mining'));
			$d['content'] = $base . '\pages\mining';
		}
		echo view("$base\index", $d);
	}
	
	public function kontak()
	{
		$post =  $this->request->getPost();
		if ($post) {
			foreach ($post as $i => $v) $data[$i] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', strip_tags($v));
			$result = $this->_curl_post($this->api_server . 'bantuan', $data);
			echo $result;
		} else {
			$base = "App\Modules\kumalagroup\Views";
			$d['content'] = $base . '\pages\kontak';
			$d['index'] = "kontak";
			echo view("$base\index", $d);
		}
	}
	public function karir()
	{
		$post =  $this->request->getPost();
		if ($post) {
			foreach ($post as $i => $v) $data[$i] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', strip_tags($v));
			$foto = $this->request->getFile('foto');
			$name = date("YmdHis") . "foto." . strtolower(end(explode(".", $foto->getName())));
			$foto->move('./assets/img_marketing/pelamar/', $name);
			$data['foto'] = $foto->getName();
			$cv = $this->request->getFile('cv');
			$name = date("YmdHis") . "cv." . strtolower(end(explode(".", $cv->getName())));
			$cv->move('./assets/img_marketing/pelamar/', $name);
			$data['cv'] = $cv->getName();
			$surat_lamaran = $this->request->getFile('surat_lamaran');
			$name = date("YmdHis") . "surat_lamaran." . strtolower(end(explode(".", $surat_lamaran->getName())));
			$surat_lamaran->move('./assets/img_marketing/pelamar/', $name);
			$data['surat_lamaran'] = $surat_lamaran->getName();
			$result = $this->_curl_post($this->api_server_portal . 'pelamar', $data);
			echo $result;
		} else {
			$base = "App\Modules\kumalagroup\Views";
			$d['content'] = $base . '\pages\karir';
			$d['index'] = "karir";
			$d['data'] = json_decode($this->_curl_get($this->api_server_portal . 'karir'));
			echo view("$base\index", $d);
		}
	}
	public function simulasi_kredit()
	{
		$post =  $this->request->getPost();
		$otr = implode("", explode(".", $post['otr']));
		$dp = implode("", explode(".", $post['dp']));
		$tenor = $post['tenor'] * 12;
		$bunga = $post['bunga'] / 100;
		$plafon = $otr - $dp;
		$a_pokok = $plafon / $tenor;
		$a_bunga = $plafon * $bunga / 12;
		$angsuran = $a_pokok + $a_bunga;
		$pembayaran = $dp + $angsuran;
		$data['plafon'] = number_format($plafon, 2, ",", ".");
		$data['a_pokok'] = number_format($a_pokok, 2, ",", ".");
		$data['a_bunga'] = number_format($a_bunga, 2, ",", ".");
		$data['angsuran'] = number_format($angsuran, 2, ",", ".");
		$data['pembayaran'] = number_format($pembayaran, 2, ",", ".");
		echo json_encode($data);
	}
	function _curl_post($url, $data)
	{
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$r = curl_exec($curl);
		curl_close($curl);
		return $r;
	}
	function _curl_get($url)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$r = curl_exec($curl);
		curl_close($curl);
		return $r;
	}

	public function fitur_360()
	{
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		$d['content'] =  $base . '\pages\\fitur_360';
		$result = json_decode($this->_curl_get($this->api_server . 'digifest_lineUp/' . $this->request->uri->getSegments()[1] . '/' . $this->request->uri->getSegments()[3] . '/360Img'));
		foreach ($result->exterior as $v)
			$exterior[] = $v->gambar;
		$video = json_decode($this->_curl_get($this->api_server . 'digifest_lineUp/' . $this->request->uri->getSegments()[1] . '/' . $this->request->uri->getSegments()[3] . '/360Drive'));
		$d['fitur'] = [
			'interior' => $result->interior[0]->deskripsi ?? '',
			'exterior' => !empty($exterior) ? json_encode($exterior) : '',
			'video' => $video[0]->deskripsi ?? ''
		];
		echo view("$base\index", $d);
	}
}
