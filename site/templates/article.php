<?php snippet('header') ?>

<div class="container mx-auto p-5 md:p-10">
  <article class="prose">
    <div><?= $page->date()->toDate('j. M Y') ?></div>
    <h1 class="text-5xl font-bold"><?= $page->title() ?></h1>
    
    <?php if($page->teaser()): ?>
      <div class="text-2xl mt-3 md:w-2/3">
        <?= $page->teaser() ?>  
      </div>
    <?php endif; ?>

    <div class="flex mt-10 gap-5 flex-col blocks">
      <?= $page->blocks()->toBlocks() ?>
    </div>
    
    <?php if($page->ressources()->isNotEmpty()): ?>
      <div class="my-20">
        <h2 class="text-4xl font-bold border-b mb-5">Resources</h2>

        <div class="grid md:grid-cols-3 gap-5 md:gap-10 text-sm">
        <?php foreach($page->ressources()->toStructure() as $ressource): ?>
          <div>
            <a href="<?= $ressource->url() ?>" class="text-lg font-medium mb-1 block no-underline" target="_blank"><?= $ressource->title() ?></a>
            <p><?= $ressource->description() ?></p>
          </div>
        <?php endforeach ?>
        </div>
      </div>
    <?php endif ?>
  </article>
</div>

<?php snippet('footer') ?>