<?php
@include('./config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Spotify</title>
</head>

<body>
    <header>
        <div class="menu_side">
            <h1>Spotify</h1>
            <div class="playlist">
                <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Lejátszási lista</h4>
            </div>
            <div class="menu_song">
                <?php
                $sql = "SELECT * FROM zenek ORDER BY musicid ASC";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);

                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $subtitle = $row['subtitle'];
                        $image_name = $row['image_name'];
                        $music_name = $row['music_name'];
                        $musicid = $row['musicid'];
                ?>
                        <li class="songItem">
                            <span><?php echo $musicid; ?></span>
                            <img src="<?php echo SITEURL; ?>img/<?php echo $image_name; ?>" alt="" id="">
                            <h5>
                                <?php echo $title; ?>
                                <div class="subtitle"><?php echo $subtitle; ?></div>
                            </h5>
                            <i class="bi playListPlay bi-play-circle-fill" id="<?php echo $musicid; ?>"></i>
                        </li>
                <?php
                    }
                }
                ?>

            </div>


        </div>


        <div class="song_side">
            <nav>
                <ul>
                    <li>FELFEDEZÉS <span></span></li>
                    <li>KÖNYVTÁR</li>

                </ul>
                <div class="user">
                    <img src="img/profile.png" alt="User" title="user">
                </div>
            </nav>
            <div class="content">
                <h1>T.Danny - WOAH</h1>
                <p>
                    Ez kemény munka, nem voltam soha szélhámos
                    <br>
                    Olyan gyorsan jövünk fel, mint a Mészáros
                </p>
                <div class="buttons">
                    <button id="lejatszas">LEJÁTSZÁS</button>

                </div>
            </div>
            <div class="popular_song">
                <div class="h4">
                    <h4>Felkapott zenék</h4>
                    <div class="btn_s">
                        <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                        <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/7.jpg" alt="Kevin">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                        </div>
                        <h5>Ördög
                            <br>
                            <div class="subtitle">KKevin</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/8.jpg" alt="Andi">
                            <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                        </div>
                        <h5>Néztek
                            <br>
                            <div class="subtitle">Tóth Andi</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/9.jpg" alt="DESH">
                            <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>Kukásautó
                            <br>
                            <div class="subtitle">DESH</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/10.jpg" alt="BSW">
                            <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>Mióta Elhagytál
                            <br>
                            <div class="subtitle">BSW</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/11.jpg" alt="gwm">
                            <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                        </div>
                        <h5>Megcsináltad
                            <br>
                            <div class="subtitle">G.w.M</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/12.jpg" alt="alex">
                            <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                        </div>
                        <h5>Hullik
                            <br>
                            <div class="subtitle">ByeAlex</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/13.jpg" alt="Minelli">
                            <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>Rampampam
                            <br>
                            <div class="subtitle">Minelli</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/14.jpg" alt="wellhello">
                            <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>PEZSGŐESŐ
                            <br>
                            <div class="subtitle">WELLHELLO</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/15.jpg" alt="valmar">
                            <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                        </div>
                        <h5>Úristen
                            <br>
                            <div class="subtitle">VALMAR</div>
                        </h5>
                    </li>
                </div>
            </div>
            <div class="popular_artists">
                <div class="h4">
                    <h4>Kedvelt előadók</h4>
                    <div class="btn_s">
                        <i id="left_scrolls" class="bi bi-arrow-left-short"></i>
                        <i id="right_scrolls" class="bi bi-arrow-right-short"></i>
                    </div>
                </div>
                <div class="item">
                    <li>
                        <img src="img/valmar.jpg" alt="VALMAR" title="VALMAR">
                    </li>
                    <li>
                        <img src="img/alan.jpg" alt="Alan Walker" title="Alan Walker">
                    </li>
                    <li>
                        <img src="img/azahriah.jpg" alt="Azahriah" title="Azahriah">
                    </li>
                    <li>
                        <img src="img/wellhello.jpg" alt="WELLHELLO" title="WELLHELLO">
                    </li>
                    <li>
                        <img src="img/bsw.jpg" alt="BSW" title="BSW">
                    </li>
                    <li>
                        <img src="img/danny.jpg" alt="T.Danny" title="T.Danny">
                    </li>
                    <li>
                        <img src="img/kevin.jpg" alt="KKevin" title="KKevin">
                    </li>
                    <li>
                        <img src="img/missh.jpg" alt="Missh" title="Missh">
                    </li>
                    <li>
                        <img src="img/manuel.jpg" alt="Manuel" title="Manuel">
                    </li>
                    <li>
                        <img src="img/gwm.jpg" alt="G.w.M" title="G.w.M">
                    </li>
                    <li>
                        <img src="img/alex.jpg" alt="ByeAlex" title="ByeAlex">
                    </li>
                </div>
            </div>
        </div>


        <div class="master_play">
            <div class="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/26th.jpg" alt="T.Danny" id="poster_master_play">
            <h5 id="title">WOAH<br>
                <div class="subtitle">T.Danny</div>
            </h5>
            <div class="icon">
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" value="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:00</span>

            <div class="vol">
                <i class="bi bi-volume-down-fill" id="vol_icon"></i>
                <input type="range" id="vol" min="0" value="30" max="100">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
    </header>
    <script src="app.js"></script>
</body>

</html>