<div class="MainPage__content">
    <div class="container">
        <div class="row">
	        <article>
		        <h1>$Title</h1>
		        <div class="content">$Content</div>
	        </article>
        </div>
        <div class="MainPage__content__main">
        
            <!-- BEGIN FILTER -->
            <div class="row sorting">
                <div class="filterOptions"> 
                    <p>Filter</p>
                    <i class="fa fa-ellipsis-v"></i>
                </div>
            </div>
            <div class"row">
                <div class="sortingOptions">
                <p>Sorting by </p>
                <ul>
                    <% if $SortedByDate %>
                        <li class="$SortedByDate">$SortedByDate</li>
                    <% else_if $SortedByPrice %>
                        <li class="$SortedByPrice">$SortedByPrice</li>
                    <% else %>
                        <li class="Name">Name</li>
                    <% end_if %>
                    <% loop $SortingOptions %>
                        <li class="$Title"><a href="$Link">$Title</a></li>
                    <% end_loop %>
                </ul>
                </div>
            </div>
             <!-- END FILTER -->

             <!-- BEGIN DRINKS CONTENT -->
		    <div class="row">
            <% loop $PaginatedDrinks %>
            <div class="item col-xl-4 col-md-6 col-sm-12">
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
            <!-- END DRINKS CONTENT -->

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
