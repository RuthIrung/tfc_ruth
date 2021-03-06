<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typetravaux $typetravaux
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typetravaux->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typetravaux->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Liste Typetravauxs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Liste Travauxs'), ['controller' => 'Travauxs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouveau Travaux'), ['controller' => 'Travauxs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typetravauxs form large-9 medium-8 columns content">
    <?= $this->Form->create($typetravaux) ?>
    <fieldset>
        <legend><?= __('Modifier Typetravaux') ?></legend>
        <?php
            echo $this->Form->control('designation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
