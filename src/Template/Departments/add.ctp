
<div class="panel">
    <div class="panel-heading">
        <h1 class="panel-title"><b>Ajouter un département</b></h1>
    </div>
    <div class="panel-body">

        <?= $this->Form->create($department) ?>
        <!-- legend><?php // __('Ajouter Département') ?></legend -->
        <?= $this->Form->control('name', ['label' => false, 'class' => 'form-control  input-lg', 'placeholder' => 'Nom']) ?>
        <br>
        <?= $this->Form->control('abbreviation', ['label' => false, 'class' => 'form-control input-lg', 'placeholder' => 'Abréviation']) ?>
        <br>
        <?= $this->Form->control('description', ['label' => false, 'class' => 'form-control input-lg', 'placeholder' => 'Description']) ?>

    <br>
    <?= $this->Form->button(__('Ajouter'), ['class' => 'btn btn-primary btn-lg']) ?>
    <?= $this->Form->end() ?>
</div>
