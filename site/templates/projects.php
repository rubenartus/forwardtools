<?php snippet('header') ?>

<article class="container mx-auto p-10">
  <div class="flex mb-20 gap-5 flex-col md:flex-row">
    <p class="md:w-1/2 text-2xl">I'm dedicated to exploring and understanding the vast capabilities of AI. My goal is to propel the AI UX space forward by exploring new, innovative interfaces and interactions.</p>

    <p class="md:w-1/2 text-lg">As you discover these projects, if you find yourself intrigued or inspired, I'd love to <a href="mailto:ruben@forward.tools">hear from you</a>. Your ideas, feedback, or questions could be the next inspiring spark.</p>
  </div>  

  <div>
    <?php
    $projectsGrouped = page('projects')->children()->listed()->sortBy('state', 'desc');
    foreach ($projectsGrouped->groupBy(function ($p) { return $p->state(); }) as $state => $projects):
      $state = match ($state) {
        'backlog' => 'Backlog',
        'progress' => 'In Progress', 
        'finished' => 'Finished'
      };
    ?>
      <h2 class="text-xl font-bold border-b mb-5 mt-20"><?= strtoupper($state) ?></h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <?php
          foreach ($projects as $project):
          $type = match ($project->type()->value()) {
            'experiment' => 'Experiment',
            'concept' => 'Concept', 
            'game-concept' => 'Game Concept', 
            'prototype' => 'Prototype',
            'thought-experiment' => 'Thought Experiment'
          };
        ?>
          <div class="flex gap-4">
            <?php if($icon = $project->icon()->toFile()): ?>
              <a href="<?= $project->url() ?>" class="h-32 w-32 shrink-0"><img src="<?= $icon->url() ?>"></a>
            <?php endif; ?>

            <div>
              <p class="text-xs text-gray-500"><?= strtoupper($type) ?></p>

              <a href="<?= $project->url() ?>" class="hover:text-indigo-500 no-underline">
                <h2 class="text-2xl font-bold"><?= $project->title() ?></h2>
              </a>

              <div class="flex gap-1 mt-3">
                <?php
                  $rating = $project->rating()->value();
                  $stars = '';
                  for ($i = 0; $i < 5; $i++) {
                    if ($i < $rating) {
                      echo '<?xml version="1.0" encoding="UTF-8"?><svg width="16px" height="14px" viewBox="0 0 16 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path d="M7.87260236,13.9644335 C5.55330261,12.6210838 3.77320538,11.2080591 2.49195494,9.72571762 C1.19772666,8.22815146 0.408922964,6.65822353 0.0858992296,5.01629206 C0.0858992296,5.01127689 0.0841214435,5.00644083 0.083410329,5.00160478 C-0.344508474,2.87839219 0.912339907,0.778618974 2.97591335,0.16919981 C5.03948679,-0.440219354 7.22257964,0.643662652 8.00006962,2.66363909 C8.77872807,0.641241173 10.9660842,-0.442183758 13.0311334,0.171690036 C15.0961827,0.785563829 16.3494393,2.89177405 15.9137067,5.01611295 L15.9137067,5.01611295 C15.5912163,6.65822353 14.8024126,8.22815146 13.5081843,9.72571762 C12.2262227,11.2094921 10.4450588,12.6223376 8.12451465,13.9665828 C8.04635753,14.0118964 7.94998655,14.0110742 7.87260236,13.9644335 L7.87260236,13.9644335 Z" id="heart" fill="#000000" fill-rule="nonzero"></path></g></svg>';
                    } else {
                      echo '<?xml version="1.0" encoding="UTF-8"?><svg width="16px" height="14px" viewBox="0 0 16 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path d="M3.18833544,0.888488942 C4.03201793,0.639330723 4.90011012,0.736423148 5.63675065,1.10215721 C6.37526179,1.46882001 6.98151001,2.10525596 7.30012731,2.93304725 L7.99996334,4.751273 L8.6999845,2.93311852 C9.01907978,2.10433712 9.6264383,1.46749849 10.3660925,1.10113846 C11.1038745,0.735705785 11.9731396,0.639618708 12.8174248,0.890597987 C13.6338769,1.13330334 14.2950577,1.66117002 14.7207658,2.33760056 C15.1474735,3.01561952 15.3380021,3.84292134 15.2112992,4.68345853 C14.8756481,6.39443538 14.1399699,7.84766006 12.9406654,9.2353888 C11.771723,10.5883521 10.1687752,11.8757349 8.10593887,13.1069553 C5.83280736,11.8743796 4.22810204,10.5874322 3.05940802,9.23531269 C1.85976448,7.8471916 1.1214448,6.39464694 0.821147125,4.86827 C0.644333207,3.99000864 0.81312476,3.11935029 1.23873485,2.40552286 C1.66308005,1.69381688 2.34281778,1.13818912 3.18833544,0.888488942 Z" id="heart" stroke="#000000" stroke-width="1.5" fill-rule="nonzero"></path></g></svg>';
                    }
                  }
                ?>
              </div>

              <p class="text-sm mt-3"><?= $project->teaser() ?></p>

              <p class="text-sm mt-3">
                <a href="<?= $project->url() ?>" class="hover:text-indigo-500">
                  Discover this <?= strtolower($type) ?>
                </a>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</article>

<?php snippet('footer') ?>
