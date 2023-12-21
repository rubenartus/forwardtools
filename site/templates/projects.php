<?php snippet('header') ?>

<main class="container mx-auto p-10">
  <h1 class="text-3xl font-bold mb-4">Projects</h1>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <?php foreach (page('projects')->children()->listed() as $project): ?>
      <article class="mb-6">
        <h2 class="text-xl font-semibold mb-2">
          <a href="<?= $project->url() ?>"><?= $project->title() ?></a>
        </h2>
        <p class="mb-4"><?= $project->date()->toDate('F j, Y') ?></p>
        <p><?= $project->description()->excerpt(180) ?></p>
      </article>
    <?php endforeach ?>
  </div>
</main>

<?php snippet('footer') ?>
