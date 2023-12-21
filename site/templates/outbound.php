<?php snippet('header') ?>

<div class="container mx-auto p-10">
    <div class="flex flex-wrap gap-20 md:gap-0">
        <div class="w-fill md:w-1/2 flex">
            <div class="w-40">
                <h2>Pinned</h2>
            </div>

            <div class="flex gap-5 flex-col">
                <?php foreach (page('outbound')->children()->listed()->filterBy('pinned', '==', 'true')->sortBy('date', 'desc') as $link): ?>
                    <div>
                        <h4 class="font-bold"><a target="_blank" href="<?= $link->address() ?>"><?= $link->title() ?></a> &rarr;</h4>
                        <p class="text-sm"><?= $link->note() ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Non-Pinned Column -->
        <div class="w-full md:w-1/2 flex flex-col gap-20">
            <?php 
            $nonPinnedLinks = page('outbound')->children()->listed()->filterBy('pinned', '!=', 'true')->sortBy('date', 'desc');

            foreach ($nonPinnedLinks->groupBy(function ($p) { return $p->date()->toDate('F Y'); }) as $month => $links): ?>
                <div class="flex">
                    <div class="w-40">
                        <h2><?= ucfirst($month) ?></h2>
                    </div>

                    <div class="flex gap-5 flex-col">
                        <?php foreach ($links as $link): ?>
                            <div>
                                <h4 class="font-bold"><a target="_blank" href="<?= $link->address() ?>"><?= $link->title() ?></a> &rarr;</h4>
                                <p class="text-sm"><?= $link->note() ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php snippet('footer') ?>
