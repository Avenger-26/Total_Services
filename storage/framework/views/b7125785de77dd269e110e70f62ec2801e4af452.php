<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css\style.css')); ?>">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <!-- ========== Background Image ======= -->
        <img class="wave" src="<?php echo e(asset('assets\img\loginpage\img\wave_1.png')); ?>">
        <!-- ========== Background Image ======= -->
        <!-- ================================== Main Container ===================================== -->
        <div class="container-lp">
            <div class="img-lp">
                <img src="<?php echo e(asset('assets\img\login.png')); ?>">
            </div>
            <!-- ============================== Login Content ===================================== -->
            <div class="login-content-lp">


                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <img src="<?php echo e(asset('https://cdn-icons-png.flaticon.com/512/1995/1995670.png')); ?>"
                        style="filter: drop-shadow(0px 0px 3px black);">
                    <h2 class="title">Login</h2>
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
                    <?php if(session('status')): ?>
                        <div class="font-medium text-md text-green-600">
                            <h6 style="color: #1597e5; text-align:center"><?php echo e(session('status')); ?></h6>
                        </div>
                    <?php endif; ?>
                    <div class="input-div one">
                        <div class="i-lp">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="div">
                            <h5>Email Id</h5>
                            <input id="email" type="email" name="email" :value="old('email')" required=""
                                class="input validate">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i-lp">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input id="password" type="password" name="password" required="" class="input">
                        </div>
                    </div>
                    <div class="flex-sb-m">
                        <!-- ============================Remember Me =========================  -->
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" type="checkbox" id="remember_me" name="remember-me">
                            <label class="label-checkbox100" for="remember_me">
                                Remember me
                            </label>
                        </div>
                        <!-- ============================Remember Me =========================  -->
                        <!-- ============================Forgot Password =========================  -->
                        <div class="forgot-p">
                            <a href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
                        </div>
                        <!-- ============================Forgot Password =========================  -->
                    </div>
                    <button type="submit" class="btn-lp">Login<i class="fa fa-sign-in"
                            aria-hidden="true"></i></button>
                    <!-- ================ Redirect on Registration page ===================== -->
                    <div class="">
                        <span class="span-r"> Not a member?
                            <a href="<?php echo e(route('register')); ?>">Sign up now!</a>
                        </span>
                    </div>
                    <span class="span-r">
                        <a href="/">Back to Home</a>
                    </span>
                </form>


            </div>
            <!-- =================================== Login Content  =============================== -->

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
<?php /**PATH C:\Users\cws\Documents\Master Laravel Project\Total-Services\resources\views/auth/login.blade.php ENDPATH**/ ?>