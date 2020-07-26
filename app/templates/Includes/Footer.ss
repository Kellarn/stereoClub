<footer class="footer">
	<div class="container">
		<div class="row">
			<% with $SiteConfig %>
			<ul class="footer-info">
				<li>
					Copyright &copy; 2016
					<a href="$BaseHref" class="brand" rel="home">$SiteConfig.Title</a>
				</li>
				<% if $Adress%>
					<li>|</li>
      				<li>$Adress</li>
    			<% end_if %>
				<% if $Phone%>
					<li>|</li>
      				<li>$Phone</li>
    			<% end_if %>
				<% if $Email%>
					<li>|</li>
      				<li>$Email</li>
    			<% end_if %>
			</ul>
			<% end_with %>  
		</div>
	</div>
</footer>
