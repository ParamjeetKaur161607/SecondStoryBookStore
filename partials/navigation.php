<header class="bg-gray-100 sticky top-0">
        <nav class="flex justify-between px-10 py-2 items-center border-b">
            <ul class="flex gap-8 items-center text-xl">
                <li class="h-14 w-34">
                    <img src="public/images/logo.png" alt="" class="h-full w-full object-fit">
                </li>
                <li class="flex">
                    <a href="INDEX.PHP" class="">Home</a>
                </li>
                <?php if (isset($_SESSION['login'])): ?>
                    <li class="flex">
                        <a href="RETURN.PHP" class="">Return</a>
                    </li>
                    <li class="flex">
                        <a href="CUSTOMER_ORDERS.PHP" class="">My Orders</a>
                    </li>
                <?php endif; ?>
            </ul>
            <form action="INDEX.PHP" method="post" class="border bg-white">
                <select name="search_category" id="category" class="h-10 px-2 border-r">
                    <option value="none" selected disabled hidden>Select</option>
                    <option value="all">All</option>
                    <option value="author">Author</option>
                    <option value="title">Title</option>
                    <option value="category">Category</option>
                </select>
                <input type="search" name="search_data" placeholder="Search..." class="w-96 h-10 px-5 outline-none">
                <button name="search" value="search" class="bg-blue-900 text-white h-10 px-5 w-auto">Search</button>
            </form>

            <ul class="flex gap-10 items-center">
                <?php if (!isset($_SESSION['login'])): ?>
                    <li class="hidden lg:flex border-r-2 pr-7">
                        <a href="LOGIN.PHP">Sign in</a>
                    </li>
                    <li class="hidden lg:flex">
                        <a href="USER_REGISTER.PHP">Sign Up</a>
                    </li>
                <?php endif; ?>

                <li>
                    <form action="" method="post">

                        <?php
                        if (isset($_SESSION['login'])) {
                            echo `<button name="update_login" class="h-14 w-14 rounded-full border">`;
                            if (isset($object_CRUD->record["profile_picture"])) {
                                echo '<a href="UPDATE_USER.PHP"><img src="USER_IMAGES/' . $object_CRUD->record["profile_picture"] . '" alt="uploaded Image" class="h-10 w-10 rounded rounded-full border border-gray-300"></a>';
                            } else {
                                echo '<a href="UPDATE_USER.PHP"><svg class="w-10 h-10" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg></a>';
                            }
                            '</button>';
                        }

                        ?>

                    </form>
                </li>
                <li>
                    <?php
                    if (isset($_SESSION['login'])) {
                        echo '<form action="INDEX.PHP" method="post">
                                <button type="submit" name="logut_user" class="bg-red-500 px-3 py-1 rounded-md text-white">LOGOUT</button>
                            </form>';
                    }
                    ?>
                </li>
                <li>
                    <?php if (isset($_SESSION['login'])): ?>
                        <form action="CART.PHP" method="post">
                            <button name="cart">
                                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </header>