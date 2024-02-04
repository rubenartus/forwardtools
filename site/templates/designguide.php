<?php snippet('header') ?>

<main class="container mx-auto p-5 md:p-10 pt-0 md:pt-10">
  <h1 class="text-5xl font-medium mt-10">Designer’s Guide to AI</h1>

  <div class="w-2/3 flex flex-col gap-5 mt-10">
    <p class="text-2xl font-medium">To craft truly useful tools and interfaces, you need a deep understanding and feeling for the technology you work with.</p>
    <p>When it comes to artificial intelligence, this is even more critical. As it's still in its early stages, and there is so much left to explore.</p>
    <p>This guide is an effort to describe the capabilities, limitations, and design patterns of modern AI. Ideally helping you to develop your intuition for using AI as a design material.</p>
  </div>
</main>

<div class="flex gap-10 justify-between mx-10 mb-20">
  <?php
    foreach (page('guide')->children()->listed() as $area):
      $ready = $area->ready()->value() == 'true' ? true : false;
      $link = $ready ? $area->url() : '/guide';
  ?>
    <a
      href="<?= $link ?>"
      class="
      w-1/3 rounded-3xl p-6 border-2 border-gray-100 transition-all
      hover:border-indigo-600 hover:text-indigo-600 <?php if (!$ready): ?>text-gray-500<?php endif; ?>
      "
    >
      <h1 class="text-2xl font-medium <?php if (!$ready): ?>line-through<?php endif; ?>"><?= $area->title() ?></h1>
      <?php if (!$ready): ?><p>Coming soon</p><?php endif; ?>
      <p class="mt-3"><?= $area->teaser() ?></p>
    </a>
  <?php endforeach ?>
</div>

<?php snippet('footer') ?>