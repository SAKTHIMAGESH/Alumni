<?php

class Home extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('home/home');
		$this->load->view('templates/footer');
	}

	public function register()
	{
		$this->load->view('templates/header');
		$this->load->view('auth/register');
		$this->load->view('templates/footer');
	} 
}