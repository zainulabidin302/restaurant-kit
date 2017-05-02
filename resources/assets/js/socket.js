(function() {
    var socket = io.connect('http://localhost:8890');

    var el_new_Q = '#new-notification-queue';
    var el_ready_Q = '#ready-notification-queue';
    var el_cooking_Q = '#cooking-notification-queue';
    
    var severity = {
      'E': '.alert-danger',  
      'S': '.alert-success',  
      'W': '.alert-warning',  
    } ;
    
    var new_notification_queue = []
    var ready_notification_queue = []
    var cooking_notification_queue = []


    socket.on('NotifyCook', function(data, channel) {
        new_notification_queue.push(JSON.parse(data));

        redraw();
    });

    function queue_html(queue, label) {
        var html = '';
        if (queue.length < 1) { 
            return  "<li>queue is empty</li>";
        }   

        for (var i = 0 ; i < queue.length; i++) {
            html += '<li>' + 'Order # ' + queue[i].uuid + '</li>';
        }
        return html;
        
        
    }

    function redraw() {
        $(el_new_Q).find('ul').html(queue_html(new_notification_queue, 'New'))
        $(el_cooking_Q).find('ul').html(queue_html(cooking_notification_queue, 'New'))
        $(el_ready_Q).find('ul').html(queue_html(ready_notification_queue, 'New'))


    }

    redraw();
})();
