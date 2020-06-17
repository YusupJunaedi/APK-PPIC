<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_ppic', 'm');
    }

	
	public function index()
	{
        $Getproduk      = $this->m->getTotalDataProduk();
        $rls            = $this->m->getRls();

        $TotalU10_5C    = $this->m->SumGTotalProduk('10_5C');
        $TotalU11C      = $this->m->SumGTotalProduk('11C');
        $TotalU11_5C    = $this->m->SumGTotalProduk('11_5C');
        $TotalU12C      = $this->m->SumGTotalProduk('12C');
        $TotalU12_5C    = $this->m->SumGTotalProduk('12_5C');
        $TotalU13C      = $this->m->SumGTotalProduk('13C');
        $TotalU13_5C    = $this->m->SumGTotalProduk('13_5C');
        $TotalU1Y       = $this->m->SumGTotalProduk('1Y');
        $TotalU1_5Y     = $this->m->SumGTotalProduk('1_5Y');
        $TotalU2Y       = $this->m->SumGTotalProduk('2Y');
        $TotalU2_5Y     = $this->m->SumGTotalProduk('2_5Y');
        $TotalU3Y       = $this->m->SumGTotalProduk('3Y');
        $TotalUresult   = $this->m->SumGTotalProduk('result');

        $stokM			= $this->m->getStokMold();
        $osMold			= $this->m->getOsMold();

		$jumlahTotalSM  = $this->m->getJumlahTotalSM();
		
		$totalJumlahRLS = $this->m->getTotalJumlahRls();


        $data = [
            'Getproduk'     => $Getproduk,
            'rls'           => $rls,
            'TotalU10_5C'   => implode($TotalU10_5C),
            'TotalU11C'     => implode($TotalU11C),
            'TotalU11_5C'   => implode($TotalU11_5C),
            'TotalU12C'     => implode($TotalU12C),
            'TotalU12_5C'   => implode($TotalU12_5C),
            'TotalU13C'     => implode($TotalU13C),
            'TotalU13_5C'   => implode($TotalU13_5C),
            'TotalU1Y'      => implode($TotalU1Y),
            'TotalU1_5Y'    => implode($TotalU1_5Y),
            'TotalU2Y'      => implode($TotalU2Y),
            'TotalU2_5Y'    => implode($TotalU2_5Y),
            'TotalU3Y'      => implode($TotalU3Y),
            'TotalUresult'  => implode($TotalUresult),

            'stokM'         => $stokM,
            'osMold'        => $osMold,

			'jumlahTotalSM' => $jumlahTotalSM,
			
			'totalJumlahRLS'=> $totalJumlahRLS
        ];

		$this->load->view('home', $data);
    }
    
    function editDataProduk($id)
	{
		$vendor 	= $this->input->post('vendor');
		$rel 		= $this->input->post('rel');
		$MC 		= $this->input->post('MC');
		$material 	= $this->input->post('material');
		$U10_5c 	= $this->input->post('10_5c');
		$U11c 		= $this->input->post('11c');
		$U11_5c 	= $this->input->post('11_5c');
		$U12c 		= $this->input->post('12c');
		$U12_5c 	= $this->input->post('12_5c');
		$U13c 		= $this->input->post('13c');
		$U13_5c 	= $this->input->post('13_5c');
		$U1y 		= $this->input->post('1y');
		$U1_5y 		= $this->input->post('1_5y');
		$U2y 		= $this->input->post('2y');
		$U2_5y 		= $this->input->post('2_5y');
        $U3y 		= $this->input->post('3y');
        
        $rel_id     = $this->input->post('rel_id');


        $totalProduk = $U10_5c + $U11c + $U11_5c + $U12c + $U12_5c + $U13c + $U13_5c + $U1y + $U1_5y + $U2y + $U2_5y + $U3y;
        
		$data1 = [
			'vendor'		=> $vendor,
			'kode_material'	=> $MC,
			'material'		=> $material,
			'10_5C'			=> $U10_5c,
			'11C'			=> $U11c,
			'11_5C'			=> $U11_5c,
			'12C'			=> $U12c,
			'12_5C'			=> $U12_5c,
			'13C'			=> $U13c,
			'13_5C'			=> $U13_5c,
			'1Y'			=> $U1y,
			'1_5Y'			=> $U1_5y,
			'2Y'			=> $U2y,
			'2_5Y'			=> $U2_5y,
			'3Y'			=> $U3y,
			'total_produk'	=> $totalProduk
        ];

        $this->m->updateDataProduk($id, $data1);

        $SumTotalUkuran10_5C        = $this->m->SumTotalUkuran($rel_id, '10_5C');
        $SumTotalUkuran11C          = $this->m->SumTotalUkuran($rel_id, '11C');
        $SumTotalUkuran11_5C        = $this->m->SumTotalUkuran($rel_id, '11_5C');
        $SumTotalUkuran12C          = $this->m->SumTotalUkuran($rel_id, '12C');
        $SumTotalUkuran12_5C        = $this->m->SumTotalUkuran($rel_id, '12_5C');
        $SumTotalUkuran13C          = $this->m->SumTotalUkuran($rel_id, '13C');
        $SumTotalUkuran13_5C        = $this->m->SumTotalUkuran($rel_id, '13_5C');
        $SumTotalUkuran1Y           = $this->m->SumTotalUkuran($rel_id, '1Y');
        $SumTotalUkuran1_5Y         = $this->m->SumTotalUkuran($rel_id, '1_5Y');
        $SumTotalUkuran2Y           = $this->m->SumTotalUkuran($rel_id, '2Y');
        $SumTotalUkuran2_5Y         = $this->m->SumTotalUkuran($rel_id, '2_5Y');
        $SumTotalUkuran3Y           = $this->m->SumTotalUkuran($rel_id, '3Y');
        $SumTotalUkuranTotalProduk  = $this->m->SumTotalUkuran($rel_id, 'total_produk');
        
        $data2 = [
            'rel_id'        => $rel_id,
            '10_5C'			=> implode($SumTotalUkuran10_5C),
			'11C'			=> implode($SumTotalUkuran11C),
			'11_5C'			=> implode($SumTotalUkuran11_5C),
			'12C'			=> implode($SumTotalUkuran12C),
			'12_5C'			=> implode($SumTotalUkuran12_5C),
			'13C'			=> implode($SumTotalUkuran13C),
			'13_5C'			=> implode($SumTotalUkuran13_5C),
			'1Y'			=> implode($SumTotalUkuran1Y),
			'1_5Y'			=> implode($SumTotalUkuran1_5Y),
			'2Y'			=> implode($SumTotalUkuran2Y),
			'2_5Y'			=> implode($SumTotalUkuran2_5Y),
			'3Y'			=> implode($SumTotalUkuran3Y),
			'result'	    => implode($SumTotalUkuranTotalProduk)
        ];

        $this->m->updateDataGTotalProduk($rel_id, $data2);
        
        $rumus1 = $this->m->getRumus1($rel_id);
        $rumus2 = $this->m->getOsMold();
        $rumus3 = $this->m->getJumlahTotalSM();

      
        $hasilRumus10_5C    = $rumus1['10_5C'] / ($rumus2['total_osMold'] * $rumus3['10_5C']);
        $hasilRumus11C      = $rumus1['11C'] / ($rumus2['total_osMold'] * $rumus3['11C']);
        $hasilRumus11_5C    = $rumus1['11_5C'] / ($rumus2['total_osMold'] * $rumus3['11_5C']);
        $hasilRumus12C      = $rumus1['12C'] / ($rumus2['total_osMold'] * $rumus3['12C']);
        $hasilRumus12_5C    = $rumus1['12_5C'] / ($rumus2['total_osMold'] * $rumus3['12_5C']);
        $hasilRumus13C      = $rumus1['13C'] / ($rumus2['total_osMold'] * $rumus3['13C']);
        $hasilRumus13_5C    = $rumus1['13_5C'] / ($rumus2['total_osMold'] * $rumus3['13_5C']);
        $hasilRumus1Y       = $rumus1['1Y'] / ($rumus2['total_osMold'] * $rumus3['1Y']);
        $hasilRumus1_5Y     = $rumus1['1_5Y'] / ($rumus2['total_osMold'] * $rumus3['1_5Y']);
        $hasilRumus2Y       = $rumus1['2Y'] / ($rumus2['total_osMold'] * $rumus3['2Y']);
        $hasilRumus2_5Y     = $rumus1['2_5Y'] / ($rumus2['total_osMold'] * $rumus3['2_5Y']);
        $hasilRumus3Y       = $rumus1['3Y'] / ($rumus2['total_osMold'] * $rumus3['3Y']);

        $data3 = [
            'rls_10_5C'			=> round($hasilRumus10_5C, 1),
			'rls_11C'			=> round($hasilRumus11C, 1),
			'rls_11_5C'			=> round($hasilRumus11_5C, 1),
			'rls_12C'			=> round($hasilRumus12C, 1),
			'rls_12_5C'			=> round($hasilRumus12_5C, 1),
			'rls_13C'			=> round($hasilRumus13C, 1),
			'rls_13_5C'			=> round($hasilRumus13_5C, 1),
			'rls_1Y'			=> round($hasilRumus1Y, 1),
			'rls_1_5Y'			=> round($hasilRumus1_5Y, 1),
			'rls_2Y'			=> round($hasilRumus2Y, 1),
			'rls_2_5Y'			=> round($hasilRumus2_5Y, 1),
			'rls_3Y'			=> round($hasilRumus3Y, 1),
        ];

        $this->m->updateRls($rel, $data3);

        $SumJumlahRls_10_5C        = implode($this->m->SumJumlahRls('rls_10_5C'));
        $SumJumlahRls_11C          = implode($this->m->SumJumlahRls('rls_11C'));
        $SumJumlahRls_11_5C        = implode($this->m->SumJumlahRls('rls_11_5C'));
        $SumJumlahRls_12C          = implode($this->m->SumJumlahRls('rls_12C'));
        $SumJumlahRls_12_5C        = implode($this->m->SumJumlahRls('rls_12_5C'));
        $SumJumlahRls_13C          = implode($this->m->SumJumlahRls('rls_13C'));
        $SumJumlahRls_13_5C        = implode($this->m->SumJumlahRls('rls_13_5C'));
        $SumJumlahRls_1Y           = implode($this->m->SumJumlahRls('rls_1Y'));
        $SumJumlahRls_1_5Y         = implode($this->m->SumJumlahRls('rls_1_5Y'));
        $SumJumlahRls_2Y           = implode($this->m->SumJumlahRls('rls_2Y'));
        $SumJumlahRls_2_5Y         = implode($this->m->SumJumlahRls('rls_2_5Y'));
        $SumJumlahRls_3Y           = implode($this->m->SumJumlahRls('rls_3Y'));

        $data4 = [
            'T_10_5C'		=> round($SumJumlahRls_10_5C, 1),
			'T_11C'			=> round($SumJumlahRls_11C, 1),
			'T_11_5C'		=> round($SumJumlahRls_11_5C, 1),
			'T_12C'			=> round($SumJumlahRls_12C, 1),
			'T_12_5C'		=> round($SumJumlahRls_12_5C, 1),
			'T_13C'			=> round($SumJumlahRls_13C, 1),
			'T_13_5C'		=> round($SumJumlahRls_13_5C, 1),
			'T_1Y'			=> round($SumJumlahRls_1Y, 1),
			'T_1_5Y'		=> round($SumJumlahRls_1_5Y, 1),
			'T_2Y'			=> round($SumJumlahRls_2Y, 1),
			't_2_5Y'		=> round($SumJumlahRls_2_5Y, 1),
			't_3Y'			=> round($SumJumlahRls_3Y, 1),
        ];

        $this->m->updateTotalJumlahRls($data4);
          
		$this->session->set_flashdata('berhasil', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<h1>Success! Data Produk berhasil di ubah.</h1>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('home');
    }
    
    function tambahDataProduk()
    {
        $vendor 	= $this->input->post('vendor');
		$MC 		= $this->input->post('MC');
		$material 	= $this->input->post('material');
		$U10_5c 	= $this->input->post('10_5c');
		$U11c 		= $this->input->post('11c');
		$U11_5c 	= $this->input->post('11_5c');
		$U12c 		= $this->input->post('12c');
		$U12_5c 	= $this->input->post('12_5c');
		$U13c 		= $this->input->post('13c');
		$U13_5c 	= $this->input->post('13_5c');
		$U1y 		= $this->input->post('1y');
		$U1_5y 		= $this->input->post('1_5y');
		$U2y 		= $this->input->post('2y');
		$U2_5y 		= $this->input->post('2_5y');
        $U3y 		= $this->input->post('3y');
        
        $rel_id     = $this->input->post('rel_id');


        $totalProduk = $U10_5c + $U11c + $U11_5c + $U12c + $U12_5c + $U13c + $U13_5c + $U1y + $U1_5y + $U2y + $U2_5y + $U3y;
        
		$data1 = [
            'vendor'		=> $vendor,
            'rel_id'        => $rel_id,
			'kode_material'	=> $MC,
			'material'		=> $material,
			'10_5C'			=> $U10_5c,
			'11C'			=> $U11c,
			'11_5C'			=> $U11_5c,
			'12C'			=> $U12c,
			'12_5C'			=> $U12_5c,
			'13C'			=> $U13c,
			'13_5C'			=> $U13_5c,
			'1Y'			=> $U1y,
			'1_5Y'			=> $U1_5y,
			'2Y'			=> $U2y,
			'2_5Y'			=> $U2_5y,
			'3Y'			=> $U3y,
			'total_produk'	=> $totalProduk
		];
		
		$cekTotalProdukRls = $this->m->cekTotalProdukRls($rel_id);

		if ($cekTotalProdukRls == null)
		{
			$data5 = [
				'rel_id'   => $rel_id,
				'10_5C'			=> '',
				'11C'			=> '',
				'11_5C'			=> '',
				'12C'			=> '',
				'12_5C'			=> '',
				'13C'			=> '',
				'13_5C'			=> '',
				'1Y'			=> '',
				'1_5Y'			=> '',
				'2Y'			=> '',
				'2_5Y'			=> '',
				'3Y'			=> '',
				'result'		=> ''
			];

			$this->m->insertGTotalProduk($data5);
		}

        $this->m->tambahDataProduk($data1);

        $SumTotalUkuran10_5C        = $this->m->SumTotalUkuran($rel_id, '10_5C');
        $SumTotalUkuran11C          = $this->m->SumTotalUkuran($rel_id, '11C');
        $SumTotalUkuran11_5C        = $this->m->SumTotalUkuran($rel_id, '11_5C');
        $SumTotalUkuran12C          = $this->m->SumTotalUkuran($rel_id, '12C');
        $SumTotalUkuran12_5C        = $this->m->SumTotalUkuran($rel_id, '12_5C');
        $SumTotalUkuran13C          = $this->m->SumTotalUkuran($rel_id, '13C');
        $SumTotalUkuran13_5C        = $this->m->SumTotalUkuran($rel_id, '13_5C');
        $SumTotalUkuran1Y           = $this->m->SumTotalUkuran($rel_id, '1Y');
        $SumTotalUkuran1_5Y         = $this->m->SumTotalUkuran($rel_id, '1_5Y');
        $SumTotalUkuran2Y           = $this->m->SumTotalUkuran($rel_id, '2Y');
        $SumTotalUkuran2_5Y         = $this->m->SumTotalUkuran($rel_id, '2_5Y');
        $SumTotalUkuran3Y           = $this->m->SumTotalUkuran($rel_id, '3Y');
        $SumTotalUkuranTotalProduk  = $this->m->SumTotalUkuran($rel_id, 'total_produk');
        
        $data2 = [
            'rel_id'        => $rel_id,
            '10_5C'			=> implode($SumTotalUkuran10_5C),
			'11C'			=> implode($SumTotalUkuran11C),
			'11_5C'			=> implode($SumTotalUkuran11_5C),
			'12C'			=> implode($SumTotalUkuran12C),
			'12_5C'			=> implode($SumTotalUkuran12_5C),
			'13C'			=> implode($SumTotalUkuran13C),
			'13_5C'			=> implode($SumTotalUkuran13_5C),
			'1Y'			=> implode($SumTotalUkuran1Y),
			'1_5Y'			=> implode($SumTotalUkuran1_5Y),
			'2Y'			=> implode($SumTotalUkuran2Y),
			'2_5Y'			=> implode($SumTotalUkuran2_5Y),
			'3Y'			=> implode($SumTotalUkuran3Y),
			'result'	=> implode($SumTotalUkuranTotalProduk)
        ];

        $this->m->updateDataGTotalProduk($rel_id, $data2);
        
        $jumlahRls = $this->m->getRls();

        foreach($jumlahRls as $jrls) {

        $rumus1 = $this->m->getRumus1($jrls['id']);
        $rumus2 = $this->m->getOsMold();
        $rumus3 = $this->m->getJumlahTotalSM();

      
        $hasilRumus10_5C    = $rumus1['10_5C'] / ($rumus2['total_osMold'] * $rumus3['10_5C']);
        $hasilRumus11C      = $rumus1['11C'] / ($rumus2['total_osMold'] * $rumus3['11C']);
        $hasilRumus11_5C    = $rumus1['11_5C'] / ($rumus2['total_osMold'] * $rumus3['11_5C']);
        $hasilRumus12C      = $rumus1['12C'] / ($rumus2['total_osMold'] * $rumus3['12C']);
        $hasilRumus12_5C    = $rumus1['12_5C'] / ($rumus2['total_osMold'] * $rumus3['12_5C']);
        $hasilRumus13C      = $rumus1['13C'] / ($rumus2['total_osMold'] * $rumus3['13C']);
        $hasilRumus13_5C    = $rumus1['13_5C'] / ($rumus2['total_osMold'] * $rumus3['13_5C']);
        $hasilRumus1Y       = $rumus1['1Y'] / ($rumus2['total_osMold'] * $rumus3['1Y']);
        $hasilRumus1_5Y     = $rumus1['1_5Y'] / ($rumus2['total_osMold'] * $rumus3['1_5Y']);
        $hasilRumus2Y       = $rumus1['2Y'] / ($rumus2['total_osMold'] * $rumus3['2Y']);
        $hasilRumus2_5Y     = $rumus1['2_5Y'] / ($rumus2['total_osMold'] * $rumus3['2_5Y']);
        $hasilRumus3Y       = $rumus1['3Y'] / ($rumus2['total_osMold'] * $rumus3['3Y']);

        $data3 = [
            'rls_10_5C'			=> round($hasilRumus10_5C, 1),
			'rls_11C'			=> round($hasilRumus11C, 1),
			'rls_11_5C'			=> round($hasilRumus11_5C, 1),
			'rls_12C'			=> round($hasilRumus12C, 1),
			'rls_12_5C'			=> round($hasilRumus12_5C, 1),
			'rls_13C'			=> round($hasilRumus13C, 1),
			'rls_13_5C'			=> round($hasilRumus13_5C, 1),
			'rls_1Y'			=> round($hasilRumus1Y, 1),
			'rls_1_5Y'			=> round($hasilRumus1_5Y, 1),
			'rls_2Y'			=> round($hasilRumus2Y, 1),
			'rls_2_5Y'			=> round($hasilRumus2_5Y, 1),
			'rls_3Y'			=> round($hasilRumus3Y, 1),
        ];

        $this->m->updateRls($jrls['rel'], $data3);

        }

		$this->session->set_flashdata('berhasil', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<h1>Success! Data Produk berhasil di tambahkan.</h1>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('home');
    }

    function hapusDataProduk($id)
    {
        $rel_id = $this->input->post('rel_id');
         $rel = $this->input->post('rel');

        $this->m->hapusDataProduk($id);

        $SumTotalUkuran10_5C        = $this->m->SumTotalUkuran($rel_id, '10_5C');
        $SumTotalUkuran11C          = $this->m->SumTotalUkuran($rel_id, '11C');
        $SumTotalUkuran11_5C        = $this->m->SumTotalUkuran($rel_id, '11_5C');
        $SumTotalUkuran12C          = $this->m->SumTotalUkuran($rel_id, '12C');
        $SumTotalUkuran12_5C        = $this->m->SumTotalUkuran($rel_id, '12_5C');
        $SumTotalUkuran13C          = $this->m->SumTotalUkuran($rel_id, '13C');
        $SumTotalUkuran13_5C        = $this->m->SumTotalUkuran($rel_id, '13_5C');
        $SumTotalUkuran1Y           = $this->m->SumTotalUkuran($rel_id, '1Y');
        $SumTotalUkuran1_5Y         = $this->m->SumTotalUkuran($rel_id, '1_5Y');
        $SumTotalUkuran2Y           = $this->m->SumTotalUkuran($rel_id, '2Y');
        $SumTotalUkuran2_5Y         = $this->m->SumTotalUkuran($rel_id, '2_5Y');
        $SumTotalUkuran3Y           = $this->m->SumTotalUkuran($rel_id, '3Y');
        $SumTotalUkuranTotalProduk  = $this->m->SumTotalUkuran($rel_id, 'total_produk');
        
        $data2 = [
            'rel_id'        => $rel_id,
            '10_5C'			=> implode($SumTotalUkuran10_5C),
			'11C'			=> implode($SumTotalUkuran11C),
			'11_5C'			=> implode($SumTotalUkuran11_5C),
			'12C'			=> implode($SumTotalUkuran12C),
			'12_5C'			=> implode($SumTotalUkuran12_5C),
			'13C'			=> implode($SumTotalUkuran13C),
			'13_5C'			=> implode($SumTotalUkuran13_5C),
			'1Y'			=> implode($SumTotalUkuran1Y),
			'1_5Y'			=> implode($SumTotalUkuran1_5Y),
			'2Y'			=> implode($SumTotalUkuran2Y),
			'2_5Y'			=> implode($SumTotalUkuran2_5Y),
			'3Y'			=> implode($SumTotalUkuran3Y),
			'result'	=> implode($SumTotalUkuranTotalProduk)
        ];

        $this->m->updateDataGTotalProduk($rel_id, $data2);
        
        $rumus1 = $this->m->getRumus1($rel_id);
        $rumus2 = $this->m->getOsMold();
        $rumus3 = $this->m->getJumlahTotalSM();

      
        $hasilRumus10_5C    = $rumus1['10_5C'] / ($rumus2['total_osMold'] * $rumus3['10_5C']);
        $hasilRumus11C      = $rumus1['11C'] / ($rumus2['total_osMold'] * $rumus3['11C']);
        $hasilRumus11_5C    = $rumus1['11_5C'] / ($rumus2['total_osMold'] * $rumus3['11_5C']);
        $hasilRumus12C      = $rumus1['12C'] / ($rumus2['total_osMold'] * $rumus3['12C']);
        $hasilRumus12_5C    = $rumus1['12_5C'] / ($rumus2['total_osMold'] * $rumus3['12_5C']);
        $hasilRumus13C      = $rumus1['13C'] / ($rumus2['total_osMold'] * $rumus3['13C']);
        $hasilRumus13_5C    = $rumus1['13_5C'] / ($rumus2['total_osMold'] * $rumus3['13_5C']);
        $hasilRumus1Y       = $rumus1['1Y'] / ($rumus2['total_osMold'] * $rumus3['1Y']);
        $hasilRumus1_5Y     = $rumus1['1_5Y'] / ($rumus2['total_osMold'] * $rumus3['1_5Y']);
        $hasilRumus2Y       = $rumus1['2Y'] / ($rumus2['total_osMold'] * $rumus3['2Y']);
        $hasilRumus2_5Y     = $rumus1['2_5Y'] / ($rumus2['total_osMold'] * $rumus3['2_5Y']);
        $hasilRumus3Y       = $rumus1['3Y'] / ($rumus2['total_osMold'] * $rumus3['3Y']);

        $data3 = [
            'rls_10_5C'			=> round($hasilRumus10_5C, 1),
			'rls_11C'			=> round($hasilRumus11C, 1),
			'rls_11_5C'			=> round($hasilRumus11_5C, 1),
			'rls_12C'			=> round($hasilRumus12C, 1),
			'rls_12_5C'			=> round($hasilRumus12_5C, 1),
			'rls_13C'			=> round($hasilRumus13C, 1),
			'rls_13_5C'			=> round($hasilRumus13_5C, 1),
			'rls_1Y'			=> round($hasilRumus1Y, 1),
			'rls_1_5Y'			=> round($hasilRumus1_5Y, 1),
			'rls_2Y'			=> round($hasilRumus2Y, 1),
			'rls_2_5Y'			=> round($hasilRumus2_5Y, 1),
			'rls_3Y'			=> round($hasilRumus3Y, 1),
        ];

        $this->m->updateRls($rel, $data3);
          
        $SumJumlahRls_10_5C        = implode($this->m->SumJumlahRls('rls_10_5C'));
        $SumJumlahRls_11C          = implode($this->m->SumJumlahRls('rls_11C'));
        $SumJumlahRls_11_5C        = implode($this->m->SumJumlahRls('rls_11_5C'));
        $SumJumlahRls_12C          = implode($this->m->SumJumlahRls('rls_12C'));
        $SumJumlahRls_12_5C        = implode($this->m->SumJumlahRls('rls_12_5C'));
        $SumJumlahRls_13C          = implode($this->m->SumJumlahRls('rls_13C'));
        $SumJumlahRls_13_5C        = implode($this->m->SumJumlahRls('rls_13_5C'));
        $SumJumlahRls_1Y           = implode($this->m->SumJumlahRls('rls_1Y'));
        $SumJumlahRls_1_5Y         = implode($this->m->SumJumlahRls('rls_1_5Y'));
        $SumJumlahRls_2Y           = implode($this->m->SumJumlahRls('rls_2Y'));
        $SumJumlahRls_2_5Y         = implode($this->m->SumJumlahRls('rls_2_5Y'));
        $SumJumlahRls_3Y           = implode($this->m->SumJumlahRls('rls_3Y'));

        $data4 = [
            'T_10_5C'		=> round($SumJumlahRls_10_5C, 1),
			'T_11C'			=> round($SumJumlahRls_11C, 1),
			'T_11_5C'		=> round($SumJumlahRls_11_5C, 1),
			'T_12C'			=> round($SumJumlahRls_12C, 1),
			'T_12_5C'		=> round($SumJumlahRls_12_5C, 1),
			'T_13C'			=> round($SumJumlahRls_13C, 1),
			'T_13_5C'		=> round($SumJumlahRls_13_5C, 1),
			'T_1Y'			=> round($SumJumlahRls_1Y, 1),
			'T_1_5Y'		=> round($SumJumlahRls_1_5Y, 1),
			'T_2Y'			=> round($SumJumlahRls_2Y, 1),
			't_2_5Y'		=> round($SumJumlahRls_2_5Y, 1),
			't_3Y'			=> round($SumJumlahRls_3Y, 1),
        ];

        $this->m->updateTotalJumlahRls($data4);

		$this->session->set_flashdata('berhasil', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<h1>Success! Data Produk berhasil di hapus.</h1>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('home');
    }

    function editDataStokMold($id)
	{
        $namaStok   = $this->input->post('namaStok');
		$U10_5c 	= $this->input->post('10_5c');
		$U11c 		= $this->input->post('11c');
		$U11_5c 	= $this->input->post('11_5c');
		$U12c 		= $this->input->post('12c');
		$U12_5c 	= $this->input->post('12_5c');
		$U13c 		= $this->input->post('13c');
		$U13_5c 	= $this->input->post('13_5c');
		$U1y 		= $this->input->post('1y');
		$U1_5y 		= $this->input->post('1_5y');
		$U2y 		= $this->input->post('2y');
		$U2_5y 		= $this->input->post('2_5y');
		$U3y 		= $this->input->post('3y');

		$totalStok = $U10_5c + $U11c + $U11_5c + $U12c + $U12_5c + $U13c + $U13_5c + $U1y + $U1_5y + $U2y + $U2_5y + $U3y;

		$data1 = [
            'nama_stok' => $namaStok,
			'S_10_5C'	=> $U10_5c,
			'S_11C'		=> $U11c,
			'S_11_5C'	=> $U11_5c,
			'S_12C'		=> $U12c,
			'S_12_5C'	=> $U12_5c,
			'S_13C'		=> $U13c,
			'S_13_5C'	=> $U13_5c,
			'S_1Y'		=> $U1y,
			'S_1_5Y'	=> $U1_5y,
			'S_2Y'		=> $U2y,
			'S_2_5Y'	=> $U2_5y,
			'S_3Y'		=> $U3y,
			'total'		=> $totalStok
		];

        $this->m->updateStokMold($id, $data1);
        
        $TS10_5C 	= $this->m->SumTotalStokMold('S_10_5C');
		$TS11C 		= $this->m->SumTotalStokMold('S_11C');
		$TS11_5C 	= $this->m->SumTotalStokMold('S_11_5C');
		$TS12C 		= $this->m->SumTotalStokMold('S_12C');
		$TS12_5C 	= $this->m->SumTotalStokMold('S_12_5C');
		$TS13C 		= $this->m->SumTotalStokMold('S_13C');
		$TS13_5C 	= $this->m->SumTotalStokMold('S_13_5C');
		$TS1Y 		= $this->m->SumTotalStokMold('S_1Y');
		$TS1_5Y 	= $this->m->SumTotalStokMold('S_1_5Y');
		$TS2Y 		= $this->m->SumTotalStokMold('S_2Y');
		$TS2_5Y 	= $this->m->SumTotalStokMold('S_2_5Y');
        $TS3Y 		= $this->m->SumTotalStokMold('S_3Y');
        $TStotal 	= $this->m->SumTotalStokMold('total');


		$data2 = [
			'10_5C'	    => implode($TS10_5C),
			'11C'		=> implode($TS11C),
			'11_5C'	    => implode($TS11_5C),
			'12C'		=> implode($TS12C),
			'12_5C'	    => implode($TS12_5C),
			'13C'		=> implode($TS13C),
			'13_5C'	    => implode($TS13_5C),
			'1Y'		=> implode($TS1Y),
			'1_5Y'	    => implode($TS1_5Y),
			'2Y'		=> implode($TS2Y),
			'2_5Y'  	=> implode($TS2_5Y),
			'3Y'		=> implode($TS3Y),
			'total'		=> implode($TStotal)
        ];
        
        $this->m->updateJumlahTotalStokMold($data2);

        $jumlahRls = $this->m->getRls();

        foreach($jumlahRls as $jrls) {

        $rumus1 = $this->m->getRumus1($jrls['id']);
        $rumus2 = $this->m->getOsMold();
        $rumus3 = $this->m->getJumlahTotalSM();

      
        $hasilRumus10_5C    = $rumus1['10_5C'] / ($rumus2['total_osMold'] * $rumus3['10_5C']);
        $hasilRumus11C      = $rumus1['11C'] / ($rumus2['total_osMold'] * $rumus3['11C']);
        $hasilRumus11_5C    = $rumus1['11_5C'] / ($rumus2['total_osMold'] * $rumus3['11_5C']);
        $hasilRumus12C      = $rumus1['12C'] / ($rumus2['total_osMold'] * $rumus3['12C']);
        $hasilRumus12_5C    = $rumus1['12_5C'] / ($rumus2['total_osMold'] * $rumus3['12_5C']);
        $hasilRumus13C      = $rumus1['13C'] / ($rumus2['total_osMold'] * $rumus3['13C']);
        $hasilRumus13_5C    = $rumus1['13_5C'] / ($rumus2['total_osMold'] * $rumus3['13_5C']);
        $hasilRumus1Y       = $rumus1['1Y'] / ($rumus2['total_osMold'] * $rumus3['1Y']);
        $hasilRumus1_5Y     = $rumus1['1_5Y'] / ($rumus2['total_osMold'] * $rumus3['1_5Y']);
        $hasilRumus2Y       = $rumus1['2Y'] / ($rumus2['total_osMold'] * $rumus3['2Y']);
        $hasilRumus2_5Y     = $rumus1['2_5Y'] / ($rumus2['total_osMold'] * $rumus3['2_5Y']);
        $hasilRumus3Y       = $rumus1['3Y'] / ($rumus2['total_osMold'] * $rumus3['3Y']);

        $data3 = [
            'rls_10_5C'			=> round($hasilRumus10_5C, 1),
			'rls_11C'			=> round($hasilRumus11C, 1),
			'rls_11_5C'			=> round($hasilRumus11_5C, 1),
			'rls_12C'			=> round($hasilRumus12C, 1),
			'rls_12_5C'			=> round($hasilRumus12_5C, 1),
			'rls_13C'			=> round($hasilRumus13C, 1),
			'rls_13_5C'			=> round($hasilRumus13_5C, 1),
			'rls_1Y'			=> round($hasilRumus1Y, 1),
			'rls_1_5Y'			=> round($hasilRumus1_5Y, 1),
			'rls_2Y'			=> round($hasilRumus2Y, 1),
			'rls_2_5Y'			=> round($hasilRumus2_5Y, 1),
			'rls_3Y'			=> round($hasilRumus3Y, 1),
        ];

        $this->m->updateRls($jrls['rel'], $data3);

        }

		$this->session->set_flashdata('berhasil', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<h1>Success! Data Stok Mold berhasil di ubah.</h1>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('home');
    }
    
    function editOsMold($id)
	{
		$total_osMold = $this->input->post('OsMold');

		$data = [
			'total_osMold' => $total_osMold
		];

        $this->m->updateOsMold($id, $data);

        $jumlahRls = $this->m->getRls();
        
        foreach($jumlahRls as $jrls) {

        $rumus1 = $this->m->getRumus1($jrls['id']);
        $rumus2 = $this->m->getOsMold();
        $rumus3 = $this->m->getJumlahTotalSM();

      
        $hasilRumus10_5C    = $rumus1['10_5C'] / ($rumus2['total_osMold'] * $rumus3['10_5C']);
        $hasilRumus11C      = $rumus1['11C'] / ($rumus2['total_osMold'] * $rumus3['11C']);
        $hasilRumus11_5C    = $rumus1['11_5C'] / ($rumus2['total_osMold'] * $rumus3['11_5C']);
        $hasilRumus12C      = $rumus1['12C'] / ($rumus2['total_osMold'] * $rumus3['12C']);
        $hasilRumus12_5C    = $rumus1['12_5C'] / ($rumus2['total_osMold'] * $rumus3['12_5C']);
        $hasilRumus13C      = $rumus1['13C'] / ($rumus2['total_osMold'] * $rumus3['13C']);
        $hasilRumus13_5C    = $rumus1['13_5C'] / ($rumus2['total_osMold'] * $rumus3['13_5C']);
        $hasilRumus1Y       = $rumus1['1Y'] / ($rumus2['total_osMold'] * $rumus3['1Y']);
        $hasilRumus1_5Y     = $rumus1['1_5Y'] / ($rumus2['total_osMold'] * $rumus3['1_5Y']);
        $hasilRumus2Y       = $rumus1['2Y'] / ($rumus2['total_osMold'] * $rumus3['2Y']);
        $hasilRumus2_5Y     = $rumus1['2_5Y'] / ($rumus2['total_osMold'] * $rumus3['2_5Y']);
        $hasilRumus3Y       = $rumus1['3Y'] / ($rumus2['total_osMold'] * $rumus3['3Y']);

        $data3 = [
            'rls_10_5C'			=> round($hasilRumus10_5C, 1),
			'rls_11C'			=> round($hasilRumus11C, 1),
			'rls_11_5C'			=> round($hasilRumus11_5C, 1),
			'rls_12C'			=> round($hasilRumus12C, 1),
			'rls_12_5C'			=> round($hasilRumus12_5C, 1),
			'rls_13C'			=> round($hasilRumus13C, 1),
			'rls_13_5C'			=> round($hasilRumus13_5C, 1),
			'rls_1Y'			=> round($hasilRumus1Y, 1),
			'rls_1_5Y'			=> round($hasilRumus1_5Y, 1),
			'rls_2Y'			=> round($hasilRumus2Y, 1),
			'rls_2_5Y'			=> round($hasilRumus2_5Y, 1),
			'rls_3Y'			=> round($hasilRumus3Y, 1),
        ];

        $this->m->updateRls($jrls['rel'], $data3);

        }

		$this->session->set_flashdata('berhasil', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<h1>Success! Jumlah OsMold Prs/Day berhasil di ubah.</h1>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('home');
    }
    
    function hapusDataStokMold($id)
    {
        $this->m->hapusDataStokMold($id);

        $TS10_5C 	= $this->m->SumTotalStokMold('S_10_5C');
		$TS11C 		= $this->m->SumTotalStokMold('S_11C');
		$TS11_5C 	= $this->m->SumTotalStokMold('S_11_5C');
		$TS12C 		= $this->m->SumTotalStokMold('S_12C');
		$TS12_5C 	= $this->m->SumTotalStokMold('S_12_5C');
		$TS13C 		= $this->m->SumTotalStokMold('S_13C');
		$TS13_5C 	= $this->m->SumTotalStokMold('S_13_5C');
		$TS1Y 		= $this->m->SumTotalStokMold('S_1Y');
		$TS1_5Y 	= $this->m->SumTotalStokMold('S_1_5Y');
		$TS2Y 		= $this->m->SumTotalStokMold('S_2Y');
		$TS2_5Y 	= $this->m->SumTotalStokMold('S_2_5Y');
        $TS3Y 		= $this->m->SumTotalStokMold('S_3Y');
        $TStotal 	= $this->m->SumTotalStokMold('total');


		$data2 = [
			'10_5C'	    => implode($TS10_5C),
			'11C'		=> implode($TS11C),
			'11_5C'	    => implode($TS11_5C),
			'12C'		=> implode($TS12C),
			'12_5C'	    => implode($TS12_5C),
			'13C'		=> implode($TS13C),
			'13_5C'	    => implode($TS13_5C),
			'1Y'		=> implode($TS1Y),
			'1_5Y'	    => implode($TS1_5Y),
			'2Y'		=> implode($TS2Y),
			'2_5Y'  	=> implode($TS2_5Y),
			'3Y'		=> implode($TS3Y),
			'total'		=> implode($TStotal)
        ];
        
        $this->m->updateJumlahTotalStokMold($data2);

        $jumlahRls = $this->m->getRls();

        foreach($jumlahRls as $jrls) {

        $rumus1 = $this->m->getRumus1($jrls['id']);
        $rumus2 = $this->m->getOsMold();
        $rumus3 = $this->m->getJumlahTotalSM();

      
        $hasilRumus10_5C    = $rumus1['10_5C'] / ($rumus2['total_osMold'] * $rumus3['10_5C']);
        $hasilRumus11C      = $rumus1['11C'] / ($rumus2['total_osMold'] * $rumus3['11C']);
        $hasilRumus11_5C    = $rumus1['11_5C'] / ($rumus2['total_osMold'] * $rumus3['11_5C']);
        $hasilRumus12C      = $rumus1['12C'] / ($rumus2['total_osMold'] * $rumus3['12C']);
        $hasilRumus12_5C    = $rumus1['12_5C'] / ($rumus2['total_osMold'] * $rumus3['12_5C']);
        $hasilRumus13C      = $rumus1['13C'] / ($rumus2['total_osMold'] * $rumus3['13C']);
        $hasilRumus13_5C    = $rumus1['13_5C'] / ($rumus2['total_osMold'] * $rumus3['13_5C']);
        $hasilRumus1Y       = $rumus1['1Y'] / ($rumus2['total_osMold'] * $rumus3['1Y']);
        $hasilRumus1_5Y     = $rumus1['1_5Y'] / ($rumus2['total_osMold'] * $rumus3['1_5Y']);
        $hasilRumus2Y       = $rumus1['2Y'] / ($rumus2['total_osMold'] * $rumus3['2Y']);
        $hasilRumus2_5Y     = $rumus1['2_5Y'] / ($rumus2['total_osMold'] * $rumus3['2_5Y']);
        $hasilRumus3Y       = $rumus1['3Y'] / ($rumus2['total_osMold'] * $rumus3['3Y']);

        $data3 = [
            'rls_10_5C'			=> round($hasilRumus10_5C, 1),
			'rls_11C'			=> round($hasilRumus11C, 1),
			'rls_11_5C'			=> round($hasilRumus11_5C, 1),
			'rls_12C'			=> round($hasilRumus12C, 1),
			'rls_12_5C'			=> round($hasilRumus12_5C, 1),
			'rls_13C'			=> round($hasilRumus13C, 1),
			'rls_13_5C'			=> round($hasilRumus13_5C, 1),
			'rls_1Y'			=> round($hasilRumus1Y, 1),
			'rls_1_5Y'			=> round($hasilRumus1_5Y, 1),
			'rls_2Y'			=> round($hasilRumus2Y, 1),
			'rls_2_5Y'			=> round($hasilRumus2_5Y, 1),
			'rls_3Y'			=> round($hasilRumus3Y, 1),
        ];

        $this->m->updateRls($jrls['rel'], $data3);

        }

		$this->session->set_flashdata('berhasil', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<h1>Success! Data Stok Mold berhasil di hapus.</h1>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('home');
    }

    function tambahDataStokMold()
    {
        $namaStok   = $this->input->post('namaStok');
		$U10_5c 	= $this->input->post('10_5c');
		$U11c 		= $this->input->post('11c');
		$U11_5c 	= $this->input->post('11_5c');
		$U12c 		= $this->input->post('12c');
		$U12_5c 	= $this->input->post('12_5c');
		$U13c 		= $this->input->post('13c');
		$U13_5c 	= $this->input->post('13_5c');
		$U1y 		= $this->input->post('1y');
		$U1_5y 		= $this->input->post('1_5y');
		$U2y 		= $this->input->post('2y');
		$U2_5y 		= $this->input->post('2_5y');
		$U3y 		= $this->input->post('3y');

		$totalStok = $U10_5c + $U11c + $U11_5c + $U12c + $U12_5c + $U13c + $U13_5c + $U1y + $U1_5y + $U2y + $U2_5y + $U3y;

		$data1 = [
            'nama_stok' => $namaStok,
			'S_10_5C'	=> $U10_5c,
			'S_11C'		=> $U11c,
			'S_11_5C'	=> $U11_5c,
			'S_12C'		=> $U12c,
			'S_12_5C'	=> $U12_5c,
			'S_13C'		=> $U13c,
			'S_13_5C'	=> $U13_5c,
			'S_1Y'		=> $U1y,
			'S_1_5Y'	=> $U1_5y,
			'S_2Y'		=> $U2y,
			'S_2_5Y'	=> $U2_5y,
			'S_3Y'		=> $U3y,
			'total'		=> $totalStok
		];

        $this->m->tambahStokMold($data1);
        
        $TS10_5C 	= $this->m->SumTotalStokMold('S_10_5C');
		$TS11C 		= $this->m->SumTotalStokMold('S_11C');
		$TS11_5C 	= $this->m->SumTotalStokMold('S_11_5C');
		$TS12C 		= $this->m->SumTotalStokMold('S_12C');
		$TS12_5C 	= $this->m->SumTotalStokMold('S_12_5C');
		$TS13C 		= $this->m->SumTotalStokMold('S_13C');
		$TS13_5C 	= $this->m->SumTotalStokMold('S_13_5C');
		$TS1Y 		= $this->m->SumTotalStokMold('S_1Y');
		$TS1_5Y 	= $this->m->SumTotalStokMold('S_1_5Y');
		$TS2Y 		= $this->m->SumTotalStokMold('S_2Y');
		$TS2_5Y 	= $this->m->SumTotalStokMold('S_2_5Y');
        $TS3Y 		= $this->m->SumTotalStokMold('S_3Y');
        $TStotal 	= $this->m->SumTotalStokMold('total');


		$data2 = [
			'10_5C'	    => implode($TS10_5C),
			'11C'		=> implode($TS11C),
			'11_5C'	    => implode($TS11_5C),
			'12C'		=> implode($TS12C),
			'12_5C'	    => implode($TS12_5C),
			'13C'		=> implode($TS13C),
			'13_5C'	    => implode($TS13_5C),
			'1Y'		=> implode($TS1Y),
			'1_5Y'	    => implode($TS1_5Y),
			'2Y'		=> implode($TS2Y),
			'2_5Y'  	=> implode($TS2_5Y),
			'3Y'		=> implode($TS3Y),
			'total'		=> implode($TStotal)
        ];
        
        $this->m->updateJumlahTotalStokMold($data2);

        $jumlahRls = $this->m->getRls();

        foreach($jumlahRls as $jrls) {

        $rumus1 = $this->m->getRumus1($jrls['id']);
        $rumus2 = $this->m->getOsMold();
        $rumus3 = $this->m->getJumlahTotalSM();

      
        $hasilRumus10_5C    = $rumus1['10_5C'] / ($rumus2['total_osMold'] * $rumus3['10_5C']);
        $hasilRumus11C      = $rumus1['11C'] / ($rumus2['total_osMold'] * $rumus3['11C']);
        $hasilRumus11_5C    = $rumus1['11_5C'] / ($rumus2['total_osMold'] * $rumus3['11_5C']);
        $hasilRumus12C      = $rumus1['12C'] / ($rumus2['total_osMold'] * $rumus3['12C']);
        $hasilRumus12_5C    = $rumus1['12_5C'] / ($rumus2['total_osMold'] * $rumus3['12_5C']);
        $hasilRumus13C      = $rumus1['13C'] / ($rumus2['total_osMold'] * $rumus3['13C']);
        $hasilRumus13_5C    = $rumus1['13_5C'] / ($rumus2['total_osMold'] * $rumus3['13_5C']);
        $hasilRumus1Y       = $rumus1['1Y'] / ($rumus2['total_osMold'] * $rumus3['1Y']);
        $hasilRumus1_5Y     = $rumus1['1_5Y'] / ($rumus2['total_osMold'] * $rumus3['1_5Y']);
        $hasilRumus2Y       = $rumus1['2Y'] / ($rumus2['total_osMold'] * $rumus3['2Y']);
        $hasilRumus2_5Y     = $rumus1['2_5Y'] / ($rumus2['total_osMold'] * $rumus3['2_5Y']);
        $hasilRumus3Y       = $rumus1['3Y'] / ($rumus2['total_osMold'] * $rumus3['3Y']);

        $data3 = [
            'rls_10_5C'			=> round($hasilRumus10_5C, 1),
			'rls_11C'			=> round($hasilRumus11C, 1),
			'rls_11_5C'			=> round($hasilRumus11_5C, 1),
			'rls_12C'			=> round($hasilRumus12C, 1),
			'rls_12_5C'			=> round($hasilRumus12_5C, 1),
			'rls_13C'			=> round($hasilRumus13C, 1),
			'rls_13_5C'			=> round($hasilRumus13_5C, 1),
			'rls_1Y'			=> round($hasilRumus1Y, 1),
			'rls_1_5Y'			=> round($hasilRumus1_5Y, 1),
			'rls_2Y'			=> round($hasilRumus2Y, 1),
			'rls_2_5Y'			=> round($hasilRumus2_5Y, 1),
			'rls_3Y'			=> round($hasilRumus3Y, 1),
        ];

        $this->m->updateRls($jrls['rel'], $data3);

        }

		$this->session->set_flashdata('berhasil', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<h1>Success! Data Stok Mold berhasil di tambahkan.</h1>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('home');
	}
	
	function tambahrel()
	{
		$getRls  = $this->m->getRls();

		$data = [
			'getRls'	=> $getRls
		];

		$this->load->view('rel', $data);
	}

	function addRel()
	{
		$rel	= $this->input->post('rel');
		$total 	= $this->input->post('total');

		$data = [
			'rel'		=> $rel,
			'total_rel'	=> $total
		];

		$this->m->insertRel($data);
		$this->session->set_flashdata('berhasil', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<h1>Success! Data Rel berhasil di tambahkan.</h1>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('home/tambahrel');
	}

	function editRel($id)
	{
		$rel	= $this->input->post('rel');
		$total 	= $this->input->post('total');

		$data = [
			'rel'		=> $rel,
			'total_rel'	=> $total
		];

		$this->m->updateRel($id, $data);
		$this->session->set_flashdata('berhasil', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<h1>Success! Data Rel berhasil di ubah.</h1>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('home/tambahrel');
	}

	function dellRel($id)
	{

		$this->m->dellRel($id, $data);
		$this->session->set_flashdata('berhasil', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<h1>Success! Data Rel berhasil di hapus.</h1>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('home/tambahrel');
	}

	function cetakPDF()
	{
		$Getproduk      = $this->m->getTotalDataProduk();
        $rls            = $this->m->getRls();

        $TotalU10_5C    = $this->m->SumGTotalProduk('10_5C');
        $TotalU11C      = $this->m->SumGTotalProduk('11C');
        $TotalU11_5C    = $this->m->SumGTotalProduk('11_5C');
        $TotalU12C      = $this->m->SumGTotalProduk('12C');
        $TotalU12_5C    = $this->m->SumGTotalProduk('12_5C');
        $TotalU13C      = $this->m->SumGTotalProduk('13C');
        $TotalU13_5C    = $this->m->SumGTotalProduk('13_5C');
        $TotalU1Y       = $this->m->SumGTotalProduk('1Y');
        $TotalU1_5Y     = $this->m->SumGTotalProduk('1_5Y');
        $TotalU2Y       = $this->m->SumGTotalProduk('2Y');
        $TotalU2_5Y     = $this->m->SumGTotalProduk('2_5Y');
        $TotalU3Y       = $this->m->SumGTotalProduk('3Y');
        $TotalUresult   = $this->m->SumGTotalProduk('result');

        $stokM			= $this->m->getStokMold();
        $osMold			= $this->m->getOsMold();

		$jumlahTotalSM  = $this->m->getJumlahTotalSM();
		
		$totalJumlahRLS = $this->m->getTotalJumlahRls();


        $data = [
            'Getproduk'     => $Getproduk,
            'rls'           => $rls,
            'TotalU10_5C'   => implode($TotalU10_5C),
            'TotalU11C'     => implode($TotalU11C),
            'TotalU11_5C'   => implode($TotalU11_5C),
            'TotalU12C'     => implode($TotalU12C),
            'TotalU12_5C'   => implode($TotalU12_5C),
            'TotalU13C'     => implode($TotalU13C),
            'TotalU13_5C'   => implode($TotalU13_5C),
            'TotalU1Y'      => implode($TotalU1Y),
            'TotalU1_5Y'    => implode($TotalU1_5Y),
            'TotalU2Y'      => implode($TotalU2Y),
            'TotalU2_5Y'    => implode($TotalU2_5Y),
            'TotalU3Y'      => implode($TotalU3Y),
            'TotalUresult'  => implode($TotalUresult),

            'stokM'         => $stokM,
            'osMold'        => $osMold,

			'jumlahTotalSM' => $jumlahTotalSM,
			
			'totalJumlahRLS'=> $totalJumlahRLS
        ];


		$html = $this->load->view('cetakPDF', $data, true);

		$mpdf = new \Mpdf\Mpdf(['format' => 'A4']);

		// Write some HTML code:
		$mpdf->AddPage('L');
		$mpdf->WriteHTML($html);

		// Output a PDF file directly to the browser
		$mpdf->Output('CALCULATION IP PRODUCTION CITY TRAINER.pdf', 'D');
	}

}
