<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title() ?> | <?= $site->title() ?></title>
  <!-- Include Tailwind CSS -->
  <link href="/path/to/your/tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
  <header class="bg-white shadow">
    <nav class="container mx-auto p-6">
      <a href="<?= $site->url() ?>" class="text-lg font-bold"><?= $site->title() ?></a>
      <?php foreach ($site->children()->listed() as $item): ?>
        <a href="<?= $item->url() ?>" class="ml-4"><?= $item->title() ?></a>
      <?php endforeach ?>
    </nav>
  </header>