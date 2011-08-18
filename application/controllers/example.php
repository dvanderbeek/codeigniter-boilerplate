<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends BP_Controller {
	public function __construct(){  
        parent::__construct();
		
		if ($this->tank_auth->is_logged_in() == FALSE) {
			redirect('/auth/login/');
		}				
    }
    public function index()
    {
        /* Remember you can change the main template if you need!
        $this->template = "example-template";
        */
        $this->load->model('Twitter');
        $toView['tweets'] = $this->Twitter->get_tweets('dvanderbeek');
        // Define Meta
        $this->title = "Example!";
        $this->description = "A Codeigniter-Boilerplate example";

        // Define custom CSS
        $this->css = array("BP/homepage.css","BP/example.css");

        // Import Google Font Lobster and Puritan
        $this->GFont = array("Lobster","Puritan");

        //Somedata for the page.
        $toView["day"] = strftime("%A",strtotime("today"));

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->build_content($toView);
		
        $this->render_page();
    }
}
/*End of file example.php*/
/*Location .application/controllers/example.php*/