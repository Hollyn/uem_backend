<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>

<div class="panel">
    <div class="panel-heading">
        <h1 class="panel-title"><b><?= __("Modifier un groupe")?></b></h1>
    </div>
    <div class="panel-body">
        <?= $this->Form->create($group) ?>
        <?= $this->Form->control('name', ['label' => false, 'class' => 'form-control input-lg', 'placeholder' => 'Nom']) ?>
        <br>
        <?= $this->Form->control('description', ['label' => false, 'class' => 'form-control input-lg', 'placeholder' => "Description"]);  ?>
        <br>
        <?= $this->Form->button(__('Modifier'), ['class' => 'btn btn-primary btn-lg']) ?>
        <?= $this->Form->end() ?>

    </div>
</div>