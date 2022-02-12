

<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <!-- ========== Background Image ======= -->
        <img class="wave-rp" src="<?php echo e(asset('assets\img\loginpage\img\wave_2.png')); ?>">
        <!-- ========== Background Image ======= -->
        <!-- ================================== Main Container ===================================== -->
        <div class="container-lp">
            <!-- ============================== Login Content ===================================== -->
            <div class="login-content-rp">
                
                <form method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>
                    <img src="<?php echo e(asset('assets\img\loginpage\img\register.png')); ?>"
                        style="filter: drop-shadow(0px 0px 3px black)">
                    <h2 class="title">Registration</h2>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => []]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Username</h5>
                            <input id="name" type="text" name="name" :value="old('name')" required=""
                                autocomplete="name" class="input">
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="div">
                            <h5>Email ID</h5>
                            <input id="email" type="email" name="email" :value="old('email')" required=""
                                class="input">
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input id="password" type="password" name="password" required="" autocomplete="new-password"
                                class="input">
                        </div>
                    </div>
                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-user-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Confirm-Password</h5>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                autocomplete="new-password" class="input">
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="i-lp">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="select">
                            <select name="registeras" id="registeras">
                                <option value=" " selected disabled>Register As</option>
                                <option value="CST">Customer</option>
                                <option value="SPV">Service Provider</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn-lp">Register</button>
                    </div>
                    <div class="">
                        <!-- ================== Redirect on Login page =========================  -->
                        <div class="span-r">
                            <a class="" href="<?php echo e(route('login')); ?>">Already a member? Login Now !</a>
                        </div><br>
                        <span class="span-r">
                            <a href="/">Back to Home</a>
                        </span>
                        <!-- ================== Redirect on Login page =========================  -->
                    </div>
                </form>

            </div>
            <!-- =================================== Login Content  =============================== -->
            <div class="img-rp">
                <img src="<?php echo e(asset('assets\img\loginpage\img\rp-2.svg')); ?>">
            </div>
        </div>
        <!-- ================================ Login Container ====================================== -->
        <!-- ================== Script of page =========================== -->
        <script type="text/javascript" src="<?php echo e(asset('assets\js\login\main.js')); ?>"></script>
        <!-- ================== Script of page =========================== -->
    </body>

    </html>
 <?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Shah\Videos\master\testing\Total_Services\resources\views/auth/register.blade.php ENDPATH**/ ?>