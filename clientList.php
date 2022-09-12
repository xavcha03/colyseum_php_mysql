<table>
    <tr>
        <th>LastName</th>
        <th>FirstName</th>
        <th>Birthday</th>
        <th>Card</th>
        <th>Card Number</th>
    </tr>
    <?php
    foreach ($clients as $client) {
    ?>
        <tr>
            <td><?= $client["lastName"] ?></td>
            <td><?= $client["firstName"] ?></td>
            <td><?= $client["birthDate"] ?></td>
            <td><?= $client["card"] ?></td>
            <td><?= $client["cardNumber"] ?></td>
        </tr>
    <?php


    }
    ?>

</table>