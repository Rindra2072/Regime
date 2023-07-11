<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-5">
    <form action="<?php echo base_url('RegimeCI/insert'); ?>" method="post">
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Regime</label>
            <input type="text" name="regime" class="form-control">
        </div>
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Picture</label>
            <input type="int" name="id_picture" class="form-control">
        </div>
        <div class="input-group input-group-outline mb-3">
            <label class="form-label">Description</label>
            <input type="textarea" name="description" class="form-control">
        </div>
        <div class="input-group input-group-outline mb-3">
            <label class="form-label">objective</label>
            <input type="int" name="id_Objective" class="form-control">
        </div>
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Weight</label>
            <input type="int" name="weight" class="form-control">
        </div>
        <div class="input-group input-group-outline mb-3">
            <label class="form-label">Price</label>
            <input type="int" name="price" class="form-control">
        </div>
        <div class="text-center">
            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Validez</button>
        </div>
    </form>
</div>
</div>
</div>