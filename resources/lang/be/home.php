<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'landing' => [
        'download' => 'Спампаваць',
        'online' => '<strong>:players</strong> бягучая колькасць гульцоў у<strong>:games</strong> гульнях',
        'peak' => 'Пік, :count актыўных карыстальнікаў',
        'players' => 'Зарэгістравана гульцоў <strong>:count</strong>',
        'title' => 'вітаем',
        'see_more_news' => '',

        'slogan' => [
            'main' => 'лепшая бясплатная рытм-гульня',
            'sub' => 'рытм усяго ў націску ад вас',
        ],
    ],

    'search' => [
        'advanced_link' => 'Пашыраны пошук',
        'button' => 'Пошук',
        'empty_result' => 'Нічога не знойдзена!',
        'keyword_required' => 'Пошукавае слова абавязковае',
        'placeholder' => 'пішыце тут',
        'title' => 'Пошук',

        'beatmapset' => [
            'login_required' => '',
            'more' => 'больш :count вынікаў пошуку бітмап',
            'more_simple' => 'Праглядзець іншыя вынікаў пошуку бітмап',
            'title' => 'Бітмапы',
        ],

        'forum_post' => [
            'all' => 'Усе форумы',
            'link' => 'Пошук па форуму',
            'login_required' => '',
            'more_simple' => 'Праглядзець іншыя вынікі пошуку па форуму',
            'title' => 'Форум',

            'label' => [
                'forum' => 'пошук па форумах',
                'forum_children' => 'уключаючы падфорумы',
                'topic_id' => 'тэма #',
                'username' => 'аўтар',
            ],
        ],

        'mode' => [
            'all' => 'усе',
            'beatmapset' => 'бітмапы',
            'forum_post' => 'форум',
            'user' => 'гульцы',
            'wiki_page' => 'вікі',
        ],

        'user' => [
            'login_required' => '',
            'more' => 'больш :count вынікаў пошуку гульцоў',
            'more_simple' => 'Прагляд іншых вынікаў пошуку гульцоў',
            'more_hidden' => 'Вынік пошуку гульцоў скарочаны да :max. Паспрабуйце удакладніць запыт.',
            'title' => 'Гульцы',
        ],

        'wiki_page' => [
            'link' => 'Пошук па вікі',
            'more_simple' => 'Прагляд іншых вынікаў пошуку па вікі',
            'title' => 'Вікі',
        ],
    ],

    'download' => [
        'tagline' => "давай<br>распачнем!",
        'action' => 'Спампаваць osu!',

        'help' => [
            '_' => '',
            'help_forum_link' => '',
            'support_button' => '',
        ],

        'os' => [
            'windows' => 'для Windows',
            'macos' => 'для macOS',
            'linux' => 'для Linux',
        ],
        'mirror' => 'люстэрка',
        'macos-fallback' => 'для macOS',
        'steps' => [
            'register' => [
                'title' => 'стварыце ўлік. запіс',
                'description' => 'прытрымлівайцеся падказак гульні, каб увайсці або стварыць уліковы запіс',
            ],
            'download' => [
                'title' => 'спампаваць гульню',
                'description' => 'націсніце на кнопку ніжэй, каб спампаваць усталёўшчык, а потым запусціце яго!',
            ],
            'beatmaps' => [
                'title' => 'спампуйце бітмапы',
                'description' => [
                    '_' => ':browse вялікую бібліятэку створаных гульцамі бітмап і пачніце гульню!',
                    'browse' => 'адкрыйце',
                ],
            ],
        ],
        'video-guide' => 'відэа дапаможнік',
    ],

    'user' => [
        'title' => 'панэль',
        'news' => [
            'title' => 'Навіны',
            'error' => 'Памылка загрузкі навін, паспрабуйце перазагрузіць старонку?...',
        ],
        'header' => [
            'stats' => [
                'friends' => 'Сяброў у сетцы',
                'games' => 'Гульні',
                'online' => 'Карыстальнікаў у сетцы',
            ],
        ],
        'beatmaps' => [
            'new' => 'Новыя ранкаваныя бітмапы',
            'popular' => 'Папулярныя бітмапы',
            'by_user' => '',
        ],
        'buttons' => [
            'download' => 'Спампаваць osu!',
            'support' => 'Падтрымаць osu!',
            'store' => 'Крама osu!',
        ],
    ],

    'support-osu' => [
        'title' => 'Уаў!',
        'subtitle' => 'Здаецца, вы добра праводзіце час! :D',
        'body' => [
            'part-1' => 'Ці ведалі вы, што osu! не мае рэкламы, і спадзяецца на падтрымку гульцоў для распрацоўкі і пакрывання расходаў?',
            'part-2' => 'Ці ведалі вы, што падтрымка osu! дае вам мноства карысных магчымасцяў, напрыклад <strong>in-game спампоўванне</strong> падчас назірання або ў шматкарыстальніцкіх гульнях?',
        ],
        'find-out-more' => 'Націсніце тут, каб даведацца больш!',
        'download-starting' => "Ах, не турбуйцеся, ваша спампоўванне бітмапы ўжо пачалося ;)",
    ],
];
