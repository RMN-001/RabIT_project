<?php
    require 'model/usersModel.php';
    require 'model/advertisementsModel.php';
    require_once 'dbConfig.php';
    
class Controller
{
    public function __construct() {
        $this-> objectConfig = new dbConfig();
        $this-> objectUsersModel = new UsersModel($this -> objectConfig);
        $this-> objectAdvertisementsModel = new AdvertisementsModel($this -> objectConfig);
    }

    // oldal megjelenítése paramétertől függően
    public function viewHandler() {
        $param = isset($_GET['param']) ? $_GET['param'] : NULL;
        switch($param){
            case 'users':
                $this -> listUsers();
                break;
            case 'advertisements':
                $this -> listAdvertisements();
                break;
            default:
                $this -> mainPage();
        }
    }
    public function mainPage() {
        include "view/indexView.php";
    }

    // eredmény adatbázisból -> userList-nek
    public function listUsers() {
        $result = $this -> objectUsersModel -> getUsers();
        include "view/usersView.php";
    }
    
    // eredmény adatbázisból -> advertisementList-nek
    public function listAdvertisements() {
        $result = $this -> objectAdvertisementsModel -> getAdvertisements();
        include "view/advertisementsView.php";
    }
}
?>