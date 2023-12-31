<div class="bir-doc-box">
<h3>documentation</h3>
<p>
<?php _e('The plugin allows you to optimize the images on the site and those that will be uploaded in the future.', 'bulk-image-resizer'); ?></p>
<p>
<?php _e('During optimization, the original image is still retained so that it can be restored in case of problems', 'bulk-image-resizer'); ?>
.</p>
<p>
<?php _e('If you have space problems you can delete the original images later. Go to the image processing tab and click the delete original images button.', 'bulk-image-resizer'); ?>
 </p>
<p>
<?php _e('When performing image optimization, thumbnails are also regenerated.', 'bulk-image-resizer'); ?>
</p>
<p>
<?php _e('If the name of the image is changed or its extension is changed, the plugin looks for any references to the image in posts and postmeta and replaces it with the new name to avoid having broken images in site articles.', 'bulk-image-resizer'); ?>
</p>

<h3>Resize</h3>

<p>
<?php _e('Images that exceed the set size are resized.
 If enabled, images are resized during upload and when images are processed bulk.', 'bulk-image-resizer'); ?>
    <br>
</p>
    
<h3>Convert to webp</h3>
<p><?php _e('Converting all images to webp is a great way to have a high-performance site.', 'bulk-image-resizer'); ?></p>
<p>
<?php _e('The webp format replaces the jpg and png formats. <br>
  If enabled, images are converted during upload and when images are bulk processed. <br> Gif images are not converted.', 'bulk-image-resizer'); ?>
</p>
<p><?php _e('If your site contains many articles with many images or image galleries, renaming or changing the image format may take a long time. The plugin will always try to change the names of the renamed files even within the articles, however it is always important to check that everything continues to work correctly and make a backup before proceeding.', 'bulk-image-resizer'); ?></p>


<h3>Optimize</h3>
<p>
<?php _e('When you resize or convert to webp the images are automatically optimized according to the default WordPress parameters. You can change the optimization quality to high, medium or low. <br> If you have many images on single pages and you don\'t need excessive quality you can choose low, otherwise for most sites medium is the optimal solution.', 'bulk-image-resizer'); ?>
<br> 
</p>

<h3>Rename</h3>
<p>
<?php _e('Often the names of the images are not suitable for a website, so it would be appropriate to rename them.', 'bulk-image-resizer'); ?>
 
</p>
<p>
<?php _e('If enabled, image names are changed during upload and when images are bulk processed. <br>Once replaced the name remains the same even if the bulk process is repeated.', 'bulk-image-resizer'); ?>

</p>
<p>
<?php _e('In addition to the file name, all the thumbnails generated by WordPress are renamed. <br> Articles that use images are updated with the new name.<br> However, it is a good idea to check that everything went well. <br> Any plugins that use tables different from those of WordPress are not updated. <br> Woocommerce and other plugins that use WordPress tables should continue to work correctly. <br> However, it is always advisable to make a backup of the site before proceeding.', 'bulk-image-resizer'); ?>  
</p>
<p>
<?php _e('<b>Sanitize original image</b> Cleans the image name of special characters and spaces. Cut it if too long.<br>
<b>Unique Id</b> Replaces the image name with a unique id.<br>
<b>Custom</b>: Replaces the image name with a custom name via shortcode.<br>
example: my-site-name-[date]-[uniqid]', 'bulk-image-resizer'); ?>
</p>

<p>
<?php _e('<b>nice title</b>: if selected I use the original name of the image to generate the title.
otherwise I use the name of the regenerated file', 'bulk-image-resizer'); ?>

</p>
</div>