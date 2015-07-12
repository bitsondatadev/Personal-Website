	function chooseBrush(ext){
	
		ext = ext.toLowerCase();
	
		if(ext==="java"){
			return "java";
		}
		else if(ext==="sh"){
			return "bash";
		}
		else if(ext==="cpp"){
			return "cpp";
		}
		else if(ext==="cpp" || ext==="c" || ext==="h"){
			return "cpp";
		}
		else if(ext==="cs"){
			return "csharp";
		}
		else if(ext==="css"){
			return "css";
		}
		else if(ext==="js"){
			return "js";
		}
		else if(ext==="php"){
			return "php";
		}
		else if(ext==="py"){
			return "py";
		}
		else if(ext==="sql"){
			return "sql";
		}
		else if(ext==="vb"){
			return "vb";
		}
		else if(ext==="html" || ext==="xml" || ext ==="fxml"){
			return "xml";
		}
		else if(ext==="pdf"){
			return "pdf";
		}
		else if(ext==="doc" || ext==="xls" || ext==="ppt" 
		|| ext==="docx" || ext==="xlsx" || ext==="pptx"){
			return "office";
		}
		else if(ext==="jpg" || ext==="gif" || ext==="png" 
		|| ext==="bmp" || ext==="tif" || ext==="jpeg"
		|| ext==="tiff" || ext==="ico"){
			return "picture";
		}
		else if(ext==="exe" || ext==="msi" || ext==="dmg" 
		|| ext==="gz" || ext==="bin" || ext==="zip"
		|| ext==="7z" || ext==="tar" || ext==="jar"
		|| ext==="rar" || ext==="bz2" || ext==="iso"){
			return "binary";
		}
		else if(ext==="hnt"){
			return "binary";
		}
		else{
			return "text";
		}
	
	}
	
	//takes a div id (iD) and a directory (dir) that is relative to the www forlder "/var/www/" in our case
	function newFileTree(iD, dir) {


		$('#' + iD).fileTree({ root: "/var/www/" + dir, script: '/jqueryFileTree.php', folderEvent: 'click', expandSpeed: 750, collapseSpeed: 750, multiFolder: false }, function(file) {
			//slice off all but the file extension
			var brush = chooseBrush(file.slice(file.lastIndexOf(".") + 1));
			//slice off '/var/www'
			var fHandle = location.origin + file.slice(8);
			var filename = file.slice(file.lastIndexOf("/") + 1);
			if(brush === "office" || brush === "binary"){
				if (confirm("Are you sure you want to download " + filename + "?")) {
					window.open(location.origin + file.slice(8),'_self');
				}
			}
			else if(brush==="pdf"){
				if (confirm("Are you sure you want to download " + filename + "?")) {
					window.open(location.origin + file.slice(8),'_blank');
				}
			}
			else{
				var newFile = window.open(location.origin + "/admin/codeFormatter.php", file.slice(8), "width=700, height=800")
				newFile.onload = function()
				{
					if(brush == "picture"){
							newFile.document.write("<h1>" + filename + "</h1><img src=\"" + fHandle + "\" width = \"100%\"></img>");
							newFile.focus();
					}
					else{
						$.ajax({
							url: fHandle,
							async: false
						}).done(function(data){
							newFile.document.getElementById("content-wrap").innerHTML= "<h1>" + filename + "</h1><pre class=\"brush: " + brush + "\"  width=\"100%\">" + data + "</pre>";
							newFile.focus();
						});
					}
				}
			}
			
		});
	}
	
