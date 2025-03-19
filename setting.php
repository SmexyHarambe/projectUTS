<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    setcookie("text_align", $_POST["text_align"], time() + (86400 * 30), "/");
    setcookie("font_family", $_POST["font_family"], time() + (86400 * 30), "/");
    setcookie("font_color", $_POST["font_color"], time() + (86400 * 30), "/");
    header("Location : index.php");
    exit();
}
$text_align = isset($_COOKIE["text_align"]) ? $_COOKIE["text_align"] : "Left";
$font_family = isset($_COOKIE["font_family"]) ? $_COOKIE["font_family"] : "Arial";
$font_color = isset($_COOKIE["font_color"]) ? $_COOKIE["font_color"] : "#000000";
?>
<!DOCTYPE html>
<html lang ="id">
<head>
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<title>Hasil input</title>
</head>
<body>
<h1>Halaman Setting</h1>
    <form method="post">
        <label for="text_align">Text Align:</label>
        <select name="font_family"id="font_family">
        <option value ="Arial"<?php if($font_family=="Arial") echo "selected";?>>Arial</option>
        <option value ="Tahoma"<?php if($font_family=="Tahoma")echo "selected";?>>Tahoma</option>
        <option value="Calibri" <?php if($font_family=="Calibri") echo "selected"; ?>>Calibri</option>

        </select>
        <label for ="font_color">Font Color:</label>
        <input type ="color" name=" font_color"id="font_color"value ="<?php echo $font_color;?>">

        <br><br>
        <button type "submit">Simpan</button>
    </form>
</body>
</html>
