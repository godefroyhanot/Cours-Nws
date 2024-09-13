<?php
// echo "MVC LOADED";
namespace Godefroy;

class Framework {

    // Propriétés
    protected $defaultPage = "home";      // Page par défaut
    protected $defaultLayout = "html";    // Layout par défaut
    protected $includeSuffix = ".inc.php";
    protected $layoutSuffix = "_layout";
    protected $includePath = './templates/includes/';
    protected $layoutPath = './templates/layouts/';

    // Constructeur
    public function __construct() {
        // Initialisation ou autres configurations
    }

    // Générer le chemin vers un fichier d'include
    protected function generateIncludePath($includeName) {
        return $this->includePath . $includeName . $this->includeSuffix;
    }

    // Générer le chemin vers un layout
    public function generateLayoutPath($layoutName) {
        return $this->layoutPath . $layoutName . $this->layoutSuffix .  $this->includeSuffix;
    }

    // Vérifier l'existence d'un fichier
    protected function checkPath($path) {
        if(file_exists($path)) {
            return true;
        } else {
            // throw new Exception("Fichier manquant : " . $path);
        }
    }

    // Récupérer et inclure un layout
    public function getLayout($layoutName = false) {
        if($layoutName === false) {
            $layoutName = $this->defaultLayout; // Utiliser le layout par défaut
        }

        $layoutPath = $this->generateLayoutPath($layoutName);

        if($this->checkPath($layoutPath)) {
            include_once $layoutPath;
        }
    }

    // Récupérer et inclure un fichier spécifique
    public function getInclude($includeName) {
        $includePath = $this->generateIncludePath($includeName);

        if($this->checkPath($includePath)) {
            include_once $includePath;
        }
    }

    // Récupérer la page par défaut ou une autre
    public function getPage($pageName = false) {
        if($pageName === false) {
            $pageName = $this->defaultPage; // Utiliser la page par défaut
        }

        // Ici, vous pourriez inclure la logique pour récupérer une page
        // Par exemple, inclure une page dans le répertoire 'pages'
        $pagePath = './pages/' . $pageName . '.php';

        if($this->checkPath($pagePath)) {
            include_once $pagePath;
        } else {
            // throw new Exception("Page manquante : " . $pageName);
        }
    }
}



// $framework = new Framework();

$framework->getLayout();

// $framework2 = new Framework(".include.php");


// dd($framework, $framework2);









// function getLayout($layoutName) {
//     $page = "./templates/layouts/" . $layoutName . "_layout.inc.php";

//     if (file_exists($page)) {
//         include_once $page;
//     } else {
//         die("Le layout '" . $layoutName . "' n'existe pas.");
//     }
// }


// function getInclude($includeName) {
//     $include = './templates/includes/' . $includeName . '.inc.php';
    
//     if (file_exists($include)) {
//         $config = './configs/' . $includeName . '.config.php';
//         if (file_exists($config)) {
//             require_once $config;  // Charger la configuration une seule fois
//         }
//         include_once $include;
//     } else {
//         die("L'include '" . $includeName . "' n'existe pas.");
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