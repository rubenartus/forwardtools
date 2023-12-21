<?php snippet('header') ?>

<div class="container mx-auto p-10">
  <article class="prose">
    <h1><?= $page->title() ?></h1>
    <?= $page->context()->kirbytext() ?>
    <p>Status: <?= $page->status() ?></p>

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
