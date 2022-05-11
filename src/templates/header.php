<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div style="height:56px;">
<header>
    <div class="header-title">
        <a href="index.php">SUFARA I TEDŽVID OSNOVE</a>
    </div>
    <div class="header-title-mobile">
        <p style="color: brown; margin:0; height: 3.5rem" dir="rtl" lang="ar" style="color:#e0e0e0;font-size:20px;">رَبٍّ زِدْنٍي عِلمًا</p>
    </div>
    <nav>
        <ul class="desktop-menu">
            <li><a id="1" onclick="toggle(1)" class="link" href="index.php">Zbirna tabela</a></li>
            <li><a id="2" onclick="toggle(2)" class="link" href="pojedinacno.php">Pojedinačne tabele</a></li>
            <li><a id="3" onclick="toggle(3)" class="link" target="_blank" href="SufaraEšrefKovačević.pdf">Sufara</a></li>
            <li><a id="4" onclick="toggle(4)" class="link" href="zabiljeske.php">Zabilješke</a></li>
            <li><a id="4" onclick="toggle(5)" class="link" href="dzenazetska-dova.php">Dženazetska dova</a></li>
        </ul>

        <div class="hamburger-menu-container" onclick="showSidebar()">
            <div class="hamburger-piece"></div>
            <div class="hamburger-piece"></div>
            <div class="hamburger-piece"></div>
        </div>

        <?php require_once("sidebar.php") ?>
    </nav>
</header>
</div><br>
<div class="social-container" onclick="goToFbPage()">
    Više informacija na:<a style="color: #4267B2" href="https://m.facebook.com/Sufara-i-ted%C5%BEvid-osnove-testna-verzija-1992735521023625/"><span>&nbsp;</span><i style="width: 50px; height: auto" class="fa-brands fa-facebook"></i></a>
</div>
<script type="text/javascript" src="https://sufara-tedzvid.herokuapp.com/src/assets/js/custom.js"></script>