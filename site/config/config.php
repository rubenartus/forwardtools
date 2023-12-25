<?php

return [
  'debug'  => false,
  'routes' => [
    [
      'pattern' => 'feed',
      'action'  => function () {
        return page('feed');
      }
    ]
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