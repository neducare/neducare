

<?php $__env->startSection('content'); ?>

<style type="text/css">

.login-image{
    width: inherit; 
    height: 100%; 
    position: fixed; 
    background-image: url('<?php echo e(asset("public/assets/images/login.png")); ?>');
    background-size: cover; 
    background-position: center;
}

</style>

<div class="row h-100">
    <div class="col-lg-6 d-none d-lg-block p-0 h-100">
        <div class="bg-image login-image">
        </div>
    </div>
    <div class="col-lg-6 p-0 h-100 position-relative">
        <div class="parent-elem">
            <div class="middle-elem">
                <div class="primary-form">
                    <div class="form-logo mb-5">
                        <img height="60px" src="<?php echo e(asset('public/assets/uploads/logo/'.get_settings('dark_logo'))); ?>">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="login-form">
                                <form method="POST" action="<?php echo e(route('password.update')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-row">
                                        <input type="hidden" name="token" value="<?php echo e($token); ?>">

                                        <div class="form-group mt-3">
                                        <label for="email" class="form-label"><?php echo e(get_phrase('Email')); ?></label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light-block"><i class="bi bi-envelope"></i></span>
                                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mb-0" name="email" value="<?php echo e($email ?? old('email')); ?>" required autocomplete="email" autofocus readonly>

                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label for="password" class="form-label"><?php echo e(get_phrase('Password')); ?></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-key"></i></span>
                                                <input id="password" placeholder="********" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mb-0" name="password" required autocomplete="new-password">

                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                        <label for="password-confirm" class="form-label"><?php echo e(get_phrase('Confirm Password')); ?></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-key"></i></span>
                                                <input id="password-confirm" placeholder="********" type="password" class="form-control eForm-control mb-0" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary w-100">
                                                    <?php echo e(get_phrase('Reset Password')); ?>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.signin_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u856139451/domains/neducare.com/public_html/resources/views/auth/passwords/reset.blade.php ENDPATH**/ ?>