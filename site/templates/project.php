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

<div class="container mx-auto p-5 md:p-10 pt-0">
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
            }
          ?>
        </div>
      </div>

      <!-- <?php
        $headings = [];
        
        foreach ($page->blocks()->toBlocks() as $block) {
          if ($block->type() === 'heading' && $block->level() == 'h1') {
            $headings[] = [
              'text' => $block->text(),
              'link' => Str::slug($block->text()),
            ];
          }
        }
      ?>

      <?php if(!empty($headings)): ?>
        <div>
          <h2>Outline</h2>
          <ul>
            <?php foreach($headings as $heading): ?>
              <li>
                <a href="#<?= $heading['link'] ?>"><?= $heading['text'] ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?> -->
    </div>

    <div class="flex mt-10 gap-5 flex-col blocks">
      <?= $page->blocks()->toBlocks() ?>
    </div>

    <?php if($page->references()->isNotEmpty()): ?>
      <div class="my-20">
        <h2 class="text-4xl font-bold border-b mb-5">References</h2>

        <div class="grid md:grid-cols-4 gap-5 text-sm">
        <?php foreach($page->references()->toStructure() as $reference): ?>
          <div>
            <a href="<?= $reference->url() ?>" class="font-bold mb-2 block no-underline" target="_blank"><?= $reference->title() ?></a>
            <p><?= $reference->description() ?></p>
          </div>
        <?php endforeach ?>
        </div>
      </div>
    <?php endif ?>
    
    <?php if($page->relatedQuestions()->isNotEmpty()): ?>
      <div class="my-20">
        <h2 class="text-4xl font-bold border-b mb-5">Related Research Questions</h2>
        
        <div class="grid md:grid-cols-2 gap-5 text-sm">
          <?php foreach($page->relatedQuestions()->toPages() as $question): ?>
            <div>
              <a href="<?= $question->url() ?>" class="font-bold mb-2 block no-underline"><?= $question->title() ?></a>
              <p class="text-sm"><?= $question->teaser() ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if($page->children()->listed()->count() > 0): ?>
      <div>
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
      </div>
    <?php endif; ?>

    <div class="md:w-2/3 mt-10 border-t pt-5">
      If you find yourself intrigued or inspired by this project, I'd love to <a href="mailto:hello@ruben.design">hear from you</a>. Your ideas, feedback, or questions could be the next inspiring spark.
    </div>
  </article>
</div>

<?php snippet('footer') ?>
