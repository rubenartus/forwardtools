<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title><?= $page->title() ?> | <?= $site->title() ?></title>

  <link href="/assets/css/styles.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
  <header class="bg-white shadow">
    <nav class="container mx-auto p-6">
      <a href="<?= $site->url() ?>" class="text-lg font-bold<?php if ($page->isActive()): ?> text-indigo-500<?php endif; ?>"><?= $site->title() ?></a>
      <?php foreach ($site->children()->listed() as $item): ?>
        <a href="<?= $item->url() ?>" class="ml-4<?php if ($item->isActive()): ?> text-indigo-500<?php endif; ?>"><?= $item->title() ?></a>
      <?php endforeach ?>
    </nav>
  </header>