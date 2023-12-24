<?php snippet('header') ?>

<div class="container mx-auto p-10">
  <article class="prose">
    <h1><?= $page->title() ?></h1>
    <?php if($icon = $page->icon()->toFile()): ?>
      <img src="<?= $icon->url() ?>" class="w-1/3">
    <?php endif; ?>
    <p class="text-gray-600"><?= $page->date()->toDate('d.m.Y') ?></p>
    <?= $page->blocks() ?>

    <?php foreach ($page->children()->listed() as $article): ?>
      <a href="<?= $article->url() ?>">
      <?= $article->title() ?> <?= $article->date() ?>
      </a>
    <?php endforeach ?>
  </article>
</div>

<?php snippet('footer') ?>
