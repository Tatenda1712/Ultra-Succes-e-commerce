  <!--New Phones-->
  <?php
  shuffle($product_shuffle);
//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
  //call method addToCart
  if(isset($_POST['new_phones_submit'])){
  $Cart->addToCart($_POST['user_id'],$_POST['item_id'] );
  }
}
  ?>
  <section id="new-phones">
          <div class="container">
            <h4>New Items</h4>
            <hr>
            <div class="owl-carousel owl-theme">
            <?php //starting for each function
                      foreach($product_shuffle as $item){
                      ?>
                      <div class="item p-2 bg-light">
                          <div class="product">
                              <a href="<?php  printf('%s?item_id=%s','product.php',$item['item_id']); ?>"><img src="<?php echo $item['item_image']?? "./images/musodza tatenda.png";?>" alt="product1" class="img-fluid img-top"></a>
                              <div class="text-center">
                                  <h6><?php echo $item['item_name']??"Unknown"; ?></h6>
                                  <div class="rating text-warning d-flex" style="font-size: 12;">
                                    <!--Stars-->
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$<?php echo $item['item_price']??'0';?></span>
                                </div>
                                <form method="POST">
                                   <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1'; ?>">
                                   <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                   <?php   
                                   if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart'))??[])){
                                    echo ' <button type="submit" disabled class="btn btn-success" style="font-size: 12;">In The Cart</button>';
                                   }
                                   else{
                                       echo ' <button type="submit" name="new_phones_submit" class="btn btn-warning" style="font-size: 12;">Add to Cart</button>';
                                   }
                                   ?>
                               </form>
                              </div>
                          </div>
                      
                        </div>
                      <?php } //closing foreach function?> </div>

              </div>
          <!--Owl Carousel-->
          </div>
        </section>
        <!--New Phones-->
