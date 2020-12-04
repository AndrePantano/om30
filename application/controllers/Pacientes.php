<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacientes extends CI_Controller {

	private $default_path = "pacientes/";

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Message_Model");
		$this->load->model("Paciente_Model");		
	}

	public function index()
	{
		$data = array(
			"page_name" => "Pacientes",
			"pacientes" => $this->Paciente_Model->select_all()
		);
		$this->load->view($this->default_path.'index', $data);
	}

	public function action()
	{
		$this->check_post();

		switch ($this->input->post("action"))
		{
			case 'insert':				
				// validar o formulário
				$this->validar_form();

				try
				{
					// cadastrar os dados, obtem o id do paciente e faz o upload do arquivo
					$this->do_upload($this->insert());
					$this->Message_Model->insert_data();
				}
				catch(Exception $e)
				{
					echo $e->getMessage();

					$this->Message_Model->set_title("Ops!");
					$this->Message_Model->set_content($e->getMessage());
					$this->Message_Model->set_class("danger");
					$this->Message_Model->create_message();
				}
				
				// fazer upload da imagem e atribuir o id paciente como nome do arquivo
				break;
			case 'update_data':

				break;
			case 'update_photo':
				
				break;
			case 'delete':

				break;
			default:				
				break;
		}

		$this->redireciona();
	}

	private function validar_form()
	{
		$this->form_validation->set_rules('action', 'Action', 'required');
		
		switch ($this->input->post("action"))
		{
			case 'insert':
				
				if (empty($_FILES['arquivo']['name'])) $this->form_validation->set_rules('arquivo', 'Arquivo', 'required');

				$this->form_validation->set_rules('arquivo', 'Arquivo', 'callback_checar_arquivo[]');
				
				$this->form_validation->set_rules('num_cpf', 'CPF', 'required');
				$this->form_validation->set_rules('num_cns', 'CNS', 'required');
				$this->form_validation->set_rules('nom_pacien', 'Nome Paciente', 'required');
				$this->form_validation->set_rules('dat_nascim', 'Data de Nascimento', 'required');
				$this->form_validation->set_rules('nom_mae', 'Nome Mãe', 'required');
				$this->form_validation->set_rules('num_cep', 'CEP', 'required');
				$this->form_validation->set_rules('des_lograd', 'Logradouro', 'required');
				$this->form_validation->set_rules('des_comple', 'Complemento', 'required');
				$this->form_validation->set_rules('des_bairro', 'Bairro', 'required');
				$this->form_validation->set_rules('des_cidade', 'Cidade', 'required');
				$this->form_validation->set_rules('des_uf', 'UF', 'required');
				
				break;			
		}		

		if(!$this->form_validation->run())
        {			
			$this->Message_Model->form_validation_errors(validation_errors());
            $this->redireciona();
        }
	}

	public function checar_arquivo()
	{				
		if($_FILES['arquivo']['size'] > 100000 || $_FILES['arquivo']['type'] != 'image/jpeg')
		{
			$this->form_validation->set_message('checar_arquivo', 'Tipo ou o Tamanho da imagem não são permitidos');
			return false;
		}
		return true;
	}

	private function insert()
	{
		$this->Paciente_Model->set_num_cpf($this->input->post("num_cpf"));
		$this->Paciente_Model->set_num_cns($this->input->post("num_cns"));
		$this->Paciente_Model->set_nom_pacien($this->input->post("nom_pacien"));
		$this->Paciente_Model->set_dat_nascim($this->input->post("dat_nascim"));
		$this->Paciente_Model->set_nom_mae($this->input->post("nom_mae"));
		$this->Paciente_Model->set_num_cep($this->input->post("num_cep"));
		$this->Paciente_Model->set_des_lograd($this->input->post("des_lograd"));
		$this->Paciente_Model->set_des_comple($this->input->post("des_comple"));
		$this->Paciente_Model->set_des_bairro($this->input->post("des_bairro"));
		$this->Paciente_Model->set_des_cidade($this->input->post("des_cidade"));
		$this->Paciente_Model->set_des_uf($this->input->post("des_uf"));		
		return $this->Paciente_Model->insert();
	}

	public function check_post()
	{
		if(is_null($this->input->post("action")))
		{
			$this->Message_Model->no_data_received();
			$this->redireciona();
		}
	}

	private function redireciona()
	{
		redirect($this->default_path);
	}

	public function debug($array = array(), $exit = false)
	{
		echo "<pre>".print_r($array, 1)."<pre>";
		if($exit) exit;
	}

	private function do_upload($seq_pacien)
	{
        $config['upload_path']          = './upload/';
        $config['file_name']			= "avatar_".$seq_pacien;
        $config['allowed_types']        = 'jpg';
        $config['max_size']             = 1000;
        $config['overwrite']            = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('arquivo'))
        {               
            $this->Message_Model->form_validation_errors($this->upload->display_errors());
            $this->redireciona();
        }
	}

}

