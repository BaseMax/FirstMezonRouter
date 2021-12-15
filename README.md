# First Mezon-Router

A easy-to-use and ready example to use PHP-based Mezon Router.

## Why?

It's fastest PHP router!

## Reasons to use

**The mezon/router is:**

- 25 times faster than klein/klein router
- 7 to 15 times faster than Symfony router
- 30 to 50 times faster than Laravel router
- 1.5 times faster than nikic/fast-route

## Using

```
$router->callRoute('/');
$router->callRoute('/100-test.html');
```

#### Output

`/`
```
index
Hello, World!
```

`/100-test.html`
```
100-test.html
Array
(
    [digit] => 100
    [name] => test
)
```

