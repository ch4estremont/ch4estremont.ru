<?php
	$menu_name = 'primary'; // название меню
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>
<?php
    $count = 0;
    $submenu = false;
 
    foreach( $menuitems as $item ):
		$link = $item->url;
        $title = $item->title;
		if(!$item->menu_item_parent):
		$parent_id = $item->ID;
		?>
		<li>
			<a class="_scroll-animate" href="<?php if(is_front_page()){ echo $link; } else {?>/<?echo $link;} ?>"><?php echo $title; ?></a> <!-- верхний пункт меню -->
			<?php endif; ?>
			<?php if ( $parent_id == $item->menu_item_parent ): ?>
				<?php if ( !$submenu ): $submenu = true; ?>
					<ul class="dev-dn-main nav-menu__sub-menu" id="<? echo $parent_id; ?>"> <!-- выпадающее меню -->
					<?php endif; ?>
						 <li class="nav-menu__sub-item">
							  <a href="<?php echo $link; ?>"><?php echo $title; ?></a>
						 </li>
						 <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
					</ul>
				<?php $submenu = false; endif; ?>
			</li>
		<?php endif; ?>
		<?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>                         
		<?php $submenu = false; endif; ?>
		<?php $count++;?>
	<? endforeach; ?>