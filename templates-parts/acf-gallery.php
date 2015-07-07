<?php 
$images = get_field('field_547d824c85fb9');

if( $images ): ?>
	<div class="gallery">
	    <ul>
	        <?php foreach( $images as $image ): ?>
	            <li>
	                <a href="<?php echo $image['url']; ?>">
		                <div class="layer-enlarge">
			                <div class="layer-enlarge-container">
				            	<div class="layer-enlarge-container-plus">
					            	<i class="fa fa-plus-circle"></i>
					            </div>
			                </div>
		                </div>
	                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
	                </a>
	                <p><?php echo $image['caption']; ?></p>
	            </li>
	        <?php endforeach; ?>
	    </ul>
	</div>
<?php endif; ?>