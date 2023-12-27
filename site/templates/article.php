<?php snippet('header') ?>

<div class="container mx-auto p-5 md:p-10">
  <article class="prose">
    <div><?= $page->date()->toDate('j. M Y') ?></div>
    <h1 class="text-5xl font-bold"><?= $page->title() ?></h1>
    <?php if($page->teaser()): ?>
      <div class="text-2xl mt-3">
        <?= $page->teaser() ?>  
      </div>
    <?php endif; ?>

    <div class="flex mt-10 gap-5 flex-col">
      <?= $page->blocks()->toBlocks() ?>
    </div>
  </article>
</div>

<?php snippet('footer') ?>