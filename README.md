# Introduction

You can use this small middleware if you can't or don't want to expose your aria2c app over firewall.

This PHP middleware will redirect request from webui-aria2 to localhost aria2c and respond with response that was returned from aria2c.

cURL is required for this to work.

This is supposed to be used with https://github.com/ziahamza/webui-aria2
It's possible it will work with other JS based UI's.

# Configure webui-aria2

Open Settings > Connection Settings, enter your web server host and port (not aria2c port), eg.:

Enter the host:
`mywebpage.com`

Enter the port:
`443`

Fill RPC path with location where you put jsonrpc.php file, eg.:

Enter the RPC path:
`/webui-aria2-middleware/jsonrpc.php`


Fill rest of options as you configured your aria2c app.

If you changed default port of aria2c or you running it in container you need to modify line 3 in jsonrpc.php file to correct value:
`"localhost:6800/jsonrpc"`
