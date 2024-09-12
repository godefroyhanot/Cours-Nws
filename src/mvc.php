<?php
// echo "MVC LOADED";


class Framework {


    // public $a = 10;
    // private $b = 5;
    // protected $c = 2;

    protected $defaultPage = "home";
    protected $defaultLayout = "html";
    
    protected $includeSuffix = ".inc.php";
    protected $layoutSuffix = "_layout";
    protected $includePath = './templates/includes/';
    protected $layoutPath = './templates/layouts/';


    public function  __construct() {
    }

    protected function generateIncludePath($includeName) {
        return $this->includePath . $includeName . $this->includeSuffix;
    }
    protected function generateLayoutPath($layoutName) {
        return $this->layoutPath . $layoutName . $this->layoutSuffix .  $this->includeSuffix;
    }

    protected function checkPath($path){
        if(file_exists($path)){
            return true;
        } else { 
            dd($path);
            throw new Exception("Page Manquante");
        }
    }

    public function getLayout($layoutName = false){
        if($layoutName === false){
            $layoutName = $this->defaultLayout;
        } 

        $layoutPath = $this->generateLayoutPath($layoutName);
        if($this->checkPath($layoutPath)){
            include_once $layoutPath;
        }
    }

}



$framework = new Framework(".inc.php");

$framework->getLayout();

// $framework2 = new Framework(".include.php");


dd($framework, $framework2);









// function getLayout($layoutName){
// //Faire correspondre le nom du layout avec une include correspondante
// $page =  "./templates/layouts/". $layoutName . "_layout.inc.php";
// // dd($page);
// // J'aimerai verifier que la page souhaité existe
// if(file_exists($page)){
//     //Inclure la page si elle existe
// include_once $page;
// } else {
//     die("Le layout n'existe pas");
// }

// }

// function getInclude($includeName){
//     $include = './templates/includes/' . $includeName . '.inc.php';
       
//     if(file_exists($include)){
//         //try to get config
//          $config = './configs/' . $includeName . '.config.php';
//         if(file_exists($config)){
//             require_once $config;
//         }

//         include $include;
//     }
// }

// function getPage(){

//     if(isset($_GET["page"])){

//     $page = './pages/' . $_GET['page'] . '.page.php';
       
//     if(file_exists($page)){
//            $config = './configs/' . $_GET['page'] . '.config.php';
//         if(file_exists($config)){
//             require_once $config;
//         }
//         require_once $page;
//     } 
//     } else {
//         require_once "./pages/home.page.php";
//     }
// }

// function displayMenu($menuConfig){
//         foreach ($menuConfig["pages"] as $page) {
//         if(
//             !isset($page["authenticated"]) ||
//             ($page["authenticated"] && $_SESSION['isLogged']) ||
//             (!$page["authenticated"] && !$_SESSION['isLogged']) 
            
        
//         ){
            
//              echo  "<li class=\"menuButton\"><a href=\"?page=". $page["slug"]."\">"
//          . $page["name"] . "
//         </a></li>";
//         }
//     //    var_dump($_SESSION["isLogged"]);
//     }
// }



//S'utilise comme : 
// getLayout('html');
// getLayout('home');