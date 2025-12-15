define([], function() {
    return {
        init: function(keepaliveUrl, interval) {

            if (!keepaliveUrl || interval <= 0) {
                return;
            }

            /**
             * Sends a heartbeat ping to the server.
             * @returns {void}
             **/
            function sendHeartbeat() {
                // eslint-disable-next-line no-console
                console.log('Sending heartbeat to:', keepaliveUrl, 'at', new Date().toISOString());

                fetch(keepaliveUrl, {
                    method: 'POST',
                    //credentials: 'include',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    // eslint-disable-next-line no-console
                    console.debug('Heartbeat response status:', response.status);
                })
                .catch(err => {
                    // eslint-disable-next-line no-console
                    console.debug('Heartbeat request failed:', err);
                });
            }

            // Initial heartbeat after load.
            setTimeout(() => {
                sendHeartbeat();
                setInterval(sendHeartbeat, interval);
            }, interval);
        }
    };
});
