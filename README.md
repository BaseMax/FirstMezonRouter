# First Mezon-Router

A easy-to-use and ready example to use PHP-based Mezon Router.

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

