<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

ob_start(); 
include 'Liste_des_Reservations_controlleur.php';
include 'header_view.php';

if (isset($reservations)) {
    if (count($reservations) > 0) {
        echo "<p>Les réservations effectuées par le client connecté :</p>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nom</th><th>Email</th><th>Téléphone</th><th>Date</th><th>Type de chambre</th><th>Message</th><th>État</th></tr>";
        foreach ($reservations as $reservation) {
            echo "<tr>";
            echo "<td>" . $reservation['id'] . "</td>";
            echo "<td>" . $reservation['name'] . "</td>";
            echo "<td>" . $reservation['email'] . "</td>";
            echo "<td>" . $reservation['phone'] . "</td>";
            echo "<td>" . $reservation['checkInDate'] . " - " . $reservation['checkOutDate'] . "</td>";
            echo "<td>" . $reservation['room_name'] . "</td>";
            echo "<td>" . $reservation['message'] . "</td>";
            echo "<td>" . $reservation['etat'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Aucune réservation trouvée pour cet utilisateur.</p>";
    }
} else {
    echo "<p>Erreur: Aucune donnée de réservation fournie.</p>";
}

include 'footer.php';
?>