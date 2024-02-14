<?php include 'partials/header.php'; ?>
<?php include 'partials/adminMenu.php'; ?>

<main class="ml-80 py-14">
    <section class="flex flex-col items-center justify-center py-10 px-80">
        <h1 class="text-4xl font-bold bg-gray-400 text-center w-full py-5">ADD BOOK CATEGORY</h1>
        <form action="/SecondStoryBookStore/admin/adminController" method="post" enctype=""
            class="bg-gray-300 px-5 py-20 w-full  grid gap-10 text-lg">
            <div class="flex flex-col">
                <label for="category">Category</label>
                <input type="text" name="category" id="category"
                    class="p-2 h-10 bg-gray-300 border-gray-400 border-b outline-none">
                <span class="text-red-500 py-5">
                    <?php ?>
                </span>

            </div>
            <div class="flex flex-col">
                <input type="submit" name="add_category" id="add_category"
                    class="rounded-lg h-10 text-black bg-gray-400 outline-none">
            </div>
        </form>
    </section>
</main>
<?php include 'partials/footer.php'; ?>