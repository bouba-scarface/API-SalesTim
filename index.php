<?php
header('Access-control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
header('Access-control-Allow-Methods: GET');
header('Access-control-Allow-Max-Age: 3600');
header('Access-control-Allow-Headers: content-Type,Access-control-Allow-Headers, Authorization, X-Requested-with');

$body = array(
	"templateConfiguration" => array(
		array(
                "id"=> "io.salestim.automation.templates.account.en-us",
                "language"=> "en-us",
                "enabled"=> "false",
                "version"=> "1.0",
                "system"=> "false",
                "singleton"=> "false",
                "name"=> "Account Team",
                "description"=> "Account Team",
                "pictureUrl"=> "https://media-exp1.licdn.com/dms/image/C4E12AQHVoRf0L-glvw/article-cover_image-shrink_720_1280/0?e=1593648000&v=beta&t=MdWM57l42kML-Ky0rRdSa-jhS9V7LP4Wp0ITcAcPTgs",
                "categories"=>array ("io.salestim.gallery.categories.salesAndSupport" )),
        
       array( 
                "id"=> "io.salestim.automation.templates.dealRoom.en-us",
                "language"=> "en-us",
                "enabled"=> "true",
                "version"=> "1.0",
                "system"=> "false",
                "singleton"=> "false",
                "name"=> "Deal Room",
                "description"=> "A basic team comprised of one General channel",
                "pictureUrl"=> "https://media-exp1.licdn.com/dms/image/C4E12AQHVoRf0L-glvw/article-cover_image-shrink_720_1280/0?e=1593648000&v=beta&t=MdWM57l42kML-Ky0rRdSa-jhS9V7LP4Wp0ITcAcPTgs",
                "categories"=> array(
                    "io.salestim.gallery.categories.productivity",
                    "io.salestim.gallery.categories.discover",
                    "io.salestim.gallery.industries.services")),
        array(
                "id"=> "io.salestim.automation.templates.opportunity.en-us",
                "language"=> "en-us",
                "enabled"=> "false",
                "version"=> "1.0",
                "system"=> "false",
                "singleton"=> "false",
                "name"=> "Opportunity Team",
                "description"=> "Opportunity Team",
                "pictureUrl"=> "https://media-exp1.licdn.com/dms/image/C4E12AQHVoRf0L-glvw/article-cover_image-shrink_720_1280/0?e=1593648000&v=beta&t=MdWM57l42kML-Ky0rRdSa-jhS9V7LP4Wp0ITcAcPTgs",
                "categories"=> array(
                    "io.salestim.gallery.categories.salesAndSupport")),
        array(
            "id"=> "io.salestim.automation.templates.default.fr-fr",
            "language"=> "fr-fr",
            "enabled"=> "true",
            "version"=> "1.0",
            "system"=> "true",
            "singleton"=> "false",
            "name"=> "Equipe simple",
            "description"=> "Une équipe simple comportant uniquement un canal 'Général'",
            "pictureUrl"=> "https://media-exp1.licdn.com/dms/image/C4E12AQHVoRf0L-glvw/article-cover_image-shrink_720_1280/0?e=1593648000&v=beta&t=MdWM57l42kML-Ky0rRdSa-jhS9V7LP4Wp0ITcAcPTgs",
            "categories"=> array(
                "io.salestim.gallery.categories.productivity",
                "io.salestim.gallery.categories.discover") ),
        array(
            "id"=> "io.salestim.automation.templates.scrum.sprint.en-us",
            "language"=> "en-us",
            "enabled"=> "true",
            "version"=> "1.0",
            "system"=> "false",
            "singleton"=> "false",
            "name"=> "Scrum Sprint",
            "description"=> "A sprint (also known as iteration or timebox) is the basic unit of development in Scrum. The sprint is a timeboxed effort; that is, the length is agreed and fixed in advance for each sprint and is normally between one week and one month, with two weeks being the most common.",
            "pictureUrl"=> "https://template-gallery.salestim.io/assets/img/icons/web-design-development/240px/38-Code Planning.png",
            "categories"=> array(
                "io.salestim.gallery.categories.it-administration",
                "io.salestim.gallery.categories.discover"
            )),
        array(
            "id"=> "io.salestim.automation.templates.default.en-us",
            "language"=> "en-us",
            "enabled"=> "true",
            "version"=> "1.0",
            "system"=> "true",
            "singleton"=> "false",
            "name"=> "Basic Team",
            "description"=> "A basic team comprised of one 'General' channel",
            "pictureUrl"=> "https://media-exp1.licdn.com/dms/image/C4E12AQHVoRf0L-glvw/article-cover_image-shrink_720_1280/0?e=1593648000&v=beta&t=MdWM57l42kML-Ky0rRdSa-jhS9V7LP4Wp0ITcAcPTgs",
            "categories"=> array(
                "io.salestim.gallery.categories.productivity",
                "io.salestim.gallery.categories.discover")),
                
                
                
	)
	
);
$reponse = array (
    "data" => $body
);
echo json_encode($reponse);




?>