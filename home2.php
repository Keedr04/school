<?php 
#variablen
    #$a = "ik heb niet gefaald";
    #$b = "die niet werken";
    #$c = 1000;
    #echo "$a ik heb alleen $c manieren gevonden $b\n";
#cirkel    
    #$line = readline("enter diameter number: ");
    #echo"\n";
    #readline_add_history($line);
    #echo "pi x $line = ";
    #echo pi() * $line . " is the diameter.";
    #echo"\n";
    #echo"1/4 pi x $line^2 =";
    #echo 4/pi() * $line**2 . " is the surface";
#hoofdletter
    #$zin = "onze hond heet hector";
    #echo "$zin\n";
    #echo strtoupper("$zin\n");
    #echo ucfirst("$zin\n");
    #echo ucwords("$zin")
#leeftijd
    #$leeft = readline("What is your age: ");
    #echo"\n";
    #echo"16 + $leeft = " . 16+$leeft;
    #echo"\n";
    #echo"50 - $leeft = ";
    #echo 50 - $leeft . " years younger than 50";
    #$pensioen = 67;
    #$pensioenleeft = $pensioen - $leeft;
    #echo "\nje hebt nog $pensioenleeft jaren tot pensioen.";
    #$hond = 100;
    #echo "\nje hebt ". $hond-$leeft." jaren tot je 100 bent."

#mail to username
    #$mail = readline("What is your email: ");
    #if (str_contains($mail, '@') && str_contains($mail, '.')) {
    #    echo "valid";
    #} else {
    #    echo "invalid";
    #}

#arrays
    #$lis = array("hond","kat","vogel","auto");
    #echo $lis[0];


//muntje gooien
    #$antwoord = readline("Kop of munt: ");

    #$keuze = ["kop","munt"];
    #$uitkomst = $keuze[random_int(0, count($keuze)-1)];
    #echo $uitkomst;

#dobbelsteen
    #$nummer = [1,6];
    #$uitkomst = $nummer[random_int(1,6)($nummer)];

    #$dag = readline("Welke dag bent u geboren: \n");
    #$maand = readline("Welke maand bent u geboren: \n");
    #$jaar = readline("Welk jaar bent u geboren: \n");
    #if ($maand < 9 || $dag <= 13 && $maand == 9) {
    #    echo "je bent ". 2024 - $jaar;
    #}
    #else {
    #    echo "Je bent ". 2024 - $jaar -1;
    #}
#optellen
    #   for ($x = 0; $x <= 100; $x+=10) {
    #       echo "The number is: $x \n";
    #   }

    #$t = date("H");
    #if ($t < "10") {
    #  echo "Have a good morning!";
    #} elseif ($t < "20") {
    #  echo "Have a good day!";
    #} else {
    #  echo "Have a good night!";
    #}
 

    #for ($x = 0; $x <= 10; $x++){
    #    echo"$x \n";
    #}
    
    $lijst = readline("Geef namen op: ");
    $namen = explode(" ", $lijst);
    foreach ($namen as $naam){
        print_r("$naam\n");
    }




?>