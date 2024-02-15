<?php $Title = "Main" ?>
<?php require_once __DIR__ . "/../layouts/header.php"; ?>

<div class="container">
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$User['id'] ?? "Toure" ?></td>
                <td><?=$User['name'] ?? "Simplice" ?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
