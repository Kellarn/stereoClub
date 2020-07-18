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
                <div class="card">
                    <img class="card-img" src="$PrimaryPhoto.ScaleWidth(750).URL" alt="$PrimaryPhoto.Title">
                    <div class="card-img-overlay">
                        <h5 class="card-title">$Price.Nice</h5>
                        <p class="card-text">$Ingredients</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">$Title</h5>
                        <p class="card-text">$Description</p>
                    </div>
                </div>
            </div>
            <% end_loop %>
        </div>
    </div>
</div>
