<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}
require_once $rootPath . "public/dbconn.php";
require_once $rootPath . "models/sql/frontpage.php";

class FrontpageHandler extends Frontpage{

    public $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getFrontpage(){
        $getFrontpage = $this->db->prepare($this->getAllFrontpageQuery);
        $getFrontpage->execute();

        return $getFrontpage->fetchAll();
    }

    /* Banner1 section Handlers */
    public function editBannerSubtitle1($bannerSubtitle1){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'bannerSubtitle1';
        $update->bindParam(":text", $bannerSubtitle1);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editBannerTitle1($bannerTitle1){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'bannerTitle1';
        $update->bindParam(":text", $bannerTitle1);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editBanner1Slogan1($banner1Slogan1){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'banner1Slogan1';
        $update->bindParam(":text", $banner1Slogan1);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editBanner1Slogan2($banner1Slogan2){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'banner1Slogan2';
        $update->bindParam(":text", $banner1Slogan2);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editBanner1Slogan3($banner1Slogan3){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'banner1Slogan3';
        $update->bindParam(":text", $banner1Slogan3);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editBannerText1($bannerText1){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'bannerText1';
        $update->bindParam(":text", $bannerText1);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editBannerImageOne($bannerImageOne){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'bannerImageOne';
        $update->bindParam(":text", $bannerImageOne);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    /* Banner1 section Handlers */


    /* Banner2 section Handlers */
    public function editBannerSubtitle2($bannerSubtitle2){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'bannerSubtitle2';
        $update->bindParam(":text", $bannerSubtitle2);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editBannerTitle2($bannerTitle2){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'bannerTitle2';
        $update->bindParam(":text", $bannerTitle2);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editBanner2Slogan1($banner2Slogan1){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'banner2Slogan1';
        $update->bindParam(":text", $banner2Slogan1);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editBanner2Slogan2($banner2Slogan2){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'banner2Slogan2';
        $update->bindParam(":text", $banner2Slogan2);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editBanner2Slogan3($banner2Slogan3){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'banner2Slogan3';
        $update->bindParam(":text", $banner2Slogan3);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editBanner2Text1($banner2Text1){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'banner2Text1';
        $update->bindParam(":text", $banner2Text1);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    public function editBannerImageTwo($bannerImageTwo){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'bannerImageTwo';
        $update->bindParam(":text", $bannerImageTwo);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    /* Banner2 section Handlers */

    public function editPhoneNumber($phone){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'phone';
        $update->bindParam(":text", $phone);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editEmail($email){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'email';
        $update->bindParam(":text", $email);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editAddress($address){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'address';
        $update->bindParam(":text", $address);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editFollowUs($text){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'follow';
        $update->bindParam(":text", $text);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editNav1($nav1){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'nav1';
        $update->bindParam(":text", $nav1);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editNav2($nav2){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'nav2';
        $update->bindParam(":text", $nav2);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editNav3($nav3){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'nav3';
        $update->bindParam(":text", $nav3);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editNav4($nav4){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'nav4';
        $update->bindParam(":text", $nav4);
        $update->bindParam(":id", $id);
        $update->execute();
    }


    /* AboutUS Page section Handlers */
    public function editAboutPageTitle1($aboutPageTitle1){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutPageTitle1';
        $update->bindParam(":text", $aboutPageTitle1);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editAboutPageText1($aboutPageText1){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutPageText1';
        $update->bindParam(":text", $aboutPageText1);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editAboutPageTitle2($aboutPageTitle2){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutPageTitle2';
        $update->bindParam(":text", $aboutPageTitle2);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editAboutPageText2($aboutPageText2){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutPageText2';
        $update->bindParam(":text", $aboutPageText2);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editAboutPageTitle3($aboutPageTitle3){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutPageTitle3';
        $update->bindParam(":text", $aboutPageTitle3);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editAboutPageText3($aboutPageText3){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutPageText3';
        $update->bindParam(":text", $aboutPageText3);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    /* AboutUS Page section Handlers */

    public function editAboutUs1($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutUs1';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editAboutUs2($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutUs2';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute(); 
    }

    public function editProductsSubTitle($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'productsSubtitle';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editProductsTitle($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'productsTitle';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    

    public function editAboutUsSubTitle($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutusSubtitle';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editAboutusTitle($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutusTitle';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editAboutUsSlogan($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutusSlogan';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    
    public function editContactSubTitle($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'contactSubtitle';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editContactTitle($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'contactTitle';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    
}

$FrontpageHandler = new FrontpageHandler($db);