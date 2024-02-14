<?php require 'partials/header.php' ?>
<?php require 'partials/adminMenu.php' ?>
<?php $users = $database->selectALL('users'); ?>

<section class="p-10 ml-80">
    <h1 class="text-5xl sm:text-2xl sm:font-bold">All Users</h1>
    <ul>
        <?php if (isset($users)):
            foreach ($users as $key => $value): ?>
                <li class="bg-gray-100 mt-7 rounded-xl p-6 flex items-center gap-10 border">
                    <div class="h-28 w-28 rounded-full">
                        <?php
                        if ($value['profile_picture'] == " "): ?>
                            <svg class="h-24 w-24 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black"
                                aria-hidden="true">
                                <path d="M12 22.01c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10z"
                                    opacity=".4"></path>
                                <path
                                    d="M12 6.94c-2.07 0-3.75 1.68-3.75 3.75 0 2.03 1.59 3.68 3.7 3.74h.18a3.743 3.743 0 003.62-3.74c0-2.07-1.68-3.75-3.75-3.75zM18.78 19.36A9.976 9.976 0 0112 22.01c-2.62 0-5-1.01-6.78-2.65.24-.91.89-1.74 1.84-2.38 2.73-1.82 7.17-1.82 9.88 0 .96.64 1.6 1.47 1.84 2.38z">
                                </path>
                            </svg>
                        <?php else:
                            echo '<img src="../USER/USER_IMAGES/' . $value['profile_picture'] . '" alt=""
                        class="h-full w-full object-fit rounded-full border">' ?>
                        <?php endif; ?>

                    </div>
                    <div class="flex justify-between items-center w-full">
                        <div class="space-y-5 w-full">
                            <div class="flex justify-between">
                                <div class="flex gap-10 w-full">
                                    <h2 class="font-bold text-2xl">
                                        <?= $value['name'] ?>
                                        (
                                        <?= $value['id'] ?>)
                                    </h2>
                                    <?php
                                    if ($value['status'] == "active") {
                                        echo '<span
                                                class="h-fit px-2 rounded-full bg-blue-200">' . $value['status'] .
                                            '</span>';
                                    } else {
                                        echo '<span
                                                class="h-fit px-2 rounded-full bg-blue-200">' . $value['status'] .
                                            '</span>';
                                    }
                                    ?>
                                </div>
                                <form method="post" action="INACTIVE_DELETE_USER.PHP?user_id=<?php echo $value['id'] ?>"
                                    class="">
                                    <button name=""
                                        class="bg-red-800 text-white h-10 items-center flex justify-center px-5 rounded-full">Delete</button>
                                </form>
                            </div>
                            <div class="flex font-semi-bold text-lg divide-x">
                                <dl class="space-y-2 pr-5">
                                    <div class="flex gap-2">
                                        <dt class="font-bold text-gray-500">Phone:</dt>
                                        <dd>
                                            <?= $value['phone'] ?>
                                        </dd>
                                    </div>
                                    <div class="flex gap-2">
                                        <dt class="font-bold text-gray-500">Email:</dt>
                                        <dd>
                                            <?= $value['email'] ?>
                                        </dd>
                                    </div>
                                </dl>
                                <dl class="space-y-2 px-5">
                                    <div class="flex gap-2">
                                        <dt class="font-bold text-gray-500">DOB:</dt>
                                        <dd>
                                            <?= $value['dob'] ?>
                                        </dd>
                                    </div>
                                    <div class="flex gap-2">
                                        <dt class="font-bold text-gray-500">Gender:</dt>
                                        <dd>
                                            <?= $value['gender'] ?>
                                        </dd>
                                    </div>
                                </dl>
                                <dl class="space-y-2 px-5">
                                    <div class="flex gap-2">
                                        <dt class="font-bold text-gray-500">Address:</dt>
                                        <dd>
                                            <?= $value['address'] ?>
                                        </dd>
                                    </div>

                                    <div class="flex gap-2">
                                        <dt class="font-bold text-gray-500">sequrity question</dt>
                                        <dd>
                                            <?= $value['security_question'] ?>
                                        </dd>
                                    </div>
                                </dl>
                                <dl class="space-y-2 px-5">
                                    <div class="flex gap-2">
                                        <dt class="font-bold text-gray-500">User Created</dt>
                                        <dd>
                                            <?= $value['registration_date'] ?>
                                        </dd>
                                    </div>

                                    <div class="flex gap-2">
                                        <dt class="font-bold text-gray-500">User modified</dt>
                                        <dd>
                                            <?= $value['modified_date'] ?>
                                        </dd>
                                    </div>
                                </dl>

                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="flex items-center justify-center p-28 itelic text-gray-400">
                <?= "No user yet"; ?>
            </div>
        <?php endif ?>
    </ul>
</section>

<?php require 'partials/footer.php' ?>