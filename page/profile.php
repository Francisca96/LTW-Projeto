<html>
<head>
	<title>Bloom</title>
    <meta charset="utf-8">
    <!por bonito KIKA>
</head>
<body>
<header>
    <div >
	<!KIKA acrescenta sitio com o nome do utilizador mete 1 À sorte para depois se meter pela base de dados>
    </div>
</header>

<!Por bonito KIKA nome maior e assim>



<div id="middle">
    <div id="profile-img">
        <img src="../images/kika.jpg">
    </div>
    <div id="user-info">
        <div id="personal-info">
            <div id="name">
                KIKA
            </div>
            <div id="email">
                KIKA@gmail.com
            </div>
        </div>
    </div>
</div>
<!Meter funçao changePassword>
<div class="overlayChangePassword">
    <div id="overlay-changePassword">
        <div id="changePassword"></div>
        <form id="form" method="post" action="../actions/change_password.php" onsubmit="return changePassword();">
           <input id="password" type="password" name="password" placeholder="Actual Password" required/>
           <input id="new_password" type="password" name="new_password" placeholder="New Password" required/>
           <input id="new_password_confirm" type="password" name="new_password_confirm" placeholder="Repeat your new Password" required/>
           <input type="submit" value="Confirmar"/>
        </form>
    </div>
</div>

<div id="down-part">
	<!Lista restaurantes que ja avaliou>
    <div id="restaurants">
        Restaurants
    </div>
	
	<!Mais a baixo opções como titulo, pode editar dados ou criar restaurante>
    <div id="options">
        <div id="title-options">
            Options
        </div>
        <div id="edit">
            <input type="button" value="Editar">
        </div>
        <div>
            <input type="button" value="Criar restaurante">
        </div>
    </div>
</div>