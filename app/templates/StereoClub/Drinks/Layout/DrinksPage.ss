<div class="MainPage__content">
    <div class="container">
        <div class="row">
	        <article>
		        <h1>$Title</h1>
		        <div class="content">$Content</div>
	        </article>
        </div>
        <div class="MainPage__content__main">
		    <div class="row">
            <% loop $Drinks %>
            <div class="item col-4"><!-- Set width to 4 columns for grid view mode only -->
                <h3>
                    <a href="#">$Title</a>
                </h3>
                <div class="image image-large">
                    $PrimaryPhoto.ScaleWidth(300)
                </div>
                <div class="description">
                    <p>$Description</p>
                </div>
            </div>
            <% end_loop %>
        </div>
    </div>
</div>
