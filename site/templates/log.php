<?php snippet('header') ?>

<div class="container mx-auto p-5 md:p-10">
    <h1 class="text-5xl mb-4 font-bold">Log</h1>
    <ul>
        <?php 
        $allPages = $site->index()->listed()->sortBy('date', 'desc');
        foreach ($allPages as $page): ?>
            <li>
                <div class="bg-black text-white px-2 py-1 rounded-full"><?= $page->template() ?></div>
                <a href="<?= $page->url() ?>"><?= $page->title() ?></a>
                <span><?= $page->date()->toDate('Y-m-d') ?></span>
            </li>
        <?php endforeach ?>
    </ul>
</div>

<?php snippet('footer') ?>
