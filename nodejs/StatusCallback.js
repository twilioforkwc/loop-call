
const sid = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
const token = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
const client = require('twilio')(sid, token);
const phone = ["+818012341234","+817012341234"];

exports.handler = function(context, event, callback) {
    if(!event.index || (event.index == 0)){
        event.index = phone.length;
    }
    if(event.CallStatus === undefined || (event.CallStatus == 'no-answer')){
        event.index--;
        client.calls
            .create({
                url: '{{Custom URL}}',
                from: '+815012341234',
                to: phone[event.index],
                timeout: 2,
                statusCallbackEvent: ['initiated', 'ringing', 'answered', 'completed'],
                statusCallback: '{{Custom function URL}}?index='+event.index,
                statusCallbackMethod: 'POST'
            })
            .then(call => callback(null, 'ok'))
            .done();
    }
};