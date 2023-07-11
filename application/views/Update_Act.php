<div class="content">
    <div class="row">
        <div class="col-md-3">
            </div>
        <div class="col-md-5">
        <div>
            <form action="<?php echo base_url('Activity_Controller/update'); ?>" method="post">
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Name Activity</label>
                    <input type="text" name="name_Activity" value="<?php echo $act->name_Activity;?>" class="form-control"require>
                </div>
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Description</label>
                    <input type="description" name="description" value="<?php echo $act->description;?>" class="form-control"require>
                    <input type="hidden" name="id" value="<?php echo $act->id_Activity;?>" >
                </div>
                <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Validez</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>