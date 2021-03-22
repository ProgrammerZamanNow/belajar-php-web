<html>
<body>
<h1>$_SERVER</h1>

<table border="1">
    <?php foreach ($_SERVER as $key => $value) { ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>