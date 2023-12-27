<?php snippet('header') ?>

<main class="container mx-auto p-5 md:p-10 pt-0 md:pt-10">
  <div class="flex mb-20 gap-5 flex-col md:flex-row">
    <p class="md:w-1/2 text-2xl">This is a collection of my ongoing thoughts, daily learnings, and small experiments.</p>

    <p class="md:w-1/2 text-lg">I regularly update existing articles with new insights, making this more like a digital garden than a traditional blog.</p>
  </div>

<div class="flex flex-col gap-10">
  <?php
  $articles = page('articles')->children()->listed()->sortBy('date', 'desc');
  foreach ($articles->groupBy(function ($p) {
    return $p->date()->toDate('F Y');
  }) as $month => $articles): ?>
    <div class="flex">
      <div class="w-40">
        <h2><?= ucfirst($month) ?></h2>
      </div>

      <div class="flex gap-5 flex-col">
        <?php foreach ($articles as $article): ?>
          <article class="mb-6">
            <h2 class="text-2xl font-bold">
              <a href="<?= $article->url() ?>"><?= $article->title() ?></a>
            </h2>
            
            <?php if($article->teaser()): ?>
              <div class="text-lg">
                <?= $article->teaser() ?>  
              </div>
            <?php endif; ?>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>

  </div>
</main>

<?php snippet('footer') ?>
