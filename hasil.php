<?php
$textAlign = isset($_COOKIE['text-align']) ? $_COOKIE['text-align'] : 'Left';
$fontFamily = isset($_COOKIE['font-family']) ? $_COOKIE['font-family'] : 'Arial';
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : '#000000';

$choice = ''; 
if (isset($_COOKIE['text-align']) && isset($_COOKIE['font-family']) && isset($_COOKIE['color'])) {
    $choice = "p {\n";
    $choice .= "    text-align: " . $textAlign . ";\n";
    $choice .= "    font-family: " . $fontFamily . ";\n"; 
    $choice .= "    color: " . $color . ";\n"; 
    $choice .= "}\n";
}
?>

<<<<<<< HEAD
<html>
    <head>
        <title>Hasil</title>
        <style>
            .custom {
                text-align: <?php echo $textAlign; ?>;
                font-family: <?php echo $fontFamily; ?>;
                color: <?php echo $color; ?>;
            }
        </style>
    </head>
    <body>
        <h1>Halaman Hasil</h1>
        <p>Setting yang tersedia: </p>
        <textarea readonly style="width: 250px; height: 100px;">
            <?php echo $choice; ?>
        </textarea>
        <br>
        <a href="setting.php">Ganti Setting</a>
        <p class="custom">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum alias praesentium cum a quo molestiae accusamus cupiditate laborum sed laboriosam, cumque vitae est corporis, inventore voluptatibus velit accusantium blanditiis modi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam in officiis voluptatem distinctio. Repellat amet quasi nam recusandae! Ad dolorem impedit officia architecto accusantium eveniet suscipit reprehenderit officiis exercitationem nostrum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ratione ipsum aut tempore beatae assumenda rem et repudiandae, non est repellendus laudantium, tempora nostrum architecto quisquam aliquid nobis ducimus id! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor debitis labore laboriosam inventore architecto aliquam molestiae aliquid est placeat id, nesciunt quae eligendi, quisquam velit dolores soluta! At, aspernatur nesciunt.</p>
        
    </body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <style>
        .custom {
            text-align: <?php echo $textAlign; ?>;
            font-family: <?php echo $fontFamily; ?>;
            color: <?php echo $color; ?>;
        }
    </style>
</head>
<body>
    <h1>Halaman Hasil</h1>
    <p>Setting yang tersedia: </p>
    <textarea readonly style="width: 250px; height: 100px;">
        <?php echo $choice; ?>
    </textarea>
    <br>
    <a href="setting.php">Ganti Setting</a>
    <p class="custom">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum alias praesentium cum a quo molestiae accusamus cupiditate laborum sed laboriosam, cumque vitae est corporis, inventore voluptatibus velit accusantium blanditiis modi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam in officiis voluptatem distinctio. Repellat amet quasi nam recusandae! Ad dolorem impedit officia architecto accusantium eveniet suscipit reprehenderit officiis exercitationem nostrum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ratione ipsum aut tempore beatae assumenda rem et repudiandae, non est repellendus laudantium, tempora nostrum architecto quisquam aliquid nobis ducimus id! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor debitis labore laboriosam inventore architecto aliquam molestiae aliquid est placeat id, nesciunt quae eligendi, quisquam velit dolores soluta! At, aspernatur nesciunt.</p>
    
</body>
</html>
>>>>>>> 6c441c445842e1b9e612fdff437c31939d573f5d
