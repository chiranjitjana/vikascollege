var iDS;
var url;

function RightContentHideAnshow(iDS, url,default_view) {
	this.iDS = iDS;
	this.url = url;
	$("#loading").hide();
	HandleNavigationBarLinkClicked(default_view);
}


function defaultLoadFileView(maxClicked) {
	for (var start = 1; start <= maxClicked; start++) {
		var localId = "accordion" + start;
		if (start != 1) {
			$("." + localId).hide();
			$("#" + start).removeClass("active");
		} else {
			$("." + localId).show();
			$("#" + start).addClass("active");

		}
	}

	/* console.log("here i m"); */
}


//this code move to framework
function createLeftNavigationMenu(menu, containerID) {
	var leftmenu = menu;
	/* var ap=[1]; */
	for (var size = 0; size < menu.length; size++) {

		console.log(menu[size]);
		var id = menu[size].divID;
		$("#" + containerID).append(
				'<a href="#" class="list-group-item " id="' + (size + 1)
						+ '" onclick="modifiedClicked(\'' + menu[size].divID
						+ '\',\'' + size + '\',\'' + menu.length + '\')">'
						+ menu[size].title + '</a>');
	}
}

function handleShowAndViewSideContent(idClicked,maxClicked){

	 

		for(var start=1;start<=maxClicked;start++)
		{
			var localId="accordion"+start;
			if(start!=idClicked){
			 $("."+localId).hide();
			 $("#"+start).removeClass("active");
			}else
			{
				 $("."+localId).show();
				 $("#"+idClicked).addClass("active");
				
			}
		}
}


function defaultLoadFileViewForAdmin(maxClicked) {
	for (var start = 1; start <= maxClicked; start++) {
		var localId = "accordion" + start;
		if (start != 6) {
			$("." + localId).hide();
			$("#" + start).removeClass("active");
		} else {
			$("." + localId).show();
			$("#" + start).addClass("active");

		}
	}

	/* console.log("here i m"); */
}



function HandleNavigationBarLinkClicked(response) {
	/* console.log("clciked okkkedyyyy..."); */
	
	for (var size = 0; size < iDS.length; size++) {

		if (response != iDS[size]) {
			$("#" + iDS[size]).hide();
		} else {
			$("#loading").hide();
			$("#contain").show();
			$("#" + iDS[size]).show();
		}

	}

	console.log(response);
}

function modifiedClicked(data, idClicked, maxClicked) {
	$("#loading").show();
	$("#contain").hide();
	handleShowAndViewSideContent((parseInt(idClicked) + 1), maxClicked);
	var link = url + data;
	console.log(link);

	/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
	for (var size = 0; size < maxClicked; size++) {

		if (idClicked != size) {
			$("#" + iDS[size]).hide();
		} else {
			$("#loading").hide();
			$("#contain").show();
			$("#" + iDS[size]).show();
		}

	}
	//makeAjaxCall(link, "GET", "json", null, HandleNavigationBarLinkClicked)
}