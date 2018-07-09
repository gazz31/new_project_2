<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">          


        <link rel="stylesheet" href="first.css">
	</head>

	<body>
        <header>
            <a href="index.php"><div class="first">Zapraszamy</div></a>
        </header>
        
        <nav>
             <h1 class="one">Produkty w warzywniaku!</h1>
            <ul>
               
                <li class="ziele"><p class="n1">Zielenina</p><a  href="http://definicja.net/definicja/Zielenina"><h4 class="e"><img class="grafika_0"  src="grafika/definicje.jpg"/><p class="i">Definicja zieleniny</p></h4></a></li>
                <li class="warzywa"><p class="wa"><p class="n1">Warzywa</p><div class="warzywa-div"><a class="click" href="http://www.poradnikzdrowie.pl/zywienie/co-jesz/ogorek-wlasciwosci-odzywcze-jakie-witaminy-ma-ogorek_37516.html"><img class="grafika"  src="grafika/ogorek.jpg"/><p class="zero">ogórek</p></a><a class="click" href="http://rosliny.urzadzamy.pl/baza-roslin/warzywa/pietruszka-zwyczajna,17_1079/"><img class="grafika"  src="grafika/pietruszka.jpg"/><p class="zero">pietruszka</p></a><a class="click" href="http://www.poradnikzdrowie.pl/zywienie/co-jesz/por-wlasciwosci-i-wartosci-odzywcze_43347.html"><img class="grafika"  src="grafika/por.jpg"/><p class="zero">por</p></a></div></li>
                
                
                
                
                
                
                <li class="cennik"><p class="n1">Cennik</p><form class="formu" action="wynik.php" method="post">
                    <p class="a">ogórek 3zł/kg</p><input  type="number" name="one"/><br>
                    <p class="a">pietruszka 2zł/kg</p> <input  type="number" name="two"/><br>
                    <p class="a">por 1zł/kg</p><input  type="number" name="three"/><br>
                    
                <input style="font-weight:bolder; font-style:italic;" class="suma" type="submit" value="suma za produkty" name="submited"/>
                <br>
                <small style="font-weight:bolder;font-size:19px;padding:5px; text-align:center";>Wymagane jest aby wypełnić wszystkie pola produktów.</small>
                
            
              
                </form></li>
                
                
            
            
            </ul>
            
        </nav>
	</body>
</html>