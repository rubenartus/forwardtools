<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title><?= $page->title() ?> • <?= $site->title() ?></title>

  <link href="/assets/css/styles.css" rel="stylesheet">
</head>
<body class="font-worksans">
  <header class="container mx-auto p-10 pb-10 flex flex-col gap-3">
    <a
      href="<?= $site->url() ?>"
      class="
        text-xl italic
        <?php if ($page->isHomePage()): ?> text-indigo-500<?php endif; ?>
      "
    >
      <?= $site->title() ?>
    </a>


    <nav class="flex gap-8">
      <?php foreach ($site->children()->listed() as $item): ?>
        <a
          href="<?= $item->url() ?>"
          class="
            <?php if ($item->isActive()): ?> text-indigo-500<?php endif; ?>
          "
        >
          <?= $item->title(); ?>
        </a>
      <?php endforeach ?>
    </nav>
  </header>