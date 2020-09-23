# Symfony Boilerplate
Start a Symfony project easily (for beginers)

This is what you would need to init a new symfony project with the necessary bundles.

### Symfony

`symfony new my_project_name --full`

### API Plateform

`composer req api`

### Webpack

`composer require symfony/webpack-encore-bundle`

`yarn install`

In webpack.config.js :

`.enableSassLoader() .enableReactPreset()`

`yarn add @babel/preset-react --dev`

`yarn add react react-dom prop-types`

`yarn add sass-loader@^8.0.0 --dev`

And change "css" files extension and directory to "scss"

### VichUploader

`composer require vich/uploader-bundle`

### Liip Imagine

`composer require liip/imagine-bundle`

And add / remove filters in config/packages/liip_imagine.yaml

### Test

`composer require --dev symfony/phpunit-bridge`

### PHPStan

`composer require --dev phpstan/phpstan-symfony`

And add phpstan.neon (see phpstan doc or file in this repo)

### CSS Reset file
https://github.com/jgthms/minireset.css

## What's next ?

Now you can code !

Copy/paste the Makefile to ease your workflow

### Help : 
`make help`
