<h1>Create an account</h1>

<?php $form = app\core\form\Form::begin('', 'POST') ?>
<?php echo $form->field($model, 'first_name') ?>
<?php echo $form->field($model, 'last_name') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'confirm_password')->passwordField() ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php app\core\form\Form::end() ?>

<!-- <form action="" method="post">
  <div class="row">
    <div class="col">
      <div class="mb-3">
        <label class="form-label">First name</label>
        <input type="text" name="first_name" class="form-control <?php echo $model->hasError('first_name') ? 'is-invalid' : '' ?>" value="">
        <div class="invalid-feedback">
          <?php echo $model->getFirstError('first_name') ?>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="mb-3">
        <label class="form-label">Last name</label>
        <input type="text" name="last_name" class="form-control">
      </div>
    </div>
  </div>

  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" name="email" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Confirm password</label>
    <input type="password" name="confirm_password" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->