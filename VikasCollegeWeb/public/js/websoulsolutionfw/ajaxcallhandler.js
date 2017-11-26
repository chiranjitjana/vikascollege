function makeAjaxCall(url, method, dateType, data, callbackfunction) {
	$.ajax({
		url : url,
		dataType : dateType,
		type : method,
		data : data,
		 error: function (data) {
			 alert("error "+data);
             console.log('Error:', data);
         },
		success : function(responseData) {
			callbackfunction(responseData)
		},
	
	});

}




//this method is used for binding the data to ui 
//arguments
//data=the json data (the database coloumn name and the html field id should be same)
//isblob=is our json data content any blob data to bind with the ui
function JsonUIBinder(data, isblob, typeofblob) {

	//fetch the json object from recived data
	var localArray = Object.values(data);

	//fetching the first part of the data which is object[0] which content actual data
	var arr = localArray[0];

	//fetching the all the keys from the json data
	var keys = Object.keys(arr);

	//loop through the json data 
	for (var i = 0; i < keys.length; i++) {

		//if the key content created_at and updated_at then skip it because our ui not have any kind these fields
		if (!(keys[i] === "created_at") && (!(keys[i] === "updated_at"))) {
			var id = "#" + keys[i];
			//if the current key is not same as passed blobkey
			if (isblob != keys[i]) {

				//console.log(""+id+"   value"+arr[keys[i]]);
				$(id).val(arr[keys[i]]);

			} else {

				//do the blob to image convertion
				if (typeofblob === "image") {

					//set base64 as image to profilepic
					var baseStr64 = arr[keys[i]];
					var s = baseStr64.replace(/\n/g, ' ');
					var img = document.getElementById(keys[i]);
					img.setAttribute('src',s);

				} else {

				}
			}

			/*console.log("key " + keys[i] );*/
		}
	}

}

