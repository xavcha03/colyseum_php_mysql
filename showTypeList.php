<table>
    <tr>
        <th>Type</th>
    </tr>
    <?php
    foreach ($showTypes as $showType) {
    ?>
        <tr>
            <td><?= $showType["type"] ?></td>

        </tr>
    <?php


    }
    ?>

</table>