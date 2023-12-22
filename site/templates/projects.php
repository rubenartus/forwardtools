<?php snippet('header') ?>

<main class="container mx-auto p-10">
  <div class="flex mb-20 gap-5 flex-col md:flex-row">
    <p class="md:w-1/2">I'm dedicated to exploring and understanding the vast capabilities of AI, pushing beyond the traditional chatbox. My goal is to propel the AI UX space forward by exploring new, innovative interfaces and interactions.</p>

    <p class="md:w-1/2">As you discover these projects, if you find yourself intrigued or inspired, I'd love to hear from you. Your ideas, feedback, or questions could be the next inspiring spark.</p>
  </div>  

  <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
    <?php
    foreach (page('projects')->children()->listed() as $project):
      $type = match ($project->type()->value()) {
        'experiment' => 'Experiment',
        'concept' => 'Concept', 
        'prototype' => 'Prototype',
        'thought-experiment' => 'Thought Experiment'
      };
    ?>
      <div>
        <div class="flex gap-4">
          <?php if($icon = $project->icon()->toFile()): ?>
            <img src="<?= $icon->url() ?>" class="h-32 w-32">
          <?php endif; ?>

          <div>
            <p class="text-xs text-gray-500"><?= strtoupper($type) ?></p>
            <a href="<?= $project->url() ?>" class="hover:text-indigo-500">
              <h2 class="text-2xl font-bold mb-3"><?= $project->title() ?></h2>
            </a>
            <p class="text-sm"><?= $project->teaser() ?></p>

            <p class="text-sm mt-3">
              <a href="<?= $project->url() ?>" class="hover:text-indigo-500">
                Discover <?= strtolower($type) ?> &rarr;
              </a>
            </p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<?php snippet('footer') ?>
