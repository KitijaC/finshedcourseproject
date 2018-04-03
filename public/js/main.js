// jQuery.noConflict();
 
// jQuery( document ).ready(function( $ ) {
//     // You can use the locally-scoped $ in here as an alias to jQuery.
//     $( "div" ).hide();
// });
 
// // The $ variable in the global scope has the prototype.js meaning.
// window.onload = function(){
//     var mainDiv = $( "main" );
// }


$(document).ready(function() {
	$(".fancybox-button").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			title	: { type : 'outside' },
			buttons	: {}
		}
	});
});


 $('#tabs').tabs();

function initMap() {
    // map options
    var options = {
      zoom: 13,
      center: { lat: 33.782582, lng: -118.132988 },
    };
  
    //pievieno mapi
    var map = new google.maps.Map(document.getElementById('map'), options);
  
    //atzīmē atrašanās vietu mapē
    var marker = new google.maps.Marker({
      position: { lat: 33.782582, lng: -118.132988 },
      map: map,
    });
  
  }


// $('#reg-form').submit(function(){
//     var errors = [];
//     $('.errors ul').html('');
//     $('.has-error').removeClass('has-error');
//     if ($('input[name="username"]').val() == '') {
//         errors.push('Please enter username');
//         $('input[name="username"]').addClass('has-error');
//     }
//     if ($('input[name="password"]').val() == '') {
//         errors.push('Please enter password');
//         $('input[name="password"]').addClass('has-error');
//     }
//     if ($('input[name="password"]').val().length < 8) {
//         errors.push('Password must be at least 8 symbols');
//         $('input[name="password"]').addClass('has-error');
//     }
//     if ($('input[name="password2"]').val() == '') {
//         errors.push('Please retype the password');
//         $('input[name="password2"]').addClass('has-error');
//     }
//     if ($('input[name="password2"]').val() != $('input[name="password"]').val()) {
//         errors.push('Passwords must match');
//         $('input[name="password"]').addClass('has-error');
//         $('input[name="password2"]').addClass('has-error');
//     }
//     if ($('input[name="first_name"]').val() == '') {
//         errors.push('Please enter first name');
//         $('input[name="first_name"]').addClass('has-error');
//     }
   
//     if (errors.length > 0) {
//         // handle errors
//         for (var index = 0; index < errors.length; index++) {
//             var element = errors[index];
//             $('.errors ul').append('<li>' + element + '</li>');
//         }
//         $('.errors').show();
//         return false;
//     }
// });

var app = new Vue({
    el: '#chat',
    data: {
        messages: [
        ],
        newMessageUsername: "",
        newMessageText: "",
    },
    created: function(){
        var that = this;
        $.getJSON('/chat/chat-messages', function(resp){
           for (var index = 0; index < resp.length; index++) {
                var element = resp[index];
                console.log(element);
                var newStuffToAdd = {
                    username: element.username, 
                    text: element.text,
                    date: element.created_at
            }            
            that.messages.push(newStuffToAdd);
            }

            })
          
        },

    methods: {
        sendMessage: function(){
            var newStuffToAdd = {
                username: this.newMessageUsername, // Peteris
                text: this.newMessageText, // some text
                date: new Date()
            };
            
            this.messages.push(newStuffToAdd);
            this.newMessageText = '';
            $.post('/chat/save-message', newStuffToAdd, function(res){
                console.log(res);
            });
        }
    }
});

