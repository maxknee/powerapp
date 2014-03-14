# grunt-php-analyzer

> Grunt interface to php-analyzer

## Getting Started
This plugin requires Grunt `~0.4.1`

If you haven't used [Grunt](http://gruntjs.com/) before, be sure to check out the [Getting Started](http://gruntjs.com/getting-started) guide, as it explains how to create a [Gruntfile](http://gruntjs.com/sample-gruntfile) as well as install and use Grunt plugins. Once you're familiar with that process, you may install this plugin with this command:

```shell
npm install grunt-php-analyzer --save-dev
```

One the plugin has been installed, it may be enabled inside your Gruntfile with this line of JavaScript:

```js
grunt.loadNpmTasks('grunt-php-analyzer');
```

## The "php_analyzer" task

### Overview
In your project's Gruntfile, add a section named `php_analyzer` to the data object passed into `grunt.initConfig()`.

```js
grunt.initConfig({
  php_analyzer: {
    options: {
      bin: 'path/to/phpalizer',
    },
    your_target: {
      dir: 'directory/to/analyze',
      command: 'run', /** also possible to use a target to automatically build the db/run any phpalizer command **/
    },
  },
})
```

## Release History
0.1.0 2013/04/23

## Thanks
To the grunt-phpcs plugin, which I used to figure out how to write this plugin (pretty much 1:1).