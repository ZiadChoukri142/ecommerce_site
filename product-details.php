       
    <!-- Header -->
    <?php include_once('./includes/header.php'); ?>
    <!-- Header -->

<body>
        <div class="container">

            <!-- Navbar -->
                <?php include_once('./includes/navbar.php'); ?>
            <!-- Navbar -->

        </div>

    <!-- Single Product Details -->

       <div class="small-container single-product">
           <div class="row">
               <div class="col-2">
                   <img src="./static/images/gallery-1.jpg" width="100%">
                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="./static/images/gallery-1.jpg" width="100%">
                        </div>
                        <div class="small-img-col">
                            <img src="./static/images/gallery-2.jpg" width="100%">
                        </div>
                        <div class="small-img-col">
                            <img src="./static/images/gallery-3.jpg" width="100%">
                        </div>
                        <div class="small-img-col">
                            <img src="./static/images/gallery-4.jpg" width="100%">
                        </div>
                    </div>
               </div>
               <div class="col-2">
                    <p>Home / T-Shirt</p>
                    <h1>Red Printed T-Shirt by HRX</h1>
                    <h4>$50.00</h4>
                    <select>
                        <option>Select Size</option>
                        <option>XXL</option>
                        <option>XL</option>
                        <option>Large</option>
                        <option>Medium</option>
                        <option>Small</option>
                    </select>
                    <input type="number" value="1" min="1">
                    <a href="" class="btn">Add To Cart</a>
                    <h3>Product Details<i class="fa fa-indent"></i></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam sit hic ad minimafugit iure at,
                    nesciunt fuga necessitatibus, vel mollitia, dolore quod laudantium quisquam?
                    </p>
               </div>
           </div>
       </div>

    <!-- Single Product Details -->

    <!-- Featured -->

    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort by Price</option>
                <option>Sort by Popularity</option>
                <option>Sort by Rating</option>
                <option>Sort by Scale</option>
            </select>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="./static/images/product-5.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./static/images/product-6.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./static/images/product-7.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./static/images/product-8.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
    </div>
    <!-- Featured -->

    <!-- Footer -->
       
        <?php include_once('./includes/footer.php'); ?>
    
    <!-- Footer -->

    <!-- Scripts -->
    
       <script>
           var MenuItems = document.getElementById("MenuItems");

           MenuItems.style.maxHeight = "0px";

           function menutoggle(){
               if(MenuItems.style.maxHeight == "0px")
               {
                MenuItems.style.maxHeight = "200px";
               }
               else
               {
                MenuItems.style.maxHeight = "0px";
               }
           }
       </script>

    <!-- Scripts -->

</body>