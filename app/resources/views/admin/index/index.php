<?= $this->render('admin/index/another', ['param' => 'some text']); ?>

    <br>
<?php foreach ($texts as $text): ?>
    <?= $text->text ?><br>
<?php endforeach; ?>


<?= $this->renderJson('some_name', ['a' => 'structure']); ?>