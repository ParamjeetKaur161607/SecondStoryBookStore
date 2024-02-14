<?php require 'partials/header.php' ?>
<?php require 'partials/adminMenu.php' ?>
<?php $rented = $database->selectALL('users'); ?>

<section class="p-10 ml-80">
        <h1 class="text-5xl sm:text-2xl sm:font-bold">RENTED BOOKS</h1>
        <ol class="list-decimal">
            <?php if(isset($pending_returns)):?>
            <?php foreach ($pending_returns as $key => $value):
                $object_CRUD->getJoinOrders('books','orders','return_order','sku','sku',"$value[sku]");
                $emails=$object_CRUD->getRecord('user_registration','email','id',$value['user_id']);
                ?>
                <li class="bg-gray-100 mt-7 rounded-xl p-6 flex gap-10 border">
                    <div class="h-28 w-28 border">
                        <?=
                            '<img src="BOOKS_IMAGES/' . $object_CRUD->row['cover_image'] . '" alt=""
                        class="h-full w-full object-fit">'
                            ?>
                    </div>
                    <div class="flex justify-between w-full">
                        <div class="space-y-3 w-full">
                            <div class="flex justify-between">
                                <div>
                                    <h2 class="font-bold text-2xl"><?=$object_CRUD->row['sku'];?></h2>
                                    <div class="flex gap-1 items-center">
                                        <h3>#<?=$object_CRUD->row['order_id'];?></h3>
                                        <p>(Rs.<?=$object_CRUD->row['payment'];?>)</p>
                                    </div>
                                </div>
                                <div class="space-x-3">
                                    <a href="tel:<?$object_CRUD->row['customer_phone'];?>" class="underline"><?=$object_CRUD->row['customer_phone'];?></a>
                                    <?php foreach($emails as $key => $values):?>
                                    <a href="mailto:<?php $emails[0]['email'] ?>"
                                        class="underline"><?= $values['email']; ?></a>  
                                    <?php  endforeach;?>                          
                                </div>
                            </div>
                            <div class="flex justify-between w-full">
                                <ul class="font-semi-bold text-lg flex justify-between w-full">
                                    <li>Book Title: <?=$object_CRUD->row['title'];?></li>
                                    <li>Book Author: <?=$object_CRUD->row['author'];?></li>
                                    <li>Order Date: <?=$object_CRUD->row['order_date'];?></li>
                                    <li>Return Date: <?=$object_CRUD->row['return_date'];?></li>
                                    <li>Fine: 
                                        <span class="bg-red-600 p-1 text-white rounded-md">Rs. 
                                            <?php if(isset($object_CRUD->row['Fine'])){
                                                echo $object_CRUD->row['Fine'];
                                            } else {
                                                echo "0";
                                            }
                                            ?>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
            <?php else: ?>
                <?= "No return Pending"; ?>
                <?php endif; ?>
        </ol>

    </section>

<?php require 'partials/footer.php' ?>