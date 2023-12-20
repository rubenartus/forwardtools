<?php snippet('header') ?>

<main class="container mx-auto p-6">
  <h1 class="text-3xl font-bold mb-4">Research Questions</h1>
  <ul>
    <?php foreach (page('questions')->children()->listed() as $question): ?>
      <li class="mb-4">
        <a href="<?= $question->url() ?>" class="text-lg font-semibold"><?= $question->title() ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</main>

<?php snippet('footer') ?>
