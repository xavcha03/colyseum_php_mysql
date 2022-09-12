<h1>Clients List</h1>
<?php

include("./bdConnection.php");

$query = "SELECT * FROM clients";

$stm = $db->prepare($query);
$stm->execute();

$clients = $stm->fetchAll();

include("./clientList.php");


?>
<hr>
<h1>Shows types</h1>
<?php
$query = "SELECT * FROM showtypes";

$stm = $db->prepare($query);
$stm->execute();

$showTypes = $stm->fetchAll();

include("./showTypeList.php");
?>
<hr>
<h1>20 premiers clients</h1>
<?php

$query = "SELECT * FROM clients limit 20";

$stm = $db->prepare($query);
$stm->execute();

$clients = $stm->fetchAll();

include("./clientList.php");

?>
<hr>
<h1>Client avec carte de fidelité</h1>
<?php

$query = "SELECT * FROM clients where card = 1";

$stm = $db->prepare($query);
$stm->execute();

$clients = $stm->fetchAll();

include("./clientList.php");

?>
<hr>
<h1>Client dont le nom commence par </h1>
<?php

$query = "SELECT * FROM clients where lastName LIKE 'M%'";

$stm = $db->prepare($query);
$stm->execute();

$clients = $stm->fetchAll();

foreach ($clients as $client) {
    echo "Nom : " . $client['firstName'] . "<br>";
    echo "Prénom : " . $client['lastName'] . "<br>";
}

?>
<hr>
<h1>Liste des spectacles</h1>
<?php

$query =
    "SELECT * FROM shows";

$stm = $db->prepare($query);
$stm->execute();

$shows = $stm->fetchAll();

foreach ($shows as $show) {
    echo $show["title"] . " par " . $show["performer"] . ", le " . $show["date"] . " à " . $show["startTime"] . "<br>";
}
?>
<hr>
<h1>Client dont le nom commence par </h1>
<?php

$query = "SELECT * FROM clients where lastName LIKE 'M%'";

$stm = $db->prepare($query);
$stm->execute();

$clients = $stm->fetchAll();

foreach ($clients as $client) {
    echo "Nom : " . $client["lastName"] . "<br>";
    echo "Prénom : Prénom du client" . $client['firstName'] . "<br>";
    echo "Date de naissance : " . $client['birthDate'] . "<br>";
    echo "Carte de fidélité : ";
    echo  $client["card"] == 1 ? "oui" : "non";
    echo "<br>";
    echo "Numéro de carte : " . $client['cardNumber'] . "<br>";
}
