Granular Interfaces as Subsets of  PSR-7
========================================

For cases when PSR-7 is too much. And only 
a limited subset of the implemented methods
is needed, possible or desired.

As a beginning only header related methods of the message are covered.

## Definition in terms of [RFC-7230](https://tools.ietf.org/html/rfc7230#section-3)

RFC-7230 as well as [RFC-2616](https://tools.ietf.org/html/rfc2616#section-4.1) defines the HTTP message as:
```
HTTP-message   = start-line
                 *( header-field CRLF )
                 CRLF
                 [ message-body ]
```

while the start-lines are defined as:

```
start-line     = request-line / status-line
request-line   = method SP request-target SP HTTP-version CRLF
status-line    = HTTP-version SP status-code SP reason-phrase CRLF
```

This packages now is referring to `header-field`·s as **Headers** and to the aggregation of `start-line` and `header-field` as **Head**. The `message-body` will be the **Body** and everything together the **Message**.
