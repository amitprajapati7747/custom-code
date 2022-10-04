	$('.cat_list').on('click', 'li', function(e) {
		e.preventDefault();
		$('.cat_list li.active').removeClass('active');
		$(this).addClass('active');
		var datafilterurl = $(this).children("a").attr("href");
		var site_url = $(".navbar-brand").attr("href")+"/?filter=";
		var filter_name = $(this).attr("data-slug");
		var filter_url = site_url+filter_name;
		$.get(filter_url, function(responseText) {
			cat_data = $(responseText).find('.reuslt_html').html();
			$(".reuslt_html").html(cat_data);

			$('.featured-content').slick({
				dots: true,
				infinite:true,
				arrows:false,
				speed: 300,
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: true,
				  autoplaySpeed: 2000,
				responsive: [
				  {
				  breakpoint: 1200,
				  settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				  }
				  },
				  {
				  breakpoint: 992,
				  settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				  }
				  },
				  {
				  breakpoint: 768,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				  }
				  }
				]
				});

		});	
	
	});



jQuery(document).on("click",".next.page-numbers, .loadMorePosts a", function(e){
    e.preventDefault();

    var $main_content_list = jQuery('#main_content_list');
    var $loaderIcon = jQuery('.loader-block');
    var searchFullUrl = e.target.href;
    var $loadMorePosts = jQuery('.loadMorePosts');
    $loaderIcon.show();

    jQuery.get(searchFullUrl, function(responseText) {
        $loadMorePosts.hide();
        $main_content_list.append(jQuery(responseText).find('#main_content_list').html());
        AOS.init({
            duration: 1500,
            delay: 0,
            disable: "mobile",
            offset: 20,
            easing: "ease-in-out-back",
            once: true
        });
        $loaderIcon.hide();
    });
});

jQuery(document).on("click",".nav.nav-tabs a.product-category", function(e){
    e.preventDefault();
    jQuery('.nav.nav-tabs a.product-category').removeClass('active');
    jQuery(this).addClass('active');
    var $main_content_list = jQuery('#main-products-listing');
    var $loaderIcon = jQuery('.p-loader-block');
    var searchFullUrl = e.target.href;
    $main_content_list.hide();
    $loaderIcon.show();
    jQuery.get(searchFullUrl, function(responseText) {
        $main_content_list.html(jQuery(responseText).find('#main-products-listing').html());
        $loaderIcon.hide();
        $main_content_list.show();
        AOS.init({
            duration: 1500,
            delay: 0,
            disable: "mobile",
            offset: 20,
            easing: "ease-in-out-back",
            once: true
        });
    });
});
