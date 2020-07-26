<% base_tag %>
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
                    <ul>
                    <% loop $SortingOptions %>
                        <li><a href="$Link">$Title</a></li>
                    <% end_loop %>
                    </ul>
            </div>
		    <div class="row">
            <% loop $PaginatedDrinks %>
            <div class="item col-xl-4 col-md-6 col-sm-12"><!-- Set width to 4 columns for grid view mode only -->
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
        <!-- BEGIN PAGINATION -->
        <% if $PaginatedDrinks.MoreThanOnePage %>
        <div class="pagination">
            <% if $PaginatedDrinks.NotFirstPage %>
            <ul class="previous col-xs-6">
                <li><a href="$PaginatedDrinks.PrevLink"><i class="fa fa-chevron-left"></i>Previous</a></li>
            </ul>
            <% end_if %>
            <ul class="hidden-xs pages">
            <% loop $PaginatedDrinks.Pages %>
                <li <% if $CurrentBool %>class="active"<% end_if %>><a href="$Link">$PageNum</a></li>
            <% end_loop %>
            </ul>
            <% if $PaginatedDrinks.NotLastPage %>
            <ul class="next col-xs-6">
                <li><a href="$PaginatedDrinks.NextLink">Next<i class="fa fa-chevron-right"></i></a></li>
            </ul>
            <% end_if %>
        </div>
        <% end_if %>
        <!-- END PAGINATION -->
    </div>
</div>
