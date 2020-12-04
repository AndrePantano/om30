<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente_Model extends CI_Model{

	private $table = "paciente";
	private $num_cpf;
	private $num_cns;
	private $nom_pacien;
	private $dat_nascim;
	private $nom_mae;
	private $num_cep;
	private $des_lograd;
	private $des_comple;
	private $des_bairro;
	private $des_cidade;
	private $des_uf;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	/*
	* setters
	*/
	
	public function set_seq_pacien($seq_pacien){$this->seq_pacien = $seq_pacien;}
	public function set_num_cpf($num_cpf){$this->num_cpf = $num_cpf;}
	public function set_num_cns($num_cns){$this->num_cns = $num_cns;}
	public function set_nom_pacien($nom_pacien){$this->nom_pacien = $nom_pacien;}
	public function set_dat_nascim($dat_nascim){$this->dat_nascim = $dat_nascim;}
	public function set_nom_mae($nom_mae){$this->nom_mae = $nom_mae;}	
	public function set_num_cep($num_cep){$this->num_cep =  $num_cep;}
	public function set_des_lograd($des_lograd){$this->des_lograd = $des_lograd;}
	public function set_des_comple($des_comple){$this->des_comple = $des_comple;}
	public function set_des_bairro($des_bairro){$this->des_bairro = $des_bairro;}
	public function set_des_cidade($des_cidade){$this->des_cidade = $des_cidade;}
	public function set_des_uf($des_uf){$this->des_uf = $des_uf;}
	
	/*
	* getters
	*/	
	
	public function get_seq_pacien(){return $this->seq_pacien;}
	public function get_num_cpf(){return str_replace("-","", str_replace(".","", $this->num_cpf));}
	public function get_num_cpf_view(){return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $this->num_cpf);}
	public function get_num_cns(){return $this->num_cns;}
	public function get_nom_pacien(){return $this->nom_pacien;}
	public function get_dat_nascim(){return $this->dat_nascim;}
	public function get_dat_nascim_view(){return date("d/m/Y", strtotime($this->dat_nascim));}
	public function get_nom_mae(){return $this->nom_mae;}
	public function get_num_cep(){return str_replace("-","", $this->num_cep);}
	public function get_num_cep_view(){return preg_replace("/(\d{5})(\d{3})/", "\$1-\$2", $this->num_cep);}
	public function get_des_lograd(){return $this->des_lograd;}
	public function get_des_comple(){return $this->des_comple;}
	public function get_des_bairro(){return $this->des_bairro;}
	public function get_des_cidade(){return $this->des_cidade;}
	public function get_des_uf(){return $this->des_uf;}

	public function insert()
	{
		// checa a duplicidade de cpf
		$res = $this->db->where("num_cpf", $this->get_num_cpf())->get($this->table);

		if($res->num_rows() > 0) throw new Exception("Este CPF encontra-se cadastrado!", 1);

		// checa a duplicidade de cns
		$res = $this->db->where("num_cns", $this->get_num_cns())->get($this->table);
		
		if($res->num_rows() > 0) throw new Exception("Este CNS encontra-se cadastrado!", 1);


		!is_null($this->get_num_cpf())		? $data["num_cpf"] 			= 	$this->get_num_cpf() 		: '';
		!is_null($this->get_num_cns())		? $data["num_cns"] 			= 	$this->get_num_cns() 		: '';
		!is_null($this->get_nom_pacien())	? $data["nom_pacien"] 		= 	$this->get_nom_pacien() 	: '';
		!is_null($this->get_dat_nascim())	? $data["dat_nascim"] 		= 	$this->get_dat_nascim() 	: '';
		!is_null($this->get_nom_mae())		? $data["nom_mae"] 			=	$this->get_nom_mae() 		: '';
		!is_null($this->get_num_cep())		? $data["num_cep"] 			= 	$this->get_num_cep() 		: '';
		!is_null($this->get_des_lograd())	? $data["des_lograd"] 		= 	$this->get_des_lograd() 	: '';
		!is_null($this->get_des_comple())	? $data["des_comple"] 		= 	$this->get_des_comple() 	: '';
		!is_null($this->get_des_bairro())	? $data["des_bairro"] 		= 	$this->get_des_bairro() 	: '';
		!is_null($this->get_des_cidade())	? $data["des_cidade"] 		= 	$this->get_des_cidade() 	: '';
		!is_null($this->get_des_uf())		? $data["des_uf"] 			= 	$this->get_des_uf() 		: '';
		
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update()
	{
		!is_null($this->get_num_cpf())		? $this->db->set("num_cpf", 	 	$this->get_num_cpf()) 		: '';
		!is_null($this->get_num_cns())		? $this->db->set("num_cns", 	 	$this->get_num_cns()) 		: '';
		!is_null($this->get_nom_pacien())	? $this->db->set("nom_pacien", 	 	$this->get_nom_pacien()) 	: '';
		!is_null($this->get_dat_nascim())	? $this->db->set("dat_nascim", 	 	$this->get_dat_nascim()) 	: '';
		!is_null($this->get_nom_mae())		? $this->db->set("nom_mae",			$this->get_nom_mae()) 		: '';
		!is_null($this->get_num_cep())		? $this->db->set("num_cep", 	 	$this->get_num_cep()) 		: '';
		!is_null($this->get_des_lograd())	? $this->db->set("des_lograd", 	 	$this->get_des_lograd()) 	: '';
		!is_null($this->get_des_comple())	? $this->db->set("des_comple", 	 	$this->get_des_comple()) 	: '';
		!is_null($this->get_des_bairro())	? $this->db->set("des_bairro", 	 	$this->get_des_bairro()) 	: '';
		!is_null($this->get_des_cidade())	? $this->db->set("des_cidade", 	 	$this->get_des_cidade()) 	: '';
		!is_null($this->get_des_uf())		? $this->db->set("des_uf", 		 	$this->get_des_uf()) 		: '';

		$this->db->where('seq_checkl', $this->get_seq_checkl());
		$this->db->update($this->table);

	}

	public function select_all()
	{
		$res = $this->db->get($this->table);

		$pacientes = array();

		if($res->num_rows())
		{			
			foreach ($res->result_array() as $registro)
			{
				$paciente = new $this->Paciente_Model();
				$paciente->set_seq_pacien($registro["seq_pacien"]);
				$paciente->set_num_cpf($registro["num_cpf"]);
				$paciente->set_num_cns($registro["num_cns"]);
				$paciente->set_nom_pacien($registro["nom_pacien"]);
				$paciente->set_dat_nascim($registro["dat_nascim"]);
				$paciente->set_nom_mae($registro["nom_mae"]);
				$paciente->set_num_cep($registro["num_cep"]);
				$paciente->set_des_lograd($registro["des_lograd"]);
				$paciente->set_des_comple($registro["des_comple"]);
				$paciente->set_des_bairro($registro["des_bairro"]);
				$paciente->set_des_cidade($registro["des_cidade"]);
				$paciente->set_des_uf($registro["des_uf"]);
				array_push($pacientes, $paciente);
			}
		}

		return $pacientes;
	}
}