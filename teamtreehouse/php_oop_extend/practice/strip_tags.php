<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str="<p>Deskripsi text yang boleh ditampilkan</p><h2>text yang tidak boleh di tampilkan</h2><script>alert</script>";
        // $text=strip_tags($str,['p']);

        // var_dump($text);

        echo $str;
    ?>
</body>
</html>