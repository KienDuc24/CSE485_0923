<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<html>
    <style>
        table, td, th {
            border: 1px solid;
        }

        table {
            border-collapse: collapse;
        }
    </style>
    <table>
        <tr>
            <th>Tên khoá học</th>
        </tr>
        <?php
        for ($i = 1 ; $i < count($arrs) ; $i++){ ?>
            <tr>
                <td><?= $arrs[$i] ?></td>
            </td>
        

        <?php } ?>
    </table>
</html>

