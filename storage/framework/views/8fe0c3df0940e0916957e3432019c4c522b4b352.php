



<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Forgot Password</title>
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
                <img src="<?php echo e(asset('assets\img\loginpage\img\ev.svg')); ?>">
            </div>
            <!-- ============================== Login Content ===================================== -->
            <div class="login-content-lp">

                
                <form method="POST" action="<?php echo e(route('verification.send')); ?>">
                    <?php echo csrf_field(); ?>

                    <img src="<?php echo e(asset('assets\img\loginpage\img\avatar-2.svg')); ?>">
                    <h2 class="title">Welcome</h2>

                    <div class="text-md text-gray-600">
                        <h6 style="color:darkgray; text-align:center;">Thanks for signing up!
                            Please Check your email inbox verification link has been sent to the email address you
                            provided during registration.</h6>
                        <?php if(session('status') == 'verification-link-sent'): ?>
                            <div class="font-medium  text-green-600">
                                <h6 style="color:#1597e5; text-align:center;">A new verification link has been sent to the email address you provided during
                                    registration.</h6>
                            </div>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn-lp">Resend Link</button>
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
<?php /**PATH C:\Users\cws\Documents\Master Laravel Project\Total-Services\resources\views/auth/verify-email.blade.php ENDPATH**/ ?>