var tabTag = "tab-";
var paneTag = "pane-";
function ScrollSection(index) {

	$(".section").each(function(i) {
		if (index == i) {
			$("#" + paneTag + i).show(10);
			$("#" + tabTag + i).addClass("active");
		} else {
			$("#" + paneTag + i).hide(10);
			$("#" + tabTag + i).removeClass("active");
			$("#" + tabTag + i).addClass("inactive");
		}
	});
}
