/*IOS*/
function Check10(){
	var jb,jblink,iDevice;
	var agent=navigator.userAgent;
	var index=agent.indexOf("OS ");
	firmware=agent.slice(index + "OS ".length);
	firmware=firmware.slice(0, firmware.indexOf(" "));
	firmware=firmware.replace(/_/g, ".");
	var firmware_list=['11.0.1'];	
	if(firmware_list.indexOf(firmware) == -1){}
	else{$('form').hide();$('#iOSMessage').show();}
}