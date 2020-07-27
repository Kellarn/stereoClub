<!-- BEGIN CONTENT -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="main col-12">	
			<h1>$Title</h1>					
				$Content
				$Form
			</div>
			
			<div class="sidebar gray col-sm-4">
				<% if $Menu(2) %>
				  <h3>In this section</h3>
				    <ul class="subnav">  
				      <% loop $Menu(2) %>
				        <li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
				      <% end_loop %>
				    </ul>
				<% end_if %>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
