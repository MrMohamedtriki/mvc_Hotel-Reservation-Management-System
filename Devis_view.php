<?php
session_start();
ob_start();
include 'Devis_controlleur.php';

include 'header_view.php';
  ?>

<header>
    <?php   
    ?>
    <link type="text/css" rel="stylesheet" href="style_Devis.css" />
    <nav>
        <ul>
            <li><a href="index_view.php">Annuler</a></li>
            <?php 
            if ($test_lgin_or_not == 0) {
            ?>
                <li><a href="Signup_view.php">Reserver</a></li>
            <?php
            } else {
            ?>
                <li><a href="Liste_des_Reservations_view.php">Reserver</a></li>
            <?php
            }
            ?>
        </ul>
    </nav>
</header>

<?php if (!isset($_SESSION['login'])) : ?>
    <p>Vous devez être connecté pour voir vos réservations!</p>
<?php else : ?>
    <p>Les réservations effectuées par le client connecté :</p>
    <table border='1'>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Date de début</th>
            <th>Date de Fin</th>
            <th>Type de chambre</th>
            <th>Message</th>
            <th>Prix de la réservation</th>
        </tr>
        <?php foreach ($reservations as $reservation) : ?>
            <tr>
                <td><?= $reservation['name'] ?></td>
                <td><?= $reservation['email'] ?></td>
                <td><?= $reservation['phone'] ?></td>
                <td><?= $reservation['checkInDate'] ?></td>
                <td><?= $reservation['checkOutDate'] ?></td>
                <td><?= $reservation['room_name'] ?></td>
                <td><?= $reservation['message'] ?></td>
                <td><?= $reservation['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?php include 'footer.php'; ?>
