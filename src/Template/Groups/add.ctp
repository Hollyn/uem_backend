<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>

<div class="panel">
    <div class="panel-heading">
        <h1 class="panel-title"><b>Ajouter un groupe</b></h1>
    </div>
    <div class="panel-body">

        <?= $this->Form->create($group) ?>
        <input class="form-control input-lg" placeholder="Nom" type="text" name="name" id="name">
        <br>
        <input class="form-control input-lg" placeholder="Description" type="text" name="description" id="description">
        <br>

        <?= $this->Form->button(__('Ajouter'), ['class' => 'btn btn-primary btn-lg']) ?>
        <?= $this->Form->end() ?>

    </div>
</div>
