# DEPRECATED

This package `brnc/http-message-subset` is deprecated as https://github.com/ebln/http-message-subset is now fully* PSR-7 compliant.
They weren't very useful, either. PSR-7 isn't implementing these interfaces, so that PSR-7-compliant objects could not fulfil the interfaces despite implementing all the methods.

\* `http-message-subset` being an adapter to Symfony1 classes cannot fulfil PSR-7's immutability requirement

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

This packages now is referring to
* `header-field`·s as **Headers**
* Aggregation of `start-line` and `header-field` as **Head**
* `header-field`·s and the `HTTP-version` as **CommonHead**
* The `message-body` will be the **Body** 
* everything together the **Message**
