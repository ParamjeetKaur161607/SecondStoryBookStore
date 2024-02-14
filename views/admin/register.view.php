<?php include 'partials/header.php'; ?>
<?php include 'partials/adminMenu.php'; ?>
<section class="flex pl-80">

    <div class="w-full p-20 space-y-5">
        <h1 class="text-5xl font-bold text-center">ADD ADMIN</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
            class="py-5 px-10 rounded-lg grid grid-cols-2 gap-8 w-full" enctype="multipart/form-data">
            <div class="flex flex-col">
                <label for="name">Admin Name</label>
                <input type="text" name="name" id="admin_name"
                    class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500"
                    value="<?php echo $object_validation->name; ?>">
                <span class="text-red-500 text-sm">
                    <?php echo $object_validation->error_name ?>
                </span>
            </div>
            <div class="flex flex-col">
                <label for="email">Admin Email</label>
                <input type="text" name="email" id="email"
                    class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500"
                    value="<?php echo $object_validation->email; ?>">
                <span class="text-red-500 text-sm">
                    <?php echo $object_validation->error_email ?>
                </span>
            </div>
            <div class="flex flex-col">
                <label for="phone">Admin Phone</label>
                <input type="text" name="phone" id="phone"
                    class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500"
                    value="<?php echo $object_validation->phone; ?>">
                <span class="text-red-500 text-sm">
                    <?php echo $object_validation->error_phone ?>
                </span>
            </div>
            <div class="flex gap-10 justify-between">
                <div class="flex flex-col flex-1">
                    <label for="gender">Admin Gender</label>
                    <select name="gender" id="gender"
                        class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500">
                        <option value="none" selected disabled hidden>Select Admin's gnder</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                    <span class="text-red-500 text-sm">
                        <?php echo $object_validation->error_gender; ?>
                    </span>
                </div>
                <div class="flex flex-col flex-1">
                    <label for="dob">Admin's DOB</label>
                    <input type="date" name="dob" id="dob"
                        class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500"
                        value="<?php echo $object_validation->dob; ?>">
                    <span class="text-red-500 text-sm">
                        <?php echo $object_validation->error_dob; ?>
                    </span>
                </div>
            </div>

            <div class="flex flex-col col-span-2">
                <label for="address">Admin Address</label>
                <textarea name="address" id="" cols="30" rows="1"
                    class="outline-none pb-4 border-b border-gray-500 text-gray-500"><?php echo $object_validation->address; ?></textarea>
                <span class="text-red-500 text-sm">
                    <?php echo $object_validation->error_address; ?>
                </span>
            </div>
            <div class="flex flex-col">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="outline-none border-b border-gray-500 bg-grayy-200 h-10 text-gray-500"
                    value="<?php echo $object_validation->password; ?>">
                <span class="text-red-500 text-sm">
                    <?php echo $object_validation->error_password ?>
                </span>
            </div>
            <div class="flex flex-col justify-end">
                <input type="file" name="profile_picture" id="profile_picture"
                    class="outline-none bg-grayy-200 h-10 border-b border-gray-500">
                <span class="text-red-500 text-sm">
                    <?php echo $object_validation->error_profile_picture; ?>
                </span>
            </div>
            <div class="flex flex-col col-span-2">
                <button type="submit" name="add_admin"
                    class="outline-none bg-green-400 rounded-lg p-3">Register</button>
            </div>
        </form>
    </div>

</section>
<?php include 'partials/footer.php'; ?>
