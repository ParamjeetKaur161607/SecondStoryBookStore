<?php include 'partials/header.php'; ?>
<?php require 'partials/navigation.php' ?>

<?php
$sku = $database->selectALL('books');
?>


<?php if (isset($sku)): ?>
    <main class="space-y-10 pb-20">
        <section class="h-[55rem] pb-10">
            <div class="bg-[url('public/images/STORE.jpeg')] bg-center object-fit h-full flex justify-center items-center">
                <h1 class="font-bold text-[5rem] text-red-500 bg-white/70 px-10">Second Story Book Store</h1>
            </div>
        </section>

        <ul class="grid grid-cols-5 gap-20 px-20">
            <?php

            foreach ($sku as $key => $value):
                ?>
                <li class="w-full h-full">
                    <div class="rounded-md h-fit ">
                        <div
                            class="border border-b shadow border-gray-300 p-4 text-center space-y-2 h-full peer relative rounded-lg">
                            <div class="w-full h-64">
                                <?=
                                    '<img src="public/books/' . $value['cover_image'] . '" alt=""
                                    class="h-full border border-gray-300 w-full object-fit">'
                                    ?>
                            </div>
                            <h2 class="font-bold text-lg">
                                <?= $value['title'] ?>
                            </h2>
                            <h3 class="text-sm text-gray-500">
                                <?= $value['author']; ?>
                            </h3>
                            <p class="text-xl font-bold">
                                Rs.
                                <?= $value['rent']; ?>/Per Day
                            </p>
                            <form action="CART.PHP" method="post">
                                <button name="add_to_cart" class="bg-yellow-900/60 text-white py-1 px-3 rounded-lg">Add to
                                    cart</button>
                            </form>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

    </main>
<?php endif; ?>

<?php include 'partials/footer.php'; ?>