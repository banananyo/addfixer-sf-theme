<?php
/*****************************************************************************
*
*	copyright(c) - aonetheme.com - Service Finder Team
*	More Info: http://aonetheme.com/
*	Coder: Service Finder Team
*	Email: contact@aonetheme.com
*
******************************************************************************/
get_header(); ?>
<?php $pid = (!empty($_GET['pid'])) ? esc_attr($_GET['pid']) : ''; ?>
<div class="container">
  <div class="section-content provider-content">
  	<div class="row">
	  <div class="col-md-8">
	  <?php 
      if($pid != "" && $pid > 0){
      do_action('service_finder_question_answer',$pid); 
      }else{
      echo esc_html__( 'No Results Found', 'service-finder' );
      }
      ?>
	  </div>	
      <!-- Right part start -->
   	  <div class="col-md-3">
        
            <aside  class="side-bar">
            
                <div class="widget">
                    <h4 class="widget-title">Search</h4>
                    <div class="search-bx">
                        <form role="search" method="post">
                            <div class="input-group">
                                <input name="" type="text" class="form-control" placeholder="Write your text">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-border"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="widget recent-posts-entry">
                    <h4 class="widget-title">Recent Posts</h4>
                    <ul>
                        <li>
                            <div class="post-thum-bx">
                                <img src="images/thum.jpg" width="73" height="73" alt="">
                            </div>
                            <div class="post-text-bx">
                                <h6 class="post-title"><a href="javascript:void(0);">Awesome and Unique ideas for you future</a></h6>
                                <div class="post-meta">
                                    <span class="post-date"><i class="fa fa-calendar-o"></i>14 April 2015</span>
                                    <span class="post-date"><i class="fa fa-comments"></i>24</span>
                                </div>
                            </div>
                        
                        </li>
                        <li>
                            <div class="post-thum-bx">
                                <img src="images/thum.jpg" width="73" height="73" alt="">
                            </div>
                            <div class="post-text-bx">
                                <h6 class="post-title"><a href="javascript:void(0);">Awesome and Unique ideas for you future</a></h6>
                                <div class="post-meta">
                                    <span class="post-date"><i class="fa fa-calendar-o"></i>14 April 2015</span>
                                    <span class="post-date"><i class="fa fa-comments"></i>24</span>
                                </div>
                            </div>
                        
                        </li>
                        <li>
                            <div class="post-thum-bx">
                                <img src="images/thum.jpg" width="73" height="73" alt="">
                            </div>
                            <div class="post-text-bx">
                                <h6 class="post-title"><a href="javascript:void(0);">Awesome and Unique ideas for you future</a></h6>
                                <div class="post-meta">
                                    <span class="post-date"><i class="fa fa-calendar-o"></i>14 April 2015</span>
                                    <span class="post-date"><i class="fa fa-comments"></i>24</span>
                                </div>
                            </div>
                        
                        </li>
                    </ul>
                </div>
                
                
                <div class="widget widget_categories">
                    <h4 class="widget-title">Categories</h4>
                    <ul class="list-checked">
                        <li><a href="#">Lorem Ipsum is simply </a></li>
                        <li><a href="#">Lorem Ipsum is simply </a></li>
                        <li><a href="#">Lorem Ipsum is simply </a></li>
                        <li><a href="#">Lorem Ipsum is simply </a></li>
                        <li><a href="#">Lorem Ipsum is simply </a></li>
                    </ul>
                </div>
                
                <div class="widget widget_tag_cloud">
                    <h4 class="tagcloud">Tags</h4>
                    <div class="tagcloud">
                        <a href="#">Design</a>
                        <a href="#">User interface</a>
                        <a href="#">SEO</a>
                        <a href="#">WordPress</a>
                        <a href="#">Development</a>
                        <a href="#">Joomla</a>
                        <a href="#">Design</a>
                        <a href="#">User interface</a>
                        <a href="#">SEO</a>
                        <a href="#">WordPress</a>
                        <a href="#">Development</a>
                        <a href="#">Joomla</a>
                        <a href="#">Design</a>
                        <a href="#">User interface</a>
                        <a href="#">SEO</a>
                        <a href="#">WordPress</a>
                        <a href="#">Development</a>
                        <a href="#">Joomla</a>
                    </div>
                </div>
                
            </aside>

        </div>
      <!-- Right part END -->	                                
	</div>	                            
  </div>
</div>
<?php get_footer(); ?>
