<div>
    <form action="<?php echo base_url('Activity_Controller/insert'); ?>" method="post">
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Name Activity</label>
            <input type="text" name="name_Activity" class="form-control">
        </div>
        <div class="input-group input-group-outline mb-3">
            <label class="form-label">Description</label>
            <input type="description" name="description" class="form-control">
        </div>
        <div class="text-center">
            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Validez</button>
        </div>
    </form>
</div>