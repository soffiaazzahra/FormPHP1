<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SELAMAT DATANG!</h1>
    <h2>Terima kasih telah bergabung di Website Kami. Media Belajar kita bersama!</h2>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // MENGAMBIL NILAI DARI FORMULIR
        $firstname = $_POST["First_name"];
        $lastname = $_POST["Last_name"];
        $fullname = $firstname . " " . $lastname;
        echo "Nama : $fullname";
        echo "</br>";
        $Gender = $_POST["jk"];
        echo "Gender yang dipilih : " . $Gender;
        echo "</br>";
        $Nationality = $_POST["Nationality"];
        echo "Kewarganegaraan yang dipilih : " . $Nationality;
        echo "</br>";
        $LanguageSpoken = $_POST["bahasa"];
        echo "Bahasa yang dikuasai : " . (is_array($LanguageSpoken) ? implode(", ", $LanguageSpoken) : $LanguageSpoken);
        echo "</br>";
        $Bio = $_POST["Bio"];
        echo "Bio yang diinput : " . $Bio;
    }
    

    ?>
</body>
</html>