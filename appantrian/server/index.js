var server = require("ws").Server;
var s = new server({ port: 5001 });

s.on("connection", function (ws) {
  ws.on("message", function (message) {
    console.log("Received Message:" + message);

    s.clients.forEach(function e(client) {
      if (client != ws) client.send(message);
    });

    // ws.send("From server:" + message);
  });
  ws.on("close", function () {
    console.log("i lost the client");
  });
  console.log("one more client connected");
});
