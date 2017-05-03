var ListOfAllOrders = EXPORT_ListOfAllOrders;

(function(orders) {

    var STATUS = 
    {
        'NEW' : 1,
        'COOKING' : 2,
        'READY' : 3,
        'SERVED' : 4 
    };
//debugger;
    var new_notification_queue = []
    var ready_notification_queue = []
    var cooking_notification_queue = []


    for (var i = 0 ; i < orders.length ; i++ ) {

        if (orders[i].status == STATUS['NEW'] )
            new_notification_queue.push(orders[i]);
        if (orders[i].status == STATUS['COOKING'] )
            cooking_notification_queue.push(orders[i]);
        if (orders[i].status == STATUS['READY'] )
            ready_notification_queue.push(orders[i]);

    }


    var socket = io.connect('http://localhost:8890');

    var el_new_Q = '#new-notification-queue';
    var el_ready_Q = '#ready-notification-queue';
    var el_cooking_Q = '#cooking-notification-queue';
    
    var severity = {
      'E': '.alert-danger',  
      'S': '.alert-success',  
      'W': '.alert-warning',  
    } ;
    


    socket.on('NotifyCook', function(data, channel) {
        new_notification_queue.push(JSON.parse(data));

        redraw();
    });

    function queue_html_for_new(queue, label) {
        var html = '';
        if (queue.length < 1) { 
            return  "<li>queue is empty</li>";
        }   

        for (var i = 0 ; i < queue.length; i++) {
            

            html += '<li class="mini-eta-form">' +  queue[i].uuid + 
                    '<input type="text" placeholder="Min" />' +
                    '<button type="button" class="btn btn-sm btn-primary update-eta" data-status="2" data-id="'+queue[i].id+'" data-index="'+i+'">ETA</button>' +
                    ' </li>';
        }
        return html;
        
        
    }

    function queue_html_for_cooking(queue, label) {
        var html = '';
        if (queue.length < 1) { 
            return  "<li>queue is empty</li>";
        }   

        for (var i = 0 ; i < queue.length; i++) {
            

            html += '<li class="mini-eta-form">' +  queue[i].uuid + 
                    '<button type="button" class="btn btn-sm btn-primary update-eta" data-status="3" data-id="'+queue[i].id+'" data-index="'+i+'">Serve</button>' +
                    ' </li>';
        }
        return html;
    }

    function queue_html_for_ready(queue, label) {
        var html = '';
        if (queue.length < 1) { 
            return  "<li>queue is empty</li>";
        }   
        //debugger;
        for (var i = 0 ; i < queue.length; i++) {
            

            html += '<li class="mini-eta-form">' +  queue[i].uuid + 
                    '<button type="button" class="btn btn-sm btn-primary update-eta" data-status="4" data-id="'+queue[i].id+'" data-index="'+i+'">Served</button>' +
                    ' </li>';
        }
        return html;
        
        
    }

    function addMin(id, index, status, min) {

        var data = {};

        data.id = id;
        data.min = min;
        data.status = status;
        data._token = $('input[type=hidden][name=_token]').val();

        var jqxhr = $.post( "/orders/status", data)
          .done(function(order) {
            
            if (data.status == STATUS['COOKING']) {
                cooking_notification_queue.push(new_notification_queue[index])
                new_notification_queue.splice(index, 1);

            } else if (data.status == STATUS['READY']) {
                ready_notification_queue.push(cooking_notification_queue[index])
                cooking_notification_queue.splice(index, 1);

            } else if (data.status == STATUS['SERVED']) {
                ready_notification_queue.splice(index, 1);

            }
            redraw();
          })
          .fail(function() {
            //$(notify).html('Something went wrong, please try again.');
          })
          .always(function() {
              
          });
          

    }

    function redraw() {
        $(el_new_Q).find('ul').html(queue_html_for_new(new_notification_queue, 'New'))
        $(el_cooking_Q).find('ul').html(queue_html_for_cooking(cooking_notification_queue, 'New'))
        $(el_ready_Q).find('ul').html(queue_html_for_ready(ready_notification_queue, 'New'))


    }

    redraw();











    $('.notification-header').on('click', '.update-eta', function() {
        var id = $(this).data('id')
        var index = $(this).data('index')
        var status = $(this).data('status')
        var input = $(this).parent().find('input[type=text]').val();

        addMin(id, index, status, input);
    })


})(ListOfAllOrders);

