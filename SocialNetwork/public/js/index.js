var inputSend = document.getElementById("input-send");
var iconSendAdd = document.getElementById("button-send-icon+");
var iconSendRemove = document.getElementById("button-send-icon-");

// $("#button-send").click(function(event) { event.stopPropagation(); });

iconSendAdd.onclick = function(){
	event.preventDefault();
	// alert("da thanh cong");
	inputSend.style.display = "inline-block";
	iconSendAdd.style.display = "none";
	iconSendRemove.style.display = "block";
}
iconSendRemove.onclick = function(){
	event.preventDefault();
	// alert("da thanh cong");
	inputSend.style.display = "none";
	iconSendAdd.style.display = "block";
	iconSendRemove.style.display = "none";
}