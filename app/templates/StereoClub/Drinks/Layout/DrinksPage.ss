<div class="content">
    <div class="container">
        <div class="row">
	        <article>
		        <h1>$Title</h1>
		        <div class="content">$Content</div>
	        </article>
        </div>
        <div class="main">
		    <div class="row">
            <% loop $Drinks %>
            <div class="item col-md"><!-- Set width to 4 columns for grid view mode only -->
                <h3>
                    <a href="#">$Title</a>
                </h3>
                <div class="image image-large">
                    $PrimaryPhoto.Fit(720,255)
                </div>
                <div class="description">
                    <p>$Description</p>
                </div>
            </div>
            <% end_loop %>
        </div>
    </div>
</div>
