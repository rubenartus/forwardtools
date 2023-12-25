<?php
  $type = match ($page->type()->value()) {
    'experiment' => 'Experiment',
    'concept' => 'Concept', 
    'game-concept' => 'Game Concept', 
    'prototype' => 'Prototype',
    'thought-experiment' => 'Thought Experiment'
  };
?>
<?php snippet('header') ?>

<div class="container mx-auto p-10 pt-0">
  <article class="prose">
    <?php if($icon = $page->icon()->toFile()): ?>
      <img src="<?= $icon->url() ?>" class="md:w-1/3 mx-auto mb-5">
    <?php endif; ?>
    <h1 class="text-4xl md:text-5xl font-bold text-center"><?= $page->title() ?></h1>
    <p class="text-gray-600 text-center mt-3"><?= $page->date()->toDate('M Y') ?> &bull; <?= $type ?></p>

    <div class="flex mt-10 gap-10 flex-col md:flex-row">
      <div class="md:w-2/3 text-xl md:text-2xl">
        <?= $page->teaser() ?>
      </div>
      <div class="md:w-1/3">
        <div class="mb-5">
          <?php
            switch($page->state()->value()) {
              case 'backlog': echo "I think this is a valuable idea, and it's definitely worth exploring. However, my current focus is on other projects. Someday I'll gather all my notes and ideas for this project and put them together in a presentable format."; break;
              case 'progress': echo 'This project is currently in progress.'; break;
              case 'finished': echo 'Yay, this project is finished!'; break;
            }
          ?>
        </div>

        <?php if($page->children()->listed()->count() > 0): ?>
          <h2 class="text-lg font-bold border-b mb-3">Project Diary</h2>
          <div class="flex gap-5">
            <?php foreach ($page->children()->listed() as $article): ?>
              <div>
                <?= $article->date()->toDate('d. M Y') ?>
                &rarr;
                <a href="<?= $article->url() ?>"><?= $article->title() ?></a>
              </div>
            <?php endforeach ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <?= $page->blocks() ?>
  </article>
</div>

<?php snippet('footer') ?>
