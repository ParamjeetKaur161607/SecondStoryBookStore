<?php require 'partials/header.php' ?>
<?php require 'partials/adminMenu.php' ?>
<?php $orders = $database->selectALL('orders'); ?>
<section class="p-10 ml-80">
        <h1 class="text-5xl sm:text-2xl sm:font-bold">All Orders and Customers</h1>

        <ol class="list-decimal">
            <?php 
            if(isset($orders)):
            foreach ($orders as $key => $value):  
                $emails=$object_CRUD->getRecord('user_registration','email','id',$value['user_id']); 
                             
                ?>

                <li class="bg-white mt-7 rounded-xl p-6 flex gap-10">
                    <div class="h-28 w-28 border">
                        <?=
                            '<img src="BOOKS_IMAGES/' . $value['book_cover_image'] . '" alt=""
                                class="h-full w-full object-fit">'
                            ?>
                    </div>
                    <div class="flex justify-between w-full">
                        <div class="space-y-3 w-full">
                            <div class="flex justify-between">
                                <div class="flex gap-2 items-center">
                                    <h2 class="font-bold text-2xl"><?= $value['customer_name']; ?></h2>
                                    <h3 class="text-sm">#<?= $value['order_id']; ?></h3>
                                    <p>(Rs. <?= $value['payment']; ?>)</p>
                                </div>
                                <div class="space-x-3 flex gap-3 items-center">
                                    <a href="tel:<?php $value['customer_phone']; ?>"
                                        class="underline"><?= $value['customer_phone']; ?></a>
                                        <?php foreach($emails as $key => $values):?>
                                    <a href="mailto:<?php $emails[0]['email'] ?>"
                                        class="underline"><?= $values['email']; ?></a>  
                                        <?php  endforeach;?>                                      
                                    <p class="bg-blue-100 px-2 rounded-lg font-bold"><?= $value['user_id']; ?></p>
                                </div>
                            </div>
                            <div class="flex justify-between w-full">
                                <ul class="font-semi-bold text-lg">
                                    <li><b>Quantity: </b> 1</li>
                                    <li><b>SKU: </b><?=$value['sku']; ?></li>

                                </ul>
                                <ul class="font-semi-bold text-lg">
                                <li><b>Title: </b><?=$value['book_title']; ?></li>
                                    <li><b>Author: </b><?=$value['book_author']; ?></li>

                                </ul>
                                <ul>
                                    <li><b>Order Date: </b><?= $value['order_date']; ?></li>
                                    <li><b>Return Date: </b><?= $value['return_date']; ?></li>
                                </ul>
                                <ul>
                                    <li><b>Address: </b><?= $value['customer_address']; ?></li>
                                    
                                </ul>
                                
                            </div>
                            <p class="text-red-700"><b>Note By user: </b><?= $value['Note']; ?></p>
                        </div>
                        


                    </div>


                </li>
            <?php endforeach; ?>
            <?php else: echo"NO orders yet"; ?>
            <?php endif; ?>
        </ol>

    </section>

<?php require 'partials/footer.php' ?>
