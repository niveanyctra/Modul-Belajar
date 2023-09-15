$(()=>{
    $(document).on("click", "#loadMoreCourses button", function(e) {
        e.preventDefault();
        var searchQuery = $("#inputSearchModule3").val();
        var skipData = $(this).attr("data-skip");
        var link = `/autocomplete/?search=${searchQuery}&skip=${skipData}`;
        var loaderAnimation = $(this).next();
        var totalCourses = $(".tt-dataset-courses").children().length - 1;
        $(this).toggleClass("d-none");
        loaderAnimation.toggleClass("d-none");
        if ($(window).width() < 576) {
            $(".offcanvas-form-control").blur();
        }
        $.get(link, function(response) {
            var fetchedData = response.map((data)=>{
                var discPriceOri = (data.is_share_cost > 0 ? ('<div class="disc-price blink_me">' + data.harga_kelas_formatted + '</div>') : ('<div class="disc-price blink_me">' + data.origin_price_formatted + '</div>'));
                var priceOri = data.origin_price_formatted ? '<div class="promo-price">' + data.origin_price_formatted + "</div>" : '<div class="promo-price"> Rp 0</div>';
                var discPrice = (data.harga_kelas_formatted ? data.is_share_cost > 0 ? ('<div class="promo-price">' + data.harga_kelas_patungan_formatted + '</div>') : ('<div class="promo-price">' + data.harga_kelas_formatted + '</div>') : ('<div class="promo-price"> Rp 0</div>'));
                var price;
                if (data.is_promo == 1) {
                    price = discPriceOri + (data.is_share_cost > 0 ? data.harga_kelas_patungan_formatted : discPrice);
                } else {
                    price = (data.is_share_cost > 0 ? data.harga_kelas_patungan_formatted : discPrice);
                }
                if (data.is_plus == 1) {
                    var priceDeal = '<div class="promo-price"> Rp 0</div>';
                } else {
                    if (typeof data.origin_price_formatted !== "undefined" && data.origin_price_formatted) {
                        var priceDeal = price;
                    } else {
                        var priceDeal = '<div class="promo-price"> Rp 0</div>';
                    }
                }
                var isJoinedLabel = `<div class="labelJoinedCourse ms-0">
                    <img src="https://buildwithangga.com/themes/front/images/ic_check_fill.svg" alt="">
                    <p class="__text">
                        JOINED
                    </p>
                </div>`;
                var rowPricing = data.is_joined ? isJoinedLabel : `<div class="price">${priceDeal}</div>`;
                return `<div class="course-content tt-suggestion tt-selectable">
                        <div class="thumbnail">
                            <img src="https://i.ytimg.com/vi/${data.id_yt}/hq720.jpg" alt="Kelas ${data.title}"/>
                        </div>
                        <div>
                            <div class="course-title">${data.title}</div>
                            ${rowPricing}
                        </div>
                        <a href="/kelas-mentor/${data.category}/${data.slug}?main_leads=searchsuggestion" class="stretched-link"></a>
                    </div>`;
            }
            );
            $("#loadMoreCourses").before(fetchedData);
        }).done((response)=>{
            var newSkip = parseInt(skipData) + 1;
            $(this).attr({
                "data-skip": newSkip
            });
            if (response != "") {
                $(this).toggleClass("d-none");
                loaderAnimation.toggleClass("d-none");
            } else {
                loaderAnimation.toggleClass("d-none");
                $("#loadMoreCourses").append(`<p class="text-center text-xs text-grey m-0">
                        End of result <br> ${totalCourses} courses
                    </p>`);
            }
        }
        );
    });
}
);
