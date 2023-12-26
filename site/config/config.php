<?php

return [
  'debug'  => true,
  'routes' => [
    [
      'pattern' => 'feed',
      'method' => 'GET',
      'action'  => function () {
          $options = [
              'title'       => 'Articles on forward.tools',
              'description' => 'This is a collection of my ongoing thoughts, daily learnings, and small experiments.',
              'link'        => 'articles',
              'textfield'   => 'teaser'
          ];
          $feed = site()->index()->listed()->filter(fn ($child) => $child->teaser()->exists())->sortBy('date', 'desc')->limit(250)->feed($options);

          return $feed;
      }
    ],
    [
      'pattern' => 'sitemap.xml',
      'method' => 'GET',
      'action'  => function () {
          $options = [
              'images'       => false,
              'videos'       => false,
          ];
          $feed = site()->index()->listed()->limit(50000)->sitemap($options);
          return $feed;
      }
    ],
  ],
  'panel' => [
    'menu' => [
      'articles' => [
        'icon'  => 'pen',
        'label' => 'Articles',
        'link'  => 'pages/articles',
        'current' => function () {
          $kirby = kirby();
          $path = $kirby->request()->path()->toString();
          return Str::contains($path, 'pages/articles');
        }
      ],
      'projects' => [
        'icon'  => 'bolt',
        'label' => 'Projects',
        'link'  => 'pages/projects',
        'current' => function () {
          $kirby = kirby();
          $path = $kirby->request()->path()->toString();
          return Str::contains($path, 'pages/projects');
        }
      ],
      'questions' => [
        'icon'  => 'chat',
        'label' => 'Questions',
        'link'  => 'pages/questions',
        'current' => function () {
          $kirby = kirby();
          $path = $kirby->request()->path()->toString();
          return Str::contains($path, 'pages/questions');
        }
      ],
      'links' => [
        'icon'  => 'heart',
        'label' => 'Links',
        'link'  => 'pages/outbound',
        'current' => function () {
          $kirby = kirby();
          $path = $kirby->request()->path()->toString();
          return Str::contains($path, 'pages/outbound');
        }
      ],
      '-',
      'site' => [
        'label' => 'Overview',
        'current' => function () {
          $kirby = kirby();
          $path = $kirby->request()->path()->toString();
          return Str::contains($path, 'panel/site');
        }
      ],
      'users',
      'system'
    ]
  ]
];