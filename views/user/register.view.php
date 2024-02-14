<?php include 'partials/header.php'; ?>
<?php require 'navigation.php' ?>
<section class="flex">
    <div class="bg-black bg-[url('../IMAGES/STORE.jpeg')] bg-center h-screen w-1/3 py-10 pl-10">

    </div>
    <div class="w-full p-10 space-y-5">
        <h1 class="text-5xl font-bold text-center">REGISTER NOW</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
            class="py-5 px-10 rounded-lg grid grid-cols-2 gap-8 w-full" enctype="multipart/form-data">
            <div class="flex flex-col">
                <label for="name">Username</label>
                <input type="text" name="name" id="name"
                    class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500"
                    value="<?php  ?>">
                <span class="text-red-500 text-sm">
                    <?php  ?>
                </span>
            </div>
            <div class="flex flex-col">
                <label for="email">User Email</label>
                <input type="text" name="email" id="email"
                    class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500"
                    value="<?php  ?>">
                <span class="text-red-500 text-sm">
                    <?php  ?>
                </span>
            </div>
            <div class="flex flex-col">
                <label for="phone">User Phone</label>
                <input type="text" name="phone" id="phone"
                    class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500"
                    value="<?php  ?>">
                <span class="text-red-500 text-sm">
                    <?php  ?>
                </span>
            </div>
            <div class="flex gap-10 justify-between">
                <div class="flex flex-col flex-1">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender"
                        class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500">
                        <option value="none" selected disabled hidden>Select your age</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                    <span class="text-red-500 text-sm">
                        <?php  ?>
                    </span>
                </div>
                <div class="flex flex-col flex-1">
                    <label for="dob">DOB</label>
                    <input type="date" name="dob" id="dob"
                        class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500" value="">
                    <span class="text-red-500 text-sm">
                        <?php  ?>
                    </span>
                </div>
            </div>

            <div class="flex flex-col col-span-2">
                <label for="address">Address</label>
                <textarea name="address" id="" cols="30" rows="1"
                    class="outline-none pb-4 border-b border-gray-500 text-gray-500"><?php  ?></textarea>
                <span class="text-red-500 text-sm">
                    <?php  ?>
                </span>
            </div>
            <div class="flex flex-col">
                <label for="user_security">Your favourite author?</label>
                <input type="password" name="user_security" id="user_security"
                    class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500"
                    value="<?php  ?>">
                <span class="text-red-500 text-sm">
                    <?php  ?>
                </span>
            </div>
            <div class="flex flex-col">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500"
                    value="<?php  ?>">
                <span class="text-red-500 text-sm">
                    <?php  ?>
                </span>
            </div>
            <div class="flex flex-col justify-center">
                <div class="flex justify-between">
                    <input type="file" name="profile_picture" id="profile_picture"
                        class="outline-none bg-grayy-200 h-10 border-b border-gray-500">
                    <?php
                    if (isset($_FILES['profile_picture'])) {
                        $fileName = $_FILES['profile_picture']['name'];
                        echo $fileName;
                    }
                    ?>
                </div>
                <span class="text-red-500 text-sm">
                    <?php  ?>
                </span>
            </div>
            <div class="flex flex-col col-span-2">
                <button type="submit" name="register_user"
                    class="outline-none bg-green-400 rounded-lg p-3">Register</button>
            </div>
        </form>
        <a href="LOGIN.PHP" class="text-blue-600 underline p-10">Login if you already have an account.</a>
    </div>

</section>
<?php include 'partials/footer.php'; ?>