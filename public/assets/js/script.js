$(document).ready(function() {
	$('.btn_toggle').click(function() {
		$(this).siblings("p").toggleClass('content');
		if(this.value=="Read Less")
		{
		this.value="More Details";
		}
		else 
			this.value="Read Less";
	});
});

$(document).ready(function () {
    $('.fulltext').hide();

    $('.blog-item .readmore').click(function (event) {
        event.preventDefault();
        $('.fulltext').slideToggle('slow');
        $(this).text($(this).text() == 'Read less...' ? 'Read more...' : 'Read less...');
    });
});


// function AddReadMore() {
//     //This limit you can set after how much characters you want to show Read More.
//     var carLmt = 280;
//     // Text to show when text is collapsed
//     var readMoreTxt = " ... Read More";
//     // Text to show when text is expanded
//     var readLessTxt = " Read Less";


//     //Traverse all selectors with this class and manupulate HTML part to show Read More
//     $(".addReadMore").each(function() {
//         if ($(this).find(".firstSec").length)
//             return;

//         var allstr = $(this).text();
//         if (allstr.length > carLmt) {
//             var firstSet = allstr.substring(0, carLmt);
//             var secdHalf = allstr.substring(carLmt, allstr.length);
//             var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
//             $(this).html(strtoadd);
//         }

//     });
//     //Read More and Read Less Click Event binding
//     $(document).on("click", ".readMore,.readLess", function() {
//         $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
//     });
// }
// $(function() {
//     //Calling function after Page Load
//     AddReadMore();
// });