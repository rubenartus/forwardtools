<?php snippet('header') ?>

<main class="container mx-auto p-6">
  <h1 class="text-3xl font-bold mb-4">Articles</h1>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <?php foreach (page('articles')->children()->listed() as $article): ?>
      <article class="mb-6">
        <h2 class="text-xl font-semibold mb-2">
          <a href="<?= $article->url() ?>"><?= $article->title() ?></a>
        </h2>
        <p class="mb-4"><?= $article->date()->toDate('F j, Y') ?></p>
        <p><?= $article->text()->excerpt(180) ?></p>
      </article>
    <?php endforeach ?>
  </div>
</main>

<?php snippet('footer') ?>
