<div class="searchform__popup" id="searchForm">
	<a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
	<div class="searchform__body">
		<p>Start typing and press Enter to search</p>
		<form class="searchform" action="{{asset(route('list.products',['id'=>'all']))}}" method="get">
			<input type="text" name="keyword" value="" id="search" class="searchform__input" placeholder="Enter Products...">
			<button type="submit" class="searchform__submit"><i class="dl-icon-search10"></i></button>
		</form>
	</div>
</div>