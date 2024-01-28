<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title><?= $page->title() ?> • <?= $site->title() ?></title>

  <link href="/assets/css/styles.css" rel="stylesheet">
  <link rel="icon" href="/assets/images/favicon.svg">
  <link rel="alternate" type="application/rss+xml" title="forward.tools" href="<?= site()->url() ?>/feed"/>
</head>

<body class="font-worksans">
  <header class="bg-black text-white py-5">
    <div class="container mx-auto px-5 md:px-10 flex flex-col gap-0">
      <nav class="flex gap-8 items-center">
        <a
          href="<?= $site->url() ?>"
          class="text-xl font-medium text-white"
        >
          <?= $site->title() ?>
        </a>

        <?php foreach ($site->children()->listed() as $item): ?>
          <a
            href="<?= $item->url() ?>"
            class="<?php if ($item->isActive() || $item->isOpen()): ?> text-white<?php else: ?>text-gray-400<?php endif; ?> hover:text-white"
          >
            <?= $item->title(); ?>
          </a>
        <?php endforeach ?>

        <a
          href="<?= $site->url() ?>"
          class="<?php if ($page->isHomePage()): ?>text-white<?php else: ?>text-gray-400<?php endif; ?> hover:text-white"
        >
          About
        </a>
      </nav>
    </div>
  </header>