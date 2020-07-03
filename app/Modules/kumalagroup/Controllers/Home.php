<?php

namespace App\Modules\kumalagroup\Controllers;

use CodeIgniter\Controller;
use DateTime;

class Home extends Controller
{
	private $url = [
		"http://localhost:6424/kmg/",
		"http://portal.kumalagroup.co.id/kmg/",
		"http://portal2.kumalagroup.co.id/kmg/",
		"http://portal3.kumalagroup.co.id/kmg/"
	];
	private $api_server;
	function _set_base($url)
	{
		foreach ($url as $i => $v) {
			$headers = @get_headers($v);
			$r = $headers && strpos($headers[0], '200') ? 1 : 0;
			if ($r == 1) {
				$this->api_server = $v . "api/tHLxW586aIi1YXsQeEKBwhPOJzqfjFokybGmCgRN0M4cnlvduTrVAU2pZS9D37/";
				break;
			}
		}
	}
	public function index()
	{
		$this->_set_base($this->url);
		// echo $this->api_server;
		// die();
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
		$this->_set_base($this->url);
		$base = "App\Modules\kumalagroup\Views";
		$d['content'] = $base . '\pages\tentang';
		$d['index'] = "tentang";
		$d['data'] = json_decode($this->_curl_get($this->api_server . 'tentang'));
		echo view("$base\index", $d);
	}
	public function berita()
	{
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['content'] =  "$base\pages\berita";
		$d['index'] = "berita";
		$data = json_decode($this->_curl_get($this->api_server . 'berita'));
		$d['data'] = [];
		if ($data) {
			$d['page'] = ($request->uri->getSegments()[1] == "page") ? $request->uri->getSegments()[2] : 1;
			$start = ($d['page'] * 9) - 9;
			$d['pages'] = ceil(count($data) / 9);
			$d['data'] = array_slice($data, $start, 9);
		}
		echo view("$base\index", $d);
	}
	public function detail_berita()
	{
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['content'] =  "$base\pages\berita";
		$d['mod'] = "detail";
		$d['index'] = "berita";
		$d['data'] = json_decode($this->_curl_get($this->api_server . 'berita/' . base64_decode($request->uri->getSegments()[2])));
		$bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$date = new DateTime($d['data']->updated_at);
		$d['date'] = $date->format('d') . " " . $bulan[$date->format('n')] . " " . $date->format('Y');
		echo view("$base\index", $d);
	}
	public function otomotif()
	{
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$post =  $request->getPost();
		if ($post) {
			foreach ($post as $i => $v) $data[$i] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', strip_tags($v));
			$result = $this->_curl_post($this->api_server . 'layanan', $data);
			echo $result;
		} else {
			$base = "App\Modules\kumalagroup\Views";
			$d['index'] = "unit_bisnis";
			if ($request->uri->getSegments()[1]) {
				if ($request->uri->getSegments()[1] == "honda") return redirect()->to("https://honda-kmg.com/");
				elseif ($request->uri->getSegments()[1] == "mazda") return redirect()->to("https://www.mazda-makassar.com/");
				elseif ($request->uri->getSegments()[1] == "mercedes-benz") return redirect()->to("https://www.kumala.mercedes-benz.co.id/en/desktop/passenger-cars.html");
				$d['content'] =  "$base\pages\otomotif";
				$d['mod'] = "list";
				$d['slider'] = json_decode($this->_curl_get($this->api_server . 'slider' . '/' . $request->uri->getSegments()[1]));
				$data = json_decode($this->_curl_get($this->api_server . 'otomotif/' . $request->uri->getSegments()[1]));
				$d['head'] = $data->head;
				$d['dealer'] = $data->dealer;
				$d['otomotif'] = [];
				if ($data->otomotif) {
					$d['page'] = ($request->uri->getSegments()[2] == "page") ? $request->uri->getSegments()[3] : 1;
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
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		$d['content'] =  "$base\pages\otomotif";
		$d['mod'] = "detail";
		$data = json_decode($this->_curl_get($this->api_server . 'otomotif/' . $request->uri->getSegments()[1] . '/' . base64_decode($request->uri->getSegments()[3])));
		// $d['brand'] = $data->brand;
		$d['warna'] = $data->warna;
		$d['otomotif'] = $data->otomotif;
		$d['detail'] = $data->detail;
		// $d['dealer'] = $data->dealer;
		// $d['provinsi'] = $data->provinsi;
		echo view("$base\index", $d);
	}
	public function dealer()
	{
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$post = $request->getPost();
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
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		if ($request->uri->getSegments()[1]) {
			$d['content'] =  "$base\pages\property";
			$d['mod'] = "list";
			$d['data'] = json_decode($this->_curl_get($this->api_server . 'property/' . $request->uri->getSegments()[1]));
		} else {
			$d['content'] =  "$base\pages\property";
		}
		echo view("$base\index", $d);
	}
	public function detail_property()
	{
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		$d['content'] =  "$base\pages\property";
		$d['mod'] = "detail";
		$d['data'] = json_decode($this->_curl_get($this->api_server . 'property/' . $request->uri->getSegments()[1] . '/' . base64_decode($request->uri->getSegments()[3])));
		echo view("$base\index", $d);
	}
	public function trading()
	{
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		if ($request->uri->getSegments()[1]) {
			$d['content'] = $base . '\pages\trading';
			$d['mod'] = "list";
			$d['data'] = $request->uri->getSegments()[1];
		} else $d['content'] = $base . '\pages\trading';
		echo view("$base\index", $d);
	}
	public function mining()
	{
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		if ($request->uri->getSegments()[2]) {
			$d['content'] = $base . '\pages\mining';
			$d['mod'] = "list";
			$d['data'] = json_decode($this->_curl_get($this->api_server . 'mining/' . base64_decode($request->uri->getSegments()[2])));
		} else {
			$d['data'] = json_decode($this->_curl_get($this->api_server . 'mining'));
			$d['content'] = $base . '\pages\mining';
		}
		echo view("$base\index", $d);
	}
	public function kontak()
	{
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$post =  $request->getPost();
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
		$this->_set_base($this->url);
		$request = \Config\Services::request();
		$post =  $request->getPost();
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
			$result = $this->_curl_post($this->api_server . 'pelamar', $data);
			echo $result;
		} else {
			$base = "App\Modules\kumalagroup\Views";
			$d['content'] = $base . '\pages\karir';
			$d['index'] = "karir";
			$d['data'] = json_decode($this->_curl_get($this->api_server . 'karir'));
			echo view("$base\index", $d);
		}
	}
	public function simulasi_kredit()
	{
		$request = \Config\Services::request();
		$post =  $request->getPost();
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
		$r = curl_exec($curl);
		curl_close($curl);
		return $r;
	}
	function _curl_get($url)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$r = curl_exec($curl);
		curl_close($curl);
		return $r;
	}
}
