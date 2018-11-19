<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>




<?php

//rasti kainu vidurki
	function find_avarage (array $prices) {
		$sum = 0;
		foreach ($prices as $p) {  // $p yra asociativus masyvas
			$sum += $p['price'];
		}

		return $sum / sizeof($prices);
	}

$prices = [

	['title' => 'milk', 'price' => 5],
	['title' => 'bread', 'price' => 3],
	['title' => 'water', 'price' => 1],

];

echo "kainu vidurkis yra " . find_avarage($prices) . " Eur. ";






echo "<br />";
//funkcija kuri grazina masyvu suma su foreach
$numbers = [1, 300, 40, 5, 21];
$numbers = get_sum($numbers);
print_r($numbers);


echo "<br />";

function get_sum(array $numbers){

	$sum = 0;

	foreach ($numbers as $number) {
		$sum = $sum + $number; // or $sum += $number;
	}

	return $sum;
}


echo "<br />";



//prie kiekvieno skaiciaus prideti skaiciu 5
$numbers = [1, 300, 40, 5, 21];
$numbers = add_five($numbers);
print_r($numbers);

function add_five(array $numbers) {

	$added = [];

	foreach ($numbers as $number) {
		$added[] = $number + 5;
	}
	return $added;

}







//pakeisti +370 i 8 telefono nr
$phone_nr_long = "+370";
$short = "8";
// $number = "";

// function convert ($p, $number){
// if ($phone_nr_long = "+370" || $short("8")){

// 	echo "$phone_nr_long " . $number;
// } else {
// 	echo $short . $number;
// }
// }
// echo convert(37064);

//1. Pasinaudodami dviem for() ciklais atspausdinkite šį vaizdą puslapyje:

#####
#####
#####

$width = 5;
$height = 3;

for ($i=0; $i < $height ; $i++) { 
	for ($w=0; $w < $width ; $w++) { 
		echo "#";
	}
	echo "<br>";
	//$width++; 
	//$width--

}









echo "<br>";
echo "<br>";

//2. Pasinaudodami for() ciklais atspausdinkite šį vaizdą:

####
###
##
#

$width = 5;
$height = 3;

for ($i=0; $i < $height ; $i++) { 
	for ($w=0; $w < $width ; $w++) { 
		echo "#";
	}
	echo "<br>";
	//$width++; 
	$width--;

}






echo "<br>";
echo "<br>";
//3. Parašykite funkciją, kuri jai paduotame masyve pašalintų pirmą įrašą.


// PVZ: remove_first([1,88,789,'Labas']) 

// rezultatas 

// [88,789,'Labas']
echo "array_shift";
$stack = array("orange", "banana", "apple", "raspberry");
echo "<br>";
print_r($stack);
echo "<br>";
$fruit = array_shift($stack);
print_r($stack);





echo "<br>";
echo "<br>";
// 4. Parašykite funkciją, kuri jai paduotame masyve pašalintų didžiausią skaičių.


// PVZ: remove_biggest([1,8,20,9,40,0,8,8])

// rezultatas

// [1,8,20,9,0,8,8]

echo "[1,8,20,9,40,0,8,8]" . "<br>";
$numbers = [1,8,20,9,40,0,8,8];
sort($numbers);
array_pop($numbers);
echo "<br>";
print_r($numbers);
// echo "<br>";
// max($numbers); 
// echo "<br>";
// print_r($numbers);








echo "<br>";
echo "<br>";
// 5. Parasykite funkciją, kuri pirmą ir paskutinį žodžius sakinyje apkeistų vietomis.


// PVZ: swap_words("šiandien tamsi naktis išties")

// rezultatas

// "išties tamsi naktis šiandien"

echo "šiandien tamsi naktis išties" . "<br>" ;
echo "išties tamsi naktis šiandien" . "<br>";

$words = ["one" => "šiandien", "two" => "tamsi", "three" => "naktis", "four" => "isties"];

print_r($words);






echo "<br>";
echo "<br>";
// 6. Parašykite funkciją, kuri visas sakinio žodžių pirmąsias raides pavestų didžiosiomis, o žodžius sujungtų + ženklais.


// PVZ: modify_sentence("Mokomes efektyviai programuoti")

// rezultatas

// "Mokomes+Efektyviai+Programuoti"









echo "<br>";
echo "<br>";
// 7. Prašykite funkciją, kuri kiekvieną karta kviečiant, gražintų atisitiktinį žodį iš vienmačio masyvo (Masyvo pvz: ['labas', 'Petras', 'Vakaras', 'Rytas']).  

$width = 6;
$height = 5;

// function last_row(){
// 	for ($w=0; $w < $width ; $w++) { 
// 			echo "#";
// 		}
// }
// last_row();

if ($width > 2) {
	
	for ($i=0; $i < $height ; $i++) { 
		for ($w=0; $w < $width ; $w++) { 
			echo "#";
		}
		echo "<br>";
	//$width++; 
		$width--;

	} 
}

if ($width <= 2 ) {
	
	for ($i=0; $i < $height ; $i++) { 
		for ($w=0; $w < $width ; $w++) { 
			echo "#";
		}
		echo "<br>";
	//$width++; 
		$width++ . "<br>";
		

	} 
	echo "$width";
}

echo "<br>";
echo "<br>";















?>