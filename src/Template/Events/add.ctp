
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<div class="events form">
    <?= $this->Form->create($event, ['enctype' => 'multipart/form-data', 'class' => 'form-horizontal', 'role' => 'form']) ?>




    <fieldset>
        <legend><?php echo __('Add Event'); ?></legend>
        <?php
        echo $this->Form->control('title');
        echo $this->Form->control('description');
        echo $this->Form->control('location');
        echo $this->Form->control('date');
        echo $this->Form->control('startTime');
        echo $this->Form->control('endTime');
        echo $this->Form->control('status');?>

        <?php echo $this->Form->input('photo_path', array('type'=>'file'));
        echo $this->Form->control('user_id', ['options' => $users]);

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


<img src="" id="profile-img-tag" width="200px" />

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#photo-path").change(function(){
        readURL(this);
    });
</script>
