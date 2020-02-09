---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_15f14bf9943a608eb1d7bc29287924df -->
## api/distribute-revenue
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/distribute-revenue" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/distribute-revenue"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "errors": {
        "revenue": [
            "The revenue field is required."
        ],
        "customerId": [
            "The customer id field is required."
        ],
        "bookingNumber": [
            "The booking number field is required."
        ]
    }
}
```

### HTTP Request
`GET api/distribute-revenue`


<!-- END_15f14bf9943a608eb1d7bc29287924df -->

<!-- START_0b4d9deecf1cbb257851a0719252b06a -->
## api/most-attracted-platform
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/most-attracted-platform" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/most-attracted-platform"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "platform": "trivago",
    "count": 2
}
```

### HTTP Request
`GET api/most-attracted-platform`


<!-- END_0b4d9deecf1cbb257851a0719252b06a -->

<!-- START_2a34b6fdf6202927a8a1e06493fd5fed -->
## api/platform-revenue
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/platform-revenue" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/platform-revenue"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "errors": {
        "platform": [
            "The platform field is required."
        ]
    }
}
```

### HTTP Request
`GET api/platform-revenue`


<!-- END_2a34b6fdf6202927a8a1e06493fd5fed -->

<!-- START_61b567769e37a80479915e515ceece0a -->
## api/platform-conversions
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/platform-conversions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/platform-conversions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "errors": {
        "platform": [
            "The platform field is required."
        ]
    }
}
```

### HTTP Request
`GET api/platform-conversions`


<!-- END_61b567769e37a80479915e515ceece0a -->


