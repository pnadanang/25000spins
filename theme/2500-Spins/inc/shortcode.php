<?php 
      function custom_search_func($args) {
        ob_start();
        ?>
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <select name="region">
                      <option value="">REGION 1</option>
                      <option value="">REGION 2</option>
                      <option value="">REGION 3</option>
                      <option value="">REGION 4</option>
                </select>
                <select name="region">
                      <option value="">RIVER TYPE 1</option>
                      <option value="">RIVER TYPE 2</option>
                      <option value="">RIVER TYPE 3</option>
                      <option value="">RIVER TYPE 4</option>
                </select>
                <input type="submit" class="search-submit" value="SEARCH" />
            </form>
        <?php

        $html = ob_get_clean();
        return $html;
    }
    add_shortcode('custom_search', 'custom_search_func');
    // =====================================================
    function blog_list_func($args) {
        ob_start();
        ?>
              <div id="blog-section">
                  <div class="blog-wrapper">
                      <div class="blog-wrapper-box">
                            <div class="featured-image">
                                <img src="https://webjuicy.com/25000spins/wp-content/uploads/2018/12/home_slider.jpg" alt="">
                            </div>
                            <div class="blog-details">
                                <h2 class="blog-title">what is ride camp?</h2>
                                <p class="blog-date">SEP / 19 / 2018</p>
                                <p class="blog-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nostrum iste assumenda, possimus quia facilis nisi voluptates provident minus dolorum quaerat eligendi sunt cupiditate tempore, rerum reprehenderit beatae magnam asperiores.<a href="#" class="blog-readmore">READ MORE ></a></p>
                            </div>
                      </div>

                      <div class="blog-wrapper-box">
                            <div class="featured-image">
                                <img src="https://webjuicy.com/25000spins/wp-content/uploads/2018/12/home_slider.jpg" alt="">
                            </div>
                            <div class="blog-details">
                                <h2 class="blog-title">what is ride camp?</h2>
                                <p class="blog-date">SEP / 19 / 2018</p>
                                <p class="blog-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nostrum iste assumenda, possimus quia facilis nisi voluptates provident minus dolorum quaerat eligendi sunt cupiditate tempore, rerum reprehenderit beatae magnam asperiores.<a href="#" class="blog-readmore">READ MORE ></a></p>
                            </div>
                      </div>

                      <div class="blog-wrapper-box">
                            <div class="featured-image">
                                <img src="https://webjuicy.com/25000spins/wp-content/uploads/2018/12/home_slider.jpg" alt="">
                            </div>
                            <div class="blog-details">
                                <h2 class="blog-title">what is ride camp?</h2>
                                <p class="blog-date">SEP / 19 / 2018</p>
                                <p class="blog-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nostrum iste assumenda, possimus quia facilis nisi voluptates provident minus dolorum quaerat eligendi sunt cupiditate tempore, rerum reprehenderit beatae magnam asperiores.<a href="#" class="blog-readmore">READ MORE ></a></p>
                            </div>
                      </div>

                      <div class="blog-wrapper-box">
                            <div class="featured-image">
                                <img src="https://webjuicy.com/25000spins/wp-content/uploads/2018/12/home_slider.jpg" alt="">
                            </div>
                            <div class="blog-details">
                                <h2 class="blog-title">what is ride camp?</h2>
                                <p class="blog-date">SEP / 19 / 2018</p>
                                <p class="blog-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nostrum iste assumenda, possimus quia facilis nisi voluptates provident minus dolorum quaerat eligendi sunt cupiditate tempore, rerum reprehenderit beatae magnam asperiores.<a href="#" class="blog-readmore">READ MORE ></a></p>
                            </div>
                      </div>
                  </div>
              </div>
        <?php
        $html = ob_get_clean();
        return $html;
    }
    add_shortcode('blog_list', 'blog_list_func');
    // =====================================================
?>