/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
function  checkForNew () {
    console.log('Checking for new messages');
    jQuery.get("getMessages.php", function (data) {
        self.postMessage('received: ' + data);
    });
    setTimeout(checkForNew,2000);
}

self.addEventListener('message', function(e) {
        checkForNew();
        console.log('OK, message received');
	var data = e.data;
        var message = '<div class="message panel panel-success">'+
                           '<div class="panel-heading">'+
                             ' <span class="who"><span class="correct glyphicon glyphicon-user"></span> who</span>'+
                              '<span class="date"><span class="correct glyphicon glyphicon-time"></span> msgdate</span>  '+
                           '</div>'+
                           '<div class="panel-body">message</div>'+
                           '</div>';
	self.postMessage('received: ' + message);
}, false);

});