<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: 
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->
<?php $posts = [
    '20/12/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Jane Doe',
            'post' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Perferendis, pariatur corrupti harum nostrum odit nobis. 
            Praesentium eveniet harum dicta alias accusamus dignissimos aspernatur, iusto incidunt ad nulla. 
            Quas, consequatur. Quasi.',
        ],
        [
            'title' => 'Post 2',
            'author' => 'John Doe',
            'post' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Odit odio alias eveniet facilis ullam quos explicabo, recusandae soluta! Odit, nobis? 
            Mollitia reprehenderit molestiae placeat, animi rem quibusdam doloremque harum dolorem!',
        ],
    ],
    '22/12/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Mark Russel',
            'post' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quaerat maxime provident voluptatibus sit. Sapiente a hic voluptate iste nulla praesentium ipsum quis ducimus qui deleniti? Ipsum magnam voluptatum nulla!',
        ],
        [
            'title' => 'Post 2',
            'author' => 'Jaina Prodhmoure',
            'post' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates cumque odit harum dolor atque inventore iure beatae neque ipsam et suscipit excepturi rerum, mollitia, qui perspiciatis vitae ipsa? Tenetur, minima.',
        ],
    ],
    '01/01/2022' => [
        [
            'title' => 'Post 1',
            'author' => 'John Doe',
            'post' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Accusantium nam praesentium veniam officiis ad magni optio ducimus quod maxime perferendis 
            dignissimos labore minima vel blanditiis dolorem, placeat rerum in illum!',
        ],
        [
            'title' => 'Post 2',
            'author' => 'Sabaku No Maiku',
            'post' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Quidem labore id aperiam at accusamus rerum deleniti eum. Adipisci ea non voluptatum iste beatae provident eaque incidunt, 
            delectus suscipit ab sapiente.',
        ],
        [
            'title' => 'Post 3',
            'author' => 'Jane Doe',
            'post' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Ea maiores nesciunt sapiente sint a doloremque laudantium sed. 
            Aliquam earum repellendus aperiam perferendis? Quasi ex tenetur eveniet enim? Perspiciatis, beatae neque.',
        ],
    ],
]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Le ultime date in cui sono stati registrati posts sono:</h2>
    <ul>
        <?php
        $data = array_keys($posts);
        for ($i = 0; $i < count($data); $i++) {
            echo '<li>' . $data[$i] . '</li>';
            echo '<ul>';
            $data_array = $posts[$data[$i]];
            for ($ind = 0; $ind < count(array_keys($data_array)); $ind++) {
                echo '<li>' . $data_array[$ind]['post'] . '</li>';
            }
            echo '</ul>';
        }
        ?>
        
    </ul>
</body>
</html>