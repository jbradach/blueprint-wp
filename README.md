# blueprint-wp

## Components

- [X] [Sage Starter Theme](https://github.com/roots/sage)
- [X] [Soil Plugin](https://github.com/roots/soil)
- [X] [Trellis](https://github.com/roots/trellis)
- [X] [Bedrock](https://github.com/roots/bedrock)
- [X] [Bootstrap 3 for Sass](https://github.com/twbs/bootstrap-sass)
- [X] [Material Design for Bootstrap](https://github.com/FezVrasta/bootstrap-material-design)
- [ ] [Let's Encrypt](https://github.com/letsencrypt/letsencrypt)


## Basics

```console
$ npm -g install bower gulp
$ npm install
$ bower install
$ gulp
```

## More
```console
$ gulp watch
$ gulp style
# etc. check out the gulpfile
$ gulp --production
```

## Rename blueprint
```console
$ grep -lr --exclude-dir=".git" -e "blueprint" . | xargs sed -i "s/blueprint/something-else/g"
```