<?php defined('BASEPATH') OR exit('No direct script access allowed');

include( "absmain/mlLibrary.php" );
include( "absmain/mlotiapi.php" );


class Test extends CI_Controller
{
	public function __construct()
    {
		parent::__construct();

        $this->load->library('GenPDF');
	}

	public function index(){
		echo "Hola Test";
	}

	public function verPDF(){
		$html = "Hola Fred";
		$this->genpdf->ActaNew($html);
	}

	public function ActaNew(){
        $this->genpdf->Prueba();
    }
}
