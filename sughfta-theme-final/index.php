<?php get_header(); ?>


    <!-- Header -->
    

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu-close" id="menu-close">
            <i class="fas fa-times"></i>
        </div>
        <h3>Categories</h3>
        <ul class="mobile-menu-categories">
            <li><a href="#">Women's Collection</a></li>
            <li><a href="#">Men's Collection</a></li>
            <li><a href="#">Bags Collection</a></li>
            <li><a href="#">Watches Collection</a></li>
            <li><a href="#">Accessories</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="#">Sale</a></li>
        </ul>
    </div>
    <div class="menu-overlay" id="menu-overlay"></div>

    <!-- Hero Section with Video Background -->
    <section class="hero-section">
        <div class="video-container">
            <video autoplay muted loop id="hero-video">
                <source src="https://assets.mixkit.co/videos/preview/mixkit-woman-in-a-white-dress-walking-43709-large.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay"></div>
        </div>
        <div class="hero-content">
            <h1>Welcome to Sughfta</h1>
            <p>The place of purification and love</p>
        </div>
        <div class="video-controls">
            <button id="mute-btn"><i class="fas fa-volume-mute"></i></button>
            <button id="pause-btn"><i class="fas fa-pause"></i></button>
        </div>
    </section>

    <!-- Column Slides -->
    <div class="column-slides">
        <!-- Slide 1: Women's Collection -->
        <div class="column-slide active">
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Women's Fashion">
                <div class="slide-title">Women's Collection</div>
            </div>
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Women's Fashion">
            </div>
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1519692933481-e162a57d6721?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Women's Fashion">
            </div>
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1501084817091-a4f3d1d19e07?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Women's Fashion">
            </div>
        </div>
        
        <!-- Slide 2: Men's Collection -->
        <div class="column-slide">
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1617137968427-85924c800a22?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Men's Fashion">
                <div class="slide-title">Men's Collection</div>
            </div>
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1505022610485-0249ef5b1df0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Men's Fashion">
            </div>
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1611312449408-fcece27cdbb7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Men's Fashion">
            </div>
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1618932260643-eee4a2f652a6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Men's Fashion">
            </div>
        </div>
        
        <!-- Slide 3: Bags Collection -->
        <div class="column-slide">
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Bags Collection">
                <div class="slide-title">Bags Collection</div>
            </div>
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Bags Collection">
            </div>
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Bags Collection">
            </div>
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1591561954557-26941169b49e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Bags Collection">
            </div>
        </div>
        
        <!-- Slide 4: Watches Collection -->
        <div class="column-slide">
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Watches Collection">
                <div class="slide-title">Watches Collection</div>
            </div>
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1524592094714-0f0654e20314?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Watches Collection">
            </div>
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1547996160-81df9f4b5b8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Watches Collection">
            </div>
            <div class="slide-image">
                <img src="https://images.unsplash.com/photo-1434056886845-dac89ffe9b56?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Watches Collection">
            </div>
        </div>
        
        <!-- Slide Indicators -->
        <div class="slide-indicators">
            <div class="indicator active" data-slide="0"></div>
            <div class="indicator" data-slide="1"></div>
            <div class="indicator" data-slide="2"></div>
            <div class="indicator" data-slide="3"></div>
        </div>
    </div>

    <!-- Product Categories Section -->
    <section class="product-categories">
        <div class="container">
            <div class="section-title">
                <h2>Our Collections</h2>
                <p>Discover our exquisite range of fashion products</p>
            </div>
            
            <div class="categories-grid">
                <div class="category-card fade-in">
                    <img src="https://images.unsplash.com/photo-1525299374597-911581e1bdef?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Women's Collection" class="category-image">
                    <div class="category-name">Women's Collection</div>
                </div>
                
                <div class="category-card fade-in">
                    <img src="https://images.unsplash.com/photo-1554238113-9d19ac3d0a49?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Men's Collection" class="category-image">
                    <div class="category-name">Men's Collection</div>
                </div>
                
                <div class="category-card fade-in">
                    <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Bags Collection" class="category-image">
                    <div class="category-name">Bags Collection</div>
                </div>
                
                <div class="category-card fade-in">
                    <img src="https://images.unsplash.com/photo-1523170335258-f8ed03f2023b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Watches Collection" class="category-image">
                    <div class="category-name">Watches Collection</div>
                </div>
            </div>
            
            <!-- Best Sellers Section -->
            <div class="best-sellers">
                <div class="section-title">
                    <h2>Best Sellers</h2>
                    <p>Our most loved products by customers</p>
                </div>
                
                <div class="products-grid">
                    <div class="product-card fade-in">
                        <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Elegant Dress" class="product-image">
                        <div class="product-info">
                            <h3 class="product-name">Elegant Evening Dress</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="product-price">$129.99</div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                    
                    <div class="product-card fade-in">
                        <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Men's Suit" class="product-image">
                        <div class="product-info">
                            <h3 class="product-name">Classic Men's Suit</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="product-price">$249.99</div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                    
                    <div class="product-card fade-in">
                        <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Designer Handbag" class="product-image">
                        <div class="product-info">
                            <h3 class="product-name">Designer Handbag</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="product-price">$189.99</div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                    
                    <div class="product-card fade-in">
                        <img src="https://images.unsplash.com/photo-1524592094714-0f0654e20314?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Luxury Watch" class="product-image">
                        <div class="product-info">
                            <h3 class="product-name">Luxury Chronograph Watch</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="product-price">$299.99</div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Collection Coming Soon Section -->
    <section class="coming-soon">
        <div class="container">
            <h2>New Collection Coming Soon</h2>
            <p>Be the first to know when our exclusive new collection launches. Sign up for our newsletter to get notified.</p>
            
            <div class="countdown">
                <div class="countdown-item">
                    <div class="countdown-number" id="days">14</div>
                    <div class="countdown-label">Days</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="hours">06</div>
                    <div class="countdown-label">Hours</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="minutes">33</div>
                    <div class="countdown-label">Minutes</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="seconds">18</div>
                    <div class="countdown-label">Seconds</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Us</h2>
            </div>
            
            <div class="feature-grid">
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Fast Delivery</h3>
                    <p>We deliver worldwide with express shipping options available.</p>
                </div>
                
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <h3>Easy Returns</h3>
                    <p>Not satisfied? Return within 30 days for a full refund.</p>
                </div>
                
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Premium Quality</h3>
                    <p>All our products are made from the highest quality materials.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <h2>Stay Updated</h2>
            <p>Subscribe to our newsletter to receive updates on new arrivals, special offers and other discount information.</p>
            
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your email address">
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    

    <script src="script.js"></script>


<?php get_footer(); ?>
