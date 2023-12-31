<?php snippet('header') ?>

<div class="container mx-auto p-5 md:p-10">
  <article class="prose">
    <h1 class="text-5xl mb-4 font-bold"><?= $page->title() ?></h1>
    <p class="md:w-2/3 text-2xl"><?= $page->teaser()->kirbytext() ?></p>

    <section>
      <h2>Related Projects</h2>
      <?php foreach ($page->relatedProjects()->toPages() as $relatedProject): ?>
        <a href="<?= $relatedProject->url() ?>"><?= $relatedProject->title() ?></a>
      <?php endforeach ?>
    </section>

    <section>
      <h2>Related Articles</h2>
      <?php foreach ($page->relatedArticles()->toPages() as $relatedArticle): ?>
        <a href="<?= $relatedArticle->url() ?>"><?= $relatedArticle->title() ?></a>
      <?php endforeach ?>
    </section>
  </article>
</div>

<?php snippet('footer') ?>
