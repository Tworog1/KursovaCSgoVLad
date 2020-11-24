<?php

    $genres = $_GET['genres'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'csgo';
    $link = mysqli_connect($host, $user, $pass, $db_name);

    if (!$link) 
    {
        echo 'Неможливо приєднатись до БД. Код помилки: ' . mysqli_connect_errno() . ', помилка: ' . mysqli_connect_error();
        exit;
    }
        $sql = mysqli_query($link, "SELECT `id`, `StatTrak`, `Float`, `Prise`, `image`, `quality`, `Tupe` FROM `skins` WHERE `Tupe` LIKE '%$genres%'");
        while ($result = mysqli_fetch_array($sql))
        {
            echo
            '
            <div class="item" >
                <div class="item-w">
                    <img src="'.$result['image'].'">
                    <span class="name">
                    <span class="name__color">'.$result['StatTrak'].'</span>
                    /'.$result['quality'].'/'.$result['Float'].'</span>
                    <span class="prise">₴ '.$result['Prise'].'</span>
                    <button onclick="getGamePage('.$result['id'].')" class="stule_button" id="19503060663" type="button">
                        <span>More info</span>
                    </button>
                </div>
            </div>
            ';
        }
?>