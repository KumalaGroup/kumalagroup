<?php

namespace App\Modules\kumalagroup\Controllers;

use CodeIgniter\Controller;
use DateTime;

class Home extends Controller
{
	private $base_img = "http://localhost:6424/kmg/assets/img_marketing";
	private $api_server = "http://localhost:6424/kmg/api/tHLxW586aIi1YXsQeEKBwhPOJzqfjFokybGmCgRN0M4cnlvduTrVAU2pZS9D37/";
	public function index()
	{
		$base = "App\Modules\kumalagroup\Views";
		$d['content'] = "$base\pages\beranda";
		$d['index'] = "index";
		$data = json_decode($this->curl_get($this->api_server . 'berita'));
		$d['berita'] = array_slice($data, 0, 2);
		$d['slider'] = json_decode($this->curl_get($this->api_server . 'slider'));
		$d['partner'] = json_decode($this->curl_get($this->api_server . 'partner'));
		$d['base_img'] = $this->base_img;
		echo view("$base\index", $d);
	}
	public function tentang()
	{
		$base = "App\Modules\kumalagroup\Views";
		$d['content'] = $base . '\pages\tentang';
		$d['index'] = "tentang";
		$d['data'] = json_decode($this->curl_get($this->api_server . 'tentang'));
		echo view("$base\index", $d);
	}
	public function berita()
	{
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['content'] =  "$base\pages\berita";
		$d['index'] = "berita";
		$data = json_decode($this->curl_get($this->api_server . 'berita'));
		$d['page'] = ($request->uri->getSegments()[1] == "page") ? $request->uri->getSegments()[2] : 1;
		$start = ($d['page'] * 6) - 6;
		$d['pages'] = ceil(count($data) / 6);
		$d['data'] = array_slice($data, $start, 6);
		$d['base_img'] = $this->base_img;
		echo view("$base\index", $d);
	}
	public function detail_berita()
	{
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['content'] =  "$base\pages\berita";
		$d['mod'] = "detail";
		$d['index'] = "berita";
		$d['data'] = json_decode($this->curl_get($this->api_server . 'berita/' . $request->uri->getSegments()[2]));
		$bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$date = new DateTime($d['data']->updated_at);
		$d['date'] = $date->format('d') . " " . $bulan[$date->format('n')] . " " . $date->format('Y');
		$d['base_img'] = $this->base_img;
		echo view("$base\index", $d);
	}
	public function otomotif()
	{
		$request = \Config\Services::request();
		$post =  $request->getPost();
		if ($post) {
			foreach ($post as $i => $v) $data[$i] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', strip_tags($v));
			$result = $this->curl_post($this->api_server . 'layanan', $data);
			echo $result;
		} else {
			$base = "App\Modules\kumalagroup\Views";
			$d['index'] = "unit_bisnis";
			if ($request->uri->getSegments()[1]) {
				$d['content'] =  "$base\pages\otomotif";
				$d['mod'] = "list";
				$data = json_decode($this->curl_get($this->api_server . 'otomotif/' . $request->uri->getSegments()[1]));
				$d['head'] = $data->head;
				$d['page'] = ($request->uri->getSegments()[2] == "page") ? $request->uri->getSegments()[3] : 1;
				$start = ($d['page'] * 9) - 9;
				$d['pages'] = ceil(count($data->otomotif) / 9);
				$d['otomotif'] =  array_slice($data->otomotif, $start, 9);
			} else {
				$d['content'] =  "$base\pages\otomotif";
				$d['data'] = json_decode($this->curl_get($this->api_server . 'otomotif'));
			}
			$d['base_img'] = $this->base_img;
			echo view("$base\index", $d);
		}
	}
	public function detail_otomotif()
	{
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		$d['content'] =  "$base\pages\otomotif";
		$d['mod'] = "detail";
		$data = json_decode($this->curl_get($this->api_server . 'otomotif/' . $request->uri->getSegments()[1] . '/' . $request->uri->getSegments()[3]));
		$d['base_img'] = $this->base_img;
		$d['warna'] = $data->warna;
		$d['otomotif'] = $data->otomotif;
		$d['detail'] = $data->detail;
		$d['dealer'] = $data->dealer;
		echo view("$base\index", $d);
	}
	public function dealer()
	{
		$request = \Config\Services::request();
		$data = json_decode($this->curl_get($this->api_server . 'dealer/' . $request->uri->getSegments()[1] . '/' . $request->uri->getSegments()[2]));
		$base_img = $this->base_img;
		if ($data) :
			foreach ($data as $v) : ?>
				<div class="card col-md-5 m-1 flex-column">
					<div class="card-header"><?= $v->judul ?></div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<img height="140px" width="240px" src="<?= "$base_img/dealer/$v->gambar" ?>" width="150px" alt="">
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
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		if ($request->uri->getSegments()[1]) {
			$d['content'] =  "$base\pages\property";
			$d['mod'] = "list";
			$d['data'] = json_decode($this->curl_get($this->api_server . 'property/' . $request->uri->getSegments()[1]));
		} else {
			$d['content'] =  "$base\pages\property";
		}
		$d['base_img'] = $this->base_img;
		echo view("$base\index", $d);
	}
	public function detail_property()
	{
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		$d['content'] =  "$base\pages\property";
		$d['mod'] = "detail";
		$d['data'] = json_decode($this->curl_get($this->api_server . 'property/' . $request->uri->getSegments()[1] . '/' . $request->uri->getSegments()[3]));
		$d['base_img'] = $this->base_img;
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
		$request = \Config\Services::request();
		$base = "App\Modules\kumalagroup\Views";
		$d['index'] = "unit_bisnis";
		if ($request->uri->getSegments()[2]) {
			$d['content'] = $base . '\pages\mining';
			$d['mod'] = "list";
			$d['data'] = json_decode($this->curl_get($this->api_server . 'mining/' . $request->uri->getSegments()[2]));
		} else {
			$d['data'] = json_decode($this->curl_get($this->api_server . 'mining'));
			$d['content'] = $base . '\pages\mining';
		}
		$d['base_img'] = $this->base_img;
		echo view("$base\index", $d);
	}
	public function kontak()
	{
		$request = \Config\Services::request();
		$post =  $request->getPost();
		if ($post) {
			foreach ($post as $i => $v) $data[$i] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', strip_tags($v));
			$result = $this->curl_post($this->api_server . 'bantuan', $data);
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
		$request = \Config\Services::request();
		$post =  $request->getPost();
		if ($post) {
			foreach ($post as $i => $v) $data[$i] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', strip_tags($v));
			$foto = $this->request->getFile('foto');
			$name = "foto" . date("YmdHis") . "." . strtolower(end(explode(".", $foto->getName())));
			$foto->move(ROOTPATH . 'assets/pelamar', $name);
			$data['foto'] = $foto->getName();
			$cv = $this->request->getFile('cv');
			$name = "cv" . date("YmdHis") . "." . strtolower(end(explode(".", $cv->getName())));
			$cv->move(ROOTPATH . 'assets/pelamar', $name);
			$data['cv'] = $cv->getName();
			$surat_lamaran = $this->request->getFile('surat_lamaran');
			$name = "surat_lamaran" . date("YmdHis") . "." . strtolower(end(explode(".", $surat_lamaran->getName())));
			$surat_lamaran->move(ROOTPATH . 'assets/pelamar', $name);
			$data['surat_lamaran'] = $surat_lamaran->getName();
			$result = $this->curl_post($this->api_server . 'w_karir', $data);
			echo $result;
		} else {
			$base = "App\Modules\kumalagroup\Views";
			$d['content'] = $base . '\pages\karir';
			$d['index'] = "karir";
			$d['data'] = json_decode($this->curl_get($this->api_server . 'karir'));
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
		$bunga = $post['bunga'];
		$plafon = $otr - $dp;
		$a_pokok = $plafon / $tenor;
		$a_bunga = $plafon * ($bunga / 100) / 12;
		$angsuran = $a_pokok + $a_bunga;
		$pembayaran = $dp + $angsuran;
		$data['plafon'] = number_format($plafon, 2, ",", ".");
		$data['a_pokok'] = number_format($a_pokok, 2, ",", ".");
		$data['a_bunga'] = number_format($a_bunga, 2, ",", ".");
		$data['angsuran'] = number_format($angsuran, 2, ",", ".");
		$data['pembayaran'] = number_format($pembayaran, 2, ",", ".");
		echo json_encode($data);
	}
	public function hapus_berkas()
	{
		$request = \Config\Services::request();
		$post =  $request->getPost();
		unlink("./assets/pelamar/" . $post['foto']);
		unlink("./assets/pelamar/" . $post['cv']);
		unlink("./assets/pelamar/" . $post['surat_lamaran']);
	}
	function curl_post($url, $data)
	{
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$r = curl_exec($curl);
		curl_close($curl);
		return $r;
	}
	function curl_get($url)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$r = curl_exec($curl);
		curl_close($curl);
		return $r;
	}
}
