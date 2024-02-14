<?php include 'partials/header.php'; ?>
<?php require 'navigation.php' ?>
<section class="flex">
    <div class="bg-black bg-[url('../IMAGES/STORE.jpeg')] bg-center  h-screen w-1/3 p-10">
    </div>
    <div class="w-full p-36 space-y-10">
        <h1 class="text-5xl font-bold text-center">LOGIN</h1>
        <form action="" method="post" class="p-10 rounded-lg space-y-10 w-full">
            <div class="flex flex-col gap-2">
                <label for="user_email_login">User Email</label>
                <input type="text" name="user_email_login" id="user_email_login"
                    class="border-b border-gray-500 bg-grayy-200 h-10 outline-none" value="">
            </div>
            <div class="flex flex-col gap-2">
                <label for="user_password_login">Password</label>
                <input type="password" name="user_password_login" id="user_password_login"
                    class="border-b border-gray-500 bg-grayy-200 h-10 outline-none">
            </div>
            <div class="flex flex-col gap-2 mt-10">
                <button type="submit" name="login_user" class="bg-green-400 rounded-lg p-3">Login</button>
            </div>
            <div class="text-red-500 text-center w-full P-5">
                
            </div>
        </form>
        <div class="px-10 flex justify-between">
            <a href="USER_REGISTER.PHP" class="text-blue-600 underline">Register yourself if you have't account
                yet.</a>
            <a href="#" class="text-blue-600 underline">forget password</a>
        </div>
    </div>

</section>
<?php include 'partials/footer.php'; ?>