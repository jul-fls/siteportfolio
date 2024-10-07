<?php
function checkForApiKey($apiKey){
    $apiKeys_list = json_decode(file_get_contents("apiKeys_list.json"),true);
    if(in_array($apiKey, $apiKeys_list["valid_apiKeys"])){
        return 1;
    }else {
        return 0;
    }
}

if (isset($_GET["apiKey"]) && checkForApiKey($_GET["apiKey"])) {
    switch ($_GET["articles"]) {
        case 'bda':
                $articles = [
                0 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bda_logo.png",
                    "Title"=>"Titre de l'article 0 du bda",
                    "Description"=>"Description de l'article 0 du bda",
                    "Image"=>"Chemin de l'image qui accompagne l'article 0 du bda",
                    "Url"=>"Url de l'article 0 du bda sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 0 du bda",
                    "DateDePublication"=>"25/05/2021"
                ],
                1 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bda_logo.png",
                    "Title"=>"Titre de l'article 1 du bda",
                    "Description"=>"Description de l'article 1 du bda",
                    "Image"=>"Chemin de l'image qui accompagne l'article 1 du bda",
                    "Url"=>"Url de l'article 1 du bda sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 1 du bda",
                    "DateDePublication"=>"25/05/2021"
                ],
                2 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bda_logo.png",
                    "Title"=>"Titre de l'article 2 du bda",
                    "Description"=>"Description de l'article 2 du bda",
                    "Image"=>"Chemin de l'image qui accompagne l'article 2 du bda",
                    "Url"=>"Url de l'article 2 du bda sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 2 du bda",
                    "DateDePublication"=>"25/05/2021"
                ],
                3 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bda_logo.png",
                    "Title"=>"Titre de l'article 3 du bda",
                    "Description"=>"Description de l'article 3 du bda",
                    "Image"=>"Chemin de l'image qui accompagne l'article 3 du bda",
                    "Url"=>"Url de l'article 3 du bda sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 3 du bda",
                    "DateDePublication"=>"25/05/2021"
                ],
                4 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bda_logo.png",
                    "Title"=>"Titre de l'article 4 du bda",
                    "Description"=>"Description de l'article 4 du bda",
                    "Image"=>"Chemin de l'image qui accompagne l'article 4 du bda",
                    "Url"=>"Url de l'article 4 du bda sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 4 du bda",
                    "DateDePublication"=>"25/05/2021"
                ],
                5 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bda_logo.png",
                    "Title"=>"Titre de l'article 5 du bda",
                    "Description"=>"Description de l'article 5 du bda",
                    "Image"=>"Chemin de l'image qui accompagne l'article 5 du bda",
                    "Url"=>"Url de l'article 5 du bda sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 5 du bda",
                    "DateDePublication"=>"25/05/2021"
                ],
                6 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bda_logo.png",
                    "Title"=>"Titre de l'article 6 du bda",
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bda_logo.png",
                    "Description"=>"Description de l'article 6 du bda",
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bda_logo.png",
                    "Image"=>"Chemin de l'image qui accompagne l'article 6 du bda",
                    "Url"=>"Url de l'article 6 du bda sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 6 du bda",
                    "DateDePublication"=>"25/05/2021"
                ],
                7 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bda_logo.png",
                    "Title"=>"Titre de l'article 7 du bda",
                    "Description"=>"Description de l'article 7 du bda",
                    "Image"=>"Chemin de l'image qui accompagne l'article 7 du bda",
                    "Url"=>"Url de l'article 7 du bda sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 7 du bda",
                    "DateDePublication"=>"25/05/2021"
                ],
                8 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bda_logo.png",
                    "Title"=>"Titre de l'article 8 du bda",
                    "Description"=>"Description de l'article 8 du bda",
                    "Image"=>"Chemin de l'image qui accompagne l'article 8 du bda",
                    "Url"=>"Url de l'article 8 du bda sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 8 du bda",
                    "DateDePublication"=>"25/05/2021"
                ],
                9 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bda_logo.png",
                    "Title"=>"Titre de l'article 9 du bda",
                    "Description"=>"Description de l'article 9 du bda",
                    "Image"=>"Chemin de l'image qui accompagne l'article 9 du bda",
                    "Url"=>"Url de l'article 9 du bda sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 9 du bda",
                    "DateDePublication"=>"25/05/2021"
                ]
            ];
            echo json_encode($articles);
            break;
        case 'bdc':
            $articles = [
                0 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bdc_logo.png",
                    "Title"=>"Titre de l'article 0 du bdc",
                    "Description"=>"Description de l'article 0 du bdc",
                    "Image"=>"Chemin de l'image qui accompagne l'article 0 du bdc",
                    "Url"=>"Url de l'article 0 du bdc sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 0 du bdc",
                    "DateDePublication"=>"25/05/2021"
                ],
                1 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bdc_logo.png",
                    "Title"=>"Titre de l'article 1 du bdc",
                    "Description"=>"Description de l'article 1 du bdc",
                    "Image"=>"Chemin de l'image qui accompagne l'article 1 du bdc",
                    "Url"=>"Url de l'article 1 du bdc sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 1 du bdc",
                    "DateDePublication"=>"25/05/2021"
                ]
            ];
            echo json_encode($articles);
            break;
        case 'bds':
            $articles = [
                0 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bds_logo.png",
                    "Title"=>"Titre de l'article 0 du bds",
                    "Description"=>"Description de l'article 0 du bds",
                    "Image"=>"Chemin de l'image qui accompagne l'article 0 du bds",
                    "Url"=>"Url de l'article 0 du bds sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 0 du bds",
                    "DateDePublication"=>"25/05/2021"
                ],
                1 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/bds_logo.png",
                    "Title"=>"Titre de l'article 1 du bds",
                    "Description"=>"Description de l'article 1 du bds",
                    "Image"=>"Chemin de l'image qui accompagne l'article 1 du bda",
                    "Url"=>"Url de l'article 1 du bds sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 1 du bds",
                    "DateDePublication"=>"25/05/2021"
                ]
            ];
            echo json_encode($articles);
            break;
        case 'pole_com':
            $articles = [
                0 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/pole_com_logo.png",
                    "Title"=>"Titre de l'article 0 du pole_com",
                    "Description"=>"Description de l'article 0 du pole_com",
                    "Image"=>"Chemin de l'image qui accompagne l'article 0 du pole_com",
                    "Url"=>"Url de l'article 0 du pole_com sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 0 du pole_com",
                    "DateDePublication"=>"25/05/2021"
                ],
                1 => [
                    "BureauLogoUrl"=>"https://bde-saintonge.fr/media/images/pole-com_logo.png",
                    "Title"=>"Titre de l'article 1 du pole_com",
                    "Description"=>"Description de l'article 1 du pole_com",
                    "Image"=>"Chemin de l'image qui accompagne l'article 1 du pole_com",
                    "Url"=>"Url de l'article 1 du pole_com sur le site du bde",
                    "Author"=>"Nom du/des auteurs de l'article 1 du pole_com",
                    "DateDePublication"=>"25/05/2021"
                ]
            ];
            echo json_encode($articles);
            break;
        default: 
            header('HTTP/1.0 404 Not Found');
            echo "<h1>404 Not Found !</h1>";
            break;
    }
}else{
    header('HTTP/1.0 401 Unauthorized');
    echo "<h1>401 Unauthorized !</h1>";
}
?>