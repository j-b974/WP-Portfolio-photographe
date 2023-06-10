<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>
<body>

    <header>
            <nav>
                <div class="logo">
                    <a href ="<?= get_home_url()?>"></a>
                </div> 
                    <?php  
                    $arg = [
                        'theme_location'=>'navHearder',
                        'menu_class'=>'lstLink',
                        'container'=>false,
                    ];
                    
                    wp_nav_menu($arg)  ?>
                <!-- <ul class="lstLink">
                    <li><a href="./Galerie.html">Galerie</a></li>
                    <li><a href="./Tarif&prestation.html">Tarif & Préstation</a></li>
                    <li><a href="./Contact.html">Contact</a></li>
                </ul> -->
                <div class="toggleBtn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </nav>
            <div class="dropdownMenu">
                <?php wp_nav_menu($arg)  ?>
                <!-- <ul class="lstLink">
                    <li><a href="./Galerie.html">Galerie</a></li>
                    <li><a href="./Tarif&prestation.html">Tarif & Préstation</a></li>
                    <li><a href="./Contact.html">Contact</a></li>
                </ul> -->
            </div>
        </header>
    
