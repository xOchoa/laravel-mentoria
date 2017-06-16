<form method="POST" action="<?= $url_store ?>">
    <?= csrf_field() ?>
    <?= method_field('PUT') ?>
    <input type="text" name="username">
    <input type="submit">
</form>
