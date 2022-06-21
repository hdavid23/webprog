<?php
@include('./config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD MUSIC</title>
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="addvest">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>Songname:</td>
                            <td><input type="text" name="title" placeholder="Song name"></td>
                        </tr>
                        <tr>
                            <td>Subtitle:</td>
                            <td><input type="text" name="subtitle" placeholder="Song subtitle"></td>
                        </tr>
                        <tr>
                            <td>Select Image:</td>
                            <td><input type="file" name="image"></td>
                        </tr>
                        <tr>
                            <td>Select Music:</td>
                            <td><input type="file" name="music"></td>
                        </tr>
                        <tr>
                            <td>Music Id:</td>
                            <td><input type="text" name="musicid"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Music" class="btn-secondary">
                            </td>
                        </tr>
                    </table>
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    $title = $_POST['title'];
                    $subtitle = $_POST['subtitle'];

                    if (isset($_FILES['image'])) {

                        $image_name = $_FILES['image']['name'];

                        if ($image_name != "") {

                            $name = basename($_FILES["image"]["name"]);
                            $src = $_FILES['image']['tmp_name'];
                            $dst = "./img";

                            $upload = move_uploaded_file($src, "$dst/$name");
                        }
                    } else {
                        $image_name = "";
                    }

                    if (isset($_FILES['music'])) {

                        $music_name = $_FILES['music']['name'];

                        if ($music_name != "") {

                            $name = basename($_FILES["music"]["name"]);
                            $src = $_FILES['music']['tmp_name'];
                            $dst = "./zene";

                            $upload = move_uploaded_file($src, "$dst/$name");
                        }
                    } else {
                        $music_name = "";
                    }
                    $musicid = $_POST['musicid'];

                    $sql = "INSERT INTO zenek SET
                        title = '$title',
                        subtitle = '$subtitle',
                        image_name = '$image_name',
                        music_name = '$music_name',
                        musicid = '$musicid'
                    ";

                    $res = mysqli_query($conn, $sql);

                    if ($res == TRUE) {
                        header('location:' . SITEURL . 'index.php');
                    }
                }

                ?>
            </div>
        </div>
    </div>
</body>

</html>