<?php
$projetos = [
    [
        'titulo' => 'titulo',
        'finalizado' => false,
        'ano' => '2023',
        'descricao' => 'descricao',
        'stacks' => ['PHP', 'HTML', 'CSS', 'JS'],
        'img' => '/img/teste-projeto.png',
    ],
       [
        'titulo' => 'titulo',
        'finalizado' => true,
        'ano' => '2021',
        'descricao' => 'descricao',
        'stacks' => ['HTML', 'CSS', 'JS'],
        'img' => '/img/teste-projeto.png',
    ],
]
?>
<section class="space-y-3 py-6" id="projetos">
    <h2 class="font-bold text-2xl">Meus Projetos</h2>
<?php foreach ($projetos as $projeto): ?>
    <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3 ">
        <div class="w-1/5 flex items-center justify-middle">
            <img src="<?= $projeto['img']?>" class="h-42 rouded-md" />
        </div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3">            
                    <h3 class="font-semibold text-xl">
                        <?php if ($projeto['finalizado']): ?>✅<?php endif; ?>
                        <?= $projeto['titulo'] ?>
                        <?php if ($projeto['finalizado']): ?><span class=" text-xs text-gray-400 opacity-50 italic">(finalizado em <?= $projeto['ano'] ?>)</span>
                        <?php else: ?>
                            <span class=" text-xs text-gray-400 opacity-50 italic">(em andamento)</span>
                        <?php endif; ?>
                    </h3>
                    <div class="space-x-1">
                        <?php 
                        $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];                        
                        foreach ($projeto['stacks'] as $posicao => $language): ?>                            
                            <span class="bg-<?= $colors[$posicao] ?>-400 text-<?= $colors[$posicao] ?>-900 rounded-md px-2 py-1 font-semibold text-sx">
                                <?= $language ?>
                            </span>
                        <?php endforeach; ?>
                    </div>          
            </div>
            <p class="leading-6">
                <?= $projeto['descricao'] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>
</section>