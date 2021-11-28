

        <!-- Special Price-->

        <?php
          $brand=array_map(function($pro){return $pro['item_brand'];},$product_shuffle);
          $unique=array_unique($brand);
          sort($unique);
          shuffle($product_shuffle);
//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    //call method addToCart
    if(isset($_POST['special_price_submit'])){
    $Cart->addToCart($_POST['user_id'],$_POST['item_id'] );
    }
}
$in_cart=$Cart->getCartId($product->getData('cart'));
        ?>
        <section id="special-price">
              <div class="container">
                  <h4 style="font-size: 20px;">Special Price</h4>
                  <div id="filters" class="button-group text-right" style="font-size: 12px;">
                      <button class="btn is-checked btn-primary" data-filter="">All Brands</button>
                      <?php  
                      array_map(function($brand){
                          printf('<button class="btn "data-filter=".%s">%s</button>',$brand,$brand);
                      },$unique);
                      ?>
                  </div>

                  <div class="grid">
                      <?php
                        array_map(function($item) use($in_cart){
                      ?>
                      <div class="grid-item border <?php echo $item['item_bran'] ?? "Brand"; ?>">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product">
                                <a href="<?php  printf('%s?item_id=%s','product.php',$item['item_id']); ?>"><img src="<?php echo $item['item_image']??"images/musodza tatenda.png"; ?>" alt="product1" class="img-fluid img-top"></a>
                                <div class="text-center">
                                    <h6><?php echo $item['item_name'] ??"Unkown"; ?></h6>
                                    <div class="rating text-warning d-flex" style="font-size: 12;">
                                      <!--Stars-->
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>       
                                  </div>
                                  <div class="price py-2">
                                      <span>$<?php echo $item['item_price'] ?? 0 ?></span>
                                  </div>
                                  <form method="POST">
                                   <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1'; ?>">
                                   <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                   <?php   
                                   if(in_array($item['item_id'],$in_cart??[])){
                                    echo ' <button type="submit" disabled class="btn btn-success" style="font-size: 12;">In The Cart</button>';
                                   }
                                   else{
                                       echo ' <button type="submit" name="special_price_submit" class="btn btn-warning" style="font-size: 12;">Add to Cart</button>';
                                   }
                                   ?>
                               </form>
                                </div>
                            </div>  
                        </div>
               <?php },$product_shuffle) ?>
                 </div>
                  </div>
              </div>
          </section>

        <!--Special Price-->