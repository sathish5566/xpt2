<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$file_get_contents = json_decode(file_get_contents(SOLR_VIDEO."select?q=*:*&rows=20"),true);
		$videoData = $file_get_contents['response']['docs'];
		foreach($videoData as $vData) {
			$data['videoData'][] = array(
				'videoId' => $vData['videoId'],
				'title' => $vData['title'],
				'tags' => $vData['tags'],
				'thumb' => SBCDN.$vData['thumb'],
				'duration' => $vData['duration'],
				'viewcount' => $vData['viewcount'],
				'slug' => BASEURL."video/".url_title($vData['title'])."-".$vData['videoId']
			);
		}
		$this->load->view('home',$data);
	}

	public function video()
	{	
		$product_id = $this->uri->segment(2);
		$productArray = explode('-', $product_id);
		$slugCount = count($productArray)-1;
		// echo $productArray[$slugCount];
		$file_get_contents = json_decode(file_get_contents(SOLR_VIDEO."select?q=*:*&fq=videoId:".$productArray[$slugCount]),true);
		$videoData = $file_get_contents['response']['docs'][0];

		$uniqueKey = str_replace("-spankbang", "", $videoData['uniqueKey']);
		
		$getVideoSource = file_get_contents("https://spankbang.com/".$uniqueKey."/embed/");
		$getVideoSource = explode('<source src="', $getVideoSource);
		$getVideoSource = explode('" type="video/mp4"', $getVideoSource[1]);

		$data['videoData'] = array(
			'videoUrl' => $getVideoSource[0],
			'thumb' => SBCDN.$videoData['thumb']
		);

		$this->load->view('single', $data);
	}
}
