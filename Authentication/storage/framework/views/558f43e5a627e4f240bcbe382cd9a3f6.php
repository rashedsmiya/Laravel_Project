<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Register</title>
</head>
<body>
    
    <div class="mx-auto mt-5 w-full max-w-xl bg-gray-200 rounded-lg shadow-lg p-6">
        <div>
            <h3 class="text-white text-lg font-semibold bg-blue-500 px-4 py-2 rounded-t-lg">Register</h3>
        </div>
        <div class="mt-4">
            <form action="<?php echo e(route('registerSave')); ?>" method="POST">
                <?php echo csrf_field(); ?>
            <div class="mt-3">
                <label for="username" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="username"
                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>
            <div class="mt-3">
                <label for="useremail" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" name="email" id="useremail"
                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>
            <div class="mt-3">
                <label for="userpassword" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="userpassword"
                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>
            <div class="mt-3">
                <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" id="confirm_password"
                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>
            <div class="mt-5 flex flex-col sm:flex-row gap-3">
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition"> Register </button>
                <a href="/" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition text-center">Back</a>
            </div>
            </form>
        </div>
    </div>

        <?php if($errors->any()): ?>
            <div class="card-footer text-danger">
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>

</body>
</html><?php /**PATH C:\Users\user\Desktop\Laravel_Project\Authentication\resources\views/register.blade.php ENDPATH**/ ?>