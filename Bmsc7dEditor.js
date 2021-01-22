function getTextarea() {
    var textareaObject = document.getElementById('htmlText');
    
    console.dir(textareaObject);
    console.log(textareaObject.value);
    
    var preview = document.getElementById('preview').innerHTML = textareaObject.value;
    
    
    
}

function setTextarea() {
    var textareaObject = document.getElementById('styleId');
				
    console.dir(textareaObject.value);
    
    
    if (!textareaObject.innerHTML){
        textareaObject.innerHTML = document.getElementById("cssText").value;
        document.getElementById("cssButton").style.backgroundColor = "pink";
    }
    else{
        textareaObject.innerHTML = null;
        document.getElementById("cssButton").style.backgroundColor = null;
    }
                
}

function clearTextarea() {
    var htmltextareaObject = document.getElementById('htmlText');
				
    console.dir(htmltextareaObject);
                
    htmltextareaObject.value = null;
    
    var csstextareaObjext = document.getElementById('cssText');
    
    console.dir(csstextareaObjext);
    
    csstextareaObjext.value = null;
    
    var preview = document.getElementById('preview');
    
    preview.innerHTML = null;
}

function titleChange() {
    var newTitle = document.getElementById('title');
    
    newTitle = window.prompt("This page Says", "New Title");
    
   console.dir(newTitle); 
    
    console.log(newTitle);
    
    document.getElementById('title').innerHTML = newTitle;
    
    
}

function doubleClickHTML(){
//    document.getElementById("cssText").innerHTML = "h2 {\n\tcolor: #FF6F61; \n\ttext-align: center;\n}" + "\n\n" + "p {\n\tfont-family: helvetica;\n\tfont-size: 20px;\n\tborder: 2px solid red;\n\tborder radius: 12px;\n}";
    
    var textareaObject = document.getElementById('htmlText');
    
    textareaObject.value= "<h2> Welcome to my text editor!</h2>" + "\n\n" + "<p>You can test and create your own HTML and CSS in this text editor</p>" ;
    
}

function doubleClickCSS(){
//    document.getElementById("htmlText").innerHTML = "<h2> Welcome to my text editor!</h2>" + "\n\n" + "<p>You can test and create your own HTML and CSS in this text editor</p>";
    
    var textareaObject = document.getElementById('cssText');
    
    textareaObject.value= "h2 {\n\tcolor: #FF6F61; \n\ttext-align: center;\n}" + "\n\n" + "p {\n\tfont-family: helvetica;\n\tfont-size: 20px;\n\tborder: 2px solid red;\n\tborder radius: 12px;\n}";
}