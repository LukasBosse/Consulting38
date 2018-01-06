<?php
class Controller{

    private $request = null;
    private $template = '';
    private $view = null;

    /**
     * Konstruktor, erstellet den Controller.
     *
     * @param Array $request Array aus $_GET & $_POST.
     */
    public function __construct($request){
        $this->view = new View();
        $this->request = $request;
        $this->template = !empty($request['view']) ? $request['view'] : 'default';
    }

    /**
     * Methode zum Anzeigen des Contents.
     *
     * @return String Inhalt der Applikation.
     */
    public function display() {
        $view = new View();

        switch($this->template) {
            case 'impressum': {
                include('defaultController.php');
                $this->view->setTemplate('impressum');
                break;
            }
            case 'default': {
                include('defaultController.php');
                $this->view->setTemplate('index');
                break;
            }
        }
        $this->view->assign('blog_title', 'Der Titel des Blogs');
        $this->view->assign('blog_footer', 'Ein Blog von und mit MVC');
        $this->view->assign('blog_content', $view->loadTemplate());
        return $this->view->loadTemplate();
    }
}
?>
