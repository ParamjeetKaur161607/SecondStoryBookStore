<?php require 'partials/header.php'; ?>
<?php require 'partials/adminMenu.php' ?>
<main class="ml-80 py-14">
    <section class="flex flex-col items-center justify-center py-10 px-80">
        <h1 class="text-4xl font-bold bg-gray-400 text-center w-full py-5">DELETE BOOK CATEGORY</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype=""
            class="bg-gray-300 px-5 py-20 w-full  grid gap-10 text-lg">
            <div class="flex flex-col">
                <label for="book_category">Book Category</label>
                <select name="book_category" id="book_category"
                    class=" border-gray-400 h-10 p-2 h-10 bg-gray-300 border-b outline-none">
                    <option value="none" selected disabled hidden>Select Book category</option>
                    <?php
                    $object_validation->category = $object_CRUD->getAllRecords('book_category', 'category');
                    foreach ($object_validation->category as $category) {
                        if ($category == "None") {
                            continue;
                        }
                        echo "<option value=\"$category\">$category</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="flex flex-col">
                <input type="submit" name="delete_category" id="delete_category"
                    class="rounded-lg h-10 text-black bg-gray-400 outline-none">
            </div>
        </form>
    </section>
</main>
<?php require 'partials/footer.php'; ?>