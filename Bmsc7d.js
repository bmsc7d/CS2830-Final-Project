function getPictures() {
    
        var xmlHttp = new XMLHttpRequest();
		
		xmlHttp.onload = function() {
			if (xmlHttp.status == 200) {
				
                var xmlDoc = xmlHttp.responseXML;
                
				var output = '';
                
                var output2 = '';
                
                var output3 = '';
                
                var photoTitles = xmlDoc.getElementsByTagName('title');
                
                var RockyMountainObj = document.getElementById('RockyMountainObj');
				
                output = photoTitles[0].childNodes[0].nodeValue;
                
                var ArchesObj = document.getElementById('ArchesObj');
                
                output2 = photoTitles[1].childNodes[0].nodeValue;
                
                var SandDunesObj = document.getElementById('SandDunesObj');
                
                output3 = photoTitles[2].childNodes[0].nodeValue;
                
				RockyMountainObj.innerHTML = output;
				
                ArchesObj.innerHTML = output2;
                
                SandDunesObj.innerHTML = output3;
                
			}
		}
		
		xmlHttp.open("GET", "pictures.xml", true);
		xmlHttp.send();
    
}

function doubleClickHTML(){
    
    document.body.style.background = "orange";
    
}