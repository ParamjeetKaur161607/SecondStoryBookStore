<aside class="bg-gray-900 border-r h-screen w-[20rem] fixed leading-10 flex flex-col gap-5 items-center justify-between">
    <div class="w-full flex flex-col items-center gap-20 ">
        <button class="bg-gray-500 p-6 w-full shadow-md">
            <div class="bg-gray-500 px-5 py-2">
                <img src="../public/images/logo.png" alt="" class="h-full w-full object-fit">
            </div>
        </button>
        <nav class="w-full ">
            <ul class="font-semi-bold text-gray-400 text-xl divide-y divide-gray-400 w-full font-bold">
                <li class="p-5 pl-10"><a href="/SecondStoryBookStore/admin/dashboard" target="iframe">Dashboard</a></li>
                <li class="p-5 pl-10"><a href="/SecondStoryBookStore/admin/listings" target="iframe">Listings</a></li>
                <li class="p-5 pl-10"><a href="/SecondStoryBookStore/admin/orders" target="iframe">Orders & Customers</a></li>
                <li class="p-5 pl-10"><a href="/SecondStoryBookStore/admin/users" target="iframe">Users</a></li>
                <li class="p-5 pl-10"><a href="/SecondStoryBookStore/admin/rented" target="iframe">Rented Books</a></li>
                <?php
                if (isset($_SESSION['super_admin_login'])): ?>
                    <li class="p-5 pl-10"><a href="ADMINS.PHP" target="iframe">Admins</a>
                    <?php endif; ?>

            </ul>
        </nav>

    </div>
    <footer class="w-full text-gray-300 font-bold text-xl">
        <form action="ADMIN_LOGIN.PHP" method="post">
            <button name="log_out_admin" class="bg-red-700 w-full py-5">Log Out</button>
        </form>
    </footer>
</aside>
<div class="ml-80 sticky top-0 ">
    <header class="flex justify-between items-center border-b bg-white px-10 py-6 shadow-md">
        <p class="text-xl font-bold">Welcome,
           
        </p>
        <form action="SEARCH.PHP" method="post" class="border bg-white shadow-md">
            <select name="search_category" id="category" class="h-10 px-2 border-r">
                <option value="none" selected disabled hidden>Select</option>
                <option value="all">All</option>
                <option value="author">Book By Author</option>
                <option value="title">Book By Title</option>
                <option value="category">book By Category</option>
                <option value="SKU">SKU</option>
                <option value="order_by_order_id">Order by Order Id</option>
                <option value="order_by_user_id">Order by User Id</option>
                <option value="order_by_sku">Order by SKU</option>
                <option value="order_by_customer_name">Order by Cutomer Name</option>
                <option value="user_by_id">User by Id</option>
                <option value="user_by_name">User by Name</option>
                <option value="user_by_email">User by email</option>
                <option value="rented_book_by_user_id">Rented Books By User Id</option>
                <option value="rented_book_by_order_id">Rented Books By Order Id</option>
                <option value="rented_book_by_sku">Rented Books By SKU</option>
            </select>
            <input type="search" name="search_data" placeholder="Search..." class="w-96 h-10 px-5 outline-none">
            <button name="search" value="search" class="bg-blue-900 text-white h-10 px-5 w-auto">Search</button>
        </form>
        <div class="flex gap-10 items-center">
            <form action="ADMIN_UPDATE.PHP?id=<?php echo $value['id'] ?>" method="post">
                <button name="update_login" class="h-14 w-14 rounded-full border border-gray-300">
                    <?=
                        '<img src="public/admin/profile.png" alt=""
                        class="h-full w-full object-fit rounded-full">'
                        ?>
                </button>
            </form>

        </div>
    </header>
</div>