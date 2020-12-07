<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_Model extends CI_Model{

	private $title;
	private $content;
	private $class;

	public function __construct()
	{
		parent::__construct();
	}

	public function set_title($title){$this->title = $title;}
	public function set_content($content){$this->content = $content;}
	public function set_class($class){$this->class = $class;}
	
	private function get_title(){return $this->title;}
	private function get_content(){return $this->content;}
	private function get_class(){return $this->class;}

	public function create_message()
	{
		$this->session->set_flashdata("flash_title",$this->get_title());
        $this->session->set_flashdata("flash_content",$this->get_content());
        $this->session->set_flashdata("flash_class",$this->get_class());
	}

	public function form_validation_errors($errors)
	{
		$this->set_title("Ops!");
		$this->set_content($errors);
		$this->set_class("danger");
		$this->create_message();
	}

	public function no_data_received()
	{
		$this->set_title("Ops!");
		$this->set_content("<p>Não recebemos seus dados!<br> Tente outra vez.</p>");
		$this->set_class("danger");
		$this->create_message();
	}

	public function record_exists()
	{
		$this->set_title("Ops!");
		$this->set_content("<p>Há um registro com esse mesmo valor!<br> Tente um outro.</p>");
		$this->set_class("danger");
		$this->create_message();
	}

	public function insert_data()
	{
		$this->set_title("Parabéns!");
		$this->set_content("<p>Dados cadastrados com sucesso!</p>");
		$this->set_class("success");
		$this->create_message();
	}

	public function update_data()
	{
		$this->set_title("Parabéns!");
		$this->set_content("<p>Dados atualizados com sucesso!</p>");
		$this->set_class("success");
		$this->create_message();
	}

	public function delete_data()
	{
		$this->set_title("Parabéns!");
		$this->set_content("<p>Dados excluídos com sucesso!</p>");
		$this->set_class("success");
		$this->create_message();
	}

	
	public function page_no_exists()
	{
		$this->set_title("Ops!");
		$this->set_content("<p>A página solicitada não existe!</p>");
		$this->set_class("warning");
		$this->create_message();
	}

	public function record_not_found()
	{
		$this->set_title("Ops!");
		$this->set_content("<p>Nenhum registro encontrado!</p>");
		$this->set_class("danger");
		$this->create_message();	
	}
}