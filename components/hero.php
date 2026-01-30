<?php
$itens = [
    [
        'href' => '',
        'src' => '/img/linkedin.png',
        'alt' => 'linkedin',
    ],
       [
        'href' => '',
        'src' => '/img/facebook.png',
        'alt' => 'Github',
    ],
       [
        'href' => '',
        'src' => '/img/facebook.png',
        'alt' => 'facebook',
       ],
    ]
?>       
        
        <section class="flex gap-x-3">
            <div class="w-2/3">
                <h1 class="text-3xl font-bold">Olá, meu nome é Tati</h1>
                <p class="text-xl leading-6 mt-6">Falar um pouco de mim...</p>
            </div>
            <div class="w-1/3 flex items-center justify-center">
                <img class="h-52 hover:animate-pulse -mt-4" src="/img/eu.jpg" alt="Minha foto" />
            </div>
        </section>
        <div>
            <ul class="flex gap-x-3 font-medium">
                 <?php foreach ($itens as $item): ?> 
                <li>
                    <a href="<?= $item['href'] ?>" class="hover:underline">
                        <img class="h-8 hover:animate-pulse" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>" />
                    </a>
                </li>
                <?php endforeach ?>
            </ul>
        </div>