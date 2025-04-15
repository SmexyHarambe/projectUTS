<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie('text-align', $_POST['text-align'], time() + (86400 * 30), "/");
    setcookie('font-family', $_POST['font-family'], time() + (86400 * 30), "/");
    setcookie('color', $_POST['color'], time() + (86400 * 30), "/");

    header("Location: index.php");
    exit();
}

$textAlign = isset($_COOKIE['text-align']) ? $_COOKIE['text-align'] : ''; 
$fontFamily = isset($_COOKIE['font-family']) ? $_COOKIE['font-family'] : ''; 
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : '#000000'; 
?>

<<<<<<< HEAD
<html>
    <head>
        <title>Halaman Setting</title>
    </head>
    <body>
        <h1>Halaman Setting</h1>
        <form method="POST" action="">
            <label for="text-align">Text Align:</label>
            <select name="text-align" id="text-align">
                <option value="" disabled <?php if($textAlign == '') echo 'selected'; ?>>-- Pilih Text Align --</option>
                <option value="left" <?php if($textAlign == 'left') echo 'selected'; ?>>Left</option>
                <option value="right" <?php if($textAlign == 'right') echo 'selected'; ?>>Right</option>
                <option value="center" <?php if($textAlign == 'center') echo 'selected'; ?>>Center</option>
                <option value="justify" <?php if($textAlign == 'justify') echo 'selected'; ?>>Justify</option>
            </select>
            <br>
            <label for="font-family">Font Family:</label>
            <select name="font-family" id="font-family">
                <option value="" disabled <?php if($fontFamily == '') echo 'selected'; ?>>-- Pilih Font Family --</option>
                <option value="Arial" <?php if($fontFamily == 'Arial') echo 'selected'; ?>>Arial</option>
                <option value="Tahoma" <?php if($fontFamily == 'Tahoma') echo 'selected'; ?>>Tahoma</option>
                <option value="Calibri" <?php if($fontFamily == 'Calibri') echo 'selected'; ?>>Calibri</option>
            </select>
            <br>
            <label for="color">Color:</label>
            <input type="color" name="color" id="color" value="<?php echo $color; ?>">
            <br>
            <button type="submit">Simpan</button>
        </form>
    </body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Setting</title>
</head>
<body>
    <h1>Halaman Setting</h1>
    <form method="POST" action="">
        <label for="text-align">Text Align:</label>
        <select name="text-align" id="text-align">
            <option value="" disabled <?php if($textAlign == '') echo 'selected'; ?>>-- Pilih Text Align --</option>
            <option value="left" <?php if($textAlign == 'left') echo 'selected'; ?>>Left</option>
            <option value="right" <?php if($textAlign == 'right') echo 'selected'; ?>>Right</option>
            <option value="center" <?php if($textAlign == 'center') echo 'selected'; ?>>Center</option>
            <option value="justify" <?php if($textAlign == 'justify') echo 'selected'; ?>>Justify</option>
        </select>
        <br>
        <label for="font-family">Font Family:</label>
        <select name="font-family" id="font-family">
            <option value="" disabled <?php if($fontFamily == '') echo 'selected'; ?>>-- Pilih Font Family --</option>
            <option value="Arial" <?php if($fontFamily == 'Arial') echo 'selected'; ?>>Arial</option>
            <option value="Tahoma" <?php if($fontFamily == 'Tahoma') echo 'selected'; ?>>Tahoma</option>
            <option value="Calibri" <?php if($fontFamily == 'Calibri') echo 'selected'; ?>>Calibri</option>
        </select>
        <br>
        <label for="color">Color:</label>
        <input type="color" name="color" id="color" value="<?php echo $color; ?>">
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
>>>>>>> 6c441c445842e1b9e612fdff437c31939d573f5d
