<?php snippet('header') ?>

<div class="container mx-auto p-10">
  <article class="prose">
    <h1><?= $page->title() ?></h1>
    <p class="text-gray-600"><?= $page->date()->toDate('d.m.Y') ?></p>
    <?php foreach ($page->blocks()->toBlocks() as $block): ?>
      <?= $block->text() ?>
    <?php endforeach; ?>
  </article>
</div>

<?php snippet('footer') ?>